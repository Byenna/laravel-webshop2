<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specs = [
            'bigmachine',
            'smallmachine',
            'darkbeans',
            'mediumbeans',
            'blondbeans',
            'setcups',
            'perstuckcup'
        ];

        foreach ($specs as $spec) {
            \App\Models\ProductSpec::create([
                'name'  => $spec,
            ]);
        }
    }
}
