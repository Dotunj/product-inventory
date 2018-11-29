<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;

class ProductController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function total()
    {
        $products_count = Product::all()->count();

        $result = [
          'status'=>true,
          'data'=>$products_count
        ];

        return response()->json($result, 200);

    }
    public function index()
    {
        $products = Product::latest()->get();

        $result = [
            'status'=> true,
            'message'=> 'successfully retrieved all products',
            'data' => $products
        ];

        return response()->json($result, 200);
    }

    public function store(Request $request)
    {
        $rules = [
        'name'=>'required',
        'quantity'=>'required'
         ];
      
        //validate incoming data
      $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
          return response()->json($validator->messages());
        }

         $product = new Product();

         //create a new product
         $product->create([   
             'name'=>$request->name,
             'quantity'=>$request->quantity
         ]);

         $result = [
             'status' => true,
             'message' => 'Product has been added',
         ];

        return response()->json($result, 201);
        
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

    public function update(Request $request, Product $product)
    {
        $rules = [
            'name'=>'required',
            'quantity'=>'required'
            ];
    
          $validator = Validator::make($request->all(), $rules); 
            if($validator->fails()){
              return response()->json($validator->messages());
            }

        $product->update([
          'name'=> $request->name,
          'quantity'=>$request->quantity,
        ]);

        $result = [
          'status'=>'true',
          'message'=>'Product has been updated',
          'data'=>$product
        ];

      return response()->json($result, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        $result = [
            'status'=>true,
            'message'=>'Product has been deleted',
          ];

        return response()->json($result, 200);
    }
}
