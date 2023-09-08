<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleImage extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'image',
        'product_id'
    ];

    public function ProductImg()
    {
        return $this->belongsTo(Product::class);
    }
}
