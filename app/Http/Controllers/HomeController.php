<?php

namespace App\Http\Controllers;



use Notification;

use Illuminate\Http\Request;

use App\User;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function send_notifications()
    {
        $user = User::where('id', Auth::user()->id)->first();
        
        $notify = Notification::notify(new SomeNotification);

        dd($notify);
    }
}
