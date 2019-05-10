<?php

namespace App\Http\Controllers;

use App\Category;
use App\Media;
use App\Message;
use App\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
      $products = Product::orderBy('id', 'desc')->take(3)->get();
      return view('app', compact('products'));
    }

    public function messageSend(Request $request){
      Message::create([
        'email' => $request->email,
        'title' => $request->title,
        'description' => $request->description,
      ]);

      return back();
    }

    public function gallery(){
      $media = Media::orderBy('id', 'desc')->get();
      return view('gallery', compact('media'));
    }

    public function humanResource(){
      return view('humanResource');
    }

    public function chainSet(){
      return view('chainSet');
    }

    public function products(){
      $categories = Category::all();
      $counter = 0;
      return view('products',compact(['categories', 'counter']));
    }

    public function aboutUs(){
      return view('aboutUs');
    }


    public function priceByDate($product_id, $date){
      $product = Product::find($product_id);
      $timestamp = substr($date, 0, -3);
      // timestamp to date
      $date =  date("Y-m-d",(int)$timestamp);
      $result = 0;
      $price = $product->prices()->where('date', '=', $date)->orderBy('id', 'desc')->first();
      if ($price != null) {
        $result = $price->amount;
        $result = number_format($result);
      }
      return $result;
    }
}
