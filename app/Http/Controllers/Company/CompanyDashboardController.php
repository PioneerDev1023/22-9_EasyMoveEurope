<?php

namespace App\Http\Controllers\Company;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyDashboardController extends Controller
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
        
        $comingValue = $this->getCount();
        $tmpArray = array();
        $tmpArray = explode('+', $comingValue);
        
        $upcomingCount = $tmpArray[0];
        $upcomingRepair = $tmpArray[1];

        return view('company.companyDashboard',[
            'upcomingCount'=> $upcomingCount,
            'upcomingRepair'=> $upcomingRepair
        ]);
    }
    public function getCount(){
        $user_id = auth()->user()->id;
        $location = auth()->user()->location;
        $gname = auth()->user()->name;
        $pDates = DB::table('purchases')->select('date')->where('garage',$gname)->get();
        $pastCount = 0;
        $upcomingCount = 0;
        foreach ($pDates as $pDate) {  
            if( date('Y-m-d', strtotime($pDate->date)) <= now()) {
                $pastCount++;
            } else {
                $upcomingCount++;
            }
        }
        

        $pastRepair = 0;
        $upcomingRepair = 0;
        $subDate = now()->subDays(5);
        $rDates = DB::table('repairs')->select('created_at')->where('sel_location',$location)->get();
        foreach ($rDates as $rDate) {
            if( date('Y-m-d H-i-s', strtotime($rDate->created_at)) <= $subDate) {
                $pastRepair++;
            } else {
                $upcomingRepair++;
            }
        }
        
        return $upcomingCount . "+" . $upcomingRepair;
    }
    
  
}
