<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventaris = [
            [
                "name"=> "Komputer",
                "type"=> "fixed asset",
                "quantity"=> 10,
            ],
            [
                "name"=> "Meja",
                "type"=> "fixed asset",
                "quantity"=> 25,
            ],
            [
                "name"=> "Printer",
                "type"=> "fixed asset",
                "quantity"=> 6,
            ],
            [
                "name"=> "Tinta Printer",
                "type"=> "supplies",
                "quantity"=> 18,
            ],
            [
                "name"=> "Kertas A4",
                "type"=> "supplies",
                "quantity"=> 7,
            ],
        ];

        foreach ($inventaris as $item) {
            DB:: table("inventaris")->insert($item);
        }
    }
}
