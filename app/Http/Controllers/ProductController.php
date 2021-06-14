<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
//        $products = $this->productService->getAll();
        $products = DB::table('product')->paginate(5);
        return view('product.list', compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }

    public function store(CreateRequest $request)
    {
        $this->productService->store($request);
        return redirect()->route('product.list');
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('product.list');
    }

    public function edit($id)
    {
        $product = $this->productService->getById($id);
        return view('product.edit' , compact('product'));
    }

    public function update(CreateRequest $request)
    {
        $this->productService->update($request);
        return redirect()->route('product.list');
    }

    public function search(Request $request){
       $products=Product::where('name','like','%'.$request->search.'%')
            ->paginate(5);
      return view('product.list',compact('products'));
    }
}
