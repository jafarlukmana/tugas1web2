-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 04:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_penyakit` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama`, `id_penyakit`) VALUES
('g1', 'gusi bengkak', 'p1'),
('g10', 'bau napas tidak sedap', 'p1'),
('g10a', 'bau napas tidak sedap', 'p2'),
('g10b', 'bau napas tidak sedap', 'p3'),
('g10c', 'bau napas tidak sedap', 'p4'),
('g10d', 'bau napas tidak sedap', 'p5'),
('g10e', 'bau napas tidak sedap', 'p6'),
('g10f', 'bau napas tidak sedap', 'p7'),
('g11', 'gigi sakit jika makan/minum panas atau dingin', 'p3'),
('g11a', 'gigi sakit jika makan/minum panas atau dingin', 'p4'),
('g12', 'rasa pahit dimulut', 'p4'),
('g13', 'gigi goyang', 'p1'),
('g14', 'nyeri saat melepaskan tekanan gigitan pada objek', 'p8'),
('g15', 'benjolan pada gusi', 'p8'),
('g16', 'sakit disekitar sendi rahang', 'p9'),
('g17', 'sakit disekitar telinga', 'p9'),
('g18', 'kesulitan menelan makanan', 'p9'),
('g19', 'sakit disekitar wajah', 'p9'),
('g1a', 'gusi bengkak', 'p2'),
('g1b', 'gusi bengkak', 'p3'),
('g1c', 'gusi bengkak', 'p4'),
('g1d', 'gusi bengkak', 'p5'),
('g2', 'gusi berdarah', 'p2'),
('g20', 'suara clicking ketika mengunyah makanan atau membu', 'p9'),
('g21', 'rahang bagian mulut sulit dibuka atau ditutup', 'p9'),
('g22', 'sakit disekitar kepala', 'p9'),
('g23', 'gigitan yang terasa tidak pas', 'p9'),
('g24', 'sakit dan bengkak pada leher', 'p10'),
('g25', 'leher menjadi merah', 'p10'),
('g26', 'badan menjadi demam', 'p10'),
('g27', 'badan terasa lemah', 'p10'),
('g28', 'badan terasa lesu', 'p10'),
('g29', 'badan menjadi mudah capek', 'p10'),
('g3', 'gusi sakit jika disentuh', 'p1'),
('g30', 'pikiran terasa bingung atau\r\nlinglung', 'p10'),
('g31', 'perubahan mental dan kesulitan\r\nbernapas', 'p10'),
('g32', 'gusi merah terang atau keunguan', 'p5'),
('g33', 'gusi terasa tebal ketika disentuh', 'p5'),
('g34', 'gusi yang terdorong maju sehingga membuat gigi ter', 'p5'),
('g35', 'jarak yang timbul diantara gigi', 'p5'),
('g36', 'rasa tidak enak pada mulut', 'p5'),
('g36a', 'rasa tidak enak pada mulut', 'p7'),
('g37', 'gigi tanggal', 'p5'),
('g38', 'perubahan pada bentuk barisan\r\ngigi', 'p5'),
('g39', 'mulut menjadi kering', 'p7'),
('g3a', 'gusi sakit jika disentuh', 'p2'),
('g4', 'radang gusi', 'p2'),
('g40', 'adanya lapisan pada lidah', 'p7'),
('g5', 'gusi mengkilat', 'p2'),
('g6', 'gigi berlubang', 'p6'),
('g7', 'gigi nyeri', 'p1'),
('g7a', 'gigi nyeri', 'p2'),
('g7b', 'gigi nyeri', 'p3'),
('g7c', 'gigi nyeri', 'p4'),
('g7d', 'gigi nyeri', 'p5'),
('g7e', 'gigi nyeri', 'p6'),
('g8', 'gigi ngilu', 'p8'),
('g9', 'gigi patah', 'p6');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(13) NOT NULL,
  `id_diagnosis` varchar(3) NOT NULL,
  `id_pasien` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama`, `solusi`) VALUES
('p1', 'Erosi Gigi', '<p align=''justify''>Penyebabnya adalah hilangya lapisan email gigi pada erosi disebabkan oleh proses kimia tanpa melibatkan bakteri.<br>Anda bisa mengurangi erosi gigi dengan cara menggosok gigi setelah makan, menggunakan sikat gigi yang lembut serta pasta gigi yang menagndung fluoride. Selain itu, Anda bisa mengonsumsi susu atau sepotong keju sesudah makan. Makanan ini membantu menetralkan asam. Di samping itu, Anda bisa mengunyah permen karet bebas gula untuk menstimulasi produksi air ludah.<br>Perbaiki kebersihan gigi<br>\r\n1. Cobalah melakukan flossing secara teratur.<br>2. Gosok gigi perlahan-lahan. Menggosok gigi dengan sikat berbulu keras bisa merusak email gigi.<br>3. Berhati-hatilah mengunakan produk pemutih gigi. Jika tidak digunakan dengan benar, produk ini justru bisa merusak email gigi.<br></p>'),
('p2', 'Ginggivitis', '<p align=''justify''>Adalah peradangan pada gusi (gingiva) yaitu suatu inflamasi pada jaringan gusi, merupakan penyakit penyanggga gigi yang paling ringan. Penyakit ini yang paling sering terjadi pada gusi.<br>Lakukan pembersihan setiap enam bulan sekali di klinik dokter gigi untuk memastikan semua plak dibersihkan secara teratur. Selama plak masih menempel pada gigi, gusi Anda akan tetap mengalami peradangan akibat gingivitis. Temui dokter gigi Anda untuk mengatasi gingivitis.</p>'),
('p3', 'Pulpitis', '<p align=''justify''>Pulpitis adalah peradangan pada pulpa gigi yang menimbulkan rasa nyeri. Pulpa adalah bagian gigi paling dalam, yang mengandung saraf dan pembuluh darah. Penyebab pulpitis yang paling sering ditemukan adalah pembusukan gigi, penyebab kedua adalah cedera.<br>Peradangan mereda jika penyebabnya diobati. Jika pulpitis diketahui pada stadium dini, maka penambalan sementara yang mengandung obat penenang saraf bisa menghilangkan nyeri. Tambalan ini bisa dibiarkan sampai 6-8 minggu dan kemudian diganti dengan tambalan permanen. Jika terjadi kerusakan pulpa yang luas dan tidak dapat diperbaiki, satu-satunya cara untuk menghilangkan nyeri adalah dengan mencabut pulpa, baik melalui pengobatan saluran akar maupun dengan pencabutan gigi.</p>'),
('p4', 'Abses Gigi', '<p align=''justify''>Abses gigi adalah sekumpulan nanah yang disebabkan oleh infeksi bakteri pada bagian dalam gigi. Kondisi ini biasanya muncul sebagai akibat dari rongga gigi tidak diobati, adanya retakan atau serpihan pada gigi anda yang memungkinkan bakteri masuk ke dalam gigi bagian dalam.<br>Jika seseorang mengalami abses gigi, maka segeralah mendatangi dokter gigi. Seorang dokter gigi biasanya akan menguras nanah dan ini sering memberikan perawatan dan pengobatan yang sesuai dengan gejala. Hal ini dilakukan baik oleh lancing abses atau dengan pengeboran lubang kecil di gigi untuk membiarkan nanah keluar. Kadang-kadang, jika infeksi tidak berisi, obat antibiotik yang diresepkan selama beberapa hari setelah menguras nanah untuk membersihkan infeksi yang tersisa. Namun, dalam banyak kasus antibiotik mungkin tidak diperlukan.</p>'),
('p5', 'Periodontitis', '<p align=''justify''>Periodontitis merupakan infeksi gusi berat yang dapat menyebabkan kerusakan pada jaringan lunak dan tulang penyangga gigi. Kondisi ini tidak boleh dianggap enteng dan harus segera diobati.<br> cara terbaik untuk mengobati penyakit periodontal - adalah pencegahan penyakit periodontal, yaitu:<br>1. kunjungan sistematis ke dokter gigi<br>2. kebersihan mulut yang tepat;<br>3. vitamin;<br>4. nutrisi yang tepat;<br>5. senam khusus untuk gigi dan gusi.</p>'),
('p6', 'Karies Gigi', '<p align=''justify''>Karies gigi adalah sebuah penyakit infeksi yang merusak struktur gigi. Penyakit ini menyebabkan gigi berlubang. Jika tidak ditangani, penyakit ini dapat menyebabkan nyeri, penanggalan gigi, infeksi, berbagai kasus berbahaya, dan bahkan kematian.<br>1. Sikat gigi dengan pasta gigi berfluoride dua kali sehari, pada pagi hari setelah sarapan dan malam hari sebelum tidur.<br>2. Lakukan flossing sekali dalam sehari untuk mengangkat plak dan sisa makanan yang tersangkut di antara celah gigi-geligi.<br>3. Hindari makanan yang terlalu manis dan lengket, juga kurangi minum minuman yang manis seperti soda.<br>4. Lakukan kunjungan rutin ke dokter gigi tiap 6 bulan sekali.<br>5. Perhatikan diet pada ibu hamil dan pastikan kelengkapan asupan nutrisi, karena pembentukan benih gigi dimulai pada awal trimester kedua.<br>6. Penggunaan fluoride baik secara lokal maupun sistemik.</p>'),
('p7', 'Halitosis', '<p align=''justify''>Halitosis adalah bau nafas yang tidak sedap. Halitosis terutama adalah hasil dari fermentasi anaerobik partikel makanan oleh bakteri gram negatif di dalam mulut yang menghasilkan senyawa belerang atsiri seperti hidrogen sulfida dan merkaptan metil.<br>1. Minum banyak air untuk membantu menjaga mulut lembab.<br>2. Mengkonsumsi buah-buahan segar dan sayuran.<br>3. Kurangi asupan makanan fermentasi seperti keju, roti, dan meminimalkan asupan produk susu, gula, dan alkohol.<br>4. Menyikat gigi dengan benar setiap setelah makan dan floss sekali atau dua kali setiap hari.<br>5. Bersihkan lidah dengan menggosok dengan lembut dengan sikat gigi setelah Anda menyikat gigi.<br>6. Berkumurlah dengan obat kumur setelah menyikat gigi.<br>7. Kunjungi dokter gigi setidaknya dua kali setiap tahun.</p>\r\n'),
('p8', 'Sindrom Gigi Retak', '<p align=''justify''>adalah kondisi ketika menggigit menyebabkan rasa sakit gigi. Retak dapat terlihat dan retak ini dapat memperpanjang sesekali untuk pulpa gigi.<br>Cara mudah memperbaiki gigi retak di dokter gigi tergantung seberapa parah keretakan gigi yang kita alami. Jika hanya sekadar retak sedikit biasanya cara mudah memperbaiki gigi retak dilakukan dengan pemasangan cincin di sekitar gigi yang retak. Jika hal ini tidak memungkinkan maka cara mudah memperbaiki gigi retak selanjutnya dengan dilakukan penambalan gigi atau akrilik.<br>Jika keretakannya menimbulkan gangguan dengan rasa sakit terus-menerus dan gangguan saat makan, maka cara mudah memperbaiki gigi retak yang paling aman adalah dokter akan melakukan pencabutan gigi.</p>'),
('p9', 'Temporomandibular Joint', '<p align=''justify''>TMJ (temporomandibular joint) adalah sendi yang melekat pada tulang tengkorak (cranium), sendi ini mempunyai fungsi untuk mengunyah, menguap, berbicara, dll. Gangguan pada sendi rahang (TMJ) menyebabkan rasa sakit dan nyeri pada sendi ini.<br>Gangguan TMJ juga dapat menyebabkan suara klik ketika Anda membuka mulut atau mengunyah. Tapi kalau tidak ada rasa sakit atau pembatasan gerak yang berhubungan dengan rahang, Anda mungkin tidak memerlukan pengobatan untuk gangguan sendi rahang.<br>Dalam beberapa kasus, gejala gangguan TMJ dapat sembuh tanpa pengobatan. Jika gejala bertahan, dokter dapat merekomendasikan berbagai pilihan pengobatan, seperti:<br>1. Obat-obatan<br> Dalam hubungannya dengan perawatan nonsurgical lainnya, obat-obat yang dapat membantu meringankan rasa sakit yang terkait dengan gangguan sendi rahang mungkin termasuk obat penghilang rasa, antidepresan trisiklik, relaksan otot, dan obat penenang.<br>2. Terapi<br> \r\nNonpharmaceutical pengobatan untuk gangguan TMJ meliputi terapi fisik dan konseling.<br>3. Prosedur bedah atau operasi<br> Ketika metode lain tidak membantu, dokter mungkin menyarankan prosedur seperti:<br> - Arthrocentesis. Prosedur ini melibatkan penyisipan jarum ke dalam sendi sehingga cairan yang dapat diairi melalui sendi untuk menghilangkan kotoran dan produk sampingan inflamasi.<br> - Suntikan. Pada beberapa orang, suntikan kortikosteroid ke dalam sendi dapat membantu.<br> - Bedah. Pembedahan dilakukan untuk memperbaiki atau mengganti sendi.</p>'),
('p10', 'Angina Ludwig', '<p align=''justify''>Angina Ludwig adalah infeksi sub mandibular ruang (rahang bawah) dalam bentuk peradangan selulitis dari bagian superior ruang suprahyoid (sekitar leher), yang ditandai dengan pembengkakan (edema) di bagian bawah ruang submandibular, yang meliputi jaringan yang mencakup otot-otot laring dan dasar mulut, tanpa pembengkakan kelenjar getah bening.<br>Cara terbaik untuk mencegah terjadinya angina adalah merubah faktor-faktor resiko:<br>1. Berhenti merokok<br>2.  Mengurangi berat badan<br>3. Mengendalikan tekanan darah, diabetes dan kolesterol.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `level` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `nama`, `jenis_kelamin`, `alamat`, `telepon`) VALUES
('admin', '123456', 'admin', 'dokter', 'laki-laki', 'jalan jalan yuk', 123),
('user1', '123456', 'user', 'udin', 'laki-laki', 'asd', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
