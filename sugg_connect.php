<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', 'Get Plant Suggestions') or die("Connection Failed: " . mysqli_connect_error());

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
    $number = filter_var($_POST['number'], FILTER_VALIDATE_INT, array('options' => array('min_range' => -5, 'max_range' => 100))) ? $_POST['number'] : '';
    $soil = mysqli_real_escape_string($conn, $_POST['type']);
    $dropdown = mysqli_real_escape_string($conn, $_POST['dropdown']);

    $sunlight = isset($_POST['1']) ? $_POST['1'] : '';

    $preferredPlants = isset($_POST['plant_preferences']) ? implode(', ', $_POST['plant_preferences']) : '';

    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    $sql = "INSERT INTO users (name, email, number, soil, dropdown, sunlight, preferred_plants, comments)
            VALUES ('$name', '$email', '$number', '$soil', '$dropdown', '$sunlight', '$preferredPlants', '$comments')";
    
    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "Entry Successful";
    } else {
        echo "Error Occurred";
    }

    mysqli_close($conn);
}
?>
