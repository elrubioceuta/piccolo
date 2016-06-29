<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller 
{
   
    // Middleware
    public function __construct()
    {
        // only Admin have access
        $this->middleware('admin');
    }
   
    public function getAdd()
    {
        return view('color_add');
    }
   
    public function postAdd(Request $request)
    {
        $data = $request->all();
       
        $rules = $rules = array(
            'color' => 'required|min:3|max:20|unique:colors,name',
        );
        $this->validate($request, $rules);
     
        $color = new Color();
        $color->name = $data['color'];
        $color->save();

        return redirect('admin')->withMessage('Color added!');      
    }
}

?>