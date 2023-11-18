-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2023 pada 04.49
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sepatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `jenis_sepatu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `jenis_sepatu`) VALUES
(1, 'Sport'),
(2, 'Formal'),
(3, 'Casual'),
(4, 'Sneakers');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Pria'),
(2, 'Wanita'),
(3, 'Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id`, `nama_merk`) VALUES
(1, 'Fila'),
(2, 'Converse'),
(3, 'Adidas'),
(4, 'Nike'),
(5, 'New Balance'),
(6, 'Puma'),
(7, 'PVN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `id_ukuran` int(11) DEFAULT NULL,
  `nama_sepatu` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `id_merk`, `id_jenis`, `id_kategori`, `id_supplier`, `id_ukuran`, `nama_sepatu`, `harga`, `stok`, `deskripsi`, `gambar`) VALUES
(1, 3, 4, 1, 4, 1, 'ADIDAS ORIGINALS adidas CT86 Shoes Pria Putih GW5721 ', 1500000, 25, 'Lakukan perjalanan dengan mesin wayback ke Jerman Barat tahun 1987. Di sinilah lahirnya sepatu adidas yang awalnya dibuat untuk pemain squash. Desain revolusioner saat itu melindungi pemain dari cedera dan menambah stabilitas. Tapi Anda pasti menginginkannya karena tampilan OG-nya. Sepatu trainer Anda akan terlihat menawan berkat 3-Stripes dua warna dan warna jenuh. Bahan atasnya terinspirasi dari jaket klasik Italia.\r\n\r\nDibuat sebagian dengan konten daur ulang yang dihasilkan dari limbah produksi, misalnya, sisa pemotongan dan limbah rumah tangga pasca-konsumen, untuk menghindari dampak lingkungan yang lebih besar dari produksi konten murni', 'ADIDAS ORIGINALS adidas CT86 Shoes Pria Putih GW5721.jpg'),
(2, 2, 4, 1, 2, 2, 'Converse Run Star Hike Unisex Sneakers - BLACK/WHITE/GUM', 1199000, 20, 'Desain santai dari sepatu Chuck Taylor All Star High Top yang ikonik mendapat sentuhan yang terinspirasi dari hiking di Run Star Hike. Kanvas bertali yang ikonik dipadukan dengan patch pergelangan kaki bintang klasik, sementara garis foxing menarik perhatian ke sol platform yang diikat keluar.Tinggi Sepatu : Tinggi', '2.jpeg'),
(3, 4, 4, 1, 1, 3, 'Nike Air Jordan 1 Mid Light Smoke Grey', 3500000, 10, 'Air Jordan 1 Mid Light Smoke Grey mewakili landasan netral antara model berpotongan tinggi dan rendah.\r\nSepatu ini memiliki kotak kaki berlubang, bagian atas halus terbuat dari kulit dengan sisipan putih berturut-turut di bagian bawah, dan pergelangan kaki dengan sisipan abu-abu di bagian sepatu lainnya. Tali hitam yang serasi dengan Swoosh melengkapi tampilannya, sedangkan fitur branding biasa dan sol abu-abu dengan dua warna putih melengkapi desainnya. Sepatu tersebut juga memiliki lambang sayap merek dagang Air Jordan.', 'Air Jordan 1 Mid Light Smoke Grey.jpg'),
(4, 3, 4, 1, 3, 4, 'Adidas ORIGINALS Superstar Shoes ', 1300000, 15, 'Adidas Superstar adalah sepatu basket yang diproduksi oleh Adidas sejak 1969. Waktu sepatu ini pertama kali diperkenalkan ke publik, ini adalah sepatu low top basket dengan bahan penuh dengan kulit di bagian atas, dan bahan karet di bagian ujung sepatu yang terkenal.', 'Adidas ORIGINALS Superstar Shoes.jpg'),
(5, 8, 3, 2, 4, 5, 'PVN Yeri Sepatu Sneakers Wanita Casual Sport Shoes 320', 170000, 5, 'Saat kamu tidak yakin ingin pakai sepatu apa yang cocok, coba pilih sepatu casual dengan warna-warna netral dari brand yang memiliki lebih dari 1juta pengikut di TikTok Ini. Mulai dari varian warna putih, hitam, krem, hingga abu-abu dapat kamu temukan dengan mudah di PVN shoes. Untuk model sneakers sendiri, tersedia berbagai varian produk yang dapat menyesuaikan dengan segala acaramu, seperti platform sneakers untuk menemani jalan-jalanmu bersama teman atau old skool sneakers untuk kegiatan sehari-harimu.', 'PVN Yeri Sepatu Sneakers Wanita Casual Sport Shoes 320.jpg'),
(6, 4, 4, 3, 2, 4, 'SEPATU KIDS TODDLER BABY ANAK NIKE CORTEZ ', 420000, 30, 'Brand New With Replace Box\r\nOriginal Guarantee 100% \r\n\r\nNIKE CORTEZ BASIC SL PSV WHITE BLACK\r\nAvailable Size\r\n(Tertera di variant product)\r\n\r\nFREE KAOS KAKI\r\nFREE STICKER (selagi masih tersedia)', 'SEPATU SNEAKERS KIDS TODDLER BABY ANAK NIKE CORTEZ BASIC SL PSV WHITE BLACK.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(200) NOT NULL,
  `telpon` varchar(12) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `telpon`, `alamat`) VALUES
(1, 'Roni', '082112482', 'Jakarta'),
(2, 'Salsa', '081241232', 'Jakarta'),
(3, 'Rudi', '084121242', 'Depok'),
(4, 'Mala', '085124782', 'Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran`
--

CREATE TABLE `ukuran` (
  `id` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukuran`
--

INSERT INTO `ukuran` (`id`, `ukuran`) VALUES
(1, 36),
(2, 37),
(3, 38),
(4, 39),
(5, 40),
(6, 41),
(7, 42);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_ukuran` (`id_ukuran`),
  ADD KEY `id_merk` (`id_merk`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD CONSTRAINT `sepatu_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sepatu_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sepatu_ibfk_3` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sepatu_ibfk_4` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sepatu_ibfk_5` FOREIGN KEY (`id_ukuran`) REFERENCES `ukuran` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
