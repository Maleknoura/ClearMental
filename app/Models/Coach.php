<?php

namespace App\Models;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
protected $name=['coaches'];
 protected $fillable = [
        'user_id'
    ];



 
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
  

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'favoris', 'coach_id', 'client_id')->withTimestamps();
    }
  
}
