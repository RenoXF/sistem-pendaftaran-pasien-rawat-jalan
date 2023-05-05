-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 09:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisrajal`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dokter`
--

CREATE TABLE `data_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nip_dokter` varchar(20) NOT NULL,
  `nama_dokter` varchar(120) NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `spesialis` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_dokter`
--

INSERT INTO `data_dokter` (`id_dokter`, `nip_dokter`, `nama_dokter`, `jenis_kelamin`, `alamat`, `no_telepon`, `spesialis`) VALUES
(6, '123345567899766', 'Dr. MOCHTAR BUCHORI', 'LAKI-LAKI', 'SOLO', '08924751639813', 'UMUM'),
(7, '191122224525526', 'Dr. ASIH, A. SpOG (K)', '', 'SOLO', '0894673839465', 'KEBIDANAN DAN KANDUNGAN'),
(8, '122345556722134', 'Dr. ARIESTA AYU. A', '', 'SOLO', '0856738282641', 'UMUM'),
(9, '11511223684958', 'Drg. DENTADIO G, M.M.', 'LAKI-LAKI', 'SOLO', '08772645512', 'GIGI'),
(10, '0000000000', 'Dr. Elvira', 'Perempuan', 'Sukoharjo', '081357267496', 'UMUM');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `no_rm` varchar(8) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tpt_lahir` varchar(30) NOT NULL,
  `status_pasien` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `keluarga` varchar(40) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`no_rm`, `no_identitas`, `nama_pasien`, `jenis_kelamin`, `tgl_lahir`, `tpt_lahir`, `status_pasien`, `agama`, `alamat`, `pekerjaan`, `keluarga`, `no_tlp`) VALUES
('RM000001', '3320012512010004', 'JAIDEN', 'LAKI-LAKI', '2001-12-25', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO 02/01, LAWEYAN', 'PELAJAR/MAHASISWA', 'YAYIT', '08964522789'),
('RM000002', '3320001555500004', 'DAFFA AJI WIBOWO', 'LAKI-LAKI', '2001-02-13', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'SUKOHARJO', 'PELAJAR/MAHASISWA', 'WIBOWO', '089245342167'),
('RM000003', '3320032632030001', 'ANIQ JIDAN', 'LAKI-LAKI', '2001-12-26', 'JEPARA', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO 04/05, LAWEYAN', 'PELAJAR/MAHASISWA', 'YAYAT', '089633981244'),
('RM000004', '3320032302010004', 'JAMAL', 'LAKI-LAKI', '2001-02-23', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'PARANGKUSUMO V 02/02, LAWEYAN', 'PELAJAR/MAHASISWA', 'UDIN', '089765456321'),
('RM000005', '3320002027410004', 'SYAIFUL AHMMAD', 'LAKI-LAKI', '1974-02-02', 'SOLO', 'MENIKAH', 'ISLAM', 'PARANGBARIS 04/04, lAWEYAN', 'WIRASWASTA', 'AHMAD', '085865717141'),
('RM000006', '3320031901840004', 'NUR JANAH', 'PEREMPUAN', '1984-01-19', 'SOLO', 'MENIKAH', 'ISLAM', 'JONGKE 02/02', 'MENGURUS RUMAH TANGGA', 'ZAENAL', '081245679812'),
('RM000007', '3320010906770004', 'MAEMUNAH', 'PEREMPUAN', '1977-06-09', 'SOLO', 'MENIKAH', 'ISLAM', 'JONGKE 04/02', 'MENGURUS RUMAH TANGGA', 'SAID', '087373456891'),
('RM000008', '3320031709990004', 'ANIDA AYU', 'PEREMPUAN', '1999-09-17', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO 02/04, LAWEYAN', 'PELAJAR/MAHASISWA', 'GANI', '087654712345'),
('RM000009', '3320032104060004', 'MARETA AYU', 'PEREMPUAN', '2006-04-21', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'JONGKE 02/04', 'BELUM/TIDAK BEKERJA', 'SUJINAH', '0856713245'),
('RM000010', '3320031712840004', 'SYIFA HANI', 'PEREMPUAN', '1984-12-17', 'SOLO', 'MENIKAH', 'ISLAM', 'KIDULPASAR 06/07', 'WIRASWASTA', 'HANI', '087733547212'),
('RM000011', '3320011212010004', 'SOHIBUL ANWAR', 'LAKI-LAKI', '2001-12-12', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO LAWEYAN', 'PELAJAR/MAHASISWA', 'KARIMAH', '089456342132'),
('RM000012', '332001564700004', 'JIDAN NURHIDAYAT', 'LAKI-LAKI', '2001-12-26', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO LAWEYAN', 'PELAJAR/MAHASISWA', 'UDIN', '08956738181'),
('RM000013', '3320032632030001', 'YUNITA WISDA', 'PEREMPUAN', '2021-01-28', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'SOLO', 'BELUM/TIDAK BEKERJA', 'JIDAN', '08956738181'),
('RM000014', '33789906695435', 'JADID', 'LAKI-LAKI', '2000-11-15', 'SALATIGA', 'BELUM MENIKAH', 'ISLAM', 'PABELAN', 'PELAJAR/MAHASISWA', 'JALI', '089765432322'),
('RM000015', '3320014231030001', 'JAMIL', 'LAKI-LAKI', '2000-02-01', 'SOLO', 'BELUM MENIKAH', 'KRISTEN', 'LAWEYAN', 'PELAJAR/MAHASISWA', 'JUNAIDI', '089765847676'),
('RM000016', '3320012765400004', 'ZAKKI', 'LAKI-LAKI', '2020-02-29', 'SOLO', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO LAWEYAN', 'BELUM/TIDAK BEKERJA', 'SITI', '08876545665'),
('RM000017', '3320034532030002', 'DENIS', 'LAKI-LAKI', '2004-05-03', 'KLATEN', 'BELUM MENIKAH', 'ISLAM', 'TEGALREJO LAWEYAN', 'PELAJAR/MAHASISWA', 'SAMIR', '089776543345'),
('RM000018', '3320012167200004', 'HELDA', 'PEREMPUAN', '1995-06-20', 'WONOGIRI', 'BELUM MENIKAH', 'ISLAM', 'WONOGIRI', 'PNS', 'BUDI', '087677353212');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftaran`
--

CREATE TABLE `data_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `no_rm` varchar(8) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_poliklinik` varchar(120) NOT NULL,
  `id_dokter` varchar(120) NOT NULL,
  `no_antrian` varchar(4) NOT NULL,
  `petugas` varchar(40) NOT NULL,
  `status_periksa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`id_pendaftaran`, `no_rm`, `nama_pasien`, `tgl_pendaftaran`, `id_poliklinik`, `id_dokter`, `no_antrian`, `petugas`, `status_periksa`) VALUES
(15, 'RM000001', 'JAIDEN', '2022-06-25', 'POLI UMUM', '6', '1', 'Elvira', 'SELESAI'),
(16, 'RM000002', 'DAFFA AJI WIBOWO', '2022-06-25', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '2', 'Elvira', 'SELESAI'),
(17, 'RM000003', 'ANIQ JIDAN', '2022-06-25', 'POLI GIGI', 'Drg. DENTADIO G, M.M.', '1', 'Elvira', 'SELESAI'),
(18, 'RM000004', 'JAMAL', '2022-06-25', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '3', 'Elvira', 'SELESAI'),
(19, 'RM000005', 'SYAIFUL AHMMAD', '2022-06-25', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '4', 'Elvira', 'SELESAI'),
(20, 'RM000006', 'NUR JANAH', '2022-06-26', 'POLI OBGYN', 'Dr. ASIH, A. SpOG (K)', '1', 'Elvira', 'SELESAI'),
(21, 'RM000007', 'MAEMUNAH', '2022-06-26', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '1', 'Elvira', 'SELESAI'),
(22, 'RM000008', 'ANIDA AYU', '2022-06-26', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '2', 'Elvira', 'SELESAI'),
(23, 'RM000009', 'MARETA AYU', '2022-06-26', 'POLI GIGI', 'Drg. DENTADIO G, M.M.', '1', 'Elvira', 'SELESAI'),
(24, 'RM000010', 'SYIFA HANI', '2022-06-26', 'POLI OBGYN', 'Dr. ASIH, A. SpOG (K)', '2', 'Elvira', 'SELESAI'),
(25, 'RM000011', 'SOHIBUL ANWAR', '2022-06-26', 'POLI GIGI', 'Drg. DENTADIO G, M.M.', '2', 'Elvira', 'SELESAI'),
(26, 'RM000012', 'JIDAN NURHIDAYAT', '2022-06-27', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '1', 'Elvira', 'SELESAI'),
(27, 'RM000013', 'YUNITA WISDA', '2022-06-28', 'POLI GIGI', 'Drg. DENTADIO G, M.M.', '1', 'Elvira', 'SELESAI'),
(28, 'RM000014', 'JADID', '2022-07-21', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', '1', 'Elvira', 'SELESAI'),
(33, 'RM000015', 'JAMIL', '2022-08-29', 'POLI GIGI', 'Drg. DENTADIO G, M.M.', '1', 'Elvira', 'SELESAI'),
(34, 'RM000017', 'DENIS', '2022-09-06', 'POLI GIGI', 'Drg. DENTADIO G, M.M.', 'A001', 'Elvira', 'SELESAI'),
(35, 'RM000018', 'HELDA', '2022-09-06', 'POLI UMUM', 'Dr. MOCHTAR BUCHORI', 'A002', 'Elvira', 'SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `data_poliklinik`
--

CREATE TABLE `data_poliklinik` (
  `id_poliklinik` int(11) NOT NULL,
  `nama_poliklinik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_poliklinik`
--

INSERT INTO `data_poliklinik` (`id_poliklinik`, `nama_poliklinik`) VALUES
(1, 'POLI UMUM'),
(2, 'POLI GIGI'),
(3, 'POLI OBGYN'),
(4, 'POLI FISIOTERAPI'),
(5, 'LABORATORIUM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('Admin','Dokter') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'Admin', 'N', ''),
(2, 'elvira', '21232f297a57a5a743894a0e4a801fc3', 'Elvira@gmail.com', 'Dokter', 'N', ''),
(3, 'Dr.Muchtar', '21232f297a57a5a743894a0e4a801fc3', 'muchtar@gmail.com', 'Dokter', 'N', ''),
(4, 'Eni', '21232f297a57a5a743894a0e4a801fc3', 'eni1221@gmail.com', 'Admin', 'N', ''),
(5, 'SriAyu', '21232f297a57a5a743894a0e4a801fc3', 'sriayu@gmail.com', 'Admin', 'N', ''),
(6, 'Haryanti', '21232f297a57a5a743894a0e4a801fc3', 'haryanti@gmail.com', 'Admin', 'N', ''),
(7, 'Yayuk', '21232f297a57a5a743894a0e4a801fc3', 'yayuk1432@gmail.com', 'Admin', 'N', ''),
(8, 'Desy', '21232f297a57a5a743894a0e4a801fc3', 'desy22@gmail.com', 'Admin', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dokter`
--
ALTER TABLE `data_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `data_poliklinik`
--
ALTER TABLE `data_poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_dokter`
--
ALTER TABLE `data_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `data_poliklinik`
--
ALTER TABLE `data_poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
