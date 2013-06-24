<?php
include_once 'DB.php';
$database = 'meetme';
$host = 'localhost';
$username = 'root';
$password = '';
$dsn = "mysql://$username:$password@$host/$database";
$db = DB::connect($dsn);
if (DB::isError($db))
{
        die ($db->getMessage());
}
?>
