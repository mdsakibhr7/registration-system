<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "registration_system";
global $conn;

// Create connection
$conn = mysqli_connect( $servername, $username, $password, $db );

// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}

// Create database
$create_db = "CREATE DATABASE IF NOT EXISTS registration_system";
if ( ! mysqli_query( $conn, $create_db ) ) {
	echo "Error creating database: " . mysqli_error( $conn );
}

// sql to create table
$create_table = "CREATE TABLE studentInfoTable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
address VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
mobile VARCHAR(30) NOT NULL,
gender VARCHAR(30) NOT NULL,
subject VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ( mysqli_query( $conn, $create_table ) ) {
	echo "Error creating table: " . mysqli_error( $conn );
}

