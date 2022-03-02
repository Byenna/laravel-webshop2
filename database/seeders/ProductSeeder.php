<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id'            => 1,
            'name'          => 'Simple and tasty',
            'description'   => 'A simple coffee machine that makes a tasty coffee, takes no space in the kitchen.',
            'info'          => 'CM357e',
            'price'         => 45,
            'vat'           => 0.5,         
            //'category_id'   => 1,      
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 2,
            'name'          => 'Profitional',
            'description'   => 'For coffee lovers, this is the one you need.',
            'info'          => 'CM359e',
            'price'         => 899,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 3,
            'name'          => 'Fresh',
            'description'   => 'Always fresh coffee. With or without milk, so tasty.',
            'info'          => 'CM356f',
            'price'         => 150,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 4,
            'name'          => 'Filter',
            'description'   => 'A wonderfull coffee machine. For people who love filtered coffee, this is the best.',
            'info'          => 'CM352f',
            'price'         => 200,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 5,
            'name'          => 'Easy',
            'description'   => 'Nice set. Making coffee with this set is an easy and wonderfull experience.',
            'info'          => 'CM363f',
            'price'         => 450,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 6,
            'name'          => 'Silver',
            'description'   => 'A beautifull silver coffee machine, tasty espresso and cappuccino.',
            'info'          => 'CM365f',
            'price'         => 130,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 7,
            'name'          => 'Small & Red',
            'description'   => 'Small but tasty. A beautifull red coffee machine that makes a tasty coffee.',
            'info'          => 'CM368e',
            'price'         => 99,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 8,
            'name'          => 'Take away and enjoy',
            'description'   => 'So tasty, so easy to use. Take it with you wherever you go.',
            'info'          => 'CM369e',
            'price'         => 55,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 9,
            'name'          => 'Handy and tasty',
            'description'   => 'Handy and easy to use coffee machine. Makes very tasty coffee.',
            'info'          => 'CM363e',
            'price'         => 80,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 10,
            'name'          => 'Super Machine',
            'description'   => 'A profitional coffee machine, for coffee lovers.',
            'info'          => 'CM370f',
            'price'         => 999,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 11,
            'name'          => 'Everyday Coffee',
            'description'   => 'Tasty coffee for your everyday life, for you, for your guests, for everybody.',
            'info'          => 'CM373e',
            'price'         => 80,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 12,
            'name'          => 'Modern',
            'description'   => 'Modern coffee machine, so beautifull and tasty.',
            'info'          => 'CM377f',
            'price'         => 199,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 13,
            'name'          => 'Super easy',
            'description'   => 'Super easy coffee machine, for who wants tasty coffee fast.',
            'info'          => 'CM371e',
            'price'         => 50,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 14,
            'name'          => 'Arabic',
            'description'   => 'Set for fresh bewed arabic coffee, so tasty, you will never regret it.',
            'info'          => 'CM378e',
            'price'         => 80,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 15,
            'name'          => 'Super profitional',
            'description'   => 'Super profitional coffee machine. Tasty coffee, it is worth it.',
            'info'          => 'CM380f',
            'price'         => 1982,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 16,
            'name'          => 'Work time coffee',
            'description'   => 'Tasty coffee. You can make it fast and start your work actively.',
            'info'          => 'CM490e',
            'price'         => 75,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 17,
            'name'          => 'Time out',
            'description'   => 'Drink this tasty coffee from this machine to relax and take a time out.',
            'info'          => 'CM495e',
            'price'         => 160,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 18,
            'name'          => 'Nice coffee',
            'description'   => 'Nice coffee machine that makes a tasty coffee for you.',
            'info'          => 'CM494e',
            'price'         => 399,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 19,
            'name'          => 'Coffee lovers',
            'description'   => 'If you love coffe, you will love this coffee machine.',
            'info'          => 'CM483e',
            'price'         => 275,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 20,
            'name'          => 'Cappuccino lovers',
            'description'   => 'This coffee machine is espically for you cappuccino lovers.',
            'info'          => 'CM400f',
            'price'         => 2560,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 21,
            'name'          => 'Cappuccino professional',
            'description'   => 'This professional coffee machine makes a tasty cappuccino.',
            'info'          => 'CM402f',
            'price'         => 2470,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 22,
            'name'          => 'Espresso',
            'description'   => 'Tasty espresso. You will always like it.',
            'info'          => 'CM410f',
            'price'         => 1999,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 23,
            'name'          => 'Tasty',
            'description'   => 'Tasty coffee. Small coffee machine that fits in small kitchens.',
            'info'          => 'CM501m',
            'price'         => 400,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 24,
            'name'          => 'Small cappuccino machine',
            'description'   => 'This small coffee machine is perfect for a cup of cappuccino.',
            'info'          => 'CM512m',
            'price'         => 680,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 25,
            'name'          => 'Tiny',
            'description'   => 'Tiny coffee machine. filtered coffee is the best.',
            'info'          => 'CM514m',
            'price'         => 89,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 26,
            'name'          => 'Unic',
            'description'   => 'Unic coffee machine. You will always love it.',
            'info'          => 'CM911m',
            'price'         => 90,
            'vat'           => 0.9,         
            //'category_id'   => 1,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 27,
            'name'          => 'INDONESIA Medium',
            'description'   => 'Indonesian coffee beans. Tasty coffee espically for cappuccino.',
            'info'          => '1 Kg',
            'price'         => 25,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 28,
            'name'          => 'COLOMBIA Medium',
            'description'   => 'colombian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 28,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 29,
            'name'          => 'COLOMBIA Blond',
            'description'   => 'Colombian coffee beans.',
            'info'          => '0.5 Kg',
            'price'         => 13,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 30,
            'name'          => 'BRAZIL Dark',
            'description'   => 'Brazilian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 30,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 31,
            'name'          => 'BRAZIL Blond',
            'description'   => 'Brazilian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 28,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 32,
            'name'          => 'INDIA Dark',
            'description'   => 'Indian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 30,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 33,
            'name'          => 'ETHIOPIA Medium',
            'description'   => 'Ethiopian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 27,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('products')->insert([
            'id'            => 34,
            'name'          => 'INDIA Medium',
            'description'   => 'Indian coffee beans.',
            'info'          => '0.5 Kg',
            'price'         => 12,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 35,
            'name'          => 'ETHIOPIA Blond',
            'description'   => 'Ethiopian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 29,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 36,
            'name'          => 'INDIA Blond',
            'description'   => 'Inidan coffee beans.',
            'info'          => '1 Kg',
            'price'         => 30,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 37,
            'name'          => 'INDONESIA Blond',
            'description'   => 'Indonesian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 27,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 38,
            'name'          => 'INDONESIA Dark',
            'description'   => 'Indonesian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 30,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 39,
            'name'          => 'BRAZIL Medium',
            'description'   => 'Barazilian coffee beans.',
            'info'          => '0.5 Kg',
            'price'         => 14,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 40,
            'name'          => 'VIETNAM Blond',
            'description'   => 'Veitnamian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 25,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 41,
            'name'          => 'VIETNAM Dark',
            'description'   => 'Veitnamian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 28,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 42,
            'name'          => 'VIETNAM Medium',
            'description'   => 'Veitnamian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 27,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 43,
            'name'          => 'PERU Blond',
            'description'   => 'Peruvian coffee beans.',
            'info'          => '1 Kg',
            'price'         => 28,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 44,
            'name'          => 'PERU Dark',
            'description'   => 'Peruvian coffee beans.',
            'info'          => '0.5 Kg',
            'price'         => 16,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 45,
            'name'          => 'UGANDA Medium',
            'description'   => 'Ugandan coffee beans.',
            'info'          => '1 Kg',
            'price'         => 26,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 46,
            'name'          => 'UGANDA Dark',
            'description'   => 'Ugandan coffee beans.',
            'info'          => '1 Kg',
            'price'         => 28,
            'vat'           => 0.9,         
            //'category_id'   => 2,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 47,
            'name'          => 'Black coffee cup set',
            'description'   => 'A beautifull set of coffee cups. 6 stucks.',
            'info'          => '6 stucks',
            'price'         => 35,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 48,
            'name'          => 'Beautifull brown coffee cup',
            'description'   => 'A beautifull coffee cup.',
            'info'          => '1 stuck',
            'price'         => 15,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 49,
            'name'          => 'brown coffee cup set',
            'description'   => 'A beautifull set of coffee cups. 2 stucks.',
            'info'          => '6 stucks',
            'price'         => 15,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 50,
            'name'          => 'White coffee cup Set',
            'description'   => 'A nice white set of coffee cups. 6 stucks.',
            'info'          => '6 stucks',
            'price'         => 40,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 51,
            'name'          => 'Grey coffee cup Set',
            'description'   => 'A large grey set of coffee cups. 6 stucks.',
            'info'          => '6 stucks',
            'price'         => 58,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 52,
            'name'          => 'Nice coffee cup Set',
            'description'   => 'A nice beautifull set of coffee cups. 12 stucks.',
            'info'          => '12 stucks',
            'price'         => 120,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 53,
            'name'          => 'Pottery coffee cup',
            'description'   => 'A pottery beautifull coffee cup.',
            'info'          => '1 stuck',
            'price'         => 12,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 54,
            'name'          => 'Beautifull coffee cup',
            'description'   => 'A beautifull and cozy coffee cup.',
            'info'          => '1 stuck',
            'price'         => 20,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 55,
            'name'          => 'Big coffee cup',
            'description'   => 'A big and nice coffee cup.',
            'info'          => '1 stuck',
            'price'         => 13,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 56,
            'name'          => 'Big white coffee cup',
            'description'   => 'A big white coffee cup.',
            'info'          => '1 stuck',
            'price'         => 7,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 57,
            'name'          => 'White small coffee cup',
            'description'   => 'A small white coffee cup',
            'info'          => '1 stuck',
            'price'         => 11,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 58,
            'name'          => 'Big pink coffee cup',
            'description'   => 'A big pink coffee cup.',
            'info'          => '1 stuck',
            'price'         => 18,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 59,
            'name'          => 'Green coffee cup set',
            'description'   => 'A green coffee cup.',
            'info'          => '6 stucks',
            'price'         => 64,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 60,
            'name'          => 'Green brown coffee cup set',
            'description'   => 'A green brown coffee cup set.',
            'info'          => '12 stucks',
            'price'         => 112,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('products')->insert([
            'id'            => 61,
            'name'          => 'Portable coffee cup',
            'description'   => 'A portable coffee cup.',
            'info'          => '1 stuck',
            'price'         => 16,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 62,
            'name'          => 'Nice grey coffee cup',
            'description'   => 'A grey coffee cup.',
            'info'          => '1 stuck',
            'price'         => 6,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 63,
            'name'          => 'Big beautifull coffee cup',
            'description'   => 'A big and beautifull coffee cup.',
            'info'          => '1 stuck',
            'price'         => 15,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 64,
            'name'          => 'Nice orange coffee cup set',
            'description'   => 'Orange and nice coffee cup set.',
            'info'          => '6 stucks',
            'price'         => 92,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 65,
            'name'          => 'White and gold coffee cup',
            'description'   => 'White and gold beautifull coffee cup.',
            'info'          => '1 stuck',
            'price'         => 18,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 66,
            'name'          => 'Beautifull coffee cup',
            'description'   => 'White and gold very nice coffee cup.',
            'info'          => '1 stuck',
            'price'         => 20,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('products')->insert([
            'id'            => 67,
            'name'          => 'Unic coffee cup',
            'description'   => 'Black and gold unic coffee cup.',
            'info'          => '1 stuck',
            'price'         => 28,
            'vat'           => 0.9,         
            //'category_id'   => 3,            
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


    }
}
