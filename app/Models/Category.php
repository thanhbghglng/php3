<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillale=[
        'name',
        'description',
        'status',
        'slug'
    ];
    public function products(){
        // truyen vao khoa ngoai va khoa chinh 
        return $this->hasMany(Product::class,'category_id','id');
    }
    public function productsnn(){
        return $this->belongsToMany(Product::class,'category_product','category_id','product_id');
    }
    /**
     * Get all of the news for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
