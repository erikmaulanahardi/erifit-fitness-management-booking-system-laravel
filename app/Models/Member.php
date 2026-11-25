<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'date_of_birth',
        'body_weight',
        'body_height',
        'body_fat_percentage',
        'is_active',
    ];

    protected $appends = [
        'bmi',
        'ffmi',
    ];

    public function getBmiAttribute(): ?float {
        if (! $this->body_weight || ! $this->body_height) {
            return null;
        }

        $heightInMeters = $this->body_height/100;

        $bmi = round($this->body_weight/$heightInMeters ** 2, 2);

        return $bmi;
    }
    public function getFfmiAttribute(): ?float {
       if (! $this->body_weight || ! $this->body_height || ! $this->body_fat_percentage) {
            return null;
       } 

       $heightInMeters = $this->body_height/100;
       $fatFreeMass = $this->body_weight * (1 - $this->body_fat_percentage/100);
       $basicFfmi = $fatFreeMass / ($heightInMeters ** 2);
       $normalizedFfmi = round($basicFfmi + 6.3 * (1.8 - $heightInMeters), 2);

       return $normalizedFfmi;
    }

    protected function cast(): array {
        return [
            'date_of_birth' => 'date',
            'body_weight' => 'decimal:2',
            'body_height' => 'decimal:2',
            'body_fat_percentage' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
