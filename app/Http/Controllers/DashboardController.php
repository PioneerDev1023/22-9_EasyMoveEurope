<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;
use App\Models\Purchase;

class DashboardController extends Controller
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
    public function index(Request $request)
    {
        
        $user_email = auth()->user()->email;
        $requests = DB::table('requests')->where('user_email',$user_email)->get();
        $today = now();
        $pastCount = 0;
        $upcomingCount = 0;

        foreach ($requests as $request) {
            if( date('Y-m-d H-i-s', strtotime($request->collection_day)) <= $today) {
                $pastCount++;
            } else {
                $upcomingCount++;
            }
        }

        return view('dashboard',[
            'pastCount'=> $pastCount,
            'upcomingCount'=> $upcomingCount
        ]);
    }
  
}
