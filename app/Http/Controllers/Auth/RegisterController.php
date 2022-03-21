<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeGymCompanyMail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register_company(){
        return view ('auth.register_Company');
    }

    public function store(Request $request){

//return $request->all();
    $user= new User;
    $user->name =$request->name;
    $user->email =$request->email;
    $user->password =$request->password;
    $user->region =$request->region;
   // $user->date_of_birth =$request->date_of_birth;
    $user->phone_number =$request->phone_number;
    $user->gouvernorat =$request->DRR;
    $user->region =$request->regions;
    $user->save();
     $role=Role::whereSlug('Gym-Company')->first();
    $user->roles()->attach($role);
    Mail::to($user)->send(new WelcomeGymCompanyMail($user));
    
    return redirect()->to('login')->with('success',"
    We have sent the activation code. Please check your email.");
    
    
    
}
public function register_user(){
    return view ('auth.register_user');
}

public function register_use(Request $request){

  // return $request->all();
   
       $user= new User;
       $user->name =$request->name;
       $user->email =$request->email;
       $user->password =$request->password;
       $user->Gender =$request->Gender;
      // $user->date_of_birth =$request->date_of_birth;
       $user->phone_number =$request->phone_number;
       
       $user->save();
        $role=Role::whereSlug('users')->first();
       $user->roles()->attach($role);
    //   Mail::to($user)->send(new WelcomeGymUser($user));
       
       return redirect()->to('login')->with('success',"
       We have sent the activation code. Please check your email.");
       
       
       
   }



}
