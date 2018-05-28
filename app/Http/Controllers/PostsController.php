<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts =  Post::orderBy("created_at")->paginate(20);

        return view("posts.index")->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        return view("create.blade");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:3000',
            'picture' => 'image|max:2500',
        ]);

        $file = $request->file('picture');
        $filename = md5("randomkey".rand(0,2000000).time());
        $directory = "public/post_images";

        Storage::makeDirectory($directory);

        $image = Image::make($file)->resize(360,null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $full_path  = $directory. '/'. $filename. ".". $file->getClientOriginalExtension();

        Storage::put($full_path, $image->stream());

        $post = new Post;

        $post->title = $request->input("title");
        $post->image_link = $full_path;
        $post->description = $request->input("description");
        $post->user_id = Auth::id();

        $post->save();

        return redirect("/posts/$post->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        $post = Post::find($id);
        if(!$post){
            return abort("404");
        }
        return view("posts.show")->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        $post = Post::find($id);
        if(!$post){
            return abort("404");
        }
        return view("posts.edit")->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:3000',
            'picture' => 'image|max:2500',
        ]);

        $post = Post::find($id);
        $post->description = $request->input("description");
        $post->title = $request->input("title");


        $file = $request->file('picture');
        $filename = md5("randomkey".rand(0,2000000).time());
        $directory = "public/post_images";

        Storage::makeDirectory($directory);

        $image = Image::make($file)->resize(360,null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $full_path  = $directory. '/'. $filename. ".". $file->getClientOriginalExtension();

        Storage::put($full_path, $image->stream());


        $post->image_link = $full_path;
        $post->user_id = Auth::id();

        $post->save();

        return redirect("/posts/$post->id");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $post = Post::find($id);
        if(!$post){
            return abort("404");
        }
        $post->delete();
        return redirect('/posts');
    }
}
