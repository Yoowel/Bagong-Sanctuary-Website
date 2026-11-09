<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductColor extends Model
{
    protected $fillable = [
        'product_id',
        'color_name',
        'image_path',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}