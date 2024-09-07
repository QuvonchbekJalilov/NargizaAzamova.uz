<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title_uz',
        'title_en',
        'title_ru',
        'description_uz',
        'description_en',
        'description_ru',
        'image',
        'music_file'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    
}
