@extends('main')
@section('content')

<h2>{{{ $book->shoe_name }}}</h2>
<h5>Price: <i>{{{ $book->shoe_price }}} €</i></h5>
<h5>Details:</h5> 
<p class="description">"{{{ $book->details }}}"</p>

<!--@if ( Auth::user()->isAdmin() )

<a href="{{{ url('book/destroy',$book) }}}"><h3 style="color:red">Delete</h3></a>

@else   
         @if ( Auth::check() )
            <a href="{{ url('book/add',$book) }}"><h3 style="color:green">Book</h3></a>
         @endif   
@endif-->

@stop