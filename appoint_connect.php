<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'plant_suggestions_db') or die("Connection Failed: " . mysqli_connect_error());

    // Sanitize and validate form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    // Insert data into the database
    $sql = "INSERT INTO appointments (name, email, phone, date, time, service, comments) VALUES ('$name', '$email', '$phone', '$date', '$time', '$service', '$comments')";
    
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Appointment Booked Successfully!";
    } else {
        echo "Error Occurred";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
