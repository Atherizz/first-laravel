<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Price extends Model {
    use HasFactory;
    protected $table = 'prices'; 
    protected $fillable = ['id_game', 'value', 'price'];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'id_game');
    }
    
}
