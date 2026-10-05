<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    $sql = "INSERT INTO students (name, email, course)
            VALUES ('$name', '$email', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>

<body>

<h1>Student Registration</h1>

<form method="POST">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Course:
    <input type="text" name="course" required>
    <br><br>

    <button type="submit">Register Student</button>

</form>

</body>
</html>
