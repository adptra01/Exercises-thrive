<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function index()
    {
        return view('product.index', [
            'products' => Product::latest()->get()
        ]);
    }

    public function store(ProductRequest $request)
    {
        $validateData = $request->validated();

        Product::create($validateData);

        return back()->with('success', 'Berhasil Bro!');
    }
    public function update(ProductRequest $request, $id)
    {
        $validateData = $request->validated();
        $product = Product::findOrfail($id);
        $product->update($validateData);

        return back()->with('success', 'Berhasil Bro!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return back()->with('success', 'Berhasil Bro!');
    }

    public function all()
    {
        $products = $this->productService->all();

        return response()->json($products);
    }
}
