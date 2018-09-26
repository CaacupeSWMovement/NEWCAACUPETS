@extends('base.cliente')
@section('content')
<!-- header-section-ends -->
    <div class="banner">
	<div class="slider">	  
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				 <li>
					 <img src="images/3.jpg" alt="" width="500"/>
					  <div class="caption">
						<h2>Como cuidar a tu mascota</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>
				 </li>
				 <li>
					 <img src="images/2.jpg" alt="" width="500"/>
					  <div class="caption">
						<h2>Como puedo ayudar</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>
				 </li>
				 <li>
					 <img src="images/1.jpg" alt="" width="500"/>
					  <div class="caption">
						<h2>Como ser voluntario</h2>
						<a class="more" href="#">Leer mas</a>
					  </div>
				 </li>
			  </ul>	      
		  </div>
	</div>
	</div>
	<!-- content-section-starts -->
		<div class="content">
			<div class="welcome-section">
				<div class="container">
					<div class="col-md-6 welcome-grid text-center">
						<h3>Bienvenido</h3>
						<h5>CaacuPETS</h5>
						<p>CaacuPETS es una asociacion que tomó el poposito, ayudar a los animales callejeros en Caacupe, Paraguay.
						</p>
					</div>
					<div class="col-md-6 images">
						<div class="img1">
						<img src="images/a1.jpg" class="img-responsive" alt="" width="100" />
						</div>
						<div class="img2">
						<img src="images/a2.jpg" class="img-responsive" alt="" width="100" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="about-section text-center">
				<div class="container">
					<h2>Nosotros</h2>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Mision</h4>
						<p>Nuestra misión es rescatar animales callejeros en riesgo para otorgarles una rehabilitación física y psicológica, brindándoles la oportunidad de un hogar y una familia. <br>Mediante una red integrada podemos realizar esterilizaciones, rescates y adopciones de perros y gatos, logrando concientizar cada día a más personas, quienes se han ido uniendo a esta labor.
						</p>
					</div>
					<div class="col-md-6 about-section-grid text-left">
						<h4>Vision</h4>
						<p>Nuestra visión es ser la fundación de animales en riesgo con mayor impacto de Cordillera, generando un cambio efectivo en la conciencia de la sociedad para acabar con el abandono, la humillación y el abuso que sufren miles de animales al día.
						Educando a través de nuestra gran red de estudiantes y profesionales, lograremos otorgar la oportunidad de un hogar a los callejeros de Caacupé.</p>
					</div>
					<div class="clearfix"></div>
					<a href="{{url('/about')}}" class="btn btn-1 btn-1c">leer mas</a>
				</div>
			</div>
			<div class="textimonials-section text-center">
				<div class="container">
					<img src="images/t.png" alt="" />
					<h5>Gracias Caacupets!!! 
                     Personas tan nobles, 
						Que solidaria y con alma tan pura la señora Sussana</p>
					<a href="" class="btn btn-1 btn-1d">Testimonios</a>
				</div>
			</div>
		</div>
	<!-- content-section-ends -->
	
	<div class="main-map">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28837.479613495467!2d-57.13671466387495!3d-25.38187319920515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spy!4v1522882521419" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

@endsection