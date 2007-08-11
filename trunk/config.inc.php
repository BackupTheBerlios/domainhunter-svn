<?
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

$script_version = "0.0.3";

$per_page_domain = 20;

$hunter_email = "admin@admin.com"; // monitor admin mail address
 
  
////////////////////////////////////////////////////////////////////
 
 
$dbhost = "hostname"; // database hostname
$dbuname = "database_user";  // database user name
$dbpass = "password";  // database user password
$dbname = "database_name";  // database name



//////////////////// mysql connect //////////////////////////////////

mysql_connect("$dbhost", "$dbuname", "$dbpass") || die (mysql_error());
mysql_select_db("$dbname") || die (mysql_error());


?>
