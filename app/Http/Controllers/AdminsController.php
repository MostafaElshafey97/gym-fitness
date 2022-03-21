<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin-login');
    }
    
    public function adlogin(Request $request)
{

    if($request->isMethod('post')){
         $data=$request->input(); 
          $password = \Hash::make($data['password']);
      //   dd(!Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=> $password]));
         
         if(!Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){

            return Redirect::to('/dashboard');

         }else{
           return Redirect::back()->withErrors(['error' => '
           
           Enter a valid username and password.']);
           
         }

    }


       return view('admin.admin_login');
   }
   public function lougoutadmin(){
       return view('admin.admin-login');
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
