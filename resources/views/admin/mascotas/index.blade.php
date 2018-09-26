@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Mascotas</strong>
                    <a href="{{url('administracion/mascota/create')}}" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar</a type="submit">
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Imagen</th>
                <th>Apto</th>
                <th>Castrado</th>
                <th>Sexo</th>
                <th>Descripcion</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach($mascotas as $count=> $mascota)
              <tr>
                <td>{{$count+1}}</td>
                <td>{{$mascota->mas_nombre}}</td>
                <td>{{$mascota->mas_edad}}</td>
                <td><img src="{{asset('imagenes/mascotas/'.$mascota->mas_imagen)}}" class="img-responsive" alt="" style="width: 50px;"/></td>
                <td>{{$mascota->mas_apto}}</td>
                <td>{{$mascota->mas_castrado}}</td>
                <td>{{$mascota->mas_sexo}}</td>
                <td>{{$mascota->mas_descripcion}}</td>

                <td>
                    <a class="btn btn-primary" href="{{ url('administracion/mascota/'.$mascota->id.'/edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
                </div>
            </div>
        </div>
        </div>
    </div><!-- .animated -->
    @include('admin.mascotas.mensajes')
    @include('admin.mascotas.modal')
</div>
<script src="{{asset('admin/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/js/lib/data-table/datatables-init.js')}}"></script>


<script type="text/javascript">
$(document).ready(function() {
  $('#bootstrap-data-table-export').DataTable();
} );
</script>
@endsection