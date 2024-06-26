<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'coach_id',
        'time_slot',
        'appointment_date',
        'statut',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
  
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
