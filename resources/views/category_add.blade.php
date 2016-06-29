@extends('main')
@section('content')
<h2>Add new category</h2>

<div id="form">
    {!! Form::open() !!}
    
    @foreach($errors->all() as $message)
    <p class="error_msg"> {{$message}}</p>
    @endforeach
    
   
    {!! Form::text('category') !!}
    
    {!! Form::submit('Add') !!}
    
    
    {!! Form::close() !!}
    @stop
</div>