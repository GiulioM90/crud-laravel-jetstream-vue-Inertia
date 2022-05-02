<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PublicController extends Controller
{
    public function showDashboard() {
        return Inertia::render('Dashboard');
    }

    public function showUsers(){
        return Inertia::render('Users/Index', [
            'users'=> User::all()
        ]);
    }
    public function showPosts(){
        return Inertia::render('Posts/Index', [
            'posts'=> Post::all()
        ]);
    }
    public function createPost(){
        return Inertia::render('Posts/Create');
    }
    public function storePost(Request $request)
    {
       Post::create([
           'title' => $request->input('title'),
           'description' => $request->input('description')
       ]);

       return Redirect::route('posts.index');
    }
    public function showEditPost(Post $post){
        return Inertia::render('Posts/Edit',[
            'post' => $post
        ]);
    }
    public function updatePost(Post $post, Request $request){
        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        return Redirect::route('posts.index');
    }
    public function destroyPost(Post $post){
        $post->delete();

        return Redirect::route('posts.index');
    }

}
