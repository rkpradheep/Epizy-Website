-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.epizy.com
-- Generation Time: Apr 02, 2024 at 01:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26572955_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`Name`, `Email`, `Password`) VALUES
('Pradheep', 'pradheep.rk.it@gmail.com', '123'),
('palani', 'palani@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `date` varchar(40) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `visited` int(11) NOT NULL,
  `app` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`date`, `count`, `visited`, `app`) VALUES
('31/3/2024', NULL, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `link` longtext NOT NULL,
  `format` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `ATCD` varchar(100) DEFAULT NULL,
  `WEB_TECH` varchar(100) DEFAULT NULL,
  `EMBEDDED` varchar(100) DEFAULT NULL,
  `COMPUTER_NETWORK` varchar(100) DEFAULT NULL,
  `DISTRIBUTED_SYSTEM` varchar(100) DEFAULT NULL,
  `WT_LAB` varchar(100) DEFAULT NULL,
  `CN_LAB` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`ATCD`, `WEB_TECH`, `EMBEDDED`, `COMPUTER_NETWORK`, `DISTRIBUTED_SYSTEM`, `WT_LAB`, `CN_LAB`) VALUES
('https://meet.google.com/bbz-catx-rif', 'https://meet.google.com/bbz-catx-rif', 'https://meet.google.com/bbz-catx-rif', 'https://meet.google.com/bbz-catx-rif', 'https://meet.google.com/bbz-catx-rif', 'https://meet.google.com/bbz-catx-rif', 'https://meet.google.com/bbz-catx-rif');

-- --------------------------------------------------------

--
-- Table structure for table `table100`
--

CREATE TABLE `table100` (
  `name` varchar(100) NOT NULL,
  `link` varchar(1000) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `ftype` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table100`
--

INSERT INTO `table100` (`name`, `link`, `fname`, `ftype`) VALUES
('update', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(update)go.apk?alt=media', 'go.apk', 'application/vnd.android.package-archive'),
('971', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(971)IMG-20210122-WA0015.jpg?alt=media', 'IMG-20210122-WA0015.jpg', 'image/jpeg'),
('52000', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(52000)IMG-20210114-WA0011.jpg?alt=media', 'IMG-20210114-WA0011.jpg', 'image/jpeg'),
('52000', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(52000)IMG-20210114-WA0010.jpg?alt=media', 'IMG-20210114-WA0010.jpg', 'image/jpeg'),
('52000', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(52000)IMG-20210114-WA0009.jpg?alt=media', 'IMG-20210114-WA0009.jpg', 'image/jpeg'),
('58167', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(58167)WhatsApp Image 2021-01-13 at 11.23.44 AM.jpeg?alt=media', 'WhatsApp Image 2021-01-13 at 11.23.44 AM.jpeg', 'image/jpeg'),
('y', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(y)podra 1-1.pdf?alt=media', 'podra 1-1.pdf', 'application/pdf'),
('y', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(y)download (1).jpeg?alt=media', 'download (1).jpeg', 'image/jpeg'),
('9701', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(9701)Screenshot (2).png?alt=media', 'Screenshot (2).png', 'image/png'),
('final', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(final)finall.apk?alt=media', 'finall.apk', 'application/vnd.android.package-archive'),
('desktop', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(desktop)RKP-windows.zip?alt=media', 'RKP-windows.zip', 'application/zip'),
('cns', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(cns)security-lab-manual-autonomous(1) (6).docx?alt=media', 'security-lab-manual-autonomous(1) (6).docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('21', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Screenshot (15).png?alt=media', 'Screenshot (15).png', 'image/png'),
('mini', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(mini)new.docx?alt=media', 'new.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('mini', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(mini)mini project review template.pptx?alt=media', 'mini project review template.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('train', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(train)Framework Training codebase setup and guidelines (1).pdf?alt=media', 'Framework Training codebase setup and guidelines (1).pdf', 'application/pdf'),
('info', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/pradheep.zip?alt=media', 'pradheep.zip', 'application/x-zip-compressed'),
('dbms', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(dbms)SQL SERVER WORKSHOP for Devs.docx?alt=media', 'SQL SERVER WORKSHOP for Devs.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('t', NULL, 't.txt', NULL),
('1', NULL, '1.txt', NULL),
('assignment', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(assignment)C#_Lab Assignments Case Study-EMS.docx?alt=media', 'C', ''),
('1000', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/IMG_20211028_072642_1.jpg?alt=media', 'IMG_20211028_072642_1.jpg', 'image/jpeg'),
('cs', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(cs)C#_Lab Assignments Case Study-EMS.docx?alt=media', 'C', ''),
('assignment', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(assignment)Assignment.docx?alt=media', 'Assignment.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('6', NULL, '6.txt', NULL),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)FrameWork Session 5.pdf?alt=media', 'FrameWork Session 5.pdf', 'application/pdf'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)Framework Session 8.pptx?alt=media', 'Framework Session 8.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)Framework Session 7.pptx?alt=media', 'Framework Session 7.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)Framework Session 6.pdf?alt=media', 'Framework Session 6.pdf', 'application/pdf'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)FrameWork Session 2.pdf?alt=media', 'FrameWork Session 2.pdf', 'application/pdf'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)FrameWork Session 3.pdf?alt=media', 'FrameWork Session 3.pdf', 'application/pdf'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)FrameWork Session 4.pdf?alt=media', 'FrameWork Session 4.pdf', 'application/pdf'),
('odessa', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(odessa)Framework Session 1.pdf?alt=media', 'Framework Session 1.pdf', 'application/pdf'),
('resume', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/pradheep-resume(zoho).pdf?alt=media', 'pradheep-resume(zoho).pdf', 'application/pdf'),
('resume', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/pradheep-resume(zoho).docx?alt=media', 'pradheep-resume(zoho).docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('sample', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(sample)Employee Management FS.docx?alt=media', 'Employee Management FS.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('rdv', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/(rdv)IMG_20210820_200933.jpg?alt=media', 'IMG_20210820_200933.jpg', 'image/jpeg'),
('23', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/WIN_20210903_14_47_45_Pro.jpg?alt=media', 'WIN_20210903_14_47_45_Pro.jpg', 'image/jpeg'),
('23', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/WIN_20210903_14_47_47_Pro.jpg?alt=media', 'WIN_20210903_14_47_47_Pro.jpg', 'image/jpeg'),
('23', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/WIN_20210903_14_47_51_Pro.jpg?alt=media', 'WIN_20210903_14_47_51_Pro.jpg', 'image/jpeg'),
('55', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/RFID.docx?alt=media', 'RFID.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('1234', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/index-1.html?alt=media', 'index-1.html', 'text/html'),
('prad', '', '2a-chunk.html', 'localserver'),
('prad', '', '2a-chunk.html', 'localserver'),
('ll', NULL, 'll.txt', NULL),
('info1', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/phone_website-master.zip?alt=media', 'phone_website-master.zip', 'application/zip'),
('12', NULL, '12.txt', NULL),
('22', NULL, '22.txt', NULL),
('S', NULL, 'S.txt', NULL),
('S', NULL, 'S.txt', NULL),
('Chrome', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Chrome_base.zip?alt=media', 'Chrome_base.zip', 'application/zip'),
('1', NULL, '1.txt', NULL),
('C', NULL, 'C.txt', NULL),
('D', NULL, 'D.txt', NULL),
('Framework', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Session1to8.pdf?alt=media', 'Session1to8.pdf', 'application/pdf'),
('server', NULL, 'server.txt', NULL),
('Users', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/rk-pradheep-default-rtdb-export.json?alt=media', 'rk-pradheep-default-rtdb-export.json', 'application/json'),
('elon', NULL, 'elon.txt', NULL),
('sugu', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/2120_ben_resume.zip?alt=media', '2120_ben_resume.zip', 'application/x-zip-compressed'),
('jealous', NULL, 'jealous.txt', NULL),
('I', NULL, 'I.txt', NULL),
('P', NULL, 'P.txt', NULL),
('I', NULL, 'I.txt', NULL),
('ngrok', NULL, 'ngrok.txt', NULL),
('S', NULL, 'S.txt', NULL),
('P', NULL, 'P.txt', NULL),
('k', NULL, 'k.txt', NULL),
('krishna', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/personal_blog.zip?alt=media', 'personal_blog.zip', 'application/x-zip-compressed'),
('L', NULL, 'L.txt', NULL),
('jar', NULL, 'jar.txt', NULL),
('ngrok', NULL, 'ngrok.txt', NULL),
('12', NULL, '12.txt', NULL),
('12', NULL, '12.txt', NULL),
('key', NULL, 'key.txt', NULL),
('risk', NULL, 'risk.txt', NULL),
('java', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Class1.java?alt=media', 'Class1.java', ''),
('DAA', NULL, 'DAA.txt', NULL),
('sound test', NULL, 'sound test.txt', NULL),
('infotix', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/181001064 Pradheep R K.pptx?alt=media', '181001064 Pradheep R K.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('bd', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/IMG_20220110_080128.jpg?alt=media', 'IMG_20220110_080128.jpg', 'image/jpeg'),
('movie', NULL, 'movie.txt', NULL),
('java', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Class2.java?alt=media', 'Class2.java', ''),
('1', NULL, '1.txt', NULL),
('T', NULL, 'T.txt', NULL),
('', NULL, '.txt', NULL),
('11', NULL, '11.txt', NULL),
('1', NULL, '1.txt', NULL),
('1', NULL, '1.txt', NULL),
('2', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Screenshot from 2024-03-21 12-09-12.png?alt=media', 'Screenshot from 2024-03-21 12-09-12.png', 'image/png'),
('catalyst', NULL, 'catalyst.txt', NULL),
('movies', NULL, 'movies.txt', NULL),
('api', NULL, 'api.txt', NULL),
('ppt', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/MOVIE_RECOMMEDATION_SYSTEM.pptx?alt=media', 'MOVIE_RECOMMEDATION_SYSTEM.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('111', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/IMG_20220314_103328.jpg?alt=media', 'IMG_20220314_103328.jpg', 'image/jpeg'),
('zoho', NULL, 'zoho.txt', NULL),
('project', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Second Review ppt (1).pptx?alt=media', 'Second Review ppt (1).pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('Dummy', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/IMG_1237.jpeg?alt=media', 'IMG_1237.jpeg', 'image/jpeg'),
('project', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Skill Based Course Recommendation System_Review 2.pptx?alt=media', 'Skill Based Course Recommendation System_Review 2.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('project1', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Skill Based Course Recommendation System_Review 2.pptx?alt=media', 'Skill Based Course Recommendation System_Review 2.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation'),
('', NULL, '.txt', NULL),
('code', NULL, 'code.txt', NULL),
('G', NULL, 'G.txt', NULL),
('Cus', NULL, 'Cus.txt', NULL),
('pp', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Skill Based Recommendation system (2).docx?alt=media', 'Skill Based Recommendation system (2).docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'),
('11', NULL, '11.txt', NULL),
('11', NULL, '11.txt', NULL),
('R', NULL, 'R.txt', NULL),
('linux', NULL, 'linux.txt', NULL),
('ssl', NULL, 'ssl.txt', NULL),
('1', NULL, '1.txt', NULL),
('', NULL, '.txt', NULL),
('G', NULL, 'G.txt', NULL),
('a', NULL, 'a.txt', NULL),
('V', NULL, 'V.txt', NULL),
('http', NULL, 'http.txt', NULL),
('http', NULL, 'http.txt', NULL),
('ws', NULL, 'ws.txt', NULL),
('sastra', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/printIndex.pdf?alt=media', 'printIndex.pdf', 'application/pdf'),
('HTML', NULL, 'HTML.txt', NULL),
('101', NULL, '101.txt', NULL),
('ref', NULL, 'ref.txt', NULL),
('reff', NULL, 'reff.txt', NULL),
('call', NULL, 'call.txt', NULL),
('l', NULL, 'l.txt', NULL),
('L', NULL, 'L.txt', NULL),
('', NULL, '.txt', NULL),
('', NULL, '.txt', NULL),
('L', NULL, 'L.txt', NULL),
('p', NULL, 'p.txt', NULL),
('', NULL, '.txt', NULL),
('e', NULL, 'e.txt', NULL),
('e', NULL, 'e.txt', NULL),
('res', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Screenshot from 2023-09-10 12-55-21.png?alt=media', 'Screenshot from 2023-09-10 12-55-21.png', 'image/png'),
('res', 'https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/Screenshot from 2023-09-10 12-53-48.png?alt=media', 'Screenshot from 2023-09-10 12-53-48.png', 'image/png'),
('iv', NULL, 'iv.txt', NULL),
('iv', NULL, 'iv.txt', NULL),
('1', NULL, '1.txt', NULL),
('Z', NULL, 'Z.txt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `date` varchar(40) NOT NULL,
  `tim` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`date`, `tim`) VALUES
('31/3/2024', '03:55 PMpppAndroid 10;Kppp'),
('31/3/2024', '04:14 PMpppAndroid 10;Kppp'),
('31/3/2024', '04:29 PMpppAndroid 10;Kppp'),
('31/3/2024', '04:01 PMpppAndroid 10;Kppp');

-- --------------------------------------------------------

--
-- Table structure for table `tomcat`
--

CREATE TABLE `tomcat` (
  `ip` varchar(200) NOT NULL,
  `token` text NOT NULL,
  `expiry_time` bigint(20) NOT NULL,
  `refresh_token` text NOT NULL,
  `refresh_token_expiry_time` bigint(20) NOT NULL,
  `client_secret` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tomcat`
--

INSERT INTO `tomcat` (`ip`, `token`, `expiry_time`, `refresh_token`, `refresh_token_expiry_time`, `client_secret`) VALUES
('34.42.108.54', 'ya29.a0Ad52N38i0PlxTb_uHjwONaJVI63lO8_EdxRhp4QkRBlYVEuxASLZJKmruooKg3gqOjkpsnJiEudoRvlHCs5KIvspvnPDg9zmxM_XW20fLnOHo9M63x-VKGqneOoIrVRVRKNVmF7M-89jUAT3Mk0pFJuJ8_pYvs_rYls4CQaCgYKAYESARISFQHGX2MifqNiwjvgKMqUOf4b9ZdeDw0173', 1711549427, '1//03bzbheZifnZ-CgYIARAAGAMSNwF-L9IrnbxE6poe95TvLrNbqg36CFQyVH07cSYPViEHYhIGGVhABOU7dE6u5RngKLSbOlVDc48', 1711653114, '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');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;