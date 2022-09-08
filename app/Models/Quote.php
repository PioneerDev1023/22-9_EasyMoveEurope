<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $table = 'quotes';
    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'repair_id', 'service_id',
    ];
}
