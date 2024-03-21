<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends User
{
    use HasFactory;




    public function seances()
    {
        return $this->hasMany(Seance::class);
    }
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
