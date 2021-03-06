<?php
include_once 'models/rankingext.php';
foreach ($this->ranking as $row) {
    $ranking = new MRankingext();
    $ranking = $row;
    ?>
    <tr>
        <td>
            <?php echo $ranking->nombre; ?>
        </td>
        <td>
            <?php echo $ranking->artista; ?>
        </td>
        <td>
            <?php echo $ranking->fecha; ?>
        </td>
        <td>
            <?php echo $ranking->url; ?>
        </td>
        <td>
            <?php echo $ranking->imagen; ?>
        </td>
        <td>
            <div class="form-group  row">
                <button type="button" class="btn btn-info" data-toggle="modal"
                        data-target="#modalModificar" onclick="EditarRanking(<?php echo $ranking->id; ?>)">
                    Editar
                </button>
                <button type="button" class="btn btn-danger" onclick="EliminarRanking(<?php echo $ranking->id; ?>)">
                    Eliminar
                </button>
            </div>
        </td>
    </tr>
<?php } ?>

<script>
    <?php
    if ($this->mensaje == 1){
        echo "toastr.success('Guardado Correctamente', 'Correcto.');";
    }else if($this->mensaje == 2){
        echo "toastr.success('Modificado Correctamente', 'Correcto.');";
    }else if($this->mensaje == 0){
        echo "toastr.error('Vuelva a intentarlo', 'Error inesperado.');";
    }
    ?>
    var msg = '<?php echo $this->mensaje; ?>';
</script>

