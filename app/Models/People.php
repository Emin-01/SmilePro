<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'geboortedatum',
        'isactief',
        'opmerking',
    ];

    protected $dates = [
        'geboortedatum',
        'created_at',
        'updated_at',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class, 'persoon_id');
    }
}