<?php    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include_once 'connect_to_db.php';      
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $email = trim($email); // Trims both ends
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);
        $lga = mysqli_real_escape_string($conn, $_POST['lga']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);



        date_default_timezone_set('Africa/Lagos');  

        //check if email exist
        $sql = "SELECT * FROM artists WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0) { 
            header("Location: ../Registration_art?message=Email has been used."); 
            exit();
        }

        //create usercode
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
            return $random_string;
        }
        $usercode = generate_string($permitted_chars, 20);

        //ensure you don't have same code 
        $sql = "SELECT * FROM artists WHERE usercode='$usercode';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck > 0) {
            $usercode = $usercode .'hi';
        }

        // Check if an image file was submitted
        if(isset($_FILES['file'])) {
            $filename = $_FILES['file']['name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];       

            // File upload handling
            $filename = $usercode . ".jpg";  
            $location = "../artistImages/" . $filename;

            // Function to compress image (assuming this function exists)
            function compressImage($source, $destination, $quality) {
                $info = getimagesize($source);
                if ($info['mime'] == 'image/jpeg') 
                    $image = imagecreatefromjpeg($source);
                elseif ($info['mime'] == 'image/gif') 
                    $image = imagecreatefromgif($source);
                elseif ($info['mime'] == 'image/png') 
                    $image = imagecreatefrompng($source);

                imagejpeg($image, $destination, $quality);
            }

            // Check if the file was uploaded without errors
            if ($fileError === 0) { 
                // Compress and move the uploaded image
                compressImage($_FILES['file']['tmp_name'], $location, 50);
            } else {
                // Handle file upload error
                $error = $_FILES['file']['error'];
                header("Location: ../Registration_art?message=There was an error uploading the image. Error code: $error");
                exit();
            }
        }

        // Prepare the SQL query for inserting data
        $regStatus = 'Registered'; $imageStatus = 'Uploaded'; $emailVerify = 'Pending';
        $query = "INSERT INTO artists (usercode, dname, email, phone, emailverification, passwd, state, lga, registrationStatus, imageStatus) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($query)) {
            $stmt->bind_param("ssssssssss", $usercode, $name, $email, $phone, $emailVerify, $password, $state, $lga, $regStatus, $imageStatus);
            if ($stmt->execute()) {

                //session
                session_start();
                $_SESSION['mySocArtArt'] = $usercode;  

                //install cookie
                setcookie("mySocArtArt", $usercode, time()+86400 * 360, '/');

                //send email
                include 'mailWelcomeArtistMember.php';

                header("Location: ../app/art-dashboard?message=Registration successful");
                exit();
            } else {
                header("Location: ../Registration_art?message=There was an error inserting data. Please try again.");
                exit();
            }
            // Close the statement
            $stmt->close();
        } else {
            header("Location: ../Registration_art?message=Error preparing statement. Please try again.");
            exit();
        }

        

       
    }else{
        header("Location: ../index.php?login=error"); 
        exit();
    } 