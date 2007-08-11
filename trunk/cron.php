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

include("server_list.php");
include ("sorgu.php");
include ("config.inc.php");
include ("functions.inc.php");

$b_s = "SELECT * FROM `monitors` ";

$b_r =  mysql_query ($b_s) ;

while ($sattir = mysql_fetch_array($b_r)) {

$z = hunter_islemci(tr_strtolower($sattir['domain']));


}


?>
