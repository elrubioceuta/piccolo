@extends('main')
@section('content')
<h2>Admin panel</h2>
    </div>
    <div class="lista">
      <h3>Admin actions</h3>
      <ul class="list">
        <li><a href="{{ url('category/add') }}">Add new Category</a></li>
        <li><a href="{{ url('color/add') }}">Add new Color</a></li>
        <li><a href="{{ url('size/add') }}">Add new Size</a></li>
         <li><br></li>
        <li><a href="{{ url('shoe/add') }}">Add new Shoe</a></li>
        <li><br></li>
        <li><a href="{{ url('user/list') }}">Remove users</a></li>
      </ul>
@stop