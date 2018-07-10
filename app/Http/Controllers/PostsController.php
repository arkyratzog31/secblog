<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;

class PostsController extends Controller
{

    public function index(Post $post)
    {
      return view('home')-> with([
        'posts' => $post->LatestFirst()->isLive()->get(),
      ]);
    }

    public function tagged(Tag $tag)
    {

      return view('posts.tag')->with([
        'posts'=>$tag->posts()->LatestFirst()->isLive()->get(),
        'tag'=>$tag,
      ]);
    }
}
