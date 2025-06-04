<?php
include 'conf.php';

// Debugging output
echo "<pre>";
print_r($_POST);
echo "</pre>";



// Assuming all necessary POST data is available
$user_id = $_POST['user_id'];
$patient_id = $_POST['patient_id'];
$name = $_POST['name'];
$prescription = $_POST['prescription'];
$symptoms = $_POST['symptoms'];
$patient_address = $_POST['patient_address'];
$doctor_name = $_POST['doctor_name'];

$sql = "INSERT INTO records (user_id, patient_id, name, prescription, symptoms, patient_address, doctor_name)
        VALUES ('$user_id', '$patient_id', '$name', '$prescription', '$symptoms', '$patient_address', '$doctor_name')";

if (mysqli_query($conn, $sql)) {
    echo "New medical record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

