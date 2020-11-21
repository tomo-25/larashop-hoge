<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Stock; 

use Illuminate\Support\Facades\Mail; 
use App\Mail\Thanks;

class ShopController extends Controller
{
   public function index(Request $request)
   {
       $keyword = $request->input('keyword');
 
        $query = Stock::query();
 
        if (!empty($keyword)) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        }
        $stocks = $query->paginate(9);//Eloquantで検索
       return view('shop',compact('stocks'));
   }
   public function myCart(Cart $cart)
   {
       $data = $cart->showCart();
       return view('mycart',$data);
   }
   public function addMycart(Request $request,Cart $cart)
   {
       //カートに追加の処理
       $stock_id=$request->stock_id;
       $message = $cart->addCart($stock_id);
       //追加後の情報を取得
       $data = $cart->showCart();
       return view('mycart',$data)->with('message',$message);
   }
   public function deleteCart(Request $request,Cart $cart)
   {
       //カートから削除の処理
       $stock_id=$request->stock_id;
       $message = $cart->deleteCart($stock_id);
       //追加後の情報を取得
       $data = $cart->showCart();
       //var_dump($data);
       //array(3) { ["my_carts"]=> object(Illuminate\Database\Eloquent\Collection)#995
       return view('mycart',$data)->with('message',$message);
   }
   public function checkout(Request $request,Cart $cart)
   {
       $user = Auth::user();
       $mail_data['user']=$user->name; 
       $mail_data['checkout_items']=$cart->checkoutCart(); 
       //Mail::to($user->email)->send(new Thanks($mail_data));
       return view('checkout');
   }
   public function checkoutCart()
   {
       $user_id = Auth::id(); 
       $checkout_items=$this->where('user_id', $user_id)->get();
       $this->where('user_id', $user_id)->delete();

       return $checkout_items;     
   }
}
