<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}
    public function organisateur()
    {
        return $this->belongsTo(Organisateur::class, 'organisateur_id');
    }
}