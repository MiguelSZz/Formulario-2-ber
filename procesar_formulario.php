<?php
$servername = "localhost";
$database = "database";
$username = "root";
$password = "YES";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, "", "$database");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $name = $_POST["fname"];
    $lastname = $_POST["flname"];
    $salary = $_POST["fsalary"];

    $sql = "INSERT INTO empleados (nombre, apellido, salario) VALUES ('$name', '$lastname', $salary)";

    if ($conn->query($sql) === TRUE) {
        echo "Datos almacenados correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
