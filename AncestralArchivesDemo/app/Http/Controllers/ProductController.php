<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
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
