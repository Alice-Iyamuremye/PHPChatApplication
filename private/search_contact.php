<?php
require_once("initialize.php");
require_login();
$searchTerm=$_GET["searchTerm"] ?? "";
$contacts=seach_contact($searchTerm);
echo $contacts;
