<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Product;
use App\Models\Review;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Client;
use App\Models\Color;
use App\Models\Order;
use App\Models\User;

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
            ['value' => 'design1', 'imagePath' => asset('assets/IMG/p (2).png'), 'priceSize1' => '340', 'priceSize2' => '330'],
            ['value' => 'design2', 'imagePath' => asset('assets/IMG/p (3).png'), 'priceSize1' => '330', 'priceSize2' => '320'],
            ['value' => 'design3', 'imagePath' => asset('assets/IMG/p (4).png'), 'priceSize1' => '320', 'priceSize2' => '320'],
            ['value' => 'design4', 'imagePath' => asset('assets/IMG/p (5).png'), 'priceSize1' => '300', 'priceSize2' => '290'],
            ['value' => 'design5', 'imagePath' => asset('assets/IMG/p (1).png'), 'priceSize1' => '310', 'priceSize2' => '300'],
        ];
        $selectedDesign = null;
        foreach ($designs as $design) {
            if ($design['value'] == $designKey) {
                $selectedDesign = $design;
                break;
            }
        }
        $subTotal = 0;
        if ($selectedDesign && $sizekey) {

            $subTotal += $selectedDesign[$sizekey == 'regular' ? 'priceSize1' : 'priceSize2'];
        }
        if ($materialKey) {
            $subTotal += 60;
        }

        $shipping = 70;
        $discount = 0;
        $total = $subTotal + $shipping - $discount;

        $colors = Color::all();

        return view('create-your-piece2', compact('designs', 'colors', 'selectedDesign', 'designKey', 'materialKey', 'sizekey', 'subTotal', 'shipping', 'discount', 'total'));
    }

    public function index()
    {
//        $category = Category::find(1); // Replace 1 with any valid category id
//        $firstItemInFirstProduct = $category->firstItemInFirstProduct;
//        return $firstItemInFirstProduct;
//        return Category::with('firstItemInFirstProduct')->get();
        $randomProducts = Product::has('items')->with('firstItem.media')->inRandomOrder()->get();
        $newArrivals = Product::has('items')->with('firstItem.media')->inRandomOrder()->get();
        $categories = Category::has('products.items')->with('firstItemInFirstProduct')->inRandomOrder()->get();
        return view('welcome', compact('randomProducts','newArrivals', 'categories'));
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
            ->whereHas('items')
            ->orderBy('id', 'desc')->get();
        $categories = Category::all();
        //return $categories;
        return view('categories', compact('products', 'categories'));
    }

    public function showForm($orderId)
    {
        $order = Order::with('orderDetails.item')->find($orderId);
        return  view('client-data', compact('order'));

        $userId = auth()->id()??User::first()->id;
        $cart = Cart::where('user_id', $userId)->with('item.product', 'item.color', 'item.size')->get();
        $subTotal = $cart->sum(function ($item) {
            return $item->item->price * $item->quantity;
        });
        $shipping = 70;
        $discount = 0;
        $total = $subTotal + $shipping - $discount;

        return view('client-data', compact('cart', 'subTotal', 'shipping', 'discount', 'total'));
    }

//public function clientData(Request $request)
public function clientData(Request $request, $orderId)
{

    $fullName = $request->input('full_name');
    $country = $request->input('country');
    $address = $request->input('address');
    $street = $request->input('street');
    $city = $request->input('city');
    $phoneNumber1 = $request->input('phone_number_1');
    $phoneNumber2 = $request->input('phone_number_2');
//    $orderId = $request->input('order_id');

    $client = ShippingAddress::create([
        'full_name' => $fullName,
        'country' => $country,
        'address' => $address,
        'street' => $street,
        'city' => $city,
        'phone_number_1' => $phoneNumber1,
        'phone_number_2' => $phoneNumber2,
        "order_id" => $orderId,
    ]);

//    $order = Order::where('user_id', $userId)->where('is_active',false)->first();
    return redirect()->route('received', ['orderId' => $orderId]);
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
        $randomProducts = Product::has('items')->with('firstItem.media', 'colors')->where('id', '!=', $item->product_id)->inRandomOrder()->take(4)->get();


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

    public function received($orderId)
    {
        $order = Order::find($orderId);
        $date = date('F j, Y');
        $total = $order->total;
        $paymentMethod = "Cash On Delivery";
        $orderDetails = $order->orderDetails;
        //$order->is_active = true;
        $order->save();

        return view('received',compact( 'date','total','paymentMethod','order'));
    }


    public function shop()
    {

        $products = Product::with('firstItem.media', 'colors')->whereHas('items')->orderBy('id', 'desc')->get();

        return view('shop', compact('products'));
    }

    public function shoppingcart()
    {
//        $userId = auth()->id();
        $userId =  auth()->id()??User::first()->id;
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


    public function saveReview($itemId)
    {
        $item = Item::find($itemId);
        $review = new Review();
        $review->product_id = $item->product_id;
        $review->user_id = auth()->id()??User::first()->id;
        if (request('rating')){
            $review->rating = request('rating');
        }
        $review->comment = request('comment');
        $review->save();
//        $item->reviews()->create([
//            'product_id' => $item->product_id,
//            'user_id' => auth()->id()??User::first()->id,
//            'rating' => request('rating'),
//            'comment' => request('comment'),
//        ]);


        return back();
    }

}
