/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : edi_program_test

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 08/07/2020 16:21:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for biodata
-- ----------------------------
DROP TABLE IF EXISTS `biodata`;
CREATE TABLE `biodata`  (
  `bio_id` int(11) NOT NULL AUTO_INCREMENT,
  `bio_user_id` int(11) DEFAULT NULL,
  `bio_posisi_lamar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_ktp` int(30) DEFAULT NULL,
  `bio_tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_tgl_lahir` date DEFAULT NULL,
  `bio_jk` enum('L','P') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_agama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_gol_darah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_alamat_ktp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_alamat_tinggal` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_telp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_orng_kontak` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_skill` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `bio_ditempatkan` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bio_penghasilan` int(20) DEFAULT NULL,
  PRIMARY KEY (`bio_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of biodata
-- ----------------------------
INSERT INTO `biodata` VALUES (10, 14, 'Programmer', 'Linda', 8945748, 'Jakarta', '2020-06-30', 'P', 'Islam', 'O', 'Menikah', 'a', 'a', 'irfan.isma@gmail.com', '1', 'asd', 'asdasd', '1', 12000000);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2020_05_31_065353_add_status_to_users', 2);
INSERT INTO `migrations` VALUES (5, '2020_06_18_023406_create_pendidikan_table', 3);
INSERT INTO `migrations` VALUES (6, '2020_06_18_040541_change_field_pendidikan_updated_by', 4);
INSERT INTO `migrations` VALUES (7, '2020_06_18_042126_add_pendidikan_order', 5);
INSERT INTO `migrations` VALUES (8, '2020_06_18_042300_change_pendidikan_order', 6);
INSERT INTO `migrations` VALUES (9, '2020_06_18_042513_change_pendidikan_order_2', 7);
INSERT INTO `migrations` VALUES (10, '2020_06_29_060620_create_agama_table', 8);
INSERT INTO `migrations` VALUES (11, '2020_06_29_061405_create_negara_table', 9);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp(0) DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1','99') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  `role` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '2' COMMENT '1 = Admin, 2 = User',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Irfan Isma Somantri', 'irfan.isma@gmail.com', NULL, '$2y$10$t8doVTGUGgHf1CPGxqNTf.VEG9o95nJMq1G3Rg8V3QnTsGrTitr6W', '1', NULL, '2020-05-27 03:47:01', '2020-06-03 23:07:57', '1');
INSERT INTO `users` VALUES (14, 'linda', 'linda@mail.com', NULL, '$2y$10$p5/yN41NSPQ9QtwyfxriPu1U0OcbNVOcbGj.1rAMolr7CclQc.5tG', '1', NULL, '2020-07-08 08:13:43', '2020-07-08 08:13:43', '2');

SET FOREIGN_KEY_CHECKS = 1;
