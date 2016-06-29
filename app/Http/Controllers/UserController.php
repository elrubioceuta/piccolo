<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller 
{
   
    // Middleware
    public function __construct()
    {
        // only Admin have access
        $this->middleware('admin');
    }
   
    public function getList()
    {
        return view('user_list', array( 'users' => User::all()));
    }
   
    public function getDestroy($user_id) {
        User::destroy($user_id);
                
        return redirect('admin')->withMessage('User deleted!');      
    }
    
}

?>