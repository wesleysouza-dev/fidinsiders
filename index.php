<?php
    require "class/Url.php";
    $page = Url::getURL( 0 );
    $pathBase = URL::getBase();

    $scriptFooter = '';
    $disableTools = false;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.toast.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- scripts import -->
    
    
</head>
<body>
<?php
    if ( $page == null )
        $page = "home";

        $numPage = intval(substr($page, 0, 2));

        if ($numPage >= 10) {
            require('_includes/_headerLogged.php');
        } else {
            require('_includes/_header.php');
        }
      
    if( file_exists( "pages/" . $page . ".php" ) )
        require "pages/" . $page . ".php";
    else
        require "pages/404.php";
    
    require('_includes/_footer.php');
?>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/jquery.toast.js"></script>
<?= $scriptFooter; ?>
<script src="assets/js/functions.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>