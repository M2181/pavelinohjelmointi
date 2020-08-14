<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index() {
   $products = Product::all();
   return view('kauppa')->with('products', $products);
  }
      public function editlist() {
   $products = Product::all();
   return view('editlist')->with('products', $products);
  }  
    public function create() {
   return view('/create');
}
    public function store() {

    $product = new Product();
    $product->name = request('name');
    $product->kuva = request('kuva');
    $product->kategoria = request('kategoria');
    $product->hinta = request('hinta');
    $product->tiedot = request('tiedot');
    $product->save();
    return redirect('/');
}
    public function edit($id) {
   $product = Product::find($id);
   return view('/edit')->with('product', $product);
}
   public function update($id) {

    $product = Product::find($id);

    $product->name = request('name');
    $product->kuva = request('kuva');
    $product->kategoria = request('kategoria');
    $product->hinta = request('hinta');
    $product->tiedot = request('tiedot');
    $product->save();

    return redirect('/editlist');
   } 
    public function destroy($id) {
    Product::find($id)->delete();
    return redirect('/editlist');
    }
}
