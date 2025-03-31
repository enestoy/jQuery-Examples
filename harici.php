<?php

@$sayfa = $_GET["sayfa"];

switch ($sayfa):

    case "herseyloadicin":
        echo "Load'dan geliyorum ben merhaba<br> Şu an harici bir sayfadan veri alıyorsun. ";

        break;
        
endswitch;
