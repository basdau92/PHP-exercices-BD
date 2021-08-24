CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `format` varchar(5) NOT NULL,
  `description` text NOT NULL,
  `publicationDate` date NOT NULL,
  PRIMARY KEY (`id`)
)
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `duration` time NOT NULL,
  `description` text NOT NULL,
  `publicationDate` date NOT NULL,
  PRIMARY KEY (`id`)
)