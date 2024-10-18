<?php
require('../Including/db_connection.php');

$adminid = (int)$_GET['id'];

$sql = "DELETE FROM adminlogin where id=$adminid";

$data = mysqli_query($conn, $sql);

if ($data) {
    echo "<script>alert('Your data is deleted!')</script>";
?>
    <meta http-equiv="refresh" content="0; url=http://localhost/dreamyrental/admin/admin.php">
<?php
}else{
    echo "<script>alert('Failed to delete!')</script>";
}
?>