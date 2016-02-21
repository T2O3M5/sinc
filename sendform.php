<?php

DEFINE ('DB_USER','tom_comments');
DEFINE ('DB_PASSWORD','Mttts188');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','slatteryinc_comments');

$dbc=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if (!$dbc) {
	die('Could not connect: '.mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $dbc);
if(!$db_selected){
	die('Can\'t use '.DB_NAME.': '.mysql_error());
}

#$value=$_POST['name','comment'];
$sql = "INSERT INTO comments (name, comment) VALUES ('$_POST[name]','$_POST[comment]')";
#$value2=$_POST['comment'];
#$sql = "INSERT INTO comments (comment) VALUES ()";
if (!mysql_query($sql)) {	
	die('Error: '.mysql_error());
}
mysql_close($dbc);

?>
 

