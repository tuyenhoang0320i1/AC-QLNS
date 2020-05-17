<?php
if ($_SERVER["REQUEST_METHOD"] = "POST")
{
    include '../src/Employee.php';
    include '../src/EmployeeManager.php';
    $id = $_REQUEST['id'];
    $lastname = $_REQUEST['lastname'];
    $firstname = $_REQUEST['firstname'];
    $birth = $_REQUEST['birth'];
    $address = $_REQUEST['address'];
    $position = $_REQUEST['position'];

    $employee = new Employee($id, $lastname, $firstname, $birth, $address, $position);
    $employeeManager = new EmployeeManager('../data.json');
    $employeeManager->addEmployee($employee);
    header('location: ../index.php');

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Id:
    <input type="text" name="id"><br>
    Lastname:
    <input type="text" name="lastname"><br>
    Firstname:
    <input type="text" name="firstname"><br>
    Birth:
    <input type="text" name="birth"><br>
    Address:
    <input type="text" name="address"><br>
    Position:
    <input type="text" name="position"><br>
    <input type="submit" value="Add"/>

</form>
</body>
</html>
