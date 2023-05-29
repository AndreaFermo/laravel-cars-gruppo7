<?php

namespace Database\Seeders;
use App\Models\Optional;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals= ['tettuccio panoramico', 'cambio sequenziale', 'volante sportivo', 'sedili in alcantara', 'alzacristalli elettreici'];
        foreach ($optionals as $optional) {
            $newOptional= new Optional;
            $newOptional->name = $optional;
            $newOptional->save();
        }
    }
}
