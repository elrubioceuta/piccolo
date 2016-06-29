@extends('main')
@section('content')
<h2>Register</h2>

{!! Form::open(array('url' => 'auth/register')) !!}

<table style="font-size: 20px; line-height: 2em;" id="form">


@foreach($errors->get('name') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('name', 'Full name') !!}
</td><td>
{!! Form::text('name') !!}
</td></tr>

@foreach($errors->get('email') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('email', 'Email address') !!}
</td><td>
{!! Form::email('email') !!}
</td></tr>

@foreach($errors->get('phone') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('phone', 'Phone') !!}
</td><td>
{!! Form::text('phone') !!}
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
{!! Form::label('password_confirmation', 'Confirm password') !!}
</td><td>
{!! Form::password('password_confirmation') !!}
</td></tr>

<tr><td colspan="2">
{!! Form::submit('Register') !!}
</td></tr>

</table>

{!! Form::close() !!}
@stop