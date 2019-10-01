
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
(2,'Dancing Queen','Arrival','Abba','Pop'),
(3,'Dancing Queen','Arrival','Abba','Pop'),
(4,'Dancing Queen','Arrival','Abba','Pop'),
(5,'Dancing Queen','Arrival','Abba','Pop'),
(6,'Dancing Queen','Arrival','Abba','Pop'),
(7,'Dancing Queen','Arrival','Abba','Pop'),
(8,'Dancing Queen','Arrival','Abba','Pop'),
(9,'Dancing Queen','Arrival','Abba','Pop'),
(10,'Dancing Queen','Arrival','Abba','Pop'),
(11,'Dancing Queen','Arrival','Abba','Pop'),
(12,'Dancing Queen','Arrival','Abba','Pop');


