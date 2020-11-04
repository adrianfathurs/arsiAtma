-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 07:06 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummyarsiatma`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `no_telp` varchar(32) NOT NULL,
  `instasi` varchar(32) NOT NULL,
  `type_akun` char(2) NOT NULL,
  `status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `username`, `password`, `nama_lengkap`, `no_telp`, `instasi`, `type_akun`, `status`) VALUES
(1, 'fatursetiawan80@gmail.com', 'Adrian', 'fathur123', 'Adrian Fathur s', '089634097803', 'UPN', '1', '1'),
(2, 'muhammad@gmail.com', 'setiawan', 'setiawan123', 'Muhammad', '00894539', 'UPNYK', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `biro`
--

CREATE TABLE `biro` (
  `id_biro` int(11) NOT NULL,
  `nama_biro` varchar(64) NOT NULL,
  `foto1_biro` text NOT NULL,
  `foto2_biro` text NOT NULL,
  `tugas_biro` text NOT NULL,
  `deskripsi_biro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biro`
--

INSERT INTO `biro` (`id_biro`, `nama_biro`, `foto1_biro`, `foto2_biro`, `tugas_biro`, `deskripsi_biro`) VALUES
(5, 'USAHA MIKAT', '9.jpg', 'halaman 1-15', '<p>scsdcs</p>\r\n', '<p>cscds</p>\r\n'),
(6, 'USDAS', '1.jpg', '', '<p>dvkdfvkdfhk</p>\r\n', '<p>vkdfnvdn</p>\r\n'),
(7, 'PRO', '13.jpg', '', '<p>ggndklnldfknbd</p>\r\n', '<p>bmfkdlnbd</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_fakultas`
--

CREATE TABLE `favorite_fakultas` (
  `id_favorite_fakultas` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_fakultas` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_hima`
--

CREATE TABLE `favorite_hima` (
  `id_favorite_hima` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_hima` int(11) NOT NULL,
  `statusfavoritehima` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorite_hima`
--

INSERT INTO `favorite_hima` (`id_favorite_hima`, `fk_akun`, `fk_informasi_hima`, `statusfavoritehima`, `created_date`) VALUES
(1, 1, 2, 1, '2020-11-02 12:02:23'),
(3, 1, 1, 1, '2020-11-02 12:41:15'),
(4, 1, 3, 1, '2020-11-02 12:43:48'),
(20, 1, 4, 1, '2020-11-03 02:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_pamiy`
--

CREATE TABLE `favorite_pamiy` (
  `id_favorite_pamiy` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_pamiy` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_portofolio`
--

CREATE TABLE `favorite_portofolio` (
  `id_favorite_portofolio` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_portofolio` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_umum`
--

CREATE TABLE `favorite_umum` (
  `id_favorite_umum` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_informasi_umum` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_univ`
--

CREATE TABLE `favorite_univ` (
  `id_favorite_univ` int(11) NOT NULL,
  `fk_akun` int(11) NOT NULL,
  `fk_informasi_univ` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_fakultas`
--

CREATE TABLE `informasi_fakultas` (
  `id_informasi_fakultas` int(11) NOT NULL,
  `judul_fakultas` varchar(256) NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_fakultas` text NOT NULL,
  `foto2_fakultas` text NOT NULL,
  `foto3_fakultas` text NOT NULL,
  `foto4_fakultas` text NOT NULL,
  `foto5_fakultas` text NOT NULL,
  `deskripsi_fakultas` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_hima`
--

CREATE TABLE `informasi_hima` (
  `id_informasi_hima` int(11) NOT NULL,
  `judul_hima` varchar(256) NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_hima` text NOT NULL,
  `foto2_hima` text NOT NULL,
  `foto3_hima` text NOT NULL,
  `foto4_hima` text NOT NULL,
  `foto5_hima` text NOT NULL,
  `deskripsi_hima` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_hima`
--

INSERT INTO `informasi_hima` (`id_informasi_hima`, `judul_hima`, `nama_penulis`, `foto1_hima`, `foto2_hima`, `foto3_hima`, `foto4_hima`, `foto5_hima`, `deskripsi_hima`, `status`, `created_date`) VALUES
(1, 'Atma Jaya Tanpa Demo', 'Adrian Fathur s', '0f1e88341626488fb3f61de4de4a7a39.jpg', '3e2b40d6ec0a91b32c66ba598fc901bb.jpg', '71bd00e6729c3654d4e03646ce94ec6b.jpg', '620d1b747d434945b0a12a35f3faf584.jpg', '0d0171fd17d712663e1b6f94090206e5.jpg', '<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<h3>Terjemahan tahun 1914 oleh H. Rackham</h3>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<h3>Bagian 1.10.33 dari &quot;de Finibus Bonorum et Malorum&quot;, ditulis oleh Cicero pada tahun 45 sebelum masehi</h3>\r\n\r\n<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;</p>\r\n', '1', '2020-10-22 07:20:52'),
(2, 'Babarsari Longsor', 'Adrian Fathur s', '1.jpg', '2.jpg', '4.jpg', '8.jpg', '12.jpg', '<p>Berdasarkan uraian di atas Limit pada sql merupakan keyword yang digunakan untuk menampilkan jumlah row data yang ingin ditampilkan selanjutnya offset berfungsi untuk menampilkan data dengan melawati data sebanyak jumlah yang telah ditentukan (Offset).</p>\r\n\r\n<p>untuk menggunakan offset kita tambahkan pada $this-&gt;db-&gt;limit(3,<strong>1</strong>), angka 1 merupakan offset sehingga penggunaan offset pada query builder codeigniter dapat dilakukan dengan membuat function model sebagai berikut :</p>\r\n', '1', '2020-11-01 13:25:09'),
(3, 'ATma ok', 'Adrian Fathur s', '6.jpg', '14.jpg', '', '', '', '<p>hfghdhdhggdgdgfdg</p>\r\n', '1', '2020-11-02 09:43:00'),
(4, 'ATMA ARSITEK', 'Adrian Fathur s', '19.jpg', '17.jpg', '', '', '', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', '1', '2020-11-03 02:22:31'),
(5, 'HALO DUNIA ARSIII', 'Adrian Fathur s', '9.jpg', '15.jpg', '', '', '', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '1', '2020-11-03 03:16:04'),
(6, 'HELLO ATMAKU', 'Adrian Fathur s', '151.jpg', '18.jpg', '', '', '', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', '1', '2020-11-03 04:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_pamiy`
--

CREATE TABLE `informasi_pamiy` (
  `id_informasi_pamiy` int(11) NOT NULL,
  `judul_pamiy` text NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_pamiy` text NOT NULL,
  `foto2_pamiy` text NOT NULL,
  `foto3_pamiy` text NOT NULL,
  `foto4_pamiy` text NOT NULL,
  `foto5_pamiy` text NOT NULL,
  `deskripsi_pamiy` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_umum`
--

CREATE TABLE `informasi_umum` (
  `id_informasi_umum` int(11) NOT NULL,
  `judul_umum` text NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_umum` text NOT NULL,
  `foto2_umum` text NOT NULL,
  `foto3_umum` text NOT NULL,
  `foto4_umum` text NOT NULL,
  `foto5_umum` text NOT NULL,
  `deskripsi_umum` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informasi_univ`
--

CREATE TABLE `informasi_univ` (
  `id_informasi_univ` int(11) NOT NULL,
  `judul_univ` varchar(256) NOT NULL,
  `nama_penulis` varchar(64) NOT NULL,
  `foto1_univ` text NOT NULL,
  `foto2_univ` text NOT NULL,
  `foto3_univ` text NOT NULL,
  `foto4_univ` text NOT NULL,
  `foto5_univ` text NOT NULL,
  `deskripsi_univ` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_univ`
--

INSERT INTO `informasi_univ` (`id_informasi_univ`, `judul_univ`, `nama_penulis`, `foto1_univ`, `foto2_univ`, `foto3_univ`, `foto4_univ`, `foto5_univ`, `deskripsi_univ`, `status`, `created_date`) VALUES
(1, 'HALO UPN', 'Muhammad', '3x4.jpg', '', '', '', '', 'uy uy', '', '2020-11-01 10:47:02'),
(2, 'HALO ATMA', 'Adrian Fathur s', '14.jpg', '61.jpg', '73.jpg', '81.jpg', '111.jpg', '<p>HAJDJASHDA</p>\r\n', '1', '2020-11-01 11:13:19'),
(3, 'Halo upn', 'Adrian Fathur s', '62.jpg', '', '', '', '', '<p>dgfdfdgdgfdgd</p>\r\n', '1', '2020-11-02 09:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `instagram`
--

CREATE TABLE `instagram` (
  `id_instagram` int(11) NOT NULL,
  `link_instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `id_ph` int(11) NOT NULL,
  `foto1_ph` text NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `tugas_ph` text NOT NULL,
  `deskripsi_ph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`id_ph`, `foto1_ph`, `nama_lengkap`, `tugas_ph`, `deskripsi_ph`) VALUES
(1, 'ph1.jpg', 'Minat dan Bakat', '<p>1.dfnslkfkdsfkjbdjkbvfdsjkvbsjk 2.nsklfnsdlkf 3.fdksfnksjb</p>\r\n', '<p>menjaga semua umat</p>\r\n'),
(2, 'ph4.jpg', 'Andaka Dadi Pradana', '<p>1.fnsklfndslvnlsdnvlsnvlsnlv 2.kvnkvdfvbfdvbdjvbkdfvbkdvbkdvdk 3.vkdfnvksnkvnskvfnds</p>\r\n', '<p>kadbkvjbsdkfjv bskdvbsngkjfgkdf kgndfkgndfkgnjkdf ngjkdfgnjkdfgnkdfngkdf ngkndfkgndkfngkdf ngkdnfkgndk fngkdfngkndfkgn fdkgndkkvbsvbjkdsvb kjfdsvbkdsb</p>\r\n '),
(3, 'ph3.jpg', 'Muhammad Setiawan Wicaksono', '<p>1.kdfnkfjdfvbkdfvkdbfvbdfkvbfdkk</p>\r\n\r\n<p>2.fjdjvbd</p>\r\n\r\n<p>3.vjkfdnvdj</p>\r\n', '<p>sdvksbdvigwuigsdvsdivf</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `judul_portofolio` text NOT NULL,
  `nama_peraih` varchar(64) NOT NULL,
  `foto1_portofolio` text NOT NULL,
  `foto2_portofolio` text NOT NULL,
  `foto3_portofolio` text NOT NULL,
  `foto4_portofolio` text NOT NULL,
  `foto5_portofolio` text NOT NULL,
  `keterangan_portofolio` text NOT NULL,
  `status` char(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `nama_lengkap` varchar(64) NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `isi_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `email`, `nama_lengkap`, `no_telp`, `isi_saran`) VALUES
(3, 'fatursetiawan80@yahoo.com', 'Adrian111', '089634097803', 'Hallo guys'),
(4, 'fatursetiawan89@gmail.com', 'rifki', '089778374121', 'guyysss'),
(5, 'fasda@gmail.com', 'Muhamad Setiawan Wicaksono', '08977742', 'dunia hebat'),
(6, 'fasda@gmail.com', 'Muhamad Setiawan Wicaksono', '08977742', 'dunia hebat'),
(7, 'fatursetiawan80@yahoo.com', 'des', '08490374029', 'fdjasfdha'),
(8, 'fatursetiawan80@yahoo.com', 'des', '08490374029', 'fdjasfdha'),
(9, 'fatursetiawan89@gmail.com', 'Setyawan', '089765456723', 'hjdshhj'),
(10, 'fatursetiawan89@gmail.com', 'Setyawan', '089765456723', 'hjdshhj'),
(11, 'fatursetiawan@gmail.com', 'fathur', '089785393', 'HALOOOO SKUUYYY'),
(12, 'fatursetiawan@gmail.com', 'fathur1', '089785393', 'HALOOOO SKUUYYY'),
(13, 'fatursetiawan80@yahoo.com', 'dashdhakjd', '08904789437', 'dagfdhagdfagf'),
(14, 'fatursetiawan80@yahoo.com', 'dashdhakjd', '08904789437', 'dagfdhagdfagf'),
(15, 'fatursetiawan80@yahoo.com', 'dashdhakjd', '08904789437', 'dagfdhagdfagf'),
(16, 'fatursss@gmail.com', 'adrian1111', '0948390490', 'dshfjksd'),
(17, 'fatursetiawan@gmail.com', 'faturrrrrfatu', '2309173091731', 'kdshflkdshfskjfhsjkf'),
(18, 'prada@gmail.com', 'pradana', '077896876785', 'ldkshfkhsdfjkshkjfs'),
(19, 'fatursetiawan89@gmail.com', 'ekjcgejk', '343324', 'vhfgvkhfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `biro`
--
ALTER TABLE `biro`
  ADD PRIMARY KEY (`id_biro`);

--
-- Indexes for table `favorite_fakultas`
--
ALTER TABLE `favorite_fakultas`
  ADD PRIMARY KEY (`id_favorite_fakultas`),
  ADD KEY `fk_informasi_fakultas` (`fk_informasi_fakultas`);

--
-- Indexes for table `favorite_hima`
--
ALTER TABLE `favorite_hima`
  ADD PRIMARY KEY (`id_favorite_hima`),
  ADD KEY `fk_informasi_hima` (`fk_informasi_hima`);

--
-- Indexes for table `favorite_pamiy`
--
ALTER TABLE `favorite_pamiy`
  ADD KEY `fk_informasi_pamiy` (`fk_informasi_pamiy`);

--
-- Indexes for table `favorite_portofolio`
--
ALTER TABLE `favorite_portofolio`
  ADD PRIMARY KEY (`id_favorite_portofolio`),
  ADD KEY `fk_portofolio` (`fk_portofolio`);

--
-- Indexes for table `favorite_umum`
--
ALTER TABLE `favorite_umum`
  ADD PRIMARY KEY (`id_favorite_umum`),
  ADD KEY `fk_informasi_umum` (`fk_informasi_umum`);

--
-- Indexes for table `favorite_univ`
--
ALTER TABLE `favorite_univ`
  ADD PRIMARY KEY (`id_favorite_univ`),
  ADD KEY `fk_informasi_univ` (`fk_informasi_univ`);

--
-- Indexes for table `informasi_fakultas`
--
ALTER TABLE `informasi_fakultas`
  ADD PRIMARY KEY (`id_informasi_fakultas`);

--
-- Indexes for table `informasi_hima`
--
ALTER TABLE `informasi_hima`
  ADD PRIMARY KEY (`id_informasi_hima`);

--
-- Indexes for table `informasi_pamiy`
--
ALTER TABLE `informasi_pamiy`
  ADD PRIMARY KEY (`id_informasi_pamiy`);

--
-- Indexes for table `informasi_umum`
--
ALTER TABLE `informasi_umum`
  ADD PRIMARY KEY (`id_informasi_umum`);

--
-- Indexes for table `informasi_univ`
--
ALTER TABLE `informasi_univ`
  ADD PRIMARY KEY (`id_informasi_univ`);

--
-- Indexes for table `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id_instagram`);

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id_ph`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `biro`
--
ALTER TABLE `biro`
  MODIFY `id_biro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favorite_fakultas`
--
ALTER TABLE `favorite_fakultas`
  MODIFY `id_favorite_fakultas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_hima`
--
ALTER TABLE `favorite_hima`
  MODIFY `id_favorite_hima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `favorite_portofolio`
--
ALTER TABLE `favorite_portofolio`
  MODIFY `id_favorite_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_umum`
--
ALTER TABLE `favorite_umum`
  MODIFY `id_favorite_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_univ`
--
ALTER TABLE `favorite_univ`
  MODIFY `id_favorite_univ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_fakultas`
--
ALTER TABLE `informasi_fakultas`
  MODIFY `id_informasi_fakultas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_hima`
--
ALTER TABLE `informasi_hima`
  MODIFY `id_informasi_hima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `informasi_pamiy`
--
ALTER TABLE `informasi_pamiy`
  MODIFY `id_informasi_pamiy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_umum`
--
ALTER TABLE `informasi_umum`
  MODIFY `id_informasi_umum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi_univ`
--
ALTER TABLE `informasi_univ`
  MODIFY `id_informasi_univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id_instagram` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `id_ph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite_fakultas`
--
ALTER TABLE `favorite_fakultas`
  ADD CONSTRAINT `fk_informasi_fakultas` FOREIGN KEY (`fk_informasi_fakultas`) REFERENCES `informasi_fakultas` (`id_informasi_fakultas`);

--
-- Constraints for table `favorite_hima`
--
ALTER TABLE `favorite_hima`
  ADD CONSTRAINT `fk_informasi_hima` FOREIGN KEY (`fk_informasi_hima`) REFERENCES `informasi_hima` (`id_informasi_hima`);

--
-- Constraints for table `favorite_pamiy`
--
ALTER TABLE `favorite_pamiy`
  ADD CONSTRAINT `fk_informasi_pamiy` FOREIGN KEY (`fk_informasi_pamiy`) REFERENCES `informasi_pamiy` (`id_informasi_pamiy`);

--
-- Constraints for table `favorite_portofolio`
--
ALTER TABLE `favorite_portofolio`
  ADD CONSTRAINT `fk_portofolio` FOREIGN KEY (`fk_portofolio`) REFERENCES `portofolio` (`id_portofolio`);

--
-- Constraints for table `favorite_umum`
--
ALTER TABLE `favorite_umum`
  ADD CONSTRAINT `fk_informasi_umum` FOREIGN KEY (`fk_informasi_umum`) REFERENCES `informasi_umum` (`id_informasi_umum`);

--
-- Constraints for table `favorite_univ`
--
ALTER TABLE `favorite_univ`
  ADD CONSTRAINT `fk_informasi_univ` FOREIGN KEY (`fk_informasi_univ`) REFERENCES `informasi_univ` (`id_informasi_univ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
