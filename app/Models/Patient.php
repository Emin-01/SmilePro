<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'persoon_id',
        'nummer',
        'medisch_dossier',
        'isactief',
        'opmerking',
    ];

    protected $casts = [
        'isactief' => 'boolean',
    ];

    public function persoon()
    {
        return $this->belongsTo(People::class, 'persoon_id');
    }
}