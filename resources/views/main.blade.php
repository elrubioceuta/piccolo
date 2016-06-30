<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Welcome to piccolo.dev</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="http://piccolo.onlinewebshop.net/reset.css" />
    {{ Html::style('css/estilo.css') }}
    {{ Html::style('css/form.css') }}
     </head>
     <body  class="">
         <div class="content">
<!--==============================header=================================-->
 <header>

   <div class="header">
    <h1>Calzados Piccolo</h1>
    <div class="menu_block">

     <nav>
      <ul id="main-menu">
         <li id="first"><a href="/shoe">Shoes</a></li>
         <li><a href="/shoe/categories">Categories</a></li> 
         <li><a href="/shoe/colors">Colors</a></li>
         <li><a href="/shoe/sizes">Sizes</a></li>
         @if ( Auth::guest() )
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
         @else
         <li><a href="/book">Books</a></li>
            @if ( Auth::user()->isAdmin() )
                <li><a href="/admin">Admin</a></li>
            @endif
            <li><a href="/auth/logout">Logout</a></li>
         @endif
       </ul>
    </nav>
    </div>
   </div>  
</header>

<!--==============================Content=================================-->
<div class="seccion">
    <div id="content1">
        @if ( $message = Session::pull('message') )
            <p class="success_msg">{{{ $message }}}</p>
        @endif  
    </div>
    <div id="content2">
@yield('content')
    </div>

</div>
<!--==============================footer=================================-->
            <footer>
                &copy; 2016 Calzados Piccolo, proyecto web realizado por Miguel Angel Rios.
            </footer> 
         </div>
</body>
</html>