@extends('main')
@section('content')

<h2>Delete users</h2>

@foreach ( $users as $user )
      <div class="grid">
                <h3>{{{ $user['name'] }}}</h3>
                <a style="color:red" href="{{{ url('user/destroy',$user) }}}">Delete</a>
      </div>
<div class="clear"></div>
@endforeach


@stop