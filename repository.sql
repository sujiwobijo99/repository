-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2022 pada 09.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repository`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(9) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `kontributor` varchar(255) NOT NULL,
  `jenis` int(2) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `staf_input` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL,
  `path` varchar(255) NOT NULL,
  `abstrak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `judul`, `penulis`, `kontributor`, `jenis`, `penerbit`, `subjek`, `keyword`, `staf_input`, `tgl_input`, `path`, `abstrak`) VALUES
(2, 'asasasas', 'hjvhv', 'v', 1, '', 'hgv', 'jghvjhgv', 'jgc', '2022-09-23', 'Edisi 328_211022_Muhammad Hanafi.pdf', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'test', 'test', 'test', 2, '', 'test', 'test', 'test', '2022-08-23', 'Edisi 328_211022_Muhammad Hanafi-1_page-0001 (7 files merged).pptx', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.  The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.'),
(4, 'Sulistio', 'asassss', 'sas', 3, '', 'sasa', 'lij', 'lhu', '2022-02-23', '0109-04-005.pdf', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'),
(7, 'Implementasi YOLO (You Only Look Once)  Algorithm untuk Pendeteksian Jarak Kendaraan Sebagai Speed limiter Sepeda  Listrik Sulistio', 'Resi Sujiwo Bijokangko, S.T', 'Dian Budhi Santoso, S.T., M.Eng. & Ibrahim, S.T., M.T.', 2, '', 'Computer Vision', 'resiko kecelakaan, speed limiter, deteksi objek, prediksi jarak', 'System Admin', '2022-10-23', 'Skripsi Bijo.pdf', 'Sebagai upaya dalam mengurangi resiko kecelakaan yang dapat dialami pengendara maka keselamatan berkendara merupakan hal esensial yang memerlukan perhatian oleh setiap pengendara. Pada penelitian ini penulis melakukan perancangan dan implementasi sistem speed limiter sebagai fungsi pembatas kecepatan sepeda listrik SULISTIO dengan prediksi jarak terhadap objek mobil, sepeda motor, serta pejalan kaki di area depan sepeda untuk mengurangi resiko kecelakaan oleh pengemudi. Citra hasil tangkapan modul kamera kemudian diolah pada Raspberry Pi dengan program speed limiter untuk mendeteksi objek di depan sepeda listrik dan memprediksi jaraknya terhadap sepeda. Ketika objek yang dideteksi memiliki jarak kurang dari 3 meter maka sistem akan mengaktifkan Relay yang terhubung pada pin GPIO 4 Raspberry Pi untuk memutus jakur tegangan pada throtle. Berdasarkan hasil pengujian sistem, sistem ini dapat mendeteksi objek dengan kelas manusia, motor, dan mobil dengan baik dengan tingkat F1-Score sebesar 0,914926, IoU sebesar 66,14%, dan nilai mAP pada treshold 0,5 sebesar 97,58%. Hasil model prediksi jarak pada sistem speed limitersangatlah baik dengan nilai akurasi 97,31% pada kelas Manusia, 94,92% pada kelas Motor, serta 97,97% pada kelas Mobil dengan akurasi keseluruhan kelas sebesar 97%.'),
(8, 'ewwo', 'ewwo', 'ewwo', 2, 'ewwo', 'ewwo', 'ewwo', 'ewwo', '2022-10-23', 'Skripsi Bijo print.pdf', '      ewwo                  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gender`, `address`, `path`) VALUES
(1, 'System Admin', 'admin@unsika.ac.id', '12345', 1, 'Telukjambe, Karawang Timur, Karawang', 'profil1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
