@extends('main')
@section('content')

 <h2>Color</h2>    

@foreach ( $colors as $color )
    
<h3><a href='{{{ url('shoe/color', $color->id) }}}'>{{{ $color->name }}}</a></h3>

@foreach ( $color->shoes as $shoe )
      <div class="grid">
          <div style='width: 40%;'><a href="{{{ url('shoe/show', $shoe['id']) }}}"><img src="{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_large'] ) }}" alt=""></a><a href="{{{ url('shoe/show', $shoe['id']) }}}">{{{ $shoe['name'] }}}</a></div>
      </div>
@endforeach

<div class="clear"></div>

@endforeach



@stop