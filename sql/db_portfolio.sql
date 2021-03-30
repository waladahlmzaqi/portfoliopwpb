-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2021 pada 16.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_portfolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datadiri`
--

CREATE TABLE `tb_datadiri` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `kelas` varchar(125) NOT NULL,
  `jurusan` varchar(125) NOT NULL,
  `sekolah` varchar(125) NOT NULL,
  `img` longtext NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_datadiri`
--

INSERT INTO `tb_datadiri` (`id`, `nama`, `kelas`, `jurusan`, `sekolah`, `img`, `deskripsi`) VALUES
(1, 'Waladahulama.z', 'IX', 'Rekayasa Perangkat Lunak (RPL)', 'SMKS Taruna Bhakti', 'https://i.ibb.co/sQNb30R/model.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum beatae alias perferendis iusto iste hic sit. Voluptatibus, suscipit, dolorum nostrum cumque, quis labore sapiente aliquid quod officia quaerat aut.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id`, `nama`, `email`, `pesan`) VALUES
(1, 'adi', '', ''),
(2, 'adi', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_projek`
--

CREATE TABLE `tb_projek` (
  `id` int(11) NOT NULL,
  `img` longtext NOT NULL,
  `nama` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `library` varchar(125) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_projek`
--

INSERT INTO `tb_projek` (`id`, `img`, `nama`, `link`, `library`, `deskripsi`) VALUES
(1, 'https://www.flaticon.com/svg/vstatic/svg/2868/2868182.svg?token=exp=1616849207~hmac=7a5a9fd7c17e28afdd413832ecda15e9', 'Design', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(2, 'https://www.flaticon.com/svg/vstatic/svg/407/407826.svg?token=exp=1616848407~hmac=947512aebaaa6622822779890ec86ae4', ' Warehouse', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(3, 'https://www.flaticon.com/svg/vstatic/svg/3606/3606241.svg?token=exp=1616848676~hmac=eabe446a3484d3d24971b57fbaad8d52', 'Books', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(4, 'https://www.flaticon.com/svg/vstatic/svg/2666/2666505.svg?token=exp=1616848822~hmac=c7328b63d560faa5e6a745e3c2e5ab2a', 'Chek', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(5, 'https://www.flaticon.com/svg/vstatic/svg/1582/1582013.svg?token=exp=1616848886~hmac=f15989fbd8f46dbb4f7541cffda1a4a1', 'Vote', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(6, 'https://www.flaticon.com/svg/vstatic/svg/4207/4207247.svg?token=exp=1616848984~hmac=b33d43f3dba38d24245083914b91cf57', 'Graduation', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(7, 'https://www.flaticon.com/svg/vstatic/svg/1006/1006363.svg?token=exp=1616849055~hmac=caf0bedf0520357ab1e6f08af17dcce8', 'Programmer', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.'),
(8, 'https://www.flaticon.com/svg/vstatic/svg/167/167707.svg?token=exp=1616849101~hmac=ab6515e1423bc9302e35dc6a3e6f7915', 'School', 'https://github.com/waladahlmzaqi', 'HTML - CSS - JS - PHP - MYSQL', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque dignissimos eligendi corporis vitae harum ullam eum illo inventore placeat, molestias omnis debitis accusantium autem, voluptatibus unde et suscipit perspiciatis magnam.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_user` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id`, `username`, `password`, `nama_user`) VALUES
(1, 'admin', 'admin', 'Waladahulama.z');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_datadiri`
--
ALTER TABLE `tb_datadiri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_projek`
--
ALTER TABLE `tb_projek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_datadiri`
--
ALTER TABLE `tb_datadiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_projek`
--
ALTER TABLE `tb_projek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
