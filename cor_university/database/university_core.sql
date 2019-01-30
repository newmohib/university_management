-- MySQL dump 10.16  Distrib 10.1.34-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: university_core
-- ------------------------------------------------------
-- Server version	10.1.34-MariaDB

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
-- Current Database: `university_core`
--

CREATE DATABASE  IF NOT EXISTS `university_core` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `university_core`;

--
-- Table structure for table `ac_board`
--

DROP TABLE IF EXISTS `ac_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ac_board` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ac_board`
--

LOCK TABLES `ac_board` WRITE;
/*!40000 ALTER TABLE `ac_board` DISABLE KEYS */;
/*!40000 ALTER TABLE `ac_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ac_group`
--

DROP TABLE IF EXISTS `ac_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ac_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ac_group`
--

LOCK TABLES `ac_group` WRITE;
/*!40000 ALTER TABLE `ac_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `ac_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `academic_background`
--

DROP TABLE IF EXISTS `academic_background`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `academic_background` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `academic_background`
--

LOCK TABLES `academic_background` WRITE;
/*!40000 ALTER TABLE `academic_background` DISABLE KEYS */;
/*!40000 ALTER TABLE `academic_background` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admission_apply`
--

DROP TABLE IF EXISTS `admission_apply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admission_apply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `s_f_name` varchar(30) NOT NULL,
  `s_l_name` varchar(30) NOT NULL,
  `fathers_name` varbinary(50) NOT NULL,
  `mothers_name` varbinary(50) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_day` int(2) NOT NULL,
  `birth_month` varchar(10) NOT NULL,
  `birth_year` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `country_id` int(11) NOT NULL,
  `n_id_number` varchar(100) NOT NULL DEFAULT '0',
  `quota` varchar(20) DEFAULT '0',
  `scholarship` tinyint(4) DEFAULT '0',
 -- `birth_place` varchar(45) DEFAULT '0',
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULLDEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `division_id` int(2) NOT NULL,
  `district_id` int(3) NOT NULL,
  `police_station_id` int(10) NOT NULL,
  `post_office_id` int(10) NOT NULL,
  `village_road` varchar(100) NOT NULL,
  `house` varchar(50) NOT NULL,
  `parent_id` int(10) NULL,
  `multistudent_id` int(2) NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,


  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission_apply`
--

LOCK TABLES `admission_apply` WRITE;
/*!40000 ALTER TABLE `admission_apply` DISABLE KEYS */;
/*!40000 ALTER TABLE `admission_apply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `available_seat` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardian`
--

DROP TABLE IF EXISTS `guardian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardian` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(20) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `g_status` varchar(45) NOT NULL DEFAULT '',
  `ocupation` varchar(50) NOT NULL DEFAULT '',
  `monthly_income` int(20) unsigned NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `multi_student` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardian`
--

LOCK TABLES `guardian` WRITE;
/*!40000 ALTER TABLE `guardian` DISABLE KEYS */;
/*!40000 ALTER TABLE `guardian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasing_year`
--

DROP TABLE IF EXISTS `pasing_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pasing_year` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year_name` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasing_year`
--

LOCK TABLES `pasing_year` WRITE;
/*!40000 ALTER TABLE `pasing_year` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasing_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int(11) NULL,
  `user_id` int(11) unsigned NOT NULL,
  `Ucreate` tinyint(1) NOT NULL DEFAULT '0',
  `Uupdate` tinyint(1) NOT NULL DEFAULT '0',
  `Udelete` tinyint(1) NOT NULL DEFAULT '0',
  `Uselect` tinyint(1) NOT NULL DEFAULT '0',
  `Ualter` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role`(id,name,user_id,Ucreate,Uupdate,Udelete,Uselect,Ualter) VALUES (0,'Super Admin',0,1,1,1,1,1),(1,'Admin',1,1,1,1,1,1),(2,'Sub Admin',0,1,1,1,1,1),(3,'Adminestrator',1,0,0,0,1,0),(4,'Sub Adminestrator',0,1,1,1,1,1),(5,'Faculty',0,1,1,1,0,0),(6,'Guest_Faculty',1,0,1,1,0,0),(7,'student',0,1,1,1,0,0),(8,'guardian',1,1,1,1,0,0),(9,'user',0,1,1,1,0,0),(10,'applicant',0,1,1,1,0,1);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `deppertment_id` int(10) unsigned NOT NULL DEFAULT '0',
  `author_id` int(10) unsigned DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(10) unsigned NOT NULL DEFAULT '0',
  `profile_id` int(11) unsigned NOT NULL DEFAULT '0',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `faild_login` int(3) unsigned DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateby` varchar(255) DEFAULT NULL,
  `current_active` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users`(id,username,password,role_id,profile_id,current_active,status) VALUES (0,'admin','admin100',0,0,1,1),(1,'mohib','mohib100',0,0,1,1),(2,'jafor','jafor100',0,0,0,0),(3,'liton','liton100',0,0,0,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-03 17:55:44
