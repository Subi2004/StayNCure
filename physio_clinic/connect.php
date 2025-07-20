<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table{
            width:100%;
            border-collapse:collapse;
        }
        th{
            background-color:#333;
            color:white;
            font-weight:bold;
        }
        td,th{
            padding:6px;
            border:1px solid #ccc;
            text-align:left;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <centre>
                    <form method="POST" action="#">
                        <h6 align-content="center"> pname:<input type="text" name="pname" size="20" list="patient">
                        from:<input type="date" name="from" size="20">
                        to:<input type="date" name="to" size="20">
                        <input type="submit" value="submit" name="appointment"></h6>
                    </form>
                </centre>
            </div>
        </div>
    </div>
            <?php
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "stayncure";
            $con = new mysqli($servername, $username, $password, $dbname);
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $query = "SELECT id, name, email, phone_no, subject, date, time, message FROM appointment"; // Replace with appropriate query
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                echo '<div class="row g-4 align-items-center">';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">';
                    echo '<div class="card bg-light border-0 rounded-3 p-3">';
                   echo '"<option>". $row['name'] . $row['date']. $row['time']. $row['phone_no']. $row['subject']. $row['message']"</option>"';
                   /* echo '<p class="card-text">Appointment Date: ' .  . '</p>';
                    echo '<p class="card-text">Appointment Time: ' . $row['time'] . '</p>';
                    echo '<p class="card-text">Phone number: ' . $row['phone_no'] . '</p>';
                    echo '<p class="card-text">Subject: ' . $row['subject'] . '</p>';
                    echo '<p class="card-text">Message: ' . $row['message'] . '</p>';
                    echo '</div></div>';*/
                }
                echo '</div>';
            } else {
                echo "<p>No appointments found.</p>";
            }
            $con->close();
            ?>
            <!-- End of PHP Code -->

        </div>
    </div>
    <!-- Appointments List End -->

    <!-- Footer -->

</body>

</html>
