<?php

if(isset($_GET['hash'])){
    $mysqli = new mysqli('host_here','user_here','password_here','database_here');
    $result = $mysqli->query("select * from hashes where hash = '{$_GET['hash']}'  limit 1");

    $row = $result->fetch_array();
}

if(isset($row['used']) && $row['used'] == 0){
    $mysqli->query("update hashes set used=1 where hash = '{$_GET['hash']}'");
    $filename = "example.mp3";
    header("Content-Transfer-Encoding: binary");
    header("Content-Type: audio/mpeg");
    header('Content-length: ' . filesize($filename));
    //If this is a secret filename then don't include it.
    header('Content-Disposition: inline');
    //Otherwise you can add it like so, in order to give the download a filename
    //header('Content-Disposition: inline;filename='.$filename);
    header('Cache-Control: no-cache');


    readfile($filename);
    exit;
}

elseif(isset($row['used']) && $row['used'] == 1){
    die("you can't just download this dude");
}