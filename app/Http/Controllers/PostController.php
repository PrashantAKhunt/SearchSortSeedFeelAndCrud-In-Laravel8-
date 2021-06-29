<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->all();
       // dd(Post::all());
       $se="";
       if(empty($search['search']))
       {
        $posts = Post::all();    
       }
       else
       {
        $posts = Post::query()
        ->where('name', 'LIKE', "%{$search['search']}%")
        ->orWhere('desc', 'LIKE', "%{$search['search']}%")
        ->get();
        
        $se=$search['search'];
       }

       $sorted = $posts->sortBy('name');
      // $posts = Post::all();
       return view('post.index')->with(['posts'=>$sorted,'search'=>$se]);
    }


    public function addnew()
    {
        return view('post.addnew');
    }

    public function add(Request $request)
    {
        $post = $request->all();
        $newpost = new Post;
        $newpost->name = $post['post_name'];
        $newpost->desc = $post['post_desc'];
        $newpost->save();
        return redirect(route('post.index'));
        //dd($post);
    }

    public function update(Request $request)
    {
        $post = $request->all();
        $newpost = Post::find($post['id']);
        $newpost->name = $post['post_name'];
        $newpost->desc = $post['post_desc'];
        $newpost->save();
        return redirect(route('post.index'));
        //dd($post);
    }

    public function edit(Request $request)
    {
        $post= Post::find($request['id']);
        return view('post.edit')->with(['post'=>$post]);
    }

    public function delete(Request $request)
    {
        $post= Post::find($request['id']);
        $post->delete();
        return redirect(route('post.index'));;
    }
}
