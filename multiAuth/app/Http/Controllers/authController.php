<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class authController extends Controller
{

       public function ViewLogin()
    {
        return view('auth.login');
    }
    public function ViewRegister()
    {
        return view('auth.register');
    }

    public function logoutPageLoader(){
        Auth::logout();
        return redirect('/');
    }
    public function LoginFunction()
    {
        if (Auth::check()) {


            $userType = Auth::user()->user_type;
            $userVerified = Auth::user()->user_verified;
            if ($userType == 'Admin') {
                $userDetails = User::where('user_type', 'user')->where('user_verified', 'pending')->get();
                return view('adminDashboard', compact('userDetails'));
            }
            if ($userType == 'user') {

                if($userVerified == 'pending'){

                    return view('user.userPendingDashboard');
                }
                if($userVerified == 'rejected'){

                    return view('user.userRejecteddDashboard');
                }
                else{

                    return view('user.userApprovedDashboard');
                }
            } else {
                return view('auth.login');
            }
        } else {
            return redirect()->route('login'); // Redirect to the login page if the user is not logged in
        }

    }





}
