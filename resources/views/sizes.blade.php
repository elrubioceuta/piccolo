@extends('main')
@section('content')

 <h2>Size</h2>    

@foreach ( $sizes as $size )
    
<h3><a href='{{{ url('shoe/size', $size->id) }}}'>{{{ $size->size }}}</a></h3>

@foreach ( $size->shoes as $shoe )
      <div class="grid">
          <div style='width: 40%;'><a href="{{{ url('shoe/show', $shoe['id']) }}}"><img src="{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_large'] ) }}" alt=""></a><a href="{{{ url('shoe/show', $shoe['id']) }}}">{{{ $shoe['name'] }}}</a></div>
      </div>
@endforeach

<div class="clear"></div>

@endforeach



@stop