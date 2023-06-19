<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Usermios;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function blog(){
        //consulta a base a base de datos
        //$posts = Post::get();
        //$post = Post::first();
        //$post = Post::find(25);

        //dd($post);
        /* $posts = [
        ['id'=>23,'title'=>'>Mi php','slug'=>'php'],
        ['id'=>24,'title'=>'>Laravel','slug'=>'larvel']
        ];
        */
        $posts = Post::latest()->paginate();
        //dd($posts);
        return view('blog', ['posts'=>$posts]);
    }


    public function post(Post $post){
        //comsulta ala base de datos
        //$post = $slug;
        return view('post', ['post'=>$post]);

    }
}
