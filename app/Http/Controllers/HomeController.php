<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Favorite;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        return view('home.index');
    }

    public function index_header() {

        return view('home.index-header');
    }


    public function product()  {
        $news_products = Product::orderBy('created_at', 'DESC')->limit(12)->get(); //
        return view('home.shop-product', compact('news_products'));
    }

    public function blog(){
        return view('home.blog-list');
    }

    public function contact(){
        return view('home.contact');
    }


}
