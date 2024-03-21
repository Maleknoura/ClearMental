<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;


    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }
}