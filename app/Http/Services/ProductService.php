<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Http\Requests\CreateRequest;
use App\Http\Services\BaseService;

class ProductService extends BaseService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;

    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    public function store(CreateRequest $request)
    {
        $product = $this->productRepo->getInstance();
        $product->fill($request->all());
     //  toastr()->success('them du lieu thanh cong');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('img', 'public');
            $product->image = $path;
        }
        $this->productRepo->store($product);
    }

    public function getById($id){
        return $this->productRepo->getFix($id);
    }

    public function update(CreateRequest $request)
    {
        $product = $this->productRepo->getFix($request->id);
        $product->fill($request->all());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('img', 'public');
            $product->image = $path;
        }
        $this->productRepo->update($product);
    }
}
