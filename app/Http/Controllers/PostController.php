<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
class PostController extends Controller
{
    //
    public  function index(){
       $user=Auth::user()->id;
       $posts=Post::where('social_id',$user)
       ->selectRaw('SUBSTRING(`body`, 1, 300) as `body`')
       ->select('title','image_post','share','id')->orderBy('id','desc')->get();
        //return view('users.home_social',compact('posts'));
        return view('users.homeSocialUi',compact('posts'));
      
    }
    public function create(){
        return view('users.add-social-post');
    }
    public function store(Request $request){
        //return $request->all();
        $user=Auth::user()->id;
        $posts= new Post;
        $posts->title =$request->title;
        $posts->body =$request->body;
        $posts->social_id =$user;
        $posts->share =$user;
        
        if ($request->hasFile('image')) {
           
            $data = $request->input('image');
            $photo = $request->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/storage/posts';
            $request->file('image')->move($destination, $photo);
           
            $posts->image_post=$photo;
            $posts->save();
            return redirect()->to('home_social');
           
        }
       

    }
    public function read_more(Request $request,$id){
        $user=Auth::user()->id;
        $posts=Post::where('social_id',$user)
       
        ->select('title','image_post','share','id','body')
        ->where('id',$id)->get();
         return view('users.read_more',compact('posts'));
    }
}
