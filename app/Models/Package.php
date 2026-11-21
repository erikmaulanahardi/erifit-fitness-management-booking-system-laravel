<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'package_name',
        'package_type',
        'session_quota',
        'duration_days',
        'package_price',
        'description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'package_price' => 'decimal:2',
            'session_quota' => 'integer',
            'duration_days' => 'integer',
            'is_active' => 'boolean',
        ];
    }
}
