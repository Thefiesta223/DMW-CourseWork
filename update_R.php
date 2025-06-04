<?php
include 'conf.php';
$id = 1;
$id = $_GET['patient_id'];
$sql = "SELECT * FROM records WHERE patient_id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

echo '<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="Updateform.css">
</head>
<body>';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];
    $prescip = $_POST['prescription'];
    $p_address = $_POST['patient_address'];
    $symptoms = $_POST['symptoms'];
    $doc_n = $_POST['doctor_name'];
    /*$pickUpDate = $_POST['pickUpDate'];*/
    // Prepare the SQL statement to prevent SQL injection

    $sql = "UPDATE records SET name = '$name', user_id = '$user_id', prescription = '$prescip', patient_address = '$p_address', symptoms = '$symptoms', doctor_name = '$doc_n' WHERE patient_id = $id";

    if(mysqli_query($conn,$sql)){
        echo "Record updated successfully";
        header("Location: view_R.php");
        exit();
    }else{
        echo "Error updating record: " . mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<head></head>
<body>
<h2>Update Bike Rental Information</h2>  
<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    User_id: <input type="text" name="user_id" value="<?php echo $row['user_id']; ?>"><br> 
    Prescription: <input type="text" name="prescription" value="<?php echo $row['prescription']; ?>"><br>
    Address: <input type="text" name="patient_address" value="<?php echo $row['patient_address']; ?>"><br>      
    Symptoms: <input type="text" name="symptoms" value="<?php echo $row['symptoms']; ?>"><br>
    Doctor Name: <input type="text" name="doctor_name" value="<?php echo $row['doctor_name']; ?>"><br>
    <input type="submit" name="submit" value="Update">
</form>
</body>
</html> 
