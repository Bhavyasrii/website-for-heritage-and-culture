<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;

class AdminController extends Controller
{
   public function index()
   {
      $users = User::all();
      return view("pages.admin.users", compact("users"));
   }
   public function shopActivity($id)
   {
      $user = User::find($id);
      $shop = Shop::where('user_id', '=', $user->id)->get();
      return view("pages.admin.shop-activity", compact("user", "shop"));
   }
   public function destroyShopActivity($id)
   {
      $shop = Shop::findOrFail($id);
      $shop->delete();
      return redirect()->back()->with('shopActivityDeleted', ' Deleted successfully');
   }
   public function shopApproval($status, $id)
   {
      
      $user = User::findOrFail($id);
      if ($status == true) {
         $user->is_shop_approved = 1;
         $user->save();
      } else {
         $user->is_shop_approved = 0;
         $user->save();
      }
      return redirect()->route('pages.admin.users')->with('shopStatus','Shop Status Updated');
   }
}
