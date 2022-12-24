<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'adresse_delivry',
        'phone',
        'quantity',
        'user_id',
        'code',
        'amount',
    ];

    public function user() {
        return $this->belongsTo(User::class);
     }

    public function products() {
        return $this->belongsToMany(Product::class,'orders_produtcs','order_id','product_id')
        ->withPivot('quantity','amount')
        ->withTimestamps();
     }




}
