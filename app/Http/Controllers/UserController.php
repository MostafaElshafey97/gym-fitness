<?php

namespace App\Http\Controllers;
use App\User;
use App\Club;
use DB;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        //customers-liste
        $customers=User::paginate(5);
        return view('admin.customers.customers-liste',compact('customers'));
    }
    public function Dashboard(){
        //jjjjjjjjjjjjj
        return view('users.users_dashbordbeehive');  
    }
    public function people(){
        if (Auth::check()){
 $users=Auth::user()->id;
         $peoples=User::join('role_users', 'role_users.user_id', '=', 'users.id')
        ->where('role_users.role_id','=',2)
        ->get();
        $peoplesall=User::join('role_users', 'role_users.user_id', '=', 'users.id')
        ->where('role_users.role_id','=',2)->count();

        return view('users.people',compact('peoples','peoplesall')); 
    }
    else{
        return redirect()->to('login');
    }
    }
    public function Clubs(){

              $Clubs= Club::join('clubs_users', 'clubs_users.Clubs_id', '=', 'Clubs.id')
                     ->select('clubs.name','clubs.id','clubs.type'
                     ,DB::raw('COUNT(clubs_users.users_id) as followers'))
                    ->groupBy('clubs.name','clubs.type','clubs.id')
                   ->get();
                   
                   $category_id = array('29','39');
                //  return     $followers=User::join('clubs_users', 'clubs_users.users_id', '=', 'users.id')->get();
               
        return view('users.Clubs',compact('Clubs')); 
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
