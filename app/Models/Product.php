<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name'
    ];
    public function options()
    {
        return $this->hasMany(Options::class);
    }
    public function product_skus()
    {
        return $this->hasMany(product_skus::class);
    }
    public function sku_values()
    {
        return $this->hasMany(product_skus::class);
    }
}
