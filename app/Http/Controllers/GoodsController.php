<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index()
    {
        $goods_list = Goods::all();

        return view("pages.goods.index", [
            'goods' => $goods_list,
        ]);
    }

    public function add()
    {
        return view("pages.goods.add");
    }

    public function save(Request $request)
    {
//        dd($request->all());

        $goods = new Goods();
        $goods->title = $request->input('title');
        $goods->content = $request->input('content');
        $goods->save();

        return redirect()->route('goods.index');
    }

    public function edit(Request $request)
    {
//        dd($request->all());

        $goods = Goods::where('id', $request->input('id'))->first();

        return view("pages.goods.edit", [
            'goods' => $goods,
        ]);
    }

    public function update(Request $request)
    {
//        dd($request->all());

        $goods = Goods::where('id', $request->input('id'))->first();
        $goods->title = $request->input('title');
        $goods->content = $request->input('content');
        $goods->save();

        return redirect()->route('todo.index');
    }

    public function delete(Request $request)
    {
        $goods = Goods::where('id', $request->input('id'))->first();
        $goods->delete();

        return redirect()->route('goods.index');
    }
}
