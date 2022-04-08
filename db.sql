CREATE DATABASE `glo-academy`;
USE `glo-academy`;

--
-- Структура таблицы `good`
--

CREATE TABLE `good` (
  `id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `composition` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Дамп данных таблицы `good`
--

INSERT INTO `good` (`id`, `category`, `name`, `composition`, `price`, `descr`, `img`, `link_name`) VALUES
(1, 'sets', 'Сет Запеченный', 'запеченные роллы', 800, 'lorem', 'baked.jpg', 'baked_set'),
(2, 'sets', 'Сет Филамикс', 'три разных ролла Филадельфия', 950, 'lorem', 'philaset.jpg', 'phila_set'),
(3, 'rolls', 'Ролл Филадельфия', 'лосось, сливочный сыр', 300, 'lorem', 'phila.jpg', 'phila'),
(4, 'rolls', 'Ролл Калифорния', 'краб, огурец, масаго', 200, 'lorem', 'california.jpg', 'california'),
(5, 'sushi', 'Суши Лосось', 'лосось, рис', 100, 'lorem', 'salmon.jpg', 'salmon'),
(6, 'sushi', 'Суши Угорь', 'угорь, рис', 110, 'lorem', 'eel.jpg', 'eel');


--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(45) NOT NULL,
  `browser_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `cat_name`, `browser_name`) VALUES
(1, 'sets', 'Сеты'),
(2, 'sushi', 'Суши'),
(3, 'rolls', 'Роллы');
