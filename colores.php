<?php
include_once("cabecera.html");
include_once("menu.html");
?>		
			<main id="main-content">
				<section>
					<header>
						<h3>Animaci&oacute;n</h3>
					</header>
					<link href="css/anima.css" rel="stylesheet" type="text/css"/>

					<table align="center">

					<tr><th>Nombre</th><th>Color</th></tr>

					<tr><td id="amarillo">Amarillo</td><td id="amarillo"><button type="button" onclick="myFunction()" class="tipoboton"> <img src="imgs/brocha.png" class="imgP"></img> </button></td></tr>
					<script>function myFunction() {
  					document.getElementById("amarillo").style.fontSize = "25px"; 
  					document.getElementById("amarillo").style.color = "black";
  					document.getElementById("amarillo").style.backgroundColor = "#FFF222";}</script>
					

					<tr><td id="azul">Azul</td><td id="azul"><button type="button" onclick="myFunction2()" class="tipoboton"><img src="imgs/brocha.png" class="imgP"></button></button></td></tr>
					<script>function myFunction2() {
  					document.getElementById("azul").style.fontSize = "25px"; 
  					document.getElementById("azul").style.color = "white";
  					document.getElementById("azul").style.backgroundColor = "blue";}</script>

					<tr><td id="rosa">Rosado</td><td id="rosa"><button type="button" onclick="myFunction3()" class="tipoboton"><img src="imgs/brocha.png" class="imgP"></button></button></td></tr>
					<script>function myFunction3() {
  					document.getElementById("rosa").style.fontSize = "25px"; 
  					document.getElementById("rosa").style.color = "white";
  					document.getElementById("rosa").style.backgroundColor = "#FE75B3";}</script>


					<tr><td id="verde">Verde</td><td id="verde"><button type="button" onclick="myFunction4()" class="tipoboton"><img src="imgs/brocha.png" class="imgP"></button></button></td></tr>
					<script>function myFunction4() {
  					document.getElementById("verde").style.fontSize = "25px"; 
  					document.getElementById("verde").style.color = "black";
  					document.getElementById("verde").style.backgroundColor = "#02EF66";}</script>

					<tr><td id="morado">Morado</td><td id="morado"><button type="button" onclick="myFunction5()" class="tipoboton"><img src="imgs/brocha.png" class="imgP"></button></button></td></tr>
					<script>function myFunction5() {
  					document.getElementById("morado").style.fontSize = "25px"; 
  					document.getElementById("morado").style.color = "white";
  					document.getElementById("morado").style.backgroundColor = "#A702EF";}</script>

					<tr><td id="naranja">Anaranjado</td><td id="naranja"><button type="button" onclick="myFunction6()" class="tipoboton"><img src="imgs/brocha.png" class="imgP"></button></button></td></tr>
					<script>function myFunction6() {
  					document.getElementById("naranja").style.fontSize = "25px"; 
  					document.getElementById("naranja").style.color = "white";
  					document.getElementById("naranja").style.backgroundColor = "#EF6E02";}</script>

					<tr><td id="rojo">Rojo</td><td id="rojo"><button type="button" onclick="myFunction7()" class="tipoboton"><img src="imgs/brocha.png" class="imgP"></button></button></td></tr>
					<script>function myFunction7() {
  					document.getElementById("rojo").style.fontSize = "25px"; 
  					document.getElementById("rojo").style.color = "white";
  					document.getElementById("rojo").style.backgroundColor = "#EF1F02";}</script>

					</table>

				</section>
			</main>
<?php
include_once("lateral1.html");
include_once("lateral2.html");
include_once("pie.html");
?>		