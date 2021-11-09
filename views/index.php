<?php

function fw_index()
{
    $args = array(
        'post_type'  => 'fw_productions',

    );
    $postslist = get_posts($args);


?>
    <link type="text/css" href="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/MDB/css/mdb.min.css" rel="stylesheet">
  
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Producciones</h1>

            <div id="mitabla"></div>
        </div>
   
    <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/MDB/js/mdb.min.js"></script>
    <script src="<?php echo WP_PLUGIN_URL; ?>/produccion/resources/MDB/js/jquery-2.0.0.min.js"></script>
    
    <script>
        $.ajax({
            url: "<?php echo WP_PLUGIN_URL; ?>/produccion/views/production_list.php",
            dataType: 'html',
            contentType: 'text/html',
            success: function (response) {
                $('#mitabla').html(response);	
            }
        });
    </script>
<?php

}

?>