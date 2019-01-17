<!-- Modal -->
<form method="POST" action="{{ route('altaDenuncia') }}" id="newDenuncia">
    @csrf
<div class="modal fade" id="login2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">

      <div class="modal-content">
          
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Nueva denuncia ciudadana</h4>
        </div>
        <div class="modal-body">
          
              
              <div class="form-group">
                <label for="ej1">Título</label>
                <input type="text" class="form-control" id="ej1"
                       placeholder="Introduce título" name="title">
              </div>
              <div class="form-group">
                <label for="ejemplo_password_1">Descripción</label>
                <textarea name="descrip" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <select class="form-control" name="idtopic">
                  {{-- <option disabled selected>Seleccione categoría</option> --}}
                    @foreach ($topics as $t)
                      <option value="{{ $t['Id'] }}">{{ $t['Title'] }}</option>
                    @endforeach
                  </select>
                  <input type="hidden" value="{{ Auth::id() }}" name="iduser">
              </div>
          
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-primary" value="Guardar" id="nclic2">
          {{-- <button type="submit" >Guardar</button> --}}
        </div>
        </form>
      </div>
    </div>
  </div>
  