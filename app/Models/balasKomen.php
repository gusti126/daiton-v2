<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balasKomen extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'komentar_id', 'body'
    ];

    public function komentar()
    {
        return $this->belongsTo('App\Models\Komentar');
    }
}
