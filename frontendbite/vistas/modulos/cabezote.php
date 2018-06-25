<?php
$servidor = Ruta::ctrRutaServidor();
?>
<!--=====================================
TOP
======================================-->
<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
			
			<!--=====================================
			SOCIAL
			======================================-->
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				
				<ul>
					<?php
					$social = ControladorPrincipal::ctrEstiloPlantilla();
							$jsonRedesSociales = json_decode($social["redesSociales"],true);
					foreach ($jsonRedesSociales as $key => $value) {
						echo '<li>
									<a href="'.$value["url"].'" target="_blank">
											<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
									</a>
							</li>';
					}
					?>
					
				</ul>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 info-mail">
				
				<ul>
					
					<li><a><strong><i class="fa fa-envelope"></i> info@bite-consulting.com</strong></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--=====================================
HEADER
======================================-->
<header class="container-fluid" >
	
	<div class="container" >
		
		<div class="row" id="cabezote">
			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="#">
					
					<img src="<?php echo $servidor.$social["logo"]; ?>" class="img-responsive">
				</a>
				
			</div>
			<div class="col-lg-9" class="info-tel">
				<ul>
					<li><i class="fa fa-mobile"></i> 987 478 642</li>
					<li><i class="fa fa-phone"></i> 574 6536</li>
				</ul>
			</div>
			
		</div>
		
		
	</div>
	<div class="row ">
			<div class="col-lg-12 " style="margin:0;padding: 0;">
			<div class="menu-header" >
				
				
				<div class="container">
					<div id="menu-icon">
					<i class="fa fa-align-justify "></i> Menu
				</div>
					<ul class="menu" style="float:  left ;">
					<li>
						<a href="#">Inicio</a>
					</li>
					<li>
						<a href="#">Nosotros</a>
					</li>
					<li>
						<a href="#">Servicios</a>
					</li>
					<li>
						<a href="#">Portafolio</a>
					</li>
					<li>
						<a href="#">Equipo</a>
					</li>
					<li>
						<a href="#">Contáctanos</a>
					</li>
				</ul>
				</div>
				
			</div>
			
		</div>
		</div>
	
	
</header>