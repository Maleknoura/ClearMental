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
}
