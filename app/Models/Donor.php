<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function blood()
    {
        return $this->belongsTo(BloodType::class, 'blood_type_id', 'id');
    }
}
