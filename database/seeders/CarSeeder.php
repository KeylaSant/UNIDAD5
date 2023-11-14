<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car1 = new Car();
        $car1->name = "Corolla";
        $car1-> model = "Toyota";
        $car1-> year = 2005;
        $car1->save();

        $car2 = new Car();
        $car2->name = "Fairlady";
        $car2-> model = "Nissan";
        $car2-> year = 2000;
        $car2->save();
    }
}
