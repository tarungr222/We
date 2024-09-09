-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.19


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema eduritehelathcare
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ eduritehelathcare;
USE eduritehelathcare;

--
-- Table structure for table `eduritehelathcare`.`beds`
--

DROP TABLE IF EXISTS `beds`;
CREATE TABLE `beds` (
  `totalbeds` varchar(50) DEFAULT NULL,
  `available` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduritehelathcare`.`beds`
--

/*!40000 ALTER TABLE `beds` DISABLE KEYS */;
INSERT INTO `beds` (`totalbeds`,`available`,`date`) VALUES 
 ('20','5','2022-09-13 05:56:48'),
 ('40','20','2022-09-15 13:43:10');
/*!40000 ALTER TABLE `beds` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE `doctor` (
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduritehelathcare`.`doctor`
--

/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` (`name`,`phone`,`address`,`username`,`password`,`id`) VALUES 
 ('ravish','9965265252','shimaga','ravi@gmail.com','ravi1234',1),
 ('shivu','8858585585','shimoga','shivu@gmail.com','shivu123',2);
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `name` varchar(50) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduritehelathcare`.`feedback`
--

/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`name`,`description`) VALUES 
 ('ravi','Hospital has good staff');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduritehelathcare`.`login`
--

/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`username`,`password`) VALUES 
 ('admin','password');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`oxygen`
--

DROP TABLE IF EXISTS `oxygen`;
CREATE TABLE `oxygen` (
  `available` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eduritehelathcare`.`oxygen`
--

/*!40000 ALTER TABLE `oxygen` DISABLE KEYS */;
INSERT INTO `oxygen` (`available`,`date`) VALUES 
 ('30','2022-09-01 23:07:01'),
 ('60','2022-09-01 23:07:09');
/*!40000 ALTER TABLE `oxygen` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `name` varchar(50) DEFAULT NULL,
  `diesease` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `weight` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `gardien` varchar(50) DEFAULT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  `joindate` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `eduritehelathcare`.`patient`
--

/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`name`,`diesease`,`gender`,`address`,`height`,`weight`,`age`,`gardien`,`doctor`,`joindate`,`id`,`emailid`) VALUES 
 ('suma','fever','female','shimoga','502','53','23','pavitra','ravish','Thu Aug 19 01:17:18 IST 2021',1000,'ravishkumarkl@gmail.com'),
 ('soumya','skin ','female','Shimoga','5','50','23','brother','meghasrinivas2000@gmail.com','Tue Aug 24 12:06:01 IST 2021',1001,'soumya@gmail.com'),
 ('roopa','fever','female','shimoga','123','45','34','divakar','shivu@gmail.com','Friday 26th of August 2022 03:04:35 AM',1003,'roopa@gmail.com'),
 ('nagesh','shimoga','male','shimoga','5.11','78','30','kumar','ravi@gmail.com','Tuesday 13th of September 2022 12:59:32 AM',1007,'nagesh@gmail.com');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`pharmacy`
--

DROP TABLE IF EXISTS `pharmacy`;
CREATE TABLE `pharmacy` (
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `pid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `eduritehelathcare`.`pharmacy`
--

/*!40000 ALTER TABLE `pharmacy` DISABLE KEYS */;
INSERT INTO `pharmacy` (`name`,`phone`,`username`,`password`,`pid`) VALUES 
 ('Roopa','7733777373','roopa@gmail.com','roopa123','123'),
 ('maya','9993999393','maya@gmail.com','maya123','77447');
/*!40000 ALTER TABLE `pharmacy` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`prescribedmedicine`
--

DROP TABLE IF EXISTS `prescribedmedicine`;
CREATE TABLE `prescribedmedicine` (
  `madicine` varchar(100) DEFAULT NULL,
  `tests` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `patientid` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'pending',
  `totalprice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `eduritehelathcare`.`prescribedmedicine`
--

/*!40000 ALTER TABLE `prescribedmedicine` DISABLE KEYS */;
INSERT INTO `prescribedmedicine` (`madicine`,`tests`,`date`,`patientid`,`status`,`totalprice`) VALUES 
 ('asdf,sdfgs,dghsdg,dfgh\r\nhjdfh\r\nfhdh\r\n','sdfgdsg,dghdf\r\nhdh','Wed Feb 28 01:07:42 IST 2018','1','purchased','3000'),
 ('fgasf','sfgas','Wed Feb 28 01:12:06 IST 2018','1','purchased','2000'),
 ('asfasfas,asdfas,asdfasdf','dsfgdsf,sfgs,sfgsf,sfg','Wed Feb 28 07:32:30 IST 2018','1','pending','2000'),
 ('paracitamal','urine test','Tue Mar 06 07:07:22 IST 2018','6','pending',NULL),
 ('dolo 500','blood test','Thu Jan 09 02:30:00 IST 2020','7','purchased','500'),
 ('paracitamal','blood test','Sun Jul 25 23:14:42 IST 2021','9','purchased','85'),
 ('dolo 500 vicks ','blood test','Mon Jul 26 12:03:00 IST 2021','10','purchased','800'),
 ('dolo 650','blood test','Saturday 27th of August 2022 02:59:29 PM','1003','Purchased','1500'),
 ('new fever','blood test','Saturday 27th of August 2022 03:00:31 PM','1003','Purchased','1500');
/*!40000 ALTER TABLE `prescribedmedicine` ENABLE KEYS */;


--
-- Table structure for table `eduritehelathcare`.`reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE `reception` (
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `eduritehelathcare`.`reception`
--

/*!40000 ALTER TABLE `reception` DISABLE KEYS */;
INSERT INTO `reception` (`name`,`username`,`password`,`id`) VALUES 
 ('vina','vina@gmail.com','',55),
 ('hema','hema@gmail.com','hema123',101),
 ('kavita','kavi@gmail.com','kavi123',102),
 ('ramya','ramya@gmail.com','ramya123',103);
/*!40000 ALTER TABLE `reception` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
