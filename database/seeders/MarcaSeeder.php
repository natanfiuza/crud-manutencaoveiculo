<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('marcas')->truncate();
        Schema::enableForeignKeyConstraints();
        \App\Models\Marca::insert([
            ["id" => 1, "name" => 'Aston Martin',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/aston-martin-lg.png?cache_ver=v16_05_20"],
            ["id" => 2, "name" => 'Audi',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/audi-lg.png?cache_ver=v22_05_20"],
            ["id" => 3, "name" => 'Bentley',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/bentley-lg.png?cache_ver=v22_05_20"],
            ["id" => 4, "name" => 'BMW',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/bmw-lg.png?cache_ver=v22_05_20"],
            ["id" => 5, "name" => 'BMW Motorrad',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/bmw-motorrad-lg.png?cache_ver=v22_05_20"],
            ["id" => 6, "name" => 'BYD',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/byd-lg.png?cache_ver=v22_05_20"],
            ["id" => 7, "name" => 'Caoa Chery',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/caoa-chery-lg.png?cache_ver=v22_05_20"],
            ["id" => 8, "name" => 'Chevrolet',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/chevrolet-lg.png?cache_ver=v22_05_20"],
            ["id" => 9, "name" => 'Chrysler',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/chrysler-lg.png?cache_ver=v22_05_20"],
            ["id" => 10, "name" => 'Citroën',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/citroen-lg.png?cache_ver=v22_05_20"],
            ["id" => 11, "name" => 'Dodge',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/dodge-lg.png?cache_ver=v22_05_20"],
            ["id" => 12, "name" => 'Ferrari',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/ferrari-lg.png?cache_ver=v22_05_20"],
            ["id" => 13, "name" => 'Fiat',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/fiat-lg.png?cache_ver=v22_05_20"],
            ["id" => 14, "name" => 'Ford',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/ford-lg.png?cache_ver=v22_05_20"],
            ["id" => 15, "name" => 'Honda',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/honda-lg.png?cache_ver=v22_05_20"],
            ["id" => 16, "name" => 'Husqvarna',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/husqvarna-lg.png?cache_ver=v22_05_20"],
            ["id" => 17, "name" => 'Hyundai',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/hyundai-lg.png?cache_ver=v22_05_20"],
            ["id" => 18, "name" => 'JAC',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/jac-lg.png?cache_ver=v22_05_20"],
            ["id" => 19, "name" => 'Jaguar',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/jaguar-lg.png?cache_ver=v22_05_20"],
            ["id" => 20, "name" => 'Jeep',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/jeep-lg.png?cache_ver=v22_05_20"],
            ["id" => 21, "name" => 'Kia',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/kia-lg.png?cache_ver=v22_05_20"],
            ["id" => 22, "name" => 'Lamborghini',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/lamborghini-lg.png?cache_ver=v22_05_20"],
            ["id" => 23, "name" => 'Land Rover',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/land-rover-lg.png?cache_ver=v22_05_20"],
            ["id" => 24, "name" => 'Lexus',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/lexus-lg.png?cache_ver=v22_05_20"],
            ["id" => 25, "name" => 'Lifan',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/lifan-lg.png?cache_ver=v22_05_20"],
            ["id" => 26, "name" => 'Maserati',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/maserati-lg.png?cache_ver=v22_05_20"],
            ["id" => 27, "name" => 'McLaren',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/mclaren-lg.png?cache_ver=v22_05_20"],
            ["id" => 28, "name" => 'Mercedes-Benz',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/mercedes-benz-lg.png?cache_ver=v22_05_20"],
            ["id" => 29, "name" => 'Mini',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/mini-lg.png?cache_ver=v22_05_20"],
            ["id" => 30, "name" => 'Mitsubishi',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/mitsubishi-lg.png?cache_ver=v22_05_20"],
            ["id" => 31, "name" => 'Nissan',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/peugeot-lg.png?cache_ver=v22_05_20"],
            ["id" => 32, "name" => 'Peugeot',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/peugeot-lg.png?cache_ver=v22_05_20"],
            ["id" => 33, "name" => 'Porsche',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/porsche-lg.png?cache_ver=v22_05_20"],
            ["id" => 34, "name" => 'Ram',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/ram-lg.png?cache_ver=v22_05_20"],
            ["id" => 35, "name" => 'Renault',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/renault-lg.png?cache_ver=v22_05_20"],
            ["id" => 36, "name" => 'Rolls Royce',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/rolls-royce-lg.png?cache_ver=v22_05_20"],
            ["id" => 37, "name" => 'Royal Enfield',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/royal-enfield-lg.png?cache_ver=v22_05_20"],
            ["id" => 38, "name" => 'Smart',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/smart-lg.png?cache_ver=v22_05_20"],
            ["id" => 39, "name" => 'Subaru',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/subaru-lg.png?cache_ver=v22_05_20"],
            ["id" => 40, "name" => 'Suzuki',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/suzuki-lg.png?cache_ver=v22_05_20"],
            ["id" => 41, "name" => 'Toyota',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/toyota-lg.png?cache_ver=v22_05_20"],
            ["id" => 42, "name" => 'Triumph',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/triumph-lg.png?cache_ver=v22_05_20"],
            ["id" => 43, "name" => 'Troller',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/troller-lg.png?cache_ver=v22_05_20"],
            ["id" => 44, "name" => 'Wolkswagen',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/volkswagen-lg.png?cache_ver=v22_05_20"],
            ["id" => 45, "name" => 'Volvo',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/volvo-lg.png?cache_ver=v22_05_20"],
            ["id" => 46, "name" => 'Yamaha',"url_image" => "https://jornaldocarro.estadao.com.br/wp-content/themes/jornaldocarro/dist/images/sprite-imgs/brands/yamaha-lg.png?cache_ver=v22_05_20"],
            ["id" => 47, "name" => 'Tesla',"url_image" => "https://live.staticflickr.com/65535/51704674380_51bcd001ee_o.png"],
            ["id" => 48, "name" => 'Alfa Romeo',"url_image" => "https://live.staticflickr.com/65535/51704674695_423382a2f5_o.png"],
        ]);
    }
}
