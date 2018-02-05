<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
	
	
	public function tovari()
    {
		$tovari = Product::all();
        return view('admin.tovari')->with('tovari', $tovari);
    }
	
	
	
	public function addtovar()
    {
		$categories = Category::all(); 
		return view ('admin.addtovar')->with('categories', $categories);
    }
	
	
	
	
	public function dobavittovar(Request $request)
    {
       	Product::create($request->all()); 
		return back()->with('message','товар добавлен');
    }
	

	public function orders()
    {
        return view('admin.orders');
    }
}
