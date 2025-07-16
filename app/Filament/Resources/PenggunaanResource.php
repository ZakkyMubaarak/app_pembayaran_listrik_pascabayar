<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Pelanggan;
use App\Models\Penggunaan;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\Layout\Grid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PenggunaanResource\Pages;
use App\Filament\Resources\PenggunaanResource\RelationManagers;
use Illuminate\Support\Carbon;

class PenggunaanResource extends Resource
{
    protected static ?string $model = Penggunaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Penggunaan')
                    ->schema([
                        Select::make('pelanggan_id')
                            ->label('Pelanggan')
                            ->relationship('pelanggan', 'nama')
                            ->searchable()
                            ->preload()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                $pelanggan = Pelanggan::with('tarif')->whereId($state)->first();

                                if ($pelanggan) {
                                    $set('tarif_per_kwh', $pelanggan->tarif->tarif_per_kwh);
                                }
                            })
                            ->required(),


                        Select::make('bulan')
                            ->label('Bulan')
                            ->options([
                                1 => 'Januari',
                                2 => 'Februari',
                                3 => 'Maret',
                                4 => 'April',
                                5 => 'Mei',
                                6 => 'Juni',
                                7 => 'Juli',
                                8 => 'Agustus',
                                9 => 'September',
                                10 => 'Oktober',
                                11 => 'November',
                                12 => 'Desember',
                            ])
                            ->required(),
                        TextInput::make('tahun')
                            ->numeric()
                            ->default(now()->year)
                            ->required(),

                        TextInput::make('meter_awal')
                            ->numeric()
                            ->live(onBlur: true)
                            ->required(),

                        TextInput::make('meter_akhir')
                            ->numeric()
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                $meter_awal = $get('meter_awal');
                                $tarif = $get('tarif_per_kwh');
                                if ($meter_awal) {
                                    $jumlah_meter = intval($state) - intval($meter_awal);

                                    $set('jumlah_meter', $jumlah_meter);
                                    $set('jumlah_tagihan',  $tarif * $jumlah_meter);
                                }
                            })
                            ->required(),
                        TextInput::make('tarif_per_kwh')
                            ->label('Tarif per kWh')
                            ->numeric()
                            ->readOnly()
                            ->prefix('Rp. ')
                            ->reactive(),
                        TextInput::make('jumlah_meter')
                            ->readOnly()
                            ->numeric()
                            // ->afterStateUpdated(function ($state, Get $get, Set $set) {
                            //     $tarif = $get('tarif_per_kwh');
                            //     $set('jumlah_tagihan', intval($tarif) * intval($state));
                            // })
                            ->reactive(),

                        TextInput::make('jumlah_tagihan')
                            ->readOnly()
                            ->numeric()
                            ->reactive()
                            ->prefix('Rp')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pelanggan.nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('bulan')
                    ->sortable()
                    ->formatStateUsing(fn($state) => Carbon::create()->month($state)->monthName),
                TextColumn::make('tahun')
                    ->sortable(),
                TextColumn::make('meter_awal'),
                TextColumn::make('meter_akhir'),
                TextColumn::make('tarif_per_kwh')
                    ->sortable()
                    ->label('Tarif Per KWH')
                    ->formatStateUsing(fn($state) => 'Rp ' . $state),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenggunaans::route('/'),
            'create' => Pages\CreatePenggunaan::route('/create'),
            'edit' => Pages\EditPenggunaan::route('/{record}/edit'),
        ];
    }
}
