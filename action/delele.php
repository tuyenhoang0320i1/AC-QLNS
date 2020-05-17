<?php
$id = $_REQUEST['id'];
include_once('../src/EmployeeManager.php');

$employManager = new EmployeeManager('../data.json');
$employManager->deleteEmployee($id);
header('location: ../index.php');
?>