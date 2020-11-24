<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    public $timestamps = false;

    protected $table = "prices";
    protected $fillable = ['label_package','real_price','discount_price','total_users','features','is_best_seller'];

    protected $maps = [
        'label_package' => 'label',
        'real_price' => 'price',
        'discount_price' => 'discountPrice',
        'total_users' => 'totalUsers',
        'features' => 'features',
        'is_best_seller' => 'isBestSeller'
    ];

}
