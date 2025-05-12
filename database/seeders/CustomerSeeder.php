<?php
namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        // Buat 5 pelanggan dummy
        Customer::factory()->count(5)->create();
    }
}
