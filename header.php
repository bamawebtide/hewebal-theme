<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '-', true, 'left' ); ?></title>

    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body <?php body_class(); ?>>
    <a href="#" id="skip-to-content">Skip to Content</a>

    <div id="hewebal-wrapper">

        <div id="hewebal-header">
            <div class="container-fluid">

                    <div class="header-left">
                        <div class="header-left-inside">
                            <a class="hewebal-logo" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hewebal-logo-white.svg" /></a>
                        </div>
                    </div>
                    <div class="header-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras risus urna, ullamcorper in ullamcorper in, dapibus vel leo. Nam diam odio, aliquam quis accumsan a, viverra non sem. Pellentesque non fringilla sapien.</div>

            </div>
        </div> <!-- #hewebal-header -->

        <div id="hewebal-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4">.col-md-4</div>
                </div>
            </div>
        </div> <!-- #hewebal-main -->