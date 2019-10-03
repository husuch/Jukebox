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

    <div class="audio">
        <t>
            <th>Artist</th>
            <th>Genre</th>
            <th>Song</th>
            <th>Mp3Path</th>
        </t>
        <?php
        include_once("../Database/connection.php");
        $con = new mysqli("localhost", "root", "", "jukebox");
        $select = "Select * from music";
        $result = mysqli_query($con, $select);
        $style = $_POST['style'];

        while ($rows = mysqli_fetch_assoc($result)) {
            if ($rows['Genre'] == $style) {
                ?>
                <tr
                <td><?php echo $rows['Artist']; ?></td>
                <td><?php echo $rows['Genre']; ?></td>
                <td><?php echo $rows['Song']; ?></td>
                <td><?php echo $rows['Mp3Path']; ?></td>
                </tr>
                <audio class="audio" controls="controls" autoplay="true">
                    <source src="<?php echo'$rows["Mp3Path"]'; ?>" type="audio/mp3"/>
                </audio>
                <?php
            } else {
                echo "";
            }
        }
        echo $style;

        ?>

</audio>

</div>
</body>
</html>