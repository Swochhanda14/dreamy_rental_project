<?php
require('../Including/db_connection.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- primary meta tags -->
    <title>Admin_dashboard</title>
    <meta name="description" content="A website to rent rooms at affordable prices.">

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/logo/favicon.svg" type="image/svg+xml">

    <!-- custome links  -->
    <?php
    require("Includefile/customelink.php");
    ?>



</head>

<body>

    <div class="container">
        <!-- sidenavbar  -->
        <?php
        require("Includefile/sidebar.php");
        ?>
        <!-- sidenavbar  -->

        <!-- body part  -->
        <div class="dashboard">

            <!-- alertbox  -->
            <?php
            require("Includefile/alertbox.php");
            ?>

            <div class="dashboard-header">
                <h1>Room Rental Portal</h1>
            </div>

            <div class="dashboard-content">

                <div class="dashboard-title">
                    <h2>View Location</h2>
                    <h3> <a href="dashboard.php">Dashboard</a> / View lacation</h3>
                </div>

                <div class="table-container">

                    <h2>Admin List</h2>

                    <div class="search-container">
                        <form action="#">
                            <div class="showentrie">
                                <label for="entries">Show</label>
                                <select name="entrie">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label for="entries">Entries</label>
                            </div>

                            <div class="searchbar">
                                <input type="search" name="search" value="<?php if (isset($_GET['search'])) {
                                    echo $_GET['search'];
                                } ?>" placeholder="Search by city">
                                <input type="submit" value="Search">
                            </div>
                        </form>
                    </div>

                    <div class="table">
                        <table class="user-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['search']) && !empty($_GET['search'])) {
                                    $value = $_GET['search'];
                                    $sql = "SELECT * FROM location WHERE CONCAT(id, city, state) LIKE '%$value%'";
                                } else {
                                    $sql = "SELECT * FROM location";
                                }
                                $data = mysqli_query($conn, $sql);

                                $total = mysqli_num_rows($data);

                                if ($total > 0) {
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        echo "<tr>
                                             <td>" . $row['id'] . "</td>
                                             <td>" . $row['city'] . "</td>
                                             <td>" . $row['state'] . "</td>
                                             <td class='actionbtn'>
                                                 <a href='updatelocation.php?id=$row[id]' class='btn update'>Update</a>
                                                 <a href='deletelocation.php?id=$row[id]' class='btn delete'>Delete</a>
                                             </td>
                                         </tr>";

                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No records found.</td></tr>";
                                }



                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="totalcount">
                        <p>Showign 1 to <span><?php echo $total; ?></span> of <span><?php echo $total; ?></span> Entries
                        </p>
                    </div>


                </div>

            </div>



        </div>
        <!-- body part  -->

        <script>
            $(document).ready(function () {
                $('.delete').click(function (e) {
                    e.preventDefault();
                    var id = $(this).closest('tr').find('td:first').text();
                    $('.alertbox').css({
                        "opacity": "1", "pointer-events": "auto", "transition": "top 0ms ease-in-out 0ms, opacity 200ms ease-in-out 0ms, transform 20ms ease-in-out 0ms"
                    }).data('delete-id', id);
                });

                $('.btn1').click(function (e) {
                    e.preventDefault();
                    $('.alertbox').css({
                        "opacity": "0", "pointer-events": "none", "transition": "top 0ms ease-in-out 200ms, opacity 200ms ease-in-out 0ms,transform 20ms ease-in-out 0ms"
                    });
                });

                $('.btn2').click(function (e) {
                    e.preventDefault();
                    var id = $('.alertbox').data('delete-id');
                    if (id) {
                        window.location.href = 'deletelocation.php?id=' + id;
                    }
                });
            });

        </script>

        <?php
        require("Includefile/jslink.php");
        ?>

</body>

</html>