@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Editar Noticia</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          {!! Form::model($noticia,['method'=>'PATCH','url'=>['administracion/noticia',$noticia->id],'files'=>'true']) !!}
                            {{Form::token()}}
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Titulo de la Noticia</label>
                                  <input name="not_titulo" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$noticia->not_titulo}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Sub titulo de la Noticia</label>
                                  <input name="not_sub_titulo" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$noticia->not_sub_titulo}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-number" class="control-label mb-1">Imagen de la noticia</label>
                                  <input name="not_imagen" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="file" class="form-control" aria-required="true" aria-invalid="false" value="{{asset('imagenes/noticias/'.$noticia->not_imagen)}}" required>
                                  <img src="{{asset('imagenes/noticias/'.$noticia->not_imagen)}}" class="img-responsive" alt="" style="width: 100px;"/>
                              </div>
                              <div class="form-group">
                                  <label for="cc-number" class="control-label mb-1">Contenido de la noticia</label>
                                  <textarea name="not_contenido" placeholder="Titulo de la noticia" id="redactor" type="text" class="form-control" required>{{$noticia->not_contenido}}</textarea>
                              </div>
                              <div>
                                  <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                      <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;
                                      <span id="payment-button-amount">Agregar</span>
                                      <span id="payment-button-sending" style="display:none;">Sending…</span>
                                  </button>
                              </div>
                          {!!Form::close()!!}
                      </div>
                  </div>

                </div>
            </div> <!-- .card -->

          </div><!--/.col-->
		</div>
    </div><!-- .animated -->
</div>

@endsection