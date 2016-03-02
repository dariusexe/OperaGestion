<?php

namespace App\Http\Controllers;


use App\Http\Requests;

use App\Product;
use App\ProductClass;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with('product', $products);	}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $productsClass = ProductClass::all();
        return view('products.create')->with('productsClass', $productsClass);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $rules = array( );
        $data = $request->all();
        $this->validate($request, $rules);


        if (Client::create($data)){
            Session::flash('message', 'Se ha creado correctamente el producto');
        }
        else{
            Session::flash('error', 'No se ha podido crear el producto');
        }
        return Redirect::to('/clients');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $rules2 = array( );
        $data = $request->all();
        $this->validate($request, $rules2);
        $product->fill($data);
        $product->save();

        Session::flash('message1', 'El producto');
        Session::flash('message2',  'se ha modificado correctamente');
        Session::flash('name', $data['name']);


        return Redirect::to('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (Product::destroy($id)){
            Session::flash('message1', 'El producto');
            Session::flash('name', $product->name);
            Session::flash('message2',  'se ha borrado correctamente');
        }



        return Redirect::to('/products');
    }

    public function indexClass(){

    }

    public function createClass(){
        return view('products.create_class');
    }

    public function storeClass(Request $request){
        $data = $request->all();
        if (ProductClass::create($data)){
            Session::flash('La clase de producto se ha creado correctamente');
        }
        return view('products.create');
    }
    public function destroyClass($id){


    }
    public function test(){
        $product = Product::find(1);
        echo $product->getClass->name;
    }
}