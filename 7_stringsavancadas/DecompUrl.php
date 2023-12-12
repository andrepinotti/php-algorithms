<?php

    $url = "https://www.google.com";

    $decomp = parse_url($url);

    print_r($decomp);

    echo "<br> Protocolo: " . $decomp["scheme"];
    echo "<br>";
    echo "Host: ". $decomp["host"];