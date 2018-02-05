<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

use App\User;
use App\Role;
use Auth;



class ProductController extends Controller
{
    public function getProducts()
    {
	
		$usersid = Auth::user();
		 
		if ($usersid  != NULL) {
			$usersid =  Auth::user()->id;
			$roles = User::find($usersid)->roles;  
			}  
			else {
				$roles = 1;
			}



        return view('products.list')
            ->with('products', Product::all())->with('roles', $roles);
    }


	
	
    public function getProduct($id)
    {
        $product = Product::find($id);
	     return view('products.view', compact('product'));
		
		 
    }
	
	
	public function getCatalog($id)
    {
         $product = Product::where('category_id', '=', $id)->orWhere('id', '=', $id)->get();
		   
        return view('products.catalog', compact('product'));
    }
	
	
	
	
}
