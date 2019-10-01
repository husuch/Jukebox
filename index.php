<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <script src="https://kit.fontawesome.com/509accf0a1.js" crossorigin="anonymous"></script>

    <link href="css/index.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Jukebox</title>
</head>
<body>

<div class="grid-box">

    <div class="topNav">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="index.php"><i class="fas fa-guitar"></i> Rock</a>
        <a href="categories/personalien.html"><i class="fas fa-microphone"></i> Pop</a>
        <a href="categories/hobbys.html"><i class="fab fa-redhat"></i> Jazz</a>
        <a href="categories/fachkentnisse.html"><i class="fas fa-compact-disc"></i> Disco</a>
        <input type="text" placeholder="Search..">
    </div>

    <div class="cover">

        <?php
        $handle = opendir(dirname(realpath(__FILE__)).'/img/');
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                echo '<img class = "img" src="img/'.$file.'" />';
            }
        }
        ?>
        <!-- Images
        <div id ="abbaLive">
            <img class = "img" src="img/abbaLive.jpg" alt="Abba Live">
        </div>
        <div id ="arrival">
            <img class = "img" src="img/Arrival.jpg" alt="Arrival">
        </div>
        <div id ="highwayToHell1">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell2">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell3">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell4">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell5">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell6">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell7">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>
        <div id ="highwayToHell8">
            <img class = "img" src="img/Highway_to_Hell.jpg" alt="Highway to Hell">
        </div>

        -->
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