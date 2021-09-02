<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageArtikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'artikel_id', 'image'
    ];

    public function artikel()
    {
        return $this->belongsTo('App\Models\Artikel');
    }
}
