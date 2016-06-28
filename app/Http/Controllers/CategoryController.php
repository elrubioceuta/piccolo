<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller 
{
   
    // Middleware
    public function __construct()
    {
        // only Admin have access
        $this->middleware('admin');
    }
   
    public function getAdd()
    {
        return view('category_add');
    }
   
    public function postAdd(Request $request)
    {
        $data = $request->all();
       
        $rules = $rules = array(
            'category' => 'required|min:3|max:200|unique:categories,name',
        );
        $this->validate($request, $rules);
     
        $category = new Category();
        $category->name = $data['category'];
        $category->save();

        return redirect('admin')->withMessage('Category added!');      
    }
}

?>