<form action="" method="get">
    suchen nach:
    <input type="hidden" name="aktion" value="suchen">
    <input type="text" name="suchbegriff" id="suchbegriff">
    <input type="submit" value="suchen">
</form>
<?php
require 'inc/connect.php';
echo "<h1>Programm</h1>";
$erg = $db->query("SELECT ID, Song, Album, Artist, Genre FROM Musik")
	or die($db->error);

if ($erg->num_rows) {
	echo "<p>Daten vorhanden: Anzahl ";
	echo $erg->num_rows;
}

while ($zeile = $erg->fetch_object()) {
    echo "<li>";
	echo  $zeile->Song .' '. $zeile-> Album .' '. $zeile-> Artist .' '. $zeile-> Genre;
}
    $daten = array();
    if (isset($_GET['suchbegriff']) and trim($_GET['suchbegriff']) != '') {
        $suchbegriff = trim($_GET['suchbegriff']);
        echo "<p>Gesucht wird nach: <b>$suchbegriff</b></p>";
        $suche_nach = "%{$suchbegriff}%";
        $suche = $db->prepare("SELECT ID, Song, Album, Artist, Genre FROM Musik
                     WHERE Song LIKE ? OR Album LIKE ? OR Artist LIKE ?  OR Genre LIKE ? ");
        $suche->bind_param('sss', $suche_nach, $suche_nach, $suche_nach);
        $suche->execute();
        $suche->bind_result($ID, $Song, $Album, $Artist, $Genre);
        while ($suche->fetch()) {
            $daten[] = (object)array('id' => $ID,
                'Song' => $Song,
                'Album' => $Album,
                'Artist' => $Artist,
                'Genre' => $Genre);
        }
        $suche->close();
        $Song = '';
        $Album = '';
        $Artist = '';
        $Genre = '';
    } else {
        if ($erg = $db->query("SELECT *  FROM Musik")) {
            if ($erg->num_rows) {
                while ($datensatz = $erg->fetch_object()) {
                    $daten[] = $datensatz;
                }
                $erg->free();
            }
        }
    }
    ?>


