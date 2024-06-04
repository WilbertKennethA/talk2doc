<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obats extends Model
{
    use HasFactory;

    protected $table="obats";
    protected $guarded=[];

    protected $fillable = [
        'name',
        'type',
        'perwhat',
        'price',
        'image'
    ];
}
