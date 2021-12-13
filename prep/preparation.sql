-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: preparation
-- ------------------------------------------------------
-- Server version	5.7.29

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
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `company_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `offered_program` char(10) NOT NULL,
  `offered_discipline` char(10) NOT NULL,
  `offered_opportunity` enum('Placement','Internship','Both') NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'Zeus Corp.','B. Tech.','C.S.E.','Both'),(2,'Zeus Corp.','M. Tech.','C.S.E.','Placement'),(3,'Poseidon Org.','B. Tech.','C.S.E.','Both'),(4,'Poseidon Org.','B. Tech.','E.E.','Both'),(5,'Hades Inc.','B. Tech.','M.E.','Both'),(6,'Hades Inc.','M. Tech.','M.E.','Placement');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_questions`
--

DROP TABLE IF EXISTS `company_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_questions` (
  `company_id` int(10) unsigned NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `opportunity` enum('Placement','Internship') NOT NULL,
  PRIMARY KEY (`company_id`,`question_id`,`opportunity`),
  KEY `question_id` (`question_id`),
  CONSTRAINT `company_questions_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
  CONSTRAINT `company_questions_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_questions`
--

LOCK TABLES `company_questions` WRITE;
/*!40000 ALTER TABLE `company_questions` DISABLE KEYS */;
INSERT INTO `company_questions` VALUES (1,11,'Placement'),(3,11,'Internship'),(1,12,'Internship'),(2,12,'Placement'),(3,12,'Placement'),(4,13,'Placement'),(4,14,'Internship'),(5,15,'Placement'),(5,15,'Internship'),(6,15,'Placement');
/*!40000 ALTER TABLE `company_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interview_experiences`
--

DROP TABLE IF EXISTS `interview_experiences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interview_experiences` (
  `student_user_name` varchar(50) NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `round_number` int(10) unsigned NOT NULL,
  `round_name` varchar(25) DEFAULT NULL,
  `experience` text NOT NULL,
  `e_opportunity` enum('Placement','Internship') NOT NULL,
  `e_year` year(4) NOT NULL,
  PRIMARY KEY (`student_user_name`,`company_id`,`round_number`),
  KEY `company_id` (`company_id`),
  CONSTRAINT `interview_experiences_ibfk_1` FOREIGN KEY (`student_user_name`) REFERENCES `student` (`student_user_name`),
  CONSTRAINT `interview_experiences_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interview_experiences`
--

LOCK TABLES `interview_experiences` WRITE;
/*!40000 ALTER TABLE `interview_experiences` DISABLE KEYS */;
INSERT INTO `interview_experiences` VALUES ('alpha',1,1,'Coding','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Placement',2020),('bravo',2,1,'Aptitude','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Placement',2020);
/*!40000 ALTER TABLE `interview_experiences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `question_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_text` text NOT NULL,
  `question_discipline` char(10) NOT NULL,
  `question_type` varchar(20) NOT NULL,
  `question_year` year(4) NOT NULL,
  `question_viewable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (11,'Do in laughter securing smallest sensible no mr hastened. As perhaps proceed in in brandon of limited unknown greatly. Distrusts fulfilled happiness unwilling as explained of difficult. No landlord of peculiar ladyship attended if contempt ecstatic. Loud wish made on is am as hard. Court so avoid in plate hence. Of received mr breeding concerns peculiar securing landlord. Spot to many it four bred soon well to. Or am promotion in no departure abilities. Whatever landlord yourself at by pleasure of children be.','C.S.E.','Technical',2019,0),(12,'Finished her are its honoured drawings nor. Pretty see mutual thrown all not edward ten. Particular an boisterous up he reasonably frequently. Several any had enjoyed shewing studied two. Up intention remainder sportsmen behaviour ye happiness. Few again any alone style added abode ask. Nay projecting unpleasing boisterous eat discovered solicitude. Own six moments produce elderly pasture far arrival. Hold our year they ten upon. Gentleman contained so intention sweetness in on resolving.','C.S.E.','Coding',2019,0),(13,'Smile spoke total few great had never their too. Amongst moments do in arrived at my replied. Fat weddings servants but man believed prospect. Companions understood is as especially pianoforte connection introduced. Nay newspaper can sportsman are admitting gentleman belonging his. Is oppose no he summer lovers twenty in. Not his difficulty boisterous surrounded bed. Seems folly if in given scale. Sex contented dependent conveying advantage can use.','E.E.','Technical',2019,0),(14,'Smile spoke total few great had never their too. Amongst moments do in arrived at my replied. Fat weddings servants but man believed prospect. Companions understood is as especially pianoforte connection introduced. Nay newspaper can sportsman are admitting gentleman belonging his. Is oppose no he summer lovers twenty in. Not his difficulty boisterous surrounded bed. Seems folly if in given scale. Sex contented dependent conveying advantage can use.','E.E.','Technical',2019,0),(15,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','M.E.','Technical',2019,0);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `student_id` int(10) unsigned NOT NULL,
  `student_user_name` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_program` char(10) NOT NULL,
  `student_discipline` char(10) NOT NULL,
  `student_email` varchar(75) NOT NULL,
  `student_password` char(64) NOT NULL,
  `level` enum('student','admin','super') NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_user_name` (`student_user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (11740001,'alpha','Alpha One','B. Tech.','C.S.E.','alphao@college','8ed3f6ad685b959ead7022518e1af76cd816f8e8ec7ccdda1ed4018e8f2223f8','super'),(11740002,'bravo','Bravo Two','B. Tech.','C.S.E.','bravot@college','f144a6907dc4284d1f9fe6a7d9b9ff53c02c1d07ba68f24d413d7ff7f757a782','admin'),(11740003,'charlie','Charlie Three','B. Tech.','E.E.','charliet@college','b9dd960c1753459a78115d3cb845a57d924b6877e805b08bd01086ccdf34433c','student'),(11740004,'delta','Delta Four','B. Tech.','M.E.','deltaf@college','4f4a9410ffcdf895c4adb880659e9b5c0dd1f23a30790684340b3eaacb045398','student'),(11820001,'echo','Echo Five','M. Tech.','C.S.E.','echof@college','092c79e8f80e559e404bcf660c48f3522b67aba9ff1484b0367e1a4ddef7431d','student'),(11820002,'foxtrot','Foxtrot Six','M. Tech.','E.E.','foxtrots@college','9533327a239046b9fb62ee9b412bcd93a098721f6b4f72095b2612e4eedea38e','student'),(11820003,'golf','Golf Seven','M. Tech.','M.E.','golfs@college','625fe74cad4600b5e8b76a9283333eb79052ae50d6af7f660feb4831d87af5d2','student');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_questions`
--

DROP TABLE IF EXISTS `student_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_questions` (
  `student_user_name` varchar(50) NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`student_user_name`,`question_id`),
  KEY `question_id` (`question_id`),
  CONSTRAINT `student_questions_ibfk_1` FOREIGN KEY (`student_user_name`) REFERENCES `student` (`student_user_name`),
  CONSTRAINT `student_questions_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_questions`
--

LOCK TABLES `student_questions` WRITE;
/*!40000 ALTER TABLE `student_questions` DISABLE KEYS */;
INSERT INTO `student_questions` VALUES ('alpha',11,'solved'),('bravo',12,'marked'),('charlie',13,'solved'),('delta',15,'marked');
/*!40000 ALTER TABLE `student_questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-15  0:19:15
