<?php
include 'conf.php';

$sql = "SELECT * FROM records"; 
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Start HTML output
echo '<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>';

echo '<table border="1" cellpadding="2" cellspacing="2">
<tr>
<th>User ID</th>
<th>Patient ID</th>
<th>Patient Name</th>
<th>Prescription</th>
<th>Symptoms</th>
<th>Patient Address</th>
<th>Doctor Name</th>
<th>DELETE</th>
</tr>';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $patient_id = $row['patient_id'];
        $patient_name = $row['name']; // Use 'name' as per your table
        $prescription = $row['prescription'];
        $symptoms = $row['symptoms'];
        $patient_address = $row['patient_address'];
        $doctor_name = $row['doctor_name'];

        echo 
        '<tr>
        <td>'.$user_id.'</td>
        <td>'.$patient_id.'</td>
        <td>'.$patient_name.'</td>
        <td>'.$prescription.'</td>
        <td>'.$symptoms.'</td>
        <td>'.$patient_address.'</td>
        <td>'.$doctor_name.'</td>
        <td><a href="delete.php?id='.$patient_id.'">DELETE</a></td>
        </tr>';
    }
}
echo '</table>';

mysqli_close($conn);
?>

 
