<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <script src="https://kit.fontawesome.com/509accf0a1.js" crossorigin="anonymous"></script>

    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>About</title>
</head>
<body>
//Grid-Box (Zweck: zur Platzierung verschiedener Elemente)
<div class="grid-box">
    //Navigation Bar
    <form action="jukeBoxPlayer.php" class="topNav" method="POST">

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

    //Titel (Bild+Titel)
    <div class="titel">
        <img id="logo" src="../background/logoNoBackground.png" alt="logo">
        <h1>Hit-Radio 68</h1>
    </div>

    //Der Inhalt der Seite
    <div id="content">

        <h2>Über uns</h2>
        <p>Wir sind eine Radiozentrale, welche nicht die neuesten Lieder spielt wie die meisten Radiokanale heutzutage,
            wir gehen zurück in die klassischen Zeiten. Wir haben eine grosse Auswahl von Liedern von verschiedenen
            Künstlern wie AC/DC bis zu Bob Marley. </p>
    </div>

    //Footer
    <div class="footer-basic-centered">
        <p class="footer-company-motto">"Musik bedeutet nicht nur zu hören. Musik kann man fühlen"</p>
        <p class="company">Radio-68</p>

        <p class="footer-links">
            <a href="../index.php">Home</a>
            ·
            <a href="about.php">About</a>
            ·
            <a href="contact.php">Contact</a>
            ·
            <a href="followus.php">Follow us</a>
        </p>

        <p class="footer-company-name">Radio-68 &copy; 2019</p>
    </div>
</div>
</body>
</html>