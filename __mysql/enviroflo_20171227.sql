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

 Date: 27/12/2017 08:13:03
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `enviroflo_admin_lov_feature` VALUES (8, 300, 'OurClients', 'admAppClient', 1, 0);
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
INSERT INTO `enviroflo_admin_user_data` VALUES (1, 300, 'marini.mauricio@gmail.com', '7fcdf0d43f4accb4a93afc2a31fbdc33', 'env-25f22190bda13ff6495e478094fcd98f', 1, 0);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `enviroflo_admin_user_permission` VALUES (8, 300, 8, 1, 1, '0100', '2017-12-17 21:08:45', NULL, NULL, 1, 0);
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
INSERT INTO `enviroflo_home_block` VALUES (4, 4, 'Recent Posts', 'recentPosts.php', '', 0);
INSERT INTO `enviroflo_home_block` VALUES (5, 5, 'Service Info', 'serviceInfo.php', '', 0);
INSERT INTO `enviroflo_home_block` VALUES (6, 6, 'Portfolio', 'portfolioBox.php', '', 1);
INSERT INTO `enviroflo_home_block` VALUES (7, 7, 'Our Services', 'ourServices.php', '', 0);
INSERT INTO `enviroflo_home_block` VALUES (8, 8, 'Testimonials', 'testimonialSection.php', '', 0);
INSERT INTO `enviroflo_home_block` VALUES (9, 9, 'Our Clients', 'ourClients.php', '', 1);
COMMIT;

-- ----------------------------
-- Table structure for enviroflo_home_client
-- ----------------------------
DROP TABLE IF EXISTS `enviroflo_home_client`;
CREATE TABLE `enviroflo_home_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt` int(3) NOT NULL DEFAULT '300',
  `client_order` int(11) NOT NULL DEFAULT '0',
  `client_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `client_text` text COLLATE utf8_unicode_ci NOT NULL,
  `client_country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_market` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`client_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of enviroflo_home_client
-- ----------------------------
BEGIN;
INSERT INTO `enviroflo_home_client` VALUES (1, 300, 1, 'clientLogo_001.jpg', 'CNN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus, libero et finibus euismod, ligula mi vestibulum quam, sit amet aliquet leo lorem eu massa. Aliquam tempus felis vel erat efficitur dignissim. Nullam eget ipsum et odio dignissim pulvinar. Etiam tempor risus vitae magna blandit tincidunt in in lacus. Cras mattis magna hendrerit, porta libero sit amet, semper libero. Donec in consequat turpis. Phasellus sollicitudin consectetur sem, non tincidunt ipsum. Curabitur vehicula nisl sed diam venenatis rhoncus. In lorem felis, sodales ut scelerisque ut, scelerisque ut diam. Ut ac vestibulum tellus, ut dapibus risus. Vivamus blandit congue porta. Mauris consequat in dui vitae rhoncus. ', 'USA', 'Media', 'http://www.cnn.com', 1);
INSERT INTO `enviroflo_home_client` VALUES (2, 300, 2, 'clientLogo_002.jpg', 'NASA', ' Aliquam at auctor erat. Nullam tempus metus id vulputate mollis. Integer dapibus diam sit amet tellus sollicitudin maximus. Nullam quis ex tincidunt, congue nunc at, pharetra nisi. Maecenas gravida quis nisi sit amet lacinia. Cras vel mi est. Etiam lacinia rutrum eleifend. Cras tristique erat nec consectetur iaculis. Fusce vehicula, mauris commodo lacinia ornare, est metus aliquet ligula, quis vehicula purus felis et felis. Vestibulum suscipit elementum tortor. Maecenas bibendum sem id facilisis convallis. Integer sit amet luctus ex, maximus suscipit erat. Nulla sollicitudin mattis odio. Nulla et urna pulvinar arcu pharetra vestibulum. Nulla posuere gravida tortor ac ultricies. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. ', 'USA', 'Aerospace', 'https://www.nasa.gov', 1);
INSERT INTO `enviroflo_home_client` VALUES (3, 300, 3, 'clientLogo_003.jpg', 'NFL', ' Ut volutpat id dolor vitae fringilla. Donec sem nunc, consequat a volutpat quis, fringilla ut nisi. Vivamus vestibulum, sapien eget tincidunt elementum, magna urna varius magna, eu dapibus tellus sem ac tellus. Vivamus rutrum accumsan vestibulum. Phasellus in lorem consequat, elementum lorem ut, sodales lectus. Fusce vel tortor a nisl consequat tempor. Mauris tristique nibh ante, a ullamcorper purus mollis dapibus. Vivamus dignissim, velit sit amet scelerisque tempor, leo ante porttitor arcu, ut imperdiet sapien lacus nec lacus. Ut a metus nisi. Cras turpis ligula, pretium ac sollicitudin eu, malesuada in elit. Phasellus euismod sagittis orci, at placerat tortor posuere nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc ex arcu, fermentum sit amet massa nec, auctor efficitur odio. In ac pulvinar arcu.', 'USA', 'Sports', 'https://www.nfl.com', 1);
INSERT INTO `enviroflo_home_client` VALUES (4, 300, 4, 'clientLogo_004.jpg', 'SF 49ers', ' Phasellus a mauris pellentesque massa ornare aliquet a a lectus. Ut ultrices tristique lectus, non gravida justo. Nullam consequat lacinia neque, quis vulputate justo rhoncus scelerisque. Donec aliquam diam sed enim eleifend fermentum. Mauris at magna dui. Phasellus in volutpat mauris. Sed ornare quis ex eget ornare. Duis ex risus, ultricies eget ex in, feugiat ullamcorper elit. Donec congue arcu vel ultricies tincidunt. Fusce commodo ex ex, quis iaculis massa suscipit et. Pellentesque tincidunt elit nec euismod pretium.', 'USA', 'Sports', 'http://www.49ers.com', 1);
INSERT INTO `enviroflo_home_client` VALUES (5, 300, 5, 'clientLogo_005.jpg', 'Dragon', ' Sed pellentesque varius urna. Nunc metus erat, vehicula et feugiat quis, finibus eget nunc. Cras vitae nunc tellus. Proin quis condimentum nisi. Curabitur vitae pulvinar diam, quis auctor ipsum. Fusce laoreet quam a scelerisque fermentum. Nunc pharetra, arcu vitae auctor viverra, sem urna facilisis ligula, a consectetur urna nunc sed massa. Praesent blandit sagittis magna non convallis. Pellentesque vitae sem facilisis, tempus augue non, malesuada lorem. Nam at odio ullamcorper, scelerisque lectus vel, lobortis turpis. Nunc convallis turpis quis tristique ullamcorper. Cras porta augue eget ornare convallis. Maecenas molestie odio vitae nibh molestie consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum vitae facilisis metus. Vestibulum non turpis placerat, porttitor mi non, auctor eros. ', 'USA', 'Aerospace', 'http://www.spacex.com/dragon', 1);
INSERT INTO `enviroflo_home_client` VALUES (6, 300, 6, 'clientLogo_006.jpg', 'Tesla', ' Praesent commodo justo sed eros accumsan, sed laoreet tortor lacinia. Vivamus vel lectus nec arcu posuere molestie. Nullam in ultrices nibh, vel venenatis ligula. Vestibulum ac tortor ac leo pharetra dignissim. Phasellus a gravida ligula. Phasellus tincidunt lacus eu mi fermentum varius. Pellentesque facilisis a metus vitae pulvinar. Aenean fringilla eros faucibus, congue nisi eget, pretium felis. Aliquam at elit tempus ex egestas pellentesque.', 'USA', 'Automotive and Technology', 'https://www.tesla.com', 1);
INSERT INTO `enviroflo_home_client` VALUES (7, 300, 7, 'clientLogo_007.jpg', 'Walt Disney', ' Donec quis leo et felis rutrum bibendum in sed diam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus a turpis sit amet leo volutpat ornare. Nam fermentum odio eu mauris posuere, quis faucibus lacus fringilla. Duis non tortor vel urna eleifend ornare. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque et pulvinar massa. Curabitur sollicitudin dictum gravida.', 'USA', 'Entertainment', 'https://thewaltdisneycompany.com', 1);
INSERT INTO `enviroflo_home_client` VALUES (8, 300, 8, 'clientLogo_008.jpg', 'Apple', ' Ut fringilla commodo lacus quis ullamcorper. Pellentesque malesuada tincidunt elit a commodo. Cras congue nisl a ex dignissim tincidunt. Etiam at erat nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent ac lorem nec nibh pellentesque elementum sit amet at ex. Maecenas aliquet blandit luctus.', 'USA', 'Technology', 'https://www.apple.com', 1);
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
-- Triggers structure for table enviroflo_home_client
-- ----------------------------
DROP TRIGGER IF EXISTS `lastClient`;
delimiter ;;
CREATE DEFINER = `root`@`localhost` TRIGGER `lastClient` BEFORE INSERT ON `enviroflo_home_client` FOR EACH ROW BEGIN
	DECLARE newOrder INT;
	DECLARE clientCount INT;

	SELECT COUNT(client_id) FROM enviroflo_home_client INTO clientCount;
	
	IF clientCount < 1 THEN
		SET new.client_order = 1;
	ELSE
		SELECT MAX(client_order)+1 FROM enviroflo_home_client INTO newOrder;
		SET new.client_order = newOrder;
	END IF;

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
	DECLARE slideCount INT;

	SELECT COUNT(slide_id) FROM enviroflo_home_slider INTO slideCount;

	IF slideCount < 1 THEN
		SET new.slide_order = 1;
	ELSE
		SELECT MAX(slide_order)+1 FROM enviroflo_home_slider INTO newOrder;
		SET new.slide_order = newOrder;
	END IF;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
