<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Usrr::paginate(10); este es otro metodo 
        $products = Product::all();
        //dd($users);
        return view('test')->with('products',$products);
        //Retornar vista inyectando todos los usuarios

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        //Retornar la vista elements.users.create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->slide = $request->slide;
        $product->user_id = $request->user_id;
        $product->category_id = $request->category_id;

        if($product->save()){
            dd($product);
            //Retornar la vista
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        dd($product);
        //Retornar vista con la informacion del elemento 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        //Retorno la vista con el formulario de edicion del usuario
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->slide = $request->slide;
        $product->user_id = $request->user_id;
        $product->category_id = $request->category_id;

        if($product->save()){
            dd($product);
            //Retornar la vista
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if($product->delete()){
            //Retorne la vista index con el mensaje que pudo eliminar
        }
    }
}
