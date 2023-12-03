-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 déc. 2023 à 18:01
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auth_systeme`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'yassin', 'yass@gmail.com', '$2y$10$mqD8gYOh467wkBTXLGzZY.//mofNZqqeZL7PeSn.lGeGSufFhB2p6'),
(0, 'fanette.bailly', 'fanette@bailly', '$2y$10$NcCx/FszkIWvRMNfEyavHuZKZpiWyf9ExE2hI5Oc/CjLJimCJSbYC'),
(0, 'claire.berthoumieu', 'claire@berthoumieu', '$2y$10$VHwhZo0Y0o36lGD9.per2uDy1kBcaUmJ5xDpC3wCGGwzOLuA.oa0K'),
(0, 'lila.berthoumieux', 'test@test', '$2y$10$6dyb8ZSR7fL6Rg0UmlHHMO13KnyvJGRrmOFK8c5zCV4iDLfmnuLkm'),
(0, 'lucie.boure ', 'test@test', '$2y$10$DQSuuKF7NQwaYmQjx2uU/uDoQ38Qa0myNgckA1Wr0n47TNhW.i7ue'),
(0, 'jeanne.bozzardi ', 'test@test', '$2y$10$K8HZ7LCSpVeNHZS/GiRhheagnQCL2EzQsocu/.1SydpDucz4Euzpq'),
(0, 'clement.champiot', 'test@test', '$2y$10$A.8iJ7qjJ6pcLN7GfU.MceegYegyBxqXdchsB8yD2PsnN4QG5.r6y'),
(0, 'lilou.derulliere', 'test@test', '$2y$10$w2OEG9vNY7Q9Npfef0vCEe99mxfABR71zUyThjQRN/YD3a7FQX/Gm'),
(0, 'myla.dupuy', 'test@test', '$2y$10$5t78EgbON9Jz37Lk0dakFeiEsqNXs6Q/O4MJlRwYejBv/A9Y6UeDC'),
(0, 'doaa.elfarraa ', 'test@test', '$2y$10$YesfzvpT/e18FXJ7YOqF9euWmt/oYP09DrnGnUgwym3gt0khQHh0S'),
(0, 'solenn.gauthier ', 'test@test', '$2y$10$8fExMVUqvuaxjUXZI/xkaONuC08AxjmwCxAJjNWthNLJCXShmQHEG'),
(0, 'maud.ghidossi', 'test@test', '$2y$10$zeydCby3oSO8haAoC7mpNOPRmWfruidACMpTU0C1bDJzKXbFtr.a.'),
(0, 'alix.girardi', 'test@test', '$2y$10$tAWcWjjKfe60A65c28Q/eepUYudfaEyGsTSpjySuo9oIPXBOT69RC'),
(0, 'lea.gritti ', 'test@test', '$2y$10$KwZKiiev9wJQnA4GAUvKzO8fCp.2fArl2G9di/5WQ3aS5j5LiCohi'),
(0, 'mayaswan.hyman', 'test@test', '$2y$10$dOPPKm2PXN0DeC61AbZdb.KMa6JtbOSLUsdGJvvIUWYTPU55hbV/O'),
(0, 'cynda.ladjimi', 'test@test', '$2y$10$rNEcRCkn7cVciFJum.3sYuTut21yQh4HtrswegdWBicNPB/arMPkS'),
(0, 'amine.laraiedh', 'test@test', '$2y$10$rRoO5RdlfD7L.yRNDo.gDeuULxpSopyVJgmUQKfR0HFeemI8kM3RW'),
(0, 'mathilde.lompech ', 'test@test', '$2y$10$ppOsBJlQ9Dz5mjXgLFmUMOj3gnr85R2penCPyk64RTD13fMFf/eLK'),
(0, 'lison.marty', 'test@test', '$2y$10$M7wbiOhFFEvBv3.r./6yuuH8gMw08uM9PfQZ4IGQwVz.Jq/ZWH6qq'),
(0, 'gabriel.massue', 'test@test', '$2y$10$9t3/aeKkLYgqiRpJrnmxje93ZGJKtnM1MjsBPhzs0mNh0sObpkqe6'),
(0, 'lutece.moreau ', 'test@test', '$2y$10$ZxzyPHCSp7Hvy.ZBLF.YtuT/duLn6qQmLT0ZRMbV3hbrswGtNrziu'),
(0, 'maelle.pasche', 'test@test', '$2y$10$L7zCjAj1rKfBN7QncJ/AJOkO.ceLLyb/RGZBQrC1ntzn2dAHz4oKa'),
(0, 'julie.pomies ', 'test@test', '$2y$10$EKdfp4345IloMIMC8gOsHeTVnAMZX4oM9.TceTeWuji/atXn.dham'),
(0, 'ambre.postel', 'test@test', '$2y$10$iUl/5lyMe/gyamajfB6h1.WCZ7eEAnXr.brKvD0Ly.RHUGphJ/85S'),
(0, 'cloe.ribreau ', 'test@test', '$2y$10$1B9r2Ts9ExxQ4so96GJXiOHp0NbGtt9PDYYvP0.ehwBALMi1wvmzq'),
(0, 'eleane.rieubland', 'test@test', '$2y$10$AzYCFAHrOH5u0ZIWG2NasudGMmlXKO3615/VhJLMLBnTQG55Y1Tri'),
(0, 'ilana.robert ', 'test@test', '$2y$10$ZR8fRCKHclCbg6P7BMuW/uVJyEEviTxGHRhGPsAv4n.wSfIwfn0lq'),
(0, 'lilas.salesses ', 'test@test', '$2y$10$Z0KJK34zDAezm42qvA2o5e4FUW2xCB93wcL9aRZlSmYdbAK4g/SUC'),
(0, 'charlotte.samel', 'test@test', '$2y$10$fG/lOeZleUr/RE954wKhcOTw6fElXx6yGl5ooFQ1.xshsN8Me54Ni'),
(0, 'salome.tserediani ', 'test@test', '$2y$10$QecZxy8hbf23.oTF8MdoWuURYiYxNs09Empm5ZfbGb5jsI50lmMXO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
