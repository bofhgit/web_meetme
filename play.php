<?php
include ("./lib/defines.php");
include ("./lib/functions.php");
include ("./lib/database.php");

session_start();


getpost_ifset(array('confno', 'bookId'));

/* The db for Version 4 uses bookid, while the app uses bookId */

$query = "SELECT confOwner from " . DB_TABLESCHED . " WHERE bookId='$bookId'";

$result = $db->query($query);
$row = $result->fetchRow();

if (($_SESSION['privilege'] == "Admin" || $row[0] == $_SESSION['userid'])) {
	if (is_numeric($confno) && is_numeric($bookId)) {
		$file = $confno . "-" . $bookId . ".wav";
		$playfile = RECORDING_PATH . "meetme-conf-rec-" . $file;
		$mimetype = "audio/x-wav";
		$content_len = filesize($playfile);
		header("Content-Length: ".$content_len);
		header("Content-type: $mimetype");
		header('Content-Disposition: inline; filename=$file');
		readfile($playfile);
	}
}
?>

