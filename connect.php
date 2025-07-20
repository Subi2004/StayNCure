<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Trim and sanitize inputs
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);
    $appointment_date = trim($_POST["appointment-date"]);
    $appointment_time = trim($_POST["appointment-time"]);

    // Database connection parameters
    $servername = "localhost";
    $username = "physio";
    $password = "megasoft@1";
    $dbname = "stayncure";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare query to check if appointment exists at the same date and time
    $query = "SELECT * FROM appointment WHERE date = ? AND time = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $appointment_date, $appointment_time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    // Check if appointment with same date and time exists
    if (mysqli_stmt_num_rows($stmt) == 0) {
        // Insert appointment data into database
        $insert_query = "INSERT INTO appointment (name, email, phone_no, subject, date, time, message) 
                         VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = mysqli_prepare($con, $insert_query);
        mysqli_stmt_bind_param($stmt_insert, "sssssss", $name, $email, $phone, $subject, $appointment_date, $appointment_time, $message);

        if (mysqli_stmt_execute($stmt_insert)) {
            echo '<script type="text/javascript">
            alert("Appointment booked successfully!");
            window.location.href = "index.php";
            </script>';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    } else {
        echo '<script type="text/javascript">
        alert("Could not fix appointment at the provided time. Select different time slots.");
        window.location.href = "index.php";
        </script>';
    }

    // Close statements and connection
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt_insert);
    mysqli_close($con);
} else {
    // Redirect or handle non-POST requests
}
?>
