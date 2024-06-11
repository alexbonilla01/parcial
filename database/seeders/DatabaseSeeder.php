<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        {
            $this->call(ProductoSeeder::class);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}


class ProductoSeeder extends Seeder
{

    
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Producto 1',
                'precio' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Producto 2',
                'precio' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Producto 3',
                'precio' => 30.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    
}