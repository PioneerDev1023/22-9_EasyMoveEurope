<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;

class ProfileController extends Controller
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
        $profiles = DB::table('users')->where('email', $user_email)->get();
        return view('profile',[
            'profiles'=> $profiles,
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

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'uname' => 'required',
        ],
        [
            'uname.required' => 'Please input the name!',
        ]
    );
  
        if ($validator->fails()) {
            return response()->json([
                        'status' => 0,
                        'error' => $validator->errors()->all()
                    ]);
        }
       
        $result = User::where('id', $request->uid)
        ->update([
            'name' => $request->uname,
        ]);

        if(!$result) {
            return response()->json(array('status' => 1,'error' => "Database Error"));
        }  
        
        return response()->json(array('status' => 2,'msg' => "Successfully Submitted"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password'
        ],
        [
            'old_password.required' => 'Please input the old password!',
            'new_password.required' => 'Please input the new password!',
            'new_password.min' => 'Please input eight characters at least for new password!',
            'confirm_password.required' => 'Please input the confirm password!'
        ]
    );
 
        if ($validator->fails()) {
            return response()->json([
                        'status' => 0,
                        'error' => $validator->errors()->all()
                    ]);
        }

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return response()->json(array('status' => 5,'error' => "Old Password Doesn't match!"));
        }
       
        $result = User::where('id', $request->uid)
        ->update([
            'password' => Hash::make($request->new_password)
        ]);

        if(!$result) {
            return response()->json(array('status' => 1,'error' => "Database Error"));
        }
        
        return response()->json(array('status' => 2,'msg' => "Successfully Submitted"));
    }
    

}
