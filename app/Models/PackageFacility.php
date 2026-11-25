<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PackageFacility extends Model
{
    protected $fillable = [
        'package_id',
        'facility_id'
    ];

    public function gymFacility(): BelongsTo {
        return $this->belongsTo(GymFacility::class, 'facility_id');
    }
    public function package(): BelongsTo {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
