-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2022 a las 22:30:05
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `clientes` (
  `idCliente` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `contraseña` varchar(12) NOT NULL,
  `correo` varchar(50) NOT NULL
);

INSERT INTO `clientes` (`idCliente`, `nombre`, `apellido`, `contraseña`, `correo`) 
VALUES (170511 ,"Juanky", "Herrera", "rafa123", "juanky@gmail.com");

INSERT INTO `clientes` (`idCliente`, `nombre`, `apellido`, `contraseña`, `correo`) 
VALUES (170512 ,"dramrub", "Damaris", "jinx123", "dramrub@gmail.com");

INSERT INTO `clientes` (`idCliente`, `nombre`, `apellido`, `contraseña`, `correo`) 
VALUES (160063 ,"Daniel", "Santana", "hola1234", "danisanmez@gmail.com");


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
