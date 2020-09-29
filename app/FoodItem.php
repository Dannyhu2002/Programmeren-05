<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\FoodItem
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Category $category
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FoodItem extends Model
{
    public $fillable = ['title', 'description', 'image', 'category_id'];

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }
}
