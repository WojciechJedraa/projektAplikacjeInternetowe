CREATE DATABASE `projekt_4i2t_a1`;

USE `projekt_4i2t_a1`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT primary key,
  `login` varchar(30) ,
  `password` varchar(72) ,
  `nick` varchar(30) 
);

