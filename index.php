<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <script src="https://kit.fontawesome.com/509accf0a1.js" crossorigin="anonymous"></script>

    <link href="css/index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>

<div class="grid-box">


    <form id="topNav" action="HTML/jukeBoxPlayer.php" class="topNav" method="POST">

        <input type="submit" formaction="index.php" value="Home" name="home">
        <input type="submit" value="Rock" name="style">
        <input type="submit" value="Pop" name="style">
        <input type="submit" value="Jazz" name="style">
        <input type="submit" value="Disco" name="style">
        <input type="submit" value="Reggae" name="style">
        <input id="search" type="text" name="search" placeholder="Search..">

    </form>


    <div class="cover">

        <?php
        $handle = opendir(dirname(realpath(__FILE__)) . '/img/');
        while ($file = readdir($handle)) {
            if ($file !== '.' && $file !== '..') {
                echo '<a href="HTML/jukeBoxPlayer.php"><img class = "img" src="img/' . $file . '" alt = "' . $file . '"/></a>';
            }
        }
        ?>
    </div>

    <div class="footer-basic-centered">
        <p class="footer-company-motto">"Musik bedeutet nicht nur zu hören. Musik kann man fühlen"</p>
        <p class="company">Radio-68</p>

        <p class="footer-links">
            <a href="index.php">Home</a>
            ·
            <a href="html/footer/about.html">About</a>
            ·
            <a href="html/footer/contact.html">Contact</a>
            ·
            <a href="html/footer/followus.html">Follow us</a>
        </p>

        <p class="footer-company-name">Radio-68 &copy; 2019</p>
    </div>
</div>
</body>
</html>