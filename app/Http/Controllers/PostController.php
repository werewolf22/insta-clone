<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome',['posts'=> Post::join('follow_user'/* shortcut can also be used here follow_user as fa */, 'posts.user_id', '=', 'follow_user.follow_id')->where('follow_user.user_id', auth()->id())->select('posts.*')->latest('posts.created_at')->with('user.profile')->paginate(1)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'caption' => ['string', 'nullable'],
            'image' => ['image', 'required']
        ]);

        $imgArr = [];
        $imagePath = $request->file('image')->store('posts', 'public');
        // dd(storage_path('app/public/'.$imagePath));
        \Intervention\Image\Facades\Image::make(storage_path('app/public/'.$imagePath))->fit(312)->save();
        $imgArr = ['image'=> $imagePath];
        $request->user()->posts()->create(array_merge($validatedData,$imgArr)); 
        
        return Redirect::route('profile.showUser')->with('success', 'Post Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // dd($post);
        $post->load('user.profile');
        return view('post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
