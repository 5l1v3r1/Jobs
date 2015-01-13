<?php

$link = @mysql_connect($db_server, $db_username, $db_password) or die('Could not connect to MySQL Server: ' . mysql_error());
@mysql_select_db($db_database, $link) or die('Could not select database ' . $db_database . '.');
// mysql_close($link);

?>