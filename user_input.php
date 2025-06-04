<?php
include 'connection.php';

// Get personal details
$fullName = $_POST['fullName'] ?? '';
$email = $_POST['EMail'] ?? '';
$dateOfBirth = $_POST['DateofBirth'] ?? '';
$contactNumber = $_POST['ContactNumber'] ?? '';

// Insert into personal_details
$sql1 = "INSERT INTO personal_details (full_Name, e_Mail, date_of_Birth, cont_Num)
         VALUES (?, ?, ?, ?)";
$stmt1 = $conn->prepare($sql1);
$stmt1->bind_param("sssi", $fullName, $email, $dateOfBirth, $contactNumber);
$stmt1->execute();
$personal_id = $conn->insert_id;

// Get food choices (checkboxes)
$foods = [];
if (isset($_POST['Pizza']))
    $foods[] = 'Pizza';
if (isset($_POST['Pasta']))
    $foods[] = 'Pasta';
if (isset($_POST['Papandwors']))
    $foods[] = 'Pap and wors';
if (isset($_POST['Others']))
    $foods[] = 'Other';

// Insert each selected food into favourite_food
$sql2 = "INSERT INTO favourite_food (food_name) VALUES (?)";
$stmt2 = $conn->prepare($sql2);
foreach ($foods as $food) {
    $stmt2->bind_param("s", $food);
    $stmt2->execute();
}

// Insert survey ratings
$watch_movies = $_POST['watch_movies'] ?? null;
$listen_radio = $_POST['listen_radio'] ?? null;
$eat_out = $_POST['eat_out'] ?? null;
$watch_tv = $_POST['watch_tv'] ?? null;
if ($watch_movies && $listen_radio && $eat_out && $watch_tv) {
    $sql3 = "INSERT INTO survey_ratings (personal_id, watch_movies, listen_radio, eat_out, watch_tv) VALUES (?, ?, ?, ?, ?)";
    $stmt3 = $conn->prepare($sql3);
    $stmt3->bind_param("iiiii", $personal_id, $watch_movies, $listen_radio, $eat_out, $watch_tv);
    $stmt3->execute();
}

// Success message
echo "<h2>Thank you! Your data has been submitted.</h2>";
echo '<p><a href="results.php">View Survey Results</a> | <a href="index.php">Fill in the Survey Again</a></p>';

$conn->close();
?>
