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
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `writer` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `moder` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `writer` (`writer`),
  KEY `genre` (`genre`),
  KEY `moder` (`moder`),
  CONSTRAINT `book_ibfk_1` FOREIGN KEY (`writer`) REFERENCES `writer` (`id`),
  CONSTRAINT `book_ibfk_2` FOREIGN KEY (`genre`) REFERENCES `genre` (`id`),
  CONSTRAINT `book_ibfk_3` FOREIGN KEY (`moder`) REFERENCES `appuser` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'Chrzest Ognia','Andrzej Sapkowski, arcymistrz światowej fantasy, zaprasza do swojego Neverlandu i przedstawia uwielbianą przez czytelników i wychwalaną przez krytykę wiedźmińską sagę!\r\n\r\nOto Geraltowa kompania:\r\n\r\nJASKIER, trubadur w kapelusiku z piórkiem egreta.\r\nStudiował siedem sztuk wyzwolonych,\r\nsłynny po wszystkich dworach i zamtuzach.\r\n„Kłamliwa łajza” i „zachrypnięty bażant”\r\nto najłagodniejsze z określeń, jakim obdarzają go porzucone kochanki.\r\n\r\nCAHIR, czarny rycerz z koszmarów Ciri.\r\nPoszukiwany przez najlepszych szpiegów Cesarstwa Nilfgaardczyk,\r\nktóry dowodzi, że Nilfgaardczykiem wcale nie jest.\r\n\r\nMILVA, trafiająca z dwustu kroków łuczniczka.\r\nPyskata i do słów nieparlamentarnych skora.\r\n\r\nREGIS, cyrulik intelektualista.\r\nNosi się staroświecko i pachnie ziołowo-korzennie.\r\nOsobnik jakby nie z tej bajki.\r\n\r\nPiątka krasnoludów oraz sprytny gnom zwiadowca.',1,1,1),(2,'Ostatnie Życzenie','Później mówiono, że człowiek ów nadszedł od północy, od Bramy Powroźniczej. Nie był stary, ale włosy miał zupełnie białe. Kiedy ściągnął płaszcz, okazało się, że na pasie za plecami ma miecz.\r\n\r\nBiałowłosego przywiodło do miasta królewskie orędzie: trzy tysiące orenów nagrody za odczarowanie nękającej mieszkańców Wyzimy strzygi.\r\n\r\nTakie czasy nastały. Dawniej po lasach jeno wilki wyły, teraz namnożyło się rozmaitego paskudztwa – gdzie spojrzysz, tam upiory, bazyliszki, diaboły, żywiołaki, wiły i utopce plugawe. A i niebacznie uwolniony z amfory dżinn, potrafiący zamienić życie spokojnego miasta w koszmar, się trafi.\r\n\r\nTu nie wystarczą zwykłe czary ani osinowe kołki. Tu trzeba zawodowca.\r\nWIEDŹMINA.\r\nMistrza magii i miecza. Tajemną sztuką wyuczonego, by strzec na świecie moralnej i biologicznej równowagi.',1,1,1),(3,'Archipelag Gułag','Archipelag GUłag monumentalna praca słynnego pisarza i myśliciela Aleksandra Sołżenicyna, poświęcona więzienno-obozowej martyrologii narodu rosyjskiego i obywateli innych republik zSRR i krajów, łączy w sobie elementy powieści, autobiografii, reportażu, wspomnień świadków i uczestników. Dzięki tej książce, opublikowanej w Paryżu w latach 1973-1975, świat poznał prawdę o łagrach i skrywanej przed opinią publiczną części historii zSRR. Archipelag GUłag, wielki akt oskarżenia systemu totalitarnego, panującego w związku Radzieckim, jest nie tylko niezwykłym dokumentem zbrodniczej epoki, lecz także utworem o niepodważalnych walorach literackich.',2,3,3),(4,'Przebudzenie','W niedużej miejscowości w Nowej Anglii, ponad pół wieku temu, na małego chłopca bawiącego się żołnierzykami pada cień. Jamie Morton podnosi głowę i widzi intrygującego mężczyznę, jak się okazuje, nowego pastora. Charles Jacobs wraz ze swoją piękną żoną odmieni miejscowy kościół. Mężczyźni i chłopcy skrycie podkochują się w pani Jacobs; kobiety i dziewczęta – w tym także matka Jamie’go i jego ukochana siostra Claire – tym samym uczuciem darzą wielebnego Jacobsa. Jednak kiedy rodzinę Jacobsów spotyka tragedia, a charyzmatyczny kaznodzieja wyklina Boga i szydzi z wiary, zostaje wygnany przez zszokowanych parafian.',3,2,3),(5,'Para w Ruch','Ku zaskoczeniu Patrycjusza, lorda Vetinariego, w Ankh-Morpork pojawia się nowy wynalazek – wielka i hałaśliwa machina, wykorzystująca potęgę wszystkich czterech żywiołów: ziemi, powietrza, ognia i wody. A że to Ankh-Morpork, już wkrótce ściąga tłumy zachwyconych gapiów; niektórzy wcześniej dostrzegli ducha czasów i przybywają uzbrojeni w notesy i płaszcze przeciwdeszczowe.\r\n\r\nMoist von Lipwig nie należy do miłośników ciężkiej pracy. Oczywiście, kierując Urzędem Pocztowym, Królewskim Bankiem i Mennicą wnosi swój wkład, ale polega on głównie na słowach. A słowa na szczęście nie są zbyt ciężkie i rzadko wymagają smarowania. Jednakże Moist bardzo lubi pozostawać przy życiu, co sprawia, że nowa oferta Vetinariego jest trudna do odrzucenia...',4,1,5);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
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
