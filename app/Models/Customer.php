<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // kolom mana saja yang boleh di‐mass assign
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    // relasi ke order (jika kamu mau)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}