<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantsAndMenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rocket = Restaurant::factory()->create([
            'name' => 'Rocket Chicken - Plamongan'
        ]);

        Menu::factory()->create([
            'name' => 'Sayap',
            'price' => 9500,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Paha Bawah',
            'price' => 10500,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Paha Atas',
            'price' => 12500,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Dada',
            'price' => 12500,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Nasi',
            'price' => 4000,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Perkedel',
            'price' => 4000,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'French Fries',
            'price' => 8000,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Chicken Strips (4PCS)',
            'price' => 12500,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);
        Menu::factory()->create([
            'name' => 'Sayap',
            'price' => 9500,
            'type' => 'Food',
            'restaurant_id' => $rocket->id
        ]);

        $dkriuk = Restaurant::factory()->create([
            'name' => "D'Kriuk - Plamongan"
        ]);
        Menu::factory()->create([
            'name' => 'Sayap',
            'price' => 8000,
            'type' => 'Food',
            'restaurant_id' => $dkriuk->id
        ]);
    }
}
