<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropoff extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'postal_code',
        'phone',
    ];

    // Relasi: Dropoff dipakai oleh banyak Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
