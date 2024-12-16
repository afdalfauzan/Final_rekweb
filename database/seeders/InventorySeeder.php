<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Inventory::create([
            'name' => 'Item A',
            'quantity' => 10,
            'price' => 5000
        ]);

        Inventory::create([
            'name' => 'Item B',
            'quantity' => 5,
            'price' => 2000
        ]);
    }
}
