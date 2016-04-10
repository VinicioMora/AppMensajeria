<?php 
$couch_dsn = "http://192.168.72.129:5984/";
$couch_db = "usuarios"

require_once "./lib/couch.php";
require_once "./lib/couchClient.php";
require_once "./lib/couchDocument.php";

$client = new couchClient($couch_dsn,$couch_db);

echo "Conecto";
?>