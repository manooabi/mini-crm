<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function authenticated(Request $request, $user)
    {
        if ($user->role_as == '1') {
            return redirect('admin/dashboard')->with('status', 'Welcome to admin Dashboard');
        } else {
            Auth::logout();
            return redirect('/login')->with('status', 'You are not an Admin');
        }
    //  if(Auth::user()-> role_as=='1') //1 = admin
    //  {
    //      return redirect('admin/dashboard')-> with('status','welcome to admin Dashboard');
    //  }
    //  else if(Auth::user()-> role_as=='0')//0 = user
    //  {
    //      return redirect('home')-> with('status','Logged in Succesfull');
    //  }
    //  else
    //  {
    //      return redirect('/login');
    //  }
    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
