<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "your_database"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sign Up functionality
if (isset($_POST['skills'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hashing the password before storing it in the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Use prepared statement to insert user data into the database
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashed_password);

        if ($stmt->execute()) {
            header("Location: sign_in.php");
            exit();
        } else {
            echo json_encode(array("error" => "Error creating user: " . $stmt->error));
        }

        $stmt->close();
    } else {
        echo json_encode(array("error" => "Incomplete form submission"));
    }
}

// Sign In functionality
if (isset($_POST['signin'])) {
    if (isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Use prepared statement to retrieve user data from the database based on email
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                header("Location: index.php");
                exit();
            } else {
                echo json_encode(array("error" => "Invalid password"));
            }
        } else {
            echo json_encode(array("error" => "User not found"));
        }

        $stmt->close();
    } else {
        echo json_encode(array("error" => "Incomplete form submission"));
    }
}

// Close database connection
$conn->close();
?>
