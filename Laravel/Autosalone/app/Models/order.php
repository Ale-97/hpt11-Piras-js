<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['user', 'car_id'];

    public function accessories()
    {
        return $this->belongsToMany(Accessory::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
