@extends('main')
@section('content')
<h2>Add new shoes</h2>

{!! Form::open(array('files' => true)) !!}

<table style="font-size: 20px; line-height: 2em;" id="form">


@foreach($errors->get('name') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('name', 'Name') !!}
</td><td>
{!! Form::text('name') !!}
</td></tr>

@foreach($errors->get('description') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('description', 'Description') !!}
</td><td>
{!! Form::textarea('description') !!}
</td></tr>

@foreach($errors->get('category') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
Category
</td><td>
{!! Form::select('category', $categories) !!}
</td></tr>

@foreach($errors->get('color') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
Color
</td><td>
{!! Form::select('color', $colors) !!}
</td></tr>

@foreach($errors->get('size') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
Size
</td><td>
{!! Form::select('size', $sizes) !!}
</td></tr>

@foreach($errors->get('price') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('price', 'Price') !!}
</td><td>
{!! Form::text('price') !!}
</td></tr>

@foreach($errors->get('image_large') as $message)
<tr><td colspan="2" class="error_msg">{{ $message }}</td></tr>
@endforeach
<tr><td>
{!! Form::label('image_large', 'Image') !!}
</td><td>
{!! Form::file('image_large') !!}
</td></tr>

<tr><td colspan="2">
{!! Form::submit('Add new product') !!}
</td></tr>

</table>

{!! Form::close() !!}
@stop