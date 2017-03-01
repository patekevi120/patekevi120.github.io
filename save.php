<?php error_reporting(0);

$db = new mysqli('localhost', 'root', '', 'lab');

// TODO You must process the POST data from the form and then set the variables
// below to be inserted in the database

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
  //echo "SUCCESS";
}

// Insert sample data into the database
$sql = $db->prepare("INSERT INTO sample(firstName,lastName, email, password, " .
                    "gender, textarea, cars) VALUES (?, ?, ?, ?, ?, ?,?)");

// These should be retrieved from POST variables
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$insecure_pass = $_POST['password']; // This password needs to be securely hashed
$gender = $_POST['gender'];   // This is an integer value3
$textarea = $_POST['textarea']; // The text area content
$cars = $_POST['cars'];

// Securely hash the passwordasfasdufiautu1AJFMOOSTST IMPORTANTAJSDOFJASDOFASODIFH
$password = password_hash($insecure_pass, PASSWORD_DEFAULT);

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("ssssssi", $firstName, $lastName, $email, $password, $gender, $textarea, $cars);

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
$db->close();

?>
