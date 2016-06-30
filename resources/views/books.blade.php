@extends('main')
@section('content')

  <h2>Bookings of {{{ $user_id->name }}}  </h2>
    </div>


@foreach ( $books as $book )
@foreach ( $shoes as $shoe )
      <div class="grid">
          <div>
               <h3>Booking number:</h3> {{{ $book['id'] }}}  <br>
               <h3>Who book it?</h3>  {{{ $book['user_id'] }}}  <br>
               <h3>Date of booking:</h3>  {{{ $book['created_at'] }}}  <br>
               <h3>Name of shoes:</h3> {{{ $shoe['name'] }}}  <br>

               <h3>Details:</h3> {{{ $book['details'] }}}
               
               <a href="{{{ url('book/destroy',$book['id']) }}}"><h3 style="color:red">Cancel</h3></a>    
          </div>
        </div>

        <div class="clear"></div>
   
@endforeach
@endforeach

@stop


