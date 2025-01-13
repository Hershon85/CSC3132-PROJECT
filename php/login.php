<?php
require_once 'dbconf.php';

if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Prepare the SQL query to fetch the username and hashed password
    $sql = "SELECT email, password, role FROM user WHERE email = '$email'";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"]; // Fetch the hashed password

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            session_start(); // Start the session
            
            $_SESSION["email"] = $row["email"];
            $_SESSION['role'] = $row['role'];
            
            if ($row['role'] === 'employer') {
                header("Location: ../post internship.html");
            } elseif ($row['role'] === 'jobseeker') {
                header("Location: ../internship.html");
            }
            exit; // Ensure no further code runs after redirection
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }

    $connect->close(); // Close the database connection
    header("Location: ../index.html?error=" . urlencode($error));
    exit;
}
?>