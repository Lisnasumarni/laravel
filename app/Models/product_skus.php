<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_skus extends Model
{
    use HasFactory;
    protected $table = 'product_skus';
    protected $fillable = [
        'product_id', 'price', 'sku'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
