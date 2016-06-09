<?php

namespace App\Http\Controllers;


use App\ProductCompany;
use Illuminate\Http\Request;
use App\Product;
use App\ProductClass;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use PhpParser\Node\Scalar\MagicConst\File;
use Storage;


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

        return view('products.index')->with('product', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $company = ProductCompany::all();
        $productClass = ProductClass::all();
        return view('products.create')->with('company', $company)->with('productClass', $productClass);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $rule = ['photo' => 'mimes:jpeg,bmp,png',
            'price' => 'numeric',
            'name' => 'required',
            'class_id' => 'required',
            'company_id' => 'required',
            'type' => 'enum:1,2,3'];
        $this->validate($request, $rule);
        $product = new Product;
        if (!empty($request->photo)) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = str_random(16);

            while (Storage::disk('local')->has($name)) {
                $name = str_random(16);
            }
            Storage::disk('local')->put($name . '.' . $ext, \File::get($photo));
            $product->url_photo = $name . '.' . $ext;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->class_id = $request->class_id;
        $product->company_id = $request->company_id;
        $product->type = $request->type;

        $product->save();


        Session::flash('message', 'Se ha creado correctamente el producto');


        return Redirect::to('/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    /*public function show($id)
    {
        $product = Product::find($id);

        return view('products.show')->with('product', $product);
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $company = ProductCompany::all();
        $productClass = ProductClass::all();
        $product = Product::find($id);
        return view('products.edit')->with('product', $product)->with('company', $company)->with('productClass', $productClass);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $rules2 = array();
        $this->validate($request, $rules2);
        if (!empty($request->photo)) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $name = str_random(16);

            while (Storage::disk('local')->has($name)) {
                $name = str_random(16);
            }
            Storage::disk('local')->put($name . '.' . $ext, \File::get($photo));
            $product->url_photo = $name . '.' . $ext;
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->class_id = $request->class_id;
        $product->company_id = $request->company_id;
        $product->type = $request->type;

        $product->save();


        Session::flash('message1', 'El producto');
        Session::flash('message2', 'se ha modificado correctamente');
        Session::flash('name', $request->name);


        return Redirect::to('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (Product::destroy($id)) {
            Session::flash('message1', 'El producto');
            Session::flash('name', $product->name);
            Session::flash('message2', 'se ha borrado correctamente');
        }


        return Redirect::to('/products');
    }


    /**
     * @return mixed
     */
    public function classIndex()
    {

        $productClass = ProductClass::all();
        return view('products.indexClass')->with('data', $productClass);
    }

    public function companyIndex()
    {

        $productCompany = ProductCompany::all();
        return view('products.indexCompany')->with('data', $productCompany);
    }

    public function classCreate()
    {
        return view('products.createClass');
    }

    public function companyCreate()
    {
        return view('products.createCompany');
    }

    public function companyStore(Request $request)
    {
        $data = $request->all();
        if (ProductCompany::create($data)) {
            Session::flash('message', 'Se ha creado correctamente la compañia');
        } else {
            Session::flash('error', 'No se ha podido crear el producto');
        }
        return Redirect::to('/products/company');
    }

    public function classStore(Request $request)
    {
        $data = $request->all();
        if (ProductClass::create($data)) {
            Session::flash('message', 'Se ha creado correctamente la Clase');
        } else {
            Session::flash('error', 'No se ha podido crear el producto');
        }
        return Redirect::to('/products/class');
    }

    public function classDestroy($id)
    {
        $product = Product::all();


        foreach ($product as $item) {
            if ($item->class_id == $id) {
                Session::flash('error', 'Asegurese de cambiar o borrar el producto asociado a esta clase');
                return Redirect::to('/products/class');
            }


        }

        ProductClass::destroy($id);
        Session::flash('message', 'Se ha borrado correctamente la Clase');
        return Redirect::to('/products/class');
    }

    public function companyDestroy($id)
    {

        $product = Product::all();


        foreach ($product as $item) {
            if ($item->company_id == $id) {
                Session::flash('error', 'Asegurese de cambiar o borrar el producto asociado a esta clase');
                return Redirect::to('/products/company');
            }
        }


        ProductCompany::destroy($id);
        Session::flash('message', 'Se ha borrado correctamente la Compañia');
        return Redirect::to('/products/company');


    }
}