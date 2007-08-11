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


include "config.inc.php"; 
include "header.inc.php";

$domain_count = mysql_result(mysql_query("SELECT count( id ) FROM `monitors` "),0,0);

if( ($_GET['start']!= "")  &&  ( isset($_GET['start']) )  )  { $start = $_GET['start']; }
else { $start=0; }


$h_id = $start;
$order_by = $_GET['order']; 

if ($order_by=="expira") { $order_sql = " ORDER BY `monitors`.`expirate_date` ASC ";  }
else if ($order_by=="control") { $order_sql = " ORDER BY `monitors`.`hunter_update` DESC ";  }
else if ($order_by=="update") { $order_sql = " ORDER BY `monitors`.`update_date` DESC ";  }
else { $order_sql = " ORDER BY `monitors`.`hunter_update` DESC ";  }


$sql = "SELECT * FROM `monitors` $order_sql  LIMIT $start,$per_page_domain";
$results = mysql_query($sql) or die(mysql_error());

?>


<table id="admin_table" >
<tr class="header"  >
<td>Id</td>
<td>Domain</td>
<td>Status</td>
<td>Created</td>
<td class="hilightoff" onMouseOver="className='hilighton';" onMouseOut="className='hilightoff';" ><a href ="?start=<?php echo $_GET['start'];?>&order=update">Last Update</a></td>
<td class="hilightoff" onMouseOver="className='hilighton';" onMouseOut="className='hilightoff';" ><a href ="?start=<?php echo $_GET['start'];?>&order=expira">Expires</a></td>
<td class="hilightoff" onMouseOver="className='hilighton';" onMouseOut="className='hilightoff';" ><a href ="?start=<?php echo $_GET['start'];?>&order=control">Last Control</a></td>
<td>Register</td>

</tr>
<?php
while($rows = mysql_fetch_array($results)) {

$h_id++;

echo "<tr class=\"hilightoff\" onMouseOver=\"className='hilighton';\" onMouseOut=\"className='hilightoff';\"> <td>";

echo $h_id;
echo "</td><td>". $rows[domain];
echo "</td><td>". $rows[status1];
echo "</td><td>". $rows[create_date];
echo "</td><td>". $rows[update_date];
echo "</td><td>". $rows[expirate_date];
echo "</td><td>". $rows[hunter_update];
echo "</td><td>". $rows[register];
echo "</td></tr>\n\n";
}

 ?>
</table>

<?php 
if($domain_count >= $per_page_domain) {
include "pager.inc.php"; } 
include "foother.inc.php"; 
?>

