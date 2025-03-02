<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'color', 'point', 'img'];

    public function posts(): HasMany {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function prices(): HasMany {
        return $this->hasMany(Price::class, 'id_game');
    }

    public function orders(): HasMany {
        return $this->hasMany(Order::class, 'id_game');
    }
}
