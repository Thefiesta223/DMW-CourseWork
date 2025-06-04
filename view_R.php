<?php 
include 'conf.php';
$sql = "SELECT * FROM records";
$result = mysqli_query($conn,$sql);

echo '<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>';

echo '<table border = "1" cellspacing = "2" cellpading = "2">
<tr>
    <td>patient_id</td>
    <td>name</td>
    <td>user_id</td>
    <td>prescription</td>
    <td>patient_address</td>
    <td>symptoms</td>
    <td>doctor_name</td>
    <td>Action</td>
';

if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row["patient_id"];
        $name = $row["name"];
        $user_id = $row["user_id"];
        $prescription = $row["prescription"];
        $patient_add = $row["patient_address"];
        $symptoms = $row["symptoms"];
        $doc_n = $row["doctor_name"];
        

echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td> 
        <td>'.$user_id.'</td> 
        <td>'.$prescription.'</td> 
        <td>'.$patient_add.'</td> 
        <td>'.$symptoms.'</td> 
        <td>'.$doc_n.'</td> 
        <td><a href="update_R.php?patient_id='.$id.'">UPDATE</a> 
    </tr>';
    }
}

?>