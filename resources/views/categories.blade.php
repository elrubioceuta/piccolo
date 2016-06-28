@extends('main')
@section('content')

 <h3> class="mb0">Category</h3>    
 
<div class="prod">

@foreach ( $categories as $category )

<h3 class="mb0"><a href='{{{ url('shoe/category', $category->id) }}}'>{{{ $category->name }}}</a></h3>

@foreach ( $category->shoes as $shoe )
      <div class="grid_3">
        <div class="box">
          <div class="maxheight"><a href="{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_large'] ) }}" class="gal"><img src="{{ asset( $shoe->images()['asset_path'].$shoe->images()['image_small'] ) }}" alt=""></a><a href="{{{ url('shoe/show', $shoe['id']) }}}">{{{ $shoe['name'] }}}</a></div>
        </div>
      </div>
@endforeach

<div class="clear"></div>

@endforeach

</div>

@stop