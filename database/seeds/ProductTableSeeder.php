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
            'nombre' => 'Super heroes',
            'ficha' => 'super heroes',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 275.00,
            'imagen' => 'https://i.ytimg.com/vi/OLWzk5lriaw/maxresdefault.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'categoria_id' => 1
            ],
            [
            'nombre' => 'Super heroes',
            'ficha' => 'super heroes',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 275.00,
            'imagen' => 'https://files.cults3d.com/uploaders/13621088/illustration-file/a2a300da-5939-48b2-894d-7144228946b6/13_large.jpg',
            'visible' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'categoria_id' => 1
            ],
            [
            'nombre' => 'Transformador',
            'ficha' => 'transformador',
            'descripcion' => 'lorem ipsum dolor sit amet, consectetur
                adupicing elit. TEmpore, perferendis!',
            'extracto' => 'lorem ipsun dolor sit amet, consectetur adipisicing elit.',
            'precio' => 75.00,
            'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Transformer3d_col3_es.svg/400px-Transformer3d_col3_es.svg.png',
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