<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


 public function run(): void
    {
        Product::create([
            'name' => 'Producto Uno',
            'slug' => 'producto-uno',
            'details' =>'Este es un producto de prueba numero uno',
            'description' => 'Esta es una descripcion del producto',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-ROJ-323',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'Imagen-1.png'
        ]);
        Product::create([
            'name' => 'Producto dos',
            'slug' => 'producto-dos',
            'details' =>'Este es un producto de prueba numero dos',
            'description' => 'Esta es una descripcion del producto numero 2',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-AZU-543',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path'=> 'Imagen-2.png'
        ]);
        Product::create([
            'name' => 'Producto tres',
            'slug' => 'producto-tres',
            'details' =>'Este es un producto de prueba numero tres',
            'description' => 'Esta es una descripcion del producto',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-ROJ-323',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path'=>'Imagen-3.png',
        ]);
        Product::create([
            'name' => 'Producto cuatro',
            'slug' => 'producto-cuatro',
            'details' =>'Este es un producto de prueba numero cuatro',
            'description' => 'Esta es una descripcion del producto',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-ROJ-323',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path'=>'Imagen-4.png',
        ]);
        Product::create([
            'name' => 'Producto cinco',
            'slug' => 'producto-cinco',
            'details' =>'Este es un producto de prueba numero cinco',
            'description' => 'Esta es una descripcion del producto',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-ROJ-323',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path'=>'Imagen-5.png'
        ]);
        Product::create([
            'name' => 'Producto seis',
            'slug' => 'producto-seis',
            'details' =>'Este es un producto de prueba numero seis',
            'description' => 'Esta es una descripcion del producto',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-ROJ-323',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path'=>'Imagen-6.png'
        ]);
        Product::create([
            'name' => 'Producto siete',
            'slug' => 'producto-siete',
            'details' =>'Este es un producto de prueba numero siete',
            'description' => 'Esta es una descripcion del producto',
            'price' => 250.00,
            'precio_venta' => 450.00,
            'shipping_cost' => 100.00,
            'sku' => 'PLA-ROJ-323',
            'stock' => 5,
            'category_id' => 2,
            'brand_id' => 5,
            'image_path'=>'Imagen-7.png',
        ]);


    }
}
