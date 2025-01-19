<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = ['game','value', 'price', 'username', 'email', 'picture', 'user_id'];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
