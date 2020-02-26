<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Carbon\Carbon;
use App\Catagory;

class ProductController extends Controller
{
    function insert_product(){
        $catagorys=Catagory::all();
        return view("product",compact('catagorys'));
    }

    public function create(Request $request){

        Product :: insert([


            'product_name'=>$request ->product_name,
            'iproduct_catagoryd'=>$request ->iproduct_catagoryd,
            'product_quality'=>$request ->product_quality,
            'product_price'=>$request ->product_price,
            'product_discription'=>$request ->product_discription,
            'created_at'=> Carbon :: now(),
            

        ]);

        return back();


    }
        function pro_list()
        {
            $products=Product::all();

            return view("list",compact('products'));
        
    }

        function pro_delete($id)
        {
            Product::findOrFail($id)->delete();

            return back();

         
        }
        function pro_edit($id)
        {
        
          $productdata = Product::findOrFail($id);
          
          return view('update',compact('productdata','id'));

            // return back();

         
        }
        function pro_update(Request $request){

            Product::findOrFail($request->Pid)->update([
            'product_name'=>$request ->product_name,
            'product_catagory'=>$request ->product_catagory,
            'product_quality'=>$request ->product_quality,
            'product_price'=>$request ->product_price,
            'product_discription'=>$request ->product_discription,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

            ]);
            return redirect(route('list'));
        }
        
       
 
    // end
}
