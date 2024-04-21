<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id'
    ];






    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }
  
    // public function coachs()
    // {
    //     return $this->belongsToMany(Coach::class, 'favoris', 'client_id', 'coach_id');
    // }
    public function favoris()
    {
        return $this->belongsToMany(Coach::class, 'favoris', 'client_id', 'coach_id')->withTimestamps();
    }
   
public function user()
{
    return $this->belongsTo(User::class);
}
}
