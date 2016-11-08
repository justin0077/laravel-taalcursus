<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'img/cursus1.jpg',
            'title' => 'Amazigh',
            'description' => 'Cursus die u kunt kopen',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img/cursus2.jpg',
            'title' => 'Fries',
            'description' => 'Cursus die u kunt kopen',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img/cursus3.jpg',
            'title' => 'Baskisch',
            'description' => 'Cursus die u kunt kopen',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img/cursus4.jpg',
            'title' => 'Catalaans',
            'description' => 'Cursus die u kunt kopen',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'img/cursus5.jpg',
            'title' => 'Koerdisch',
            'description' => 'Cursus die u kunt kopen',
            'price' => 10
        ]);
        $product->save();
    }
}
