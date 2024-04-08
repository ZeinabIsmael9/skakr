<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{       
    public function index()
        {
            return view('welcome');
        }
    
        public function about()
        {
            return view('about');
        }
    
        public function  contact()
        {
            return view('contact');
        }

        public function  cart()
        {
            return view('cart');
        }
        
        
        public function  categories()
        {
            return view('categories');
        }
        
        
        public function  clientdata()
        {
            return view('client-data');
        }

        public function  help()
        {
            return view('help');
        }

        public function  itemdetail()
        {
            return view('item-detail');
        }
        
        public function  paymentdetail()
        {
            return view('payment-details');
        }
        
        public function  privacy()
        {
            return view('privacy');
        }
        
        public function  received()
        {
            return view('received');
        }
        
    
        public function  shop()
        {
            
        $products = Product::with('firstItem.media', 'colors')->get();
        return view('shop', compact('products'));
        }
        
        public function  shoppingcart()
        {
            return view('shopping-cart');
        }
        
        public function  trending()
        {
            return view('trending');
        }
        
        public function  userterms()
        {
            return view('user-terms');
        }
        
        public function  designyourown()
        {
            return view('design-your-own');
        }
        
    
    
    
    
    
}
