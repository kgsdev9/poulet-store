<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'slug',
        'statut',
        'descritpion',
        'price',
        'img_premiere_plan',
        'img_multiple',
        'popular',
        'tendance',
        'quantity',
        'category_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function oders() {
        return $this->belongsToMany(Order::class,'orders_produtcs','product_id','order_id')
        ->withPivot('quantity','amount')
        ->withTimestamps();
     }

     public function commets() {
        return $this->hasMany(Comment::class);
     }

     public function images() {
        return $this->hasMany(Image::class);
     }
}

