<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "TakboMoto_DB";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ensure necessary tables exist (matches requested schema)
$createUsersTableSql = "CREATE TABLE IF NOT EXISTS users (
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    phone VARCHAR(20),
    address TEXT,
    role ENUM('buyer','seller') DEFAULT 'buyer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$conn->query($createUsersTableSql);

// Ensure existing installs have the required columns/column names
// (this is safe and idempotent; SQL will be skipped if the column already exists).
$alterStatements = [
    "ALTER TABLE users CHANGE COLUMN id user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY",
    "ALTER TABLE users CHANGE COLUMN fullname name VARCHAR(100)",
    "ALTER TABLE users CHANGE COLUMN password_hash password VARCHAR(255)",
    "ALTER TABLE users ADD COLUMN IF NOT EXISTS phone VARCHAR(20) AFTER password",
    "ALTER TABLE users ADD COLUMN IF NOT EXISTS address TEXT AFTER phone",
    "ALTER TABLE users ADD COLUMN IF NOT EXISTS role ENUM('buyer','seller') DEFAULT 'buyer' AFTER address"
];

foreach ($alterStatements as $sql) {
    // Suppress errors if the column/rename has already been applied
    @$conn->query($sql);
}

?>