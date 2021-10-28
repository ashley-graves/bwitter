CREATE DATABASE IF NOT EXISTS `bwitter`;

USE `bwitter`;

CREATE TABLE IF NOT EXISTS `users`
(
    `fullname` TEXT NOT NULL,
    `email` TEXT NOT NULL,
    `username` TEXT NOT NULL,
    `timezone` TEXT NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `id` INT(8) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tweets`
(
    `id` INT(8) NOT NULL,
    `content` TEXT NOT NULL,
    `user` TEXT NOT NULL,
    `timestamp` INT(8) NOT NULL,
    PRIMARY KEY (`id`)
);

