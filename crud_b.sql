/*
Navicat MySQL Data Transfer

Source Server         : localhost_mysql
Source Server Version : 100125
Source Host           : 127.0.0.1:3306
Source Database       : crud_b

Target Server Type    : MYSQL
Target Server Version : 100125
File Encoding         : 65001

Date: 2017-11-20 16:50:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agamas
-- ----------------------------
DROP TABLE IF EXISTS `agamas`;
CREATE TABLE `agamas` (
  `agamaid` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agamaname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`agamaid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of agamas
-- ----------------------------
INSERT INTO `agamas` VALUES ('B', 'Budha', '2017-09-01 09:14:53', '2017-09-12 03:33:52');
INSERT INTO `agamas` VALUES ('H', 'Hindu', '2017-09-01 09:14:53', '2017-09-12 09:14:59');
INSERT INTO `agamas` VALUES ('I', 'Islam', '2017-09-01 09:14:53', '2017-09-01 09:14:53');
INSERT INTO `agamas` VALUES ('K', 'Kristen', '2017-09-01 09:14:53', '2017-09-12 09:14:59');
INSERT INTO `agamas` VALUES ('L', 'Lainnya', '2017-09-01 09:14:53', '2017-09-12 09:14:59');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'Buku PHP Keren', 'Beli aja murah', '2017-09-12 08:39:48', '2017-09-12 08:39:51');

-- ----------------------------
-- Table structure for masterpasien
-- ----------------------------
DROP TABLE IF EXISTS `masterpasien`;
CREATE TABLE `masterpasien` (
  `no_mr` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_pasien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agamaid` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_mr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of masterpasien
-- ----------------------------
INSERT INTO `masterpasien` VALUES ('2017A', 'Okki Setya', '1993-10-01', 'L', 'Jakarta', 'Jl.Bintara', 'I', null, null);

-- ----------------------------
-- Table structure for masterpasiens
-- ----------------------------
DROP TABLE IF EXISTS `masterpasiens`;
CREATE TABLE `masterpasiens` (
  `no_mr` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_pasien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agamaid` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotopasien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`no_mr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of masterpasiens
-- ----------------------------
INSERT INTO `masterpasiens` VALUES ('2017A', 'Okki Setyawan, S.Kom', '1993-01-10', 'L', 'Jakarta Timur, Pisangan Baru', 'Jl.Bintara IX No.82', 'I', null, null, '2017-09-12 04:36:26');
INSERT INTO `masterpasiens` VALUES ('2017BC', 'Juju', '1993-01-10', 'P', 'Jakarta', 'Jl.Nangka', 'I', 'uploads/okkiku.png', '2017-09-13 14:37:14', '2017-09-13 14:37:14');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_09_11_232010_create_articles_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_09_12_020231_create_masterpasiens_table', '2');
INSERT INTO `migrations` VALUES ('5', '2017_09_12_020253_create_agamas_table', '2');
INSERT INTO `migrations` VALUES ('6', '2017_09_12_020436_create_masterpasien_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
