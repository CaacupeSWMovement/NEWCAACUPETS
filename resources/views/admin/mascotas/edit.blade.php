@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Editar Mascota</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          {!! Form::model($mascota,['method'=>'PATCH','url'=>['administracion/mascota',$mascota->id],'files'=>'true']) !!}
                            {{Form::token()}}
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                  <input name="mas_nombre" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$mascota->mas_nombre}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Edad</label>
                                  <input name="mas_edad" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="number" class="form-control" aria-required="true" aria-invalid="false" value="{{$mascota->mas_edad}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-number" class="control-label mb-1">Imagen de la mascota</label>
                                  <input name="mas_imagen" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="file" class="form-control" aria-required="true" aria-invalid="false" value="{{asset('imagenes/mascota/'.$mascota->mas_imagen)}}" required>
                                  <img src="{{asset('imagenes/mascota/'.$mascota->mas_imagen)}}" class="img-responsive" alt="" style="width: 100px;"/>
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Es apto para</label>
                                  <select name="mas_apto" value="{{$mascota->mas_apto}}" class="form-control" id="exampleFormControlSelect1">
                                    <option>para jugar con criaturas</option>
                                    <option>para cuidar la casa</option>
                                    <option>otros</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Esta castrado?</label>
                                  <select name="mas_castrado" value="{{$mascota->mas_castrado}}" class="form-control" id="exampleFormControlSelect1">
                                    @if($mascota->mas_sexo == 'si')
                                    <option>si</option>
                                    @else
                                    <option>no</option>
                                    @endif
                                    <option>si</option>
                                    <option>no</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlSelect1">Sexo</label>
                                  <select name="mas_sexo" value="{{$mascota->mas_sexo}}" class="form-control" id="exampleFormControlSelect1">
                                  @if($mascota->mas_sexo == 'macho')
                                    <option>macho</option>
                                  @else
                                    <option>hembra</option>
                                  @endif
                                    <option>macho</option>
                                    <option>hembra</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="cc-number" class="control-label mb-1">Descripcion</label>
                                  <input name="mas_descripcion" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$mascota->mas_descripcion}}" required>
                                  <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
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