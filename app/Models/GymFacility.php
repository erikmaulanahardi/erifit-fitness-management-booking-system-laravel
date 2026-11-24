<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymFacility extends Model
{
    protected $fillable = [
        'facility_name',
        'facility_description',
        'is_active',
    ];

    protected function cast(): array {
        return [
            'is_active' => 'boolean'
        ];
    }
}
