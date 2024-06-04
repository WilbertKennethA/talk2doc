<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table="appointments";
    protected $guarded=[];

    protected $fillable = [
        'doctor_id',
        'date',
        'time'

    ];

    public function doctors(){
        return $this->belongsTo(Doctors::class, 'doctor_id');
    }
}
