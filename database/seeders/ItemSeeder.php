<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create([
            'name' => 'Sample Item 1',
            'description' => 'Description for Item 1',
            'quantity' => 10,
        ]);

        Item::create([
            'name' => 'Sample Item 2',
            'description' => 'Description for Item 2',
            'quantity' => 20,
        ]);
    }
}
