<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'pickup_id',
        'dropoff_id',
        'tariff_id',
        'status',
    ];

    // Relasi ke Customer (atau User jika pakai users)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function pickup()
    {
        return $this->belongsTo(Pickup::class);
    }

    public function dropoff()
    {
        return $this->belongsTo(Dropoff::class);
    }

    public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }

    public function events()
    {
        return $this->hasMany(TrackingEvent::class);
    }
}
