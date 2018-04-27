-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 09:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-community`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_no` varchar(7) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_no`, `password`) VALUES
('1010101', 'e99a18c428cb38d5f260853678922e03');

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `no_id` varchar(7) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `prob` varchar(255) NOT NULL,
  `loc` text NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `respond` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`no_id`, `kategori`, `prob`, `loc`, `date`, `time`, `respond`) VALUES
('09-09-C', 'Umum', 'Aduan kerosakan di lif', 'lokasi blok G lif 2', '2017-09-11', '03:46 PM', ''),
('09-09-C', 'Umum', 'Bising', '09-08 blok cempaka', '2017-09-09', '03:22 PM', ''),
('04-28-C', 'Vandalisme', 'buaian di taman rosak', 'taman sebelah masjid', '2017-09-06', '06:18 AM', ''),
('04-28-C', 'Vandalisme', 'conteng dinding', 'bawah blok cempaka', '2017-09-06', '01:59 PM', ''),
('01-07-D', 'Vandalisme', 'Dinding diconteng graffiti', 'Bawah blok Dahlia', '2017-09-07', '07:56 PM', ''),
('09-09-C', 'Umum', 'dinding pecah', '09-09 cempaka', '2017-09-09', '03:37 PM', ''),
('01-01-D', 'Umum', 'Kerosakan lampu jalan', 'Sepanjang taman', '2017-09-06', '05:49 PM', ''),
('04-28-C', 'Umum', 'Kerosakan lif', 'Blok cempaka', '2017-09-06', '06:20 AM', ''),
('09-09-C', 'Kebersihan', 'kotor', 'rumah 09-10 blok cempaka', '2017-09-09', '03:24 PM', 'telah dibersihkan'),
('01-08-D', 'Sosial', 'Lelaki dan perempuan bukan mahram berduaan', 'Taman permainan', '2017-09-07', '01:40 AM', ''),
('02-29-C', 'Parkir', 'lori sampah tidak boleh lalu ', 'parkir di bahagian depan', '2017-09-06', '12:44 PM', ''),
('09-09-C', 'Umum', 'mengganggu ketenteraman', '09-09', '2017-09-09', '03:23 PM', ''),
('04-28-C', 'Umum', 'paip bocor', '04-28, blok cempaka', '2017-09-02', '10:54 PM', 'Kontraktor sudah dihubungi. Kerja akan dijalankan pada 6/9/2017 waktu petang.'),
('04-28-C', 'Umum', 'Saluran air tandas tingkat atas pecah', 'Tandas rumah 04-28, Blok Cempaka', '2017-09-06', '06:20 AM', ''),
('01-08-D', 'Kebersihan', 'Sampah bersepah di luar rumah', 'Depan rumah 01-08 Blok Dahlia', '2017-09-07', '01:49 AM', ''),
('01-01-D', 'Umum', 'Sampah dibuang di depan lif', 'Bawah blok Dahlia', '2017-09-06', '05:50 PM', ''),
('04-28-C', 'Kebersihan', 'Sampah dibuang merata-rata', 'Lif blok Cempaka', '2017-09-05', '06:24 PM', ''),
('01-01-D', 'Umum', 'tangki pecah', '01-01, Blok Dahlia', '2017-09-02', '10:56 PM', 'Kontraktor sudah dihubungi. Kerja akan dijalankan pada 5/9/2017 waktu petang.'),
('01-01-D', 'Umum', 'Tempat bermain untuk kanak -\r\n kanak membahayakan', 'Taman permainan', '2017-09-06', '05:32 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `a_system`
--

CREATE TABLE `a_system` (
  `no` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `jawatan` text NOT NULL,
  `emel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_system`
--

INSERT INTO `a_system` (`no`, `nama`, `alamat`, `no_phone`, `jawatan`, `emel`) VALUES
(1, 'ZAINURIN BIN TAHIR', '10-03, BLOK CEMPAKA, TAMAN TUN TEJA', '017-2353700', 'PENGERUSI', 'zainurin1212@gmail.com'),
(2, 'ABDUL HAMID BIN TALIB', '05-09, BLOK DAHLIA, TAMAN TUN TEJA', '012-5938733', 'TIMBALAN PENGERUSI', 'hamid12@gmail.com'),
(3, 'MOHD ROSLI BIN ISHAK', '04-29, BLOK CEMPAKA, TAMAN TUN TEJA', '012-6773736', 'SETIAUSAHA', 'roslitradisimedi@gmail.com'),
(4, 'SHAHAROM BIN AB LATIFF', '05-12, BLOK DAHLIA, TAMAN TUN TEJA', '014-6833749', 'PENOLONG SETIAUSAHA', 'shaharom0120@gmail.com'),
(5, 'NORRA BINTI ABDULLAH', '04-30, BLOK CEMPAKA, TAMAN TUN TEJA', '017-6681880', 'BENDAHARI', 'norabdul@gmail.com'),
(6, 'NOR ANISAH SALAMAH BINTI MOHD ROSLI', '04-28, BLOK CEMPAKA, TAMAN TUN TEJA', '017-2425069', 'ADMIN', 'arataanisah@gmail.com'),
(7, 'ZULKIFLE BIN MUSTAPHA', '02-05, BLOK DAHLIA, TAMAN TUN TEJA', '017-4663487', 'AHLI BIASA', 'zulkie45@gmail.com'),
(8, 'MOHD SUKIZAM BIN MOHAMED ALI', '10-09, BLOK DAHLIA, TAMAN TUN TEJA', '017-3473948', 'AHLI BIASA', 'zammie@gmail.com'),
(10, 'MAHMUD ALI BIN ZUHAIRI', '01-14, BLOK DAHLIA, TAMAN TUN TEJA', '014-2264661', 'SIAK', 'alizuhairi@gmail.com'),
(11, 'SYED FARID BIN SYED ZAINAL', '09-24, BLOK CEMPAKA, TAMAN TUN TEJA', '012-2112194', 'NAZIR', 'syedfarid@gmail.com'),
(12, 'WAN DANIAL BIN WAN ZAIDI', '09-13, BLOK CEMPAKA, TAMAN TUN TEJA', '019-3752991', 'TIMBALAN NAZIR', 'wandanial@gmail.com'),
(14, 'USTAZ FAHMI BIN HILMI', '03-14, BLOK DAHLIA, TAMAN TUN TEJA', '014-24544648', 'BILAL', 'fahmi@gmail.com'),
(15, 'SYAHIDAH HAZWANI BINTI SYAWAL', '07-07, BLOK CEMPAKA, TAMAN TUN TEJA', '012-5564329', 'BIRO HIBURAN', 'syidalevi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bil_isi_rumah`
--

CREATE TABLE `bil_isi_rumah` (
  `no_id` varchar(7) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bil_isi_rumah`
--

INSERT INTO `bil_isi_rumah` (`no_id`, `nama`, `hubungan`, `umur`, `pekerjaan`) VALUES
('09-09-C', 'Ahmad Zukri bin Mohd Raziq', 'Anak', '17 Tahun', 'Sekolah Menengah Rawang'),
('09-24-D', 'Amy Jia Hui', 'Isteri', '28 Tahun', 'Suri Rumah'),
('07-02-C', 'Ani', 'Bini', '20', 'Tukang Jahit'),
('01-06-D', 'Harini binti Yusuf', 'Kawan', '22 Tahun', 'Universiti Malaya'),
('01-10-D', 'Janaki Devi A/P Kumaravel', 'Isteri', '33 Tahun', 'Cikgu Sekolah'),
('02-29-C', 'Mohd Syukri bin Mohd Khalid', 'Anak', '15', 'Sekolah Menengah Rawang'),
('04-28-C', 'Nor Anisah Salamah binti Mohd Rosli', 'Anak', '20 Tahun', 'Kolej Universiti Islam Antarabangsa Selangor (KUIS)'),
('04-28-C', 'Norra binti Abdullah', 'Isteri', '54 Tahun', 'Kerani'),
('09-09-C', 'Nur Farah Mainah binti Mohd Raqiz', 'Anak', '14 Tahun', 'Sekolah Menengah Rawang'),
('09-09-C', 'Nurul Hafizah binti Shafie', 'Isteri', '40 Tahun', 'Akauntan'),
('02-29-C', 'Nurul Syazwani binti Mohd Khalid', 'Anak', '14', 'Sekolah Menengah Rawang'),
('07-02-C', 'Siti', 'BiniNo 2', '30', 'Chef'),
('02-29-C', 'Siti Mariam binti Hassan', 'Isteri', '40', 'Suri Rumah'),
('01-08-D', 'Tan Zua Hee', 'Anak', '15', 'Sekolah Menengah Garing Rawang');

-- --------------------------------------------------------

--
-- Table structure for table `contactme`
--

CREATE TABLE `contactme` (
  `nama` text NOT NULL,
  `perkara` varchar(255) NOT NULL,
  `mesej` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactme`
--

INSERT INTO `contactme` (`nama`, `perkara`, `mesej`) VALUES
('Latifah', 'Aktiviti lepas nampak meriah', 'Ingin menyertai aktiviti yang akan datang'),
('09-09-C', 'Bantuan sumbangan lawatan ke Zoo negara', 'hubungi saya'),
('public', 'dimana saya boleh cari kedai printing?', 'ws no ini 0125594859'),
('public', 'ingin menyewa rumah', 'emel saya di public@gmail.com sekiranya ada kekosongan'),
('01-01-D', 'jemput ustaz don', 'saya ingin pihak masjid menjemput ustaz don'),
('04-28-C', 'kelas pengurusan jenazah', 'kelas perlu diadakan setiap tahun atau setiap bulan atau setiap minggu'),
('09-09-C', 'Memohon pertolongan menjaga anak', 'hubungi saya'),
('Ain', 'Mesej', 'Ini adalah mesej'),
('04-28-C', 'permohonan menjadi ahli', 'sila emel saya'),
('ZAINURIN BIN TAHIR', 'Permohonan sumbangan', 'memohon bantuan bagi program amal'),
('Fadzilah', 'Permohonan sumbangan rumah anak yatim', 'Hubungi saya'),
('01-01-D', 'pinjam kerusi', 'perlukan 30 buah kerusi');

-- --------------------------------------------------------

--
-- Table structure for table `penceramah`
--

CREATE TABLE `penceramah` (
  `tarikh` date NOT NULL,
  `tajuk` varchar(255) NOT NULL,
  `penceramah` varchar(255) NOT NULL,
  `timeBefore` varchar(255) NOT NULL,
  `timeAfter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penceramah`
--

INSERT INTO `penceramah` (`tarikh`, `tajuk`, `penceramah`, `timeBefore`, `timeAfter`) VALUES
('2017-09-29', 'CERAMAH PERDANA', 'USTAZ HAMIDI IBRAHIM', '07:40PM', '08:30 PM'),
('2017-09-30', 'CERAMAH USTAZ HAMDI', 'USTAZ HAMDI BIN SYUKRI', '07:45 PM', '08:30 PM'),
('2017-09-21', 'KENDURI TAHLIL', 'USTAZ HAFIZ BIN HAFIFI', '07:20 PM', '08:00 PM'),
('2017-09-29', 'KULIAH MAGHRIB', 'USTAZ FAHMI BIN HILMI', '07:45 PM', '08:30 PM'),
('2017-09-12', 'NABI KITA', 'USTAZ WILDAN BIN HUSNI', '08:50 PM', '09:30 PM'),
('2017-09-21', 'PROGRAM MALAM JUMAAT', 'USTAZ HAMIDUN BIN HAJI TALIB', '09:00 PM', '12:00 AM'),
('2017-09-20', 'SOLAT HAJAT', 'USTAZ HAFIZ BIN HAFIFI', '08:45 PM', '10:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `no_id` varchar(7) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `umur` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` text NOT NULL,
  `race` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `jumOrg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`no_id`, `password`, `name`, `umur`, `address`, `status`, `race`, `no_phone`, `owner`, `jumOrg`) VALUES
('01-01-D', 'e99a18c428cb38d5f260853678922e03', 'Nur Hamidah Mawar binti Bakar', '30 Tahun', '01-01, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '014-3374658', 'Lee He Xi', '1'),
('01-02-D', 'e99a18c428cb38d5f260853678922e03', 'Ahmad Karim bin Hazimi', '35 Tahun', '01-02, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '019-4556358', 'Lee Xuan Yi', '1'),
('01-03-D', 'e99a18c428cb38d5f260853678922e03', 'Lin Huan Ho', '50 Tahun', '01-03, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Cina', '019-5536676', '', '1'),
('01-04-D', 'e99a18c428cb38d5f260853678922e03', 'Nur Farhana binti Fauzi', '24 Tahun', '01-04, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '017-4699754', 'Tan Yong Jin', '1'),
('01-05-D', 'e99a18c428cb38d5f260853678922e03', 'Abdul Fatah bin Husin', '43 Tahun', '01-05, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '012-6754565', 'Mohd Razin bin Mohd Razi', '1'),
('01-06-D', 'e99a18c428cb38d5f260853678922e03', 'Syaidatul Izzati binti Anuar', '22 Tahun', '01-06, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '019-8767876', 'Mohd Fakhrul bin Haziqi', '2'),
('01-07-D', 'e99a18c428cb38d5f260853678922e03', 'Muhammad Nazhan bin Mazlan', '28 Tahun', '01-07, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '019-84556767', 'Lim Yuan He', '1'),
('01-08-D', 'e99a18c428cb38d5f260853678922e03', 'Tan Zhi Nin', '36 Tahun', '01-08, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Cina', '012-6554567', '', '2'),
('01-09-D', 'e99a18c428cb38d5f260853678922e03', 'Lim Kua Jee', '22 Tahun', '01-09, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Cina', '012-3949293', '', '1'),
('01-10-D', 'e99a18c428cb38d5f260853678922e03', 'Shamir Idas A/L Kavidas', '34 Tahun', '01-10, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'India', '013-6591649', 'Lee Xuan Yi', '2'),
('02-04-D', 'e99a18c428cb38d5f260853678922e03', 'Mohd Noor Islam bin Sudirman', '27 Tahun', '02-04, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '012-6576558', '', '1'),
('02-29-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Khalid bin Othman', '40 Tahun', '02-29, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-4388574', '', '4'),
('02-30-C', 'e99a18c428cb38d5f260853678922e03', 'Shazmin bin Anuar', '47 Tahun', '02-30, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-5844938', '', '1'),
('03-24-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Hamzi bin Hijri', '20 Tahun', '03-24, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-5546467', '', '1'),
('03-29-D', 'e99a18c428cb38d5f260853678922e03', 'Ahmad Husni bin Zamuri', '45 Tahun', '03-29, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-5494495', '', '1'),
('04-22-D', 'e99a18c428cb38d5f260853678922e03', 'Mohd Rafizi bin Johari', '25 Tahun', '04-22, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '012-6646865', 'Mohd Hazwan bin Haris', '1'),
('04-23-C', 'e99a18c428cb38d5f260853678922e03', 'Nur Syazwani binti Yahya', '27 Tahun', '04-23, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '017-3429223', 'Mohd Faris bin Johan', '1'),
('04-24-C', 'e99a18c428cb38d5f260853678922e03', 'Faris bin Syukri', '44 Tahun', '04-24, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '019-8347583', 'Mohd Rahmat bin Rahman', '1'),
('04-25-C', 'e99a18c428cb38d5f260853678922e03', 'Hafizi bin Zudni', '35 Tahun', '04-25, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-7389937', '', '1'),
('04-26-C', 'e99a18c428cb38d5f260853678922e03', 'Safira binti Huwalid', '40 Tahun', '04-26, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '014-88472938', 'Mohd Salman bin Latif', '1'),
('04-27-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Syafiq bin Azhan', '43 Tahun', '04-27, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', '', 'Melayu', '012-5884930', '', '1'),
('04-28-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Rosli bin Ishak', '54 Tahun', '04-28, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-6773736', '', '3'),
('04-29-C', 'e99a18c428cb38d5f260853678922e03', 'Norra binti Abdullah', '40 Tahun', '04-29, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '017-6681880', '', '1'),
('04-29-D', 'e99a18c428cb38d5f260853678922e03', 'Mohd Ikram bin Husni', '24 Tahun', '04-29, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '012-4466457', 'Mohd Fakhrul bin Haziqi', '1'),
('04-30-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Radzi bin Saifudin', '40 Tahun', '04-30, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '019-3455223', 'Mohd Lut bin Khalid', '1'),
('05-05-D', 'e99a18c428cb38d5f260853678922e03', 'Mohd Fakrul bin Jahri', '25 Tahun', '05-05, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-6694556', '', '1'),
('05-06-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Khalid bin Latif', '25 Tahun', '05-06, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '012-6604495', 'Mohd Lut bin Khalid', '1'),
('06-07-C', 'e99a18c428cb38d5f260853678922e03', 'Ahmad Hamizan bin Ahmad Kamil', '29 Tahun', '06-07, Blok Cempaka, Taman TUn Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '017-9384332', '', '1'),
('06-09-D', 'e99a18c428cb38d5f260853678922e03', 'Khairil Johan bin Latiff', '38 Tahun', '06-09, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '019-3384774', '', '1'),
('06-23-C', 'e99a18c428cb38d5f260853678922e03', 'Harvinder A/L Santok', '33 Tahun', '06-23, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'India', '012-5665675', '', '1'),
('06-30-D', 'e99a18c428cb38d5f260853678922e03', 'Lee Hee Ming', '53 Tahun', '06-30, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Cina', '012-5867558', '', '1'),
('07-01-C', 'e99a18c428cb38d5f260853678922e03', 'Tanesh Naaidu A/L A Balu', '32 Tahun', '07-01, Blok Cempaka, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'India', '014-6722135', '', '1'),
('07-02-C', '09d0714edbfe6a5be5f51a8d706cefb6', 'Abu', '43', '07-02, Blok Cempaka', 'Penyewa', 'India', '019-3345335', 'Ali', '3'),
('07-03-D', 'e99a18c428cb38d5f260853678922e03', 'Shubas Chandran A/L Jayasangaran', '48 Tahun', '07-03, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'India', '019-5744485', '', '1'),
('07-22-C', 'e99a18c428cb38d5f260853678922e03', 'Fairuz bin Ruzni', '55 Tahun', '07-22, Blok Cempaka, Taman TUn Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '014-4883948', '', '1'),
('07-23-D', 'e99a18c428cb38d5f260853678922e03', 'Mohd Lukman bin Yasir', '31 Tahun', '07-23, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '014-5543356', '', '1'),
('08-11-C', 'e99a18c428cb38d5f260853678922e03', 'Hairie bin Roslan', '48 Tahun', '08-11, Blok Cempaka, Taman TUn Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '012-6533583', '', '1'),
('08-25-D', 'e99a18c428cb38d5f260853678922e03', 'Woo Xin Yue', '23 Tahun', '08-25, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Cina', '012-6684933', '', '1'),
('09-09-C', 'e99a18c428cb38d5f260853678922e03', 'Mohd Hafiz bin Samurin', '40 Tahun', '09-09, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '012-4537648', 'Mohd', '4'),
('09-24-D', 'e99a18c428cb38d5f260853678922e03', 'Yow Lik Joon', '30 Tahun', '09-24, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Pemilik', 'Cina', '017-5543928', '', '2'),
('09-30-D', 'bbf2dead374654cbb32a917afd236656', 'Asnawi bin Roslan', '23 Tahun', '09-30, Blok Dahlia, Taman Tun Teja, 48000 Rawang, Selangor', 'Penyewa', 'Melayu', '017-4581232', '', '1'),
('10-07-C', 'e99a18c428cb38d5f260853678922e03', 'Muhd Afhan bin Aznan', '37 Tahun', '10-07, Blok Cempaka, Taman TUn Teja, 48000 Rawang, Selangor', 'Pemilik', 'Melayu', '019-4473847', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `r_system`
--

CREATE TABLE `r_system` (
  `no_id` varchar(7) NOT NULL,
  `name` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail_activity` text NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `timeBefore` text NOT NULL,
  `timeAfter` text NOT NULL,
  `sah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_system`
--

INSERT INTO `r_system` (`no_id`, `name`, `title`, `detail_activity`, `date`, `location`, `timeBefore`, `timeAfter`, `sah`) VALUES
('04-28-C', 'Mohd Rosli bin Ishak', 'Gotong - royong', 'Kerja amal akan dijalankan bagi membersihkan kawasan persekitaran masjid', '2017-09-26', 'Masjid Tun Teja', '05:00 PM', '06:00 PM', ''),
('01-01-D', 'Nur Hamidah Mawar binti Bakar', 'Jamuan Makan ', 'Orang ramai dijemput menghadiri jamuan makan ', '2017-08-31', 'Padang ', '09:00 AM', '05:00 PM', 'sah'),
('04-28-C', 'Pentadbiran', 'Jamuan Raya', 'Dijemput hadir bagi memeriahkan suasana!', '2017-10-24', 'Bawah Blok Cempaka', '09:00 PM', '11:00 PM', 'sah'),
('01-08-D', 'Tan Zhi Nin', 'Kelas Mengaji', 'Kelas mengaji', '2017-09-23', 'Masjid Tun Teja', '09:00 PM', '09:30 PM', 'sah'),
('09-09-C', 'Mohd Raziq bin Samurin', 'Kempen Membaca', 'Perpustakaan bergerak akan tiba di kawasan parkir pada awal pagi hingga pukul 12 tgh.', '2017-10-28', 'Kawasan parkir', '08:00 AM', '12:00 PM', ''),
('01-01-D', 'Nur Hamidah Mawar binti Bakar', 'kenduri tahlil', 'kenduri tahlil', '2017-09-15', 'rumah 01-01 dahlia', '09:00 PM', '11:00 PM', 'sah'),
('09-09-C', 'Mohd Raziq bin Samurin', 'majlis akikah', 'sahabat dijemput hadir', '2017-10-18', '09-09 cempaka', '05:00 PM', '06:00 PM', ''),
('02-29-C', 'Mohd Khalid bin Othman', 'Majlis bacaan yasin', 'bacaan yasin bagi aktiviti ibadah', '2017-09-27', 'rumah 02-29 Blok Cempaka', '10:00 AM', '10:30 AM', 'sah'),
('04-28-C', 'Pentadbiran', 'Majlis Khatam Quran', 'Para penduduk Taman Tun Teja dijemput hadir bagi memberi semangat kepada calon yang telah habis membaca Al-Quran.', '2017-12-10', 'Masjid Tun Teja', '08:00 AM', '11:00 AM', 'sah'),
('01-01-D', 'Nur Hamidah Mawar binti Bakar', 'Sambutan Hari Lahir Anak', 'Sesiapa yang mengenali keluarga kami dijemput hadir...', '2017-09-29', 'Rumah 01-01, Dahlia', '12:00 PM', '04:00 PM', 'sah');

-- --------------------------------------------------------

--
-- Table structure for table `update_system`
--

CREATE TABLE `update_system` (
  `no` int(11) NOT NULL,
  `no_id` varchar(7) NOT NULL,
  `activity` text NOT NULL,
  `detail_activity` text NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `timeBefore` int(11) NOT NULL,
  `timeAfter` int(11) NOT NULL,
  `timeAMPM` varchar(2) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`prob`);

--
-- Indexes for table `a_system`
--
ALTER TABLE `a_system`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `bil_isi_rumah`
--
ALTER TABLE `bil_isi_rumah`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `contactme`
--
ALTER TABLE `contactme`
  ADD PRIMARY KEY (`perkara`);

--
-- Indexes for table `penceramah`
--
ALTER TABLE `penceramah`
  ADD PRIMARY KEY (`tajuk`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `r_system`
--
ALTER TABLE `r_system`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `update_system`
--
ALTER TABLE `update_system`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
