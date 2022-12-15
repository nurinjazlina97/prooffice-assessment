<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::insert([
            [
                'name'=>'Pencil',
                'price'=>'12.00',
            ],
            [
                'name'=>'Book',
                'price'=>'15.00',
            ],
            [
                'name'=>'Ruler',
                'price'=>'2.00',
            ],
        ]);
    }
}
