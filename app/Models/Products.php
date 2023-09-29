<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name' , 'description' , 'image_url' ,
        'category' , 'resolution' , 'file_type',
        'status',
    ];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'category', 'id');
    }
}
