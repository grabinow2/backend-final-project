
<style>
    td, th {
        text-align: left ;
        padding: 15px;
    }
</style>


<?php

$conn = mysqli_connect('localhost', 'root', '', 'mystar');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `email`, `first name`, `last name`, `receive` FROM `emaillist`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>email</th><th>first name</th><th>last name</th><th>receive</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["email"] . "</td><td>" . $row["first name"] . "  </td><td> " . $row["last name"] . "</td><td>" . $row["receive"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
