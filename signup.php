<?php

session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = trim($_POST["fullname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $role = trim($_POST["role"] ?? "buyer");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirmPassword"] ?? "";

    if (
        $fullname === "" ||
        $email === "" ||
        $phone === "" ||
        $address === "" ||
        $role === "" ||
        $password === "" ||
        $confirmPassword === ""
    ) {
        die("<p>Please fill in all fields.</p>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<p>Please enter a valid email address.</p>");
    }

    if (!in_array($role, ["buyer", "seller"], true)) {
        die("<p>Invalid role selected.</p>");
    }

    if ($password !== $confirmPassword) {
        die("<p>Passwords do not match.</p>");
    }

    if (strlen($password) < 6) {
        die("<p>Password must be at least 6 characters.</p>");
    }

    // Prevent duplicate user
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        die("<p>This email is already registered. Please log in instead.</p>");
    }

    $stmt->close();

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, address, role) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fullname, $email, $hash, $phone, $address, $role);

    if ($stmt->execute()) {
        // Log the user in immediately after signup
        $_SESSION["user_id"] = $conn->insert_id;
        $_SESSION["user_name"] = $fullname;

        header("Location: pages/HomePage.php");
        exit;
    }

    echo "<p>Error creating account: " . htmlspecialchars($stmt->error) . "</p>";
    $stmt->close();
}

?>