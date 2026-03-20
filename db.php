<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "TakboMoto_DB";

// Connect to the database
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ensure the users table exists with correct schema
$createUsersTableSql = "CREATE TABLE IF NOT EXISTS users (
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('buyer','seller') DEFAULT 'buyer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

if (!$conn->query($createUsersTableSql)) {
    die("Error creating users table: " . $conn->error);
}

// Ensure additional columns exist (safe for future updates)
$alterStatements = [
    
    "ALTER TABLE users ADD COLUMN IF NOT EXISTS role ENUM('buyer','seller') DEFAULT 'buyer' AFTER address"
];

foreach ($alterStatements as $sql) {
    if (!$conn->query($sql)) {
        // Only show warnings, don’t stop execution
        echo "Warning: " . $conn->error . "<br>";
    }
}

?>