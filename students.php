<?php

include "connection.php";

$result = $conn->query("SELECT * FROM students");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>

<body>

<h1>Student Records</h1>

<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
</tr>

<?php

while ($row = $result->fetch_assoc()) {

    echo "<tr>";

    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["course"] . "</td>";

    echo "</tr>";
}

?>

</table>

</body>
</html>
