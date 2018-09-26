@extends('base.cliente')
@section('content')
<!-- content-section-starts -->
	<div class="content">
		<div class="main">
			<div class="gallery-content">
	 <div class="container">
		<div class="gallery-content-head text-left">
			<h3>Fotos</h3>
		</div>
			<div class="row">
			@foreach($mascotas as $mascota)
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" height="100" width="400" src="{{asset('imagenes/mascotas/'.$mascota->mas_imagen)}}" alt="">
                    <div style="padding: 10px;"></div>
                </a>
            </div>
			@endforeach
        </div>	
   </div>
</div>

		</div> 
	</div>
	<!-- content-section-ends -->
@endsection