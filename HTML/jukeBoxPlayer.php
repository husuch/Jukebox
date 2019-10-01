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

    <form id="topNav" action="jukeBoxPlayer.php" class="topNav">

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
            <?php
            $style = $_GET["style"];
            echo "$style";

            switch ($style) {
                case "Rock":
                    echo "Style ist Rock";
                    break;
                case "Pop":
                    echo "Style ist Pop";
                    break;
                case "Jazz":
                    echo "Style ist Jazz";
                    break;

                case "Disco":
                    echo "Style ist Disco";
                    break;

                case "Reggae":
                    echo "Style ist Reggae";
                    break;

                case "Rap":
                    echo "Style ist Rap";
                    break;
            }
            ?>
            <ul>
                <li>Hello</li>
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