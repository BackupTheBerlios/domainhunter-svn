<?php 
// this ist list with servers which are used with this class
// info about the values for the key "free":
// this is the string (answer) what the server returns if there is no match.

// the value's for the key 'param' is mostly empty. I you have some suggestions for diff. 
// whois servers, then let me know...

$servers['com']['address'] = "whois.crsnic.net";
$servers['com']['free'] = "No match for";
$servers['com']['param'] = "";

$servers['net']['address'] = "whois.crsnic.net";
$servers['net']['free'] = "No match for";
$servers['net']['param'] = "";

$servers['org']['address'] = "whois.pir.org";
$servers['org']['free'] = "NOT FOUND";
$servers['org']['param'] = "";

$servers['info']['address'] = "whois.afilias.net";
$servers['info']['free'] = "NOT FOUND";
$servers['info']['param'] = "";

$servers['biz']['address'] = "whois.nic.biz";
$servers['biz']['free'] = "Not found";
$servers['biz']['param'] = "";

$servers['us']['address'] = "whois.nic.us";
$servers['us']['free'] = "is not available";
$servers['us']['param'] = "";

$servers['eu']['address'] = "whois.eu";
$servers['eu']['free'] = "FREE";
$servers['eu']['param'] = "";


$servers['ru']['address'] = "whois.ripn.net";
$servers['ru']['free'] = "No entries found";
$servers['ru']['param'] = "";

$servers['tc']['address'] = "whois.adamsnames.tc";
$servers['tc']['free'] = "is not registered";
$servers['tc']['param'] = "";

$servers['nl']['address'] = "whois.domain-registry.nl";
$servers['nl']['free'] = "is free";
$servers['nl']['param'] = "is "; // is used only for free check

$servers['be']['address'] = "whois.dns.be"; 
$servers['be']['free'] = "free";
$servers['be']['param'] = "";

$servers['de']['address'] = "whois.denic.de";
$servers['de']['free'] = "not found in database";
$servers['de']['param'] = "-T dn "; // required!!


// add here more servers if you like
?>








