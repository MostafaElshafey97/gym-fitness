<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use DB;
use Auth;
use App\User;
class ClubsController extends Controller
{
    //.
    public function groups(Request $request,$id){
       // return $id; $users=Auth::user()->id;
        //clubs information

        //subcribers

        //posts
          $all=Club::join('clubs_users', 'clubs_users.Clubs_id', '=', 'Clubs.id')
        ->select('clubs.name','clubs.id','clubs.user_id_create','clubs.description','clubs.type','image_background','type',DB::raw('COUNT(clubs_users.users_id) as followers'))
         ->where('id',$id) ->groupBy('clubs.name','clubs.type','clubs.user_id_create','clubs.id','clubs.description','image_background','type')
      ->get();
        return view('users.groups',compact('all')); 
    }
    public function membersjames(){
        //
        $user=Auth::user()->id;
        $memebers=User::join('clubs', 'clubs.user_id_create', '=', 'users.id')
        ->select('users.name','users.id','clubs.user_id_create','clubs.description','clubs.type')
        ->where('users.id','=', $user)
       ->groupBy('users.id','users.name','clubs.user_id_create','clubs.description','clubs.type')
        ->get();
        return view('users.membersjames',compact('memebers')); 
    }
    public function allPostclubs(Request $request,$id){
    
     $all=Club::join('clubs_users', 'clubs_users.Clubs_id', '=', 'Clubs.id')
     ->select('clubs.name','clubs.id','clubs.user_id_create','clubs.description','clubs.type','image_background','type',DB::raw('COUNT(clubs_users.users_id) as followers'))
      ->where('clubs.id',$id) ->groupBy('clubs.name','clubs.type','clubs.user_id_create','clubs.id','clubs.description','image_background','type')
   ->get();
   // $user=Auth::user()->id;
    //posts
   $posts=Club::join('posts', 'posts.clubs_user', '=', 'Clubs.id')
         ->where('clubs.id',$id)->get();
      return  view('users.posts.allPostclubs',compact('all','posts')); 
    }
    public function allEventclubs(Request $request,$id){
    
      $all=Club::join('clubs_users', 'clubs_users.Clubs_id', '=', 'Clubs.id')
      ->select('clubs.name','clubs.id','clubs.user_id_create','clubs.description','clubs.type','image_background','type',DB::raw('COUNT(clubs_users.users_id) as followers'))
       ->where('clubs.id',$id) ->groupBy('clubs.name','clubs.type','clubs.user_id_create','clubs.id','clubs.description','image_background','type')
    ->get();
    // $user=Auth::user()->id;
     //posts
     $events=Club::join('events', 'events.clubs_id', '=', 'Clubs.id')
          ->where('clubs.id',$id)->get();
       return  view('users.events.allEventclubs',compact('all','events')); 
     }

    
    public function create(){
       $all=Club::join('clubs_users', 'clubs_users.Clubs_id', '=', 'Clubs.id')
      ->select('clubs.name','clubs.id','clubs.user_id_create','clubs.description','clubs.type','image_background','type',DB::raw('COUNT(clubs_users.users_id) as followers'))
       ->where('id',29) ->groupBy('clubs.name','clubs.type','clubs.user_id_create','clubs.id','clubs.description','image_background','type')
    ->get();
      return  view('users.addPost_clubs',compact('all')); 
    }
}
