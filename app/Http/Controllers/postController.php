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
    public function create(){
        $title='Add New Post';
        return view('posts.create',compact('title'));
    }
    //show
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:200',
            'body'  =>  'required|max:500',
            'image' => 'image|mimes:jpeg,png,bmp|max:1999'
        ]);
        if($request->hasFile('coverImage')){
            $file = $request->file('coverImage');
            $ext = $file->getClientOriginalExtension();
            $filename = 'cover_image_'. time() . '.' . $ext;
            $path = $file->storeAs('public/coverImages' , $filename);
        }else{
            $filename = 'noimg.png';
        }
        //insert data to DB
        $post = new post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->image = $filename;
        $post->save();
        return redirect('/posts')->with('status','Post was created');
        }
        //edit
    
    public function edit($id){
        $title='Edit Post';
        $post =post::find($id);
        return view('posts.edit',compact('post', 'title'));
    }
        //update
    public function update(Request $request ,$id){
        $request->validate([
            'title' => 'required|max:200',
            'body'  =>  'required|max:500',
            'image' => 'image|mimes:jpeg,png,bmp|max:1999'
        ]);
        if($request->hasFile('coverImage')){
            $file = $request->file('coverImage');
            $ext = $file->getClientOriginalExtension();
            $filename = 'cover_image_'. time() . '.' . $ext;
            $path = $file->storeAs('public/coverImages' , $filename);
        }else{
            $filename = 'noimg.png';
        }
        //insert data to DB
        $post=post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        $post->image = $filename;
        $post->save();
        return redirect('/posts')->with('status','Post was updated');

    }

//DELETE
public function destroy($id){
    
    $post =post::find($id);
    $post->delete();
    return redirect('/posts')->with('status', 'Post Was Deleted');
}
}

