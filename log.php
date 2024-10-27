<?php
// Establishing connection to the database
$conn = mysqli_connect("localhost", "root", "", "loggin");

// Check if the connection was successful
if (!$conn) {
    die("Failed to connect to the database: " . mysqli_connect_error());
}

// Fetching username and password from the form (login page)
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query to check if the username and password exist in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

// Executing the query
$result = mysqli_query($conn, $sql);

// Check if the query execution was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));  // This will display the SQL error message for debugging
}

// If a matching user is found
if (mysqli_num_rows($result) == 1) {
    // Redirect to homepage.html
    header("Location: homepage.html");
    exit(); // Stop further script execution
} else {
    echo "Invalid username or password";
}
?>
