<?php
include 'conf.php';

if (isset($_GET['id'])) {
    $delete_id = (int) $_GET['id'];

    $sql = "DELETE FROM records WHERE patient_id = $delete_id";
    $result = mysqli_query($conn, $sql);

    if ($result === true) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided.";
}
?>

