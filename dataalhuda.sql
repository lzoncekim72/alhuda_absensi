SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; -- Tidak ada nilai yang akan diinisialisasi dengan 0
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00"; -- pengaturan zona waktu indonesia barat

CREATE TABLE `logs` (
  `id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `UIDresult` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Nama Depan` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `Nama`, `Nama Depan`, `Kelas`) VALUES
('3933186123', 'Laila', 'Zanuba', 'Arifah');

ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UIDresult` (`UIDresult`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `logs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

