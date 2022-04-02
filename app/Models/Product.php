<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillale = [
        'name',
        'description',
        'short_description',
        'price',
        'thumbnail_url',
        'quantity',
        'status',
        'category_id',
        

    ];
    /**
     * Get the category that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function categorynn(){
        return $this->belongsToMany(Category::class,'category_product','product_id','category_id');
    }
    public function newsProducts(){
        return $this->belongsToMany(News::class,'news_product','product_id','news_id');
    }
}
