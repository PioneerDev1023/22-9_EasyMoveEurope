<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Price;
use Illuminate\Support\Facades\Validator;
use App\Models\Quote;
use Illuminate\Support\Facades\Route;
use Log;
  
class PriceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $pickup_country = $request->pickup_country;
        $destination_country = $request->destination_country;
        
        return view('price',[
            'pickup_country'=> $pickup_country,
            'destination_country'=> $destination_country,
        ]);
    }
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'who_type' => ['required'],
            'pickup_country' => ['required', 'string'],
            'sender_city' => ['required', 'string'],
            'sender_address' => ['required', 'string'],
            'sender' => ['required', 'min:3'],
            'sender_phone' => ['required', 'min:8'],
            'desti_country' => ['required', 'string'],
            'receiver_city' => ['required', 'string'],
            'receiver_address' => ['required', 'string'],
            'receiver' => ['required', 'string', 'min:3'],
            'receiver_phone' => ['required', 'min:8'],
            'van_type' => ['required'],
            'cargo_info' => ['required', 'string'],
            'cargo_val' => ['required', 'string'],
            'collection_day' => ['required'],
            'contact_name' => ['required', 'min:3'],
            'contact_email' => ['required', 'string', 'email', 'max:255'],
            'contact_phone' => ['required', 'min:8'],
            'term_agree' => ['required'],
            'price' => ['required'],
            ],
            [
                'term_agree.required' => 'Please read and accept the Terms and Conditions of EasyMoveEurope!',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                        'status' => 0,
                        'error' => $validator->errors()->all()
                    ]);
        }

        $result = Price::create([
            'who_type' => $data['who_type'],
            'pickup_country' => $data['pickup_country'],
            'sender_city' => $data['sender_city'],
            'sender_address' => $data['sender_address'],
            'sender' => $data['sender'],
            'sender_phone' => $data['sender_phone'],
            'sender_full_phone' => $data['sender_full_phone'],
            'desti_country' => $data['desti_country'],
            'receiver_city' => $data['receiver_city'],
            'receiver_address' => $data['receiver_address'],
            'receiver' => $data['receiver'],
            'receiver_phone' => $data['receiver_phone'],
            'receiver_full_phone' => $data['receiver_full_phone'],
            'van_type' => $data['van_type'],
            'help_loading' => $data['help_loading'],
            'help_unloading' => $data['help_unloading'],
            'tail_lift' => $data['tail_lift'],
            'cargo_info' => $data['cargo_info'],
            'cargo_val' => $data['cargo_val'],
            'collection_day' => $data['collection_day'],
            'contact_name' => $data['contact_name'],
            'contact_email' => $data['contact_email'],
            'user_email' => $data['user_email'],
            'contact_phone' => $data['contact_phone'],
            'contact_full_phone' => $data['contact_full_phone'],
            'contact_note' => $data['contact_note'],
            'price' => $data['price'],
        ]);

        if(!$result) {
            return response()->json(array('status' => 1,'error' => "Database Error"));
        }  
        
        return response()->json(array('status' => 2,'msg' => "Successfully Submitted"));
          
    }
}