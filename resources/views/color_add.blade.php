@extends('main')
@section('content')
<h2>Add new color</h2>

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