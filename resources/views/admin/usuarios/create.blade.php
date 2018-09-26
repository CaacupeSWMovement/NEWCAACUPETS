@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Agregar usuario</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  @include('admin.usuarios.form', ['user' => $user, 'url' => 'administracion/user', 'method' => 'POST'])
                </div>
            </div> <!-- .card -->

          </div><!--/.col-->
		</div>
    </div><!-- .animated -->
</div>

@endsection