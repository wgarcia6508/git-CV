<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include'include/head_link.php'?>
      <link rel="stylesheet" href="css/justifiedGallery.css" />
<script src="js/jquery.justifiedGallery.js"></script>
   </head>
   <body>
      <section class="section" id="primero">
         <div class="container sect1 white z-depth-3">
            <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
  </nav>
            <ul id="mobile-demo" class="sidenav">
               <li><a href="#primero"> <i class="material-icons left">account_circle</i>Perfil</a></li>
               <li><a href="#segundo"> <i class="material-icons left">airline_seat_recline_extra</i>Habilidades</a></li>
               <li><a href="#tercero"> <i class="material-icons left">school</i>Estudios</a></li>
               <li><a href="#cuarto"> <i class="material-icons left">pool</i>Experiencias</a></li>
               <li><a href="#quinto"> <i class="material-icons left">view_module</i>Portafolio</a></li>
               <li><a href="#"> <i class="material-icons left">add</i>Reconmendaciones</a></li>
            </ul>
         </div>
      </section>
      
      
       <div class="container">
           <div id="mygallery" >
    <a href="img/cv/car2.jpg">
        <img alt="Title 1" src="img/cv/ex1.png"/>
    </a>
    <a href="img/cv/car1.jpg">
        <img alt="Title 2" src="img/cv/ex3.png"/>
    </a>
    <!-- other images... -->
</div>
       </div>
      
      
      <script src="js/jquery-3.2.1.slim.min.js"></script>
      <?php include'include/food_scripts.php'?>
      <script src="js/particles.js"></script>
         <script >$("#basicExample").justifiedGallery();</script>
   </body>
</html>