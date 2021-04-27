<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option_values extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'option_values';
    protected $fillable = [
        'product_id', 'option_id', 'value_id' . 'value_name'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function options()
    {
        return $this->hasMany(Options::class);
    }
    public function sku_values()
    {
        return $this->hasMany(sku_values::class);
    }
}
