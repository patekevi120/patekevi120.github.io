<?php error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'lab');

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS" . '<br />';
}

// Query to return data from your database
$result = $db->query("SELECT * FROM sample");

// check if the query succeeded
if (!$result) {
    die('There was an error running the query[' . $db->error . ']');
}

if ($result->num_rows > 0) {
     echo "<table><tr><th>Name</th><th>email</th><th>gender</th><th>Cars they like</th><th># of Cars</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["firstName"]. " " . $row["lastName"]. "</td><td>" . $row["email"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["textarea"]. "</td><td>" . $row["cars"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

// Display the number of rows returned by query
echo 'Total number of users: ' . $result->num_rows;


// Close the database connection
$result->free();
$db->close();

?>
