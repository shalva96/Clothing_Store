<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Admin\PostController;

class Post extends Model
{
    use HasFactory;

   public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }

}
