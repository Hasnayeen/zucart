<?php

namespace App\Models;

use App\Casts\Dimensions;
use App\Casts\Weight;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $casts = [
        'dimensions' => Dimensions::class,
        'weight' => Weight::class,
    ];

    public function uniqueIds(): array
    {
        return ['id'];
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
