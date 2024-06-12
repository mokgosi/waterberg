<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContractType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function careers(): HasMany
    {
        return $this->hasMany(Career::class);
    }
}
