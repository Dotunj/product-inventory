<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Requests\CreateProductFormRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        $result = [
            'status'=> true,
            'message'=> 'successfully retrieved all products',
            'data' => $products
        ];

        return response($result, 200);
    }

    public function store(CreateProductFormRequest $request)
    {

         $product = new Product();

         //create a new product
         $product->create([   
             'name'=>$request->name,
             'quantity'=>$request->quantity
         ]);

         $result = [
             'status' => true,
             'message' => 'successfully created product',
             'data' => $product
         ];

        return response($result, 201);
        
    }

    public function edit(Product $product)
    {
      $result = [
        'status'=>true,
        'message'=>'successfully retrieved product',
        'data'=> $product
      ];

      return response($result, 200);
    }

    public function update(CreateProductFormRequest $request, Product $product)
    {
        $product->update([
          'name'=> $request->name,
          'quantity'=>$request->quantity,
        ]);

        $result = [
          'status'=>true,
          'message'=>'successfully updated product',
          'data'=>$product
        ];

      return response($result, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        $result = [
            'status'=>true,
            'message'=>'successfully deleted product',
            'data'=>$product
          ];

        return response($result, 200);
    }
}
