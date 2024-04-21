<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'coach_id',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'favoris', 'coach_id', 'client_id')->withTimestamps();
    }
    
}
