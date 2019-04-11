<?php

namespace App\Http\Controllers;

use App\Category;
use App\Media;
use App\Message;
use App\Price;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

  public function dashboard(){
    $categories = Category::orderBy('id', 'desc')->get();
    $products = Product::orderBy('id', 'desc')->get();
    $media = Media::orderBy('id', 'desc')->get();
    $messages = Message::orderBy('id', 'desc')->get();

    return view('home', compact(['categories', 'products', 'media', 'messages']));
  }


  public function categoryAdd(Request $request){
    Category::create([
      'name' => $request->name
    ]);

    return back();
  }

  public function categoryDelete(Request $request){
    $category = Category::find($request->id);
    $category->delete();
    return back();
  }


  public function productAdd(Request $request){

    $image = $request->file('image');
    $path = $this->upload($image);
    Product::create([
      'category_id' => $request->category_id,
      'name' => $request->name,
      'image_url' => $path,
    ]);

    return back();
  }

  public function productDelete(Request $request){
    $product = Product::find($request->id);
    $product->delete();
    return back();
  }

  public function productInsertPrice(Request $request){
    Price::create([
      'product_id' => $request->product_id,
      'amount' => $request->amount,
    ]);

    return back();
  }








  private function upload($file){
    $file_path = '';
    if ($file !== null) {
      $dir = $this->getFileDirName('images');
      $name = $file->getClientOriginalName();
      $file_path = $dir . '/' . $name ;
      $file->move($dir, $name);
    }
    return $file_path;
  }

  private function getFileDirName($file_dir){
    date_default_timezone_set('Asia/Tehran');
    $year_dir = date('Y', time());
    $month_dir = date('m', time());
    $file_dir = 'uploads/' . $file_dir . '/' . $year_dir . '/' . $month_dir;
    return $file_dir;
  }

}
