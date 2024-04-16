<?php

namespace App\Http\Controllers;
use App\Models\Review;
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
        
        return view('create-your-piece2');
    }

    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    
    
    public function contact(Request $request)
{
    if ($request->isMethod('post')) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'num' => 'required|string|max:20',
            'text' => 'required|string',
        ]);

        // Contact::create($validatedData);
        
    $contact = new Contact();
    $contact = new Contact();
    $contact->name = $validatedData['name'];
    $contact->email = $validatedData['email'];
    $contact->phone_number = $validatedData['num'];
    $contact->text = $validatedData['text']; 
    $contact->save();
    

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
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
        $item = Item::with('Product')->findOrFail($itemId);
        $colorsOfOtherItems = $item->product->items()->where('size_id', $item->size_id)->with('color')->get();
        $otherSizesOfSameColor = Item::where('product_id', $item->product_id)->where('color_id', $item->color_id)->with('size')->get();
        $randomProducts = Product::with('firstItem.media', 'colors')->where('id', '!=', $item->product_id)->inRandomOrder()->take(4)->get();
    
        return view('item-detail', compact('item', 'colorsOfOtherItems', 'otherSizesOfSameColor', 'randomProducts'));
    }
    
    

public function saveReview(Request $request, $itemId)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'review' => 'required|string',
    ]);

    $user_id = Auth::id(); // الحصول على معرف المستخدم المعرف في الجلسة

    $review = new Review();
    $review->user_id = $user_id; // تخزين معرف المستخدم
    $review->comment = $validatedData['review']; 
    $review->product_id = $itemId; 
    $review->save();

    return Redirect::route('item-detail', ['itemId' => $itemId])->with('success', 'تم حفظ التقييم بنجاح!');
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
        return view('shopping-cart');
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





