CREATE DATABASE  IF NOT EXISTS `aboutbooks` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `aboutbooks`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: aboutbooks
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `writer`
--

DROP TABLE IF EXISTS `writer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `writer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `bio` text,
  `moder` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `moder` (`moder`),
  CONSTRAINT `writer_ibfk_1` FOREIGN KEY (`moder`) REFERENCES `appuser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `writer`
--

LOCK TABLES `writer` WRITE;
/*!40000 ALTER TABLE `writer` DISABLE KEYS */;
INSERT INTO `writer` VALUES (1,'Andrzej','Sapkowski','Jest absolwentem Uniwersytetu Łódzkiego, z wykształcenia ekonomistą. Karierę literacką zaczynał jako tłumacz, przekładając na język polski opowiadanie Słowa Guru w \"Fantastyce\". Popularność zdobył cyklem opowiadań i pięciotomową sagą o wiedźminie (pierwsze opowiadanie ukazało się w grudniu 1986 w miesięczniku \"Fantastyka\"). Oprócz tego wydał esej o Rycerzach Okrągłego Stołu Świat króla Artura. Maladie, leksykon miłośnika fantasy Rękopis znaleziony w Smoczej Jaskini, poradnik dla osób zaczynających grać w RPG pt. Oko Yrrhedesa, powieści z cyklu o Reinmarze z Bielawy (Trylogia husycka), powieść Żmija, oraz wiele opowiadań i artykułów w czasopismach i zbiorach opowiadań.',1),(2,'Aleksander','Sołżenicyn','Rosyjski pisarz, laureat Nagrody Nobla w dziedzinie literatury za rok 1970, autor trzytomowego Archipelagu GUŁag.',1),(3,'Stephen','King','Napisał ponad pięćdziesiąt książek i wszystkie zyskały status światowych bestsellerów. Znajdują się między nimi: \"Miasteczko Salem\", \"Misery\", \"Dallas ’63\", \"Lśnienie\", czy \"Doktor Sen\". Powieści Kinga doczekały się wielomilionowych nakładów, tłumaczeń na przeszło 30 języków, a na całym świecie można znaleźć ponad 300 milionów egzemplarzy książek z jego nazwiskiem na okładce. Stephen King mieszka w stanie Maine z żoną, powieściopisarką Tabithą King.',1),(4,'Terry','Pratchett','Angielski pisarz. Autor prześmiewczych powieści fantasy dziejących się w Świecie Dysku.\r\nDebiutował jako 13-latek w szkolnej gazetce. Pierwsze opowiadanie sprzedał dwa lata później. Jeszcze jako nastolatek porzuca szkołę i zarabia jako dziennikarz w \"Bucks Free Press\". Pierwszą powieść opublikował w 1971 roku. Dywan dowcipna i przewrotna książka dla młodszego czytelnika zebrała pochlebne recenzje. Jednak pisarstwo traktował jako hobby do chwili stworzenia pierwszej książki z cyklu o Świecie Dysku. The Colour Of Magic (Kolor magii) przyniósł mu wielki rozgłos. The Light Fantastic (Blask fantastyczny) okazał się równie, a może nawet bardziej popularny. Trzecia część, Equal Rites (Równoumagicznienie), była już tak wyczekiwana przez czytelników, że zanim książka została opublikowana, czytano ją w BBC.\r\nPratchett napisał również trylogię dla dzieci Book Of The Nomes (Księgi nomów). Jej bohaterami są małe istoty pozaziemskie uwięzione na naszej planecie i usiłujące z niej zbiec. Planowana jest ekranizacja tego tytułu.\r\nKolejna seria opowiada o przygodach Johnny\'ego Maxwella. Poznajemy go jako niezwykłego 12-latka i towarzyszymy w jego codziennym życiu, które jest lekko pogmatwane i pełne dziwnych zdarzeń.\r\nDwie książki Pratchett napisał wspólnie z innymi autorami: The Unadulterated Cat (Kot w stanie czystym) (1989) z Gray Jolliffe i Good Omens (Dobry omen) (1990) z Neilem Gaimanem.\r\nBył wielokrotnie nagradzany. W 1994 roku otrzymał British Book Awards. W 1998 roku za zasługi dla literatury mianowano go kawalerem Orderu Imperium Brytyjskiego. Jest doktorem honoris causa kilku uniwersytetów i jednym z najbardziej wpływowych twórców fantasy - na podstawie jego powieści powstają gry komputerowe, fabularne, komiksy i filmy.\r\nMieszka z żoną Lyn i córką Rhianną (pisarką i scenarzystką gier komputerowych) w Somerset.',3),(5,'George','R.R. Martin','Pisarz, twórca science fiction i fantasy, zarówno opowiadań jak i powieści, wielokrotny zdobywca nagród Nebula i Hugo oraz wielu innych (World Fantasy Award, Bram Stoker Award, Locus Award). Początkowo publikował pod nazwiskiem pozbawionym dwóch \"R\", które dołączył, gdy zaczęto go mylić z managerem The Beatles. Jego utwory przetłumaczono na 14 języków, w tym polski. Jest również autorem popularnej sagi fantasy Pieśń Lodu i Ognia, na której oparto między innymi grę fabularną A Game of Thrones. Na podstawie jego prac nakręcono kilka filmów i odcinków serii telewizyjnych (Remembering Melody, 1984; Nightflyers, 1987; Sandkings, 1995). George R. R. Martin współpracował także przy tworzeniu różnych projektów telewizyjnych (Strefa mroku, Beauty and the Beast, Doorways, itp.).',5);
/*!40000 ALTER TABLE `writer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-18 12:33:36
