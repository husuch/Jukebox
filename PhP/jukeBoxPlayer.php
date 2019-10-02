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
<form action="jukeBoxPlayer.php" class="topNav" method="post">

    <input type="submit" formaction="../index.php" value="Home" name="home">
    <input type="submit" value="Rock" name="style">
    <input type="submit" value="Pop" name="style">
    <input type="submit" value="Jazz" name="style">
    <input type="submit" value="Disco" name="style">
    <input type="submit" value="Reggae" name="style">
    <input id="shuffle" type="submit" value="Shuffle" name="style" style="background-color: green">
    <div class="search-container">
        <form action="/action_page.php">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>



</form>

<audio class="audio" controls="controls" autoplay="true" loop="loop">
    <source src="../Mp3/Abba%20-%20Dancing%20Queen.mp3" type="audio/mpeg" />
</audio>

</div>
</body>
</html>