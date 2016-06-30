<?php

namespace App\Http\Controllers;

use Auth;
use App\Book;
use App\Shoe;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller 
{
    
    public function getIndex()
    {
        $user = Auth::user();
        
         if ( Auth::user()->isAdmin()) {
            $books = Book::all();
         } else {
            $books = Book::where('user_id', '=', Auth::user()->id)->get();             
         }

        
//        dd($user,$books);
        
        return view('books', array('user_id' => $user,'shoes'=>Shoe::all() ,'books' => $books));
    }
    
        
    public function getAdd($shoe_id)
    {
        $user = Auth::user()->id;
        $shoe = Shoe::findOrFail($shoe_id);
        return view('book_add', array('shoe_id' => $shoe->id, 'user_id' => $user, 'books_shoe' => $shoe->name, 'books_price' => $shoe->price));

    }
   

    public function postAdd(Request $request)
    {
        $data = $request->all();

        $rules = $rules = array(
            'terms' => 'accepted',
        );
        $this->validate($request, $rules);
     
        $book = new Book();
        
        $book->shoe()->associate(Shoe::find($data['shoe_id']));      
        $book->user()->associate(User::find($data['user_id']));       

        
        $book->details = $data['details'];
        $book->save();

        return redirect('/')->withMessage('Book done!');      
    }
    
    public function getDestroy($book_id) {
        Book::destroy($book_id);
                
        return redirect('book')->withMessage('Book canceled!');      
    }
    
}

?>