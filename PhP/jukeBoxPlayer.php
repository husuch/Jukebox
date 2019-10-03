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
        <input id="shuffle" type="submit" value="shuffle" name="shuffle" style="background-color: green">
        <div class="search-container">
            <form action="jukeBoxPlayer.php" method="post">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit" formaction="jukeBoxPlayer.php"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </form>

    <div class="playlistliste">
       <table>
           <th id="player">
              Playlist
           </th>
       </table>

    </div>

    <div class="audio">

        <table>
            <tr>
                <th>Artist</th>
                <th>Album</th>
                <td id="mitte" width="494px"></td>
                <th>Song</th>
                <th>Genre</th>
            </tr>

            <?php

            include_once("../Database/connection.php");
            $con = new mysqli("localhost", "root", "", "jukebox");
            $select = "Select * from music";
            $result = mysqli_query($con, $select);

            $searchInput = "1";
            $artistInput = "1";
            $styleInput = "1";
            $shuffle = "1";
            IF (isset($_POST['style'])) {
                $styleInput = $_POST['style'];
            }
            IF (isset($_POST['band'])) {
                $artistInput = $_POST['band'];
            }
            IF (isset($_POST['search'])) {
                $searchInput = $_POST['search'];
            }
            IF (isset($_POST['shuffle'])) {
                $shuffle = $_POST['shuffle'];
            }
            $loadSource = 0;
            $source = array();
            $i = 0;
            ?>
            <form action="jukeBoxPlayer.php" method="post" class="tableForm">
                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                    if ((strcasecmp($rows['Genre'], $styleInput) == 0 or strcasecmp($rows['Genre'], $searchInput) == 0) or (strcasecmp($rows['Artist'], $artistInput) == 0 or strcasecmp($rows['Artist'], $searchInput) == 0) or (strcasecmp($rows['Album'], $searchInput) == 0) or (strcasecmp($rows['Song'], $searchInput) == 0)) {

                        $source[$loadSource] = "../Mp3/" . $rows['Mp3Path'];
                        $loadSource = $loadSource + 1;
                        ?>
                        <tr>
                            <td><input type="submit" class="tableForm" value="<?php echo $rows['Artist'] ?>" name="band"></td>
                            <td><input type="submit" class="tableForm" value="<?php echo $rows['Album'] ?> " name="search"></td>
                            <td id="inhalte"></td>
                            <td><input type="submit" class="tableForm" value="<?php echo $rows['Song'] ?> " name="search"></td>
                            <td><input type="submit" class="tableForm" value="<?php echo $rows['Genre'] ?> " name="style"></td>

                        </tr>

                        <?php
                    } else {
                        echo "";
                    }
                }
                ?>
            </form>
        </table>
    </div>
    <div class="sound">
        <audio id="myTune" class="audio">
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
            <audio id="myTune" class="audio">
                <source src="<?php echo $source ?>">
            </audio>
            <?php
        }

        ?>
    </div>
    <div class="knopf">
        <img src="../background/OSOD.gif" id="Gif">
        <button class="buttoncool" id="play" onclick="document.getElementById('myTune').play()">Play</button>
        <button class="buttoncool" id="pause" onclick="document.getElementById('myTune').pause()">Pause</button>
        <button class="buttoncool" id="reset"
                onclick="document.getElementById('myTune').pause(); document.getElementById('myTune').currentTime = 0;">
            Reset Music
        </button>
        <button class="buttoncool" id="up" onclick="document.getElementById('myTune').volume+=0.1">Volume Up</button>
        <button class="buttoncool" id="speed" onclick="document.getElementById('myTune').currentTime+=30">Speed Up
        </button>
        <button class="buttoncool" id="down" onclick="document.getElementById('myTune').volume-=0.1">Volume Down
        </button>
        <button class="buttoncool" id="mute" onclick="document.getElementById('myTune').volume-=1">Mute</button>
        <button class="buttoncool" id="unmute" onclick="document.getElementById('myTune').volume+=1">Unmute</button>
    </div>

</div>
</body>
</html>