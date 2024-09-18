<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    require 'connect_to_db.php';

    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

   

    // Validate the inputs
    if (!empty($email) && !empty($password)) {
        // Create a prepared statement
        if ($stmt = $conn->prepare("SELECT id, email, usercode FROM organisations WHERE email = ? AND passwd = ?")) {
            // Bind the parameters
            $stmt->bind_param("ss", $email, $password);

            // Execute the statement
            $stmt->execute();

            // Get the result
            $result = $stmt->get_result();

            // Check if the user exists
            if ($result->num_rows > 0) {
                
                // User exists, proceed with login
                $user = $result->fetch_assoc();
                // Start a session and store user information
                session_start();
                $_SESSION['mySocArtOrg'] = $user['usercode'];
                // Redirect to the dashboard or another page

               // echo $email;
                header("Location: ../app/org-dashboard?message=Login successful. Welcome back");
                exit();
            } else {
                // Invalid credentials
                header("Location: ../login_org?message=Email or Password entered is incorrect");
                exit();
            }

            // Close the statement
            $stmt->close();
        }
    } else {
        // Form data is incomplete
        echo "Please fill in all fields.";
    }

    // Close the database connection
    $conn->close();
}
?>
