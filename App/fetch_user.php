﻿<?php
	include 'config.php';

	$sql = "SELECT * FROM ".DB_PREFIX."orders where uid='$_POST[uid]'ORDER BY id DESC";	
	$query = mysql_query($sql) or die('error');
	while (!!$row = mysql_fetch_array($query, MYSQL_ASSOC)) {
		
		$sqlagain = "SELECT * FROM ".DB_PREFIX."orders_detail where orderid='$row[orderid]'ORDER BY id DESC";
		$queryagain = mysql_query($sqlagain);
		
		while (!!$rowagain = mysql_fetch_array($queryagain, MYSQL_ASSOC)) {

			foreach ( $rowagain as $key => $value ) {
				$rowagain[$key] = urlencode(str_replace("\n","", $value));
			}
			$json .= urldecode(json_encode($rowagain)).',';	
		}
		$json = substr($json, 0 , -1);
		$jsontext .= '['.$json.'],';
		$json = '';
	}
	$jsontext = substr($jsontext, 0 , -1);
	echo '['.$jsontext.']';
	mysql_close();
	
?>