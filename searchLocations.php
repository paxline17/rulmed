<?php

/**
 * @var db $db
 */

require "settings/init.php";

$search = isset($_GET['search']) ? $_GET['search'] : "";

$sql = "SELECT * FROM locations WHERE locaName LIKE :search LIMIT 10";
$binds = [":search" => "%$search%"];

$locations = $db->sql($sql, $binds);


header('Content-Type: application/json');
echo json_encode($locations);

