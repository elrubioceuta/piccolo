<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shoe;

class ShoeController extends Controller {
   
    public function __construct()
    {
        // these actions avaiable only to Admins
        $this->middleware('admin', ['only' => ['getAdd', 'postAdd']]);
    }

    public function getIndex()
    {
        return view('shoes', array('shoes_title' => 'Shoes', 'shoes' => Shoe::all()));
    }
   
    public function getCategory($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('shoes', array('shoes_title' => $category->name, 'shoes' => $category->shoes));
    }
    
    public function getColor($color_id)
    {
        $color = Color::findOrFail($color_id);
        return view('shoes', array('shoes_title' => $color->name, 'shoes' => $color->shoes));
    }
    
    public function getSize($size_id)
    {
        $size = Size::findOrFail($size_id);
        return view('shoes', array('shoes_title' => $size->size, 'shoes' => $size->shoes));
    }
   
    public function getCategories()
    {
        $categories = Category::all();
        return view('categories', array('categories' => $categories));
    }   
    
    public function getColors()
    {
        $colors = Color::all();
        return view('colors', array('colors' => $colors));
    }   
    
    public function getSizes()
    {
        $sizes = Size::all();
        return view('sizes', array('sizes' => $sizes));
    }
    
    
   
    public function getAdd()
    {
        return view('shoe_add', array('categories' => Category::all()->lists('name', 'id'), 'sizes' => Size::all()->lists('size', 'id'), 'colors' => Color::all()->lists('name', 'id')));
    }
   
    public function postAdd(Request $request)
    {
        $data = $request->all();
       
        $rules = $rules = array(
            'name' => 'required|min:3|max:250|unique:shoes,name',
            'description' => 'required|min:3',
            'category' => 'required|exists:categories,id',
            'price' => 'required|regex:/[\d]{1,}\.[\d]{2}/',
            'image_large' => 'required|image|mimes:jpeg',
        );
       
        $this->validate($request, $rules);
       
        $shoe = new Shoe();

        $shoe->name = $data['name'];
        $shoe->description = $data['description'];
        
        $shoe->category()->associate(Category::find($data['category']));        
        $shoe->color()->associate(Color::find($data['color']));
        $shoe->size()->associate(Size::find($data['size']));
        
        $shoe->price = $data['price'];

        $shoe->save();

        $images = $shoe->images();
        $file = $request->file('image_large')->move($images['server_path'], $images['image_large']);

        return redirect()->action('ShoeController@getShow', array($shoe->id))->withMessage('Successfully added new shoe!');
    }
   
    public function getShow($shoe_id) {
        return view('shoe_show', array('shoe' => Shoe::findOrFail($shoe_id)));
    }
    
    public function getDestroy($shoe_id) {
        Shoe::destroy($shoe_id);
                
        return redirect('shoe')->withMessage('Shoe deleted!');      
    }
}

?>