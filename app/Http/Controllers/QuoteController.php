<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_email = auth()->user()->email;
        $requests = DB::table('requests')->where('user_email',$user_email)->get();

        return view('quote',[
            'requests'=> $requests
        ]);
    }

    public function past()
    {
        $user_email = auth()->user()->email;
        $requests = DB::table('requests')->where('user_email',$user_email)->get();

        return view('pastQuote',[
            'requests'=> $requests
        ]);
    }

}
