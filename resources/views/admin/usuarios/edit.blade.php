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
                          {!! Form::model($user,['method'=>'PATCH','url'=>['administracion/user',$user->id],'files'=>'true']) !!}
                            {{Form::token()}}
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Nombre</label>
                                  <input name="name" placeholder="Nombre de usuario" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$user->name}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Email</label>
                                  <input name="email" placeholder="Email ..." id="cc-pament" name="cc-payment" type="email" class="form-control" aria-required="true" aria-invalid="false" value="{{$user->email}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Contraseña</label>
                                  <input name="password" placeholder="****" id="cc-pament" name="cc-payment" type="password" class="form-control" aria-required="true" aria-invalid="false" value="{{$user->password}}" required>
                              </div>
                              <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Confirmar contraseña</label>
                                  <input name="password_confirmation" placeholder="****" id="cc-pament" name="cc-payment" type="password" class="form-control" aria-required="true" aria-invalid="false" value="{{$user->password}}" required>
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