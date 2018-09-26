@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Noticias</strong>
                    <a href="{{url('administracion/noticia/create')}}" class="btn btn-success"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar</a type="submit">
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Sub Titulo</th>
                <th>Imagen</th>
                <th>Contenido</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach($noticias as $count=> $noticia)
              <tr>
                <td>{{$count+1}}</td>
                <td>{{$noticia->not_titulo}}</td>
                <td>{{$noticia->not_sub_titulo}}</td>
                <td><img src="{{asset('imagenes/noticias/'.$noticia->not_imagen)}}" class="img-responsive" alt="" style="width: 50px;"/></td>
                <td><?php print("$noticia->not_contenido") ?></td>
                <td>
                    <a class="btn btn-primary" href="{{ url('administracion/noticia/'.$noticia->id.'/edit') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
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
    @include('admin.noticias.modal')
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