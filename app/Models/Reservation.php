<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function participateur()
    {
        return $this->belongsTo(participateur::class, 'participateur_id');
    }
    public function event()
    {
        return $this->belongsTo(event::class, 'event_id');
    }
    public function ticket()
    {
        return $this->hasone(ticket::class, 'reservation_id');
    }
}
