<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
            'nombre' => 'Super heroes',
            'ficha' => 'super heroes',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
            adupicing elit. TEmpore, perferendis!',
            'color' => '#440022'
            ],
            [
            'nombre' => 'Geek',
            'ficha' => 'geek',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
            adupicing elit. TEmpore, perferendis!',
            'color' => '#445500'
            ]
        );
        Categoria::insert($data);
    }
}