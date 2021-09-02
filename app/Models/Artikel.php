<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id', 'user_id', 'title', 'thumbnail', 'body'
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }

    public function image()
    {
        return $this->hasMany('App\Models\ImageArtikel');
    }

    public function komentar()
    {
        return $this->hasMany('App\Models\Komentar');
    }
}
