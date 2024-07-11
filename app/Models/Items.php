<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    private static $items, $item, $image, $imageName, $directory, $imageUrl;

    public static function newItem($request)
    {
        self::$image                = $request->file('image');
        self::$imageName            = self::$image->getClientOriginalName();
        self::$directory            = 'uploads/item-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl             = self::$directory . self::$imageName;

        self::$items                = new Items();
        self::$items->category_id   = $request->category_id;
        self::$items->name          = $request->name;
        self::$items->description   = $request->description;
        self::$items->image         = self::$imageUrl;
        self::$items->status        = $request->status;
        self::$items->save();
    }

    public static function updateItem($request, $id)
    {
        self::$item                = Items::find($id);

        if ($request->file('image'))
        {
            self::$image          = $request->file('image');
            self::$imageName      = self::$image->getClientOriginalName();
            self::$directory      = 'uploads/item-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl       =   self::$directory . self::$imageName;
        }
        else
        {
            self::$imageUrl       =  self::$item->image;
        }

        self::$item->category_id  = $request->category_id;
        self::$item->name         = $request->name;
        self::$item->description  = $request->description;
        self::$item->image        =  self::$imageUrl;
        self::$item->status       = $request->status;
        self::$item->save();
    }

    public static function deleteItem($id)
    {
        self::$item = Items::find($id);
        self::$item->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
