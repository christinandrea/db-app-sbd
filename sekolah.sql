-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2021 at 05:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidangStudi`
--

CREATE TABLE `bidangStudi` (
  `kodeBidangStudi` varchar(8) NOT NULL,
  `namaBidangStudi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidangStudi`
--

INSERT INTO `bidangStudi` (`kodeBidangStudi`, `namaBidangStudi`) VALUES
('ACC', 'Teknik Akses'),
('TIK', 'Teknologi Informasi dan Komunikasi');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` int(16) NOT NULL,
  `namaGuru` varchar(40) NOT NULL,
  `tanggalLahirGuru` date NOT NULL,
  `jenisKelaminGuru` enum('Perempuan','Laki-laki') NOT NULL,
  `alamatGuru` varchar(50) NOT NULL,
  `noTelpGuru` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `namaGuru`, `tanggalLahirGuru`, `jenisKelaminGuru`, `alamatGuru`, `noTelpGuru`) VALUES
(1, 'Wulan', '1965-09-21', 'Perempuan', 'Yogyakarta', '081636277'),
(8908719, 'Riswanda', '1990-09-27', 'Perempuan', 'Seturan, Yogyakarta', '089766812902');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `sesi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`idJadwal`, `hari`, `sesi`) VALUES
('SCH001', 'Selasa', '07.30 - 08.45');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kodeJurusan` varchar(5) NOT NULL,
  `namaJurusan` varchar(30) NOT NULL,
  `kodeBidangStudi` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kodeJurusan`, `namaJurusan`, `kodeBidangStudi`) VALUES
('RPL', 'Rekayasa Perangkat Lunak', 'TIK');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idKelas` varchar(5) NOT NULL,
  `deskripsiKelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idKelas`, `deskripsiKelas`) VALUES
('XIIMA', '12 Multimedia-A'),
('XIIMB', '12-Multimedia-B'),
('XIIMC', '12-Multimedia-C');

-- --------------------------------------------------------

--
-- Table structure for table `kelasMataPelajaran`
--

CREATE TABLE `kelasMataPelajaran` (
  `idKelasMapel` varchar(10) NOT NULL,
  `idKelas` varchar(10) NOT NULL,
  `idMapel` varchar(10) NOT NULL,
  `nip` int(16) NOT NULL,
  `idJadwal` varchar(10) NOT NULL,
  `tahunPelajaran` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelasMataPelajaran`
--

INSERT INTO `kelasMataPelajaran` (`idKelasMapel`, `idKelas`, `idMapel`, `nip`, `idJadwal`, `tahunPelajaran`) VALUES
('JDK001', 'XIIMA', 'MUL003', 8908719, 'SCH001', '2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `kodeKompetensi` varchar(5) NOT NULL,
  `namaKompetensi` varchar(20) NOT NULL,
  `kodeJurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`kodeKompetensi`, `namaKompetensi`, `kodeJurusan`) VALUES
('MUL', 'Multimedia', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `mataPelajaran`
--

CREATE TABLE `mataPelajaran` (
  `idMapel` varchar(10) NOT NULL,
  `namaMapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mataPelajaran`
--

INSERT INTO `mataPelajaran` (`idMapel`, `namaMapel`) VALUES
('MUL003', 'Multimedia'),
('REL003', 'Agama Kristen');

-- --------------------------------------------------------

--
-- Table structure for table `presensiMapel`
--

CREATE TABLE `presensiMapel` (
  `nis` int(8) NOT NULL,
  `idKelasMapel` varchar(5) NOT NULL,
  `tanggalPertemuan` date NOT NULL,
  `status` enum('Hadir','Tidak hadir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrasiKelas`
--

CREATE TABLE `registrasiKelas` (
  `nis` int(10) NOT NULL,
  `idKelas` varchar(10) NOT NULL,
  `tahunAjaran` varchar(9) NOT NULL,
  `nipGuruWali` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasiKelas`
--

INSERT INTO `registrasiKelas` (`nis`, `idKelas`, `tahunAjaran`, `nipGuruWali`) VALUES
(7120092, 'XIIMA', '2018/2019', 1),
(8237782, 'XIIMB', '2018/2019', 8908719),
(82377890, 'XIIMA', '2018/2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrasiMapel`
--

CREATE TABLE `registrasiMapel` (
  `nis` int(8) NOT NULL,
  `idKelasMapel` varchar(5) NOT NULL,
  `nilaiKKM` int(11) NOT NULL,
  `nilaiPengetahuan` int(11) NOT NULL,
  `predPengetahuan` varchar(10) NOT NULL,
  `deskripsiPengetahuan` varchar(150) NOT NULL,
  `nilaiKeterampilan` int(11) NOT NULL,
  `predKeterampilan` varchar(10) NOT NULL,
  `deskripsiKeterampilan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `namaSiswa` varchar(30) NOT NULL,
  `tanggalLahirSiswa` date NOT NULL,
  `jenisKelaminSiswa` enum('Perempuan','Laki-laki') NOT NULL,
  `alamatSiswa` varchar(50) NOT NULL,
  `noTelpSiswa` varchar(16) NOT NULL,
  `namaOrangTua` varchar(30) NOT NULL,
  `kodeKompetensi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `namaSiswa`, `tanggalLahirSiswa`, `jenisKelaminSiswa`, `alamatSiswa`, `noTelpSiswa`, `namaOrangTua`, `kodeKompetensi`) VALUES
(7120092, 'Uy', '2002-10-22', 'Laki-laki', 'Seturan, Yogyakarta', '08776589061', 'Runa', 'MUL'),
(8237782, 'Nana', '2002-02-21', 'Perempuan', 'BSD, Tangerang Selatan', '08776589000', 'Kiki', 'MUL'),
(82377890, 'Nana Kis', '2002-10-29', 'Perempuan', 'BSD, Tangerang Selatan', '08776589062', 'Kiki', 'MUL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidangStudi`
--
ALTER TABLE `bidangStudi`
  ADD PRIMARY KEY (`kodeBidangStudi`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idJadwal`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kodeJurusan`),
  ADD KEY `kodeBidangStudi` (`kodeBidangStudi`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idKelas`);

--
-- Indexes for table `kelasMataPelajaran`
--
ALTER TABLE `kelasMataPelajaran`
  ADD PRIMARY KEY (`idKelasMapel`),
  ADD KEY `fk_kelas_1` (`idKelas`),
  ADD KEY `fk_mapel_1` (`idMapel`),
  ADD KEY `fk_guru_1` (`nip`),
  ADD KEY `fk_jadwal_1` (`idJadwal`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`kodeKompetensi`),
  ADD KEY `kodeJurusan` (`kodeJurusan`);

--
-- Indexes for table `mataPelajaran`
--
ALTER TABLE `mataPelajaran`
  ADD PRIMARY KEY (`idMapel`);

--
-- Indexes for table `presensiMapel`
--
ALTER TABLE `presensiMapel`
  ADD PRIMARY KEY (`nis`,`idKelasMapel`),
  ADD KEY `fk_kelasmapel_presensi` (`idKelasMapel`);

--
-- Indexes for table `registrasiKelas`
--
ALTER TABLE `registrasiKelas`
  ADD PRIMARY KEY (`nis`,`idKelas`),
  ADD KEY `nis` (`nis`),
  ADD KEY `fk_guru_wali` (`nipGuruWali`),
  ADD KEY `fk_kelas_regis` (`idKelas`);

--
-- Indexes for table `registrasiMapel`
--
ALTER TABLE `registrasiMapel`
  ADD PRIMARY KEY (`nis`,`idKelasMapel`),
  ADD KEY `fk_kelasmapel_nilai` (`idKelasMapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_kompetensi_1` (`kodeKompetensi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `fk_bidangstudi_1` FOREIGN KEY (`kodeBidangStudi`) REFERENCES `bidangStudi` (`kodeBidangStudi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelasMataPelajaran`
--
ALTER TABLE `kelasMataPelajaran`
  ADD CONSTRAINT `fk_guru_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `fk_jadwal_1` FOREIGN KEY (`idJadwal`) REFERENCES `jadwal` (`idJadwal`),
  ADD CONSTRAINT `fk_kelas_1` FOREIGN KEY (`idKelas`) REFERENCES `kelas` (`idKelas`),
  ADD CONSTRAINT `fk_mapel_1` FOREIGN KEY (`idMapel`) REFERENCES `mataPelajaran` (`idMapel`);

--
-- Constraints for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD CONSTRAINT `fk_jurusan_1` FOREIGN KEY (`kodeJurusan`) REFERENCES `jurusan` (`kodeJurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `presensiMapel`
--
ALTER TABLE `presensiMapel`
  ADD CONSTRAINT `fk_kelasmapel_presensi` FOREIGN KEY (`idKelasMapel`) REFERENCES `kelasMataPelajaran` (`idKelasMapel`),
  ADD CONSTRAINT `fk_nis_presensi` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `registrasiKelas`
--
ALTER TABLE `registrasiKelas`
  ADD CONSTRAINT `fk_guru_wali` FOREIGN KEY (`nipGuruWali`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kelas_regis` FOREIGN KEY (`idKelas`) REFERENCES `kelas` (`idKelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nis_regis` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasiMapel`
--
ALTER TABLE `registrasiMapel`
  ADD CONSTRAINT `fk_kelasmapel_nilai` FOREIGN KEY (`idKelasMapel`) REFERENCES `kelasMataPelajaran` (`idKelasMapel`),
  ADD CONSTRAINT `fk_nis_nilai` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kompetensi_1` FOREIGN KEY (`kodeKompetensi`) REFERENCES `kompetensi` (`kodeKompetensi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
