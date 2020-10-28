<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function likeable()
    {
        return $this->morphTo();
    }
}





//{
//    public function user()
//{
//    return $this->belongsTo('App\User');
//}
//
//    public function foodItem()
//    {
//        return $this->belongsTo('App\FoodItem');
//    }
//}
