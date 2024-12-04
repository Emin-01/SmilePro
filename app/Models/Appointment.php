<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;





    protected $fillable = [
        'description',
        'appointment_date',
        'PersoonId',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'PersoonId');
    }

}
