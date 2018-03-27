-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2018 pada 20.41
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$2i5SBTfrBfsc.6opVLY7x.HUPrjlcwvxhRiI9JC4aM4xX1Ercf9ve');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kartu`
--

CREATE TABLE `tb_kartu` (
  `id` int(11) NOT NULL,
  `tb_siswa_id` int(11) DEFAULT NULL,
  `urutan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `dari_sekolah` varchar(5) DEFAULT NULL,
  `siswa_namalengkap` varchar(100) DEFAULT NULL,
  `siswa_kelamin` varchar(10) DEFAULT NULL,
  `siswa_tempatlahir` varchar(100) DEFAULT NULL,
  `siswa_tanggallahir` date DEFAULT NULL,
  `siswa_anakke` int(2) DEFAULT NULL,
  `siswa_hobi` varchar(50) DEFAULT NULL,
  `siswa_jarakrumah` int(6) DEFAULT NULL,
  `siswa_alamat_jalan` varchar(100) DEFAULT NULL,
  `siswa_alamat_desa` varchar(100) DEFAULT NULL,
  `siswa_alamat_kecamatan` varchar(100) DEFAULT NULL,
  `siswa_alamat_kabupaten` varchar(100) DEFAULT NULL,
  `siswa_alamat_kodepos` varchar(6) DEFAULT NULL,
  `siswa_email` varchar(50) DEFAULT NULL,
  `siswa_nik` varchar(50) DEFAULT NULL,
  `siswa_foto` varchar(200) DEFAULT NULL,
  `ayah_namalengkap` varchar(100) DEFAULT NULL,
  `ayah_tempatlahir` varchar(100) DEFAULT NULL,
  `ayah_tanggallahir` date DEFAULT NULL,
  `ayah_pendidikanterakhir` varchar(50) DEFAULT NULL,
  `ayah_pekerjaan` varchar(100) DEFAULT NULL,
  `ayah_penghasilan` varchar(50) DEFAULT NULL,
  `ayah_telephone` varchar(15) DEFAULT NULL,
  `ayah_nik` varchar(50) DEFAULT NULL,
  `ibu_namalengkap` varchar(100) DEFAULT NULL,
  `ibu_tempatlahir` varchar(100) DEFAULT NULL,
  `ibu_tanggallahir` date DEFAULT NULL,
  `ibu_pendidikanterakhir` varchar(50) DEFAULT NULL,
  `ibu_pekerjaan` varchar(100) DEFAULT NULL,
  `ibu_penghasilan` varchar(50) DEFAULT NULL,
  `ibu_telephone` varchar(15) DEFAULT NULL,
  `ibu_nik` varchar(50) DEFAULT NULL,
  `keluarga_nik` varchar(50) DEFAULT NULL,
  `keluarga_ksp` varchar(50) DEFAULT NULL,
  `keluarga_pkh` varchar(50) DEFAULT NULL,
  `lbp_sklh_nama` varchar(50) DEFAULT NULL,
  `lbp_sklh_desa` varchar(50) DEFAULT NULL,
  `lbp_sklh_kecamatan` varchar(100) DEFAULT NULL,
  `lbp_sklh_kabupaten` varchar(100) DEFAULT NULL,
  `lbp_sklh_kodepos` varchar(100) DEFAULT NULL,
  `lbp_sklh_tahunlulus` varchar(100) DEFAULT NULL,
  `lbp_sklh_nisn` varchar(100) DEFAULT NULL,
  `lbp_sklh_npusklh` varchar(100) DEFAULT NULL,
  `raport_bi_1` int(5) DEFAULT NULL,
  `raport_bi_2` int(5) DEFAULT NULL,
  `raport_bi_3` int(5) DEFAULT NULL,
  `raport_ipa_1` int(5) DEFAULT NULL,
  `raport_ipa_2` int(5) DEFAULT NULL,
  `raport_ipa_3` int(5) DEFAULT NULL,
  `raport_mtk_1` int(5) DEFAULT NULL,
  `raport_mtk_2` int(5) DEFAULT NULL,
  `raport_mtk_3` int(5) DEFAULT NULL,
  `raport_pai_1` int(5) DEFAULT NULL,
  `raport_pai_2` int(5) DEFAULT NULL,
  `raport_pai_3` int(5) DEFAULT NULL,
  `raport_akiakh_1` int(5) DEFAULT NULL,
  `raport_akiakh_2` int(5) DEFAULT NULL,
  `raport_akiakh_3` int(5) DEFAULT NULL,
  `raport_qh_1` int(5) DEFAULT NULL,
  `raport_qh_2` int(5) DEFAULT NULL,
  `raport_qh_3` int(5) DEFAULT NULL,
  `raport_fiqih_1` int(5) DEFAULT NULL,
  `raport_fiqih_2` int(5) DEFAULT NULL,
  `raport_fiqih_3` int(5) DEFAULT NULL,
  `raport_ski_1` int(5) DEFAULT NULL,
  `raport_ski_2` int(5) DEFAULT NULL,
  `raport_ski_3` int(5) DEFAULT NULL,
  `ijazah_tpqsk` varchar(10) DEFAULT NULL,
  `ijazah_mdask` varchar(10) DEFAULT NULL,
  `prestasi_nonakademik_jenis_1` varchar(50) DEFAULT NULL,
  `prestasi_nonakademik_jenis_2` varchar(50) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_kec_1` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_kec_2` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_kab_1` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_kab_2` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_prov_1` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_prov_2` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_nasi_1` int(5) DEFAULT NULL,
  `prestasi_nonakademik_peringkat_nasi_2` int(5) DEFAULT NULL,
  `prestasi_akademik_jenis_1` varchar(50) DEFAULT NULL,
  `prestasi_akademik_jenis_2` varchar(50) DEFAULT NULL,
  `prestasi_akademik_peringkat_kec_1` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_kec_2` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_kab_1` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_kab_2` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_prov_1` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_prov_2` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_nasi_1` int(5) DEFAULT NULL,
  `prestasi_akademik_peringkat_nasi_2` int(5) DEFAULT NULL,
  `prestasi_hafaljus` varchar(10) DEFAULT NULL,
  `status` enum('sudahdiperiksa','belumdiperiksa','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kartu`
--
ALTER TABLE `tb_kartu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_kartu_ibfk_1` (`tb_siswa_id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_kartu`
--
ALTER TABLE `tb_kartu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kartu`
--
ALTER TABLE `tb_kartu`
  ADD CONSTRAINT `tb_kartu_ibfk_1` FOREIGN KEY (`tb_siswa_id`) REFERENCES `tb_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
