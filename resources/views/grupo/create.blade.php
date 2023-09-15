

<!-- Modal Create-->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar grupo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<form action="{{route('grupos.store')}}" method="post">
@csrf

      <div class="modal-body">

      <div class="mb-3">
        <label for="" class="form-label">Grupo</label>
        <input type="text"
          class="form-control" name="grupo" id="" aria-describedby="helpId" placeholder="">

      </div>
      <div class="mb-3">
        <label for="" class="form-label">Semestre</label>
        <input type="text"
          class="form-control" name="semestre" id="" aria-describedby="helpId" placeholder="">

      </div>
      <div class="mb-3">
        <label for="" class="form-label">Turno</label>
        <input type="text"
          class="form-control" name="turno" id="" aria-describedby="helpId" placeholder="">

      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>