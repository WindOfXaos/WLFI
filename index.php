<?php

if (empty($_GET['page'])){
    include "index.html" ;
}else{
    $file = $_GET["page"];
    if (file_exists( $file)) {
        include $file;
    }else{
        echo "page not found!";
    }
}

$file = (isset($_GET["page"]) ? $_GET["page"] :'');
?>