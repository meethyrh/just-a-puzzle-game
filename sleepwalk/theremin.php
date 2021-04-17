<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Road to the space</title>
        <link rel="stylesheet" href="theremin.css">
        <link rel="icon" href="../ICONS/begining.png">
    </head>
    <body>
        <h1>may the force be with you... you'll need a good mental health for next steps!</h1>
        <form>
            <p>Congratulation, you've come this far... waw!
            <br>here is your reward: <br>
            <div class='inp'>
                <input type="number" placeholder='type the code here' name='code'> <br>
                
                <?php
                    if (isset($_GET['submit'])) {
                        $MDP = $_GET['code'];
                        if ($MDP == '51124716791918') {  
                            echo '<i style="color:gold;font: size 10px;px;font-family: starjedi;">Look down</i>';
                        }
                    }
                ?>

            </div>
            <button type="submit" name="submit" value="submit"><img src="submit.png" alt="submit" width='300px'></button>
            </p>
        </form>

        <ul>
            <li><a href="http://localhost:8080/JustAPuzzleGame/blog/index.html"><img src="lvl1.png" alt="level1" width='200px'></a></li>
            <li><a href="http://localhost:8080/JustAPuzzleGame/blog/8bit.html"><img src="lvl2.png" alt="level2" width='200px'></a></li>
            <li><a href="http://localhost:8080/JustAPuzzleGame/prepare_to_cry/prepare_to_cry.php"><img src="lvl3.png" alt="level3" width='200px'></a></li>
            <li><a href="http://localhost:8080/JustAPuzzleGame/back_to_the_past/break.php"><img src="lvl4.png" alt="level4" width='200px'></a></li>
        </ul>

        <ul>
            <li><a href="http://localhost:8080/JustAPuzzleGame/B_side/spacetrip/space_trip.php"><img src="spacetripB.png" alt="spacetrip" width='200px'></a></li>
            <li><a href="http://localhost:8080/JustAPuzzleGame/B_side/musicbox/musicbox.php"><img src="musicbox.png" alt="musicbox" width='200px'></a></li>
            <li><a href="http://localhost:8080/JustAPuzzleGame/B_side/leviathan/leviathan.php"><img src="leviathan.png" alt="leviathan" width='200px'></a></li>
            <li><a href="http://localhost:8080/JustAPuzzleGame/B_side/keyword/keyword.php"><img src="key_word.png" alt="key word" width='200px'></a></li>
        </ul>
        <?php
            if (isset($_GET['submit'])) {
                $MDP = $_GET['code'];
                if ($MDP == '51124716791918') {  
                    echo '<i style="color:gold;font: size 10px;px;font-family: starjedi;">http://localhost:8080/JustAPuzzleGame/B_side/end_screen/end_screen.html</i>';
                }
            }
        ?>

        <br><a href="http://localhost:8080/JustAPuzzleGame"><img src="begining.png" alt="DO NOT TOUCH THIS" width='200px'></a>

    </body>
</html>