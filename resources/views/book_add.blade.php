@extends('main')
@section('content')
<h2>Booking {{{ $books_shoe }}} for only {{{ $books_price }}} € !!</h2>


<!--<div id="form">-->
<div>
    {!! Form::open() !!}
    
    @foreach($errors->all() as $message)
    <p class="error_msg"> {{$message}}</p>
    @endforeach
    <p>Accepting the  checkbox, you are agree on the price and shoes, you will book. WARNING! If you don't use the booking system properly or abuse it, your account will be deleted.</p>
    
   <div class="textarea">
    <!--{!! Form::label('details', 'Any comment?') !!}-->
    {!! Form::textarea('details') !!}
    </div>
    {!! Form::hidden('shoe_id', $shoe_id) !!}   
    {!! Form::hidden('user_id', $user_id) !!}   

    <div class="checkbox">
   <input type="checkbox" value="yes" name="terms"> I accept.
        
    
    </div>
    {!! Form::submit('Add') !!}    
</div>    

    {!! Form::close() !!}
    @stop
