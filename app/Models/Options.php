<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $fillable = [
        'product_id', 'option_name'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
