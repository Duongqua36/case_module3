<?php


namespace App\Http\Repositories;


use App\Models\Product;
use App\Http\Repositories\Repository;

class ProductRepository extends Repository
{
    public function getAll()
    {
        return Product::all();
    }

    public function getInstance()
    {
        return new Product();
    }

    public function store($product)
    {
        $product->save();
    }

    public function getFix($id)
    {
     return  Product::findOrFail($id);

    }

    public function update($product)
    {
        $product->update();
    }
}
