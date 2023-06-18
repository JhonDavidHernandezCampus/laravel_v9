<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');

    }
    public function blog(){
        //consulta a base a base de datos
        $posts = [
        ['id'=>23,'title'=>'>Mi php','slug'=>'php'],
        ['id'=>24,'title'=>'>Laravel','slug'=>'larvel']
        ];
        return view('blog', ['posts'=>$posts]);
    }


    public function post($slug){
        //comsulta ala base de datos
        $post = $slug;
        return view('post', ['post'=>$post]);

    }
}
