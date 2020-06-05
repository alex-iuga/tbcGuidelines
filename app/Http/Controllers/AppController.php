<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class AppController extends Controller
{
    public function items()
    {
        //$items = Item::where('name','=','war%')->get();
        //$items = Item::where('name','=','war%')->first();
        //$items = \App\Item::select('select * from items where name like "wargl%"');
        $items = \App\Item::all();
        dd($items);

        return view ('bisItems', \compact('items'));
    }
}
