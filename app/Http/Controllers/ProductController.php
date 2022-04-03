<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use App\Http\Requests\NewProductPostRequest;
use App\Http\Requests\DeleteProductPostRequest;
use App\Service\Product\ProductService;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function new(NewProductPostRequest $request)
    {
        $query = (new ProductService())->handleNewProduct($request);

        if($query){
            return back()->with('status', 'Product saved');
        }else{
            return back()->with('status', 'Something went wrong');
        }
    }

    public function delete(DeleteProductPostRequest $request)
    {
        $query = (new ProductService())->handleDeleteProduct($request);

        if($query){
            return back()->with('status', 'Product deleted');
        }else{
            return back()->with('status', 'Something went wrong');
        }
    }
}
