<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prepare to cry</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="../ICONS/begining.png">
    </head>
    <body>
        <form>
            <p>P 4 S S W 0 R D:</p>
            <div class='inp'>
                <input type="password" name="password" placeholder="At the end of the txt..."><br>
                <?php
                    if (isset($_GET['submit'])) {
                        $MDP = $_GET['password'];
                        if ($MDP == '8xty0pf4ZE') {
                            echo '<i style="color:rgb(23, 255, 2);font-size:30px;font-family: digital-7;">System Hacked, here is your link: ../back_to_the_past/break.php </i> ';
                        }
                        else {
                            echo '<i style="color:rgb(23, 255, 2);font-size:30px;font-family: digital-7;">ERROR</i> ';
                        }
                    }
                ?>
            </div>
            <button type="submit" name="submit" value="submit"><img src="submit_button.png" alt="submit_button"></button>
            <p><img src="QR.png" alt="QR code" width='200px'></p>
        </form>
    </body>
</html>
