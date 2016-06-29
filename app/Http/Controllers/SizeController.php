<?php

namespace App\Http\Controllers;

use App\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    // Middleware
    public function __construct()
    {
        // only Admin have access
        $this->middleware('admin');
    }
   
    public function getAdd()
    {
        return view('size_add');
    }
   
    public function postAdd(Request $request)
    {
        $data = $request->all();
       
        $rules = $rules = array(
            'size' => 'required|numeric|max:50|unique:sizes,size',
        );
        $this->validate($request, $rules);
     
        $size = new Size();
        $size->size = $data['size'];
        $size->save();

        return redirect('admin')->withMessage('Size added!');      
    }
}
