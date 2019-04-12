<?php

namespace App\Http\Controllers;

use App\Category;
use App\Media;
use App\Message;
use App\Price;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
    date_default_timezone_set('Asia/Tehran');
    Price::create([
      'product_id' => $request->product_id,
      'amount' => $request->amount,
      'date' => date('Y-m-d'),
    ]);

    return back();
  }


  public function mediaAdd(Request $request){
    $file = $request->file('file');
    $mime_type = $file->getMimeType();
    $type = '';

    if(strpos($mime_type, 'video') !== false){
      $type = 'video';
    }elseif (strpos($mime_type, 'image') !== false){
      $type = 'image';
    }else{
      return back();
    }

    $path = $this->upload($file);
    $resized_path = 'uploads/video.png';

    if ($type == 'image'){
      $image = Image::make($path);
      $filename = self::generateRandomString(4) . 'resized' . $file->getClientOriginalName();
      $image->resize(400, 400);
      $resized_path = 'uploads/images/resized/' . $filename;
      $image->save(public_path($resized_path));
    }

    Media::create([
      'type' => $type,
      'resized_url' => $resized_path,
      'original_url' => $path,
      'text' => $request->input('text'),
    ]);

    return back();

  }


  public function mediaDelete(Request $request){
    $media = Media::find($request->id);
    $media->delete();

    return back();
  }








  private function upload($file){
    $file_path = '';
    if ($file !== null) {
      $dir = $this->getFileDirName('images');
      $name = self::generateRandomString(4).$file->getClientOriginalName();
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

  public static function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

}
