<?php
include_once("cabecera.html");
include_once("menu.html");
?>
			<main id="main-content">
				<script src="js/d_d.js" async="else"></script>
				<!--Estilo para áreas de arrastrar y soltar, 
				    sólo se usan en esta página -->
				<style>
					.paraMover {width: 6.55rem; 
								height: 5.4rem; 
								float: left; 
								margin: 0.1rem; 
								
								
								}
					#destino   {width: 40rem; 
								height: 30rem; 
								float: right; 
								margin: 1rem; 
								background:blue;
								color: white;
								
								
								}
					.cuadro{}
					
					.circulo{}

					#ides{
						width: 40rem; 
						height: 30rem; 
					}
				</style>

				<section>
					<header>
						<h3>ROMPECABEZAS</h3>
					</header>
					<!--1-->
					<div id="a1" class="circulo paraMover ui-widget-content">
						<img src="imgs/ra.jpg"/>
					</div>
					<div id="a2" class="circulo paraMover ui-widget-content">
						<img src="imgs/ra1.jpg"/>
					</div>
					<div id="a3" class="cuadro paraMover ui-widget-content">
						<img src="imgs/ra2.jpg"/>
					</div>
					<div id="a4" class="cuadro paraMover ui-widget-content">
						<img src="imgs/ra3.jpg"/>
					</div>
					<div id="a5" class="cuadro paraMover ui-widget-content">
						<img src="imgs/ra4.jpg"/>
					</div>
										<!--2-->
										<div id="a1" class="circulo paraMover ui-widget-content">
						<img src="imgs/rb.jpg"/>
					</div>
					<div id="a2" class="circulo paraMover ui-widget-content">
						<img src="imgs/rb1.jpg"/>
					</div>
					<div id="a3" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rb2.jpg"/>
					</div>
					<div id="a4" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rb3.jpg"/>
					</div>
					<div id="a5" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rb4.jpg"/>
					</div>
										<!--3-->
					<div id="a1" class="circulo paraMover ui-widget-content">
					<img src="imgs/rc1.jpg"/>
					</div>
					<div id="a2" class="circulo paraMover ui-widget-content">
						<img src="imgs/rc2.jpg"/>
					</div>
					<div id="a3" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rc3.jpg"/>
					</div>
					<div id="a4" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rc4.jpg"/>
					</div>
					<div id="a5" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rc5.jpg"/>
					</div>
										<!--4-->
					<div id="a1" class="circulo paraMover ui-widget-content">
					<img src="imgs/rd1.jpg"/>
					</div>
					<div id="a2" class="circulo paraMover ui-widget-content">
						<img src="imgs/rd2.jpg"/>
					</div>
					<div id="a3" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rd3.jpg"/>
					</div>
					<div id="a4" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rd4.jpg"/>
					</div>
					<div id="a5" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rd5.jpg"/>
					</div>
										<!--5-->
					<div id="a1" class="circulo paraMover ui-widget-content">
					<img src="imgs/re1.jpg"/>
					</div>
					<div id="a2" class="circulo paraMover ui-widget-content">
						<img src="imgs/re2.jpg"/>
					</div>
					<div id="a3" class="cuadro paraMover ui-widget-content">
						<img src="imgs/re3.jpg"/>
					</div>
					<div id="a4" class="cuadro paraMover ui-widget-content">
						<img src="imgs/re4.jpg"/>
					</div>
					<div id="a5" class="cuadro paraMover ui-widget-content">
						<img src="imgs/re5.jpg"/>
					</div>
										<!--6-->
										<div id="a1" class="circulo paraMover ui-widget-content">
						<img src="imgs/rf1.jpg"/>
					</div>
					<div id="a2" class="circulo paraMover ui-widget-content">
						<img src="imgs/rf2.jpg"/>
					</div>
					<div id="a3" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rf3.jpg"/>
					</div>
					<div id="a4" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rf4.jpg"/>
					</div>
					<div id="a5" class="cuadro paraMover ui-widget-content">
						<img src="imgs/rf5.jpg"/>
					</div>



					<!--Destinos-->
					<div id="destino" class="ui-widget-header">
						<!--<p>Para soltar</p>-->
						<img id="ides" src="imgs/r1.jpg"/>
					</div>
				</section>
			</main>
<?php
include_once("lateral1.html");
include_once("lateral2.html");
include_once("pie.html");
?>