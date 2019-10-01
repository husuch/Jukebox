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

    <div class="topNav">
        <a href="../index.php"><i class="fas fa-home"></i> Home</a>
        <a href="jukeBoxPlayer.php"><i class="fas fa-guitar"></i> Rock</a>
        <a href="jukeBoxPlayer.php"><i class="fas fa-microphone"></i> Pop</a>
        <a href="jukeBoxPlayer.php"><i class="fab fa-redhat"></i> Jazz</a>
        <a href="jukeBoxPlayer.php"><i class="fas fa-compact-disc"></i> Disco</a>
        <a href="jukeBoxPlayer.php"><i class="fas fa-peace"></i> Reggae</a>
        <a href="jukeBoxPlayer.php"><i class="fas fa-fist-raised"></i> Rap</a>
        <input type="text" placeholder="Search..">
    </div>
    <!--<img src="../img/halfJukeBox.PNG" alt="" height="464" width="858"> bild-->
    <div id="juke">
        <div id="current-song">

        </div>
        <div id="next-songs">
            <?php
            $vorname = $_POST["vorname"];
            $nachname = $_POST["nachname"];
            echo "Hallo $vorname $nachname";
            ?>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div id="audio">
            <audio src="" controls id="audioPlayer"></audio>
        </div>
    </div>
</div>
</body>
</html>