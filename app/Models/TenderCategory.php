<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenderCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function tenders(): HasMany
    {
        return $this->hasMany(Tender::class);
    }
}
