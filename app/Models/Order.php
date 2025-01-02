<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['game','value', 'price', 'payment', 'username', 'email', 'picture'];

}
