<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medewerker extends Model
{
    use HasFactory;

    protected $fillable = [
        'persoon_id',
        'nummer',
        'medewerkertype',
        'specialisatie',
        'beschikbaarheid',
        'isactief',
        'opmerking',
    ];

    public function persoon()
    {
        return $this->belongsTo(People::class, 'persoon_id');
    }
}