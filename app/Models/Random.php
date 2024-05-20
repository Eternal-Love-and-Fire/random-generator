<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    use HasFactory;

    public static function generate(): Random
    {
        return self::create([
            'number' => random_int(PHP_INT_MIN, PHP_INT_MAX)
        ]);
    }
    public static function retrieve(int $id): ?Random
    {
        return self::find($id);
    }
}
