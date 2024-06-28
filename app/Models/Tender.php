<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tender extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'title',
        'amount',
        'opening_date',
        'closing_date',
        'attachment',
        'content',
        'tender_category_id',

    ];

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(TenderCategory::class);
    }
}
