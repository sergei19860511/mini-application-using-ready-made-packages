-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 21 2021 г., 22:01
-- Версия сервера: 5.6.47-log
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`post_id`, `id_user`, `title`, `content`) VALUES
(2, 3, 'sit volu', 'At atque voluptas quis iure et praesentium. Aliquam in sed soluta qui quia repellendus. Explicabo est officia voluptatum. Ad maxime magnam quidem suscipit corporis illo error.'),
(3, 3, 'rerum consectetur delectus', 'Unde qui ipsum corporis et corrupti. Dolores cupiditate reprehenderit qui.'),
(4, 36, 'dolorem voluptatum vel', 'Iure et tempora excepturi quaerat eaque. Praesentium architecto possimus corporis aut consequatur sint. Modi vero sed repellat voluptatem modi quidem.'),
(5, 36, 'rem vel accusantium', 'Id labore autem sit. Nesciunt veritatis aut laboriosam quasi perspiciatis numquam aliquid. Ullam labore dolorem ea non sapiente.'),
(6, 3, 'et aut qui', 'Et totam a sint. Ut quam et adipisci et rerum totam quis. Aut eos autem ea adipisci quam iure ut. Fuga alias quidem delectus accusamus suscipit exercitationem qui.'),
(7, 3, 'velit maxime recusandae', 'Qui qui labore officia. Iusto dicta reprehenderit quibusdam necessitatibus omnis. Nobis nam error consequatur ea dolor. Consectetur minus quae qui consequatur.'),
(8, 36, 'quis deleniti inventore', 'Beatae nihil voluptatem nam quidem. Voluptatem voluptates alias aut animi est. Ducimus veritatis est id provident eveniet. A repellendus eos facere. Consequatur vero qui nostrum numquam.'),
(11, 36, 'delectus id animi', 'Error fugit consequatur quod esse. Illum modi sit repellendus ut sint qui atque et. Illo provident asperiores quae blanditiis est minima deserunt.'),
(12, 3, 'cupiditate sint et', 'Rem qui mollitia nihil repellendus magni. Sit dolorem quis laudantium totam dolorem. Distinctio magnam et voluptatem beatae quo eligendi. Occaecati incidunt magnam voluptate amet necessitatibus.'),
(13, 5, 'voluptas facilis delectus', 'Neque nemo consequatur veniam excepturi aut. Assumenda molestiae voluptas aut cupiditate tempore dicta.'),
(14, 7, 'omnis molestiae est', 'Occaecati officia quibusdam et et iure alias. Quia sed inventore earum repudiandae. Et ut provident facilis minus expedita ex non. Quas enim similique nostrum est quis ducimus voluptas.'),
(16, 9, 'incidunt repellendus voluptas', 'Soluta iusto quae eligendi in veniam doloribus. Consequatur ipsa tempora ut sint. Enim minus est et itaque. Magnam voluptatem maiores voluptate sed ut distinctio debitis veniam.'),
(17, 3, 'qui ad beatae', 'Dolorem placeat facilis corporis quasi delectus voluptates sed. Beatae quos dignissimos magni dolores suscipit optio ut. Dicta illo cum et sint. Fugit libero modi itaque vel eos sunt.'),
(18, 5, 'aut vero magni', 'Nobis omnis exercitationem asperiores doloremque. Molestiae id dolorum corporis iste et aut ut. Rerum ut expedita similique molestias enim vel. Odio pariatur sit porro iste sint in.'),
(19, 36, 'reiciendis veniam officiis', 'Labore nihil qui iure cumque autem odit. Nam laboriosam debitis fugiat qui qui impedit minus. Corrupti id ut excepturi est ratione.'),
(20, 3, 'ea in ullam', 'Voluptatem et numquam molestiae commodi voluptatem omnis et et. Id minus vel est voluptas nihil quam. Ad sequi inventore itaque.'),
(21, 1, 'molestiae odit ipsum', 'Qui sunt assumenda est est ipsa sequi. Dicta tempore nostrum occaecati sed quia consequatur. Magni et quis ea sed. Aut similique ullam et autem eaque cumque non.'),
(22, 36, 'accusamus soluta dolore', 'In hic sed qui eveniet possimus error omnis qui. Ratione id assumenda incidunt veniam consequuntur aut. Nulla id corrupti officiis. Nihil maxime provident est sunt doloremque id harum.'),
(23, 1, 'minima dolores quia', 'Ipsam voluptatem nihil quidem laborum voluptatem. Nihil et tenetur deleniti suscipit. Omnis est facilis dignissimos dolor minus vel voluptas. Sunt illum rem commodi quo neque nihil et voluptas.'),
(24, 3, 'non suscipit occaecati', 'Quidem consequatur non quae et odit dolorem. Unde est ea commodi ipsum rerum ut. Consectetur voluptatem quo pariatur qui quia cupiditate.'),
(25, 3, 'repellendus fugit voluptate', 'Quo exercitationem illum non sapiente deleniti quidem. Et esse officia libero soluta et a. Labore nam esse id et. Tempore natus et minima asperiores dolores nihil.'),
(27, 36, 'vitae qui officiis', 'Est dolorem sunt assumenda et cupiditate libero. Ut rerum placeat tempora. Itaque quia provident corporis ipsa.'),
(28, 36, 'sunt aut unde', 'Esse assumenda et cupiditate voluptas perferendis quia. Quia ut autem aut illum cupiditate ducimus minima. Vel qui molestias nam id quis expedita accusantium. Ex dolor dolores fuga eligendi.'),
(30, 36, 'iure sapiente natus', 'Ea dolore nihil quos illum sequi. Qui nemo amet magni libero. Voluptas veritatis harum amet harum commodi autem culpa impedit.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(1, 'sergei@mail.ru', '$2y$10$vtHKITOFjeL.wKEoeT9p/eOFWkEt1jr1a.25lkFq7.6nn1hnNafse', 'sergei', 0, 1, 1, 1, 1639595079, 1640036328, 0),
(3, 'serg@mail.ru', '$2y$10$eXA9ES1rpoLfKrQ9Wz07IebTFaAyqL0vKTxcAoqOn1fAhAYpvMeGi', 'gennadii', 0, 1, 1, 0, 1639678316, 1639684287, 0),
(36, 'sergei_kupriynov@mail.ru', '$2y$10$qkPmeTxgS119nWwUbaFqreazWBHQYcWhJSOdJdRXfTTnyj.iDA0lW', 'Серёга', 0, 1, 1, 0, 1639766680, 1639772697, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(1, 1, 'sergei@mail.ru', 'lONG7o7kCOEyfAWN', '$2y$10$bS/usUeOurjNvVxDdnIMOuXDX28pfjHlQJsYl5YxRBi5JWIW5CnlC', 1639681479),
(2, 2, 'serg@mail.ru', 'uK4ONGBOt0YFwtbG', '$2y$10$DVf4PGtXCKRO./XYgoDniOtbajthaqOxIUt9iX.9u8Rt.hwbeLRJi', 1639764251),
(3, 3, 'serg@mail.ru', 'S7MtUAG6qa8b3cXx', '$2y$10$umZbYeuXgvsstMu6d21xr.ZkQfjYHVKtvu9XtqatRwDLkhUPOeoNe', 1639764716),
(4, 4, 'sergei_kupriynov@mail.ru', 'P99ZPpPb52Trs_tB', '$2y$10$z0951DT2Q4yRVTWx.irKKuxwXc5sJXGHuCeijfDaV3io5NZI521R6', 1639838616),
(5, 5, 'sergei_kupriynov@mail.ru', '0f5nQXyTp-UHUBJG', '$2y$10$gLCvvfS.mvDfpsod8Y19t.K49EuF/i.XgXQqhazlrvhYaNjuut/KW', 1639838858),
(6, 6, 'sergei_kupriynov@mail.ru', '0ECM5mdCZ0ak9psI', '$2y$10$4Bdml5wobrAHyd7W.hXBP.WjtsnZ2HGyGb5kIB.t2vShEnA7reiZy', 1639839079),
(7, 7, 'sergei_kupriynov@mail.ru', 'Acvl25F2yFnKCLVa', '$2y$10$LsYPN3onBZnSQiZQoxiGZ.6u2POw/U2YO6YtXC7UlRYSKWHKW9l7W', 1639839392),
(8, 8, 'kupriyanov@awagas.group', 'PZimEFOduZkLaLGo', '$2y$10$d6U9GzDpwRjurgqjBxeFg.KELpGeOG5Qsp2HXj4p5R0y62rvqQzui', 1639839550),
(9, 9, 'kupriyanov@awagas.group', 'Usb8W36sWXJwzrms', '$2y$10$4XD/YmYDKFuZ1uv79K7BQeXGM3nPiNniCQkHhjrPf4KOyfQCmYUAe', 1639839702),
(10, 10, 'sergei_kupriynov@mail.ru', 'sV_mYxhx9a6uZ8DK', '$2y$10$v6/SxjbXQ1hM0jyntp7d9e8sQ47nfK13byPb9Gu3VixsrUhxX5Sm.', 1639839877),
(11, 11, 'kupriyanov@awagas.group', 'r3Ram84tb0yCzQai', '$2y$10$5ls6Dr/nUuMy7iDryhzgh.px472vPLhy.siyfRHcwI6g3MoDjMY5C', 1639840214),
(12, 12, 'kupriyanov@awagas.group', '4zu_Q4bpJ1cO-YqR', '$2y$10$tkNptPLKOnHxEIx/hbayduHN.zcBot9Qdg1pBhx6GmHApqY6mhY12', 1639840672),
(13, 13, 'kupriyanov@awagas.group', 'LXKhGzJIhx4wq5w-', '$2y$10$YKEE1OXGS688/k65zmAjj.vEBT5rmsYxaNrbRFvVg56x3nGCJ4gwK', 1639845878),
(14, 14, 'kupriyanov@awagas.group', 'sWfbWUHiPUOp3z_w', '$2y$10$KvfqrhOexCHgq.0wb4Vv/uwCxihRYE9pxeckQbpghfK6/oNAc1oIC', 1639845932),
(15, 15, 'sergei_kupriynov@mail.ru', 'EJnGFU8J9n67zK7R', '$2y$10$0/T5mdS8H98gMnqlT4b3KuEvte/uGtGD3uEImNTOm8fGGShKr0YJK', 1639847282),
(16, 16, 'sergei_kupriynov@mail.ru', '7LCv4GS60czZVJmS', '$2y$10$mZlugI/m.W9wGPFbDU091enOfgM1/bIok5yzwvOfqSs4pCvNwiwRO', 1639847672),
(17, 17, 'sergei_kupriynov@mail.ru', 'Ty0u7MFPBDqw5hQp', '$2y$10$e6mOmqHeVJyXTHrTX4h0nuRuKnDQCbK1Vp0GvHU0h.8SYImyslU12', 1639847770),
(18, 18, 'sergei_kupriynov@mail.ru', 'Yn6jjs6GcrcComYN', '$2y$10$fBOO7V4b0LP.Qv/i41w4renfCY7N/JgA0ndjqu3HrnYiQJ7DRWzwe', 1639848950),
(19, 19, 'sergei_kupriynov@mail.ru', 'rt9tiLJhSI9Vaz1u', '$2y$10$3KpeHbq0cl6MY9dXAoP7yuaIYkhdAKm.2n3lDi3/DX/AWtQsr1Naq', 1639849814),
(20, 20, 'sergei_kupriynov@mail.ru', 'R3uXrQnMyGoFPvjS', '$2y$10$dftyB9Uhg9ma5ZOkar.ZjucFtjLcqYLkfsyzbuEgXbxWEDlGf159u', 1639850004),
(21, 21, 'sergei_kupriynov@mail.ru', '_mRy6pvb2aKFydcL', '$2y$10$3iL0UlOjHBm9UN4.K5vfB.TIIB9Fehi1at5dFsbBJOcCkU79uswyG', 1639850119),
(22, 22, 'kupriyanov@awagas.group', 'LR_ZrHpVMdBGarZG', '$2y$10$oknprg8SuP8AmOd6TPx4Je8RSpAKaprAoijEizhEzRCActE9Sh7xy', 1639850238),
(23, 23, 'sergei_kupriynov@mail.ru', 't01St0IN9JtVfFEB', '$2y$10$YN9opSRhfrgMBH4kuNVE.OUH7n38rXH3U7HLQX8wPF4HLPmpPfN3i', 1639850338),
(24, 24, 'kupriyanov@awagas.group', 'xZ_hgg6OxfZP7Zli', '$2y$10$siyy7Zq02y8euSlMruTBF.ZYEYQfhqRaXfLWXo0nA7AkjXw5lZf/O', 1639850373),
(25, 25, 'sergei_kupriynov@mail.ru', 'ZTI8j_OcB6BzGzyW', '$2y$10$m/IUfCSUqo1bDri5u5GJD.5v0PZqAFm/dUDaYhACAEI/5IV2ACaq2', 1639850775),
(26, 26, 'sergei_kupriynov@mail.ru', '8d8d2KX6RaKGHgKJ', '$2y$10$fWlIh3/sTeockg7LQkuNB.5y7COMzoWjNfdsh6vSfNw19F8HmxqE.', 1639850899),
(27, 27, 'sergei_kupriynov@mail.ru', 'uxpqtM5HOD6f69rS', '$2y$10$bPGW/0JRN/0fdGSGOiboUeR2KqoqzpLtCYyeOeQcXyqtDBf9YO.ja', 1639851064),
(28, 28, 'sergei_kupriynov@mail.ru', 'erRB4Pjf66o6IKC9', '$2y$10$DqNXOTfOlLkkVxlSj.9X/ex/AxDwDBUkB8okoqF6GBFqp4j.P.RjO', 1639851287),
(29, 29, 'sergei_kupriynov@mail.ru', '-m4bla2nI2nRbYBq', '$2y$10$q34CZFAOM8YDh4c1we81a.xQuMDbaAmBie69.uAqdNf0c8CculmNq', 1639851378),
(30, 30, 'sergei_kupriynov@mail.ru', 'xE0rJ00fIFWVMZMs', '$2y$10$oAkze9aaI6oBhu98ntwsPupDa.Udm5Oj1t6vvDQ6ulu9ajUV6UQ82', 1639851818),
(31, 31, 'sergei_kupriynov@mail.ru', 'Yax0ygq5YcbwOwmU', '$2y$10$quVGzX9xCQ8FxM86nLNtCOLCfNzq01M4OWv0KTVuwrmKG01GQW7n6', 1639851903),
(32, 32, 'sergei_kupriynov@mail.ru', 'onxD7CHnofruLcJY', '$2y$10$V2f9oVSMyvm9KdNBlS6M5uCrReGRcdX6A8jUUF37RLO5MnCfRLwlm', 1639851966),
(37, 37, 'sgwsgbws@mail.ru', 'oiLWTMLFkU7CirbU', '$2y$10$BNS7ONirKL/sMWs.5zRbMek5XK6aw1Ty8E2ZiIA4zDznuzYc9pN8e', 1640122056);

-- --------------------------------------------------------

--
-- Структура таблицы `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('QduM75nGblH2CDKFyk0QeukPOwuEVDAUFE54ITnHM38', 73.1864, 1640036327, 1640576327),
('PZ3qJtO_NLbJfRIP-8b4ME4WA3xxc6n9nbCORSffyQ0', 4, 1640035658, 1640467658);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Индексы таблицы `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
