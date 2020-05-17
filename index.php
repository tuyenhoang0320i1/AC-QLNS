<?php
include_once 'src/Employee.php';
include_once 'src/EmployeeManager.php';

$employeeManager = new EmployeeManager('data.json');
$employees = $employeeManager->getAllEmployee();
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
<a href="view/add.php">Add</a>
<table>
    <tr>
        <th>ID</th>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Birth</th>
        <th>Address</th>
        <th>Position</th>
    </tr>
    
    <?php foreach ($employees as $key => $employee): ?>
    <tr>
        <td><?php echo $employee->getId() ?></td>
        <td><?php echo $employee->getLastname() ?></td>
        <td><?php echo $employee->getFirstname() ?></td>
        <td><?php echo $employee->getBirth() ?></td>
        <td><?php echo $employee->getAddress() ?></td>
        <td><?php echo $employee->getPosition() ?></td>
        <td><a onclick=" return confirm('Ban co chac chan muon xoa khong? ')" href="action/delele.php?id=<?php echo $key ?>">Delete</a> </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
