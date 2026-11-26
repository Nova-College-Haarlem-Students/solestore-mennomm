<?php

namespace Database\Seeders;

use App\Models\Sneaker;
use Illuminate\Database\Seeder;

class SneakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sneakers = [
            [
                'brand_id' => 1,
                'name' => 'Air Force 1',
                'colorway' => 'White',
                'release_year' => 1982,
                'description' => 'A classic Nike sneaker with a clean and timeless design.',
            ],
            [
                'brand_id' => 1,
                'name' => 'Air Jordan 1',
                'colorway' => 'Red/Black',
                'release_year' => 1985,
                'description' => 'An iconic basketball sneaker designed for Michael Jordan.',
            ],
            [
                'brand_id' => 2,
                'name' => 'Superstar',
                'colorway' => 'White/Black',
                'release_year' => 1969,
                'description' => 'A classic Adidas sneaker known for its shell toe.',
            ],
            [
                'brand_id' => 2,
                'name' => 'Samba',
                'colorway' => 'White/Black',
                'release_year' => 1950,
                'description' => 'A popular Adidas sneaker originally designed for indoor football.',
            ],
            [
                'brand_id' => 3,
                'name' => 'Suede Classic',
                'colorway' => 'Blue/White',
                'release_year' => 1968,
                'description' => 'A stylish Puma sneaker made with a soft suede upper.',
            ],
            [
                'brand_id' => 3,
                'name' => 'RS-X',
                'colorway' => 'White/Grey',
                'release_year' => 2018,
                'description' => 'A chunky retro-inspired sneaker with a modern design.',
            ],
            [
                'brand_id' => 4,
                'name' => 'Chuck Taylor All Star',
                'colorway' => 'Black/White',
                'release_year' => 1917,
                'description' => 'A timeless canvas sneaker with a high-top design.',
            ],
            [
                'brand_id' => 4,
                'name' => 'One Star',
                'colorway' => 'Green/White',
                'release_year' => 1974,
                'description' => 'A classic Converse sneaker with a simple star logo.',
            ],
            [
                'brand_id' => 5,
                'name' => 'Old Skool',
                'colorway' => 'Black/White',
                'release_year' => 1977,
                'description' => 'A famous Vans skate shoe with its recognizable side stripe.',
            ],
            [
                'brand_id' => 5,
                'name' => 'Sk8-Hi',
                'colorway' => 'Black/White',
                'release_year' => 1978,
                'description' => 'A high-top Vans sneaker originally designed for skateboarders.',
            ],
        ];
        Sneaker::insert($sneakers);
    }
}
