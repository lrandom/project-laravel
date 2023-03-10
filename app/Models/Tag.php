<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

/*    public function posts()
    {
        return $this->belongsToMany(Post::class, 'tag_posts', 'tag_id', 'post_id');
    }*/

    public function products()
    {
        return $this->morphedByMany(Product::class, 'tagable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'tagable');
    }
}
