-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2023 at 06:30 PM
-- Server version: 5.7.43-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bennavis_testa`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `question`, `answer`) VALUES
(1, 'Who can sell items? ', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, r');

-- --------------------------------------------------------

--
-- Table structure for table `bloga`
--

CREATE TABLE `bloga` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `buttontitle` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloga`
--

INSERT INTO `bloga` (`id`, `image`, `title`, `subtitle`, `content`, `buttontitle`, `link`) VALUES
(4, 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/eqo25i7vw03g4z1.jpg', 'Features KMTC Past Papers', 'Latest', 'On KTMCtesta,  you can access a wide range of medical test papers, including practice questions, sample exams, and case studies. Whether you&#39;re preparing for board exams, licensing tests, or simply seeking to reinforce your medical knowledge, we have the resources you need.', 'Check Sample', './kmtc_test_papers');

-- --------------------------------------------------------

--
-- Table structure for table `blogb`
--

CREATE TABLE `blogb` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `button` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogb`
--

INSERT INTO `blogb` (`id`, `image`, `title`, `subtitle`, `content`, `link`, `button`) VALUES
(2, 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/eigd6wb5f7k39op.jpg', 'Features KMTC Notes', 'Latest', 'Students are able to stay updated with the latest developments in the medical field through gaining access to latest information including notes from different classess and department.', './search_notes', 'Write Notes');

-- --------------------------------------------------------

--
-- Table structure for table `blogd`
--

CREATE TABLE `blogd` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogd`
--

INSERT INTO `blogd` (`id`, `image`, `title`, `subtitle`, `content`, `button`, `link`) VALUES
(2, 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/pidx748bsucny5k.jpg', 'Questions and Answers', 'Latest', 'With KMTCtesta,medical students are able to gain access to vast library medical test papers questions and answers to help prepare effectively for exams and assessments.', 'Sample Quiz', './questions_answers');

-- --------------------------------------------------------

--
-- Table structure for table `bloge`
--

CREATE TABLE `bloge` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloge`
--

INSERT INTO `bloge` (`id`, `image`, `content`, `button`, `link`) VALUES
(5, 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/rigdl312zh6cubq.jpg', 'Through Our notices students are connected with a community of like-minded professionals and learners who are able to share with them latest updates on medics accross the Glob', 'Browse', './home');

-- --------------------------------------------------------

--
-- Table structure for table `cms_papers`
--

CREATE TABLE `cms_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_papers`
--

INSERT INTO `cms_papers` (`id`, `name`, `file`, `date`, `unit`, `code`) VALUES
(7, 'community health ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/k7afilov3tq_pxu.pdf', '2023-09-21', 'community health', '1'),
(8, 'Intermedical quiz', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/z4ojk7udfnri125.pdf', '2023-09-21', 'clinical medicine', '3');

-- --------------------------------------------------------

--
-- Table structure for table `coh_papers`
--

CREATE TABLE `coh_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title`, `subtitle`, `address`, `location`, `phone1`, `phone2`, `email`) VALUES
(1, 'Our Company&#39;s Location And Address', 'Location/Address', 'Private Bag', 'Makindu,Mombasa.', '+254705362098', '+254704907555', 'bennavisoftsolution@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dt_papers`
--

CREATE TABLE `dt_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hp_papers`
--

CREATE TABLE `hp_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hrit_papers`
--

CREATE TABLE `hrit_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kmtc_test_papers`
--

CREATE TABLE `kmtc_test_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kmtc_test_papers`
--

INSERT INTO `kmtc_test_papers` (`id`, `name`, `file`, `date`, `class`, `unit`) VALUES
(4, 'Clinical fqe', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/jnh8p_orefcw4tq.pdf', '2023-09-26', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'clinical engineering');

-- --------------------------------------------------------

--
-- Table structure for table `medeng_papers`
--

CREATE TABLE `medeng_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medeng_papers`
--

INSERT INTO `medeng_papers` (`id`, `name`, `file`, `date`, `unit`, `code`) VALUES
(4, 'Fqe clinical ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/p5e62w0kty3ijf7.pdf', '2023-09-21', 'Clinical engineering ', '512'),
(5, 'Fqe electronics 15th 2022', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/pazynwv6o4ecgx9.pdf', '2023-09-21', 'Electronics ', '202'),
(6, 'Mathematics fqe 21st feb 2023', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/s5z1t63x8fipcld.pdf', '2023-09-21', 'Mathematics ', '201'),
(7, 'fqe clinical 22nd july 2021', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/5mcb6ka1zfgri4q.pdf', '2023-09-21', 'Clinical engineering ', '512');

-- --------------------------------------------------------

--
-- Table structure for table `me_papers`
--

CREATE TABLE `me_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mis_papers`
--

CREATE TABLE `mis_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mls_papers`
--

CREATE TABLE `mls_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `image`) VALUES
(2, 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/0s3x8b1fqmr72cn.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `nd_papers`
--

CREATE TABLE `nd_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `message`, `date`, `link`, `author`) VALUES
(8, 'KMTCtesta Testing Process', 'Thank you for choosing to work with Bennavi Softsolution during this  KMTCtesta Testing process. My name is Levis Chisira the CEO,Founder of Bennavi Softsolution ,and also the brother and partner to Benard chisira who will be guiding you through how to update data on this system. Kindly lets not upload data outside of learning materials. Incase of any challenges reach out to Bernard. Goodnight.', '2023-09-19 12:00:00', 'https://bennavi-softsolution.co.ke', 'Mr.Levis Chisira'),
(9, 'File Uploads Error', 'I am told you are having a problem with uploading notes files. The issue is being resolved today by our software engineering team on board.  Sorry For the inconvenienve. Good Morining', '2023-09-26 12:00:00', 'https://bennavi-softsolution.co.ke/info/contact', 'Mr.Levis Chisira');

-- --------------------------------------------------------

--
-- Table structure for table `nursing_papers`
--

CREATE TABLE `nursing_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nursing_papers`
--

INSERT INTO `nursing_papers` (`id`, `name`, `file`, `date`, `unit`, `code`) VALUES
(1, 'Haematology SAQ Questions', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/u9wmopqk40ivd2c.pdf', '2023-09-26', 'Haematology SAQ Questions', 'Haematology SAQ Questions');

-- --------------------------------------------------------

--
-- Table structure for table `optometry_papers`
--

CREATE TABLE `optometry_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ort_papers`
--

CREATE TABLE `ort_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otm_papers`
--

CREATE TABLE `otm_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ot_papers`
--

CREATE TABLE `ot_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pharmarcy_papers`
--

CREATE TABLE `pharmarcy_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physiotherapy_papers`
--

CREATE TABLE `physiotherapy_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ph_papers`
--

CREATE TABLE `ph_papers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions_answers`
--

CREATE TABLE `questions_answers` (
  `id` int(11) NOT NULL,
  `quiz` varchar(500) DEFAULT NULL,
  `image1` varchar(255) DEFAULT '',
  `answer` varchar(500) DEFAULT NULL,
  `image2` varchar(255) DEFAULT '',
  `class` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_answers`
--

INSERT INTO `questions_answers` (`id`, `quiz`, `image1`, `answer`, `image2`, `class`, `unit`, `date`) VALUES
(12, 'Name the three types of oxy acetylene', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/gkfn6apyjx19h3z.jpg', 'Carburizing flame,Oxydizing flame , Neutral flame', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-20'),
(13, 'What is water hammer ', '', 'Is a pressure surge caused by a rapid change in flow velocity in the pipeline. ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Clinical engineering ', '2023-09-21'),
(14, 'Which type of power amplifier exibite crossover distotion on its output?', '', 'Class B ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(15, 'what is a silicon controlled rectifer?', '', 'It is a three terminal semiconderctor device', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(16, 'What is maximmum efficency of class A amplifier', '', '25%', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(17, 'If the input DC power is 10w and output power is 2W its efficency is ?', '', '20%', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(18, 'In an inverted amlifier the input and  output voltage are ?', '', '180degrees out of phase', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(19, 'The p type emitter of a UJT is ?', '', 'heavily dopet ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(20, 'An amlifier is said to surfer from distotion whe its output?', '', 'is different from its intput', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(21, 'An amlifier is said to surfer from distotion whe its output?', '', 'is different from its intput', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(22, 'what is the process of restoring the ion exchanger resins of dimeneralizer', '', 'regeneration', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'clinical engineering', '2023-09-23'),
(23, 'What type of coupling is generally  applied in power amplifire ??', '', 'transformer', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(24, 'Which class of power amplifier has the highest collector efficenty?', '', 'Class C', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(25, 'Which class of power amplifier has the highest collector efficenty?', '', 'Class C', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(26, 'what are the applications of centrifugation', '', 'to separate two miscible substances and analyze the hydro dynamic properties', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'clinical engineering', '2023-09-23'),
(27, 'What is a SCR/', '', 'It is a current  controlled device', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(28, 'which of the following teeth is mostly likely to exhibit C-shaped morphology', '', 'mandibular second molar maxillary second molars', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'clinical engineering', '2023-09-23'),
(29, 'The term CMRR used in amplifier means?', '', 'Common mode rejection ratio', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(30, 'direct blood pressure measurement is also known as', '', 'invasive method', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'clinical engineering', '2023-09-23'),
(31, 'A thryristor is also known as?', '', 'SCR', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(32, 'A diac has how many semiconductors?', '', '4', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(33, 'A Piezocrystal transducer convert', '', 'mechanical', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(34, 'A class D amplifier switch&#39;s between ', '', 'Active and saturation ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Electronics ', '2023-09-23'),
(35, 'If firing angle of an SCR dcircuit is increased ,the output', '', 'decreases', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'electronics', '2023-09-23'),
(36, 'An ideal opap has what type of output impedance?', '', 'Zero', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Electronics ', '2023-09-23'),
(37, 'Which one of the following statements best describes shallow wells?', '', 'Are wells where its water is found above the first impervious strata.', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'H.P.B.S.', '2023-09-23'),
(38, 'Which one of the following are gas installation accessories which one is NOT?', '', 'Manifold and multi-points.', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'H.P.B.S.', '2023-09-23'),
(39, 'connecting rode is  made from', '', 'high carbon steel', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(40, 'Which one of the following is the general safety requirements in laundry equipment?', '', 'Locking mechanism', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'H.P.B.S.', '2023-09-23'),
(41, 'What is the most common fliud used in hydrulic system', '', 'synthetic', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(42, 'Which one of the following is true of a positive displacement pump?', '', 'Move a constant volume of fluid.', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'H.P.B.S.', '2023-09-23'),
(43, 'The application of a control valve in neumatic system is to?', '', 'direct the fluid flow', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(44, 'Inrockwell hardness testing method ,the hardness of a material is measured by?', '', 'depth of impression', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(45, 'During the exhaust  stroke  of a four stroke Diesel engine? ', '', 'Inlet valve closed and exhaust valve is open ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-23'),
(46, 'Which one below does not correctly describe the electrical installation safety requirement for washing machine.', '', 'Gears,pulleys and v-belts are to be covered by guards.', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'H.P.B.S.', '2023-09-23'),
(47, 'A dye penetration inspection is done to find?', '', 'cracks', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(48, 'What is a 2 stroke engine', '', 'it only uses 2 cycle for its complet revolution', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(49, 'Ultrasonic testing is  done on material to determine?', '', 'Crackers below the surface ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-23'),
(50, 'name three  valves employed in hydraulic system is?', '', 'pressure valve,release valve,and control  valve', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(51, 'What can  cause the  engine bearings to fail ?', '', 'Corrosion of the rings.', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-23'),
(52, 'Name destructive test?', '', 'creep test,hardness test,tensile test', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical  engineering  technology', '2023-09-23'),
(53, 'Which type of system uses oil under pressure as a means of power transmission?', '', 'Hydraulic system ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(54, 'Which part of a pneumatic system stores the compressed air?', '', 'Air receiver tank ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(55, 'In a four stroke engine the working cycle is completed in how many revolution of a crankshaft?', '', 'Two revolutions', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(56, 'What is the meaning of a supercharging?', '', 'This is a process of suppling the intake of an engine with air at a density greater than the density of the surrounding atmosphere ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(57, 'Give the sequence of operation of a four stroke engine cycle?', '', 'Suction, compression, expansion and exhaust ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(58, 'Hydraulic system runs under which scientific h principle ?', '', 'Pascal&#39;s principle ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(59, 'Which from force is employed in a pneumatic system?', '', 'Compressed air ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(60, 'In a petrol engine what ignites the mixture of air and fuel?', '', 'Spark plugs ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(62, 'Name three types of internal combustion engine?', '', '2 stroke petrol engine, diesel engine 4 stroke engine ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(63, 'Name one type of external combustion engine?', '', 'Steam turbine ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(64, 'Hydraulic accumulator is a device used for?', '', 'Store the energy of the fluid in the form of pressure ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(65, 'Name three types of power systems that a pneumatic system can support?', '', 'Linear, reciprocating and rotory motion ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(66, 'What is the function of a fuel pump in a petrol pump?', '', 'Pump fuel so that it can reach the carburetor ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(67, 'What is the function of a air compressor in pneumatic system.', '', 'To Increase the pressure of air', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(68, 'What is the function of an alloy steel?', '', 'Improve ductility, improve strength, improve machinability ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(69, 'What is the function of intake air filter in a compressor ', '', 'Prevent dust from entering the compressor ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(70, 'What are the properties of a lubricant used  in internet cmberstion engine?', '', 'Good viscosity, thermal stability,non corrosive ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(71, 'The top pistol rings near the piston crow is known as?', '', 'Comparation ring', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(72, 'A diesel engine during suction stroke draws what?', '', 'Air only ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Mechanical engineering ', '2023-09-24'),
(73, 'Name three factors to consider when  planning kitchen space to reduce the cost and increase productivity are?', '', 'Design,space and labour ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(74, 'What is workflow? ', '', 'A continuous work in one direction to prevent distance of other activities ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(75, 'The rotating drum is driven by an electric motor with an automatic reversing device to?', '', 'To avoid lagging of other clothing ribs in the drum', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(76, 'Name three hand tools in a kitchen?', '', 'Serving spoons, spatula, kitchen folks', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(77, 'Name four types of kitchen layouts?', '', 'The G shaped kitchen,the U shaped kitchen,the L shaped kitchen,and the gallery kitchen ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(78, 'Maintenance procedure for a laundry equipment should include checking safety valves and cleaning dryer lint screen after how long?', '', 'Daily ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(79, 'State the flow of a well planned kitchen?', '', 'Entrance of food, Food preparation, cooking, service and wash up ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24'),
(80, 'The working principle of a washing machine falls under?', '', 'Centrifugal ', '', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Hospital plant ', '2023-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `search_notes`
--

CREATE TABLE `search_notes` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_notes`
--

INSERT INTO `search_notes` (`id`, `Title`, `file`, `Course`, `unit`, `Author`, `Date`) VALUES
(15, 'Dental chair ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/x28ql9yfm3gtabe.docx', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'Clinical engineering ', 'BN', '2023-09-21'),
(16, 'Clinical Engineering 2.1', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/7cszma3q08gupxw.pdf', 'Medical Engineering (Ceritficate ,Diploma and higher Diploma)', 'CLINICAL ENGINEERING ', 'Miles ', '2023-09-21'),
(17, 'community health 2', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/akh05uw39g18ezo.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'community health', 'mwingi ', '2023-09-21'),
(18, 'health statistics', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/vyxlz0hdj7f5e1u.docx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'statistics', 'mk', '2023-09-21'),
(19, 'HIV', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/4qlp58in0a_7orz.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'ALL COURSES', 'Veronica wasiru', '2023-09-21'),
(20, 'HSM', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/wf3ytrugc5qh4b0.docx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'HSM', 'MK', '2023-09-21'),
(21, 'HSM', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/wf3ytrugc5qh4b0.docx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'HSM', 'MK', '2023-09-21'),
(22, 'full blood count', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/6vqiglxrkjthpew.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'clinical medisine ', 'WHOS', '2023-09-21'),
(23, 'INTRODUCTION TO EBOLA', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/sbm12wpq5evyiro.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'Medicine', 'WHOS', '2023-09-21'),
(24, 'health statistic', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/5x1qiwh9fsjekug.doc', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'statistics', 'mk', '2023-09-21'),
(25, 'lecture 4 statistics', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/fty46kmrphv_q27.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'statisics', 'mk', '2023-09-21'),
(26, 'lecture 6 statistics', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/9rdzp0t352voqcm.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'statistics', 'mk', '2023-09-21'),
(27, 'medicine', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/ox94n7a36gmvph2.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'medicine', 'mk', '2023-09-21'),
(28, 'menopose', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/qgc142fayxodnb6.docx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'RH', 'MK', '2023-09-21'),
(29, 'PAEDIATRICS 1', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/dtojex57nw3mlvk.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'Paediatrics', 'RM', '2023-09-21'),
(30, 'Pharmacology', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/46_mcqdnrjis0hg.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'pharmacology', 'EP', '2023-09-21'),
(31, 'Specialized procedure ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/f5jbhvx0cmd1ily.docx', 'Nursing (Certificate,Diploma and Higher Diploma)', 'Special procedure ', 'BC', '2023-09-22'),
(32, 'Health promotion immunization ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/ngxc5wz0djo1la_.pdf', 'Nursing (Certificate,Diploma and Higher Diploma)', 'Community health ', 'Ck', '2023-09-22'),
(33, 'HIV - COTM', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/29rw5g03seqkuvd.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'MR G. K. NGUUTU', '2023-09-26'),
(34, 'RHEUMATIC FEVER & RHD', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/h9s1gd_2an0p4ov.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'PK', '2023-09-26'),
(35, 'Valvular heart dses', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/u_5ypok746wt0qz.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Metobo', '2023-09-26'),
(36, 'STI', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/w7ndluq8rh2_g0k.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Raphael Mutiso', '2023-09-26'),
(37, 'BODY FLUID COMPARTMENTS AND ELECTROLYTES', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/l6d4mq5ey0j1swc.ppt', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'G. K. NGUUTU', '2023-09-26'),
(38, 'INFECTIVE ENDOCARDITIS', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/06u7i_htsbpl5c4.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'GKN', '2023-09-26'),
(39, 'Congenital heart diseases', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/j92s80nhx6bcovk.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Mr. Gk', '2023-09-26'),
(40, 'Congenital heart diseases', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/5qo8cs9ew2ba1hg.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Mr. Gk', '2023-09-26'),
(41, 'HEART FAILURE', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/o9fj0a_uh5lk8q1.pptx', 'Medical Laboratory Sciences(Diploma and Higher Diploma)', 'editme', 'Gnguutu', '2023-09-26'),
(42, 'PTE', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/sj8_roihlzb204k.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'G.K. NGUUTU', '2023-09-26'),
(43, 'COR PULMONALE', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/4q5ohx7j916n_it.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Gnguutu', '2023-09-26'),
(44, 'ECTOPIC PREGNANCY', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/pa7349h85wds0by.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'DR. OCHIENG', '2023-09-26'),
(45, 'ABORTION-1', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/9og83xeuzr24nt_.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'PK', '2023-09-26'),
(46, 'ABORTION-1', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/9og83xeuzr24nt_.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'PK', '2023-09-26'),
(47, 'Algorithms for Managing Common STI Syndromes', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/_hrlz47nkd6puio.pdf', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'www.nascop.com', '2023-09-26'),
(48, 'ANENCEPHALY', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/sax48y0cqihegwo.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Penata', '2023-09-26'),
(49, 'ANTI PARASITIC', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/8okgnb5p0rwe2c1.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Mr. Gk', '2023-09-26'),
(50, 'Antidiabetics', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/tv4rn2wmksohgfa.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Dr. Sikuku Erick ,Bpharm,UON', '2023-09-26'),
(51, 'ANTIVIRAL AGENTS ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/qd1xfzompny23h5.docx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Mr. Gk', '2023-09-26'),
(52, 'ANTIVIRAL AGENTS ', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/fqpk1r6m8tx20ua.PDF', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'MAVISI MUHINDI', '2023-09-26'),
(53, 'Antiviral drugs-KKG', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/fjb39lhywae0tdr.ppt', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', '...', '2023-09-26'),
(54, 'ANTI-VIRAL AGENTS', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/1rwdml6ch_53xqv.pptx', 'Clinical Medicine and Surgery (Diploma and Higher Diploma)', 'editme', 'Mrs. Lillian Ngota ', '2023-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `point` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `point`, `content`) VALUES
(1, 'Who can sell items?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, r');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2023-12-16 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `image`, `role`, `password`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'Chisira', 'levischisira0@gmail.com', '+254704907555', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/rwsdum4ikjpcz5l.jpg', 'Administrator', '$2y$10$hm7tHZl1o/FsObI2rAwM6eOt7Cfkog9qMt6QrHCT5URceJXJ551dK', NULL, NULL, '2023-12-16 00:00:00', NULL),
(7, 'Gerry', 'levisshitubi0@gmail.com', '+254705362098', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/0g47rvfu3lpkxtc.jpg', 'Administrator', '$2y$10$U/MfnthBucNNlrQavKJmZuXLv1WDAs2q5/b/xkKwn6LloZ.xn5ytG', NULL, NULL, '2023-12-16 00:00:00', NULL),
(8, 'Bernard', 'info@kmtctesta.com', '+254705362098', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/ubim0exkj6rnhoc.jpg', 'Administrator', '$2y$10$Zzabe2FWIz7scY20xZYys.Cbix94Wbc2PPaTruy3PhXMi5oB2kK/q', '364987a53854d89bce88b6494d678408', NULL, '2023-12-16 00:00:00', NULL),
(10, 'Benson', 'bensonnjenga362@gmail.com', '+254795880723', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/pbof9ue4x6_nild.PNG', 'Admin', '$2y$10$hMkEW/jIUr9Zk/9MpP84BuozYkD1FX.Eemnx7F/lZ/FTDPcV6efoG', '8663d1ee65c9c1d7e095dc23bdd6462a', NULL, '2025-09-18 22:06:45', NULL),
(11, 'shiro', 'ngangah68@gmail.com', '+254792959256', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/z2m0b735_qjot6p.jpg', 'Admin', '$2y$10$c4kgjg97eQrPu8thwCFMI.qukRcItxCDqkmVetF.EC.aab2k207Hi', NULL, NULL, '2025-09-18 21:33:33', NULL),
(12, 'REUBEN', 'reubenmuia78@gmail.com', '0759729989', 'https://kmtctesta.bennavi-softsolution.co.ke/uploads/files/c1r7thq5om8d2ve.jpeg', 'Admin', '$2y$10$3FJXje2vO9jf2k5CT9/8auD9Yld8n/b5/gtMDy/qOIPDgU1PVgoFi', NULL, NULL, '2023-12-16 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloga`
--
ALTER TABLE `bloga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogb`
--
ALTER TABLE `blogb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogd`
--
ALTER TABLE `blogd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloge`
--
ALTER TABLE `bloge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_papers`
--
ALTER TABLE `cms_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coh_papers`
--
ALTER TABLE `coh_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_papers`
--
ALTER TABLE `dt_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hp_papers`
--
ALTER TABLE `hp_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrit_papers`
--
ALTER TABLE `hrit_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kmtc_test_papers`
--
ALTER TABLE `kmtc_test_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medeng_papers`
--
ALTER TABLE `medeng_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `me_papers`
--
ALTER TABLE `me_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_papers`
--
ALTER TABLE `mis_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mls_papers`
--
ALTER TABLE `mls_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nd_papers`
--
ALTER TABLE `nd_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursing_papers`
--
ALTER TABLE `nursing_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optometry_papers`
--
ALTER TABLE `optometry_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ort_papers`
--
ALTER TABLE `ort_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otm_papers`
--
ALTER TABLE `otm_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ot_papers`
--
ALTER TABLE `ot_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmarcy_papers`
--
ALTER TABLE `pharmarcy_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physiotherapy_papers`
--
ALTER TABLE `physiotherapy_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph_papers`
--
ALTER TABLE `ph_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_answers`
--
ALTER TABLE `questions_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search_notes`
--
ALTER TABLE `search_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloga`
--
ALTER TABLE `bloga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogb`
--
ALTER TABLE `blogb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogd`
--
ALTER TABLE `blogd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloge`
--
ALTER TABLE `bloge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms_papers`
--
ALTER TABLE `cms_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coh_papers`
--
ALTER TABLE `coh_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dt_papers`
--
ALTER TABLE `dt_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hp_papers`
--
ALTER TABLE `hp_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrit_papers`
--
ALTER TABLE `hrit_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kmtc_test_papers`
--
ALTER TABLE `kmtc_test_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medeng_papers`
--
ALTER TABLE `medeng_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `me_papers`
--
ALTER TABLE `me_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_papers`
--
ALTER TABLE `mis_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mls_papers`
--
ALTER TABLE `mls_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nd_papers`
--
ALTER TABLE `nd_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nursing_papers`
--
ALTER TABLE `nursing_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `optometry_papers`
--
ALTER TABLE `optometry_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ort_papers`
--
ALTER TABLE `ort_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otm_papers`
--
ALTER TABLE `otm_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ot_papers`
--
ALTER TABLE `ot_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pharmarcy_papers`
--
ALTER TABLE `pharmarcy_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physiotherapy_papers`
--
ALTER TABLE `physiotherapy_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ph_papers`
--
ALTER TABLE `ph_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions_answers`
--
ALTER TABLE `questions_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `search_notes`
--
ALTER TABLE `search_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
