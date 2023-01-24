-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2023 pada 15.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `phone`, `alamat`, `created_at`, `updated_at`) VALUES
(13, 'Yuliana Usada', 915, 'Ki. Umalas No. 336, Gunungsitoli 26277, Maluku', '2010-12-28 02:34:18', '2023-01-22 06:39:44'),
(14, 'Nardi Halim', 0, 'Gg. Taman No. 145, Denpasar 32922, Banten', '2016-02-28 12:25:54', '2023-01-22 06:39:44'),
(15, 'Utama Sinaga', 872, 'Psr. Imam Bonjol No. 137, Batam 23447, Malut', '2016-12-13 04:06:24', '2023-01-22 06:39:44'),
(16, 'Ellis Kayla Rahimah S.Sos', 0, 'Kpg. Ikan No. 710, Palu 37648, Sumut', '1970-07-15 04:18:10', '2023-01-22 06:39:44'),
(17, 'Chelsea Vivi Pratiwi M.Ak', 708, 'Ki. Dipatiukur No. 572, Samarinda 35246, Jateng', '1978-12-29 00:36:41', '2023-01-22 06:39:44'),
(18, 'Titi Pratiwi', 0, 'Dk. Bazuka Raya No. 548, Samarinda 19206, Banten', '2009-10-08 13:51:24', '2023-01-22 06:39:44'),
(19, 'Wage Simanjuntak M.Pd', 0, 'Dk. Nakula No. 35, Probolinggo 96715, Jabar', '2011-09-01 03:10:40', '2023-01-22 06:39:44'),
(20, 'Puji Hartati', 395, 'Kpg. Suryo No. 99, Salatiga 59765, Jabar', '1992-01-26 02:45:40', '2023-01-22 06:39:44'),
(21, 'Shakila Laksmiwati', 390, 'Jln. Urip Sumoharjo No. 745, Bima 52490, Sulsel', '1987-10-03 07:01:46', '2023-01-22 06:39:45'),
(22, 'Gabriella Febi Puspita M.TI.', 981, 'Dk. B.Agam Dlm No. 957, Payakumbuh 95472, Kaltara', '1988-12-29 20:57:31', '2023-01-22 06:39:45'),
(23, 'Hamima Uyainah M.Ak', 808, 'Ki. Qrisdoren No. 94, Metro 36430, Kalbar', '1986-03-25 19:05:36', '2023-01-22 06:39:45'),
(24, 'Omar Prasasta', 0, 'Psr. Panjaitan No. 875, Tomohon 14651, DIY', '2010-11-01 01:32:12', '2023-01-22 06:39:45'),
(25, 'Irsad Kajen Firgantoro M.M.', 0, 'Psr. Salam No. 491, Bogor 80758, Babel', '2005-01-01 06:27:15', '2023-01-22 06:39:45'),
(26, 'Nurul Puji Yulianti S.E.I', 425, 'Ds. Katamso No. 963, Tegal 34801, Kalteng', '2019-03-25 12:46:32', '2023-01-22 06:39:45'),
(27, 'Banawa Pangestu', 699, 'Kpg. S. Parman No. 190, Tasikmalaya 71242, Aceh', '2000-05-26 12:10:32', '2023-01-22 06:39:45'),
(28, 'Vinsen Warji Permadi M.Pd', 0, 'Gg. Jend. Sudirman No. 725, Palangka Raya 47054, Sumut', '2021-04-10 14:53:35', '2023-01-22 06:39:45'),
(29, 'Jane Ami Kusmawati S.Kom', 639, 'Ki. Abdullah No. 131, Pasuruan 55293, Babel', '2010-07-28 19:17:38', '2023-01-22 06:39:45'),
(30, 'Zulaikha Nilam Purwanti', 0, 'Jln. Sentot Alibasa No. 212, Tarakan 41370, Babel', '2007-04-19 21:35:16', '2023-01-22 06:39:45'),
(31, 'Kezia Laksmiwati', 0, 'Gg. M.T. Haryono No. 813, Makassar 74208, Banten', '1972-05-26 12:43:04', '2023-01-22 06:39:45'),
(32, 'Farhunnisa Sakura Palastri S.Pd', 561, 'Gg. Hasanuddin No. 338, Bau-Bau 73832, Malut', '1975-11-23 23:26:57', '2023-01-22 06:39:45'),
(33, 'Cawuk Anggriawan', 0, 'Psr. Gajah Mada No. 245, Binjai 36246, Kalbar', '1983-08-30 08:00:06', '2023-01-22 06:39:45'),
(34, 'Rafid Lazuardi S.E.I', 662, 'Ki. Basuki No. 824, Tanjung Pinang 77021, DIY', '1987-12-05 03:50:20', '2023-01-22 06:39:45'),
(35, 'Hardi Maheswara S.Farm', 0, 'Gg. Camar No. 282, Magelang 99951, DKI', '1972-10-16 11:44:01', '2023-01-22 06:39:45'),
(36, 'Cakrawangsa Mulya Jailani', 349, 'Ki. Sukajadi No. 222, Banda Aceh 41542, Sumsel', '1988-02-10 07:43:53', '2023-01-22 06:39:45'),
(37, 'Uchita Paris Halimah S.Sos', 0, 'Ds. Moch. Yamin No. 731, Palangka Raya 54543, Bengkulu', '1985-02-21 17:41:17', '2023-01-22 06:39:45'),
(38, 'Marsudi Sihotang', 0, 'Kpg. Pelajar Pejuang 45 No. 96, Pekanbaru 75883, Babel', '1979-01-04 09:00:51', '2023-01-22 06:39:45'),
(39, 'Wulan Nasyiah', 538, 'Ki. Hang No. 569, Tidore Kepulauan 82626, Sulbar', '2007-06-05 09:42:24', '2023-01-22 06:39:45'),
(40, 'Kariman Nugroho', 413, 'Kpg. Kartini No. 800, Ambon 21006, Sulbar', '1998-11-16 02:34:58', '2023-01-22 06:39:45'),
(41, 'Shakila Nasyidah', 0, 'Gg. Imam No. 154, Ambon 71851, Sulut', '2022-12-06 00:35:47', '2023-01-22 06:39:45'),
(42, 'Edi Tampubolon S.IP', 0, 'Dk. Imam Bonjol No. 467, Pagar Alam 63219, Kalbar', '2022-06-11 03:04:47', '2023-01-22 06:39:45'),
(43, 'Prabu Pranowo', 245, 'Kpg. Adisumarmo No. 845, Lubuklinggau 81113, Lampung', '1984-10-30 23:39:14', '2023-01-22 06:39:45'),
(44, 'Margana Waluyo', 0, 'Ki. Dago No. 121, Pekalongan 12420, DKI', '1981-01-13 10:21:33', '2023-01-22 06:39:45'),
(45, 'Oni Utami', 0, 'Gg. Sutarjo No. 930, Administrasi Jakarta Barat 30464, Gorontalo', '1982-03-31 14:25:09', '2023-01-22 06:39:45'),
(46, 'Farah Anggraini S.E.I', 289, 'Jln. Bazuka Raya No. 641, Semarang 44594, Jabar', '1977-04-07 10:21:28', '2023-01-22 06:39:45'),
(47, 'Indra Siregar M.Farm', 246, 'Jln. Pintu Besar Selatan No. 412, Medan 34569, Pabar', '1997-06-08 23:07:06', '2023-01-22 06:39:45'),
(48, 'Maida Zalindra Hariyah', 508, 'Gg. Bak Mandi No. 380, Balikpapan 67816, Babel', '1986-01-26 01:18:43', '2023-01-22 06:39:45'),
(49, 'Titin Lailasari', 802, 'Dk. Sentot Alibasa No. 813, Sukabumi 39751, Jateng', '2016-04-05 06:07:30', '2023-01-22 06:39:45'),
(50, 'Salsabila Mayasari S.T.', 20, 'Dk. R.M. Said No. 822, Tanjungbalai 69428, Gorontalo', '1978-03-29 19:03:12', '2023-01-22 06:39:45'),
(51, 'Padma Namaga', 297, 'Psr. Pattimura No. 553, Batam 91083, Sulsel', '1979-04-25 22:34:16', '2023-01-22 06:39:45'),
(52, 'Karsa Nababan S.IP', 0, 'Jln. Jambu No. 977, Langsa 75661, Kaltara', '2016-02-06 09:46:24', '2023-01-22 06:39:45'),
(53, 'Keisha Wulandari', 832, 'Psr. Salak No. 803, Padangsidempuan 17355, Malut', '1974-11-15 01:41:22', '2023-01-22 06:39:45'),
(54, 'Vinsen Hutasoit S.Sos', 636, 'Psr. Suprapto No. 47, Medan 28879, Jambi', '2004-07-05 14:53:28', '2023-01-22 06:39:45'),
(55, 'Tina Fitriani Haryanti', 768, 'Ki. Baabur Royan No. 201, Depok 69590, DIY', '1999-01-15 19:19:17', '2023-01-22 06:39:45'),
(56, 'Jelita Hasanah', 475, 'Ki. Sutarto No. 639, Gorontalo 38413, Babel', '1985-12-27 19:25:08', '2023-01-22 06:39:45'),
(57, 'Vanya Hariyah', 622, 'Ki. M.T. Haryono No. 252, Denpasar 29092, Jateng', '1987-09-24 08:27:43', '2023-01-22 06:39:45'),
(58, 'Harsaya Sihombing M.Pd', 982, 'Jr. Babakan No. 323, Pekanbaru 67486, Jambi', '1989-10-04 15:52:34', '2023-01-22 06:39:45'),
(59, 'Alika Haryanti', 323, 'Dk. Achmad No. 937, Bekasi 87972, Jatim', '1990-09-03 02:30:05', '2023-01-22 06:39:45'),
(60, 'Hasim Cakrabirawa Ardianto', 595, 'Psr. Rajawali Timur No. 786, Blitar 14342, Pabar', '2014-05-24 08:37:08', '2023-01-22 06:39:45'),
(61, 'Mutia Cornelia Pratiwi', 0, 'Psr. Cihampelas No. 12, Solok 80443, Aceh', '1985-02-12 13:06:35', '2023-01-22 06:39:45'),
(62, 'Jatmiko Tarihoran M.TI.', 239, 'Jr. Daan No. 450, Binjai 94081, DIY', '2008-01-17 12:18:13', '2023-01-22 06:39:45'),
(63, 'Mustika Simanjuntak M.Ak', 24, 'Kpg. Katamso No. 919, Gorontalo 43829, Sumsel', '2014-10-13 13:59:25', '2023-01-22 06:39:45'),
(64, 'Violet Puspa Winarsih M.Farm', 932, 'Psr. Bass No. 784, Binjai 37899, DIY', '1972-06-20 21:45:25', '2023-01-22 06:39:45'),
(65, 'Hardana Cemeti Kurniawan S.E.', 0, 'Gg. Jayawijaya No. 351, Bengkulu 31074, Maluku', '1985-09-26 02:42:28', '2023-01-22 06:39:45'),
(66, 'Vanesa Safitri', 0, 'Gg. Kali No. 731, Jambi 69522, Sumbar', '2011-11-11 23:12:57', '2023-01-22 06:39:45'),
(67, 'Paulin Uyainah M.Pd', 517, 'Ds. Ikan No. 432, Bau-Bau 32231, Sumbar', '1979-02-03 04:03:25', '2023-01-22 06:39:45'),
(68, 'Qori Usamah', 0, 'Psr. Astana Anyar No. 90, Pasuruan 73740, DIY', '1995-04-11 11:31:43', '2023-01-22 06:39:45'),
(69, 'Salwa Rini Nasyidah S.Kom', 635, 'Psr. Ketandan No. 534, Tanjungbalai 73178, Kalsel', '2009-08-29 22:29:52', '2023-01-22 06:39:45'),
(70, 'Purwa Tamba', 0, 'Jln. Baabur Royan No. 880, Banjar 60764, Sulbar', '1987-11-22 17:21:44', '2023-01-22 06:39:45'),
(71, 'Gadang Hasan Pangestu', 0, 'Psr. Bambon No. 103, Mataram 75246, Sumsel', '2018-04-19 23:06:21', '2023-01-22 06:39:45'),
(72, 'Surya Natsir', 21, 'Kpg. Banda No. 691, Administrasi Jakarta Barat 47161, Sultra', '1982-12-05 21:04:17', '2023-01-22 06:39:45'),
(73, 'Cinta Rahimah', 571, 'Jln. Bappenas No. 277, Jambi 78869, Papua', '1986-04-21 04:17:49', '2023-01-22 06:39:45'),
(74, 'Harjaya Suwarno S.Farm', 878, 'Ds. Nakula No. 409, Pangkal Pinang 31922, Riau', '2013-02-26 02:33:01', '2023-01-22 06:39:45'),
(75, 'Mutia Suryatmi', 960, 'Ki. PHH. Mustofa No. 211, Tangerang 13955, Papua', '1997-11-06 03:54:40', '2023-01-22 06:39:45'),
(76, 'Edi Prayoga S.I.Kom', 0, 'Jln. Basuki No. 272, Manado 94514, Kaltim', '1998-12-09 05:32:33', '2023-01-22 06:39:45'),
(77, 'Yunita Novitasari', 953, 'Gg. Cemara No. 276, Jayapura 44939, Sultra', '2019-11-25 17:45:52', '2023-01-22 06:39:45'),
(78, 'Salsabila Puspasari', 0, 'Ki. Suniaraja No. 463, Probolinggo 77221, NTB', '2009-09-27 06:40:07', '2023-01-22 06:39:45'),
(79, 'Tania Tari Puspita M.Pd', 0, 'Kpg. Madiun No. 104, Pekalongan 89572, Sulsel', '2018-10-20 22:18:05', '2023-01-22 06:39:45'),
(80, 'Faizah Utami S.Farm', 925, 'Gg. Baik No. 964, Singkawang 75146, Banten', '2002-03-06 00:34:49', '2023-01-22 06:39:45'),
(81, 'Xanana Saefullah', 281, 'Psr. Tubagus Ismail No. 51, Tangerang Selatan 16761, Sulsel', '2005-12-30 07:49:44', '2023-01-22 06:39:45'),
(82, 'Banawi Siregar S.I.Kom', 0, 'Kpg. Salam No. 982, Lhokseumawe 69074, Sulut', '1982-04-18 00:06:50', '2023-01-22 06:39:45'),
(83, 'Cindy Astuti', 0, 'Kpg. K.H. Maskur No. 479, Mataram 87768, Kepri', '2002-05-22 17:20:53', '2023-01-22 06:39:45'),
(84, 'Clara Mandasari S.I.Kom', 0, 'Psr. Cikapayang No. 453, Singkawang 15244, Sulsel', '1992-11-03 21:47:02', '2023-01-22 06:39:45'),
(85, 'Nova Novitasari S.Farm', 0, 'Dk. Adisumarmo No. 796, Padangpanjang 95261, Lampung', '1974-12-27 14:56:38', '2023-01-22 06:39:45'),
(86, 'Ida Farida', 21, 'Jln. Tangkuban Perahu No. 557, Palu 55166, Gorontalo', '1976-11-18 16:04:18', '2023-01-22 06:39:45'),
(87, 'Raditya Hidayat S.Psi', 0, 'Jr. Jayawijaya No. 666, Pontianak 16582, Pabar', '1972-07-28 19:13:41', '2023-01-22 06:39:45'),
(88, 'Simon Latupono', 739, 'Jln. Bambon No. 81, Ternate 10206, Kepri', '1976-10-03 23:09:42', '2023-01-22 06:39:45'),
(89, 'Malika Cici Pratiwi', 435, 'Jr. Sudiarto No. 83, Cimahi 97865, Kaltara', '1994-10-23 06:45:11', '2023-01-22 06:39:45'),
(90, 'Septi Ciaobella Anggraini', 289, 'Psr. Untung Suropati No. 81, Gorontalo 71263, Banten', '1994-11-22 06:22:16', '2023-01-22 06:39:45'),
(91, 'Ulya Mardhiyah', 359, 'Psr. Abang No. 416, Tebing Tinggi 28630, Banten', '2022-07-23 21:47:09', '2023-01-22 06:39:45'),
(92, 'Dipa Karman Wibisono', 242, 'Ki. B.Agam 1 No. 522, Samarinda 63417, Lampung', '1995-11-01 22:46:41', '2023-01-22 06:39:45'),
(93, 'Yulia Pia Rahmawati S.Sos', 964, 'Gg. Bagonwoto  No. 496, Batam 42712, Kalbar', '2001-08-31 19:17:45', '2023-01-22 06:39:45'),
(94, 'Carla Yulianti', 0, 'Jln. Badak No. 685, Bekasi 12198, Bengkulu', '1984-06-04 07:52:19', '2023-01-22 06:39:45'),
(95, 'Gina Ellis Mardhiyah', 838, 'Ki. Supomo No. 342, Ambon 98516, Kalbar', '1989-08-02 15:59:18', '2023-01-22 06:39:45'),
(96, 'Cinta Uchita Mandasari', 0, 'Ki. Abdul. Muis No. 430, Sorong 31791, Sumsel', '1996-12-25 15:37:29', '2023-01-22 06:39:45'),
(97, 'Maria Mardhiyah S.Pd', 546, 'Kpg. Basoka Raya No. 739, Sungai Penuh 49510, Lampung', '2020-11-20 12:07:44', '2023-01-22 06:39:45'),
(98, 'Empluk Cahyo Siregar', 667, 'Jln. Salam No. 827, Pasuruan 63492, Sulut', '1990-04-22 16:22:41', '2023-01-22 06:39:45'),
(99, 'Kasusra Luwes Hidayat M.Pd', 0, 'Kpg. Gardujati No. 690, Magelang 76036, Sultra', '2010-06-07 13:34:43', '2023-01-22 06:39:45'),
(100, 'Ganda Budiyanto', 28, 'Ki. Wahid Hasyim No. 344, Sibolga 93673, Pabar', '1983-08-21 05:17:14', '2023-01-22 06:39:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-01-22-041334', 'App\\Database\\Migrations\\Contact', 'default', 'App', 1674361663, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `produk` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `harga` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `produk`, `slug`, `harga`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Burger Super Max', 'burger-super-max', 42000, 'g-1.jpg', '2023-01-14 13:23:35', '2023-01-21 15:33:45'),
(19, 'Cookies', 'cookies', 30000, '1674314870_36b43999293561bfdf30.jpg', '2023-01-21 14:18:19', '2023-01-21 15:27:50'),
(21, 'Pizza Papperoni', 'pizza-papperoni', 85000, 'piza-pp_2.png', '2023-01-21 15:33:01', '2023-01-21 15:33:01'),
(22, 'Burger Double Max', 'burger-double-max', 55000, 'p-1_1.jpg', '2023-01-21 15:33:35', '2023-01-21 15:33:35'),
(23, 'Smoothies', 'smoothies', 20000, 's-img-4_1.jpg', '2023-01-21 15:34:20', '2023-01-21 15:34:20'),
(24, 'Ice Cream', 'ice-cream', 25000, 's-img-3_1.jpg', '2023-01-21 15:34:39', '2023-01-21 15:34:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
