-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: articlebase
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id_article` int(25) NOT NULL AUTO_INCREMENT,
  `titrearticle` char(250) DEFAULT NULL,
  `contenuarticle` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,' Les fondations solides du BTP','Lorsqu\'il s\'agit de construire un bâtiment, que ce soit une maison, un immeuble ou une structure industrielle, l\'une des étapes les plus cruciales est le gros œuvre. Le gros œuvre représente l\'ensemble des travaux de construction qui permettent d\'ériger les fondations solides sur lesquelles reposera toute la structure. Cet article explore l\'importance du gros œuvre dans le domaine du BTP (Bâtiment et Travaux Publics) et met en avant les différents éléments clés de cette étape essentielle.'),(2,'La précision à la lame','Dans le domaine du BTP (Bâtiment et Travaux Publics), le sciage est une étape essentielle qui permet d\'obtenir des découpes précises et soignées dans divers matériaux de construction tels que le béton, la pierre, le bois et même l\'asphalte. Cette technique de découpe spécialisée offre de nombreux avantages, que ce soit pour la création d\'ouvertures dans les murs, la rénovation de bâtiments existants ou la réalisation de nouveaux projets de construction. Cet article explore l\'importance du sciage dans le secteur du BTP et met en avant les différents aspects clés de cette technique incontournable.\r\n'),(3,'L\'art de percer la matière','Dans le secteur du BTP (Bâtiment et Travaux Publics), le carottage est une technique spécialisée qui permet de réaliser des perforations précises dans différents matériaux de construction tels que le béton, la pierre, l\'asphalte et même l\'acier. Cette méthode de découpe offre de nombreux avantages, que ce soit pour l\'installation de conduits, la réalisation de prélèvements, la création de passages pour les câbles électriques ou la mise en place de fixations. Cet article explore l\'importance du carottage dans le domaine du BTP et met en avant les différents aspects clés de cette technique incontournable.\r\n'),(4,'Abattre pour mieux reconstruire','Dans le domaine du BTP (Bâtiment et Travaux Publics), la démolition est une étape cruciale qui permet de déconstruire des structures existantes pour préparer le terrain à de nouveaux projets de construction. Que ce soit pour rénover un bâtiment obsolète, effectuer des modifications structurelles majeures ou réaliser des travaux de réaménagement urbain, la démolition joue un rôle clé dans la transformation de l\'environnement bâti. Cet article explore l\'importance de la démolition dans le secteur du BTP et met en avant les différents aspects clés de cette activité fondamentale.\r\n\r\n'),(5,'Nettoyer pour mieux construire','Dans le secteur du BTP (Bâtiment et Travaux Publics), le curage est une étape essentielle qui consiste à vider, nettoyer et préparer un bâtiment ou un site avant d\'entamer de nouveaux travaux. Que ce soit pour la rénovation d\'un immeuble, la transformation d\'un espace commercial ou la mise en place d\'un nouveau projet de construction, le curage permet d\'éliminer les matériaux indésirables, les débris et les installations obsolètes. Cet article explore l\'importance du curage dans le domaine du BTP et met en avant les différents aspects clés de cette étape cruciale.');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-30  9:16:51
