@extends('main')
@section('content')

 <h2>Category</h2>    

@foreach ( $categories as $category )

<h3><a href='{{{ url('shoe/category', $category->id) }}}'>{{{ $category->name }}}</a></h3>

@foreach ( $category->shoes as $shoe )
      <div class="grid">
          <div style='width: 40%;'><a href="{{{ url('shoe/show', $shoe['id']) }}}"><img src="{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_large'] ) }}" alt=""></a><a href="{{{ url('shoe/show', $shoe['id']) }}}">{{{ $shoe['name'] }}}</a></div>
      </div>
@endforeach

<div class="clear"></div>

@endforeach



@stop