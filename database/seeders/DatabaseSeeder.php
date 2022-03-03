<?php

namespace Database\Seeders;

use App\Models\ProductDiscount;
use App\Models\ProductHasSpec;
use App\Models\ProductMedia;
use App\Models\ProductSpec;
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
      $this->call(ProductMedia::class);
      $this->call(ProductStock::class);
      $this->call(ProductCategory::class);
      $this->call(ProductHasCategory::class);
      $this->call(ProductDiscount::class);
      $this->call(ProductHasDiscount::class);
      $this->call(ProductSpec::class);
      $this->call(ProductHasSpec::class);
    }
}
