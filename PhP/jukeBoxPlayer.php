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
    <form action="jukeBoxPlayer.php" class="topNav" method="POST">

        <input type="submit" formaction="../index.php" value="Home" name="home">
        <input type="submit" value="Rock" name="style">
        <input type="submit" value="Pop" name="style">
        <input type="submit" value="Jazz" name="style">
        <input type="submit" value="Disco" name="style">
        <input type="submit" value="Reggae" name="style">
        <input id="shuffle" type="submit" value="Shuffle" name="style" style="background-color: green">
        <div class="search-container">
                <input type="text" placeholder="Search..." name="search" value="placeholder">
                <button type="submit"><i class="fa fa-search"></i></button>
        </div>


    </form>

    <div class="audio">

        <table>
            <tr>
                <th>Artist</th>
                <th>Album</th>
                <th>Song</th>
                <th>Genre</th>
            </tr>

            <?php

            include_once("../Database/connection.php");
            $con = new mysqli("localhost", "root", "", "jukebox");
            $select = "Select * from music";
            $result = mysqli_query($con, $select);
            $yourSelect = $_POST['style'];
            $loadSource = 0;
            $source = array();
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
                if ($rows['Artist'] == $yourSelect  or  $rows['Album'] == $yourSelect or  $rows['Song'] or  $rows['Genre']==$yourSelect) {

                    $source[$loadSource] = "../Mp3/" . $rows['Mp3Path'];
                    $loadSource = $loadSource + 1;
                    ?>
                    <tr>
                        <td><?php echo $rows['Artist'] ?></td>
                        <td><?php echo $rows['Album'] ?></td>
                        <td><?php echo $rows['Song'] ?></td>
                        <td><?php echo $rows['Genre'] ?></td>
                    </tr>
                    <?php
                } else {
                    echo "";
                }
            }
            ?>
        </table>
    </div>
    <div class="sound">
        <audio id="myTune" class="audio" controls>
            <source src="<?php echo $source[0] ?>">
        </audio>
        <script type="text/javascript">
            document.getElementById('myTune').addEventListener("ended", function () {
                <?php
                $i = $i + 1;
                nextSong($source[$i]);
                ?>
            });

        </script>
        <?php

        function nextSong($source)
        {
            ?>
            <audio id="myTune" class="audio" controls>
                <source src="<?php echo $source ?>">
            </audio>
            <?php
        }

        ?>

        <button onclick="document.getElementById('myTune').play()">Play</button>
        <button onclick="document.getElementById('myTune').pause()">Pause</button>
        <button onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">
            Reset Music
        </button>
        <button onclick="document.getElementById('myTune').volume+=0.1">Volume Up</button>
        <button onclick="document.getElementById('myTune').currentTime+=30">Speed Up</button>
        <button onclick="document.getElementById('myTune').volume-=0.1">Volume Down</button>
        <button onclick="document.getElementById('myTune').volume-=1">Mute</button>
        <button onclick="document.getElementById('myTune').volume+=1">Unmute</button>
    </div>

</div>
</body>
</html>