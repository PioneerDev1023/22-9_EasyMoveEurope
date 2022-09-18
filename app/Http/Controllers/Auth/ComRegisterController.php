<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ComRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth/comsignup');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'work_phone' => ['required', 'min:9'],
                'password' => ['required', 'string', 'min:8'],
                'company_name' => ['required', 'string'],
                'company_country' => ['required', 'string'],
                'vat_id' => 'required',
            ],
            [
                'email.required' => 'Please input the email address!',
                'email.email' => 'Please input the email address exactly!',
                'work_phone.required' => 'Please input your phone number!',
                'password.required' => 'Please input the password!',
                'password.min' => 'Please input the password of 8 letters at least!',
                'company_name.required' => 'Please input the company name!',
                'company_country.required' => 'Please input the company country!',
                'vat_id.required' => 'Please include the ISO country code (eg. LU14324350)!',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                        'status' => 0,
                        'error' => $validator->errors()->all()
                    ]);
        }

        if(!isset($data['tonumber']) && !isset($data['ship_area'])){
            $result = User::create([
                'name' => $data['company_name'],
                'email' => $data['email'],
                'phone' => $data['work_phone'],
                'company_country' => $data['company_country'],
                'vat_id' => $data['vat_id'],
                'password' => Hash::make($data['password']),
                'type' => '2',
            ]);
        } else if(!isset($data['tonumber'])) {
            $result = User::create([
                'name' => $data['company_name'],
                'email' => $data['email'],
                'phone' => $data['work_phone'],
                'company_country' => $data['company_country'],
                'vat_id' => $data['vat_id'],
                'ship_area' => $data['ship_area'],
                'password' => Hash::make($data['password']),
                'type' => '2',
            ]);
        } else if(!isset($data['ship_area'])) {
            $result = User::create([
                'name' => $data['company_name'],
                'email' => $data['email'],
                'phone' => $data['work_phone'],
                'company_country' => $data['company_country'],
                'vat_id' => $data['vat_id'],
                'ship_count' => $data['tonumber'],
                'password' => Hash::make($data['password']),
                'type' => '2',
            ]);
        } else {
            $result = User::create([
                'name' => $data['company_name'],
                'email' => $data['email'],
                'phone' => $data['work_phone'],
                'company_country' => $data['company_country'],
                'vat_id' => $data['vat_id'],
                'ship_count' => $data['tonumber'],
                'ship_area' => $data['ship_area'],
                'password' => Hash::make($data['password']),
                'type' => '2',
            ]);
        }
        

        if(!$result) {
            return response()->json(array('status' => 1,'error' => "Database Error"));
        }  
        
        return response()->json(array('status' => 2,'msg' => "Successfully Submitted"));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
}
