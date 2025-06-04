<?php
include 'conf.php';

$sql = "SELECT * FROM user_details"; 
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
<th>Name</th>
<th>Email</th>
</tr>';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $name = $row['name'];
        $email = $row['email']; 


        echo 
        '<tr>
        <td>'.$user_id.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        </tr>';
    }
}
echo '</table>';

mysqli_close($conn);
?>