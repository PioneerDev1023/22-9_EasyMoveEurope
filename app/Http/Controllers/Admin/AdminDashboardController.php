<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = DB::table('users')->where(['type'=>'0'])->count();
        $new_users = DB::table('users')->where(['type'=>'0','approve'=>'0'])->count();
        $services = Service::select('service', DB::raw('count(*) as count'))
                            ->groupBy('service')
                            ->get()
                            ->count();
        $locations = DB::table('users')
                            ->groupBy('location')
                            ->where(['type'=>'2'])
                            ->get()
                            ->count();
        $garages = DB::table('users')->where(['type'=>'2'])->count();
        $ser_details = DB::table('services')->count();
        // dd($new_users);
        return view('admin.adminDashboard', 
                [
                    'tuser'=>$users, 
                    'tgarage'=>$garages, 
                    'tser_details'=>$ser_details, 
                    'tlocation'=>$locations, 
                    'tservice'=>$services,
                    'tnewuser' =>$new_users
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = Cost::where(['id' => $request->cost_id])->first();

        $model->update(
                $request->validate(
                    [
                            'cost' => 'required',
                    ],
                ),
                [
                    'cost' => $request->cost, 
                ]
        );

        return response()->json(array('status' => 1,'msg' => 'New garage saved successfully.'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cost = Cost::find($id);
        return response()->json($cost);
    }

}