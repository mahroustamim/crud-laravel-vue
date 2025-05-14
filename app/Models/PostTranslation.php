<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    protected $fillable = ['id', 'title', 'content', 'image', 'locale'];
}
