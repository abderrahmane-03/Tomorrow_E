<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisateur extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function event()
    {
        return $this->hasMany(Event::class, 'organisateur_id');
    }

}
