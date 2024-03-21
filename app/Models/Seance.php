<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;







    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
