<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view("adminDashboard");
    }
    public function acceptUserAccount($id){
        $user = User::find($id);
        $user->user_verified='approved';

        $user->save();
        return redirect()->back()->with('success', 'Account approved successfully.');
    }
    public function rejecttUserAccount($id){
        $user = User::find($id);
        $user->user_verified='rejected';

        $user->save();
        return redirect()->back()->with('error', 'Account has been rejected!!.');
    }

}
