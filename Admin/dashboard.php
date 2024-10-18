<?php
    require('../Including/db_connection.php');
    session_start();

    if(!isset($_SESSION['username'])) {
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

            <div class="dashboard-header">
                <h1>Room Rental Portal</h1>
            </div>

            <div class="dashboard-content">

                <div class="dashboard-title">
                    <h2>Welcome Admin!</h2>
                    <h3>Dashboard</h3>
                </div>

                <div class="dashboard-card">

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">group</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM users";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>Register Users</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">groups</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM adminlogin";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>Owners</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">person</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM users";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>Tanents</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">real_estate_agent</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM property";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>Properties</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">apartment</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM property WHERE propertytype = 'shop'";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>   
                            </span>

                            <h3>No. of shop</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">home</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM property WHERE propertytype = 'house'";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>No. of Houses</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">living</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM property WHERE propertytype = 'flat'";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>No. of Flats</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-icon">
                            <span class="material-symbols-rounded">trending_flat</span>
                        </div>
                        <div class="card-info">
                            <span class="total">
                                <?php
                                    $query = "SELECT COUNT(*) FROM contact";
                                    $result = mysqli_query($conn, $query);
                                    $row = mysqli_fetch_array($result);
                                    echo $row[0];
                               ?>
                            </span>

                            <h3>Tanent Message</h3>

                            <div class="line">
                                <div class="percent"></div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </div>
        <!-- body part  -->


        <?php
        require("Includefile/jslink.php");
        ?>

</body>

</html>