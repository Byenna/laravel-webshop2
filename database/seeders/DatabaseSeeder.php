<?php

namespace Database\Seeders;

// use App\Database\ProductDiscountSeeder;
// use App\Database\ProductHasSpecSeeder;
// use App\Database\ProductMediaSeeder;
// use App\Database\ProductSpecSeeder;
// use App\Database\ProductHasCategorySeeder;
// use App\Database\ProductHasDiscountSeeder;
// use App\Database\ProductCategorySeeder;
// use App\Database\ProductSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(ProductSeeder::class);
      $this->call(ProductMediaSeeder::class);
      $this->call(ProductStockSeeder::class);
      $this->call(ProductCategorySeeder::class);
      $this->call(ProductHasCategorySeeder::class);
      $this->call(ProductDiscountSeeder::class);
      $this->call(ProductHasDiscountSeeder::class);
      $this->call(ProductSpecSeeder::class);
      $this->call(ProductHasSpecSeeder::class);
    }
}
