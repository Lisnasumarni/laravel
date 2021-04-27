<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sku_values extends Model
{
    use HasFactory;
    protected $table = 'sku_values';
    protected $fillable = [
        'product_id', 'sku_id', 'option_id'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function options()
    {
        return $this->hasMany(Options::class);
    }
    public function product_skus()
    {
        return $this->hasMany(product_skus::class);
    }
}
