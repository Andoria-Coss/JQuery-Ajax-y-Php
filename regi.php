<?php

include_once("cabecera.html");
include_once("menu.html");
?>
<main id="main-content">

		<script type="text/javascript" src="js/jquery-3.2.1.js">
		</script>
		<script type="text/javascript">
			
			$(document).ready(function(){
    $("h3").mouseenter(function(){
    $(this).css("color", "orangered");
  });
    $("h3").mouseleave(function(){
    $(this).css("color", "hotpink");
  });
    
    $("input").focus(function(){
    $(this).css("border-color", "lime");
  });
  $("input").blur(function(){
    $(this).css("border-color", "gold");
  });
 
});
		</script>
<section>
		<header>
	<link href="css/anima.css" rel="stylesheet" type="text/css"/>



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script> 
</head>

<body>
<header> 
<!-- Begin page content -->
<div class="container">
  <h3 class="mt-5">REGISTRO</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar </button>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section --> 

<!-- Bootstrap Modals --> 
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Agregar </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="id_alumno">Nombre</label>
          <input  type="text" id="cve" value=""  class="form-control"/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Dia</label>
          <input type="text" id="snombre" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Hora</label>
          <input type="text" id="sapepat" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Comentario</label>
          <input type="password" id="pass" class="form-control" value=""/>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="idalumno">Nombre</label>
          <input type="text" id="update_idalumno" value="" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="cve">Dia</label>
          <input type="text" id="update_cve" placeholder="Last Name" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="snombre">Hora</label>
          <textarea  id="update_snombre" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar Cambios</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>


		</header>
		</section>
		</main>
<?php
include_once("lateral1.html");
include_once("lateral2.html");
include_once("pie.html");
?>	