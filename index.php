<?php
include_once ('Database/conection.php');
$query="select * from music";
$result=mysqli_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <script src="https://kit.fontawesome.com/509accf0a1.js" crossorigin="anonymous"></script>

    <link href="css/index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>

<div class="grid-box">

    <div class="topNav">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="HTML/jukeBoxPlayer.html"><i class="fas fa-guitar"></i> Rock</a>
        <a href="HTML/jukeBoxPlayer.html"><i class="fas fa-microphone"></i> Pop</a>
        <a href="HTML/jukeBoxPlayer.html"><i class="fab fa-redhat"></i> Jazz</a>
        <a href="HTML/jukeBoxPlayer.html"><i class="fas fa-compact-disc"></i> Disco</a>
        <a href="HTML/jukeBoxPlayer.html"><i class="fas fa-peace"></i> Reggae</a>
        <a href="HTML/jukeBoxPlayer.html"><i class="fas fa-fist-raised"></i> Rap</a>
        <input type="text" placeholder="Search..">
    </div>

    <div class="cover">

        <?php
        $handle = opendir(dirname(realpath(__FILE__)).'/img/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '<a href="HTML/jukeBoxPlayer.html"><img class = "img" src="img/'.$file.'" alt = "'.$file.'"/></a>';
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