<?php
namespace Database\Seeders;

use App\Models\Tariff;
use Illuminate\Database\Seeder;

class TariffSeeder extends Seeder
{
    public function run()
    {
        $data = [
          ['service'=>'darat','weight_min'=>0,'weight_max'=>5,'price'=>50000],
          ['service'=>'darat','weight_min'=>5.01,'weight_max'=>20,'price'=>100000],
          ['service'=>'laut','weight_min'=>0,'weight_max'=>10,'price'=>80000],
          ['service'=>'laut','weight_min'=>10.01,'weight_max'=>50,'price'=>200000],
          ['service'=>'udara','weight_min'=>0,'weight_max'=>2,'price'=>150000],
          ['service'=>'udara','weight_min'=>2.01,'weight_max'=>10,'price'=>400000],
        ];
        foreach($data as $row) {
            Tariff::create($row);
        }
    }
}