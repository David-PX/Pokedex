<?php 

require_once "../database/metodos.php";
require_once "../database/conexion.php";

?>


<html lang="en"><head>

    <title>Pokedex</title>



<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<link rel="stylesheet" href="../assets/css/style.css">


  </head>
  <body>
    <header>
 
  <div class="navbar navbar-danger bg-danger shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="../index.php" class="navbar-brand d-flex align-items-center text-white">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="25" height="25"
viewBox="0 0 226 226"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><g fill="#ffffff"><path d="M113,9.04c-57.06576,0 -103.46445,46.12303 -103.94234,103.07719c-0.10913,0.56567 -0.10913,1.14699 0,1.71266c0.44942,56.97864 46.85882,103.13016 103.94234,103.13016c57.06576,0 103.46445,-46.12303 103.94234,-103.07719c0.10913,-0.56567 0.10913,-1.14699 0,-1.71266c-0.44942,-56.97864 -46.85882,-103.13016 -103.94234,-103.13016zM113,18.08c50.96088,0 92.45067,40.02819 94.80523,90.4h-49.83476c-2.27981,-22.79587 -21.58768,-40.68 -44.97047,-40.68c-23.38279,0 -42.69066,17.88413 -44.97047,40.68h-49.83476c2.35456,-50.37181 43.84436,-90.4 94.80523,-90.4zM113,76.84c19.84538,0 35.84892,15.85473 36.13352,35.63031c-0.04435,0.36355 -0.04435,0.73114 0,1.09469c-0.30328,19.75903 -16.30002,35.595 -36.13352,35.595c-19.84538,0 -35.84892,-15.85473 -36.13352,-35.63031c0.04435,-0.36355 0.04435,-0.73114 0,-1.09469c0.30328,-19.75903 16.30002,-35.595 36.13352,-35.595zM113,90.4c-7.15667,0 -13.09945,2.8465 -16.94117,7.16844c-3.84172,4.32194 -5.65883,9.90712 -5.65883,15.43156c0,5.52444 1.8171,11.10963 5.65883,15.43156c3.84172,4.32194 9.78451,7.16844 16.94117,7.16844c7.15667,0 13.09945,-2.8465 16.94117,-7.16844c3.84172,-4.32194 5.65883,-9.90712 5.65883,-15.43156c0,-5.52444 -1.8171,-11.10963 -5.65883,-15.43156c-3.84172,-4.32194 -9.78451,-7.16844 -16.94117,-7.16844zM113,99.44c4.89667,0 7.99389,1.6735 10.17883,4.13156c2.18494,2.45806 3.38117,5.91288 3.38117,9.42844c0,3.51556 -1.19623,6.97037 -3.38117,9.42844c-2.18494,2.45806 -5.28216,4.13156 -10.17883,4.13156c-4.89667,0 -7.99389,-1.6735 -10.17883,-4.13156c-2.18494,-2.45806 -3.38117,-5.91288 -3.38117,-9.42844c0,-3.51556 1.19623,-6.97037 3.38117,-9.42844c2.18494,-2.45806 5.28216,-4.13156 10.17883,-4.13156zM18.19477,117.52h49.83476c2.27981,22.79587 21.58768,40.68 44.97047,40.68c23.38279,0 42.69066,-17.88413 44.97047,-40.68h49.83476c-2.35456,50.37181 -43.84436,90.4 -94.80523,90.4c-50.96088,0 -92.45067,-40.02819 -94.80523,-90.4z"></path></g></g></svg>
        <strong>Pokedex</strong>
      </a>
     
    </div>
  </div>
</header>

<main role="main">
 <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <nav class="navbar navbar-expand-lg  bg-danger text-white navbar-dark barra2">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Lista de pokemons <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tipos de pokemons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lista de pokemons</a>
      </li>
      
    </ul>
  </div>
 </nav>
 </div>
 <div class="col-md-2"></div>
 </div>



<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 card form-container">
<form action="../database/insertar.php" method="POST" enctype="multipart/form-data">

 
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="txtNombre">
    </div>
   <div class="form-row">

  <div class="form-group col-md-6">
    <label for="tipo1">Tipo 1</label>
    <input type="text" class="form-control" id="tipo2" name="txtTipo1" >
  </div>
  <div class="form-group col-md-6">
    <label for="tipo2">Tipo 2</label>
    <input type="text" class="form-control" id="tipo2" name="txtTipo2">
  </div>
</div>


  <div class="form-row ">
    <div class="form-group col-md-3">
      <label for="ataque1">Ataque 1</label>
      <input type="text" class="form-control" id="ataque1" name="movimientos[]">
    </div>
    <div class="form-group col-md-3">
      <label for="ataque2">Ataque 2</label>
      <input type="text" class="form-control" id="ataque2"name="movimientos[]">
    </div>
    <div class="form-group col-md-3">
      <label for="ataque3">Ataque 3</label>
      <input type="text" class="form-control" id="ataque3" name="movimientos[]">
    </div>
     <div class="form-group col-md-3">
      <label for="ataque4">Ataque 4</label>
      <input type="text" class="form-control" id="ataque4"name="movimientos[]">
    </div>
  </div>
   <div class="form-group">
    <label for="region">Region</label>
    <select class="form-control" id="region" name="txtRegion">
      <option value="1">Kanto</option>
      <option value="2">Johto</option>
      <option value="3">Hoenn</option>
      <option value="4">Sinnoh</option>
      <option value="5">Kalos</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="foto">Elegir foto...</label>
      <input class="form-control"accept="image/*" type="file" id="foto" name="txtFoto">
      
        
      
    
  </div>
  <button type="submit" class="btn btn-danger">Guardar</button>
</form>
</div>
<div class="col-md-2"></div>
</div>



 </main>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>




</html>
