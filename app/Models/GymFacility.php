<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GymFacility extends Model
{
    protected $fillable = [
        'facility_name',
        'facility_description',
        'is_active',
    ];

    protected function casts(): array {
        return [
            'is_active' => 'boolean'
        ];
    }

    public function package(): BelongsToMany {
        return $this->belongsToMany(Package::class, 'package_facilites', 'package_id', 'facility_id')->withTimestamps();
    }
    public function packageFacility(): HasMany {
        return $this->hasMany(PackageFacility::class);
    }
}
