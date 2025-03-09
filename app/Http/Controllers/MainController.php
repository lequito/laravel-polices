<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller{
    
    public function index(): View{
        //get all posts and their authors from database
        $posts = Post::with('user')->get();
        return view('home', compact('posts'));
    }

    public function update($id){

        $post = Post::find($id);

        //verify if the user is allowed to update the post
        if (Auth::user()->can('update', $post)) {
            # code...
        } else {
            # code...
        }
         
    }
    public function delete($id){
        $post = Post::find($id);

        //verify if the user is allowed to update the post
        if (Auth::user()->can('delete', $post)) {
            # code...
        } else {
            # code...
        }
    }
}
