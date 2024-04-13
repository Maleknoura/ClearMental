<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;


    protected $fillable = [
        'Contenu',
        'image',
        'statut',
        'coach_id',
        'title',
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
        return $this->belongsToMany(Tag::class,'tag_publication');
    }

    public function likes()
{
    return $this->hasMany(Like::class);
}

public function likedByUser($user)
{
    return $this->likes()->where('user_id', $user->id)->exists();
}

public function dislikedByUser($user)
{
    return $this->likes()->where('user_id', $user->id)->where('type', 'dislike')->exists();
}
}
