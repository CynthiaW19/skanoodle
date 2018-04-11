CREATE TABLE `contact` (
  `id` int(32) NOT NULL,
  `ip` varchar(32) CHARACTER SET latin1 NOT NULL,
  `time` time(6) NOT NULL,
  `date` varchar(32) CHARACTER SET latin1 NOT NULL,
  `name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `comment` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
