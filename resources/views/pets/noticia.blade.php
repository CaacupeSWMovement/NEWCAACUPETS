@extends('base.cliente')
@section('content')
<div class="content">
	<div class="main">
	"<div class="container">
			<div class="blog-content">
			    <div class="blog-content-head text-left">
					<h3>Como Ayudar</h3>
			    </div>
				<div class="section group">
					<div class="cont span_2_of_3">
						  <div class="blog_posts">
						  	@foreach($noticias as $noticia)
							<div class="section group example">
								<div class="col blog_1_of_2">
					                <div class="blog_img">
											<a href="single.html"><img src="{{asset('imagenes/noticias/'.$noticia->not_imagen)}}" alt=""></a>
					                </div>
								</div>
									<div class="col blogdata_1_of_2">
										<div class="blog_heading">
										<p><a href="single.html"><span>{{$noticia->not_titulo}}</span></a></p>
										<p><b>{{$noticia->not_sub_titulo}}</b></p>
								     </div>
										<div class="blog_data">
											<p><?php print("$noticia->not_contenido") ?></p>
					                   </div>
									</div>
									 <div class="clearfix"></div>	
								</div>
							 	<div class="clearfix"></div>
							@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection