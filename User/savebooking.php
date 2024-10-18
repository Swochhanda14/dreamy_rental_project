<?php
require('../Including/db_connection.php');
require('session_check.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
    
    
    $user_email = $_SESSION['email']; 

    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $paddress = $_POST['paddress'];
    $depositeamt = $_POST['depositeamt'];
    $Bdate = $_POST['Bdate'];

    
    $sql = "INSERT INTO booking (pname, pprice, paddress, depositeamt, bookingdate, user_email) 
            VALUES ('$pname', '$pprice', '$paddress', '$depositeamt', '$Bdate', '$user_email')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $_SESSION['status'] = "Save successfully!";
        $_SESSION['status_code'] = "success";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/dreamyrental/User/property.php">
        <?php
    } else {
        $_SESSION['status'] = "Failed to add!";
        $_SESSION['status_code'] = "error";
        echo "<meta http-equiv='refresh' content='0; url=http://localhost/dreamyrental/User/property.php'>";      
    }
}
?>
