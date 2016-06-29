@extends('main')
@section('content')
<h3>Admin panel</h3>
    </div>
    <div class="grid_7">&nbsp;
    </div>
    <div class="grid_4 prefix_1">
      <h4>Admin actions</h4>
      <ul class="list">
        <li><a href="{{ url('category/add') }}">Add new Category</a></li>
        <li><a href="{{ url('color/add') }}">Add new Color</a></li>
        <li><a href="{{ url('size/add') }}">Add new Size</a></li>
      </ul>
@stop