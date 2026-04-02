<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Posts;
use App\Models\Categories;

class PageController extends Controller
{
  public function index(){
    return view('pages.home');
  }

  public function product( Request $request ){
    $id = $request->input('id');
    if (!$id){
      return redirect('products');
    }
    $product = Products::find($id);
    $type = Categories::find($product->type);
    return view('pages.product', ['product' => $product, 'type' => $type->name]);
  }

  public function products( Request $request ){
    $filter_id = $request->input('filter_id', 'all');

    // Initialize the query
    $query = Products::orderBy('price', 'desc');

    // Apply filter only if it's not 'all'
    if ($filter_id !== 'all') {
      $query->where('type', $filter_id);
    }

    $products = $query->paginate(40)->withQueryString();;
    $filters = Categories::all();

    return view('pages.products', [
      'cars' => $products, 
      'filters' => $filters, 
      'current_id' => $filter_id
    ]);
  }


  public function contact(){
    return view('pages.contact');
  }	

  public function about(){
    return view('pages.about');
  }

  public function login(){
    return view('pages.login');
  }

  public function admin(){
    return view('pages.admin.admin');
  }

  public function admin_posts(){
    $posts = Posts::orderBy('id','desc')->get();
    return view('pages.admin.posts', ['posts' => $posts]);
  }

  public function admin_products(){
    $categories = Categories::all();
    return view('pages.admin.products', ['categories'=>$categories, 'products'=>Products::paginate(100)]);
  }

  public function admin_categories(){
    $categories = Categories::all();
    return view('pages.admin.categories', ['categories' => $categories]);
  }  
}
