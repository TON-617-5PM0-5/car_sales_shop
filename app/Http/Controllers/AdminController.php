<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Categories;

class AdminController extends Controller
{
      public function delete_post(Request $request){
    $id = $request->input('id');
    try {
      $post = Posts::findOrFail($id);
    } 
    catch (ModelNotFoundException $e) {
      return redirect('admin_posts')->with('success', 'Пост був выдаленный до вашого клику');
    }
    $post->delete();
    $posts = Posts::orderBy('id','desc')->get();
    return redirect(route('admin_posts'))->with('success', 'Вы выдалили пост');
  }

  public function edit_product(Request $request){
    $id = $request->input('id');
    try {
      $product = Products::findOrFail($id);
    } 
    catch (ModelNotFoundException $e) {
      return redirect(route('admin_products'))->with('success', 'Продукт не найшовся');
    }

    $product->type = $request->input('type');
    $product->model = $request->input('model');
    $product->year = $request->input('year');
    $product->description = $request->input('description');
    $product->image = $request->input('image');
    $product->price = $request->input('price');

    $product->save();

    return redirect(route('admin_products'))->with('success', 'Продукт змінено');
  }

  public function create_product(Request $request){
    $product = new Products();

    $product->type = $request->input('type');
    $product->model = $request->input('model');
    $product->year = $request->input('year');
    $product->description = $request->input('description');
    $product->image = $request->input('image');
    $product->price = $request->input('price');

    $product->save();

    return redirect(route('admin_products'))->with('success', 'Продукт створенний');
  }

  public function delete_product(Request $request){
    $id = $request->input('id');
    try {
      $product = Products::findOrFail($id);
    } 
    catch (ModelNotFoundException $e) {
      return redirect(route('admin_products'))->with('success', 'Продукт не найшовся');
    }

    $product->delete();

    return redirect(route('admin_products'))->with('success', 'Продукт видалено');
  }

  public function edit_category(Request $request){
    $id = $request->input('id');
    try {
      $category = Categories::findOrFail($id);
    } 
    catch (ModelNotFoundException $e) {
      return redirect(route('admin_categories'))->with('success', 'Категорию не знайдено');
    }

    $category->name = $request->input('name');

    $category->save();

    return redirect(route('admin_categories'))->with('success', 'Категорию змінено');
  }

  public function create_category(Request $request){
    $category = new Categories();

    $category->name = $request->input('name');

    $category->save();

    return redirect(route('admin_categories'))->with('success', 'Категорию створенно');
  }
}
