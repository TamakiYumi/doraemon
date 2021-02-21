<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class ItemsController extends Controller
{
  public function add()
  {
      return view('admin.items.create');
  }
  
  public function create(Request $request)
  {
      $this->validate($request, Item::$rules);
      
      $items = new Item;
      $form = $request->all();
      
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $items->image_path = basename($path);
      } else {
          $items->image_path = null;
      }
      
      unset($form['_token']);
      unset($form['image']);
      
      $items->fill($form);
      $items->save();
      
      return redirect('items');
  }
}