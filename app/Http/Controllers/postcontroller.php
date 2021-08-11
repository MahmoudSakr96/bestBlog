<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postcontroller extends Controller
{
    public function index(){
        $posts = post::orderby('id','Asc')->paginate(5);
        $count = post::count();
        return view('posts.index',compact('posts','count'));
    }
    public function show ($id){
        $post = post::find($id);
        return view('posts.show', compact('post'));

    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){

        $request->validate([
            'title'=> 'required|max:200',
            'body'=> 'required|max:500'
        ]);
        $post= new post();
        $post->title =$request->title;
        $post->body =$request->body;
        $post->save();
        return redirect('/posts')->with('status','post was created!');

    }
    public function edit($id){
        $post = post::find($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'title'=> 'required|max:200',
            'body'=> 'required|max:500'
        ]);
        $post=post::find($id);
        $post->title =$request->title;
        $post->body =$request->body;
        $post->save();
        return redirect('/posts')->with('status','post was Updated!');
    }
    public function destroy($id){
        $post=post::find($id);
        $post->delete();
        return redirect('/posts')->with('status','post was Deleted!');

        
    }
    
}
