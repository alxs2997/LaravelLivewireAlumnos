
<!-- Modal -->
<div wire:ignore    .self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Añadir Nuevo Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form action="{{route('alumnos.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nombre">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                        <label for="code">Codigo</label>
                            <input name="code" type="text" class="form-control" id="code" placeholder="Codigo">@error('code') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                        <label for="correo">Correo:</label>
                        <input name="correo" type="text" class="form-control" id="correo" placeholder="Mail">@error('correo') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                        <label for="n_tel">Número de Teléfono:</label>
                        <input name="n_tel" type="text" class="form-control" id="tel" placeholder="Teléfono">@error('tel') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                        <label for="direccion"></label>
                        <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Direccion">@error('direccion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                
                    </div>
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary close-modal">Guardar</button>
                    </div>
                </form>
            </div>
               
    </div>
</div>