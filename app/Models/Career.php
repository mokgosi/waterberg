<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'offer',
        'file_name',
        'contract_type_id',
    ];

    public function contractType(): BelongsTo
    {
        return $this->belongsTo(ContractType::class);
    }

}
