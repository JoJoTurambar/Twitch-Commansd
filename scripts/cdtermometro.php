<?php
    $respuestas = array(
        "Cero CDT",
        "CDTJ",
        "CDT",
        "Muy CDT",
        "Tremendo CDT",
        "Ultra mega CDT"
        );
    $random = array_rand($respuestas);
    echo $respuestas[$random];
    ?>