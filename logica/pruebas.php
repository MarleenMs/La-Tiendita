<?php
    $cadena = "$_SERVER[REQUEST_URI]";
    $doc = explode("/",$cadena);
    echo "$doc[4]";
?>