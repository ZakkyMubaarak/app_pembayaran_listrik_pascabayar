<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Tarif;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Pelanggan;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PelangganResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PelangganResource\RelationManagers;

class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Master Data';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nomor_kwh')
                    ->label('Nomor KWH')
                    ->unique('pelanggan', 'nomor_kwh', ignoreRecord: true)
                    ->required()
                    ->readOnly()
                    ->default(function () {
                        return $nomor_kwh = 'PLN' . now()->format('my') . '-' . strtoupper(Str::random(4) . '-' . strtoupper(Str::random(4)));
                    }),
                TextInput::make('nama')
                    ->label('Nama')
                    ->placeholder('Nama Pelanggan')
                    ->required(),
                TextInput::make('no_telp')
                    ->label('Telepon')
                    ->maxLength(15),
                Textarea::make('alamat')
                    ->string(),
                Select::make('tarif_id')
                    ->label('Daya')
                    ->reactive()
                    ->relationship('tarif', 'daya')
                    ->afterStateUpdated(function ($state, Set $set) {
                        $tarif = Tarif::find($state);
                        $set('tarif_kwh', $tarif->tarif_per_kwh);
                    }),
                TextInput::make('tarif_kwh')
                    ->label('Tarif per KWH')
                    ->reactive()
                    ->prefix('Rp')
                    ->numeric()
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_kwh')
                    ->sortable()
                    ->searchable()
                    ->copyable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('no_telp')
                    ->searchable(),
                TextColumn::make('alamat'),
                TextColumn::make('tarif.daya')
                    ->sortable()
                    ->label('Daya (VA)'),
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
            'index' => Pages\ListPelanggans::route('/'),
            'create' => Pages\CreatePelanggan::route('/create'),
            'edit' => Pages\EditPelanggan::route('/{record}/edit'),
        ];
    }
}
