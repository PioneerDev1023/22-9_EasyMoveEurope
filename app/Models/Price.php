<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'requests';
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'who_type', 
        'pickup_country', 
        'sender_city', 
        'sender', 
        'sender_phone',
        'sender_full_phone', 
        'desti_country', 
        'receiver_city', 
        'receiver', 
        'receiver_phone',
        'receiver_full_phone',
        'van_type', 
        'help_loading', 
        'help_unloading', 
        'tail_lift',
        'cargo_info', 
        'cargo_val', 
        'collection_day', 
        'contact_name', 
        'contact_email', 
        'contact_phone',
        'contact_full_phone', 
        'contact_note',
        'price'
    ];
}
