<?php
include '../db-connection/db_connection.php';

if (isset($_POST["submit"])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $fatherName = $_POST['fatherName'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['date_of_birth'];
    $address = $_POST['address'];
    $stateName = $_POST['stateName'];
    $cityName = $_POST['cityName'];
    $pincode = $_POST['pincode'];
    $mobileNumber = $_POST['mobileNumber'];
    $email = $_POST['email'];
    $status = 'pending';

    $targetDir = "../assets/"; // Adjust the path if necessary
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $uniqueName = uniqid() . '.' . $imageFileType;
    $targetFile = $targetDir . $uniqueName;
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 5000000) { // 5MB limit
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $imagePath = $uniqueName;

            // Prepare an SQL statement
            $stmt = $conn->prepare("INSERT INTO reporter_info_tbl (first_name, last_name, father_name, gender, date_of_birth, address, state, city, pincode, mobile_no, email, image, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            // Bind parameters
            $stmt->bind_param("sssssssssssss", $firstName, $lastName, $fatherName, $gender, $dateOfBirth, $address, $stateName, $cityName, $pincode, $mobileNumber, $email, $imagePath, $status);

            // Execute the statement
            if ($stmt->execute()) {
                // Registration successful, redirect back to the form page
                header("Location: registration-payment.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
