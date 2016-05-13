<?php
// konfiguration
$server="localhost";
$username="root";
$password="root";
$database="askip";

//koneksikan databasenya
$koneksi=mysql_connect($server,$username,$password) or die ("Can't connect database");
//pilihlah databasenya
mysql_select_db($database) or die ("Can't select database");
?>
