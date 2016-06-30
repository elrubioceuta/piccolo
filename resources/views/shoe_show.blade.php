@extends('main')
@section('content')

<h2>{{{ $shoe->name }}}</h2>
<h5>Price: <i>{{{ $shoe->price }}} €</i></h5>
<h5>Category: <a href='{{{ url('shoe/category', $shoe->category->id) }}}'>{{{ $shoe->category->name }}}</a></h5>
<h5>Color: <a href='{{{ url('shoe/color', $shoe->color->id) }}}'>{{{ $shoe->color->name }}}</a></h5>
<h5>Size: <a href='{{{ url('shoe/size', $shoe->size->id) }}}'>{{{ $shoe->size->size }}}</a></h5>

<img src='{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_large'] ) }}' style='width: 70%;'>

<p class="description">"{{{ $shoe->description }}}"</p>

@if ( Auth::user()->isAdmin() )

<a href="{{{ url('shoe/destroy',$shoe) }}}"><h3 style="color:red">Delete</h3></a>

@else   
         @if ( Auth::check() )
            <a href="{{ url('book/add',$shoe) }}"><h3 style="color:green">Book</h3></a>
         @endif   
@endif

@stop