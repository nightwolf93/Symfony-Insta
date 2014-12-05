/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : symfony

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-12-05 09:56:20
*/

SET FOREIGN_KEY_CHECKS=0;


-- ----------------------------
-- Table structure for entreprises
-- ----------------------------
DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE `entreprises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of entreprises
-- ----------------------------

-- ----------------------------
-- Table structure for localisation
-- ----------------------------
DROP TABLE IF EXISTS `localisation`;
CREATE TABLE `localisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `plan` varchar(10000) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `libelle` (`lieu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of localisation
-- ----------------------------

-- ----------------------------
-- Table structure for materiels
-- ----------------------------
DROP TABLE IF EXISTS `materiels`;
CREATE TABLE `materiels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of materiels
-- ----------------------------

-- ----------------------------
-- Table structure for professeurs
-- ----------------------------
DROP TABLE IF EXISTS `professeurs`;
CREATE TABLE `professeurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `status_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY(`status_id`) references status_professeur(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of professeurs
-- ----------------------------

-- ----------------------------
-- Table structure for promos
-- ----------------------------
DROP TABLE IF EXISTS `promos`;
CREATE TABLE `promos` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `promos`(`id`, `libelle`) VALUES (138,'bets promo');

-- ----------------------------
-- Records of promos
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO  `roles` (  `id` ,  `libelle` ) VALUES ( 1,  'ROLE_ADMIN' );
INSERT INTO  `roles` (  `id` ,  `libelle` ) VALUES ( 2,  'ROLE_USER' );

-- ----------------------------
-- Table structure for status_salle
-- ----------------------------
DROP TABLE IF EXISTS `status_salle`;
CREATE TABLE `status_salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status_salle
-- ----------------------------

-- ----------------------------
-- Table structure for status_professeur
-- ----------------------------
DROP TABLE IF EXISTS `status_professeur`;
CREATE TABLE `status_professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of status_professeur
-- ----------------------------


-- ----------------------------
-- Table structure for tuteurs
-- ----------------------------
DROP TABLE IF EXISTS `tuteurs`;
CREATE TABLE `tuteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `entreprise_id` int(100) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`entreprise_id`) references entreprises(`id`),
  FOREIGN KEY (`id`) references accounts(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuteurs
-- ----------------------------




-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(225) NOT NULL,
  `promo_id` int(4) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role_id` int(100),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`promo_id`) references promos(`id`),
  FOREIGN KEY (`role_id`) references roles(`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of accounts
-- ----------------------------

INSERT INTO  `accounts`(`id`, `email`, `password`, `salt`, `promo_id`, `nom`, `prenom`, `role_id`)
 VALUES ( 1,  'admin@test.com', 'admin', 'admin', 138, 'nom', 'prenom', 1 );


INSERT INTO  `accounts`(`id`, `email`, `password`, `salt`, `promo_id`, `nom`, `prenom`, `role_id`)
 VALUES ( 2,  'a', 'a', 'user', 138, 'nom', 'prenom', 2 );


-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id`) references accounts(`id`),
  KEY `author_id` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------







-- ----------------------------
-- Table structure for salles
-- ----------------------------
DROP TABLE IF EXISTS `salles`;
CREATE TABLE `salles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `localisation_id` int(11) NOT NULL,
  `libelle` int(4) NOT NULL,
  `nb_place` int(255) NOT NULL,
  `nb_poste` int(255) NOT NULL,
  `materiel_id` int(2) NOT NULL,
  `status_id` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY(`localisation_id`) references localisation(`id`),
  FOREIGN KEY(`materiel_id`) references materiels(`id`),
  FOREIGN KEY(`status_id`) references status_salle(`id`),
  KEY `localisation_name` (`localisation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of salles
-- ----------------------------

-- ----------------------------
-- Table structure for seances
-- ----------------------------
DROP TABLE IF EXISTS `seances`;
CREATE TABLE `seances` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` int(2) NOT NULL,
  `professeur_id` int(100) NOT NULL,
  `promo_id` int(100) NOT NULL,
  `salle_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`professeur_id`) references professeurs(`id`),
  FOREIGN KEY (`salle_id`) references salles(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seances
-- ----------------------------
