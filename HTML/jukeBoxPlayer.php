<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <link href="../css/jukeBoxPlayer.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/509accf0a1.js" crossorigin="anonymous"></script>
    <title>Jukebox</title>
</head>
<body>
<div class="grid-box">

    <form id="topNav" action="jukeBoxPlayer.php" class="topNav" method="post">

        <input type="submit" formaction="../index.php" value="Home" name="home">
        <input type="submit" value="Rock" name="style">
        <input type="submit" value="Pop" name="style">
        <input type="submit" value="Jazz" name="style">
        <input type="submit" value="Disco" name="style">
        <input type="submit" value="Reggae" name="style">
        <input type="submit" value="Rap" name="style">
        <input id="search" type="text" name="search" placeholder="Search..">

    </form>
    <!--<img src="../img/halfJukeBox.PNG" alt="" height="464" width="858"> bild-->
    <div id="juke">
        <div id="current-song">

        </div>
        <div id="next-songs">


            <ul id="nav">
                <?php
                $style = $_POST["style"];
                $con = mysqli_connect("localhost", "root", "", "jukebox");
                $result = mysqli_query($con, "SELECT * FROM Music");
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['Genre'] == $style) {
                        echo $row['Artist'];
                        echo $row['Mp3Path'];
                        echo "<br>";
                    } else {
                        echo "Wrong Genre";
                        echo "<br>";
                    }
                }
                ?>
            </ul>


        </div>

        <div id="audio">
            <?php

            ?>
            <audio controls>

                <source src="<?php  mysqli_query($con, "SELECT * FROM Music WHERE ID = 1"); ?>" type="audio/ogg">

            </audio>
        </div>
    </div>
</div>
</body>
</html>