<?php

session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($email === "" || $password === "") {
        die("<p>Please fill in both email and password.</p>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<p>Please enter a valid email address.</p>");
    }

    $stmt = $conn->prepare("SELECT user_id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 0) {
        $stmt->close();
        die("<p>No account found with that email. Please sign up first.</p>");
    }

    $stmt->bind_result($id, $fullname, $hash);
    $stmt->fetch();
    $stmt->close();

    if (!password_verify($password, $hash)) {
        die("<p>Incorrect password.</p>");
    }

    // Login success
    $_SESSION["user_id"] = $id;
    $_SESSION["user_name"] = $fullname;

    header("Location: pages/HomePage.php");
    exit;
}

?>