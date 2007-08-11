<?php
/*
 +-----------------------------------------------------------------------+
 | Domain Hunter - Domain Monitoring System                              |
 | Version 0.0.3                                                         |
 |                                                                       |
 | Copyright (C) 2006-2007, DomainLabs.EU - Turkey                       |
 | Licensed under the GNU GPL                                            |
 |                                                                       |
 +-----------------------------------------------------------------------+
 | Author: Bahri Meric CANLI <bahri@bahri.info>                          |
 +-----------------------------------------------------------------------+

*/


function tr_strtolower($metin) {
    $metin = strtr($metin, "IĞÜŞİÖÇ", "igusioc");
    return strtolower($metin);
}
function tr_strtoupper($metin) {
    $metin = strtr($metin, "ığüşiöç", "IGUSIOC");
    return strtoupper($metin);
}


function standartcontrol($kelime) {

$error = "0";

$xnsor = $kelime[0].$kelime[1].$kelime[2].$kelime[3];

if ( ($kelime[strlen($kelime)-1] == "-" ) || ($kelime[0]=="-") ) { $error = "1"; }

else if (strlen($kelime)>64) { $error = "2"; }

else {

        for ($i = 0; $i < strlen($kelime); $i++) {

        if ( ($kelime[$i] != "-") && (!eregi("[a-z0-9]", $kelime[$i])) ) { $error = "3"; }

        }

//         if ($xnsor == "xn--")  { $error = "4"; }
}

return $error;
}


?>
