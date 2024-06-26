<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    
    protected $fillable = ['publication_id', 'client_id', 'content'];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
