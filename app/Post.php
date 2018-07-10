<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author(){
      return $this->belongsTo(Author::class);
    }

    public function getRouteKeyName(){
      return 'slug';
    }

    public function scopeLatestFirst($query)
    {
      return $query->orderby('created_at','desc');
    }
    
    public function tags()
    {
      return $this->morphToMany(Tag::class, 'taggable');
    }

    public function scopeIsLive($query)
    {
      return $query->where('live',true);
    }

}
