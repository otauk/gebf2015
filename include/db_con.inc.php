<?php
$server = "localhost";
$user = "web159";
$pass = "kuatopt07";
$dbase = "usr_web159_1";
mysql_connect($server, $user, $pass) or die ("keine Verbindung möglich.
 Benutzername oder Passwort sind falsch");
mysql_select_db($dbase) or die ("Die Datenbank existiert nicht.");
?>