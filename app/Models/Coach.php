<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
protected $name=['coaches'];
 protected $fillable = [
        'user_id'
    ];



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
    public function isFavoritedBy($user)
    {
        return $this->favoris()->where('user_id', $user->id)->exists();
    }
    public function favoris()
    {
        return $this->belongsToMany(Client::class, 'favoris', 'coach_id', 'client_id');
    }
    public function client()
    {
        return $this->belongsToMany(Client::class, 'favoris', 'coach_id', 'client_id');
    }
}
