<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Committee extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
    ];

    public function councillors(): BelongsToMany
    {
        return $this->belongsToMany(Councillor::class);
    }
}
