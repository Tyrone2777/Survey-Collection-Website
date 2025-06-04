-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

;

;

;

;

CREATE TABLE `favourite_food` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `food_name` ENUM('Pizza', 'Pasta', 'Pap and wors', 'Other') NOT NULL,
  `description` VARCHAR(255) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE `personal_details` (
  `personal_id` INT AUTO_INCREMENT PRIMARY KEY,
  `full_Name` varchar(100) NOT NULL,
  `e_Mail` varchar(50) NOT NULL,
  `date_of_Birth` date NOT NULL,
  `cont_Num` int(11) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

CREATE TABLE `survey_ratings` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `personal_id` INT NOT NULL,
  `watch_movies` TINYINT NOT NULL,
  `listen_radio` TINYINT NOT NULL,
  `eat_out` TINYINT NOT NULL,
  `watch_tv` TINYINT NOT NULL,
  FOREIGN KEY (`personal_id`) REFERENCES personal_details(`personal_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
COMMIT;

;

;

;
