<?php
    require_once 'conn.php';

    error_reporting(0);
    $ct_name = $_POST["name"];
    $ct_email = $_POST["email"];
    $ct_company = $_POST["company"];
    $ct_country = $_POST["country"];
    $ct_message = $_POST["msg"];
    date_default_timezone_set("Asia/Jakarta");
    $time = date("h:i:sa");
    $date = date("d-m-Y");
    $_POST['date'] = $date;
    $_POST['time'] = $time;


    if ($ct_name == ""){
        echo "
        <div class='msg'>
            <img src='/gogo/assets/svg/error.svg'>
            <b>We were unable to process your message</b>
            <p>You will be redirected after <span id='countdown'>10</span> seconds</p>
        </div>
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>

        Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: 'Something error',
            timer: 5000,
            timerProgressBar: true,
        })

        var seconds = 10;
            function countdown() {
                seconds = seconds - 1;
                if (seconds < 0) {
                    // Chnage your redirection link here
                    window.location = '/';
                } else {
                    // Update remaining seconds
                    document.getElementById('countdown').innerHTML = seconds;
                    // Count down using javascript
                    window.setTimeout('countdown()', 1000);
                }
            }
            
            // Run countdown function
            countdown();
        </script>";
    }if ($ct_name != ""){
        mysqli_query($db,"INSERT INTO subscribe VALUES(NULL,'$ct_name', '$ct_email', '$ct_company', '$ct_country', '$ct_message', '$date', '$time')");
        echo "
        <div class='msg'>
            <img src='/gogo/assets/svg/success.svg'>
            <b>We will contact you soon!</b>
            <p>You will be redirected after <span id='countdown'>10</span> seconds</p>
        </div>
        <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>

        Swal.fire({
            icon: 'success',
            title: 'Thank You!',
            text: 'Your message was sent successfully',
            timer: 5000,
            timerProgressBar: true,
        })

        var seconds = 10;
            function countdown() {
                seconds = seconds - 1;
                if (seconds < 0) {
                    // Chnage your redirection link here
                    window.location = '/';
                } else {
                    // Update remaining seconds
                    document.getElementById('countdown').innerHTML = seconds;
                    // Count down using javascript
                    window.setTimeout('countdown()', 1000);
                }
            }
            
            // Run countdown function
            countdown();
        </script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        .msg{
            display: flex;
            flex-direction: column;
            margin: 50px auto;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .msg b{
            margin: auto;
            text-align: center;
            color: #333333;
            font-weight: 600;
            font-size: 24px;
            line-height: 29px;
        }
        .msg p{
            margin: auto;
            margin-top: 10px;
            text-align: center;
            color: #333333;
            font-weight: 400;
            font-size: 18px;
            line-height: 50px;
        }
        .msg img{
            width: 500px;
            height: 500px;
        }
        @media only screen and (max-width:500px) {
            .msg img{
                width: 50%;
            }
            .msg b{
                margin: auto;
                text-align: center;
                color: #333333;
                font-weight: 600;
                font-size: 20px;
                line-height: 29px;
            }
            .msg p{
                margin: auto;
                margin-top: 10px;
                text-align: center;
                color: #333333;
                font-weight: 400;
                font-size: 14px;
                line-height: 50px;
            }
        }
    </style>
</head>
<body>

</body>
</html>