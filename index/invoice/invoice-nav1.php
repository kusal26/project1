<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Ecommerce Website Design </title>
    <link rel="stylesheet" href="../../style/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">


</head>

<body>
    <div class="header">
        <div class="container">

            <div class="navbar">
                <div class="logo" style="padding-top: 50px">
                    <img src="../../images/handmade.jpg" height="100px" width="300px">

                </div>
                <h3 style="color:gray; padding-top:80px; padding-left:20px" id="clock">
                    </h3>
                    <nav style="padding-top:50px">
                        <ul>
                        <li><a href=""></a></li>
                            <li><a href="../home.php">Home</a></li>
                            <li><a href="../about.php">About</a></li>
                            <li><a href="../service.php">Service</a></li>
                            <li><a href="../design.php">Design</a></li>
                            <li><a href="../contact.php">Contact</a></li>
                            <li><a href="../login.php" target="_blank"><?php echo empty($_SESSION['userName']) ? 'Login' : 'Logout'; ?></a></li>
                            <br>
                        </ul>

                    </nav>

            </div>
        </div>
</body>

</html>

<script>
    function currentTime() {
        let date = new Date();
        let hh = date.getHours();
        let mm = date.getMinutes();
        let ss = date.getSeconds();
        let session = "AM";

        if (hh === 0) {
            hh = 12;
        }
        if (hh > 12) {
            hh = hh - 12;
            session = "PM";
        }

        hh = (hh < 10) ? "0" + hh : hh;
        mm = (mm < 10) ? "0" + mm : mm;
        ss = (ss < 10) ? "0" + ss : ss;

        let time = hh + ":" + mm + ":" + ss + " " + session;

        document.getElementById("clock").innerText = time;
        let t = setTimeout(function() {
            currentTime()
        }, 1000);
    }

    currentTime();
</script>