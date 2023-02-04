CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
  `prodi` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`id`, `name`, `email`, `phone`,`prodi`) VALUES
(24, 'Ichan', 'ichan222@gmail.com', '082239874820', 'teknik informatika'),
(25, 'Gilang  ', 'gilang13@gmail.com', '08521315775','teknik informatika'),
(28, 'Kaling', 'kalinggo@gmail.com', '08921315456','teknik komputer'),
(29, 'Dirga', 'dirgacu@gmail.com', '085242314645','dkv'),
(27, 'Sukma', 'sukma3@gmail.com', '089513345891','manajemen');

ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;



  CREATE TABLE `api_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `hit_count` int(11) NOT NULL,
  `hit_limit` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `api_tokens` (`id`, `token`, `hit_count`, `hit_limit`, `status`) VALUES
(1, 'ABDSC144DSD', 6, 5, 1);

ALTER TABLE `api_tokens`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `api_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;







CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES
(23, 'ali', 'ali@mail.com', 'ali');


ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);