<?php
    require "class/Url.php";
    $page = Url::getURL( 0 );
    $pathBase = URL::getBase();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <base href="<?= $pathBase; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fidinsiders</title>
    <link rel="shortcut icon" href="assets/images/favicon.png"/>
    <!-- styles import -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- scripts import -->
    <script src="assets/js/vue-dev.js"></script> <!-- desabilitar quando estiver em prod -->
    <!-- <script src="assets/js/vue-prod.js"></script>--> <!-- habilitar somente quando estiver em prod -->
</head>
<body>
<?php
    if ( $page == null )
        $page = "home";

    require('_includes/_header.php');
      
    if( file_exists( "pages/" . $page . ".php" ) )
        require "pages/" . $page . ".php";
    else
        require "pages/404.php";
    
    require('_includes/_footer.php');
?>

<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>