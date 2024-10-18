<?php
require('../Including/db_connection.php');
require('session_check.php');

$user_email = $_SESSION['email']; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- primary meta tags -->
    <title>My booking</title>
    <meta name="description" content="A website to rent rooms at affordable prices.">

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/logo/favicon.svg" type="image/svg+xml">

    <!-- links add  -->
    <?php require("../Including/links.php"); ?>

    <!-- custome css link -->
    <link rel="stylesheet" href="../css/booking.css">
    <link rel="stylesheet" href="../css/headernextpag.css">

</head>

<body>

    <!-- header section -->
    <?php
    require("../including/header.php");
    ?>



    <main>
        <article>

            <!-- login form -->
            <?php require("../Including/form.php"); ?>


            <section class="section bookingsection">
                <div class="container">
                    <!-- alertbox  -->
                    <?php
                    require("../Admin/Includefile/alertbox.php");
                    ?>

                    <h1 class="headline-large about-title title">My Booking</h1>

                    <div class="booking-container">

                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        <span class="title-small">Booking ID</span>
                                    </th>

                                    <th>
                                        <span class="title-small">Property Name</span>
                                    </th>

                                    <th>
                                        <span class="title-small">Property Address</span>
                                    </th>

                                    <th>
                                        <span class="title-small">Property Price</span>
                                    </th>

                                    <th>
                                        <span class="title-small">Deposite amount</span>
                                    </th>

                                    <th>
                                        <span class="title-small">Booking Date</span>
                                    </th>

                                    <th>
                                        <span class="title-small">Action</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $sql = "SELECT * FROM booking WHERE user_email = '$user_email'";
                                $data = mysqli_query($conn, $sql);
                                $total = mysqli_num_rows($data);
                                if ($total > 0) {

                                    while ($row = mysqli_fetch_assoc($data)) {
                                        echo "<tr>
                                        <td>" . $row['id'] . "</td>
                                        <td>" . $row['pname'] . "</td>
                                        <td>" . $row['paddress'] . "</td>
                                        <td>Rs " . $row['pprice'] . " /-</td>
                                        <td>Rs " . $row['depositeamt'] . " /-</td>
                                        <td>" . $row['bookingdate'] . "</td>
                                        <td class='actionbtn'>
                                            <a href='viewproperty.php?id=$row[id]' class='btn btn-primary'>View Details</a>
                                            <a href='cancelbooking.php?id=$row[id]' class='btn btn-danger'>Cancel</a>
                                        </td>
                                        </tr>";
                                    }
                                }else {
                                    echo "<tr><td colspan='7'>No bookings found for your account.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>


                </div>
            </section>

        </article>
    </main>


    <!-- footer section  -->

    <?php
    require("../including/footer.php");
    ?>

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
                        window.location.href = 'cancelbooking.php.php?id=' + id;
                    }
                });
            });

        </script>

</body>

</html>