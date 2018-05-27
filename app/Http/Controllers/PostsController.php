<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:2000'
        ]);
        $post = new Post;
        $post->title = $request->input("title");
        $post->description = $request->input("description");
        $post->author_id = Auth::user()->id;
        $post->save();
        return redirect("/posts");
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
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = Post::find($id);
        $post->description = $validatedData["description"];
        $post->title = $validatedData["title"];
        $post->save();
        return redirect("/posts");

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
