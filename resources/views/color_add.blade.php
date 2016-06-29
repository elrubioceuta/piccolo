@extends('main')
@section('content')
<h3 class="mb0">Add new color</h3>

<div id="form">
    {!! Form::open() !!}
    
    @foreach($errors->all() as $message)
    <p class="error_msg"> {{$message}}</p>
    @endforeach
    
   
    {!! Form::text('color') !!}
    
    {!! Form::submit('Add') !!}
    
    
    {!! Form::close() !!}
    @stop
</div>