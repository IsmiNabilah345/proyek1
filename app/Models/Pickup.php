<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'postal_code',
        'phone',
    ];

    // Relasi: Pickup dipakai oleh banyak Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
