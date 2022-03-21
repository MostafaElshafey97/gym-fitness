<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use Redirect;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    
protected function authenticated(Request $request)
{ //return 'teste';
if(Auth::attempt(['email' => $request->email, 'password' => $request->password ]))  {
   $uid =  Auth::User()->id;
    $role = \DB::table('users')
    ->join('role_users', 'role_users.user_id', '=', 'users.id')
    ->where('role_users.user_id','=', $uid)
    ->first();
    if ($role->role_id =='2') {//users
       
        return Redirect::to('/users_dashbordbeehive');
       } 
       if ($role->role_id =='1') {//Gym-Company
       
        return Redirect::to('/Gym-Company');
       } 
       if ($role->role_id =='3') {//Admin
       
        return Redirect::to('/dashboard');
       } 
      }
      else {
        //  Session::flush();
    //  return redirect()->to('login')->with('errorMsg','Saisissez un nom d utilisateur et un mot de passe valides.');
    return Redirect::back()->withErrors(['error' => '
    Enter a valid username and password.']);

      }

   }
   public function logout () {
   
    auth()->logout();
  
    return redirect('/login');
}
protected function guard(){
    return Auth::guard('web');
}
}
