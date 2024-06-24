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
        'content'
    ];

    public function councillors(): BelongsToMany
    {
        return $this->belongsToMany(Councillor::class);
    }

    /**
     * @description: Specify default search parameters - else  get 404
     * @default id
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
