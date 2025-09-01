<?php
$host = "localhost";
$username = "root";
$password = "rajesh@08072005";
$db = "Employee";

try {
    $connection = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (
        isset($_POST['employee_name']) &&
        isset($_POST['employee_id']) &&
        isset($_POST['department']) &&
        isset($_POST['salary']) &&
        isset($_POST['shift'])
    ) {
        $empname = $_POST['employee_name'];
        $empid = $_POST['employee_id'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];
        $shift = $_POST['shift'];

        $pre = $connection->prepare("
            INSERT INTO `Detail`(`employee_name`, `employee_id`, `department`, `salary`, `shift`) 
            VALUES (:employee_name, :employee_id, :department, :salary, :shift)
        ");

        $pre->bindParam(':employee_name', $empname);
        $pre->bindParam(':employee_id', $empid);
        $pre->bindParam(':department', $department);
        $pre->bindParam(':salary', $salary);
        $pre->bindParam(':shift', $shift);

        if ($pre->execute()) {
            echo "Form filled successfully";
        } else {
            echo "Registration failed, please try again";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
