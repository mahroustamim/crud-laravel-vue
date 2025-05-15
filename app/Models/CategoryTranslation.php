<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    protected $fillable = ['id', 'category_id', 'name', 'locale'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
