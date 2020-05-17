-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 05:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silivent`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `shortDesc` varchar(500) NOT NULL,
  `longDesc` longtext NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `verivied` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `nama`, `image`, `shortDesc`, `longDesc`, `kategori`, `creator`, `institusi`, `creator_id`, `verivied`) VALUES
(1, 'Gemastik', '01.jpg', 
  '
    GEMASTIK atau Pagelaran Mahasiswa Nasional Bidang Tekonologi Informasi dan Komunikasi, merupakan program Direktorat Kemahasiswaan, Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kementerian Riset, Teknologi dan Pendidikan Tinggi. Program ini ditujukan untuk meningkatkan kompetensi mahasiswa Indonesia, sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya, baik ketika masih dalam masa studi maupun kelak sesudah lulus studi', 
  '
  GEMASTIK atau Pagelaran Mahasiswa Nasional Bidang Tekonologi Informasi dan Komunikasi, merupakan program Direktorat Kemahasiswaan, Direktorat Jenderal Pembelajaran dan Kemahasiswaan Kementerian Riset, Teknologi dan Pendidikan Tinggi. Program ini ditujukan untuk meningkatkan kompetensi mahasiswa Indonesia, sehingga mampu mengambil peran sebagai agen perubahan dalam memajukan TIK dan pemanfaatannya, baik ketika masih dalam masa studi maupun kelak sesudah lulus studi. Pada tahun ini, GEMASTIK digelar untuk ke-12 kalinya dengan tema “Teknologi Informasi untuk Keunggulan Daya Saing Bangsa”. Pagelaran ini diselenggarakan bersama salah satu perguruan tinggi yang ditunjuk oleh Kementerian Riset Teknologi dan Pendidikan Tinggi sebagai penyelenggara. Perguruan Tinggi yang pada tahun ini ditunjuk sebagai penyelenggara GEMASTIK XII 2019 adalah Universitas Telkom di Bandung, Jawa Barat.

  Melalui GEMASTIK, kompetensi TIK mahasiswa Indonesia akan diuji dengan berbagai studi kasus pada masing-masing cabang/divisi lomba untuk menghasilkan solusi paling efisien dan efektif. Para mahasiswa diharapkan mampu terus berkarya dan menyalurkan semangat inovasi dalam pengembangan TIK untuk kemajuan Indonesia. Dari tahun ke tahun, tingkat persaingan di dalam GEMASTIK semakin meningkat. Pada tahun 2017 tercatat tidak kurang dari 2.307 tim yang berasal dari 113 Perguruan Tinggi se-Indonesia terdaftar pada 10 cabang lomba GEMASTIK X. Pada tahun 2018, GEMASTIK XI terlaksana dengan diikuti oleh 2.470 tim yang berasal dari 132 Perguruan Tinggi se-Indonesia pada 11 cabang lomba. Pada tahun 2019 ini, GEMASTIK XII kembali diselenggarakan dengan 11 cabang lomba.

Persyaratan Umum
1.Perguruan Tinggi peserta adalah perguruan tinggi yang terdaftar pada laman PD-DIKTI (http://forlap.dikti.go.id);
2.Peserta adalah mahasiswa aktif yang terdaftar pada perguruan tinggi dan terdaftar pada pada laman PD-DIKTI (http://forlap.dikti.go.id) pada saat batas akhir masa pendaftaran tim (05 September 2019);
3.Peserta adalah mahasiswa Program D3 (maksimal semester 6) atau D4/S1 (maksimal semester 8) pada Babak Final GEMASTIK berlangsung.
4.Setiap 1 tim peserta terdiri dari makimum 3 orang mahasiswa.
5.Penulisan nama mahasiswa peserta wajib menggunakan nama lengkap tanpa disingkat.
6.Peserta wajib mengikuti seluruh jadwal dan aturan ketentuan kompetisi sesusai Buku Panduan edisi mutakhir pada setiap kompetisi tahunan.
7.Untuk lomba berbasis karya kreasi, karya yang diikusertakan tidak diperkenankan mengandung unsur fanatisme SARA (suku – agama – ras – antar golongan), radikalisme, asusila dan plagiarisme, serta belum pernah diikutsertakan dalam kompetisi lain.
8.Presentasi karya inovasi pada babak final dimungkinkan terbuka (dihadiri oleh peserta lain). Keluar-masuk penonton hanya diijinkan pada saat pergantian tim presentasi.
  ', 
  'Informatika', 'HIMALKOM', 'RISTEKDIKTI', 5, 1),
  (2, 'Bogor Art Festival', '02.jpg', 
  '
  Bogor Art Festival merupakan acara yang diselenggarakan oleh Badan Eksekutif Mahasiswa Fakultas Ekonomi dan Manajemen yang sekarang sudah menginjak tahun ke 9. Bogor Art Festival merupakan rangkaian dari 3 acara utama yaitu FEM Art, Expo dan Malam Puncak. Tiket yang disediakan adalah tiket untuk malam puncak yang akan mengundang sejumlah guest star dan musisi papan atas.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'Seni dan Budaya', 'Anak BEM', 'BEM FEM', 6, 1),
    (3, 'Logika UI', '03.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'Informatika', 'Anak UI', 'BEM UI', 7, 1),
  (4, 'Foto Mantan Terindah', '04.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'Fotografi', 'Rehan', 'Komunitas SadBoi', 8, 1),
    (5, 'Karya Tulis SadBoi', '05.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'KTI', 'Rehan', 'Komunitas SadBoi', 8, 1),
  (6, 'Berdebat Tanpa Suara', '06.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'Debat', 'Rehan', 'Komunitas SadBoi', 8, 1),
    (7, 'Lompat Katak Dalam Tempurung', '07.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'Olahraga', 'Rehan', 'Komunitas SadBoi', 8, 1),
  (8, 'ZUMA CHAMPION', '08.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'E-Sport', 'Rehan', 'Komunitas SadBoi', 8, 1),
  (9, '25 !! HAHAHAHAHA', '09.jpg', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
  ', 
  '
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta massa sapien, id sollicitudin purus congue sed. Sed varius eros sed dolor posuere porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed varius elit. In hac habitasse platea dictumst. Proin maximus, sem et finibus varius, leo est congue massa, aliquet fermentum quam felis quis augue. Cras convallis metus gravida, efficitur dui sed, viverra risus. Pellentesque vel neque orci. Integer et tortor nec justo rutrum hendrerit non quis eros.
Fusce egestas enim lacus. Nunc bibendum est libero. Ut faucibus aliquet magna, in finibus felis laoreet vitae. Vivamus et orci sed nisi tempor tempus. In pellentesque semper felis. Fusce sollicitudin metus eros, vel laoreet eros lobortis eu. Suspendisse tempus molestie ultricies. Duis tempor accumsan est id posuere. Mauris rutrum lectus elit, vel vehicula quam aliquet eu. Donec turpis enim, laoreet quis pellentesque at, tincidunt at orci. In hac habitasse platea dictumst. Mauris magna nibh, vehicula nec leo eget, sagittis maximus nunc.
Aliquam erat volutpat. Proin in urna ac lacus finibus eleifend. Vivamus aliquet varius leo eget malesuada. Aenean libero massa, posuere at massa nec, bibendum rhoncus elit. Aenean consequat erat tortor, a venenatis lacus tincidunt non. Vivamus iaculis neque sed hendrerit sagittis. Nam nec varius eros. Vestibulum posuere nulla enim, eget suscipit diam rutrum eget. Donec fermentum risus arcu, feugiat faucibus tellus pellentesque sit amet. Integer blandit magna suscipit commodo finibus. Etiam commodo risus eros, nec vehicula est placerat id. Praesent quis viverra lectus. Mauris egestas facilisis quam tempor feugiat. Morbi consectetur condimentum nisi, a finibus massa euismod at. Cras id laoreet dolor.
Aenean sed efficitur turpis. Vestibulum quis interdum lectus. Phasellus euismod erat sed dui tincidunt, eget posuere nisl fermentum. In hac habitasse platea dictumst. Vestibulum fermentum magna eget tellus bibendum luctus. Etiam mollis, quam sed sagittis ultricies, erat lectus viverra augue, id ultricies sapien dui a ligula. Nullam aliquet leo condimentum dignissim aliquam. Nulla facilisi. Nulla vitae metus nec enim aliquam tempor sit amet ac massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum velit nec nunc ultricies auctor.
Vivamus sagittis augue ac metus vulputate, a volutpat neque fringilla. Nulla quis massa velit. Maecenas semper nisl nibh, vitae ultrices nibh accumsan tincidunt. Phasellus nec finibus diam. Nunc sagittis odio elit, et maximus lacus congue a. Vivamus congue maximus nulla, et hendrerit nibh imperdiet a. Donec accumsan tristique bibendum. Maecenas mauris dolor, pellentesque vitae vestibulum id, pretium condimentum augue. Nam iaculis rhoncus elit non semper. Cras aliquam rhoncus nunc non imperdiet. Nunc tincidunt eu neque gravida tempus. Vestibulum at felis a libero aliquam interdum eget ut elit. ', 
  'Lainnya', 'Rehan', 'Komunitas SadBoi', 8, 1);


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `bio` longtext DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL, 
  `instansi` varchar(50) DEFAULT NULL, 
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
