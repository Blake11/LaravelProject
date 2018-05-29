<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        return redirect('/posts');
    }

    public function search(Request $request){
        $terms = $request->get("terms");
        $users = User::where("first_name","LIKE","%$terms%")->orWhere("last_name","LIKE","%$terms%")->get();
        $posts = Post::where("title","LIKE","%$terms%")->get();
        return view("pages.search")->with('users',$users)->with('posts',$posts);
    }
}
