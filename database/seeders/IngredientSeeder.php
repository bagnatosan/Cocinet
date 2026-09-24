<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ingredient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // -------------------------------------------------------------
        // USUARIOS ESPECIALES (Admin y Cliente)
        // -------------------------------------------------------------
        DB::table('users')->insertOrIgnore([
            [
                'name' => 'Administrador',
                'email' => 'admin@cocinet.com',
                'role' => 'admin',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cliente de Prueba',
                'email' => 'cliente@cocinet.com',
                'role' => 'client',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // -------------------------------------------------------------
        // VENDEDOR 1: Pastelería Dulce Arte
        // -------------------------------------------------------------
        $userId1 = DB::table('users')->insertGetId([
            'name' => 'Pastelería Dulce Arte',
            'email' => 'vendedor@prueba.com',
            'role' => 'seller',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $businessId1 = DB::table('business_profiles')->insertGetId([
            'user_id' => $userId1,
            'business_name' => 'Pastelería Dulce Arte',
            'description' => 'Tortas personalizadas, postres artesanales y pastelería fina para eventos.',
            'address' => 'Av. Corrientes 1234, CABA',
            'latitude' => -34.603722,
            'longitude' => -58.381592,
            'phone' => '1122223333',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $cat1 = DB::table('categories')->insertGetId([
            'business_profile_id' => $businessId1,
            'name' => 'Tortas y Tartas',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            [
                'business_profile_id' => $businessId1,
                'category_id' => $cat1,
                'name' => 'Torta Selva Negra',
                'description' => 'Bizcochuelo húmedo de chocolate, relleno de crema chantilly, cerezas y virutas de chocolate semiamargo.',
                'price' => 14500.00,
                'estimated_cost' => 5200.00,
                'suggested_price' => 15600.00,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'business_profile_id' => $businessId1,
                'category_id' => $cat1,
                'name' => 'Cheesecake de Frutos Rojos',
                'description' => 'Base crocante de galletas, suave crema de queso y cobertura casera de frutos del bosque.',
                'price' => 13500.00,
                'estimated_cost' => 4800.00,
                'suggested_price' => 14400.00,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $ingredients1 = [
            ['business_profile_id' => $businessId1, 'name' => 'Harina 0000', 'unit_measure' => 'kg', 'unit_cost' => 1200.00],
            ['business_profile_id' => $businessId1, 'name' => 'Azúcar Blanco', 'unit_measure' => 'kg', 'unit_cost' => 1000.00],
            ['business_profile_id' => $businessId1, 'name' => 'Huevos', 'unit_measure' => 'docena', 'unit_cost' => 2400.00],
            ['business_profile_id' => $businessId1, 'name' => 'Manteca', 'unit_measure' => 'g', 'unit_cost' => 1500.00],
            ['business_profile_id' => $businessId1, 'name' => 'Chocolate Semiamargo', 'unit_measure' => 'kg', 'unit_cost' => 8500.00],
            ['business_profile_id' => $businessId1, 'name' => 'Esencia de Vainilla', 'unit_measure' => 'ml', 'unit_cost' => 500.00],
            ['business_profile_id' => $businessId1, 'name' => 'Leche Entera', 'unit_measure' => 'litro', 'unit_cost' => 1100.00],
            ['business_profile_id' => $businessId1, 'name' => 'Dulce de Leche Repostero', 'unit_measure' => 'kg', 'unit_cost' => 3800.00],
        ];

        foreach ($ingredients1 as $ingredient) {
            Ingredient::create($ingredient);
        }

        // -------------------------------------------------------------
        // VENDEDOR 2: Panadería Don Julio
        // -------------------------------------------------------------
        $userId2 = DB::table('users')->insertGetId([
            'name' => 'Don Julio',
            'email' => 'julio@panaderia.com',
            'role' => 'seller',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $businessId2 = DB::table('business_profiles')->insertGetId([
            'user_id' => $userId2,
            'business_name' => 'Panadería Don Julio',
            'description' => 'Panes artesanales de masa madre y facturas tradicionales hechas a mano.',
            'address' => 'Av. Santa Fe 2345, CABA',
            'latitude' => -34.595000,
            'longitude' => -58.400000,
            'phone' => '1133334444',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $cat2 = DB::table('categories')->insertGetId([
            'business_profile_id' => $businessId2,
            'name' => 'Panes de Masa Madre',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('products')->insert([
            [
                'business_profile_id' => $businessId2,
                'category_id' => $cat2,
                'name' => 'Hogaza de Masa Madre',
                'description' => 'Pan rústico de fermentación natural de 24 horas, corteza crocante y miga suave y elástica.',
                'price' => 3500.00,
                'estimated_cost' => 950.00,
                'suggested_price' => 3800.00,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'business_profile_id' => $businessId2,
                'category_id' => $cat2,
                'name' => 'Medialunas de Manteca (Docena)',
                'description' => 'Docena de medialunas hojaldradas y almibaradas al estilo tradicional.',
                'price' => 7200.00,
                'estimated_cost' => 2400.00,
                'suggested_price' => 7800.00,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $ingredients2 = [
            ['business_profile_id' => $businessId2, 'name' => 'Harina de Trigo', 'unit_measure' => 'kg', 'unit_cost' => 900.00],
            ['business_profile_id' => $businessId2, 'name' => 'Levadura Seca', 'unit_measure' => 'g', 'unit_cost' => 3.00],
            ['business_profile_id' => $businessId2, 'name' => 'Sal Fina', 'unit_measure' => 'kg', 'unit_cost' => 800.00],
            ['business_profile_id' => $businessId2, 'name' => 'Agua', 'unit_measure' => 'litro', 'unit_cost' => 10.00],
            ['business_profile_id' => $businessId2, 'name' => 'Grasa Vacuna', 'unit_measure' => 'g', 'unit_cost' => 4.00],
        ];

        foreach ($ingredients2 as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}