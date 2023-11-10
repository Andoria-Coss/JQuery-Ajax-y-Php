<?php
include_once("cabecera.html");
include_once("menu.html");?>
<main id="main-content">
				<section>
					<header>
                    <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 40%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 20px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>

<script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );

  $(document).ready(function(){
    $("h2").mouseenter(function(){
    $(this).css("color", "deeppink");
  });
    $("h2").mouseleave(function(){
    $(this).css("color", "read");
  });
    
  $("li").mouseenter(function(){
    $(this).css("color", "teal");
  });
    $("li").mouseleave(function(){
    $(this).css("color", "darkslateblue");
  });
});
  </script><center>
</head>
<link href="css/anima.css" rel="stylesheet" type="text/css"/>
<h2>Ordena por orden alfabetico</h2>
<ul id="sortable">
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>hilo</li>                  
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>caballo</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>abuelo</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>maleta</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>iglesia</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>palacio</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>noche</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>bocina</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>dormir</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>gato</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>lechuga</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>familia</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>ogro</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>radio</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>jirafa</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>sandía</li>
  <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>empresa</li>
</ul></center>
</section>
</main>
<?php
include_once("lateral1.html");
include_once("lateral2.html");
include_once("pie.html");?>		