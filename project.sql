-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 12:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT 0,
  `faculty_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `gender`, `phone`, `password`, `email_status`, `faculty_status`) VALUES
(4, 'Chirag Gupta', 'chirag@gmail.com', 'Male', '21312', '$2y$10$HWTj863rtpOARrhsprwJrOi2zUbjh0C4VibOHFdSu3J0s5tKO.SLm', 1, 1),
(6, 'Ayush Rawat', 'ayush@gmail.com', 'Male', '3141', '$2y$10$xsROYGdZBaEoORth87TcYuOp8IMQaV5Hi.NiFa7T3gZky34/WGQpe', 0, 0),
(7, 'Vikrant Tanwar', 'viktanwar@gmail.com', 'Male', '213123', '$2y$10$/lcqwmyMZRcXnSXu4pH7FuRs6xmSunYFIlxWahPe8NNmUPaIsg.cS', 0, 0),
(8, 'Vikrant Tanwar', 'viktanwar1@gmail.com', 'Male', '21312', '$2y$10$EWZtbQxYpnunGZjuMDePPuPd2jRVOnr3vVaikdkpLJizFavWdl7I2', 0, 0),
(9, 'Admin', 'admin@admin.com', 'Male', '2131234235', '$2y$10$eP9gloIEKMLCJ1UnabZ.jeQU.fzSBYaIff0pBGPT8efxdYCwtauXK', 0, 0),
(10, 'Chirag', 'chirag1@gmail.com', 'Male', '2131', '$2y$10$XeXFP4fegOl4M.SrjRwoaOr4SdCSsT7FmO4J.k2wbIFc8cfRWth56', 0, 0),
(11, 'Tushar Pokhriyal', 'tusharpokhriyal@gmail.com', 'Male', '8826406226', '$2y$10$38333shMmq/oPSq4G2zTjezqEeFSJLo8doRz8Vees2kmwoAtrriyq', 0, 0),
(12, 'Raghav Verma', 'raghavverma9560836617@gmail.com', 'Male', '7428053326', '$2y$10$ozji21bITAOC0H4lXLO8S.I28ONVyH06ez9OcVXv5rQtR/brZvVyy', 0, 0),
(13, 'Aman', 'amanban@gmail.com', 'Male', '7303327069', '$2y$10$QIXHi1sT7HpmDn./8nNjausKQ5elVDmTnCTB5RVB4IkAnMS9z7M8G', 0, 0),
(14, 'Aman', 'amanban@gmail.com', 'Male', '7303327069', '$2y$10$M/VFueZ0QzkA9B3Dpvl1Y.wYpNCgCRbEO4piL10c5JPPf9Qfybvqm', 0, 0),
(15, 'Rahul', 'dileepverma4000@gmail.com', 'Male', '9599421032', '$2y$10$Abiuenxizs8QP.s3jviq.OVFNlI94eYcKspxkLHP8H1vbNERgc/Qq', 0, 0),
(16, 'Vikr', 'vikr@gmail.com', 'Female', '9876855422', '$2y$10$f/4KDVfawDGVlmzKtlXILOnuyiIsTmH6zLkaG.jSD1CQ1U.xG0Jcq', 0, 0),
(17, 'Chirag', 'chirag12@gmail.com', 'Female', '12341234', '$2y$10$WE0e5i1cTw0RP3FWhXGm4ebQ2xBl1aY/79tVNwW04YZ1vyl.9gUuu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('558973f4389ac', '558973f462e61'),
('558973f4c46f2', '558973f4d4abe'),
('558973f51600d', '558973f526fc5'),
('558973f55d269', '558973f57af07'),
('558973f5abb1a', '558973f5e764a'),
('5589751a63091', '5589751a81bf4'),
('5589751ad32b8', '5589751adbdbd'),
('5589751b304ef', '5589751b3b04d'),
('5589751b749c9', '5589751b9a98c'),
('625e7d4c17e5f', '625e7d4c18263'),
('625e7d4c18db8', '625e7d4c18f5f'),
('625e7d4c1997c', '625e7d4c19d2c'),
('625e7d4c1a662', '625e7d4c1a741'),
('625e7d4c1ac24', '625e7d4c1ad66'),
('625e7e3fb7d42', '625e7e3fb85ec'),
('625e7e3fb9ad3', '625e7e3fb9f02'),
('625e7e3fba752', '625e7e3fba858'),
('625e7e3fbadfc', '625e7e3fbaf10'),
('625e7f8913766', '625e7f8913c3a'),
('625e7f891461a', '625e7f89148ba'),
('625e7f89152b3', '625e7f89153fd'),
('625e7f8915ddb', '625e7f8915ef4'),
('625e7f89166e3', '625e7f8916802'),
('625e7f8916d06', '625e7f8916ebe'),
('625e7f89175c8', '625e7f89176d0'),
('625e7f8918005', '625e7f891818e'),
('625e7f891880c', '625e7f891891b'),
('625e7f8918e03', '625e7f8918f0a'),
('625e80325c2e8', '625e80325d15f'),
('625e80325dcd2', '625e80325dede'),
('625e80325e7f7', '625e80325e938'),
('625e80325ef1f', '625e80325f0b2'),
('625e80325f679', '625e80325f7df'),
('625e803260103', '625e803260225'),
('625e80326103d', '625e803261462'),
('625e8032619f5', '625e803261afb'),
('625e803261fb8', '625e8032620fa'),
('625e8032625bc', '625e803262715'),
('625e812f8e770', '625e812f8f0a5'),
('625e812f8fa2f', '625e812f8fbbc'),
('625e812f902df', '625e812f9044e'),
('625e812f90aa9', '625e812f91111'),
('625e812f917f6', '625e812f918ff'),
('625e812f91d7e', '625e812f91e71'),
('625e812f925b6', '625e812f92692'),
('625e812f92be0', '625e812f92cac'),
('625e812f93044', '625e812f9310a'),
('625e812f935dc', '625e812f937d2'),
('625e812f93eed', '625e812f94067'),
('625e812f94744', '625e812f9483b'),
('625e812f94d58', '625e812f94e71'),
('625e812f9530a', '625e812f95408'),
('625e812f958ee', '625e812f959f8'),
('625e812f96e7e', '625e812f96f5a'),
('625e812f97421', '625e812f97513'),
('625e812f978d4', '625e812f979ad'),
('625e812f97d9a', '625e812f97e5c'),
('625e812f981e8', '625e812f98281');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('55846be776610', 'testing', 'sunnygkp10@gmail.com', 'testing', 'testing stART', '2015-06-19', '09:22:15pm'),
('5584ddd0da0ab', 'netcamp', 'sunnygkp10@gmail.com', 'feedback', ';mLBLB', '2015-06-20', '05:28:16am'),
('558510a8a1234', 'sunnygkp10', 'sunnygkp10@gmail.com', 'dl;dsnklfn', 'fmdsfld fdj', '2015-06-20', '09:05:12am'),
('5585509097ae2', 'sunny', 'sunnygkp10@gmail.com', 'kcsncsk', 'l.mdsavn', '2015-06-20', '01:37:52pm'),
('5586ee27af2c9', 'vikas', 'vikas@gmail.com', 'trial feedback', 'triaal feedbak', '2015-06-21', '07:02:31pm'),
('5589858b6c43b', 'nik', 'nik1@gmail.com', 'good', 'good site', '2015-06-23', '06:12:59pm'),
('6261686c7f851', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:21:32pm'),
('626168b5b03d3', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:22:45pm'),
('626168e703a31', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:23:35pm'),
('62616904a3585', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:24:04pm'),
('62616bb44824b', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:35:32pm'),
('62616bccb7b5f', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:35:56pm'),
('62616bd881e44', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:36:08pm'),
('62616c182d5e1', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:37:12pm'),
('62616c260b0f7', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:37:26pm'),
('62616c2f98b51', '', 'chirag@gmail.com', '', '', '2022-04-21', '04:37:35pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('sunnygkp10@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 09:31:26'),
('avantika420@gmail.com', '558921841f1ec', 4, 2, 2, 0, '2015-06-23 14:33:04'),
('avantika420@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 14:49:39'),
('sunnygkp10@gmail.com', '5589741f9ed52', 4, 5, 3, 2, '2015-06-23 15:07:16'),
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('sunnygkp10@gmail.com', '5589222f16b93', 1, 2, 1, 1, '2015-06-24 03:22:38'),
('chirag.webdeveloper123@gmail.com', '558922ec03021', 1, 2, 1, 1, '2022-03-31 18:19:16'),
('chirag.webdeveloper123@gmail.com', '55897338a6659', -1, 1, 0, 1, '2022-04-03 10:09:25'),
('admin@admin.com', '55897338a6659', -2, 5, 1, 4, '2022-04-13 05:30:53'),
('chirag.webdeveloper123@gmail.com', '5589222f16b93', 4, 2, 2, 0, '2022-04-19 08:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('558973f4389ac', 'containing root file-system required during bootup', '558973f462e44'),
('558973f4389ac', ' Contains only scripts to be executed during bootup', '558973f462e56'),
('558973f4389ac', ' Contains root-file system and drivers required to be preloaded during bootup', '558973f462e61'),
('558973f4389ac', 'None of the above', '558973f462e6b'),
('558973f4c46f2', 'Kernel', '558973f4d4abe'),
('558973f4c46f2', 'Shell', '558973f4d4acf'),
('558973f4c46f2', 'Commands', '558973f4d4ad9'),
('558973f4c46f2', 'Script', '558973f4d4ae3'),
('558973f51600d', 'Boot Loading', '558973f526f9d'),
('558973f51600d', ' Boot Record', '558973f526fb9'),
('558973f51600d', ' Boot Strapping', '558973f526fc5'),
('558973f51600d', ' Booting', '558973f526fce'),
('558973f55d269', ' Quick boot', '558973f57aef1'),
('558973f55d269', 'Cold boot', '558973f57af07'),
('558973f55d269', ' Hot boot', '558973f57af17'),
('558973f55d269', ' Fast boot', '558973f57af27'),
('558973f5abb1a', 'bash', '558973f5e7623'),
('558973f5abb1a', ' Csh', '558973f5e7636'),
('558973f5abb1a', ' ksh', '558973f5e7640'),
('558973f5abb1a', ' sh', '558973f5e764a'),
('5589751a63091', 'q', '5589751a81bd6'),
('5589751a63091', 'wq', '5589751a81be8'),
('5589751a63091', ' both (a) and (b)', '5589751a81bf4'),
('5589751a63091', ' none of the mentioned', '5589751a81bfd'),
('5589751ad32b8', ' moves screen down one page', '5589751adbdbd'),
('5589751ad32b8', 'moves screen up one page', '5589751adbdce'),
('5589751ad32b8', 'moves screen up one line', '5589751adbdd8'),
('5589751ad32b8', ' moves screen down one line', '5589751adbde2'),
('5589751b304ef', ' yy', '5589751b3b04d'),
('5589751b304ef', 'yw', '5589751b3b05e'),
('5589751b304ef', 'yc', '5589751b3b069'),
('5589751b304ef', ' none of the mentioned', '5589751b3b073'),
('5589751b749c9', 'X', '5589751b9a98c'),
('5589751b749c9', 'x', '5589751b9a9a5'),
('5589751b749c9', 'D', '5589751b9a9b7'),
('5589751b749c9', 'd', '5589751b9a9c9'),
('5589751bd02ec', 'autoindentation is not possible in vi editor', '5589751bdadaa'),
('625e7d4c17e5f', '350', '625e7d4c1825f'),
('625e7d4c17e5f', '364', '625e7d4c18262'),
('625e7d4c17e5f', '325', '625e7d4c18263'),
('625e7d4c17e5f', '330', '625e7d4c18264'),
('625e7d4c18db8', '100', '625e7d4c18f5c'),
('625e7d4c18db8', '200', '625e7d4c18f5e'),
('625e7d4c18db8', '150', '625e7d4c18f5f'),
('625e7d4c18db8', '250', '625e7d4c18f60'),
('625e7d4c1997c', '17/18', '625e7d4c19d2c'),
('625e7d4c1997c', '10/11', '625e7d4c19d2e'),
('625e7d4c1997c', 'Both are same', '625e7d4c19d2f'),
('625e7d4c1997c', 'Cannot determine', '625e7d4c19d30'),
('625e7d4c1a662', '135', '625e7d4c1a73e'),
('625e7d4c1a662', '150', '625e7d4c1a73f'),
('625e7d4c1a662', '124', '625e7d4c1a740'),
('625e7d4c1a662', '105', '625e7d4c1a741'),
('625e7d4c1ac24', '12%', '625e7d4c1ad65'),
('625e7d4c1ac24', '13%', '625e7d4c1ad66'),
('625e7d4c1ac24', '12.5%', '625e7d4c1ad67'),
('625e7d4c1ac24', '10.50%', '625e7d4c1ad68'),
('625e7e3fb7d42', ' 450 kms', '625e7e3fb85eb'),
('625e7e3fb7d42', '180 kms', '625e7e3fb85ec'),
('625e7e3fb7d42', '360 kms', '625e7e3fb85ed'),
('625e7e3fb7d42', '150 kms', '625e7e3fb85ee'),
('625e7e3fb9ad3', '13(1/5) hours', '625e7e3fb9f02'),
('625e7e3fb9ad3', '1(1/11) hours', '625e7e3fb9f04'),
('625e7e3fb9ad3', '19/22 hours', '625e7e3fb9f05'),
('625e7e3fb9ad3', '18 hours', '625e7e3fb9f06'),
('625e7e3fba752', ' 50', '625e7e3fba856'),
('625e7e3fba752', '45', '625e7e3fba857'),
('625e7e3fba752', ' 60', '625e7e3fba858'),
('625e7e3fba752', ' 70', '625e7e3fba859'),
('625e7e3fbadfc', '1/108', '625e7e3fbaf10'),
('625e7e3fbadfc', ' 7/36', '625e7e3fbaf11'),
('625e7e3fbadfc', '1/36', '625e7e3fbaf12'),
('625e7e3fbadfc', '1', '625e7e3fbaf13'),
('625e7f8913766', 'pointer to a pointer', '625e7f8913c35'),
('625e7f8913766', 'pointer to an array of chars', '625e7f8913c39'),
('625e7f8913766', 'pointer to function taking a char* argument and returns an int', '625e7f8913c3a'),
('625e7f8913766', 'function taking a char* argument and returning a pointer to int', '625e7f8913c3b'),
('625e7f891461a', '*', '625e7f89148ba'),
('625e7f891461a', '&', '625e7f89148be'),
('625e7f891461a', '->', '625e7f89148bf'),
('625e7f891461a', '–>>', '625e7f89148c0'),
('625e7f89152b3', 'x is a pointer to a string, y is a string', '625e7f89153fd'),
('625e7f89152b3', 'y is a pointer to a string, x is a string', '625e7f89153ff'),
('625e7f89152b3', 'oth x and y are pointers to string types', '625e7f8915400'),
('625e7f89152b3', 'y is a pointer to a string', '625e7f8915401'),
('625e7f8915ddb', 'hold the address of the specific object', '625e7f8915ef1'),
('625e7f8915ddb', 'point one past the end of an object', '625e7f8915ef2'),
('625e7f8915ddb', 'zero', '625e7f8915ef3'),
('625e7f8915ddb', 'point to a type', '625e7f8915ef4'),
('625e7f89166e3', 'int *ip;', '625e7f8916800'),
('625e7f89166e3', 'string s, *sp = 0;', '625e7f8916801'),
('625e7f89166e3', 'int i; double* dp = &i;', '625e7f8916802'),
('625e7f89166e3', 'int *pi = 0;', '625e7f8916803'),
('625e7f8916d06', 'b is assigned to a', '625e7f8916ebd'),
('625e7f8916d06', 'p now points to b', '625e7f8916ebe'),
('625e7f8916d06', ' a is assigned to b', '625e7f8916ebf'),
('625e7f8916d06', 'q now points to a', '625e7f8916ec0'),
('625e7f89175c8', 'int **fun(float**, char**)', '625e7f89176ce'),
('625e7f89175c8', 'int *fun(float*, char*)', '625e7f89176cf'),
('625e7f89175c8', 'int **fun(float*, char**)', '625e7f89176d0'),
('625e7f89175c8', 'int ***fun(*float, **char)', '625e7f89176d1'),
('625e7f8918005', ' p is pointer to function', '625e7f891818c'),
('625e7f8918005', ' p is array of pointer to function', '625e7f891818e'),
('625e7f8918005', 'p is pointer to such function which return type is the array', '625e7f891818f'),
('625e7f8918005', 'p is pointer to such function which return type is the array', '625e7f8918190'),
('625e7f891880c', '2', '625e7f8918919'),
('625e7f891880c', '4', '625e7f891891b'),
('625e7f891880c', '8', '625e7f891891c'),
('625e7f891880c', '0', '625e7f891891d'),
('625e7f8918e03', 'int', '625e7f8918f07'),
('625e7f8918e03', 'float', '625e7f8918f08'),
('625e7f8918e03', 'double', '625e7f8918f09'),
('625e7f8918e03', 'all of the mentioned', '625e7f8918f0a'),
('625e80325c2e8', 'green', '625e80325d15b'),
('625e80325c2e8', 'air', '625e80325d15e'),
('625e80325c2e8', 'red', '625e80325d15f'),
('625e80325c2e8', 'pink', '625e80325d160'),
('625e80325dcd2', 'aries', '625e80325dede'),
('625e80325dcd2', 'taurus', '625e80325dee1'),
('625e80325dcd2', 'libra', '625e80325dee2'),
('625e80325dcd2', 'scorpio', '625e80325dee3'),
('625e80325e7f7', 'Grenade', '625e80325e935'),
('625e80325e7f7', 'Katana', '625e80325e938'),
('625e80325e7f7', 'Shotgun', '625e80325e939'),
('625e80325e7f7', 'rifle', '625e80325e93a'),
('625e80325ef1f', 'Peas', '625e80325f0ae'),
('625e80325ef1f', 'Cabbage', '625e80325f0b0'),
('625e80325ef1f', 'Spinach', '625e80325f0b1'),
('625e80325ef1f', 'Tomato', '625e80325f0b2'),
('625e80325f679', '3,4', '625e80325f7df'),
('625e80325f679', '2,5', '625e80325f7e1'),
('625e80325f679', '2,1', '625e80325f7e2'),
('625e80325f679', '4,5', '625e80325f7e3'),
('625e803260103', 'B', '625e803260222'),
('625e803260103', 'C', '625e803260224'),
('625e803260103', 'A', '625e803260225'),
('625e803260103', 'D', '625e803260226'),
('625e80326103d', '1024', '625e80326145e'),
('625e80326103d', '1125', '625e803261462'),
('625e80326103d', '1500', '625e803261463'),
('625e80326103d', '2250', '625e803261464'),
('625e8032619f5', '34', '625e803261af8'),
('625e8032619f5', '35', '625e803261afa'),
('625e8032619f5', '36', '625e803261afb'),
('625e8032619f5', '37', '625e803261afc'),
('625e803261fb8', 'Only I follows', '625e8032620f6'),
('625e803261fb8', 'Only II follows', '625e8032620f9'),
('625e803261fb8', 'Only III follows', '625e8032620fa'),
('625e803261fb8', 'Both I and II follow', '625e8032620fb'),
('625e8032625bc', 'Only I follows', '625e803262711'),
('625e8032625bc', 'Either I or II follows', '625e803262713'),
('625e8032625bc', 'Only II follows', '625e803262714'),
('625e8032625bc', 'None of these', '625e803262715'),
('625e812f8e770', '6', '625e812f8f0a1'),
('625e812f8e770', '7', '625e812f8f0a4'),
('625e812f8e770', '8', '625e812f8f0a5'),
('625e812f8e770', '9', '625e812f8f0a6'),
('625e812f8fa2f', '32 and 64', '625e812f8fbbc'),
('625e812f8fa2f', '32 and 32', '625e812f8fbbe'),
('625e812f8fa2f', '64 and 64', '625e812f8fbbf'),
('625e812f8fa2f', '64 and 32', '625e812f8fbc0'),
('625e812f902df', 'Byte to int', '625e812f9044c'),
('625e812f902df', 'Int to long', '625e812f9044e'),
('625e812f902df', 'Long to int', '625e812f9044f'),
('625e812f902df', 'Short to int', '625e812f90450'),
('625e812f90aa9', 'compile error', '625e812f9110c'),
('625e812f90aa9', 'throws exception', '625e812f9110f'),
('625e812f90aa9', 'I', '625e812f91110'),
('625e812f90aa9', '24 I', '625e812f91111'),
('625e812f917f6', '50', '625e812f918fc'),
('625e812f917f6', '10', '625e812f918fe'),
('625e812f917f6', 'Compile error', '625e812f918ff'),
('625e812f917f6', 'Exception', '625e812f91900'),
('625e812f91d7e', '-127', '625e812f91e71'),
('625e812f91d7e', '127', '625e812f91e72'),
('625e812f91d7e', '129', '625e812f91e73'),
('625e812f91d7e', '2', '625e812f91e74'),
('625e812f925b6', 'char[] ch = new char(5)', '625e812f92690'),
('625e812f925b6', 'char[] ch = new char[5]', '625e812f92692'),
('625e812f925b6', 'char[] ch = new char()', '625e812f92693'),
('625e812f925b6', 'char[] ch = new char[]', '625e812f92694'),
('625e812f92be0', '120 200 016', '625e812f92cab'),
('625e812f92be0', '120 200 14', '625e812f92cac'),
('625e812f92be0', '120 200 16', '625e812f92cad'),
('625e812f92be0', 'None', '625e812f92cae'),
('625e812f93044', 'The reference of the array', '625e812f9310a'),
('625e812f93044', 'A copy of the array', '625e812f9310b'),
('625e812f93044', 'Length of the array', '625e812f9310c'),
('625e812f93044', 'Copy of first element', '625e812f9310d'),
('625e812f935dc', 'int[] A = {}', '625e812f937cf'),
('625e812f935dc', 'int[] A = {1, 2, 3}', '625e812f937d2'),
('625e812f935dc', 'int[] A = (1, 2, 3)', '625e812f937d3'),
('625e812f935dc', 'int[][] A = {1, 2, 3}', '625e812f937d4'),
('625e812f93eed', '0', '625e812f94063'),
('625e812f93eed', '1', '625e812f94067'),
('625e812f93eed', '2', '625e812f94068'),
('625e812f93eed', '3', '625e812f94069'),
('625e812f94744', 'Object references', '625e812f94839'),
('625e812f94744', 'Objects', '625e812f9483b'),
('625e812f94744', 'Primitive data type', '625e812f9483c'),
('625e812f94744', 'None', '625e812f9483d'),
('625e812f94d58', 'At run time', '625e812f94e71'),
('625e812f94d58', 'At compile time', '625e812f94e73'),
('625e812f94d58', 'Depends on the code', '625e812f94e74'),
('625e812f94d58', 'none', '625e812f94e75'),
('625e812f9530a', 'A package is a collection of editing tools', '625e812f95406'),
('625e812f9530a', 'A package is a collection of classes', '625e812f95407'),
('625e812f9530a', 'A package is a collection of classes and interfaces', '625e812f95408'),
('625e812f9530a', 'A package is a collection of interfaces', '625e812f95409'),
('625e812f958ee', '1 and 2', '625e812f959f5'),
('625e812f958ee', '2 and 3', '625e812f959f6'),
('625e812f958ee', 'only 3', '625e812f959f7'),
('625e812f958ee', 'All of the above', '625e812f959f8'),
('625e812f96e7e', 'final', '625e812f96f58'),
('625e812f96e7e', 'static', '625e812f96f5a'),
('625e812f96e7e', 'volatile', '625e812f96f5b'),
('625e812f96e7e', 'abstract', '625e812f96f5c'),
('625e812f97421', 'Any class', '625e812f97511'),
('625e812f97421', 'Only Solution class', '625e812f97513'),
('625e812f97421', 'Any class that extends Solution', '625e812f97514'),
('625e812f97421', 'None', '625e812f97515'),
('625e812f978d4', 'java.lang.Object', '625e812f979ad'),
('625e812f978d4', 'java.lang.String', '625e812f979af'),
('625e812f978d4', 'java.lang.util', '625e812f979b0'),
('625e812f978d4', 'None', '625e812f979b1'),
('625e812f97d9a', 'True', '625e812f97e5a'),
('625e812f97d9a', 'False', '625e812f97e5b'),
('625e812f97d9a', 'An int value', '625e812f97e5c'),
('625e812f97d9a', 'None', '625e812f97e5d'),
('625e812f981e8', 'abc', '625e812f9827f'),
('625e812f981e8', 'bc', '625e812f98281'),
('625e812f981e8', 'bcd', '625e812f98282'),
('625e812f981e8', 'cd', '625e812f98283');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('55897338a6659', '558973f4389ac', 'On Linux, initrd is a file', 4, 1),
('55897338a6659', '558973f4c46f2', 'Which is loaded into memory when system is booted?', 4, 2),
('55897338a6659', '558973f51600d', ' The process of starting up a computer is known as', 4, 3),
('55897338a6659', '558973f55d269', ' Bootstrapping is also known as', 4, 4),
('55897338a6659', '558973f5abb1a', 'The shell used for Single user mode shell is:', 4, 5),
('5589741f9ed52', '5589751a63091', ' Which command is used to close the vi editor?', 4, 1),
('5589741f9ed52', '5589751ad32b8', ' In vi editor, the key combination CTRL+f', 4, 2),
('5589741f9ed52', '5589751b304ef', ' Which vi editor command copies the current line of the file?', 4, 3),
('5589741f9ed52', '5589751b749c9', ' Which command is used to delete the character before the cursor location in vi editor?', 4, 4),
('5589741f9ed52', '5589751bd02ec', ' Which one of the following statement is true?', 4, 5),
('625e7c2157066', '625e7d4c17e5f', '56% of Y is 182.  What is Y?', 4, 1),
('625e7c2157066', '625e7d4c18db8', 'Y has to score 40% marks to pass. He gets 20 marks and fails by 40 marks. The maximum marks of the exam are?\r\n', 4, 2),
('625e7c2157066', '625e7d4c1997c', 'Which of the following two ratios is greater 17:18 and 10:11?\r\n', 4, 3),
('625e7c2157066', '625e7d4c1a662', '285 is summation of 3 numbers. Ratio between 2nd and 3rd numbers is 6:5. Ratio between 1st and 2nd numbers is 3:7. The 3rd number is?\r\n', 4, 4),
('625e7c2157066', '625e7d4c1ac24', 'A man got Rs. 130 less, as simple interest, when he invested Rs. 2000 for 4 years as compared to investing Rs. 2250 for same duration. What is the rate of interest?\r\n', 4, 5),
('625e7ca2142a5', '625e7e3fb7d42', 'Two trains A and B leave Kolkata for Sikkim at 8:00 pm and 8:30 pm respectively and run at 90 km/hr and 120 km/hr, respectively. At what distance from Kolkata, will the two trains meet?', 4, 1),
('625e7ca2142a5', '625e7e3fb9ad3', ' Two pipes M and N can fill a tank in 22 hours and 33 hours respectively. In how much time will the tank be full, if both the pipes are opened simultaneously?\r\n', 4, 2),
('625e7ca2142a5', '625e7e3fba752', ' In a race, average speed of total 75 bikes is 35km/hr. The average speed of red bikes is 55 km/hr. If average speed of green bikes is 30km/hr, then how many green bikes are there?', 4, 3),
('625e7ca2142a5', '625e7e3fbadfc', 'Suresh keeps all his socks in a single drawer. He has 24 pairs of white socks and 18 pairs of grey socks. Suresh picks 3 socks randomly. Find the possibility of Suresh choosing a matching pair.', 4, 4),
('625e7e394c4ee', '625e7f8913766', ' What does the following statement mean?\r\nint (*fp) (char*);\r\n', 4, 1),
('625e7e394c4ee', '625e7f891461a', 'The operator used for dereferencing or indirection is ____', 4, 2),
('625e7e394c4ee', '625e7f89152b3', 'Choose the right option.\r\nstring* x, y;', 4, 3),
('625e7e394c4ee', '625e7f8915ddb', 'Which one of the following is not a possible state for a pointer.', 4, 4),
('625e7e394c4ee', '625e7f89166e3', 'Which of the following is illegal?', 4, 5),
('625e7e394c4ee', '625e7f8916d06', 'What will happen in the following C++ code snippet?\r\nint a =100, b =200;\r\nint *p = &a, *q = &b ;                          \r\np = q', 4, 6),
('625e7e394c4ee', '625e7f89175c8', 'The correct statement for a function that takes pointer to a float, a pointer to a pointer to a char and returns a pointer to a pointer to a integer is ____________', 4, 7),
('625e7e394c4ee', '625e7f8918005', 'What is the meaning of the following declaration?\r\nint (*p [5]) ();', 4, 8),
('625e7e394c4ee', '625e7f891880c', 'What is size of generic pointer in C++ (in 32-bit platform)?', 4, 9),
('625e7e394c4ee', '625e7f8918e03', 'The void pointer can point to which type of objects?', 4, 10),
('625e7de9b451f', '625e80325c2e8', 'In the following question, choose the correct code form.\r\nIf ‘air’ is called ‘green’, ‘green’ is called ‘red’, ‘red’ is called ‘sea’, ‘sea’ is called ‘blue’, ‘blue’ is called ‘water’ and ‘water’ is called ‘pink’, then what is the color of grass?\r\n', 4, 1),
('625e7de9b451f', '625e80325dcd2', 'In the following question, choose the correct code form.\r\nAccording to new terminology, ‘Aries’ means ‘air’, ‘Taurus’ means ‘light’, ‘Libra’ means ‘water’ and ‘Scorpio’ means ‘earth’. What would an organism breathe in?\r\n', 4, 2),
('625e7de9b451f', '625e80325e7f7', 'Choose the word which is least like the other words in the group.\r\n', 4, 3),
('625e7de9b451f', '625e80325ef1f', 'Choose the word which is not similar to the other words in the group.\r\n', 4, 4),
('625e7de9b451f', '625e80325f679', 'Solve the following question and choose the correct alternative from the following.\r\n# 1, 2, 3, 4, and 5 are sitting in row but not necessarily in that order.\r\n# All of them are sitting in a row with their backs toward North.\r\n# 3 is immediate right to 5 and 4 is immediate left to 1. Only 2 is between 1 and 5.\r\nWhich of the following are at the extreme ends?\r\n', 4, 5),
('625e7de9b451f', '625e803260103', 'Read the following information to answer the given question.\r\n# A B C D E F are sitting in a row.\r\n# E and F are in the center, A and B are at the ends.\r\n# C is sitting on the left of A.\r\nWho is sitting three places on the right of D?\r\n', 4, 6),
('625e7de9b451f', '625e80326103d', 'Complete the given series by finding the missing term\r\n5, 15, 45, 225, ?\r\n', 4, 7),
('625e7de9b451f', '625e8032619f5', 'Complete the given series by finding the missing term\r\n28, 33, 31, ?, 34, 39\r\n', 4, 8),
('625e7de9b451f', '625e803261fb8', 'In the question below is given a statement followed by two courses of action numbered I and II. You have to assume everything in the statement to be true and based on the information given in the statement, decide which of the suggested courses of action logically follow(s) for pursuing.\r\nGive answer\r\n\r\n(A) If only I follows\r\n(B) If only II follows\r\n(C) If either I or II follows\r\n(D) If neither I nor II follow\r\n(E) If both I and II follow.\r\n\r\nStatement - Not just looks, internal beauty is extremely important.\r\n\r\nCourses of Action - I. Pay attention to fashion.\r\nII. Do not pay attention to fashion.\r\nIII. Books on self-development and spirituality should be encouraged.\r\n', 4, 9),
('625e7de9b451f', '625e8032625bc', 'In the question below is given a statement followed by two courses of action numbered I and II. You have to assume everything in the statement to be true and based on the information given in the statement, decide which of the suggested courses of action logically follow(s) for pursuing.\r\n\r\nGive answer\r\n\r\n(A) If only I follows\r\n(B) If only II follows\r\n(C) If either I or II follows\r\n(D) If neither I nor II follow\r\n(E) If both I and II follow.\r\n\r\nStatement - Villages in Rajasthan have been severely damaged due to draught.\r\n\r\nThis has caused a financial burden on State Government.\r\n\r\nCourses of Action - I. People of the area should be shifted to other suitable places.\r\n\r\nII. State Government should ask for more financial support from Central Government.\r\n', 4, 10),
('625e7b8384b02', '625e812f8e770', 'Number of primitive data types in Java are?', 4, 1),
('625e7b8384b02', '625e812f8fa2f', 'What is the size of float and double in java?', 4, 2),
('625e7b8384b02', '625e812f902df', 'Automatic type conversion is possible in which of the possible cases?', 4, 3),
('625e7b8384b02', '625e812f90aa9', 'Find the output of the following code.\r\nint Integer = 24;\r\nchar String  = ‘I’;\r\nSystem.out.print(Integer);\r\nSystem.out.print(String);', 4, 4),
('625e7b8384b02', '625e812f917f6', 'Find the output of the following program.\r\npublic class Solution{\r\n       public static void main(String[] args){\r\n                     short x = 10;\r\n                     x =  x * 5;\r\n                     System.out.print(x);\r\n       }\r\n}', 4, 5),
('625e7b8384b02', '625e812f91d7e', 'Find the output of the following program.\r\npublic class Solution{\r\n       public static void main(String[] args){\r\n                     byte x = 127;\r\n                     x++;\r\n                     x++;\r\n                     System.out.print(x);\r\n       }\r\n}\r\n', 4, 6),
('625e7b8384b02', '625e812f925b6', 'Select the valid statement.', 4, 7),
('625e7b8384b02', '625e812f92be0', 'Find the output of the following program.\r\npublic class Solution{\r\n       public static void main(String[] args){\r\n               int[]  x = {120, 200, 016};\r\n               for(int i = 0; i < x.length; i++){\r\n                        System.out.print(x[i] + “ “);\r\n               }                   \r\n       }\r\n}', 4, 8),
('625e7b8384b02', '625e812f93044', 'When an array is passed to a method, what does the method receive?', 4, 9),
('625e7b8384b02', '625e812f935dc', 'Select the valid statement to declare and initialize an array.', 4, 10),
('625e7b8384b02', '625e812f93eed', 'Find the value of A[1] after execution of the following program.\r\nint[] A = {0,2,4,1,3};\r\nfor(int i = 0; i < a.length; i++){\r\n    a[i] = a[(a[i] + 3) % a.length];\r\n}', 4, 11),
('625e7b8384b02', '625e812f94744', 'Arrays in java are-', 4, 12),
('625e7b8384b02', '625e812f94d58', 'When is the object created with new keyword?', 4, 13),
('625e7b8384b02', '625e812f9530a', 'Identify the corrected definition of a package.', 4, 14),
('625e7b8384b02', '625e812f958ee', 'Identify the correct restriction on static methods.\r\n1. They must access only static data\r\n2. They can only call other static methods.\r\n3. They cannot refer to this or super.', 4, 15),
('625e7b8384b02', '625e812f96e7e', 'Identify the keyword among the following that makes a variable belong to a class,rather than being defined for each instance of the class.', 4, 16),
('625e7b8384b02', '625e812f97421', 'Identify what can directly access and change the value of the variable res.\r\nPackage com.mypackage;\r\nPublic class Solution{\r\n       Private int res = 100;\r\n}', 4, 17),
('625e7b8384b02', '625e812f978d4', 'In which of the following is toString() method defined?', 4, 18),
('625e7b8384b02', '625e812f97d9a', 'compareTo() returns', 4, 19),
('625e7b8384b02', '625e812f981e8', 'Identify the output of the following program.\r\nString str = “abcde”;\r\nSystem.out.println(str.substring(1, 3));', 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 09:06:12'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 09:09:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('55897338a6659', 'Linux:startup', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:54:48'),
('5589741f9ed52', 'Linux :vi Editor', 2, 1, 5, 10, '', 'linux', '2015-06-23 14:58:39'),
('6244127643e3f', 'Aptitude', 1, 1, 50, 30, 'Contains 30 questions aptitude + 15 questions reasoning + 10 questions english', '#aptitude_1', '2022-03-30 08:19:02'),
('625e7b1ea60a1', 'C++ Pointers | Set 1', 1, 1, 20, 30, 'quiz for c++\r\n', 'quiz', '2022-04-19 09:04:30'),
('625e7b8384b02', 'Java Quiz', 5, 2, 20, 60, 'Java is a high-level, general-purpose, object-oriented programming language. It is easy and used to develop any kind of program. Apart from this, it can also be used in Android development.', '#Java', '2022-04-19 09:06:11'),
('625e7c2157066', 'Aptitude Test', 4, 1, 5, 5, 'GIve honestly', '#aptitude', '2022-04-19 09:08:49'),
('625e7ca2142a5', 'Aptitude Quiz', 2, 1, 4, 5, 'jibgvctrtsthrfv', '#Aptitude', '2022-04-19 09:10:58'),
('625e7de9b451f', 'Logical Reasoning', 5, 1, 10, 10, 'Say no to cheating', '#logical', '2022-04-19 09:16:25'),
('625e7e394c4ee', 'C++ Pointers | Set 2', 1, 1, 10, 20, 'quiz ', 'quiz', '2022-04-19 09:17:45'),
('625e7eb51c100', 'Englsih Quiz', 2, 1, 10, 20, 'gmjsdhgvfdikgdbfjk', '#English', '2022-04-19 09:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_status`
--

CREATE TABLE `quiz_status` (
  `sno` int(11) NOT NULL,
  `qid` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('sunnygkp10@gmail.com', 9, '2015-06-24 03:22:38'),
('avantika420@gmail.com', 8, '2015-06-23 14:49:39'),
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('chirag.webdeveloper123@gmail.com', 3, '2022-04-19 08:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Avantika', 'F', 'KNIT sultanpur', 'avantika420@gmail.com', '7785068889', 'e10adc3949ba59abbe56e057f20f883e'),
('Mark Zukarburg', 'M', 'Stanford', 'ceo@facebook.com', '987654321', 'e10adc3949ba59abbe56e057f20f883e'),
('Chirag Gupta', 'Male', 'dgi', 'chirag.webdeveloper123@gmail.com', '9711672424', '$2y$10$D9Dxtgh954zNUCV3tl2R4.jMlDWnpcq7LidqrKz2TpU4jnLO0oWh6'),
('Komal', 'F', 'KNIT sultanpur', 'komalpd2011@gmail.com', '7785068889', 'e10adc3949ba59abbe56e057f20f883e'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', '7785068889', 'e10adc3949ba59abbe56e057f20f883e'),
('Netcamp', 'M', 'KNIT sultanpur', 'netcamp@gmail.com', '987654321', 'e10adc3949ba59abbe56e057f20f883e'),
('Nikunj', 'M', 'XYZ', 'nik1@gmail.com', '987', '202cb962ac59075b964b07152d234b70'),
('Sunny', 'M', 'KNIT sultanpur', 'sunnygkp10@gmail.com', '7785068889', 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', '7785068889', 'e10adc3949ba59abbe56e057f20f883e'),
('Vikrant', 'Female', 'asdf', 'vikrant123@gmail.com', '1234567890', '$2y$10$Iv9nKtSFLrJaaWfvcDB5sevw/udkoWOLpDbT7Bq2aiXTjK9/nlpcG'),
('Viks', 'Female', 'asd', 'vikrant5555@gmail.com', '1234546789', '$2y$10$8zCuTiEyY8dtIbqtyvN2b.pINYaU0IVNnJ6MJscvNIM.WhO5O04XS'),
('Vikrant', 'Male', 'dgi', 'viktanwar@gmail.com', '1234', '$2y$10$SR04UtRr9BLQJvXb.q4n7.BO9PtodVhnSS213sP3ttma.iBdgUh9C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
