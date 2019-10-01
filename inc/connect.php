<?php
echo date("H:i:s");
// error_reporting(E_ALL);
error_reporting(0);
$db = new mysqli('localhost', 'root', 'mypassword', 'jukebox');


if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}