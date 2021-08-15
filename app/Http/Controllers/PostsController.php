<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        $posts = Post::orderBy("id", "desc")->get();


        return view("posts/index", ["posts" => $posts]);
    }

    public function send(){

        $posts = new Post();

        $posts->message = request('message');
        $posts->created_at = date('Y-m-d H:i:s');

        $posts->save();

        return redirect("posts");
    }
}
