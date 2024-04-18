<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function createYourPiece()
    {
        return view('create-your-piece');
    }

    public function createYourPiece2($id = 1)
    {
//        return request()->all();
        $designKey = request()->design;
        $materialKey = request()->material;
        $sizekey = request()->size;
        $designs = [
            ['value' => 'design1', 'imagePath' => asset('assets/IMG/p (1).png'), 'priceSize1' => '340', 'priceSize2' => '330'],
            ['value' => 'design2', 'imagePath' => asset('assets/IMG/p (2).png'), 'priceSize1' => '330', 'priceSize2' => '320'],
            ['value' => 'design3', 'imagePath' => asset('assets/IMG/p (3).png'), 'priceSize1' => '320', 'priceSize2' => '320'],
            ['value' => 'design4', 'imagePath' => asset('assets/IMG/p (4).png'), 'priceSize1' => '300', 'priceSize2' => '290'],
            ['value' => 'design5', 'imagePath' => asset('assets/IMG/p (5).png'), 'priceSize1' => '310', 'priceSize2' => '300'],
        ];
        $selectedDesign = null;
        foreach ($designs as $design) {
            if ($design['value'] == $designKey) {
                $selectedDesign = $design;
                break;
            }
        }
        $subTotal = 0;
        if ($selectedDesign && $sizekey){

            $subTotal += $selectedDesign[$sizekey=='regular'?'priceSize1':'priceSize2'];
        }
        if ($materialKey){
            $subTotal += 60;
        }

        $shipping = 70;
        $discount = 0;
        $total = $subTotal + $shipping - $discount;


//        $subTotal = 300;
        return view('create-your-piece2', compact('designs', 'selectedDesign','designKey','materialKey','sizekey','subTotal','shipping','discount','total'));
    }

    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function cart()
    {
        return view('cart');
    }


    public function categories($categoryId)
    {
//                return  \request()->is('*/2');
        $products = Product::where('category_id', $categoryId)
            ->with('firstItem.media', 'colors')
            ->get();
        $categories = Category::all();
        //return $categories;
        return view('categories', compact('products', 'categories'));
    }


    public function clientdata()
    {
        return view('client-data');
    }

    public function help()
    {
        return view('help');
    }


    public function itemdetail($itemId)
    {
        // $product = Product::findOrFail($itemId);
        $item = Item::with('Product')->findOrFail($itemId);
        $colorsOfOtherItems = $item->product->items()->where('size_id', $item->size_id)->with('color')->get();
        $otherSizesOfSameColor = Item::where('product_id', $item->product_id)->where('color_id', $item->color_id)->with('size')->get();
        $randomProducts = Product::with('firstItem.media', 'colors')->where('id', '!=', $item->product_id)->inRandomOrder()->take(4)->get();


        // return $item->getImageUrl();
        return view('item-detail', compact('item', 'colorsOfOtherItems', 'otherSizesOfSameColor', 'randomProducts'));
    }

    public function paymentdetail()
    {
        return view('payment-details');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function received()
    {
        return view('received');
    }


    public function shop()
    {

        $products = Product::with('firstItem.media', 'colors')->get();
        return view('shop', compact('products'));
    }

    public function shoppingcart()
    {
//        $userId = auth()->id();
        $userId = 1;
        $cart = Cart::where('user_id', $userId)->with('item.product', 'item.color', 'item.size')->get();
        $subTotal = $cart->sum(function ($item) {
            return $item->item->price * $item->quantity;
        });
        $shipping = 70;
        $discount = 0;
        $total = $subTotal + $shipping - $discount;

        return view('shopping-cart', compact('cart', 'subTotal', 'shipping', 'discount', 'total'));
    }

    public function trending()
    {
        return view('trending');
    }

    public function userterms()
    {
        return view('user-terms');
    }

    public function designyourown()
    {
        return view('design-your-own');
    }


}
