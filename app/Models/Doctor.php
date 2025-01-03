<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'tb_doctors';

    protected $fillable = ['name','specialty','phone','email',];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}