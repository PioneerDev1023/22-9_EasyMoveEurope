<?php

namespace App\Http\Controllers\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyQuoteController extends Controller
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

        return view('company.companyQuote',[
            'requests'=> $requests
        ]);
    }

    public function past()
    {
        $user_email = auth()->user()->email;
        $requests = DB::table('requests')->where('user_email',$user_email)->get();

        return view('company.companyPastQuote',[
            'requests'=> $requests
        ]);
    }

}
