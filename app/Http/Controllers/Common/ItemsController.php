<?php

//このコントローラーでは、一般ユーザーへのアイテム表示に関する記述をしている。

namespace App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class ItemsController extends Controller
{
    public function index(Request $request)
    {
       $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Item::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのアイテムを取得する
          $posts = Item::all();
      }
      return view('common.items.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function add()
    {
        return view('common.items.create');
    }

    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Item::$rules);
        $item = new Item;
        $form = $request->all();
        
        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $item->image_path = basename($path);
        } else {
          $item->image_path = null;
        }
        
        unset($form['_token']);
        unset($form['image']);
        
        // データベースに保存する
        $news->fill($form);
        $news->save();
      
        return redirect('common/item/create');
    }

    public function edit()
    {
        return view('common.item.edit');
    }

    public function update()
    {
        return redirect('common/item/edit');
    }
}
