<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Ingreso de Ranking</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <input type="text" name="etiqueta" value="<?php echo $this->ranking->etiqueta; ?>" hidden>

    <div class="form-group  row"><label class="col-sm-2 col-form-label">Título</label>
        <div class="col-sm-10"><input type="text" value="<?php echo $this->ranking->nombre; ?>" name="nombre" id="txtnombre" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">Artista</label>
        <div class="col-sm-10"><input type="text" value="<?php echo $this->ranking->artista; ?>" name="artista" id="txtartista" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-10"><input type="date" value="<?php echo $this->ranking->fecha; ?>" name="fecha" id="txtfecha" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">URL</label>
        <div class="col-sm-10"><input type="text" value="<?php echo $this->ranking->url; ?>" name="url" id="txturl" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">Imagen</label>
        <div class="col-sm-10"><input type="text" value="<?php echo $this->ranking->imagen; ?>" name="imagen" id="txtimagen" class="form-control" required></div>
    </div>
</div>