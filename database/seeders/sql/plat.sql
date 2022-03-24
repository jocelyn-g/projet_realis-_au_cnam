-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 mars 2022 à 09:22
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `oburo`
--

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `nom`, `description`, `prix`, `created_at`, `updated_at`, `categorie_id`) VALUES
(1, 'Eru', 'Morbi non lectus. sodales sed, tincidunt eu, felis.', 1538.31, '2021-07-07 23:11:16', '2021-05-06 05:52:22', 1),
(2, 'Nkôno Ngond', 'Proin leo odio,  Nulla suscipit ligula in lacus.', 1283.74, '2021-09-19 12:30:08', '2021-02-12 12:42:15', 1),
(3, 'Corn Tchap', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna.', 1014.95, '2021-08-25 12:21:38', '2021-05-09 21:05:59', 1),
(4, 'Folong', 'Sed sagittis.lputate luctus.', 1930.52, '2021-10-12 15:36:45', '2021-07-20 07:32:56', 1),
(5, 'Koki', 'Maecenas leo odias pellentesque volutpat dui.', 1648.34, '2021-05-29 07:13:24', '2021-07-06 15:17:51', 1),
(6, 'Ndolé', 'Suspendisslestie lorem. Quisque ut erat.', 1538.75, '2021-08-09 11:31:19', '2021-09-08 07:00:40', 1),
(7, 'Poulet DG', 'Proin re nonummy. Integer non velit.', 1263.91, '2021-11-27 22:12:36', '2021-02-16 04:16:04', 1),
(8, 'Poisson braisé', 'Morbi non lectus. Aliquam sit amet ales sed, tincidunt eu, felis.', 1577.48, '2021-07-01 11:07:39', '2021-02-19 07:02:17', 1),
(9, 'Taro à la sauce jaune', 'Aliquam quis turpitor. Duis mattis egestas metus.', 1498.52, '2021-03-13 02:34:41', '2021-07-02 12:28:27', 1),
(10, 'Kondre', 'Maecenas tristique, est et tempuvitae ipsum. Aliquam non mauris.', 1940.01, '2021-08-03 16:03:25', '2021-12-23 21:23:38', 1),
(11, 'le Nkui', 'Aliqua accumsan tortor quis turpis.', 1594.90, '2021-11-17 04:49:20', '2021-08-24 16:49:49', 1),
(12, 'Corn Tchap', 'Suspendisse potenti. In hac habitasse platea dictumst.', 1641.40, '2021-01-27 16:23:57', '2021-02-21 08:22:41', 1),
(13, 'Mbongo tchobi', 'Nullam sit amet turpis elementum l. Cras pellentesque volutpat dui.', 1669.56, '2021-11-09 01:22:09', '2021-12-23 17:25:44', 1),

(14, 'Jus de corossol', 'Pellentesque at nulneque. Aenean auctor gravida sem.', 1613.68, '2021-02-09 13:13:20', '2021-11-28 07:52:37', 2),
(15, 'Jus de goyave', 'Nam ultrices, libero non c, lobortis vel, dapibus at, diam.', 1529.43, '2021-08-09 06:44:26', '2021-06-11 18:23:36', 2),
(16, 'Jus de cassimango', 'Nulla ut erat id mauriget eros elementum pellentesque.', 1649.15, '2021-06-25 19:48:17', '2021-06-20 22:26:02', 2),
(17, 'Jus de gingembre', 'In hac ien placerat ante. Nulla justo.', 1160.22, '2021-01-27 14:24:04', '2021-11-24 19:10:17', 2),
(18, 'Citronnade au gingembre', 'Integer tincitincidunt eget, tempus vel, pede.', 1158.61, '2021-05-28 09:33:00', '2022-02-14 16:14:42', 2),
(19, 'Bissap ou Jus de foloré', 'Cras hendrerit at, vulputate vitae, nisl.', 1318.37, '2021-01-02 17:02:07', '2021-11-19 04:44:13', 2),
(20, 'soya', 'Duis aliquam is sapien sapien non mi. Integer ac neque.', 1684.54, '2022-01-01 08:19:10', '2021-07-21 06:29:16', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
