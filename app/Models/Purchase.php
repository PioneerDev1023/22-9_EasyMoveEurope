<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = 'purchases';

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'reg_number', 'name', 'email', 'phone_number', 'garage', 'seller_phone', 'date', 'location', 'prefer_time', 'inspection',
    ];
}
