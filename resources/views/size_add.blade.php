@extends('main')
@section('content')
<h2>Add new size</h2>

<div id="form">
    {!! Form::open() !!}
    
    @foreach($errors->all() as $message)
    <p class="error_msg"> {{$message}}</p>
    @endforeach
    
   
    {!! Form::text('size') !!}
    
    {!! Form::submit('Add') !!}
    
    
    {!! Form::close() !!}
    @stop
</div>