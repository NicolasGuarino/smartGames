-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: db_smartgames
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Temporary view structure for view `produtos_xbox`
--

DROP TABLE IF EXISTS `produtos_xbox`;
/*!50001 DROP VIEW IF EXISTS `produtos_xbox`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `produtos_xbox` AS SELECT 
 1 AS `id_produto`,
 1 AS `nome_produto`,
 1 AS `preco`,
 1 AS `marca_modelo`,
 1 AS `foto_produto`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tbl_caracteristicas_console`
--

DROP TABLE IF EXISTS `tbl_caracteristicas_console`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_caracteristicas_console` (
  `id_caracteristicas_console` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `id_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_caracteristicas_console`),
  KEY `id_caracProd_produto_idx` (`id_produto`),
  CONSTRAINT `id_caracProd_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_caracteristicas_console`
--

LOCK TABLES `tbl_caracteristicas_console` WRITE;
/*!40000 ALTER TABLE `tbl_caracteristicas_console` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_caracteristicas_console` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_caracteristicas_jogos`
--

DROP TABLE IF EXISTS `tbl_caracteristicas_jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_caracteristicas_jogos` (
  `id_caracteristicas_jogo` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) NOT NULL,
  `nome_jogo` varchar(100) NOT NULL,
  `id_produto` int(11) NOT NULL,
  PRIMARY KEY (`id_caracteristicas_jogo`),
  KEY `id_caracJogo_produto_idx` (`id_produto`),
  CONSTRAINT `id_caracJogo_produto` FOREIGN KEY (`id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_caracteristicas_jogos`
--

LOCK TABLES `tbl_caracteristicas_jogos` WRITE;
/*!40000 ALTER TABLE `tbl_caracteristicas_jogos` DISABLE KEYS */;
INSERT INTO `tbl_caracteristicas_jogos` VALUES (7,'Namco Bandai','Project Cars 2 - PS4',5),(8,'Bethesda','The Evil Whitin 2 - PS4',2),(9,'Activision','Call of Duty WWII - PS4 (Pré-venda)',3),(10,'Sony','Gran Turismo Sport - PS4',4),(11,'Activision','Call of Duty WWII - Xbox One (Pré-venda)',7),(12,'Activision','Destiny 2 - Xbox One',8),(13,'EA Sports','FIFA 18 em Português - Xbox One',9),(14,'Namco Bandai','Project Cars 2 - Xbox One',10),(15,'Nintendo','Kid Icarus Uprising - 3DS',12),(16,'Nintendo','Pokémon Y - 3DS',13),(17,'Nintendo','Monster Hunter Generations - 3DS',14),(18,'Nintendo','Monster Hunter 3 Ultimate - 3DS',15),(19,'Nintendo','Pokémon Omega Ruby - 3DS',16),(26,'Ubisoft','Rayman Legends Definitive Edition - Switch',21),(27,'EA Sports','FIFA 18 Em Português - Switch',22),(28,'Capcom','Ultra Street Fighter II The Final Challengers - Switch',23),(29,'Namco Bandai','Dragon Ball Xenoverse 2 - Swich',24),(30,'Nintendo','The Legend of Zelda Breath of the Wild - Wiiu',26),(31,'Nintendo','Super Mario Maker - Wiiu',27),(32,'Nintendo','Nintendo Land - Wiiu',28),(33,'Nintendo','Pikimin 3 - Wiiu',29);
/*!40000 ALTER TABLE `tbl_caracteristicas_jogos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (5,'JOGOS'),(6,'CONSOLES');
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cep`
--

DROP TABLE IF EXISTS `tbl_cep`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cep` (
  `id_cep` int(11) NOT NULL AUTO_INCREMENT,
  `cep` varchar(45) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `bairro` varchar(65) NOT NULL,
  `rua` varchar(65) NOT NULL,
  PRIMARY KEY (`id_cep`),
  KEY `id_cep-cidade_idx` (`id_cidade`),
  CONSTRAINT `id_cep-cidade` FOREIGN KEY (`id_cidade`) REFERENCES `tbl_cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cep`
--

LOCK TABLES `tbl_cep` WRITE;
/*!40000 ALTER TABLE `tbl_cep` DISABLE KEYS */;
INSERT INTO `tbl_cep` VALUES (1,'06665-080',1,'COHAB II','Av Luiz Belli'),(2,'06665-072',1,'Centro','Av presidente Vargas');
/*!40000 ALTER TABLE `tbl_cep` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cidade`
--

DROP TABLE IF EXISTS `tbl_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(60) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `id_cidade_estado_idx` (`id_estado`),
  CONSTRAINT `id_cidade_estado` FOREIGN KEY (`id_estado`) REFERENCES `tbl_estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cidade`
--

LOCK TABLES `tbl_cidade` WRITE;
/*!40000 ALTER TABLE `tbl_cidade` DISABLE KEYS */;
INSERT INTO `tbl_cidade` VALUES (1,'Itapevi',1),(2,'Valença',2),(3,'São Paulo',1),(4,'Rio de Janeiro',2),(5,'Cotia',1),(6,'Higienópolis',1);
/*!40000 ALTER TABLE `tbl_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nome_estado` varchar(45) NOT NULL,
  `id_pais` int(11) NOT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `id_estado_pais_idx` (`id_pais`),
  CONSTRAINT `id_estado_pais` FOREIGN KEY (`id_pais`) REFERENCES `tbl_pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado`
--

LOCK TABLES `tbl_estado` WRITE;
/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
INSERT INTO `tbl_estado` VALUES (1,'São Paulo',1),(2,'Rio de Janeiro',1),(3,'Rio Grande do Sul',1);
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fale_conosco`
--

DROP TABLE IF EXISTS `tbl_fale_conosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fale_conosco` (
  `id_fale` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(80) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY (`id_fale`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fale_conosco`
--

LOCK TABLES `tbl_fale_conosco` WRITE;
/*!40000 ALTER TABLE `tbl_fale_conosco` DISABLE KEYS */;
INSERT INTO `tbl_fale_conosco` VALUES (1,'Nicolas Guarino Santana','guarino.nicolas.santana@gmail.com','(11) 97137-8841','awfawgfawgawgfawawdawdawdawfawf');
/*!40000 ALTER TABLE `tbl_fale_conosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_loja_fisica`
--

DROP TABLE IF EXISTS `tbl_loja_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_loja_fisica` (
  `id_loja_fisica` int(11) NOT NULL AUTO_INCREMENT,
  `id_cep` int(11) NOT NULL,
  `nome_loja` varchar(45) NOT NULL,
  `cnpj_loja` varchar(45) NOT NULL,
  `numero_loja` varchar(10) NOT NULL,
  `Ponto de Referencia` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_loja_fisica`),
  UNIQUE KEY `cnpj_loja_UNIQUE` (`cnpj_loja`),
  KEY `id_loja_cep_idx` (`id_cep`),
  CONSTRAINT `id_loja_cep` FOREIGN KEY (`id_cep`) REFERENCES `tbl_cep` (`id_cep`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_loja_fisica`
--

LOCK TABLES `tbl_loja_fisica` WRITE;
/*!40000 ALTER TABLE `tbl_loja_fisica` DISABLE KEYS */;
INSERT INTO `tbl_loja_fisica` VALUES (1,1,'SmartGames','465.458.452-45','157','Proximo ao Centro de Reabilitação');
/*!40000 ALTER TABLE `tbl_loja_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_marca_modelo`
--

DROP TABLE IF EXISTS `tbl_marca_modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_marca_modelo` (
  `id_marca_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `marca_modelo` varchar(70) NOT NULL,
  PRIMARY KEY (`id_marca_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_marca_modelo`
--

LOCK TABLES `tbl_marca_modelo` WRITE;
/*!40000 ALTER TABLE `tbl_marca_modelo` DISABLE KEYS */;
INSERT INTO `tbl_marca_modelo` VALUES (1,'Activision'),(2,'Ubisoft'),(3,'Namco Bandai'),(4,'Nintendo'),(5,'Microsoft'),(6,'Sony'),(7,'EA Sports');
/*!40000 ALTER TABLE `tbl_marca_modelo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pais`
--

DROP TABLE IF EXISTS `tbl_pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pais` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pais`
--

LOCK TABLES `tbl_pais` WRITE;
/*!40000 ALTER TABLE `tbl_pais` DISABLE KEYS */;
INSERT INTO `tbl_pais` VALUES (1,'Brasil');
/*!40000 ALTER TABLE `tbl_pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `id_marca_modelo` int(11) NOT NULL,
  `id_loja_fisica` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_tipo_produto` int(11) NOT NULL,
  `foto_produto` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `lancamento` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_local_produto_idx` (`id_loja_fisica`),
  KEY `id_categoria_produto_idx` (`id_categoria`),
  KEY `id_tipoProd_produto_idx` (`id_tipo_produto`),
  KEY `id_marca_modelo_produto_idx` (`id_marca_modelo`),
  CONSTRAINT `id_categoria_produto` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_local_produto` FOREIGN KEY (`id_loja_fisica`) REFERENCES `tbl_loja_fisica` (`id_loja_fisica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_marca_modelo` FOREIGN KEY (`id_marca_modelo`) REFERENCES `tbl_marca_modelo` (`id_marca_modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_tipoProd_produto` FOREIGN KEY (`id_tipo_produto`) REFERENCES `tbl_tipo_produto` (`id_tipo_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
INSERT INTO `tbl_produto` VALUES (1,'PS4 1TB Slim Glacier White CUH2106A (Sony)',1399.00,6,1,6,1,'ps4.png','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(2,'The Evil Whitin 2 - PS4',169.90,1,1,5,1,'the_evil_within2.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(3,'Call of Duty WWII - PS4 (Pré-venda)',199.90,1,1,5,1,'call_ps4.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(4,'Gran Turismo Sport - PS4',164.90,7,1,5,1,'gran_ps4.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(5,'Project Cars 2 - PS4',199.90,7,1,5,1,'project_ps4.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(6,'Xbox One S 500GB (Microsoft)',1279.90,5,1,6,2,'xbox_one_S.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(7,'Call of Duty WWII - Xbox One (Pré-venda)',199.90,1,1,5,2,'call_xbox.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(8,'Destiny 2 - Xbox One',179.90,1,1,5,2,'destiny_xbox.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(9,'FIFA 18 em Português - Xbox One',199.90,7,1,5,2,'fifa18_xbox.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(10,'Project Cars 2 - Xbox One',199.90,3,1,5,2,'project_xbox.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(11,'New Nintendo 2DS XL - Nintendo',849.90,4,1,6,3,'nintendo.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(12,'Kid Icarus Uprising - 3DS',199.90,4,1,5,3,'kid_nintendo.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',11),(13,'Pokémon Y - 3DS',124.90,4,1,5,3,'pokemonY_nintendo.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(14,'Monster Hunter Generations - 3DS',229.90,4,1,5,3,'monsterGen.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(15,'Monster Hunter 3 Ultimate - 3DS',99.90,4,1,5,3,'monster3.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(16,'Pokémon Omega Ruby - 3DS',139.90,4,1,5,3,'pokeOmega.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(20,'Nintendo Switch 32GB Neon + Mario + Rabbids Kingdom Battle (Nintendo)',1799.90,4,1,6,4,'switch.png','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(21,'Rayman Legends Definitive Edition - Switch',199.90,4,1,5,4,'rayman.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(22,'FIFA 18 Em Português - Switch',249.90,7,1,5,4,'fifa18_switch.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(23,'Ultra Street Fighter II The Final Challengers - Switch',219.90,3,1,5,4,'street.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(24,'Dragon Ball Xenoverse 2 - Swich',219.90,4,1,5,4,'dragon.png','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(25,'Wiiu Deluxe 32GB Set Bundle Mario Kart 8',1299.90,4,1,6,5,'wiiu.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(26,'The Legend of Zelda Breath of the Wild - Wiiu',249.90,4,1,5,5,'zelda.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(27,'Super Mario Maker - Wiiu',239.90,4,1,5,5,'mario.png','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1),(28,'Nintendo Land - Wiiu',29.90,4,1,5,5,'land.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',0),(29,'Pikimin 3 - Wiiu',99.90,4,1,5,5,'pikmin.jpg','Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos.',1);
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sobre_nos`
--

DROP TABLE IF EXISTS `tbl_sobre_nos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sobre_nos` (
  `id_sobre` int(11) NOT NULL AUTO_INCREMENT,
  `texto_sobre` text NOT NULL,
  `imagem_sobre` varchar(250) NOT NULL,
  PRIMARY KEY (`id_sobre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sobre_nos`
--

LOCK TABLES `tbl_sobre_nos` WRITE;
/*!40000 ALTER TABLE `tbl_sobre_nos` DISABLE KEYS */;
INSERT INTO `tbl_sobre_nos` VALUES (1,'Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. Nunc tincidunt ante vitae massa. Duis ante orci, molestie vitae, vehicula venenatis, tincidunt ac, pede. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Etiam commodo dui eget wisi. Donec iaculis gravida nulla. Donec quis nibh at felis congue commodo. Etiam bibendum elit eget erat. Morbi a metus. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Nullam sapien sem, ornare ac, nonummy non, lobortis a, enim. Nunc tincidunt ante vitae massa. Duis ante orci, molestie vitae, vehicula venenatis, tincidunt ac, pede. Nulla accumsan, elit sit amet varius semper, nulla mauris mollis quam, tempor suscipit diam nulla vel leo. Etiam commodo dui eget wisi. Donec iaculis gravida nulla.','sobrenos.jpg');
/*!40000 ALTER TABLE `tbl_sobre_nos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_produto`
--

DROP TABLE IF EXISTS `tbl_tipo_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_produto` (
  `id_tipo_produto` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_produto` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_produto`
--

LOCK TABLES `tbl_tipo_produto` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_produto` DISABLE KEYS */;
INSERT INTO `tbl_tipo_produto` VALUES (1,'PS4'),(2,'Xbox One'),(3,'Nintendo 3DS'),(4,'Switch'),(5,'Nintendo Wiiu');
/*!40000 ALTER TABLE `tbl_tipo_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(120) NOT NULL,
  `celular_usuario` varchar(20) NOT NULL,
  `dt_nasc` date NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `cpf_usuario` varchar(15) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (1,'awdawd','wadawd@gmail.com','(12) 12312-4124','1212-12-12','41241214124','212.131.241-24'),(2,'Nicolas Guarino Santana','guarino.nicolas.santana@gmail.com','(11) 97137-8841','2000-07-24','123456','46595346850');
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `view_produto_detalhes`
--

DROP TABLE IF EXISTS `view_produto_detalhes`;
/*!50001 DROP VIEW IF EXISTS `view_produto_detalhes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_produto_detalhes` AS SELECT 
 1 AS `id_produto`,
 1 AS `nome_produto`,
 1 AS `preco`,
 1 AS `descricao`,
 1 AS `marca_modelo`,
 1 AS `foto_produto`,
 1 AS `nome_loja`,
 1 AS `numero_loja`,
 1 AS `cep`,
 1 AS `rua`,
 1 AS `nome_cidade`,
 1 AS `nome_estado`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `view_produtos_xbox`
--

DROP TABLE IF EXISTS `view_produtos_xbox`;
/*!50001 DROP VIEW IF EXISTS `view_produtos_xbox`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `view_produtos_xbox` AS SELECT 
 1 AS `id_produto`,
 1 AS `nome_produto`,
 1 AS `preco`,
 1 AS `marca_modelo`,
 1 AS `foto_produto`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `produtos_xbox`
--

/*!50001 DROP VIEW IF EXISTS `produtos_xbox`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `produtos_xbox` AS select `produto`.`id_produto` AS `id_produto`,`produto`.`nome_produto` AS `nome_produto`,`produto`.`preco` AS `preco`,`marcamodelo`.`marca_modelo` AS `marca_modelo`,`produto`.`foto_produto` AS `foto_produto` from (`tbl_produto` `produto` join `tbl_marca_modelo` `marcamodelo` on((`produto`.`id_marca_modelo` = `marcamodelo`.`id_marca_modelo`))) where (`produto`.`id_tipo_produto` = 2) order by rand() */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_produto_detalhes`
--

/*!50001 DROP VIEW IF EXISTS `view_produto_detalhes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_produto_detalhes` AS select `produto`.`id_produto` AS `id_produto`,`produto`.`nome_produto` AS `nome_produto`,`produto`.`preco` AS `preco`,`produto`.`descricao` AS `descricao`,`marcamodelo`.`marca_modelo` AS `marca_modelo`,`produto`.`foto_produto` AS `foto_produto`,`loja`.`nome_loja` AS `nome_loja`,`loja`.`numero_loja` AS `numero_loja`,`cep`.`cep` AS `cep`,`cep`.`rua` AS `rua`,`cidade`.`nome_cidade` AS `nome_cidade`,`estado`.`nome_estado` AS `nome_estado` from (((((`tbl_produto` `produto` join `tbl_marca_modelo` `marcamodelo` on((`produto`.`id_marca_modelo` = `marcamodelo`.`id_marca_modelo`))) join `tbl_loja_fisica` `loja` on((`loja`.`id_loja_fisica` = `produto`.`id_loja_fisica`))) join `tbl_cep` `cep` on((`cep`.`id_cep` = `loja`.`id_loja_fisica`))) join `tbl_cidade` `cidade` on((`cidade`.`id_cidade` = `cep`.`id_cidade`))) join `tbl_estado` `estado` on((`estado`.`id_estado` = `cidade`.`id_cidade`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_produtos_xbox`
--

/*!50001 DROP VIEW IF EXISTS `view_produtos_xbox`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_produtos_xbox` AS select `produto`.`id_produto` AS `id_produto`,`produto`.`nome_produto` AS `nome_produto`,`produto`.`preco` AS `preco`,`marcamodelo`.`marca_modelo` AS `marca_modelo`,`produto`.`foto_produto` AS `foto_produto` from (`tbl_produto` `produto` join `tbl_marca_modelo` `marcamodelo` on((`produto`.`id_marca_modelo` = `marcamodelo`.`id_marca_modelo`))) order by rand() */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-26 11:21:34
