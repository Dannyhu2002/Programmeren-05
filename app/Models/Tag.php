<?php

namespace App\Models;

use App\FoodItem;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function foodItems() {
        return $this->belongsToMany(FoodItem::class, 'food_item_tag');
    }
}
