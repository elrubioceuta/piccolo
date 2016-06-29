@extends('main')
@section('content')
<h2>Login</h2>

{!! Form::open(array('url' => 'auth/login')) !!}

<!-- semantically not the best way to put form into tables -->
 
<table style="font-size: 20px; line-height: 2em;" id="form">

    
@foreach($errors->get('email') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach

<tr><td>
{!! Form::label('email', 'Email address') !!}
</td><td>
{!! Form::email('email') !!}
</td></tr>

@foreach($errors->get('password') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach

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