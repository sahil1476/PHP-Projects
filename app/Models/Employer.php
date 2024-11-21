<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;
    public function user(): BelongsTo{
        return $this->belongsTo(User::class); // assuming User model has 'id' as primary key and 'employer_id' as foreign key
    }
    public function jobs(): HasMany{
        return $this->hasMany(Job::class);
    }
}
