<?php
// ✅ MySQLi (Procedural) DB connection
$host = 'localhost';
$username = 'root';              // Change if needed
$password = '';                  // Change if needed
$dbname = 'portfolio_ahmed';        // Replace with your DB name

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: echo "Connected successfully!";
