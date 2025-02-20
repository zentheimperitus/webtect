<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['item_name' => 'Laptop', 'price' => 599.99, 'category_id' => 1], // Technology
            ['item_name' => 'Smartphone', 'price' => 799.99, 'category_id' => 1], // Technology
            ['item_name' => 'Yoga Mat', 'price' => 25.00, 'category_id' => 2], // Health
            ['item_name' => 'Vitamins', 'price' => 15.00, 'category_id' => 2], // Health
            ['item_name' => 'Math Textbook', 'price' => 39.99, 'category_id' => 3], // Education
            ['item_name' => 'Notebook', 'price' => 5.00, 'category_id' => 3], // Education
        ]);
    }
}
