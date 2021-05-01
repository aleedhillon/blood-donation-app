<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function donors()
    {
        return $this->hasMany(Donor::class, 'city_id', 'id');
    }
}
