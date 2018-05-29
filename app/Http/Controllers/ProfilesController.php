<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect("/");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("profile.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if(!$user){
            return abort(404);
        }
        return view("profile.show")->with("user", $user)->with("posts", $user->posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if(!$user){
            return abort(404);
        }
        return view("profile.edit")->with("user", $user)->with("posts",$user->posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404);
        }
        $this->validate($request, [
           "about_me" =>"max:2500",
            "picture" => "image|max:2000"
        ]);


        $file = $request->file('picture');
        $filename = md5("randomkey".rand(0,2000000).time());
        $directory = "public/profile_pictures";

        Storage::makeDirectory($directory);

        $image = Image::make($file)->resize(128,128);
        $thumb = Image::make($file)->resize(48,48);

        $full_path  = $directory. '/'. $filename. ".". $file->getClientOriginalExtension();
        $thumb_path = $directory.'/'.$filename."_thumb.".$file->getClientOriginalExtension();

        Storage::put($full_path, $image->stream());
        Storage::put($thumb_path, $thumb->stream());

        $user->about_me = $request->input("about_me");

        $user->picture = $full_path;
        $user->thumbnail = $thumb_path;



        $user->save();
        return redirect("/user/$user->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return abort(404);
        }

        $user->delete();
        return redirect("/");

    }
}
