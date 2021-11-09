<?php
    require_once('../../../../wp-load.php');
    $args = array(
        'post_type'  => 'product',

    );
    $postslist = get_posts($args);
?>
            <div class=" shadow mb-4">
                <div class="card-header flex py-3">
                    <a href="#" class=" ml-5 btn btn-primary">Nueva Produccion</a>
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