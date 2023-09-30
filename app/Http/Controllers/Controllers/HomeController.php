<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Role;
use App\Models\Category;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome','filter']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role->name == 'Admin') {
            return view('dashboard-admin');
        } 
        else if(Auth::user()->role->name== 'Guest') {
            return view('dashboard-guest');
        }  
    }

    public function welcome() {
        $products = Product::all();
        $categories    = Category::all();
        return view('welcome')->with('products', $products)
                              ->with('categories', $categories);
    }
    
    public function filter(Request $request) {

        
        if($request->category_id >=0){
            $products = Product::where('category_id',$request->category_id)->get();
            $categories = Category::where('id',$request->category_id)->get();
        }else{
            $categories    = Category::all();
            $products   = Product::all();
        }
        
        
        return view('filter')->with('products', $products)
                             ->with('categories', $categories);
    }
    

}
