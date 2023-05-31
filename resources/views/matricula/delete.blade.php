<div class="modal fade" id="modal-delete-{{$matricula->id_Matricula}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('matricula.destroy', $matricula->id_Matricula)}}" method='post'>
   @csrf
   @method('DELETE')
   
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de registros</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Desea eliminar la matricula del centro de estudio {{$matricula->Nombre}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-danger" value ="Eliminar" style="padding=0">
      </div>
    </div>
</form>
  </div>
</div>