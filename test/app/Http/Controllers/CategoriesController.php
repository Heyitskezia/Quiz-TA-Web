<!-- NOT FINISHED-->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;


class productsController extends Controller
{
    //
    protected $Categories;
    public function __construct(Categories $categories) {
    	$this->categories = $categories;
    }

	public function show($id){

  		$categories=something::find($id);

    	return view('categories.show', compact('categories'));
    }

    
    public function add(Request $request) {
    	$newCategories = [
    		"categories" => $request->categories,
    	];

    	$newCategories = $this->categories->create($newCategories); 

    	if($newCategories != null) {
    		var_dump($newCategories);
    	}else{
    		echo "FAILED!!";
    	}



   
    
	}
}
?>
