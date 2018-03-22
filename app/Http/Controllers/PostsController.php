<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Post;
use App\Tag;
use App\Repositories\Posts;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()          //(Posts $posts)
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
   		return view('posts.show', compact('post'));
    }

    public function create()
    {
   		return view('posts.create');
    }

    public function store()
    {
    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    	]);
        $post = Post::create([
            'user_id' => auth()->user()->id,
            'title' => request('title'),
            'body' => request('body')
        ]);
    	$post_id = $post->id;
        Tag::create([
            'name' => request('tags'),
            'post_id' => $post_id
        ]);
        session()->flash(
            'message', "Your post has now been published."
        );

   		return redirect('/');
    }
}
