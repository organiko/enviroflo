/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost:3306
 Source Schema         : enviroflo

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : 65001

 Date: 17/12/2017 20:09:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for enviroflo_admin_home_menu
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_home_menu`;
CREATE TABLE `enviroflo_admin_home_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `menu_level` int(3) NOT NULL DEFAULT '0',
  `menu_parent` int(3) DEFAULT NULL,
  `menu_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for enviroflo_admin_lov_feature
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_lov_feature`;
CREATE TABLE `enviroflo_admin_lov_feature` (
  `feature_id` int(3) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `feature_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feature_content_page` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feature_status` int(1) NOT NULL DEFAULT '1',
  `ok` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`feature_id`),
  KEY `feature_id` (`feature_id`,`feature_status`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_admin_lov_feature
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_admin_lov_feature` VALUES (1, 300, 'Alerts', '', 1, 0);
INSERT INTO `enviroflo_admin_lov_feature` VALUES (2, 300, 'Messages', '', 1, 0);
INSERT INTO `enviroflo_admin_lov_feature` VALUES (3, 300, 'Search', '', 1, 0);
INSERT INTO `enviroflo_admin_lov_feature` VALUES (4, 300, 'SystemSettings', '', 1, 0);
INSERT INTO `enviroflo_admin_lov_feature` VALUES (5, 300, 'HomePageLayout', 'admAppHomeLayout', 1, 0);
INSERT INTO `enviroflo_admin_lov_feature` VALUES (6, 300, 'Dashboard', 'admAppDashboard', 1, 0);
INSERT INTO `enviroflo_admin_lov_feature` VALUES (7, 300, 'HomePageSlider', 'admAppSlider', 1, 0);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_admin_lov_profile
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_lov_profile`;
CREATE TABLE `enviroflo_admin_lov_profile` (
  `profile_id` int(2) NOT NULL,
  `profile_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_admin_lov_profile
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_admin_lov_profile` VALUES (1, 'SysOp', 1);
INSERT INTO `enviroflo_admin_lov_profile` VALUES (2, 'Administrator', 1);
INSERT INTO `enviroflo_admin_lov_profile` VALUES (3, 'Content Manager', 1);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_admin_user_data
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_user_data`;
CREATE TABLE `enviroflo_admin_user_data` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `userLogin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPwd` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `sessID` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userStatus` int(1) NOT NULL DEFAULT '1',
  `ok` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `clnt_email` (`clnt`,`userLogin`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_admin_user_data
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_admin_user_data` VALUES (1, 300, 'marini.mauricio@gmail.com', '7fcdf0d43f4accb4a93afc2a31fbdc33', 'env-425fa00e2240f0a85967532f6722712c', 1, 0);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_admin_user_detail
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_user_detail`;
CREATE TABLE `enviroflo_admin_user_detail` (
  `user_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `user_id` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userAvatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'avatar_default.png',
  `userPageDefault` int(2) NOT NULL DEFAULT '6',
  `userDetailStatus` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_detail_id`),
  KEY `fk_user_detail` (`user_id`),
  CONSTRAINT `fk_user_detail` FOREIGN KEY (`user_id`) REFERENCES `enviroflo_admin_user_data` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_admin_user_detail
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_admin_user_detail` VALUES (1, 300, 1, 'Mauricio Marini', 'avatar_default.png', 6, 1);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_admin_user_permission
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_user_permission`;
CREATE TABLE `enviroflo_admin_user_permission` (
  `feature_access_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `feature_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feature_status` int(1) NOT NULL DEFAULT '1',
  `crud` char(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0100' COMMENT 'CREATE RETRIEVE UPDATE DELETE',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `feature_access_status` int(1) NOT NULL DEFAULT '1',
  `ok` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`feature_access_id`),
  UNIQUE KEY `user_feature` (`clnt`,`feature_id`,`user_id`) USING BTREE,
  KEY `clnt` (`clnt`) USING BTREE,
  KEY `user_id` (`user_id`) USING BTREE,
  KEY `feature_id` (`feature_id`) USING BTREE,
  KEY `fk_feature_status` (`feature_id`,`feature_status`),
  CONSTRAINT `fk_feature_status` FOREIGN KEY (`feature_id`, `feature_status`) REFERENCES `enviroflo_admin_lov_feature` (`feature_id`, `feature_status`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_admin_user_permission
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_admin_user_permission` VALUES (1, 300, 1, 1, 1, '0100', '2017-10-11 21:15:56', NULL, NULL, 0, 0);
INSERT INTO `enviroflo_admin_user_permission` VALUES (2, 300, 2, 1, 1, '0100', '2017-10-11 21:15:42', NULL, NULL, 0, 0);
INSERT INTO `enviroflo_admin_user_permission` VALUES (3, 300, 3, 1, 1, '0100', '2017-10-11 21:16:00', NULL, NULL, 0, 0);
INSERT INTO `enviroflo_admin_user_permission` VALUES (4, 300, 4, 1, 1, '0100', '2017-10-11 21:16:40', NULL, NULL, 1, 0);
INSERT INTO `enviroflo_admin_user_permission` VALUES (5, 300, 5, 1, 1, '0100', '2017-10-11 21:16:47', NULL, NULL, 1, 0);
INSERT INTO `enviroflo_admin_user_permission` VALUES (6, 300, 6, 1, 1, '0100', '2017-10-14 02:10:20', NULL, NULL, 1, 0);
INSERT INTO `enviroflo_admin_user_permission` VALUES (7, 300, 7, 1, 1, '0100', '2017-10-23 15:33:30', NULL, NULL, 1, 0);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_admin_user_profile
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_admin_user_profile`;
CREATE TABLE `enviroflo_admin_user_profile` (
  `user_profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `user_id` int(11) NOT NULL,
  `profile_id` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_profile_id`),
  UNIQUE KEY `user_id_profile_id` (`user_id`,`profile_id`) USING BTREE,
  KEY `clnt` (`clnt`) USING BTREE,
  CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `enviroflo_admin_user_data` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_admin_user_profile
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_admin_user_profile` VALUES (1, 300, 1, 3, '2017-10-10 16:05:59');
INSERT INTO `enviroflo_admin_user_profile` VALUES (2, 300, 1, 2, '2017-10-10 20:26:19');
INSERT INTO `enviroflo_admin_user_profile` VALUES (3, 300, 1, 1, '2017-10-10 20:26:28');
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_home_block
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_home_block`;
CREATE TABLE `enviroflo_home_block` (
  `block_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `block_order` int(11) NOT NULL DEFAULT '0',
  `block_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `block_adm_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `block_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`block_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_home_block
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_home_block` VALUES (1, 1, 'Slider', 'mainSlider.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (2, 2, 'Product Categories', 'productCategoryBlock.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (3, 3, 'About Us', 'aboutUsBlock.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (4, 4, 'Recent Posts', 'recentPosts.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (5, 5, 'Service Info', 'serviceInfo.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (6, 6, 'Portfolio', 'portfolioBox.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (7, 7, 'Our Services', 'ourServices.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (8, 8, 'Testimonials', 'testimonialSection.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (9, 9, 'Our Clients', 'ourClients.php', '', 1);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_home_slider
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_home_slider`;
CREATE TABLE `enviroflo_home_slider` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `slide_order` int(11) NOT NULL DEFAULT '0',
  `slide_file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slide_title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `slide_text` varbinary(200) NOT NULL,
  `slide_link_01_title` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_link_01_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_link_01_status` int(1) NOT NULL DEFAULT '1',
  `slide_link_02_title` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide_link_02_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slide_link_02_status` int(1) NOT NULL DEFAULT '1',
  `slide_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`slide_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_home_slider
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_home_slider` VALUES (1, 300, 3, '1d086afff630fb25a26b9cd4167bf655.jpg', 'Introducing Unify Template', 0x57652061726520637265617469766520746563686E6F6C6F677920636F6D70616E792070726F766964696E67206B6579206469676974616C207365727669636573206F6E2077656220616E64206D6F62696C652E, 'Learn More', '#', 1, 'Our Work', '#', 1, 1);
INSERT INTO `enviroflo_home_slider` VALUES (2, 300, 1, '79b1297bbe852d85dec07bee298f6a0d.jpg', 'Includes 300+ Template Pages', 0x57652061726520637265617469766520746563686E6F6C6F677920636F6D70616E792070726F766964696E67206B6579206469676974616C207365727669636573206F6E2077656220616E64206D6F62696C652E, 'Learn More', '#', 1, 'Our Work', '#', 1, 1);
INSERT INTO `enviroflo_home_slider` VALUES (3, 300, 2, '1bee216a39b3f11f86e9a6858f02b523.jpg', 'Over 25000+ Satisfied Users', 0x57652061726520637265617469766520746563686E6F6C6F677920636F6D70616E792070726F766964696E67206B6579206469676974616C207365727669636573206F6E2077656220616E64206D6F62696C652E, 'Learn More', '#', 1, 'Our Work', '#', 1, 1);
INSERT INTO `enviroflo_home_slider` VALUES (4, 300, 4, 'homeSlide_20171217074139.jpg', 'Lorem ut ut natus et quam rerum eum', 0x557420696E636964756E7420756C6C616D2065737420696E76656E746F72652061757465206C61626F72696F73616D206375706964617461742074656D706F726120717569206F66666963696120766F6C7570746174656D, 'Pariatur Eum tempor', 'http://www.google.com', 1, 'Eum deserunt in cumq', 'http://www.abh.com.br', 1, 1);
COMMIT;

-- ----------------------------
-- View structure for enviroflo_view_feature_access
-- ----------------------------
DROP VIEW IF EXISTS `enviroflo_view_feature_access`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `enviroflo_view_feature_access` AS select `a`.`feature_access_id` AS `feature_access_id`,`a`.`clnt` AS `clnt`,`a`.`feature_id` AS `feature_id`,`b`.`feature_desc` AS `feature_desc`,`b`.`feature_content_page` AS `feature_content_page`,`a`.`user_id` AS `user_id`,`c`.`userLogin` AS `userLogin`,`c`.`sessID` AS `sessID`,`c`.`userStatus` AS `userStatus`,`a`.`feature_status` AS `feature_status`,`a`.`crud` AS `crud`,`a`.`created_at` AS `created_at`,`a`.`updated_at` AS `updated_at`,`a`.`updated_by` AS `updated_by`,`a`.`feature_access_status` AS `feature_access_status`,`a`.`ok` AS `ok` from ((`enviroflo_admin_user_permission` `a` join `enviroflo_admin_lov_feature` `b` on((`a`.`feature_id` = `b`.`feature_id`))) join `enviroflo_admin_user_data` `c` on((`a`.`user_id` = `c`.`user_id`)));

-- ----------------------------
-- View structure for enviroflo_view_user_data
-- ----------------------------
DROP VIEW IF EXISTS `enviroflo_view_user_data`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `enviroflo_view_user_data` AS select `a`.`user_id` AS `user_id`,`a`.`clnt` AS `clnt`,`a`.`userLogin` AS `userLogin`,`b`.`userName` AS `userName`,`b`.`userAvatar` AS `userAvatar`,`a`.`userPwd` AS `userPwd`,`b`.`userPageDefault` AS `userPageDefault`,`c`.`feature_desc` AS `feature_desc`,`c`.`feature_content_page` AS `feature_content_page`,`a`.`sessID` AS `sessID`,`a`.`userStatus` AS `userStatus`,`a`.`ok` AS `ok` from ((`enviroflo_admin_user_data` `a` join `enviroflo_admin_user_detail` `b` on((`a`.`user_id` = `b`.`user_id`))) join `enviroflo_admin_lov_feature` `c` on((`b`.`userPageDefault` = `c`.`feature_id`)));

-- ----------------------------
-- Triggers structure for table enviroflo_admin_user_data
-- ----------------------------
DROP TRIGGER IF EXISTS `sideTables`;
delimiter ;;
CREATE DEFINER = `root`@`localhost` TRIGGER `sideTables` AFTER INSERT ON `enviroflo_admin_user_data` FOR EACH ROW BEGIN
	INSERT INTO enviroflo_admin_user_detail (user_id) VALUES (new.user_id);
	INSERT INTO enviroflo_admin_user_profile (user_id,profile_id) VALUES (new.user_id,3);
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table enviroflo_home_slider
-- ----------------------------
DROP TRIGGER IF EXISTS `lastSlide`;
delimiter ;;
CREATE DEFINER = `root`@`localhost` TRIGGER `lastSlide` BEFORE INSERT ON `enviroflo_home_slider` FOR EACH ROW BEGIN
	DECLARE newOrder INT;
	SELECT MAX(slide_order)+1 FROM enviroflo_home_slider INTO newOrder;
	SET new.slide_order = newOrder;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
