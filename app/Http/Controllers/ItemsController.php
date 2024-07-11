<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        return view('admin.item.index', ['items' => Items::all()]);
    }

    public function create()
    {
        return view('admin.item.create', ['categories' =>Category::where('status', 1)->get()]);
    }


    public function store(Request $request)
    {
        Items::newItem($request);
        return back()->with('message', 'Item Info Create Successfully');
    }

    public function edit($id)
    {
        return view('admin.item.edit', [
            'item' => Items::find($id),
            'categories' =>Category::where('status', 1)->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        Items::updateItem($request, $id);
        return redirect('/item')->with('message', 'Item Info Update Successfully');
    }


    public function destroy($id)
    {
        Items::deleteItem($id);
        return back()->with('message', 'Item Info Delete Successfully');
    }
}
