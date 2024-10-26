<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indexmodel extends Model
{
    use HasFactory;
    protected $fillable =[
            'email',
            'password',
            'address1',
            'address2',
            'city',
            'zipcode',
            'phone',
            'age',
            'country',
    ];
}
