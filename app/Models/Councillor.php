<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Councillor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'avatar',
        'slug',
        'about',
        'active',
        'political_party_id',
        'portfolio_id',
    ];

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function politicalParty(): BelongsTo
    {
        return $this->belongsTo(PoliticalParty::class);
    }

    public function committees(): BelongsToMany
    {
        return $this->belongsToMany(Committee::class);
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

    public function getFullNameAttribute() // notice that the attribute name is in CamelCase.
    {
        return Str::title($this->first_name) . ' ' . Str::title($this->last_name);
    }

    public function getInitialsAttribute() // notice that the attribute name is in CamelCase.
    {
        return Str::title(Str::substr($this->first_name,0,1)) . '' . Str::title(Str::substr($this->last_name,0,1));
    }
}
