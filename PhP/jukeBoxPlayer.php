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

<?php

$mysqli = new mysqli('localhost','root','','jukebox');
$rand = mt_rand();
$hash = md5($rand);
$result = $mysqli->query("insert into hashes (hash,used) values('$hash',0)");

?>
<audio controls>
    <source src="song.php?hash=<?=$hash?>" type="audio/mpeg">
</audio>


</body>
</html>