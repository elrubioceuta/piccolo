@extends('main')
@section('content')

@foreach($errors->all() as $message)
<p class="error_msg">{{ $message }}</p>
@endforeach

<h3>Hello and welcome to our shop, {{{ Auth::user()->name }}}</h3>

@stop
