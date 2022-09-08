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
        $comingValue = $this->getCount();
        $tmpArray = array();
        $tmpArray = explode('+', $comingValue);
        $user_email = auth()->user()->email;
        
        $upcomingCount = $tmpArray[0];
        $upcomingRepair = $tmpArray[1];

        $date = now();
        $date->subDays(5);

        $up_quotes = DB::table('repairs')
        ->select('repairs.*', 'quotes.service_id', 'services.detail', DB::raw('GROUP_CONCAT(detail SEPARATOR " & ") as serviceIds'))
            ->join('quotes', 'repairs.id', '=', 'quotes.repair_id')
            ->join('services', 'services.id', '=', 'quotes.service_id')
            ->where('repairs.email',$user_email)
            ->whereDate('repairs.created_at','>=', $date)
            ->groupBy('repairs.id')
            ->get();

        $pre_quotes = DB::table('repairs')
        ->select('repairs.*', 'quotes.service_id', 'services.detail', DB::raw('GROUP_CONCAT(detail SEPARATOR " & ") as serviceIds'))
            ->join('quotes', 'repairs.id', '=', 'quotes.repair_id')
            ->join('services', 'services.id', '=', 'quotes.service_id')
            ->where('repairs.email',$user_email)
            ->whereDate('repairs.created_at','<=', $date)
            ->groupBy('repairs.id')
            ->get();

        return view('quote',[
            'up_quotes'=> $up_quotes,
            'pre_quotes' => $pre_quotes,
            'upcomingCount'=> $upcomingCount,
            'upcomingRepair'=> $upcomingRepair
        ]);
    }

    public function getCount(){
        $user_id = auth()->user()->id;
        $user_email = auth()->user()->email;
        $username = auth()->user()->name;
        $pDates = DB::table('purchases')->select('date')->where('email',$user_email)->get();
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
        $subDate = now()->subDays(7);
        $rDates = DB::table('repairs')->select('created_at')->where('email',$user_email)->get();
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
