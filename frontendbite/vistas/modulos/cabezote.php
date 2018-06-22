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

		</div>
	</div>
</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid">
	
	<div class="container">
		
		<div class="row" id="cabezote">

			<!--=====================================
			LOGOTIPO
			======================================-->
			
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
				
				<a href="#">
						
					<img src="<?php echo $servidor.$social["logo"]; ?>" class="img-responsive">

				</a>
				
			</div>
			<div class="col-lg-9">
				<ul class="menu">
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
	</header>