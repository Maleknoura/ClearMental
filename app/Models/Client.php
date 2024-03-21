<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends User
{
    use HasFactory;







    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
