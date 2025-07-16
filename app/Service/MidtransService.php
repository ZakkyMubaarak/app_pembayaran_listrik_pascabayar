<?php

namespace App\Service;

use Midtrans\Snap;
use Midtrans\Config;

class MidtransService
{
    /**
     * Create a new class instance.
     */

    public function __construct()
    {
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function createTransaction(array $params)
    {
        return Snap::getSnapToken($params);
    }
}
