<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Producto;

class ProductTableSeeder extends Seeder
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
            'nombre' => 'Casco de Iron man',
            'ficha' => 'super heroes',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 275.00,
            'imagen' => 'https://files.cults3d.com/uploaders/12971916/illustration-file/2b4ee36a-f8a8-4e25-b89a-156616be8584/c5e240db08b254c06f2e518944dbcafb_display_large_large.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'categoria_id' => 1
            ],
            [
            'nombre' => 'Robot 360',
            'ficha' => 'robot0360',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 575.00,
            'imagen' => 'https://files.cults3d.com/uploaders/13621088/illustration-file/a2a300da-5939-48b2-894d-7144228946b6/13_large.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'categoria_id' => 1
            ],
            [
            'nombre' => 'Arma de Fuego',
            'ficha' => 'calibre 2',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 125.00,
            'imagen' => 'https://www.3dnatives.com/es/wp-content/uploads/sites/4/article_3Dguns3.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'categoria_id' => 1
            ],
            [
            'nombre' => 'Display',
            'ficha' => 'display',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 75.00,
            'imagen' => 'https://www.steren.com.mx/media/catalog/product/cache/b69086f136192bea7a4d681a8eaf533d/image/169961e17/display-de-7-segmentos-anodo-comun-de-12-7-mm-0-5-pulgadas.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'categoria_id' => 1
            ]
        );
        Producto::insert($data);
    }
}