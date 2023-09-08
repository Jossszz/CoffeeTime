<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['category_id', 'name', 'description', 'price', 'image_path'];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
