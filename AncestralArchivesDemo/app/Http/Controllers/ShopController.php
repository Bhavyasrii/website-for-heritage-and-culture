<?php
namespace App\Http\Controllers;

use App\Http\Requests\AddShopValidationRequest;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Auth;


class ShopController extends Controller
{
    public function index()
    {
        $shop = Shop::all();
    }
    public function showMyShops()
    {
        $userId = Auth::user()->id;
        $shops = Shop::where('user_id', '=', $userId)->get();
        return view("pages.user-pages.shops.my-shops", compact("shops"));
    }
    public function addshop()
    {
        $type = "shop";
        return view('pages.user-pages.shops.add-shops', compact('type'));
    }
    public function storeShop(AddShopValidationRequest $request)
    {
        $formData = $request->all();
        if (!empty ($formData['shop_image'])) {
            $fileName = time() . '-' . $request->file('shop_image')->getClientOriginalName();
            $path = $request->file('shop_image')->storeAs('shop-images', $fileName, 'public');
            $formData['shop_image'] = '/storage/' . $path;
        }
        $shop = Shop::create($formData);
       
        return redirect()->route('pages.user.my-shops')->with('shopAdded', ' Created Successfully');
    }
    public function editShop($id)
    {
        $shop = Shop::find($id);
        return view('pages.user-pages.shops.edit-shop', compact('shop'));
    }
    public function updateShop(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'owner_name' => 'required|string',
            'email' => 'required|email',
            'mobile_number' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
            'shop_image' => 'nullable|image',
            'license_number' => 'nullable|numeric',
        ]);
        $updateFormData = $request->all();
        $shop = Shop::find($id);
        if (!empty ($updateFormData['shop_image'])) {
            $fileName = time() . '-' . $request->file('shop_image')->getClientOriginalName();
            $path = $request->file('shop_image')->storeAs('shop-images', $fileName, 'public');
            $updateFormData['shop_image'] = '/storage/' . $path;
            if ($shop->shop_image != null) {
                $oldFilename = $shop->shop_image;
                Storage::delete($oldFilename);
            }
        }
        $shop->update($updateFormData);
        return redirect()->route('pages.user.my-shops')->with('shopEdited', ' Details were updated successfully');
    }
    public function destroyShop($id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
        return redirect()->route('pages.user.my-shops')->with('shopDeleted', ' Deleted successfully');
    }
    public function editItemShow($id)
    {
        $shopId = $id;
        $shop = Shop::find($id);
        $shopItems = $shop->items;
        return view('pages.user-pages.shops.edit-item', compact('shopId', 'shopItems'));
    }
    public function addItem($id, Request $request)
    {
        $shop = Shop::findOrFail($id);
        $shopItems = $shop->items;
        $shopItems[] = $request->input('items');
        $shop->items = $shopItems;
        $shop->save();
        return redirect()->route('pages.user.edit-items', ['id' => $id])->with('itemsAdded', 'Item added Successfully ');
    }
    public function destroyItem($itemName, $id)
    {
        $shop = Shop::findOrFail($id);
        $shopItems = $shop->items;
        if (($key = array_search($itemName, $shopItems)) !== false) {
            unset($shopItems[$key]);
        }
        $shop->items = $shopItems;
        $shop->save();
        return redirect()->route('pages.user.edit-items', ['id' => $id])->with('itemsDeleted', 'Item deleted Successfully ');
    }
    public function AddTraining()
    {
        $type = "training_center";
        return view('pages.user-pages.shops.add-shops', compact('type'));
    }

    public function allShops(){
        $allShops = Shop::all();

        return view('pages.shops',compact('allShops'));

    }
}
