<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class MoneyCast implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes): float
    {
        // Mengubah integer yang disimpan di database menjadi float.
        return round(floatval($value) / 100, 2);
    }

    public function set($model, string $key, $value, array $attributes): int
    {
        // Mengubah float menjadi integer untuk penyimpanan.
        return round(floatval($value) * 100);
    }
}
