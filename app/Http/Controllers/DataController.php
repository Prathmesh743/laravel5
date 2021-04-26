<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Validator;
class DataController extends Controller
{
    //
       public function getData(Request $request)
       {
 
            $data= DB::table('products')
                        ->join('product_images' ,  'products.id', '=', 'product_images.product_id')
                        ->groupBy('product_images.product_id')
                        ->get();


               return  $data;              
       }

       public function uploadImage(Request $request)
       {
          $validator = Validator::make($request->all(),
            ['image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048']
           );

           if ($validator->fails())
           {
               // The given data did not pass validation

               return response()->json();
           }

       }
}
