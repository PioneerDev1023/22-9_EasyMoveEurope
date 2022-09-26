<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Models\Service;
use Carbon\Carbon;
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
        $today = date('Y-m-d');

        $users = DB::table('users')->where(['type'=>'0'])->count();
        $companies = DB::table('users')->where(['type'=>'2'])->count();

        // $pu_requests = DB::table('requests')->where(['who_type'=>'person','collection_day'-> gt($today) ])->count();
        // $cu_requests = DB::table('requests')->where(['who_type'=>'company','collection_day'-> gt($today) ])->count();
        
        $p_requests = DB::table('requests')->where(['who_type'=>'person'])->count();
        $c_requests = DB::table('requests')->where(['who_type'=>'company'])->count();

        return view('admin.adminDashboard', 
                [
                    'users'=>$users, 
                    'companies'=>$companies, 
                    // 'pu_requests'=>$pu_requests, 
                    // 'cu_requests'=>$cu_requests, 
                    'p_requests'=>$p_requests,
                    'c_requests' =>$c_requests
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