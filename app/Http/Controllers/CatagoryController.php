<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use Carbon\Carbon;

class CatagoryController extends Controller
{
    function pro_addcatagory(Request $request){

        Catagory:: insert([

            'iproduct_catagoryd'=>$request ->iproduct_catagoryd,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()

        ]);
            return back();

    }
    function pro_catagory(){

       return view('addcatagory');

}

    // end
    
}
