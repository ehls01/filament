<?php

namespace App\Models;

// Suggested code may be subject to a license. Learn more: ~LicenseLog:2250409737.
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Owner extends Model
{
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }
}
