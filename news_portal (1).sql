-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 05 2023 г., 19:19
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `news_portal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `r_id` int(11) NOT NULL,
  `r_title` varchar(255) NOT NULL,
  `r_category` varchar(255) NOT NULL,
  `r_content` varchar(10000) NOT NULL,
  `r_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='article (raksts)';

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_category` varchar(255) NOT NULL,
  `n_content` varchar(10000) NOT NULL,
  `n_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='news';

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`n_id`, `n_title`, `n_category`, `n_content`, `n_img`) VALUES
(1, 'Belarus has introduced temporary border controls on the border with Russia. Passports are checked for travelers', 'Political', 'At the entrance to Belarus from Russia, temporary border control has been introduced, and passports are checked for those entering. This is reported by the publication \"Zerkalo\" with reference to the State Border Committee.\n\nOne of the readers told the publication that on the evening of May 4, a border checkpoint was installed near the border on the M-1 highway, which is a “pair of trailers for border guards”, four barriers and a barrage tape with spikes.\n\nThe journalist of the publication called the State Border Committee of Belarus, where they confirmed that such control would be temporarily introduced at all main entrances from Russia. According to the representative of the department, the checks will be conducted \"until further notice.\"\n\nZerkalo also reports that queues have already appeared at the border due to passport control. The MotolkoPomogi telegram channel, citing border crossing chats, writes about a long queue on the M-1 highway. According to users, “everyone is driven out of cars, searched, documents are written down.”\n\nThe Telegram channel “Rumors of Vitebsk” writes about the appearance of a checkpoint on the highway between Liozno and Rudnya, a line has lined up for it for several kilometers. Russians are especially carefully checked, the report says.\n\nWhat is the reason for the strengthening of passport control at the border is unknown.\n\nThere is no full passport control on the border between Russia and Belarus. Border guards can selectively stop cars and ask for the necessary documents.At the entrance to Belarus from Russia, temporary border control has been introduced, and passports are checked for those entering. This is reported by the publication \"Zerkalo\" with reference to the State Border Committee.\n\nOne of the readers told the publication that on the evening of May 4, a border checkpoint was installed near the border on the M-1 highway, which is a “pair of trailers for border guards”, four barriers and a barrage tape with spikes.\n\nThe journalist of the publication called the State Border Committee of Belarus, where they confirmed that such control would be temporarily introduced at all main entrances from Russia. According to the representative of the department, the checks will be conducted \"until further notice.\"\n\nZerkalo also reports that queues have already appeared at the border due to passport control. The MotolkoPomogi telegram channel, citing border crossing chats, writes about a long queue on the M-1 highway. According to users, “everyone is driven out of cars, searched, documents are written down.”\n\nThe Telegram channel “Rumors of Vitebsk” writes about the appearance of a checkpoint on the highway between Liozno and Rudnya, a line has lined up for it for several kilometers. Russians are especially carefully checked, the report says.\n\nWhat is the reason for the strengthening of passport control at the border is unknown.\n\nThere is no full passport control on the border between Russia and Belarus. Border guards can selectively stop cars and ask for the necessary documents.', 'pictures/gallery.png'),
(2, 'De Facto: Latvian manufacturer on US watch list may be linked to Russia', 'Local', 'The Latvian manufacturer of high-quality navigation equipment Fiber Optical Solution, included in the so-called US export control list last December, has historical ties to two Russian companies. The United States said that the Latvian manufacturer helped the Russian military industry. The Ministry of Foreign Affairs of Latvia has no information that would confirm this. The company itself contested the inclusion in the list, according to the portal rus.lsm.lv with reference to the De facto program of Latvian television.', 'pictures/news1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`users_id`, `username`, `email`, `password`, `active`) VALUES
(10, 'platon', 'sadasdasd@gmail.com', 'asdasda', 1),
(14, '6756756', 'asd45623asd@gmail.com', '4567645', 0),
(17, 'savva', 'savva@savva.lv', 'asdasda', 0),
(18, 'Saveliy', 'saveliy.martynov@gmail.com', 'asdasda', 0),
(22, 'asdasd', 'xzxasd@saddsa.lv', 'dsads', 0),
(23, 'dsadsadsa', 'dsasdadsa', 'dsadsadsa', 0),
(24, 'dsaadsda', 'test', 'test', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`r_id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Индексы таблицы `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
