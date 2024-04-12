<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
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
        
        
        public function categories($categoryId)
            {
                $products = Product::where('category_id', $categoryId)
                ->with('firstItem.media', 'colors')
                ->get();
                $categories = Category::all();
                //return $categories;
                return view('categories', compact('products','categories'));
            }
        
        
        public function  clientdata()
        {
            return view('client-data');
        }

        public function  help()
        {
            return view('help');
        }

        
        public function itemdetail($itemId)
        {
            // $product = Product::findOrFail($itemId);
            $item = Item::with('Product')->findOrFail($itemId);
            $colorsOfOtherItems = $item->product->items()->where('size_id',$item->size_id)->with('color')->get();
            $otherSizesOfSameColor = Item::where('product_id', $item->product_id)->where('color_id', $item->color_id)->with('size')->get();
            $randomProducts = Product::with('firstItem.media', 'colors')->where('id','!=',$item->product_id)->inRandomOrder()->take(4)->get();

            
            // return $item->getImageUrl();
            return view('item-detail', compact('item','colorsOfOtherItems','otherSizesOfSameColor','randomProducts'));
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
