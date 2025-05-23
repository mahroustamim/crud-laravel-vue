<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'category_id', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    } 
    
    public function translations()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function translation()
    {
        return $this->hasOne(PostTranslation::class)->where('locale', app()->getLocale());
    }
}
