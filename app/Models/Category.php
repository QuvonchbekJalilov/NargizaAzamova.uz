<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_en',
        'name_ru',
    ];

    public function musics(){
        return $this->hasMany(Music::class);
    }
}
