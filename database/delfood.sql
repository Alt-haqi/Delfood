-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 11.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delfood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_menu`
--

CREATE TABLE `gambar_menu` (
  `id_gambar` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambar_menu`
--

INSERT INTO `gambar_menu` (`id_gambar`, `id_menu`, `gambar`) VALUES
(2, 2, '22092021172127mie-ayam.jpg'),
(3, 2, '22092021174747miee2.jpg'),
(5, 2, '22092021175050mi2asd.jpg'),
(6, 1, '22092021180735Bakso_mi_bihun.jpg'),
(7, 1, '220920211807421140357898.jpg'),
(8, 8, '0610202109160311Jugosylicuadosquetequitanlaansiedadyteayudanabajardepeso.jpg'),
(9, 8, '06102021091612Esjerukphotography.jpg'),
(10, 7, '06102021091833Sips-KatieChrist.jpg'),
(12, 7, '06102021091907EsTehSerai-LemongrassIceTea.jpg'),
(14, 16, '06102021092328orange-coconutmilkshake.jpg'),
(16, 16, '06102021092756024b5b71-b655-4e9b-9f7e-fc37ed0eb720.jpg'),
(17, 16, '06102021092845TheBestStrawberryMilkshake-BakingMischief.jpg'),
(19, 12, '06102021093111NasiGoreng(IndonesianFriedRice).jpg'),
(20, 12, '06102021093206BrownRiceNasiGoreng(IndonesianFriedRice)IGeorgieEats.jpg'),
(21, 13, '061020210934115d4481d7-66a4-4e4a-82f6-de49b246e92d.jpg'),
(24, 13, '06102021093658SateKambingYangEmpuk.jpg'),
(25, 15, '06102021093836SopBuntut_IndonesianOxtailSoup.jpg'),
(26, 11, '06102021093956ResepSotoLamonganAsliJawaTimurDenganSuwiranAyamDanKuahKuning.jpg'),
(27, 17, '30062023173209set-sj-dDStbFpL-G4-unsplash.jpg'),
(28, 17, '30062023173217diego-ramirez-OC3lZI9P6kU-unsplash.jpg'),
(29, 17, '30062023173226pratik-gupta-gyt0s3wR1YM-unsplash.jpg'),
(31, 18, '05072023093507diego-ramirez-OC3lZI9P6kU-unsplash.jpg'),
(32, 20, '05072023100147Soto_Betawi.jpg'),
(33, 20, '05072023100201SotoBetawi.jpg'),
(34, 20, '05072023100210Resep-Soto-Betawi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Breakfast', '2016-09-06 05:49:04'),
(6, 'Lunch', '2023-07-03 15:12:19'),
(7, 'Beverage', '2023-07-03 15:12:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lupa_password`
--

CREATE TABLE `lupa_password` (
  `id_lupa_password` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `pertanyaankeamanan1` varchar(255) NOT NULL,
  `pertanyaankeamanan2` varchar(255) NOT NULL,
  `jawabankeamanan1` varchar(255) NOT NULL,
  `jawabankeamanan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `lupa_password`
--

INSERT INTO `lupa_password` (`id_lupa_password`, `id_pegawai`, `pertanyaankeamanan1`, `pertanyaankeamanan2`, `jawabankeamanan1`, `jawabankeamanan2`) VALUES
(1, 1, 'Berapa angka favorit anda?(Contoh: 99)', 'Siapakah nama hewan peliharaan anda?', '7', 'alfan'),
(2, 3, 'Apa hewan kesayangan anda?', 'Apa cita-cita anda semasa kecil?', 'Harimau Sumatra', 'Progamer'),
(3, 6, 'Siapa nama belakang ibu anda?', 'Apa hobi anda?', 'suri', 'main');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `detail_menu` text NOT NULL,
  `kategori` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `detail_menu`, `kategori`) VALUES
(1, 'Bakso', '<p>Bahan</p> \r\n\r\n<li>250 gram daging sapi paha dalam tanpa lemak</li>\r\n<li>100 gram es batu </li>\r\n<li>1 sdm garam kasar </li>\r\n<li>40 gram tepung sagu </li>\r\n<li>1 liter air mendidih, untuk merebus </li>\r\n<br>\r\n<p>Cara membuat bakso sapi blender</p>\r\n\r\n<li>Blender daging sapi dan es batu hingga halus, beri sedikit garam. Masukkan tepung sagu dan aduk rata. </li>\r\n<li>Siapkan sekitar satu liter air mendidih dalam panci.</li>\r\n<li>Di lain wadah, cuci bersih tangan dan ambil sekitar satu genggam adonan daging, remas hingga terbentuk bulatan. Ambil dengan sendok dan celupkan ke dalam air mendidih. </li>\r\n<li>Ada cara lain mencetak adonan daging sapi yaitu dengan menggunakan dua buah sendok dan bentuk bulatan, masukkan ke dalam air mendidih. Biarkan hingga mengapung dan berubah warna. Angkat. </li>\r\n<li>Sajikan bakso sapi dengan kuah bakso yang lezat atau jadikan sebagai isian sop. </li>', 'Lunch'),
(2, 'Mie Ayam', '<p>Bahan:</p> \r\n\r\n<li>300 gram mi telur, rebus sampai empuk </li>\r\n<li>6 sdm minyak ayam bawang </li>\r\n<li>3 sdt kecap asin </li>\r\n<li>2 ikat sawi hijau, celup sebentar ke air mendidih, angkat, sisihkan</li>\r\n<br><p>Bahan topping mi ayam (tumisan ayam ceker):</p >\r\n<li>250 gram daging ayam, potong dadu </li>\r\n<li>6 buah ceker yang sudah direbus </li>\r\n<li>1 batang daun bawang besar, potong-potong </li>\r\n<li>2 lembar duan salam </li>\r\n<li>1 batang serai, geprek </li>\r\n<li>6 sdm kecap manis Garam, merica, dan kaldu bubuk sesuai selera </li>\r\n<li>250 ml air</li>\r\n<br><p>Bumbu halus: </p>\r\n<li>7 siung bawang merah </li>\r\n<li>4 siung bawang putih </li>\r\n<li>2 cm jahe </li>\r\n<li>2 cm kunyit ½ sdt ketumbar bubuk </li>\r\n<br><p>Bahan minyak ayam bawang: </p>\r\n<li>150 gram kulit ayam </li>\r\n<li>100 ml minyak </li>\r\n<li>6 siung bawang putih, cincang </li>\r\n<br><p>Bahan pelengkap: </p>\r\n<li>Sup pangsit </li>\r\n<li>Pangsit goreng </li>\r\n<li>Saus tomat </li>\r\n<li>Sambal rawit</li>\r\n<br><p>Cara membuat topping mi ayam </p>\r\n<p>1. Siapkan wajan bersih, tuang minyak, dan panaskan. Tumis bumbu halus, daun salam, serai, dan daun bawang sampai wangi. </p>\r\n<p>2. Masukkan ayam dan air. Rebus hingga air mendidih. </p>\r\n<p>3. Tambahkan kecap, garam, merica, dan kaldu bubuk. Masak sampai bumbu meresap dan kuah mengental. Angkat, siap untuk digunakan.</p>\r\n<br><p>Cara membuat minyak ayam bawang: </p>\r\n<p>1. Panaskan minyak, goreng kulit ayam dengan api kecil sampai garing. Angkat kulit ayam.</p>\r\n<p>2. Masukkan cincangan bawang putih danmasak hingga bawang berwarna kekuningan. Matikan api, dinginkan, dan siap untuk digunakan.</p>\r\n<br><p>Cara penyajian mi ayam: </p>\r\n<p>1. Tuang dua sendok makan minyak ayam dan satu sendok teh kecap asin di mangkuk. Masukkan 1/3 bagian mi dan aduk sampai rata. </p>\r\n<p>2. Beri tumisan ayam ceker, sawi rebus, dan pangsit goreng. Sajikan bersama sup pangsit dan sambal rawit.</p>\r\n', 'Lunch'),
(7, 'Es Teh', '<p>Bahan :</p>\r\n\r\n<li>400 ml air</li>\r\n<li>50 gram teh tubruk (bukan teh celup), sebaiknya campur berbagai merek</li>\r\n<li>500 gram es batu</li>\r\n\r\n<br><p>Bahan sirup gula:</p>\r\n\r\n<li>3 daun pandan ikat simpul</li>  \r\n<li>300 gram gula pasir</li> \r\n<li>300 ml air pasta vanila (opsional)</li> \r\n\r\n<br><p>Cara membuat es teh manis ala restoran: </p> \r\n<p>1. Didihkan 400 mililiter air, lalu tuang teh. Masak lima menit dengan api kecil, matikan api kompor.  Sisihkan dan jangan saring teh, biarkan semakin larut. </p>\r\n<p>2. Lanjutkan membuat bahan sirup, didihkan 300 mililiter air. Masukkan gula pasir dan daun pandan. Masak sampai gula larut, bantu dengan cara diaduk.   </p>\r\n<p>3. Siapkan gelas, isi es batu dengan perbandingan satu banding satu dengan air teh, misal 100 gram es batu banding sertaus mililiter air teh.  Saring teh, tuangkan ke dalam gelas dan beri sirup gula sesuai selera. </p>\r\n', 'Beverage'),
(8, 'Es Jeruk', 'Nipis, Lemon, Jeruk Asli', 'Beverage'),
(11, 'Soto Lamongan ', 'Dengan Topping ayam', 'Lunch'),
(12, 'Nasi Goreng', 'Jawa, Mawut, Seafood', 'Breakfast'),
(13, 'Sate Daging', 'Ayam asli, Kambing, Sapi', 'Lunch'),
(15, 'Sop Buntut', 'Buntut Sapi', 'Breakfast'),
(16, 'Milkshake', 'Coklat, Vanila, Greentea, Strawberry', 'Beverage'),
(17, 'Spageti', '<p>Bahan</p>\r\n\r\n<li>200 gram spaghetti (bisa merk apa saja)</li>\r\n\r\n<br><p>Bumbu dan Pelengkap</p>\r\n\r\n<li>3 siung bawang putih (cincang halus)</li>\r\n<li>2 siung bawang merah (iris tipis)</li>\r\n<li>Kaldu ayam bubuk (secukupnya)</li>\r\n<li>Garam (secukupnya)</li>\r\n<li>Saus tomat (secukupnya)</li>\r\n<li>Saus sambal (secukupnya)</li>\r\n<li>Kecap manis (secukupnya)</li>\r\n<li>1 buah paprika (iris tipis sesuai selera)</li>\r\n<li>3 buah sosis (goreng, iris sesuai selera)</li>\r\n<li>Minyak goreng (secukupnya, 3 sdm)</li>\r\n<li>Daging ayam goreng (secukupnya, suwir-suwir)</li>\r\n\r\n<br><p>Cara Membuat</p>\r\n\r\n<p>1. Rebus spaghetti hingga matang lalu angkat dan tiriskan. Sisihkan sebentar.Panaskan wajan lalu tumis bawang putih dan bawang merah hingga harum. </p>\r\n<p>2. Tambahkan garam, kaldu ayam bubuk serta paprika. Masak hingga paprika matang.</p>\r\n<p>3. Selanjutnya, masukkan saus tomat, saus sambal, sedikit kecap manis, daging ayam goreng dan sosis. Aduk rata sampai semua bahan tercampur rata. </p>\r\n<p>4. Terakhir, masukkan spaghetti yang sudah direbus dan aduk rata. </p>\r\n<p>5. Kecilkan api dan masak spaghetti kira-kira selama 5 - 7 menit sampai matang dan bumbu meresap. </p>\r\n<p>6. Matikan api, angkat spaghetti dan segera sajikan selagi masih panas.</p>', 'Lunch'),
(20, 'Soto Betawi', '<p>Bahan</p> \r\n\r\n<li>2500 ml air</li>\r\n<li>500 ml santan dari 1 butir kelapa </li>\r\n<li>400 gram daging sandung lamur (brisket/daging rawonan) </li>\r\n<li>200 gram babat rebus </li>\r\n<li>200 gram paru rebus </li>\r\n<li>10 lembar daun jeruk, dibuang tulangnya </li>\r\n<li>7 sendok teh garam </li>\r\n<li>5 batang serai, ambil putihnya & memarkan </li>\r\n<li>1 sendok teh gula pasir </li>\r\n<li>50 gram emping goreng </li>\r\n<br>\r\n<p>Cara membuat soto betawi</p>\r\n\r\n<li>Siapkan panci berukuran sedang, tuang air. Rebus daging hingga empuk dan matang. Angkat daging. Ambil kaldu daging sebanyak dua liter, kemudian sisihkan.</li>\r\n<li>Potong daging sapi seukuran 2x2 sentimeter. Masukkan kembali ke dalam panci. Tambahkan babat dan paru. Masak sampai kuah mendidih.</li>\r\n<li>Sementara itu, siapkan wajan. Tumis bumbu halus, cengkih, kayu manis, lengkuas, serai, daun salam, dan daun jeruk sampai wangi. Masukkan ke dalam kaldu. Masak sampai mendidih.</li>\r\n<li>Tuang santan, aduk rata. Tambahkan garam, merica, pala bubuk, dan gula. Masak sampai mendidih. Angkat. Sajikan soto betawi bersama bahan pelengkap.</li>', 'Lunch');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `email`, `alamat`, `password`, `telepon`, `jenis_kelamin`, `jabatan`) VALUES
(1, 'Ardan Anjung Kusuma', 'ardan@gmail.com', 'Jl. Senggani, Kota Malang', 'd2219d75098abd01493908d2f7f4d13d', '081279109122', 'Pria', 'pegawai'),
(2, 'Dina Lisuardi', 'dina@gmail.com', 'Jl. Semanggi Barat, Kota Malang', '81dc9bdb52d04dc20036dbd8313ed055', '085645121991', 'Wanita', 'pegawai'),
(3, 'Bos Admin', 'admin@gmail.com', 'Jl. Anggrek 51 Malang', '21232f297a57a5a743894a0e4a801fc3', '0851248238', 'Pria', 'admin'),
(4, 'Riza Zulfahnur', 'riza@gmail.com', 'Jl. Blimbing 23 Kalitidu', '41a44352a6f3cd3b45282acbce50927c', '085209321234', 'Laki-laki', 'pegawai'),
(5, 'Yuni Kurnia Taramita', 'yunii@gmail.com', 'Jl. Pipit 15, Bojonegoro', 'b7dfe9096cebb53152aa5ce78a1a61c9', '08124325212', 'Laki-laki', 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_usaha`
--

CREATE TABLE `profil_usaha` (
  `id` int(12) NOT NULL,
  `nama_usaha` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nomor_telepon` varchar(17) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `maps_link` text NOT NULL,
  `foto_usaha_1` text NOT NULL,
  `foto_usaha_2` text NOT NULL,
  `foto_usaha_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profil_usaha`
--

INSERT INTO `profil_usaha` (`id`, `nama_usaha`, `deskripsi`, `alamat`, `nomor_telepon`, `email`, `instagram`, `facebook`, `maps_link`, `foto_usaha_1`, `foto_usaha_2`, `foto_usaha_3`) VALUES
(1, 'Trarest', 'Trarest adalah perusahaan fotografi makanan yang berdedikasi untuk mengabadikan keindahan dan kelezatan makanan melalui lensa kamera. Kami adalah tim fotografer profesional yang ahli dalam menciptakan gambar-gambar menarik dan menggugah selera yang dapat mempromosikan dan meningkatkan citra merek makanan Anda.\r\nVisi kami adalah menjadi mitra terpercaya untuk industri makanan dan minuman dalam menciptakan gambar-gambar yang memukau dan menggoda selera yang memperkuat pesan merek, menarik pelanggan, dan meningkatkan penjualan.\r\nMisi Kami Memberikan kualitas gambar yang luar biasa: Kami berkomitmen untuk menghasilkan gambar-gambar makanan yang berkualitas tinggi dengan perhatian terhadap detail, pencahayaan yang sempurna, dan komposisi yang menarik. Kami memastikan setiap gambar memperlihatkan keindahan, tekstur, dan kelezatan makanan secara autentik.\r\n', 'Jl. KH. Wahid Hasyim, Kreo Selatan, Kec. Larangan, Kota Tangerang, Banten 15155', '089699033745', 'Trarest01@gmail.com', 'Trarest', 'Trarest', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.113797634069!2d106.73811909999999!3d-6.248732499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f08fa7f84ca7%3A0x9471bf81ae98b8ef!2sJl.%20KH.%20Wahid%20Hasyim%2C%20Banten!5e0!3m2!1sid!2sid!4v1652883367577!5m2!1sid!2sid', '14112021132155restoran-locavore_20170304_130002.jpg', '14112021132155makanan-khas-indonesia-header.png', '14112021132155photo2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesial`
--

CREATE TABLE `spesial` (
  `id_spesial` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spesial`
--

INSERT INTO `spesial` (`id_spesial`, `gambar`) VALUES
(1, 'slider-img1.png'),
(2, 'slider-img2.png'),
(3, 'slider-img3.png'),
(4, 'slider-img4.png'),
(5, 'slider-img5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(4, 'Foto', '2017-01-24 01:31:13', 1, 'Admin', 11, '463cc7af7e2f6907c0aea38df42bb31c.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`) VALUES
(12, 'Follow Your Passion', '2017-01-24 01:31:42', 'galeri-1.jpg', 4),
(13, 'Follow Your Passion', '2017-01-24 01:31:55', 'galeri-2.jpg', 4),
(14, 'Follow Your Passion', '2017-01-24 01:32:24', 'galeri-3.jpg', 4),
(15, 'Follow Your Passion', '2017-01-24 01:32:34', 'galeri-4.jpg', 4),
(16, 'Pancake', '2017-01-24 01:32:44', 'galeri-5.jpg', 4),
(17, 'Follow Your Passion', '2017-01-24 01:33:08', 'galeri-6.jpg', 4),
(18, 'Roti', '2017-01-24 01:33:24', 'galeri-7.jpg', 4),
(19, 'cokalt', '2017-08-08 00:54:58', 'galeri-8.jpg', 4),
(21, 'es jeruk', '2023-06-30 10:08:02', '9f2614ea4c816e3644e7ea2078cab3aa.jpg', 4),
(22, 'kue tart', '2023-06-30 10:17:14', '9091be744499ef924941dbb8ccf1ed6a.jpg', 4),
(23, 'Soto Betawi', '2023-07-05 08:04:15', '77b14502a769dc1c7d4f79e9103b5fcf.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar_menu`
--
ALTER TABLE `gambar_menu`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `lupa_password`
--
ALTER TABLE `lupa_password`
  ADD PRIMARY KEY (`id_lupa_password`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `profil_usaha`
--
ALTER TABLE `profil_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spesial`
--
ALTER TABLE `spesial`
  ADD PRIMARY KEY (`id_spesial`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar_menu`
--
ALTER TABLE `gambar_menu`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lupa_password`
--
ALTER TABLE `lupa_password`
  MODIFY `id_lupa_password` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profil_usaha`
--
ALTER TABLE `profil_usaha`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `spesial`
--
ALTER TABLE `spesial`
  MODIFY `id_spesial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
