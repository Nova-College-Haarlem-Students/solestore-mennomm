<?php

namespace Database\Seeders;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
     public function run()
    {
        $brands =[
         ['name' => 'Nike',
            'country' => 'US',
            'description' => 'Bekend om sportieve schoenen, sneakers en innovatieve ontwerpen voor sport en dagelijks gebruik.'],

        ['name' => 'Adidas',
            'country' => 'DE',
            'description' => 'Maakt sport- en lifestyle schoenen. Bekend om de drie strepen en modellen zoals de Superstar en Samba.'],

        ['name' => 'Puma',
            'country' => 'DE',
            'description' => 'Produceert sportieve en modieuze schoenen. Het merk staat bekend om comfort en opvallende designs.'],

        ['name' => 'Converse',
            'country' => 'US',
            'description' => 'Vooral bekend om de Chuck Taylor All Star. Het merk heeft een herkenbare, klassieke sneakerstijl.'],

        ['name' => 'Vans',
            'country' => 'US',
            'description' => 'Bekend om skateboardschoenen en casual sneakers. Heeft een stoere stijl en is populair binnen de skatecultuur.'],
    ];
    Brand::insert($brands);
            }
}
