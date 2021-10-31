-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 04:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agendabpkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_pegawai` int(100) NOT NULL,
  `hadir` int(100) NOT NULL,
  `izin` int(100) NOT NULL,
  `tidak_hadir` int(100) NOT NULL,
  `bulan` int(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `id_pegawai`, `hadir`, `izin`, `tidak_hadir`, `bulan`, `tanggal`) VALUES
(13, 10, 20, 0, 0, 1, '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pegawai` int(11) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `level`, `log`, `id_pegawai`, `nip`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin2', 'admin', '2020-11-15 09:47:08', 1, NULL),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'user', '2018-04-02 18:27:39', NULL, NULL),
(4, 'pejabat', 'e0c4bde30c959d22007497388ca42a4e', ' Test67', 'user', '2020-11-14 13:00:17', 2, NULL),
(5, 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', ' Test67', 'pegawai', '2020-11-14 13:01:52', 2, NULL),
(6, 'sespri', '09968bfea4fbc189d492ec2594d12dd6', ' Test kost2', 'sespri', '2020-11-22 18:24:46', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` bigint(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `nama_agenda` varchar(255) DEFAULT NULL,
  `lokasi_agenda` varchar(255) DEFAULT NULL,
  `status_agenda` varchar(255) DEFAULT NULL,
  `tipestatus_agenda` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `informasi` text,
  `id_pegawai` int(255) DEFAULT NULL,
  `nama_pejabat` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `id_pejabat` bigint(255) DEFAULT NULL,
  `id_pejabatdisposisi` bigint(255) DEFAULT NULL,
  `isi_disposisi` varchar(255) DEFAULT NULL,
  `status_disposisi` int(10) DEFAULT NULL,
  `alasan_penolakan` varchar(255) DEFAULT NULL,
  `sebagai` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tanggal`, `jam_mulai`, `jam_selesai`, `nama_agenda`, `lokasi_agenda`, `status_agenda`, `tipestatus_agenda`, `contact_person`, `informasi`, `id_pegawai`, `nama_pejabat`, `nama_pegawai`, `id_pejabat`, `id_pejabatdisposisi`, `isi_disposisi`, `status_disposisi`, `alasan_penolakan`, `sebagai`) VALUES
(4, '2020-10-22', '10:22:00', '21:22:00', 'test6', '<p>test6</p>', '0', NULL, 'test6', '<p>test6</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(5, '2020-10-21', '10:21:00', '21:21:00', 'test81', '<p>test81</p>', '0', NULL, 'test81', '<p>test81</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(6, '2020-11-25', '01:48:00', '13:48:00', 'test6', '<p>test6</p>', NULL, NULL, '1232121', '<p>test6</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(7, '2020-11-18', '04:41:00', '15:41:00', 'test67', '<p>test67</p>', NULL, NULL, 'test67', '<p>test67</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(8, '2020-12-16', '05:01:00', '17:02:00', 'test67', '<p>test67</p>', NULL, NULL, 'test67', '<p>test67</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(9, '2020-12-17', '06:10:00', '17:10:00', 'tst67', '<p>tst67</p>', NULL, NULL, 'tst67', '<p>tst67</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(10, '2021-12-15', '06:13:00', '17:13:00', 'test89', '<p>test89</p>', NULL, NULL, 'test89', '<p>test89</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(11, '2020-12-22', '07:03:00', '19:03:00', 'test87', '<p>test87</p>', NULL, NULL, 'test87', '<p>test87</p>', 2, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(12, '2021-01-14', '07:29:00', '19:29:00', 'tets090', '<p>tets090</p>', NULL, NULL, 'tets090', '<p>tets090</p>', 1, '0', NULL, 1, NULL, NULL, NULL, NULL, NULL),
(13, '2021-02-23', '07:35:00', '19:36:00', 'test87', '<p>test87</p>', NULL, NULL, 'test87', '<p>test87</p>', 2, '0', NULL, 0, NULL, NULL, NULL, NULL, 'Nara Sumber'),
(14, '2020-11-22', '06:31:00', '22:31:00', 'test76', '', NULL, NULL, 'test67', '<p>test67</p>', 1, '0', NULL, 0, NULL, NULL, NULL, NULL, 'Nara Sumber'),
(15, '2021-01-18', '06:19:00', '20:19:00', 'test78', '<p>test78</p>', NULL, NULL, 'test78', '<p>test78</p>', 1, '0', NULL, 0, NULL, NULL, NULL, NULL, 'Nara Sumber'),
(16, '2020-11-21', '15:00:00', '17:00:00', 'test89', '<p>test89</p>', NULL, NULL, 'test89', '<p>test89</p>', 1, '0', NULL, 0, NULL, NULL, NULL, NULL, 'Nara Sumber');

-- --------------------------------------------------------

--
-- Table structure for table `agendafile`
--

CREATE TABLE `agendafile` (
  `id_agendafile` bigint(255) NOT NULL,
  `agenda_file` varchar(255) DEFAULT NULL,
  `id_agenda` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendafile`
--

INSERT INTO `agendafile` (`id_agendafile`, `agenda_file`, `id_agenda`) VALUES
(1, '121312.jpg', 23),
(2, '1213121.jpg', 24),
(3, '1647146_7090163f-85b2-4ade-98fe-f0174e5a92a7.jpg', 24);

-- --------------------------------------------------------

--
-- Table structure for table `agendapegawai`
--

CREATE TABLE `agendapegawai` (
  `id_agendapegawai` bigint(255) NOT NULL,
  `id_pegawai` int(255) DEFAULT NULL,
  `id_agenda` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendapegawai`
--

INSERT INTO `agendapegawai` (`id_agendapegawai`, `id_pegawai`, `id_agenda`) VALUES
(1, 1, 8),
(2, 1, 9),
(3, 1, 10),
(4, 1, 11),
(5, 1, 12),
(6, 1, 12),
(8, 1, 14),
(9, 1, 15),
(10, 1, 16),
(11, 1, 17),
(12, 1, 18),
(13, 1, 19),
(14, 1, 20),
(15, 1, 21),
(16, 1, 22),
(17, 1, 23),
(18, 1, 24),
(19, 1, 24),
(20, 1, NULL),
(21, 1, NULL),
(22, 1, 6),
(23, 1, 7),
(24, 2, 7),
(25, 1, 8),
(26, 2, 8),
(27, 1, 9),
(28, 2, 9),
(29, 1, 10),
(30, 2, 10),
(31, 1, NULL),
(32, 2, NULL),
(33, 1, 11),
(34, 2, 11),
(35, 1, 12),
(36, 2, 12),
(39, 1, 13),
(40, 2, 13),
(41, 1, 14),
(42, 2, 14),
(43, 1, 15),
(44, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `deputi`
--

CREATE TABLE `deputi` (
  `id_deputi` int(11) NOT NULL,
  `nama_deputi` varchar(100) NOT NULL,
  `satuankerja` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deputi`
--

INSERT INTO `deputi` (`id_deputi`, `nama_deputi`, `satuankerja`) VALUES
(1, 'Sekretariat Utama', '0'),
(2, 'Kedeputian Bidang Pengkajian dan Materi (Deputi 1)', '0'),
(3, 'Kedeputian Bidang Pengendalian dan Evaluasi (Deputi2)', '0'),
(4, 'Kedeputian Bidang Pendidikan dan Pelatihan (Deputi3)', '0'),
(5, 'Kedeputian Bidang Hubungan Antar Lembaga, Sosialisasi, Komunikasi, dan Jaringan (Deputi4)', '0'),
(6, 'Kedeputian Bidang Hukum, Advokasi dan Pengawasan Regulasi (Deputi5)', '0');

-- --------------------------------------------------------

--
-- Table structure for table `golruang`
--

CREATE TABLE `golruang` (
  `id_golruang` int(11) NOT NULL,
  `nama_golruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golruang`
--

INSERT INTO `golruang` (`id_golruang`, `nama_golruang`) VALUES
(1, 'I/a'),
(2, 'I/b'),
(3, 'I/c'),
(4, 'I/d'),
(5, 'II/a'),
(6, 'II/b'),
(7, 'II/c'),
(8, 'II/d'),
(9, 'III/a'),
(10, 'III/b'),
(11, 'III/c'),
(12, 'III/d'),
(13, 'IV/a'),
(14, 'IV/b'),
(15, 'IV/c'),
(16, 'IV/d'),
(17, 'IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL,
  `golongan` varchar(100) DEFAULT NULL,
  `tunjangan` int(100) DEFAULT NULL,
  `id_deputi` int(11) DEFAULT NULL,
  `id_unitkerja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `golongan`, `tunjangan`, `id_deputi`, `id_unitkerja`) VALUES
(1, 'Test Kerja 2', '0', 0, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jenisjabatan`
--

CREATE TABLE `jenisjabatan` (
  `id_jenisjabatan` int(11) NOT NULL,
  `nama_jenisjabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisjabatan`
--

INSERT INTO `jenisjabatan` (`id_jenisjabatan`, `nama_jenisjabatan`) VALUES
(1, 'JPT Pratama'),
(2, 'Jab. Administrator'),
(3, 'Jab. Pelaksana'),
(4, 'JPT Madya');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` bigint(255) NOT NULL,
  `id_agenda` bigint(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `id_pegawai` bigint(255) DEFAULT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `lokasi_kegiatan` varchar(255) DEFAULT NULL,
  `status_kegiatan` varchar(255) DEFAULT NULL,
  `tipestatus_kegiatan` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `informasi` text,
  `nama_pejabat` varchar(255) DEFAULT NULL,
  `id_pejabat` bigint(255) DEFAULT NULL,
  `id_pejabatdisposisi` bigint(255) DEFAULT NULL,
  `disposisi` varchar(255) DEFAULT NULL,
  `alasan_penolakan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_agenda`, `tanggal`, `jam_mulai`, `jam_selesai`, `id_pegawai`, `nama_kegiatan`, `lokasi_kegiatan`, `status_kegiatan`, `tipestatus_kegiatan`, `contact_person`, `informasi`, `nama_pejabat`, `id_pejabat`, `id_pejabatdisposisi`, `disposisi`, `alasan_penolakan`) VALUES
(1, 1, '2020-10-22', '11:00:00', '18:00:00', 2, 'test', 'test', '1', 'Private', 'test', 'test', 'test', NULL, NULL, NULL, NULL),
(3, 1, '2020-10-07', '01:55:00', '13:55:00', 2, 'test', 'test', '0', NULL, 'test', 'test', 'test', NULL, NULL, NULL, NULL),
(4, 1, '2020-10-22', '02:07:00', '14:07:00', 9, 'test6', 'test6', '3', NULL, 'test6', 'test6', 'test6', NULL, 10, 'test61', NULL),
(6, 1, '2020-10-21', '08:00:00', '21:00:00', 2, 'test678', 'test678', '2', NULL, 'test678', 'test678', 'test678', NULL, NULL, NULL, 'test61');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `id_deputi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `nama_organisasi`, `id_deputi`) VALUES
(1, 'Sekretariat Utama', 1),
(2, 'Biro Perencanaan dan Keuangan', 1),
(3, 'Biro Hukum dan Organisasi', 1),
(4, 'Biro Umum dan Sumber Daya Manusia', 1),
(5, 'Biro Fasilitasi Dewan Pengarah', 1),
(6, 'Biro Pengawasan Internal', 1),
(7, 'Pusat Data dan Informasi', 1),
(8, 'Deputi Bidang Hubungan Antar Lembaga, Sosialisasi, Komunikasi, dan Jaringan', 2),
(9, 'Direktorat Hubungan Antar Lembaga dan Kerjasama', 2),
(10, 'Direktorat Sosialisasi Komunikasi dan Jaringan', 2),
(11, 'Sub Direktorat Pengembangan Jaringan', 2),
(12, 'Direktorat Pembudayaan', 2),
(13, 'Kedeputian Bidang Hukum, Advokasi dan Pengawasan Regulasi', 3),
(14, 'Direktorat Analis dan Sinkronisasi', 3),
(15, 'Direktorat Advokasi', 3),
(16, 'Direktorat Pelembagaan dan Rekomendasi', 3),
(17, 'Kedeputian Bidang Pengkajian dan Materi', 4),
(18, 'Direktorat Pengkajian dan Materi', 4),
(19, 'Direktorat Standarisasi Materi dan Metode Aparatur Negara', 4),
(20, 'Direktorat Standardisasi Materi dan Metode Formal, Nonformal dan Informal', 4),
(21, 'Kedeputian Bidang Pendidikan dan Pelatihan', 5),
(22, 'Direktorat Perencanaan dan Kerjasama Pendidikan dan Pelatihan', 5),
(23, 'Direktorat Standardisasi dan Kurikulum Pendidikan dan Pelatihan', 5),
(24, 'Direktorat Penyelenggaraan Pendidikan dan Pelatihan', 5),
(25, 'Kedeputian Bidang Pengendalian dan Evaluasi', 6),
(26, 'Direktorat Pengendalian', 6),
(27, 'Direktorat Evaluasi', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_deputi` int(11) DEFAULT NULL,
  `id_statusasn` int(11) DEFAULT NULL,
  `id_golruang` int(11) DEFAULT NULL,
  `id_jabatan` int(110) NOT NULL,
  `id_jenisjabatan` int(11) DEFAULT NULL,
  `id_organisasi` int(11) DEFAULT NULL,
  `id_unitkerja` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempatlahir` varchar(255) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `GolRuang` varchar(255) DEFAULT NULL,
  `TmtGolRuang` varchar(255) DEFAULT NULL,
  `MKTahun` varchar(255) DEFAULT NULL,
  `MKBulan` varchar(255) DEFAULT NULL,
  `jk` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `status_kep` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_deputi`, `id_statusasn`, `id_golruang`, `id_jabatan`, `id_jenisjabatan`, `id_organisasi`, `id_unitkerja`, `id_admin`, `nip`, `nama`, `tempatlahir`, `tanggallahir`, `GolRuang`, `TmtGolRuang`, `MKTahun`, `MKBulan`, `jk`, `foto`, `agama`, `pendidikan`, `status_kep`, `alamat`, `nohp`) VALUES
(1, 1, 1, 1, 1, 0, 0, 5, NULL, '12321321', 'test kost2', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'foto_1605434353.jpg', 'islam', 'test', '0', '<p>test67</p>', '12321'),
(2, 1, 1, 2, 1, 0, 0, 1, NULL, '21321312', 'test67', NULL, NULL, NULL, NULL, NULL, NULL, 'L', '', 'islam', 'test67', '0', '<p>test67</p>', '21321321');

-- --------------------------------------------------------

--
-- Table structure for table `satuankerja`
--

CREATE TABLE `satuankerja` (
  `id_satuankerja` int(11) NOT NULL,
  `nama_satuankerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuankerja`
--

INSERT INTO `satuankerja` (`id_satuankerja`, `nama_satuankerja`) VALUES
(1, 'Kedeputian Bidang Pengendalian dan Evaluasi'),
(2, 'Kedeputian Bidang Pendidikan dan Pelatihan'),
(3, 'Kedeputian Bidang Pengkajian dan Materi'),
(4, 'Kedeputian Bidang Hukum, Advokasi dan Pengawasan Regulasi'),
(5, 'Kedeputian Bidang Hubungan Antar Lembaga, Sosialisasi, Komunikasi, dan Jaringan'),
(6, 'Sekretariat Utama');

-- --------------------------------------------------------

--
-- Table structure for table `statusasn`
--

CREATE TABLE `statusasn` (
  `id_statusasn` int(11) NOT NULL,
  `nama_statusasn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusasn`
--

INSERT INTO `statusasn` (`id_statusasn`, `nama_statusasn`) VALUES
(1, 'PNS'),
(2, 'PPPK'),
(4, 'Non PNS');

-- --------------------------------------------------------

--
-- Table structure for table `subunitkerja`
--

CREATE TABLE `subunitkerja` (
  `id_subunitkerja` int(11) NOT NULL,
  `nama_subunitkerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tpp`
--

CREATE TABLE `tpp` (
  `id_tpp` int(11) NOT NULL,
  `id_pegawai` int(100) NOT NULL,
  `jumlah_tpp` varchar(100) NOT NULL,
  `jumlah_potongan` varchar(100) NOT NULL,
  `bulan_t` int(100) NOT NULL,
  `tahun` int(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpp`
--

INSERT INTO `tpp` (`id_tpp`, `id_pegawai`, `jumlah_tpp`, `jumlah_potongan`, `bulan_t`, `tahun`, `tgl`) VALUES
(7, 8, '300000', '0%', 1, 2018, '2018-04-02'),
(9, 9, '12750000', '0%', 5, 2020, '2020-05-01'),
(10, 10, '8749970', '30%', 1, 2020, '2020-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id_unitkerja` int(11) NOT NULL,
  `nama_unitkerja` varchar(100) NOT NULL,
  `id_organisasi` int(11) DEFAULT NULL,
  `id_deputi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitkerja`
--

INSERT INTO `unitkerja` (`id_unitkerja`, `nama_unitkerja`, `id_organisasi`, `id_deputi`) VALUES
(1, 'Biro Perencanaan dan Keuangan', 0, 1),
(2, 'Biro Hukum dan Organisasi', 0, 1),
(3, 'Biro Umum dan Sumber Daya Manusia', 0, 1),
(4, 'Biro Fasilitasi Dewan Pengarah', 0, 1),
(5, 'Biro Pengawasan Internal', 0, 1),
(6, 'Pusat Data dan Informasi', 0, 1),
(7, 'Deputi Bidang Pengkajian dan Materi', 0, 2),
(8, 'Direktorat Pengkajian dan Materi', 0, 2),
(9, 'Direktorat Standardisasi Materi dan Metode Aparatur Negara', 0, 2),
(10, 'Direktorat Standarisasi Materi dan Metode Formal, NonFormal dan Informal ', 0, 2),
(11, 'Deputi Bidang Pengendalian dan Evaluasi', 0, 3),
(12, 'Direktorat Evaluasi', 0, 3),
(13, 'Direktorat Pengendalian', 0, 3),
(14, 'Direktorat Bidang Pendidikan Dan Pelatihan', 0, 4),
(15, 'Direktorat Perencanaan dan Kerjasama Pendidikan dan Pelatihan', 0, 4),
(16, 'Direktorat Standardisasi dan Kurikulum Pendidikan dan Pelatihan', 0, 4),
(17, 'Direktorat Penyelenggaraan Pendidikan dan Pelatihan', 0, 4),
(18, 'Deputi Bidang Hubungan Antar Lembaga, Sosialisasi, Komunikasi, dan Jaringan', 0, 5),
(19, 'Direktorat Hubungan Antar Lembaga dan Kerjasama', 0, 5),
(20, 'Direktorat Sosialisasi Komunikasi dan Jaringan', 0, 5),
(21, 'Direktorat Pembudayaan', 0, 5),
(22, 'Deputian Bidang Hukum, Advokasi dan Pengawasan Regulasi', 0, 6),
(23, 'Direktorat Analis dan Sinkronisasi', 0, 6),
(24, 'Direktorat Advokasi', 0, 6),
(25, 'Direktorat Pelembagaan dan Rekomendasi', 0, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `agendafile`
--
ALTER TABLE `agendafile`
  ADD PRIMARY KEY (`id_agendafile`);

--
-- Indexes for table `agendapegawai`
--
ALTER TABLE `agendapegawai`
  ADD PRIMARY KEY (`id_agendapegawai`);

--
-- Indexes for table `deputi`
--
ALTER TABLE `deputi`
  ADD PRIMARY KEY (`id_deputi`);

--
-- Indexes for table `golruang`
--
ALTER TABLE `golruang`
  ADD PRIMARY KEY (`id_golruang`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jenisjabatan`
--
ALTER TABLE `jenisjabatan`
  ADD PRIMARY KEY (`id_jenisjabatan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `satuankerja`
--
ALTER TABLE `satuankerja`
  ADD PRIMARY KEY (`id_satuankerja`);

--
-- Indexes for table `statusasn`
--
ALTER TABLE `statusasn`
  ADD PRIMARY KEY (`id_statusasn`);

--
-- Indexes for table `subunitkerja`
--
ALTER TABLE `subunitkerja`
  ADD PRIMARY KEY (`id_subunitkerja`);

--
-- Indexes for table `tpp`
--
ALTER TABLE `tpp`
  ADD PRIMARY KEY (`id_tpp`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id_unitkerja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `agendafile`
--
ALTER TABLE `agendafile`
  MODIFY `id_agendafile` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agendapegawai`
--
ALTER TABLE `agendapegawai`
  MODIFY `id_agendapegawai` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `deputi`
--
ALTER TABLE `deputi`
  MODIFY `id_deputi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `golruang`
--
ALTER TABLE `golruang`
  MODIFY `id_golruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenisjabatan`
--
ALTER TABLE `jenisjabatan`
  MODIFY `id_jenisjabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satuankerja`
--
ALTER TABLE `satuankerja`
  MODIFY `id_satuankerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statusasn`
--
ALTER TABLE `statusasn`
  MODIFY `id_statusasn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subunitkerja`
--
ALTER TABLE `subunitkerja`
  MODIFY `id_subunitkerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tpp`
--
ALTER TABLE `tpp`
  MODIFY `id_tpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id_unitkerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
