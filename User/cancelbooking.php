<?php
require('../Including/db_connection.php');
require('session_check.php');


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $propertyid = mysqli_real_escape_string($conn, $_GET['id']);


    $sql = "DELETE FROM booking WHERE id = '$propertyid'";

    if (mysqli_query($conn, $sql)) {

        $_SESSION['status'] = "Booking canceled successfully!";
        $_SESSION['status_code'] = "success";
    } else {

        $_SESSION['status'] = "Failed to cancel booking!";
        $_SESSION['status_code'] = "error";
    }

    echo "<meta http-equiv='refresh' content='0; url=http://localhost/dreamyrental/User/booking.php'>";
} else {

    $_SESSION['status'] = "Invalid booking ID!";
    $_SESSION['status_code'] = "error";
    echo "<meta http-equiv='refresh' content='0; url=http://localhost/dreamyrental/User/booking.php'>";
}
?>
