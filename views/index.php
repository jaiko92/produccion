<?php

function fw_index()
{
    $args = array(
        'post_type'  => 'fw_productions',

    );
    $postslist = get_posts($args);


?>
        <meta http-equiv="pragma" content="no-cache" />
        <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/js/jquery-2.0.0.min.js" type="text/javascript"></script>
        <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
        <link href="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/css/ui.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
        <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/js/script.js" type="text/javascript"></script>

        <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/library/notify.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $.notify.defaults({globalPosition: 'bottom right'})
                $('#mitabla').html("<center><img class='img-sm' src='<?php echo WP_PLUGIN_URL; ?>/produccion/resources/reload.gif'></center>");
                $.ajax({
                    url: "<?php echo WP_PLUGIN_URL; ?>/produccion/views/production_list.php",
                    dataType: 'html',
                    contentType: 'text/html',
                    success: function (response) {
                        $('#mitabla').html(response);	
                    }
                });
            }); 
        
            function production_create() {
                $('#mitabla').html("<center><img class='img-sm' src='<?php echo WP_PLUGIN_URL; ?>/produccion/resources/reload.gif'></center>");
                $.ajax({
                    url: "<?php echo WP_PLUGIN_URL; ?>/produccion/views/production_create.php",
                    dataType: 'html',
                    contentType: 'text/html',
                    success: function (response) {
                        $('#mitabla').html(response);	
                    }
                });
            }
        </script>
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Producciones</h1>

            <div id="mitabla"></div>
        </div>

    <script>

    </script>
<?php

}

?>