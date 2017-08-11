/*
Navicat MySQL Data Transfer

Source Server         : API
Source Server Version : 50543
Source Host           : 
Source Database       : api_sparkfire

Target Server Type    : MYSQL
Target Server Version : 50543
File Encoding         : 65001

Date: 2015-12-16 17:06:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for server
-- ----------------------------
DROP TABLE IF EXISTS `server`;
CREATE TABLE `server` (
  `serverid` int(11) NOT NULL AUTO_INCREMENT,
  `servername` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `max` varchar(255) DEFAULT NULL,
  `online` varchar(255) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`serverid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of server
-- ----------------------------
INSERT INTO `server` VALUES ('2', 'Development Server 2', '127.0.0.2', 'test', '6', '0', '7777');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `loginreqkey` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `exp` varchar(255) DEFAULT NULL,
  `expneeded` varchar(255) DEFAULT NULL,
  `banned` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'testuser', 'testpassword', 'b728907b89b37289duxn7238977f89236b6d78923v8956780x612785v91d578xv2659x7862378678', 'offline', 'admin', '1', '500', '5000', null, null);
INSERT INTO `users` VALUES ('2', 'testuser2', 'testpassword', 'jijsdgijsjvhp9e3hvc8237g872cgw872', 'offline', 'user', '5', '50', '8011', null, null);
INSERT INTO `users` VALUES ('3', 'banneduser', 'test', 'sgd7b60789b6ew', 'offline', 'user', '1', '0', '1000', 'true', null);
INSERT INTO `users` VALUES ('4', 'Bander', 'test', 'baded8ddc9d45e9925937ff6eb8d8d4805808528369b8a57fc394138077b2fbc1ba451786c7d635e2e1930b0c72e06f732322b3fc7dd5f27cac4a960bf7a827d', 'offline', 'user', '1', '60', '100', '', 'testmail@byom.de');
INSERT INTO `users` VALUES ('6', 'Bander2', 'test', 'b15b8bfff22801480cec6d097558c01c572135da8056c71c48ab2a960b4463c746231290997e9d0600fc77474ee643389edd8cb420a862f93142fe7a33d12bf6', 'offline', 'user', '1', '0', '1000', '', 'marcfraedrich@outlook.de');
INSERT INTO `users` VALUES ('7', 'Test', 'test', '315a2c37d790ae08fa68f8b90e557436ce471b33c062a1f8187da104db9dd180dd5f93cc655048c768361c85af5799da9b2348e13bf6e26889074a6464fe72c7', 'offline', 'user', '1', '0', '1000', '', 'testmail@byom.de');
