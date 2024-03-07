<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participateur extends Model
{
    use HasFactory;
    protected $fillable =[
        
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'participateur_id');
    }
}
