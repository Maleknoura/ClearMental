<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;


    protected $fillable = [
        'Contenu',
        'statut',
        'coach_id',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
    public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
