<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }


    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);

        Post::create($request->all());

        return" post save";
    }

    public function show($id)
    {
    	$post = Post::find($id);
        return $post;
    }




}
