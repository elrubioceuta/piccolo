@extends('main')
@section('content')
<h3 class="mb0">Login</h3>

{!! Form::open(array('url' => 'auth/login')) !!}

<!-- semantically not the best way to put form into tables -->
    
@foreach($errors->all() as $message)
<p class="error_msg">{{ $message }}</p>
@endforeach

<table style="font-size: 20px; line-height: 2em;" id="form">

<tr><td>
{!! Form::label('email', 'Email address') !!}
</td><td>
{!! Form::email('email') !!}
</td></tr>

<tr><td>
{!! Form::label('password', 'Password') !!}
</td><td>
{!! Form::password('password') !!}
</td></tr>

<tr><td>
{!! Form::label('remember_me', 'Remember me') !!}
</td><td>
{!! Form::checkbox('remember_me') !!}
</td></tr>

<tr><td colspan="2">
{!! Form::submit('Login') !!}
</td></tr>

</table>

{!! Form::close() !!}
@stop