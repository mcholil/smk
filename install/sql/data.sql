-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 04:15 PM
-- Server version: 5.5.37-MariaDB
-- PHP Version: 5.5.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pekkanew`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_komunitas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `sms_balasan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `nama_komunitas`, `alamat`, `no_hp`, `email`, `logo`, `sms_balasan`) VALUES
(1, 'Serikat Perempuan Kepala Keluarga ', 'Jl Raya hijau no 137 Kota Yogyakarta, 55834 DI Yogyakarta', '085338677857', 'adadeh@gmail.com', 'logo.png', 'Terimakasih! -- Serikat PEKKA');

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE IF NOT EXISTS `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dalam_proses`
--

CREATE TABLE IF NOT EXISTS `dalam_proses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `id_sms` int(11) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `keterangan` text,
  `status` int(2) NOT NULL DEFAULT '1',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_desa` varchar(5) NOT NULL,
  `id_user` int(10) NOT NULL,
  `rangkuman` text NOT NULL,
  `arsip` int(2) DEFAULT NULL,
  `terusan` varchar(200) NOT NULL,
  `rahasia` int(11) NOT NULL,
  `tgl_arsip` date NOT NULL,
  `tgl_rilis` date NOT NULL,
  `tgl_proses` date NOT NULL,
  `id_kec` int(11) NOT NULL,
  `id_kab` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sms` (`judul`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `dalam_proses`
--

INSERT INTO `dalam_proses` (`id`, `kode`, `judul`, `id_sms`, `id_jenis`, `keterangan`, `status`, `updated`, `id_desa`, `id_user`, `rangkuman`, `arsip`, `terusan`, `rahasia`, `tgl_arsip`, `tgl_rilis`, `tgl_proses`, `id_kec`, `id_kab`) VALUES
(3, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan G', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha G', 1, '2014-07-14 05:46:23', 'DS007', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, 'G', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(4, 'IN00001', 'oke judul A', 37, 1, 'ok keterangan A', 2, '2014-07-14 05:57:15', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan. A', 1, 'ok catatan terusan A', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(5, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(6, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(7, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(8, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(9, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(10, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan P', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha P', 2, '2014-07-14 07:09:50', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan. P', NULL, 'P', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(11, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(12, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(13, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(14, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(15, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(16, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(17, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(18, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(19, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(20, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(21, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(22, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(23, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(24, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(25, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(26, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(27, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(28, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(29, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(30, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(31, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(32, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(33, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(34, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(35, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0),
(36, 'IN00001', 'Dana BOS diperuntukan untuk kesejahteraan ', 37, 1, 'SMS serupa ini di kirim oleh ibu fania soleha', 2, '2014-05-23 14:42:33', 'DS008', 0, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi siswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga usulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', NULL, '', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE IF NOT EXISTS `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  `aktif` varchar(1) NOT NULL DEFAULT '1',
  `kategori` varchar(1) DEFAULT NULL,
  `sub_kategori` varchar(1) NOT NULL,
  `id_proses` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`, `aktif`, `kategori`, `sub_kategori`, `id_proses`) VALUES
('2014-05-23 13:51:58', '2014-05-20 12:22:25', '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6281903776021', 'Default_No_Compression', '', '+62818445009', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 1, 'MyModem1', 'false', '1', '5', '', 0),
('2014-05-23 13:51:58', '2014-05-20 13:43:43', '006E006700670061006B00200074006100680075002C002000630075006D00610020006C006500770061007400200061006A0061002E002E', '+6281903776021', 'Default_No_Compression', '', '+62818445009', -1, 'nggak tahu, cuma lewat aja..', 2, 'MyModem1', 'false', '1', '5', '', 0),
('2014-05-23 06:00:54', '2014-05-22 08:15:04', '004E006F006D006F007200200041006E00640061002000740065006C00610068002000640069006900730069002000640065006E00670061006E0020006E006F006D006F00720020007300650072006900200076006F0075006300680065007200200034003000350032003200310037003100350030003300380031003100300032003000360030002E', 'MKIOS', 'Default_No_Compression', '', '+62811078853', -1, 'Nomor Anda telah diisi dengan nomor seri voucher 4052217150381102060.', 3, 'MyModem1', 'false', '1', '5', '', 0),
('2014-05-22 11:30:49', '2014-05-22 11:30:50', '004B00610073007500730020004B0044005200540020', '+6282147580030', 'Default_No_Compression', '', '+6281100000', -1, 'Kasus KDRT ', 4, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 00:52:02', '2014-05-22 11:31:35', '004100700061002000620069007300610020006B006900720069006D0020006200650072006900740061003F', '+6285253424097', 'Default_No_Compression', '', '+6281100000', -1, 'Apa bisa kirim berita?', 5, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-22 11:31:52', '2014-05-22 11:31:53', '004800610072006900200069006E006900200069006E0069002000740067006C002000320032002000640069002000630065006E0074006500720020004C006F00640061006E00200044006F006500200061006400610020006B00650067002000700065006C00610074006900680061006E00200073006D00730020006D006F006E00690074006F00720069006E0067002C00640065006E00670061006E00200070006500730065007200740061002000700065006E0067007500720075007300200073006500720069006B006100740020004B0061006200200046006C006F00740069006D0020', '+6285253385977', 'Default_No_Compression', '', '+6281100000', -1, 'Hari ini ini tgl 22 di center Lodan Doe ada keg pelatihan sms monitoring,dengan peserta pengurus serikat Kab Flotim ', 6, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-22 11:34:14', '2014-05-22 11:34:16', '0044006900200073006900610072006B0061006E0020006C0061006E006700730075006E00670020006400720069002000630065006E007400650072002000700065006B006B00610020006C006F00640061006E00200064006F0065002E002E002E002E0073006D00730020006D006F006E00690074006F007200200061006B0061006E0020006200650072006C0061006E006700730075006E0067002E002E002E002E002E', '+6282292436850', 'Default_No_Compression', '', '+6281100000', -1, 'Di siarkan langsung dri center pekka lodan doe....sms monitor akan berlangsung.....', 7, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 00:52:02', '2014-05-22 11:34:32', '0042006500720069007400610020007400740067002000700065006E00740069006E0067006E007900610020006C006500670061006C006900740061007300200064006900720069002E', '+6285253424097', 'Default_No_Compression', '', '+6281100000', -1, 'Berita ttg pentingnya legalitas diri.', 8, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 00:52:02', '2014-05-22 11:34:30', '0053006C006D00740020006D0061006C0061006D002E002E00200021', '+6285287841529', 'Default_No_Compression', '', '+6281100000', -1, 'Slmt malam.. !', 9, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 00:52:02', '2014-05-22 11:36:58', '00540067006C0020003200320020006D006500690020006B0061006D00690020006100640061002000700065006C00610074006900680061006E00200073006D00730020006D006F006E00690074006F00720069006E0067002000730061006D007000610069002000740067006C0020003200370020006D0065006900200032003000310034', '+6281239865227', 'Default_No_Compression', '', '+6281100000', -1, 'Tgl 22 mei kami ada pelatihan sms monitoring sampai tgl 27 mei 2014', 10, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 04:56:33', '2014-05-22 12:11:42', '00700075006C0073006100200053006500700075006C00750068002C006B007500200064007000740020006D0065006D00620061006E00670075006E0020006E0065006700720069002E0021', '+6281318307106', 'Default_No_Compression', '', '+6281100000', -1, 'pulsa Sepuluh,ku dpt membangun negri.!', 11, 'MyModem1', 'false', '1', NULL, '', 11),
('2014-05-23 00:52:02', '2014-05-22 12:16:39', '004B006500630065007700610020006200650072006900740061006B00750020006400690074006F006C0061006B', '+6285287841535', 'Default_No_Compression', '', '+6281100000', -1, 'Kecewa beritaku ditolak', 12, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 00:52:02', '2014-05-22 12:24:05', '00730065006D00750061002000730061006D00610020006400690020006D006100740061002000680075006B0075006D0020', '+6282146965865', 'Default_No_Compression', '', '+6281100000', -1, 'semua sama di mata hukum ', 13, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 00:53:48', '2014-05-22 12:24:04', '00540067006C0020003100300020006D0061007200650074002000320030003100340020006A0061006D002000310031002000700067002C007300790020006D0065006E0064006100740061006E0067006900200063006100700069006C00640075006700200066006C006F00740069006D002C006D006100750020007500720075007300200061006B007400650020006B0065006C00610068006900720061006E002C006B00740070002000640061006E0020006B006B002C0061006B00740065002000640069006600650072006900660069006B00610073006900680020006E0061006D0075006E0020006B00740070002000640061006E0020006B006B002000740064006B002000640069006600650072006900660069006B00610073006900680020006B0072006E006100200074', '+6285239513619', 'Default_No_Compression', '0500037C0401', '+6281100000', -1, 'Tgl 10 maret 2014 jam 11 pg,sy mendatangi capildug flotim,mau urus akte kelahiran,ktp dan kk,akte diferifikasih namun ktp dan kk tdk diferifikasih krna t', 14, 'MyModem1', 'false', '1', NULL, '', 17),
('2014-05-23 00:53:48', '2014-05-22 12:24:08', '0064006B00200061006400610020006F00700065007200610074006F0072002C006D0065006E00750072007500740020006B00610062006900640020006B006500700065006E0064007500640075006B0061006E0020006F00700065007200610074006F0072006E00790061002000740064006B0020006D006100730075006B0020006B006E00740072002000740061006E007000610020006200650072006900740061002C00730079002000700075006C0061006E0067002000640065006E00670061006E0020006B006500630065007700610020006B0072006E00610020007300750064006100680020006D0065006E00670065006C007500610072006B0061006E002000750061006E0067002000620061006E00790061006B0020006E0061006D0075006E002000740064006B0020', '+6285239513619', 'Default_No_Compression', '0500037C0402', '+6281100000', -1, 'dk ada operator,menurut kabid kependudukan operatornya tdk masuk kntr tanpa berita,sy pulang dengan kecewa krna sudah mengeluarkan uang banyak namun tdk ', 15, 'MyModem1', 'false', '1', NULL, '', 17),
('2014-05-23 00:53:48', '2014-05-22 12:24:12', '006100640061002000700065006C006100790061006E0061006E002E00740067006C0020003100370020006D006100720065007400200077006B00740075002000790067002000730061006D00610020007300790020006B0065006D00620061006C006900200064007400670020006B006500200063006100700069006C002000750074006B002000750072007500730061006E002000790067002000730061006D00610020006E0061006D0075006E0020006B0065006D00620061006C0069002000640065006E00670061006E0020006B006500630065007700610020006B0072006E0061002000680061006C002000790067002000730061006D0061002000730061007900610020006400610070006100740069002E007600690061002000620075006E00670061002C006400650073', '+6285239513619', 'Default_No_Compression', '0500037C0403', '+6281100000', -1, 'ada pelayanan.tgl 17 maret wktu yg sama sy kembali dtg ke capil utk urusan yg sama namun kembali dengan kecewa krna hal yg sama saya dapati.via bunga,des', 16, 'MyModem1', 'false', '1', NULL, '', 17),
('2014-05-23 00:53:48', '2014-05-22 12:24:14', '0061002000520069006100770061006C00650020006B0065006300200049006C006500200042006F006C0065006E0067002E0020002000200020', '+6285239513619', 'Default_No_Compression', '0500037C0404', '+6281100000', -1, 'a Riawale kec Ile Boleng.    ', 17, 'MyModem1', 'false', '1', NULL, '', 17),
('2014-05-23 07:25:25', '2014-05-23 07:25:08', '0053006500740069006100700020006D007500730069006D002000680075006A0061006E00200073006500720069006E00670020007400650072006A0061006400690020006C00750061007500700061006E002000620061006E006A0069007200200064006900200064006500700061006E00200067006500640075006E0067002000700061006B006B00610020006B0065006C0075006200610067006F006C00690074002E00200050006900680061006B002000700065006B006B00610020007300750064006100680020006D0065006E00670061006E007400690073006900700061007300690020006C0075006100700061006E002000620061006E006A006900720020007400730062002E00640065006E00670061006E0020006D0065006D00620061006E00670075006E00200070', '+6281236438080', 'Default_No_Compression', '050003010401', '+6281100000', -1, 'Setiap musim hujan sering terjadi luaupan banjir di depan gedung pakka kelubagolit. Pihak pekka sudah mengantisipasi luapan banjir tsb.dengan membangun p', 18, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:25:25', '2014-05-23 07:25:11', '006100720069007400200064006900200064006500700061006E0020002000630065006E007400720065002C002000640061006E002000740061006C007500640020006400690020006B0061006C0069002C002000640069002000730061006D00700069006E006700200067006500640075006E0067002000700065006B006B0061002E002000480061006C00200069006E0069002000640069006C0061006B0075006B0061006E00200075006E00740075006B0020006D0065006E006700680069006E006E00640061007200690020006C0075006100700061006E002000620061006E006A006900720020007900670020006200720070006F00740065006E007300690020006D00650072007500730061006B0020006A0061006C0061006E00200075006D0075006D002E002000500061', '+6281236438080', 'Default_No_Compression', '050003010402', '+6281100000', -1, 'arit di depan  centre, dan talud di kali, di samping gedung pekka. Hal ini dilakukan untuk menghinndari luapan banjir yg brpotensi merusak jalan umum. Pa', 19, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:25:25', '2014-05-23 07:25:15', '007200690074002000640061006E002000740061006C007500640020007900670020006400620061006E00670075006E0020006F006C0065006800200070006900680061006B002000700065006B006B00610020007400730062002000740061006D00700073006B0020006200610069006B002000640061006E0020006200650072007300690068002C002000770061006C0061007500700075006E00200067006F0072006F006E0067002D0067006F0072006F006E00670020006400720020006A0061006C0061006E00200075006D0075006D0020007400730062002000730075006400610068002000680061006D0070006900720020007400650072007400750074007500700020006F006C00650068002000730061006D007000610068002000640061006E0020006D006100740065', '+6281236438080', 'Default_No_Compression', '050003010403', '+6281100000', -1, 'rit dan talud yg dbangun oleh pihak pekka tsb tampsk baik dan bersih, walaupun gorong-gorong dr jalan umum tsb sudah hampir tertutup oleh sampah dan mate', 20, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:25:25', '2014-05-23 07:25:17', '007200690061006C0020006B0061006C0069002E', '+6281236438080', 'Default_No_Compression', '050003010404', '+6281100000', -1, 'rial kali.', 21, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:31:56', '2014-05-23 07:31:32', '004200720064007300610072006B006E002000680073006C002000770077006E006300720061002000740067006C0020003200330020006D0065006900200064006700200062007000200043006800610072006C0065007300200054006F006B0061006E00200020002C00610073006C0020007200650064006F006E0020002000740065006E0061002000520054002000300038002C002000520057002000300034002E0020004400200073007400750020006B006D00690020006D006E0064007000610074006B006E002000680073006C0020007900610020006900740075002C00200073006D007000610069002000680072006900200069006E006900200062006C006D002000700072006E00680020006D006D0069006C006B00690020006B007200740020006B0073006800740061', '+6282147580030', 'Default_No_Compression', '050003A90301', '+6281100000', -1, 'Brdsarkn hsl wwncra tgl 23 mei dg bp Charles Tokan  ,asl redon  tena RT 08, RW 04. D stu kmi mndpatkn hsl ya itu, smpai hri ini blm prnh mmilki krt kshta', 22, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:31:56', '2014-05-23 07:31:37', '006E0020006200610069006B0020006400670020004A0041004D004B00450053004D00410053002C004A0041004D004B0045005300440041002000410053004B004500530020006D006100750070006E0020004A004B004E0020002C00620070006100200074007200730062007400200073006400680020006D0064006E00670061007200200062006800770020006100640061006E007900610020006B007200740020004A004B004E0020002C0061006B006E0020007400740070006900200064002000640073006100200062006C006D002000610064006100200073007300690061006C00690073007300690020006200610069006B002000640072002000440049004E004B00450053002000200073006E006400720069002E00200061007400770070006E00200064007200200064', '+6282147580030', 'Default_No_Compression', '050003A90302', '+6281100000', -1, 'n baik dg JAMKESMAS,JAMKESDA ASKES maupn JKN ,bpa trsbt sdh mdngar bhw adanya krt JKN ,akn ttpi d dsa blm ada ssialissi baik dr DINKES  sndri. atwpn dr d', 23, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:31:56', '2014-05-23 07:31:41', '007300610020007400720073006200750074002E002000200061006B006900620074006E0079006100200062007000610020007400720073006200750074002000680072007500730020006D0067006C007500610072006B006E002000750061006E00670020006B006C0077002000620072006F0062007400200064002000700073006B0073006D00610073002E', '+6282147580030', 'Default_No_Compression', '050003A90303', '+6281100000', -1, 'sa trsbut.  akibtnya bpa trsbut hrus mgluarkn uang klw brobt d psksmas.', 24, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:33:37', '2014-05-23 07:33:32', '0044007300610020005200650064006F006E002000540065006E0061002000740067006C002000320033002E002000300035002E003200300031003400200068006100730069006C00200077006100770061006E00630061007200610020006B006D002000640067006E002000620070006B0020004300410052004C0045005300200054004F004B0041004E00200062006C006D0020006D0065006D006C0069006B00690020006B007200740020004A004B004E002E002000530068006E0067006700610020006100700062006C00610020006D0072006B00610020006D006C006B006B0061006E00200070006E0067006F006200740061006E002000640020006B006E0061006B0061006E002000620069006100790061002E002000420070002000740072007300620074002000730064', '+6285287841529', 'Default_No_Compression', '0500033F0201', '+6281100000', 1, 'Dsa Redon Tena tgl 23. 05.2014 hasil wawancara km dgn bpk CARLES TOKAN blm memliki krt JKN. Shngga apbla mrka mlkkan pngobtan d knakan biaya. Bp trsbt sd', 25, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:33:37', '2014-05-23 07:33:37', '00680020006D006E0064006E0067006100720020006200680077006100200061006400780020006B0072007400750020004A004B004E002C00200061006B006E0020007400740070006900200062006C0075006D00200061006400200073006F007300690061006C00730061007300690020006400720069002000640069006E006B0065007300200061007400700075006E002000700065006D002E002000440065007300610020007300740065006D007000610074002E00200020', '+6285287841529', 'Default_No_Compression', '0500033F0202', '+6281100000', 1, 'h mndngar bhwa adx krtu JKN, akn ttpi blum ad sosialsasi dri dinkes atpun pem. Desa stempat.  ', 26, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:37:07', '2014-05-23 07:31:40', '00550074006B0020006A006C006E00200075006D0075006D00200064006C006D0020006B0070007300690074006100730020007300620067006100690020006A006C006E002000700072006F00700020006E0020006400610065007200610068002000740064006B002000640062006E0072006B006E0020006D0065006D0061006B0061006900200070006C0069007300690020007400640072002000730073007500610069002000640067006E002000700072006100740072006E0020006C0061006E007400610073002000740074007000690020006B006E0079007400610061006E00200064006C00700061006E0067006E0020006D0073006800200062006E0079006B002E00730068006E006700670061002000700064002000740067006C0020003200360020006D007200740020', '+6281237921469', 'Default_No_Compression', '050003650301', '+6281100000', -1, 'Utk jln umum dlm kpsitas sbgai jln prop n daerah tdk dbnrkn memakai plisi tdr ssuai dgn pratrn lantas ttpi knytaan dlpangn msh bnyk.shngga pd tgl 26 mrt ', 27, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:37:07', '2014-05-23 07:31:45', '003200300031003400200064006E00690068007200690020006B00610072006F006C007500730020006E0020006C006900700061002000620072006E0067006B007400200064007200690020007700610074006F007700610065006E00670020006B0065002000700073006100720020006C006100670061006C006F0065002000640067006E0020006D0065006E00670065006E00640061007200610069002000730070006500640061006D0074007200200073006D0070006100690020006400640070006E00200073006B006C006800200073006D007000200061007700610073002000680069006E006700610020006A00740075006800200074006500720070006C0061006E00740069006E0067002000640072006900200061007400730020006D007400720020006B0072006E0020', '+6281237921469', 'Default_No_Compression', '050003650302', '+6281100000', -1, '2014 dnihri karolus n lipa brngkt dri watowaeng ke psar lagaloe dgn mengendarai spedamtr smpai ddpn sklh smp awas hinga jtuh terplanting dri ats mtr krn ', 28, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:37:07', '2014-05-23 07:31:49', '0070006C007300690020007400640072006E00790061002000740072006C006C007500200074006E0067006700690020006E0020006D0065006E00670061006B00620074006B006E0020006B0065002000320020006B006F00720062006E002000740072007300620074002000700061007400610068002000740061006E00670061006E', '+6281237921469', 'Default_No_Compression', '050003650303', '+6281100000', -1, 'plsi tdrnya trllu tnggi n mengakbtkn ke 2 korbn trsbt patah tangan', 29, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:37:11', '2014-05-23 07:37:02', '00540069006E00640061006B0020006C0061006E006A0075007400200066006F0072006D0020004D005300460020006400690020006C0061006B00730061006E0061006B006E0020006F006C0065006800200073006500720069006B00610074002000700065006B006B00610020004E00540054002000640069002000730065006E007400650072002000610062006200610064006100770061002C00540067006C00200032003000200061007000720069006C00200032003000310033002C006400650077006900200079006700200061006E00670067006F00740061002000700065006B006B0061002000640072002000640065007300610020004B006F006C0069006D006100730061006E0020006D0065006C0061006B0075006B0061006E002000700065006E0064006100740061', '+6285253385977', 'Default_No_Compression', '050003700301', '+6281100000', -1, 'Tindak lanjut form MSF di laksanakn oleh serikat pekka NTT di senter abbadawa,Tgl 20 april 2013,dewi yg anggota pekka dr desa Kolimasan melakukan pendata', 30, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:37:11', '2014-05-23 07:37:05', '0061006E00200061006B007400650020006B0065006C00610068006900720061006E002000640061006E00200061006B007400650020006E0069006B00610068002E00740065006D00750061006E00200031003100300020006F0072006700200062006C006D0020006D0065006D0069006C0069006B006900200061006B007400650020006B0065006C00610068006900720061006E002000640061006E002000310038002000700073006E006700200062006C006D0020006D0065006D0069006C0069006B006900200061006B007400650020006E0069006B00610068002E0064006100720069002000640061007400610020006400690061007400610073002000640067006E0020006400690020006C0065006E0067006B00610070006900200069007300690061006E00200066006F', '+6285253385977', 'Default_No_Compression', '050003700302', '+6281100000', -1, 'an akte kelahiran dan akte nikah.temuan 110 org blm memiliki akte kelahiran dan 18 psng blm memiliki akte nikah.dari data diatas dgn di lengkapi isian fo', 31, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 07:37:11', '2014-05-23 07:37:08', '0072006D0075006C00690072006E00790061002000640061006E0020006400690020006200610077006100680020006B00650020006B006500700061006C00610020006400650073006100200070006500720069006F0064006500200032003000300037002D0032003000310033002000200075006E00740075006B002000640069002000740061006E0064006100740061006E00670061006E0069002000640061006E002000620065006C0069006100750020006D0065006E006F006C0061006B002000640067006E00200061006C006100730061006E0020006B0065006D00620061006C00690020006B006F006E00730075006C00740061007300690020006B0065002000700065006B006B0061002E00200020', '+6285253385977', 'Default_No_Compression', '050003700303', '+6281100000', -1, 'rmulirnya dan di bawah ke kepala desa periode 2007-2013  untuk di tandatangani dan beliau menolak dgn alasan kembali konsultasi ke pekka.  ', 32, 'MyModem1', 'false', '1', NULL, '', 0),
('2014-05-23 14:28:18', '2014-05-23 08:02:03', '004D0061006E00740061006E0020006B006500700064006500730020004E006900730061006E0075006C0061006E002000730061006100740020006400690077006100770061006E006300610072006100690020006D0065006E006A0065006C00610073006B0061006E002000740065006E00740061006E00670020006D006100730061006C00610068002000700065006E0064006900640069006B0061006E002000790061006E00670020006400690061006C0061006D006900200070006900680061006B002000730065006B006F006C0061006800200053004400490020004E006900730061006E0075006C0061006E002000790061006B006E00690020006D006100730061006C0061006800200073006100720061006E006100200070007200610073006100720061006E00610020', '+6281353908568', 'Default_No_Compression', '050003EE0501', '+6281100000', -1, 'Mantan kepdes Nisanulan saat diwawancarai menjelaskan tentang masalah pendidikan yang dialami pihak sekolah SDI Nisanulan yakni masalah sarana prasarana ', 33, 'MyModem1', 'false', '1', NULL, '', 37),
('2014-05-23 14:28:18', '2014-05-23 08:02:08', '00640061006E0020006A007500670061002000640061006E006100200042004F0053002000730065007200740061002000420053004D002E00500065006D006500720069006E00740061006800200064006500730061002000640061006E00200070006900680061006B002000730065006B006F006C00610068002000740065006C006100680020006D0065006E0079006500700061006B006100740069002000640061006E006100200042004F005300200064006900200070006500720075006E00740075006B0061006E00200075006E00740075006B0020006B006500730065006A0061006800740065007200610061006E0020006700750072007500200068006F006E006F0072002000640061006E0020006200650061007300690073007700610020006200610067006900200073', '+6281353908568', 'Default_No_Compression', '050003EE0502', '+6281100000', -1, 'dan juga dana BOS serta BSM.Pemerintah desa dan pihak sekolah telah menyepakati dana BOS di peruntukan untuk kesejahteraan guru honor dan beasiswa bagi s', 34, 'MyModem1', 'false', '1', NULL, '', 37),
('2014-05-23 14:28:18', '2014-05-23 08:02:13', '0069007300770061002F0069002000790061006E00670020006B007500720061006E00670020006D0061006D00700075002E006C0061006C00750020007400650072006B0061006900740020006D006100730061006C006100680020006D0065007300200067007500720075002000700065006D006500720069006E007400610068002000640065007300610020007300750064006100680020006D0065006E0067007500730075006C006B0061006E002000680061006C00200069006E00690020006B0065002000700065006D006B0061006200200046006C006F007200650073002000540069006D007500720020006E0061006D0075006E002000700065007200740069006D00620061006E00670061006E002000700065006D006B0061006200200066006C006F0072006500730020', '+6281353908568', 'Default_No_Compression', '050003EE0503', '+6281100000', -1, 'iswa/i yang kurang mampu.lalu terkait masalah mes guru pemerintah desa sudah mengusulkan hal ini ke pemkab Flores Timur namun pertimbangan pemkab flores ', 35, 'MyModem1', 'false', '1', NULL, '', 37),
('2014-05-23 14:28:18', '2014-05-23 08:02:18', '00740069006D0075007200200073006100720061006E006100200070007200610073006100720061006E0061002000700065006E0064006900640069006B0061006E002000790061006E00670020006C00650062006900680020006400690020007000720069006F00720069007400610073006B0061006E00200075006E00740075006B0020006D0065006E0075006E006A0061006E0067002000700065006E0064006900640069006B0061006E0020006100640061006C0061006800200067006500640075006E0067002000730065006B006F006C00610068002C006D0065007500620065006C002000640061006E002000700065007200700075007300740061006B00610061006E002000730065006B006F006C0061006800200073006500680069006E006700670061002000750073', '+6281353908568', 'Default_No_Compression', '050003EE0504', '+6281100000', -1, 'timur sarana prasarana pendidikan yang lebih di prioritaskan untuk menunjang pendidikan adalah gedung sekolah,meubel dan perpustakaan sekolah sehingga us', 36, 'MyModem1', 'false', '1', NULL, '', 37),
('2014-05-23 14:28:18', '2014-05-23 08:02:21', '0075006C0061006E0020007400650072007300650062007500740020006D00730068002000640069002000700065007200740069006D00620061006E0067006B0061006E002E00640065006D0069006B00690061006E00200074007500740075007200200069006200750020006D0061006E00740061006E0020006B006500700064006500730020006E006900730061006E0075006C0061006E002E', '+6281353908568', 'Default_No_Compression', '050003EE0505', '+6281100000', -1, 'ulan tersebut msh di pertimbangkan.demikian tutur ibu mantan kepdes nisanulan.', 37, 'MyModem1', 'false', '1', NULL, '', 37);

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE IF NOT EXISTS `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL,
  `jenis` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  KEY `outbox_sender` (`SenderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;



-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE IF NOT EXISTS `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`,`SequencePosition`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE IF NOT EXISTS `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IMEI`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('MyModem1', '2014-05-20 16:22:49', '2014-05-20 13:22:15', '2014-05-20 16:22:59', 'yes', 'yes', '867919017157515', 'Gammu 1.33.0, Linux, kernel 2.6.32-431.17.1.el6.centos.plus.i686 (#1 SMP Thu May 8 00:04:48 UTC 2014), GCC 4.4', 0, 48, 3, 2),
('MyModem1', '2014-05-23 22:23:36', '2014-05-23 14:14:23', '2014-05-23 22:23:46', 'yes', 'yes', '354058180829074', 'Gammu 1.33.0, Linux, kernel 2.6.32-431.17.1.el6.centos.plus.i686 (#1 SMP Thu May 8 00:04:48 UTC 2014), GCC 4.4', 0, 60, 0, 0);

--
-- Triggers `phones`
--


-- --------------------------------------------------------

--
-- Table structure for table `ref_desa`
--

CREATE TABLE IF NOT EXISTS `ref_desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kec` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kec` (`id_kec`),
  KEY `id_kec_2` (`id_kec`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `ref_desa`
--

INSERT INTO `ref_desa` (`id`, `id_kec`, `nama`) VALUES
(1, 0, 'Horinara'),
(2, 0, 'Adobala'),
(3, 0, 'Redontena'),
(4, 0, 'Sukutokan'),
(5, 0, 'Hinga'),
(6, 0, 'Pepakkelu'),
(7, 0, 'Lamapaha'),
(8, 0, 'Nisa nulan'),
(9, 0, 'Sagu'),
(10, 0, 'Koli Masang'),
(11, 0, 'Koli Lanang'),
(12, 0, 'Helanglangowuyo'),
(13, 0, 'Dokeng'),
(14, 0, 'Lebanuba'),
(15, 0, 'Riawale'),
(16, 0, 'Lamawolo'),
(17, 0, 'Boleng'),
(18, 0, 'Nelelamadiken'),
(19, 0, 'Duablolong'),
(20, 0, 'Pledo'),
(21, 0, 'Lamatewelu'),
(22, 0, 'Nisakarang'),
(23, 0, 'Lewopao'),
(24, 0, 'Harubala'),
(25, 0, 'Nobo'),
(26, 0, 'Mangaaleng'),
(27, 0, 'Nelereren'),
(28, 0, 'Lambunga'),
(29, 0, 'Nelelamawangi II'),
(30, 0, 'Lewokeda'),
(31, 0, 'Oringbele'),
(32, 0, 'Weranggere'),
(33, 0, 'Bajuntaa'),
(34, 0, 'Waiwuring'),
(35, 0, 'Gelong'),
(36, 0, 'Tapobali'),
(37, 0, 'Kwaelaga'),
(38, 0, 'Lamawato'),
(39, 0, 'Kelukeng Nuking'),
(40, 0, 'Nayu Baya'),
(41, 0, 'Samasoge'),
(42, 0, 'Waibalun'),
(43, 0, 'Mokantarak'),
(44, 0, 'Waimana I'),
(45, 0, 'Riangkemie'),
(46, 0, 'Muda Keputuk'),
(47, 0, 'Lewoloba'),
(48, 0, 'Badu'),
(49, 0, 'Bama'),
(50, 0, 'Blepanawa'),
(51, 0, 'Lewokluok'),
(52, 0, 'Kawalelo'),
(53, 0, 'Lamika'),
(54, 0, 'Kolipadan'),
(55, 0, 'Lewo Muda'),
(56, 0, 'Kolipadan'),
(57, 0, 'Nobo'),
(58, 0, 'Tagawiti'),
(59, 0, 'Dulipali'),
(60, 0, 'Beutaran'),
(61, 0, 'Nuri'),
(62, 0, 'Riangbao'),
(63, 0, 'Birawan'),
(64, 0, 'Waowala'),
(65, 0, 'Tanjungbatu'),
(66, 0, 'Amakaka'),
(67, 0, 'Lamawara'),
(68, 0, 'Bungamuda'),
(69, 0, 'Napasabok');

-- --------------------------------------------------------

--
-- Table structure for table `ref_group`
--

CREATE TABLE IF NOT EXISTS `ref_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ref_group`
--

INSERT INTO `ref_group` (`id`, `nama`, `keterangan`) VALUES
(1, 'Pelapor Tetap', 'Anggota PEKKA dan masyarakat yang Aktif menjadi kontributor'),
(2, 'Pendidikandeqw', 'fere'),
(3, 'Lembatae', 'po');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kabupaten`
--

CREATE TABLE IF NOT EXISTS `ref_kabupaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ref_kabupaten`
--

INSERT INTO `ref_kabupaten` (`id`, `nama`) VALUES
(1, 'kabupaten'),
(2, 'Lembata'),
(3, 's'),
(4, 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kategori`
--

CREATE TABLE IF NOT EXISTS `ref_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ref_kategori`
--

INSERT INTO `ref_kategori` (`id`, `nama`, `keterangan`) VALUES
(1, 'penuaan', 'tersangkut'),
(2, 'Kesehatan', 'Menyangkut berbagai hal tentang kesehatan'),
(3, 'Perumahan', 'Menyangkut berbagai hal tentang Perumahan'),
(12, 'Pendidikan', 'Menyangkut berbagai hal terkait dengan pendidikan'),
(11, 'Pendidikandeqw', 'hyvrsd');

-- --------------------------------------------------------

--
-- Table structure for table `ref_kecamatan`
--

CREATE TABLE IF NOT EXISTS `ref_kecamatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kab` int(11) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kab` (`id_kab`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ref_kecamatan`
--

INSERT INTO `ref_kecamatan` (`id`, `id_kab`, `nama`) VALUES
(1, 0, 'Klubagolit'),
(2, 0, 'Ile Boleng'),
(3, 0, 'Adonara'),
(4, 0, 'Witihama'),
(5, 0, 'Adonara Timur'),
(6, 0, 'Wotanulumado'),
(7, 0, 'Larantuka'),
(8, 0, 'Ile Mandiri'),
(9, 0, 'Demong Pagong'),
(10, 0, 'Ile Bura'),
(11, 0, 'Ileape'),
(12, 0, 'Ileape Timur');

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE IF NOT EXISTS `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) unsigned NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  `jenis` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`,`SequencePosition`),
  KEY `sentitems_date` (`DeliveryDateTime`),
  KEY `sentitems_tpmr` (`TPMR`),
  KEY `sentitems_dest` (`DestinationNumber`),
  KEY `sentitems_sender` (`SenderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`, `jenis`) VALUES
('2014-05-20 13:22:18', '2014-05-20 13:13:04', '2014-05-20 13:22:18', NULL, '0074006A006F00620061002000790061000A007300730073', '+6281903776021', 'Default_No_Compression', '', '+6289644000001', -1, 'tjoba ya\nsss', 1, 'MyModem1', 1, 'SendingOKNoReport', -1, 25, 255, '', ''),
('2014-05-20 13:22:55', '2014-05-20 13:22:29', '2014-05-20 13:22:55', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6281903776021', 'Default_No_Compression', '', '+6289644000001', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 2, 'MyModem1', 1, 'SendingOKNoReport', -1, 26, 255, '1', ''),
('2014-05-20 14:11:00', '2014-05-20 14:10:46', '2014-05-20 14:11:00', NULL, '00730073006500700065007200720074006900200061007000610020006B006F00720061006E006E00790061003F0020', '+6281903776021', 'Default_No_Compression', '', '+6289644000001', -1, 'sseperrti apa korannya? ', 3, 'MyModem1', 1, 'SendingOKNoReport', -1, 27, 255, '', ''),
('2014-05-22 04:23:19', '2014-05-22 04:23:07', '2014-05-22 04:23:19', NULL, '00740065007300740065007200200069006E006900200073006D00730020006B0075002E002E', '085338677863', 'Default_No_Compression', '', '+6281100000', -1, 'tester ini sms ku..', 4, 'MyModem1', 1, 'SendingOKNoReport', -1, 2, 255, '', ''),
('2014-05-22 08:55:52', '2014-05-22 08:55:41', '2014-05-22 08:55:52', NULL, '00630065006B', '085338677863', 'Default_No_Compression', '', '+6281100000', -1, 'cek', 5, 'MyModem1', 1, 'SendingOKNoReport', -1, 3, 255, '', ''),
('2014-05-22 11:30:53', '2014-05-22 11:30:49', '2014-05-22 11:30:53', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6282147580030', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 6, 'MyModem1', 1, 'SendingOKNoReport', -1, 4, 255, '1', ''),
('2014-05-22 11:32:03', '2014-05-22 11:31:33', '2014-05-22 11:32:03', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6285253424097', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 7, 'MyModem1', 1, 'SendingOKNoReport', -1, 5, 255, '1', ''),
('2014-05-22 11:32:06', '2014-05-22 11:31:52', '2014-05-22 11:32:06', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6285253385977', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 8, 'MyModem1', 1, 'SendingOKNoReport', -1, 6, 255, '1', ''),
('2014-05-22 11:33:12', '2014-05-22 11:32:49', '2014-05-22 11:33:12', NULL, '00730061006D0070006100690020006B006100700061006E002E002E002E003F003F', '+6285253385977', 'Default_No_Compression', '', '+6281100000', -1, 'sampai kapan...??', 9, 'MyModem1', 1, 'SendingOKNoReport', -1, 7, 255, '', ''),
('2014-05-22 11:33:46', '2014-05-22 11:33:34', '2014-05-22 11:33:46', NULL, '0062006500720069007400610020006100700061003F003F003F003F', '+6285253424097', 'Default_No_Compression', '', '+6281100000', -1, 'berita apa????', 10, 'MyModem1', 1, 'SendingOKNoReport', -1, 8, 255, '', ''),
('2014-05-22 11:34:22', '2014-05-22 11:34:14', '2014-05-22 11:34:22', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6282292436850', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 11, 'MyModem1', 1, 'SendingOKNoReport', -1, 9, 255, '1', ''),
('2014-05-22 11:35:57', '2014-05-22 11:35:40', '2014-05-22 11:35:57', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6285287841529', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 12, 'MyModem1', 1, 'SendingOKNoReport', -1, 10, 255, '1', ''),
('2014-05-22 11:37:02', '2014-05-22 11:36:56', '2014-05-22 11:37:02', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6281239865227', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 13, 'MyModem1', 1, 'SendingOKNoReport', -1, 11, 255, '1', ''),
('2014-05-22 12:12:07', '2014-05-22 12:11:40', '2014-05-22 12:12:07', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6281318307106', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 14, 'MyModem1', 1, 'SendingOKNoReport', -1, 12, 255, '1', ''),
('2014-05-22 12:16:41', '2014-05-22 12:16:37', '2014-05-22 12:16:41', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6285287841535', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 15, 'MyModem1', 1, 'SendingOKNoReport', -1, 13, 255, '1', ''),
('2014-05-22 12:24:18', '2014-05-22 12:24:06', '2014-05-22 12:24:18', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6282146965865', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 16, 'MyModem1', 1, 'SendingOKNoReport', -1, 14, 255, '1', ''),
('2014-05-22 12:25:24', '2014-05-22 12:25:13', '2014-05-22 12:25:24', NULL, '0054006500720069006D0061006B00610073006900680021000A000A002D002D000A0053006500720069006B00610074002000500045004B004B0041', '+6285239513619', 'Default_No_Compression', '', '+6281100000', -1, 'Terimakasih!\n\n--\nSerikat PEKKA', 17, 'MyModem1', 1, 'SendingOKNoReport', -1, 15, 255, '1', ''),
('2014-05-23 08:25:49', '2014-05-23 08:25:43', '2014-05-23 08:25:49', NULL, '0074006500720069006D00610020006B0061007300690068002E', '+6281353908568', 'Default_No_Compression', '', '+6281100000', -1, 'terima kasih.', 22, 'MyModem1', 1, 'SendingOKNoReport', -1, 16, 255, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sms_contacts`
--

CREATE TABLE IF NOT EXISTS `sms_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(160) NOT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `grup` int(11) DEFAULT NULL,
  `desa` varchar(5) DEFAULT NULL,
  `kecamatan` varchar(5) DEFAULT NULL,
  `kabupaten` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_auth` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `active` tinyint(1) unsigned DEFAULT '0',
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `session` varchar(40) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `profesi` varchar(200) NOT NULL,
  `id_desa` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_auth`, `email`, `last_login`, `active`, `nama`, `no_hp`, `session`, `foto`, `jk`, `tgl_lahir`, `alamat`, `profesi`, `id_desa`) VALUES
(45, 'kalkun', 'f0af18413d1c9e0366d8d1273160f55d5efeddfe', 1, 'aku@gmail.com', '2014-05-19 11:41:40', 0, 'aku', '0878393030', '2fca6d1ef15c6a123b7c61f56b938be29e8ba232', '', 'L', '0000-00-00', '', '', ''),
(11, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Maria Sabu', '+6281239865227', '', '', 'P', '1964-04-18', 'Lamawolo', 'Karyawati', 'DS016'),
(12, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Kresensia Kewa', '+6285287841529', '', '', 'P', '1967-05-23', 'Helanlangowuyu', 'karyawati', 'DS012'),
(13, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Kornelia Bunga', '+6285239513619', '', '', 'P', '1973-04-07', 'Riawale', 'karyawati', 'DS015'),
(14, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Hironimus Sanga Liat', '+6285239241811', '', '', 'P', '1969-07-16', 'Sukutokan', 'guru honor', 'DS004'),
(15, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Rahmawati', '+6282147580030', '', '', 'P', '1973-12-31', 'Boleng', 'Tenun Ikat', 'DS017'),
(16, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Moreantje Wollo', '+6285239119897', '', '', 'P', '1968-03-20', 'Hinga', 'Karyawati', 'DS005'),
(17, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Theresia Ina Duran', '+6281237921469', '', '', 'P', '1971-06-28', 'Lebanuba', 'Karyawati', 'DS014'),
(18, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Nursia Muhamad', '+6282145538983', '', '', 'P', '1956-12-16', 'Sagu', 'Karyawati', 'DS009'),
(19, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Apriyani Ina Ese', '+6285253385977', '', '', 'P', '1978-04-04', 'Keluwain', 'Karyawati', 'DS006'),
(20, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Veronika Tuto Wara', '+6285253424097', '', '', 'P', '1965-04-01', 'Dokeng', 'Petani', 'DS013'),
(21, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Emanuel Kopong', '+6281353908568', '', '', 'L', '1985-12-22', 'Koli Lanang', 'Wiraswasta', 'DS011'),
(22, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Jamria Babong', '+6282144849470', '', '', 'P', '1958-11-15', 'Bale', 'Karyawati', 'DS006'),
(23, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Vian Doken', '+6285210381885', '', '', 'L', '1987-07-29', 'Dokeng', 'Toko Pemuda', 'DS013'),
(24, '', '', 0, '', '0000-00-00 00:00:00', 0, 'kasiyati', '+6282147398328', '', '', 'P', '1968-06-22', 'Adobala', 'ibu RT', 'DS002'),
(25, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Umar Bakir', '+6281236979356', '', '', 'L', '1959-08-17', 'Sagu', 'Nelayan', 'DS009'),
(26, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Helena Nini', '+6282144720340', '', '', 'P', '1969-12-12', 'Sukutokan', 'karyawati', 'DS004'),
(27, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Kristina Somi Biri', '+6285287841518', '', '', 'P', '1965-07-12', 'Kolilanang', 'ibu RT', 'DS011'),
(28, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Rosalina Dewi', '+6281238339573', '', '', 'P', '1979-02-13', 'Kolimasang', 'Ibu RT', 'DS010'),
(29, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Milka Naomi Lango', '+6281355620628', '', '', 'P', '1958-05-23', 'Riawale', 'Ibu RT', 'DS015'),
(30, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Yuliana Nugi', '+6282339455236', '', '', 'P', '1966-06-07', 'Duablolong', 'Ibu RT', 'DS019'),
(31, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Maria Kewa Sugi', '+6281238339573', '', '', 'P', '1972-02-04', 'Nelelamadiken', 'Ibu RT', 'DS018'),
(32, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Genoveva Ero', '+6281239862992', '', '', 'P', '1976-12-12', 'Lamatewelu', 'Ibu RT', 'DS021'),
(33, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Anastasia Hingi Rapok', '+6282237327154', '', '', 'P', '1996-01-31', 'Nelelamadiken', 'mencari kerja', 'DS018'),
(34, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Andreas', '+6282344027786', '', '', 'L', '1987-01-01', 'Watowaeng', 'pencari Kerja', 'DS021'),
(35, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Antonius  Eban', '+6282144347196', '', '', 'L', '1987-07-04', 'Duablolong', 'pencari kerja', 'DS019'),
(36, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Yohanes Vianei Tokan Bunga', '+6285253825806', '', '', 'L', '1985-03-17', 'Redontena', 'Pencari Kerja', 'DS003'),
(37, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Petrus Ama Dosi', '+6281236922500', '', '', 'L', '1966-02-01', 'Lebanuba', 'wiraswasta', 'DS014'),
(38, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Yonas Ola', '+6281246428226', '', '', 'L', '1959-12-23', 'Lamawolo', 'Petani', 'DS016'),
(39, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Tarsisius Doni Beda', '+6285238692119', '', '', 'L', '1961-05-03', 'Helanlangowuyo', 'petani', 'DS012'),
(40, '', '', 0, '', '0000-00-00 00:00:00', 0, 'Fredy Lali Sina', '+6281337992310', '', '', 'L', '1974-07-14', 'Nisa Nulang', 'Petani', 'DS008');

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE IF NOT EXISTS `user_auth` (
  `id` tinyint(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `nama`) VALUES
(0, 'Registered'),
(1, 'Administrator'),
(2, 'Redaksi'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_warga` (`id_user`),
  KEY `id_group` (`id_group`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `id_user`, `id_group`) VALUES
(1, 1, 1),
(5, 5, 1),
(25, 26, 1),
(23, 25, 1),
(8, 9, 1),
(9, 10, 1),
(10, 12, 1),
(13, 14, 1),
(12, 16, 1),
(14, 17, 1),
(15, 18, 1),
(16, 19, 1),
(17, 20, 1),
(18, 21, 1),
(24, 22, 1),
(20, 23, 1),
(21, 24, 1),
(26, 27, 1),
(27, 28, 1),
(28, 29, 1),
(29, 30, 1),
(30, 31, 1),
(31, 32, 1),
(32, 33, 1),
(33, 34, 1),
(34, 35, 1),
(35, 36, 1),
(36, 37, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
