<?php
$id = $nombre = $tlf = "";
if (isset($dataToView["data"])) {
    $tienda = $dataToView["data"];

    if ($tienda->getId() !== null) {
        $id = $tienda->getId();
    }
    if ($tienda->getNombre() !== null) {
        $nombre = $tienda->getNombre();
    }
    if ($tienda->getTlf() !== null) {
        $tlf = $tienda->getTlf();
    }


}
?>
<div class="row">
    <?php
    SessionManager::iniciarSesion();
    if (isset($_SESSION["error"])) { ?>

        <div class="alert alert-danger">
            <?= $_SESSION["error"] ?>
        </div>
        <?php
        unset($_SESSION["error"]);
     }
        ?>
        <form class="form" action="FrontController.php?controller=Tienda&action=save" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <div class="form-group">
                <label>Nombre</label>
                <input class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>" />
            </div>
            <div class="form-group mb-2">
                <label>Tlf</label>
                <input type="tel" class="form-control" style="white-space: pre-wrap;" name="tlf"
                    value="<?php echo $tlf; ?>"></input>
            </div>


            <input type="submit" value="Guardar" class="btn btn-primary" />
            <a class="btn btn-outline-danger" href="FrontController.php?controller=Tienda&action=list">Cancelar</a>
        </form>

    
</div>