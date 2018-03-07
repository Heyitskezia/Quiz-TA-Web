<!-- NOT FINISHED-->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;


class ItemsController extends Controller
{
    //
    protected $Items;
    public function __construct(Item $item) {
    	$this->items = $items;
    }

    public function show($id){

        $items=something::find($id);

        return view('items.show', compact('items'));
    }


    public function add(Request $request) {
    	$newItems = [
    		"name" => $request->name,
    		"price" => $request->price,
    		"stock" => $request->stock
    	];

    	$newItems= $this->items->create($newItems); 

    	if($newItems != null) {
    		var_dump($newItems);
    	}else{
    		echo "FAILED!!";
    	}

	}
}
