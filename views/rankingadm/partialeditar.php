<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Modificar Ranking - <?php echo $this->ranking->empresa; ?></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <input type="text" name="empresa" value="<?php echo $this->ranking->empresa; ?>" hidden>
    <input type="text" name="Id" value="<?php echo $this->ranking->Id; ?>" hidden>

    <div class="form-group  row"><label class="col-sm-2 col-form-label">Título</label>
        <div class="col-sm-10"><input type="text" value="<?php echo $this->ranking->titulo; ?>" name="titulo" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">Artista</label>
        <div class="col-sm-10"><input type="text" name="artista" value="<?php echo $this->ranking->artista; ?>" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">contador</label>
        <div class="col-sm-10"><input type="date" name="contado" value="<?php echo $this->ranking->contador; ?>" class="form-control"></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">URL</label>
        <div class="col-sm-10"><input type="text" name="url" value="<?php echo $this->ranking->url; ?>" class="form-control" required></div>
    </div>
    <div class="form-group  row"><label class="col-sm-2 col-form-label">Ubicación</label>
        <div class="col-sm-10"><input type="number" name="ubicacion" value="<?php echo $this->ranking->ubicacion; ?>" class="form-control" required></div>
    </div>
</div>