<?php

function pd_pos()
{
    $args = array(
        'post_type'  => 'product',

    );
    $postslist = get_posts($args);


?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/produccion/Resources/MDB/css/mdb.min.css" rel="stylesheet">
    <div class="mt-5">
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Insumos</h1>

            <div class=" shadow mb-4">
                <div class="card-header flex py-3">
                    <a href="#" class=" ml-5 btn btn-primary">Crear Insumos</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Insumos</th>
                                <th scope="col">cantidad</th>
                                <th scope="col">unidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($postslist); $i++) { ?>

                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $postslist[$i]->post_title; ?> </td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/Resources/MDB/js/mdb.min.js"></script>
<?php

}

?>