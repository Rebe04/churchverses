<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'chapter',
        'verse',
        'slug',
        'url_post',
        'content'
    ];

    //Relación uno a muchos inversa

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
