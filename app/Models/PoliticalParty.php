<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticalParty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function councillors(): HasMany
    {
        return $this->hasMany(Councillor::class);
    }
}
