<?php


if(isset($_GET["page"])) {
    $page = $_GET["page"];
    switch ($page) {
        case 'daftar':
          include 'views/daftar.php';
          break;
            
    }
}else{
    include 'index.php';
}
?>
