<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $table = 'repairs';
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'reg_number', 'sel_location', 'first_name', 'last_name', 'email', 'phone_number',
    ];
}
