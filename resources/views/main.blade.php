<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Welcome to piccolo.dev</title>
     <meta charset="utf-8">
     </head>
     <body  class="">
<!--==============================header=================================-->
 <header>
  <div class="container_12">
   <div class="grid_12">
    <h1>Calzados Piccolo</h1>
    <div class="menu_block">

     <nav  class="" >
      <ul class="sf-menu">
         <li><a href="/">Home</a></li>
<!--         <li><a href="/shoe/categories">Categories</a></li>-->
         @if ( Auth::guest() )
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
         @else
            @if ( Auth::user()->isAdmin() )
                <li><a href="/admin">Admin</a></li>
            @endif
            <li><a href="/auth/logout">Logout</a></li>
         @endif
       </ul>
    </nav>
   
 <div class="clear"></div>
</div>
<div class="clear"></div>
          </div>
      </div>
</header>

<!--==============================Content=================================-->
<div class="content">
    <div class="container_12">
        @if ( $message = Session::pull('message') )
            <p class="success_msg">{{{ $message }}}</p>
        @endif
        <div class="grid_12">
@yield('content')
    </div>
  </div>
</div>
<!--==============================footer=================================-->
<br />
<div class="bottom_block">
    <div class="container_12">
      <div class="grid_10 prefix_1">
&nbsp;   
      </div>
    </div>
</div>


<footer>   
  <div class="container_12">
    <div class="grid_12">

      <div class="copy">
      Diseño web por Miguel Angel Rios - &copy; Calzados Piccolo 
      </div>
    </div>
  </div>
</footer>

</body>
</html>