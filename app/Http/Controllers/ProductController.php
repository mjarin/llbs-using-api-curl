<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use GuzzleHttp\Client;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;


class ProductController extends Controller
{
    
  public function getCategory(){
      

        $response = Http::get('https://supplier.circle.com.bd/api/category-api');
        $data =json_decode($response->body());
         foreach($data as $cate){
            $cate = (array)$cate;

          Category::updateOrCreate(
            ['slug'=> $cate['slug']],
            [
            'id'=> $cate['id'],
            'parent_id'=> $cate['parent_id'],
            'category_name'=> $cate['name'],
            'order_level'=> $cate['order_level'],
            'image'=> $cate['cover_image'],
            'slug'=> $cate['slug'],
            'description'=> $cate['meta_description'],
            'status'=> $cate['status'],
            'featured'=> $cate['featured'],
            'meta_title'=> $cate['meta_title'],
            'meta_description'=> $cate['meta_description']
        ]);

    }

   return redirect()->back()->with('status','Category Stored Successfully');
     
}
    
    
    
public function test(){

        // insertProducts();
        $response = Http::get('https://supplier.circle.com.bd/api/product-api');

        // dd($response->collect());
        // echo "<pre>";
        // print_r($response->body());
        // die;
        
        $data =json_decode($response->body());
         foreach($data as $product){
            $product = (array)$product;

            $calc = $product['price']*0.40;
            $price =round($product['price']+$calc);


            Product::updateOrCreate(
                ['sku'=> $product['tags']],
                [
                'id'=> $product['prodId'],
                'name'=> $product['prodName'],
                'sku'=> $product['tags'],
                'image'=> $product['file_name'],
                'description'=>$product['description'],
                'selling_price'=>$price,
                'slug'=> $product['prodSlug'],
                'status'=> $product['published'],
                'qty'=> $product['current_stock'],
                'cate_id'=> $product['cateId'],
                'package'=> 1,
                'status'=> $product['published'],

            ]);

         }

        return redirect()->back()->with('status','Data Stored');



    }

public function testOrders($id){

    $order=Order::where('id','=', $id)->first();

  if($order->delivery_status =='Pending'){
    connection($id);
    $update=Order::findOrFail($id);
    $update ->delivery_status ='Complete';
    $update ->update();
    return redirect()->back()->with('status','Data Sent to circle.com.bd');
    }
    elseif($order ->delivery_status =='Complete')
   {

    return redirect()->back()->with('status','Order already been processed');
   }

}
}



