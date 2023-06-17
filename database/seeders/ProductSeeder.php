<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
                [
                    'name' => 'Arroz',
                    'availability' => 'enable',
                    'image' => 'https://jumbocolombiaio.vtexassets.com/arquivos/ids/186323-800-600?v=637813981860700000&width=800&height=600&aspect=true',
                    'price' => 1314
                ],
                [
                    'name' => 'Atún',
                    'availability' => 'enable',
                    'image' => 'https://supermercadolaestacion.com/30766-thickbox_default/enlatado-alamar-x140gr-ensalada-de-atun-primaveral.jpg',
                    'price' => 1153
                ],
                [
                    'name' => 'Aceite',
                    'availability' => 'desable',
                    'image' => 'https://riovalle.co/wp-content/uploads/2021/01/Aceite-de-Oliva-Extra-Virgen-x-500.png',
                    'price' => 227
                ],
                [
                    'name' => 'Mayonesa',
                    'availability' => 'enable',
                    'image' => 'https://cdn.shopify.com/s/files/1/0492/2458/1274/products/supermercados_la_vaquita_supervaquita_mayonesa_fruco_600gr_salsas_1024x1024.jpg?v=1620493642',
                    'price' => 348
                ],
                [
                    'name' => 'Huevos',
                    'availability' => 'enable',
                    'image' => 'https://www.cronista.com/files/image/447/447378/620550e7a2654.jpg',
                    'price' => 998
                ]
            ];

            foreach ($product as $key => $value) {
                Product::create($value);
            }
        }
}
