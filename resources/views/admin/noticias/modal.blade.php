<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Desea eliminar este registro?
      </div>
      <div class="modal-footer">
        {!! Form::open(['url' => '/administracion/noticia/'.$noticia->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
          <input type="submit" class="btn btn-danger" value="Eliminar">
        {!! Form::close() !!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>