<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Set the viewport width to device width for mobile -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width"/>
        <link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico">
        
        <title>Lemon Art</title>

        <!-- Included CSS Files (Compressed) -->
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/social_foundicons.css">
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/social_foundicons_ie7.css">
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/foundation.css">
        <link rel="stylesheet" href="<?= base_url() ?>stylesheets/app.css">

        <script src="javascripts/modernizr.foundation.js"></script>
    </head>
    <body>
        <?php
        $this->load->view("header", $logo);
        ?>
        <div class="row contenedor">
            <div class="twelve columns">
                <h3>Artistas</h3>

                <div class="row">
                    <div class="twelve columns">
                        <div>
                            <p><?=$descripcion[0]["texto"]?></p>
                        </div>
                    </div>
                </div>

                <?php
                $cont = 0;
                $final = "";
                foreach ($artistas as $artista) {
                    if ($cont % 4 == 0) {
                        ?>
                        <div class='row'>
                            <?php
                        }

                        $final = $cont == count($artistas) - 1 ? "end" : "";
                        ?>

                        <div class="three columns mobile-two <?= $final ?>">
                            <div class="contenedor-imagen-artista">
                                <a href="<?= base_url() ?>artistas/perfil/<?= $artista["id_artista"] ?> ">
                                    <img src="<?= base_url() ?>images/artistas/<?= $artista["imagen"] ?>">
                                    <p><?= $artista["nombre"] ?></p>
                                </a>
                            </div>
                        </div>

                        <?php
                        if ($cont % 4 == 3 || $final == "end") {
                            ?>
                        </div>
                        <?php
                    }

                    $cont++;
                }
                ?>


                <div class="row">
                    <div class="twelve columns">
                        <?php
                        echo $this->pagination->create_links();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $this->load->view("footer", $footer);
        ?>

        <!-- Included JS Files (Compressed) -->
        <script src="javascripts/jquery.js"></script>
        <script src="javascripts/foundation.min.js"></script>

        <!-- Initialize JS Plugins -->
        <script src="javascripts/app.js"></script>
        <script src="javascripts/main.js"></script>

    </body>
</html>
