<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function gymFacility(): BelongsToMany {
        return $this->belongsToMany(GymFacility::class, 'package_facilities', 'package_id', 'facility_id')->withTimestamps();
    }

    public function packageFacility(): HasMany {
        return $this->hasMany(PackageFacility::class, 'package_id');
    }
}
