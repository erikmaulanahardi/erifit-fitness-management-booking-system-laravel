<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalTrainer extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'specialization',
        'certification',
        'is_active',
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
