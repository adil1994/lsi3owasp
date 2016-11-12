-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 10 Novembre 2016 à 13:36
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lsi3owasp`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` text NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_modification` datetime NOT NULL,
  `id_auteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `contenu`, `image`, `date_creation`, `date_modification`, `id_auteur`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur ', 'Morbi egestas non turpis in imperdiet. Mauris sit amet erat nec arcu efficitur egestas. Phasellus nisi nulla, feugiat quis quam at, finibus viverra ipsum. Sed sit amet pulvinar lorem. Maecenas malesuada rutrum mi eu volutpat. Aenean vulputate efficitur ipsum. Nullam porttitor in velit non rhoncus. Nunc nunc erat, ultrices at feugiat at, elementum eu diam. Nunc eu sapien scelerisque, lacinia neque ut, vulputate est. Nulla ligula tellus, pharetra vel risus non, laoreet elementum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quis quam ut metus ultrices consequat nec id ex.\r\n\r\nSuspendisse quam nisi, rhoncus quis vestibulum non, sollicitudin at odio. Phasellus in scelerisque leo. Nulla facilisi. Nunc in quam a risus ornare varius at at metus. Fusce euismod ut mauris vitae suscipit. Vivamus efficitur, leo et venenatis tincidunt, metus nisl viverra ante, sit amet dignissim sapien velit quis arcu. Phasellus sed hendrerit turpis. Nulla gravida lacinia facilisis. Morbi bibendum risus mi, ac pulvinar quam finibus ac. Duis quis viverra odio. Nullam nunc sem, congue dictum lacinia ac, ultricies quis sem.\r\n\r\nDonec mattis elit nisi, nec dignissim orci luctus vel. Nulla nec arcu ut libero facilisis egestas eu eget eros. Aliquam eget congue felis, eu efficitur dui. Nullam rutrum erat metus. Vivamus vel commodo urna. Praesent pretium tincidunt fermentum. Nulla ac lorem interdum, scelerisque massa in, efficitur urna. Cras scelerisque hendrerit velit sit amet imperdiet. Duis non dui ante. Phasellus vel egestas arcu, id aliquam ipsum. Curabitur dignissim gravida rhoncus.', '', '2016-11-10 00:00:00', '2016-11-17 00:00:00', 1),
(3, 'Cras at fermentum tortor. In vitae tincidunt est, non sagittis lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu luctus felis, at interdum erat. Nulla venenatis eros vel eros ultrices varius. Sed non dolor ipsum. Etiam pharetra scelerisque orci ac pharetra. Vivamus mauris sapien, posuere nec diam ut, blandit iaculis ipsum. Donec tincidunt, orci et efficitur euismod, magna dolor dapibus nunc, quis viverra justo tortor sed purus. Maecenas facilisis ornare ultricies. In et nisl sed neque interdum accumsan. Etiam tempus metus arcu, eu ornare nulla volutpat eget. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin ut ligula dignissim, tempor nisl id, varius elit. Quisque a blandit risus. Ut vitae convallis orci.\r\n\r\nCras at fermentum tortor. In vitae tincidunt est, non sagittis lorem. In vitae ex vel leo volutpat porta sit amet eget leo. Fusce cursus turpis vitae neque tincidunt, quis dignissim lectus imperdiet. Suspendisse lobortis eleifend ligula quis scelerisque. Donec luctus egestas odio, vel ullamcorper lorem scelerisque vitae. Integer scelerisque justo vel ex venenatis ultrices. Donec non commodo tortor. Nam cursus pretium nulla, vel congue felis pellentesque sed. Etiam hendrerit enim urna, a luctus elit feugiat nec. Maecenas neque est, hendrerit faucibus lorem ut, egestas fringilla mi. Aliquam sit amet lacinia nibh. Mauris efficitur eros id laoreet gravida. Phasellus hendrerit tortor id neque eleifend malesuada. Aenean cursus magna vitae nisi placerat consequat. Duis sed mattis lorem, id aliquet mauris.\r\n\r\nMorbi egestas non turpis in imperdiet. Mauris sit amet erat nec arcu efficitur egestas. Phasellus nisi nulla, feugiat quis quam at, finibus viverra ipsum. Sed sit amet pulvinar lorem. Maecenas malesuada rutrum mi eu volutpat. Aenean vulputate efficitur ipsum. Nullam porttitor in velit non rhoncus. Nunc nunc erat, ultrices at feugiat at, elementum eu diam. Nunc eu sapien scelerisque, lacinia neque ut, vulputate est. Nulla ligula tellus, pharetra vel risus non, laoreet elementum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quis quam ut metus ultrices consequat nec id ex.\r\n\r\nSuspendisse quam nisi, rhoncus quis vestibulum non, sollicitudin at odio. Phasellus in scelerisque leo. Nulla facilisi. Nunc in quam a risus ornare varius at at metus. Fusce euismod ut mauris vitae suscipit. Vivamus efficitur, leo et venenatis tincidunt, metus nisl viverra ante, sit amet dignissim sapien velit quis arcu. Phasellus sed hendrerit turpis. Nulla gravida lacinia facilisis. Morbi bibendum risus mi, ac pulvinar quam finibus ac. Duis quis viverra odio. Nullam nunc sem, congue dictum lacinia ac, ultricies quis sem.\r\n\r\nDonec mattis elit nisi, nec dignissim orci luctus vel. Nulla nec arcu ut libero facilisis egestas eu eget eros. Aliquam eget congue felis, eu efficitur dui. Nullam rutrum erat metus. Vivamus vel commodo urna. Praesent pretium tincidunt fermentum. Nulla ac lorem interdum, scelerisque massa in, efficitur urna. Cras scelerisque hendrerit velit sit amet imperdiet. Duis non dui ante. Phasellus vel egestas arcu, id aliquam ipsum. Curabitur dignissim gravida rhoncus.', 'http://az616578.vo.msecnd.net/files/2016/07/23/6360489455192162291563850737_Trump.jpg', '2016-11-11 00:00:00', '2016-11-10 00:00:00', 1),
(4, 'Etiam pharetra scelerisque orci ac pharetra', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu luctus felis, at interdum erat. Nulla venenatis eros vel eros ultrices varius. Sed non dolor ipsum. Etiam pharetra scelerisque orci ac pharetra. Vivamus mauris sapien, posuere nec diam ut, blandit iaculis ipsum. Donec tincidunt, orci et efficitur euismod, magna dolor dapibus nunc, quis viverra justo tortor sed purus. Maecenas facilisis ornare ultricies. In et nisl sed neque interdum accumsan. Etiam tempus metus arcu, eu ornare nulla volutpat eget. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin ut ligula dignissim, tempor nisl id, varius elit. Quisque a blandit risus. Ut vitae convallis orci.\r\n\r\nCras at fermentum tortor. In vitae tincidunt est, non sagittis lorem. In vitae ex vel leo volutpat porta sit amet eget leo. Fusce cursus turpis vitae neque tincidunt, quis dignissim lectus imperdiet. Suspendisse lobortis eleifend ligula quis scelerisque. Donec luctus egestas odio, vel ullamcorper lorem scelerisque vitae. Integer scelerisque justo vel ex venenatis ultrices. Donec non commodo tortor. Nam cursus pretium nulla, vel congue felis pellentesque sed. Etiam hendrerit enim urna, a luctus elit feugiat nec. Maecenas neque est, hendrerit faucibus lorem ut, egestas fringilla mi. Aliquam sit amet lacinia nibh. Mauris efficitur eros id laoreet gravida. Phasellus hendrerit tortor id neque eleifend malesuada. Aenean cursus magna vitae nisi placerat consequat. Duis sed mattis lorem, id aliquet mauris.\r\n\r\nMorbi egestas non turpis in imperdiet. Mauris sit amet erat nec arcu efficitur egestas. Phasellus nisi nulla, feugiat quis quam at, finibus viverra ipsum. Sed sit amet pulvinar lorem. Maecenas malesuada rutrum mi eu volutpat. Aenean vulputate efficitur ipsum. Nullam porttitor in velit non rhoncus. Nunc nunc erat, ultrices at feugiat at, elementum eu diam. Nunc eu sapien scelerisque, lacinia neque ut, vulputate est. Nulla ligula tellus, pharetra vel risus non, laoreet elementum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quis quam ut metus ultrices consequat nec id ex.', 'https://upload.wikimedia.org/wikipedia/commons/2/27/Hillary_Clinton_official_Secretary_of_State_portrait_crop.jpg', '2016-11-10 00:00:00', '2016-11-10 00:00:00', 2),
(5, 'Nulla ligula tellus, pharetra vel risus non, laoreet elementum enim', 'Morbi egestas non turpis in imperdiet. Mauris sit amet erat nec arcu efficitur egestas. Phasellus nisi nulla, feugiat quis quam at, finibus viverra ipsum. Sed sit amet pulvinar lorem. Maecenas malesuada rutrum mi eu volutpat. Aenean vulputate efficitur ipsum. Nullam porttitor in velit non rhoncus. Nunc nunc erat, ultrices at feugiat at, elementum eu diam. Nunc eu sapien scelerisque, lacinia neque ut, vulputate est. Nulla ligula tellus, pharetra vel risus non, laoreet elementum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quis quam ut metus ultrices consequat nec id ex.\r\n\r\nSuspendisse quam nisi, rhoncus quis vestibulum non, sollicitudin at odio. Phasellus in scelerisque leo. Nulla facilisi. Nunc in quam a risus ornare varius at at metus. Fusce euismod ut mauris vitae suscipit. Vivamus efficitur, leo et venenatis tincidunt, metus nisl viverra ante, sit amet dignissim sapien velit quis arcu. Phasellus sed hendrerit turpis. Nulla gravida lacinia facilisis. Morbi bibendum risus mi, ac pulvinar quam finibus ac. Duis quis viverra odio. Nullam nunc sem, congue dictum lacinia ac, ultricies quis sem.\r\n\r\nDonec mattis elit nisi, nec dignissim orci luctus vel. Nulla nec arcu ut libero facilisis egestas eu eget eros. Aliquam eget congue felis, eu efficitur dui. Nullam rutrum erat metus. Vivamus vel commodo urna. Praesent pretium tincidunt fermentum. Nulla ac lorem interdum, scelerisque massa in, efficitur urna. Cras scelerisque hendrerit velit sit amet imperdiet. Duis non dui ante. Phasellus vel egestas arcu, id aliquam ipsum. Curabitur dignissim gravida rhoncus.', 'http://mauriactu.info/fr/sites/default/files/styles/large/public/field/image/mohamed_5_cop_15.jpg?itok=Pxv8oCCJ', '2016-11-03 00:00:00', '2016-11-16 00:00:00', 2),
(6, ' Maecenas neque est, hendrerit faucibus lorem ', 'Cras at fermentum tortor. In vitae tincidunt est, non sagittis lorem. In vitae ex vel leo volutpat porta sit amet eget leo. Fusce cursus turpis vitae neque tincidunt, quis dignissim lectus imperdiet. Suspendisse lobortis eleifend ligula quis scelerisque. Donec luctus egestas odio, vel ullamcorper lorem scelerisque vitae. Integer scelerisque justo vel ex venenatis ultrices. Donec non commodo tortor. Nam cursus pretium nulla, vel congue felis pellentesque sed. Etiam hendrerit enim urna, a luctus elit feugiat nec. Maecenas neque est, hendrerit faucibus lorem ut, egestas fringilla mi. Aliquam sit amet lacinia nibh. Mauris efficitur eros id laoreet gravida. Phasellus hendrerit tortor id neque eleifend malesuada. Aenean cursus magna vitae nisi placerat consequat. Duis sed mattis lorem, id aliquet mauris.\r\n\r\nMorbi egestas non turpis in imperdiet. Mauris sit amet erat nec arcu efficitur egestas. Phasellus nisi nulla, feugiat quis quam at, finibus viverra ipsum. Sed sit amet pulvinar lorem. Maecenas malesuada rutrum mi eu volutpat. Aenean vulputate efficitur ipsum. Nullam porttitor in velit non rhoncus. Nunc nunc erat, ultrices at feugiat at, elementum eu diam. Nunc eu sapien scelerisque, lacinia neque ut, vulputate est. Nulla ligula tellus, pharetra vel risus non, laoreet elementum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quis quam ut metus ultrices consequat nec id ex.\r\n\r\nSuspendisse quam nisi, rhoncus quis vestibulum non, sollicitudin at odio. Phasellus in scelerisque leo. Nulla facilisi. Nunc in quam a risus ornare varius at at metus. Fusce euismod ut mauris vitae suscipit. Vivamus efficitur, leo et venenatis tincidunt, metus nisl viverra ante, sit amet dignissim sapien velit quis arcu. Phasellus sed hendrerit turpis. Nulla gravida lacinia facilisis. Morbi bibendum risus mi, ac pulvinar quam finibus ac. Duis quis viverra odio. Nullam nunc sem, congue dictum lacinia ac, ultricies quis sem.', 'http://www.tunisienumerique.com/wp-content/uploads/2015/02/MAROC.jpg', '2016-11-02 00:00:00', '2016-11-17 00:00:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `adresse`, `username`, `password`, `date_creation`, `role`) VALUES
(1, 'adil', 'bouktaib', 'adresse ', 'adilovic', 'password1234', '2016-11-03 00:00:00', 'admin'),
(2, 'bahra', 'mohamed', 'adress 2', 'medb2', 'password1234', '2016-11-07 00:00:00', 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `fk_articleuser` (`id_auteur`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_articleuser` FOREIGN KEY (`id_auteur`) REFERENCES `user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
