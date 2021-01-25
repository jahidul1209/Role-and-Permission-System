<?php

namespace App\Http\Controllers\Backend\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = RouteServiceProvider::ADMIN_DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm(){
        return view('backend.auth.login');
    }

    public function login(request $request){

        $request->validate([
            'email'=>'required|email|max:50',
            'password'=> 'required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            session()->flash('success','Successfully logged in !');
            return redirect()->intended(route('admin.dashboard'));
    }else{
       session()->flash('error','Invalid eamil and password !');
        return redirect()->intended(route('admin.dashboard'));
    }
 }
   public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login');
   }
}