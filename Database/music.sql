
DROP DATABASE IF EXISTS jukebox;
CREATE DATABASE IF NOT EXISTS jukebox;
USE jukebox;
CREATE TABLE IF NOT EXISTS Musik(
                                    ID SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                                    Song VARCHAR(45) NOT NULL,
                                    Album VARCHAR(45) NOT NULL,
                                    Artist VARCHAR(45) NOT NULL,
                                    Genre VARCHAR(45) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO Musik (ID, Song, Album, Artist, Genre) VALUES
(1,'Dancing Queen','Arrival','Abba','Pop'),
(2,'Dancing Queen','Arrival','Abba','Rock'),
(3,'Dancing Queen','Arrival','Abba','Metal'),
(4,'Dancing Queen','Arrival','Abba','Rap'),
(5,'Dancing Queen','Arrival','Abba','Trap'),
(6,'Dancing Queen','Arrival','Abba','House'),
(7,'Dancing Queen','Arrival','Abba','Jazz'),
(8,'Dancing Queen','Arrival','Abba','Disco'),
(9,'Dancing Queen','Arrival','Abba','Reggae'),
(10,'Dancing Queen','Arrival','Abba','Folk'),
(11,'Dancing Queen','Arrival','Abba','Punk'),
(12,'Dancing Queen','Arrival','Abba','Pop');


