<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class postController extends Controller
{
    public function index(){
        $title='Posts';
        $posts=post::orderBy('id','desc')->paginate(3);
        $count=post::count();
        return view('posts.index',compact('title') , compact('posts','count'));
    }
    public function show($id){
        $post= post::find($id);
        $title=$post->title;
        return view('posts.show', compact('post' , 'title'));
    }
}
