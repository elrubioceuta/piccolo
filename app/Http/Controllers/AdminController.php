<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

    // Middleware
    public function __construct() {
        // only Admin have access
        $this->middleware('admin');
    }
   
    public function getIndex() {
        return view('admin');
    }
}