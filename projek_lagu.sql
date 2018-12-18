-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2018 pada 13.47
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_lagu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lagu`
--

CREATE TABLE `lagu` (
  `id` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artis` varchar(255) NOT NULL,
  `type` varchar(15) NOT NULL,
  `album` varchar(50) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `favorit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lagu`
--

INSERT INTO `lagu` (`id`, `jenis`, `judul`, `artis`, `type`, `album`, `link`, `favorit`) VALUES
(1, 'Idolm@ster', 'Bright Blue', 'Fumika Sagisawa', 'Cool', 'Idolm@ster Cinderella Masters', 'https://hearthis.at/embed/2633436/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(2, 'Idolm@ster', 'adadadadadadad', 'Akagi Miria', 'Passion', 'Idolm@ster Cinderella Masters', 'https://hearthis.at/embed/2633430/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(6, 'Idolm@ster', 'Decoboco Speed Star', 'Nana Abe, Shin Sato', 'Cute', 'Idolm@ster Cinderella Masters ', 'https://hearthis.at/embed/2635980/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(7, 'Idolm@ster', 'Kawaii Make My Day!', 'Mellow Yellow!', 'cute', 'Idolm@ster Cinderella Masters 21', 'https://hearthis.at/embed/2635976/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(8, 'Idolm@ster', 'Kureiji - Kureiji', 'Shiki Ichinose, Ferederica Miyamoto', 'cute', 'Idolm@ster Cinderella Masters', 'https://hearthis.at/embed/2635983/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(9, 'Idolm@ster', 'Souyoku no Aria', 'Kanzaki Ranko, Ninomiya Asuka', 'cool', 'Idolm@ster Cinderella Masters 22', 'https://hearthis.at/embed/2635987/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(10, 'Idolm@ster', 'Trinity Field', 'Triad Primus', 'cool', 'Idolm@ster Cinderella Masters', 'https://hearthis.at/embed/2636036/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(11, 'Idolm@ster', 'Little Riddle', 'LittlePOPS', 'Hybrid', 'Idolm@ster Cinderella Masters 20', 'https://hearthis.at/embed/2636039/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(12, 'Idolm@ster', 'Private Sign', 'Shiyomi Shuko', 'Hybrid', 'Idolm@ster Cinderella Masters 20', 'https://hearthis.at/embed/2636045/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(13, 'Idolm@ster', 'Dare Yori Suki Nano ni', 'Sakuma Mayu', 'cute', 'Idolm@ster Ciderella Cute jewelries! 0', 'https://hearthis.at/embed/2636059/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(17, 'Love Live', 'Snow Halation', ' Î¼ s', 'cool', 'Snow Halation', 'https://hearthis.at/embed/2632431/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0),
(18, 'Love Live', 'Natsuiro Egao de 1,2,Jump!', 'Î¼ s', 'Smile', 'Natsuiro Egao de 1,2,Jump!', 'https://hearthis.at/embed/2632430/transparent_black/?hcolor=&color=&style=2&block_size=2&block_space=1&background=1&waveform=0&cover=0&autoplay=0&css=', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lagu`
--
ALTER TABLE `lagu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
