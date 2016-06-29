@extends('main')
@section('content')

      <h2>{{{ $shoes_title }}}</h2>
    </div>
    <div class="clear"></div>
    <div class="prod">

@foreach ( $shoes as $shoe )
      <div class="grid">
        <div class="box">
          <div style='width: 40%;'>
              <a href="{{{ url('shoe/show', $shoe['id']) }}}l"><img src="{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_large'] ) }}" alt="{{{ $shoe['name'] }}}"></a>
              <a href="{{{ url('shoe/show', $shoe['id']) }}}">{{{ $shoe['name'] }}}</a>
          </div>
        </div>
      </div>
@endforeach

@stop