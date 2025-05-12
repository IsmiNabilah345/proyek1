<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    protected $fillable = [
        'service',      // darat | laut | udara
        'weight_min',   // berat minimal
        'weight_max',   // berat maksimal
        'price',        // tarif dalam satuan mata uang
    ];

    // (opsional) kamu bisa tambahkan relasi ke order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}