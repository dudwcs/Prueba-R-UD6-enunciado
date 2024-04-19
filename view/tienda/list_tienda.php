<div class="row">
    <?php if (isset($_SESSION["error"])) {

        if ($_SESSION["error"] === true) {
            ?>
            <div class="alert alert-danger" role="alert">
                Hubo un error y no se ha podido actualizar el producto
            </div>
            <?php
        } else { ?>
            <div class="alert alert-success" role="alert">
                Se ha eliminado el producto con éxito.
            </div>
        <?php }

        unset($_SESSION["error"]);
    } ?>



    <?php if (count($dataToView["data"]) > 0): ?>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                   
                    <th scope="col">Teléfono</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataToView["data"] as $tienda) { ?>
                    <tr>
                    <td>
                            <?= $tienda->getId(); ?>
                        </td>
                        <td>
                            <?= $tienda->getNombre() ?>
                        </td>
                      
                        <td>
                            <?= $tienda->getTlf();

                            ?>
                        </td>
                        <td>
                        <a href="FrontController.php?controller=Tienda&action=edit&id=<?= $tienda->getId() ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar</a>
                            
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    <?php endif;

    if (count($dataToView["data"]) === 0): ?>

        <div class="alert alert-info">
            Actualmente no existen tiendas.
        </div>
        <?php
    endif;
    ?>
</div>