<?php

namespace Database\Seeders;

use App\Models\Product;
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
      $product = new Product();
      $product->id =1;
      $product->name='WHISKEY';
      $product->price=150000;
      $product->type='rượu vang';
      $product->origin='Nhật Bản';
      $product->date_of_produce='2021-06-03';
      $product->alcohol_concentration='17';
      $product->image="";
      $product->save();
    }
}
