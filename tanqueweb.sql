/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : tanqueweb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-07-31 16:11:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tanque
-- ----------------------------
DROP TABLE IF EXISTS `tanque`;
CREATE TABLE `tanque` (
  `id_tanque` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` double(11,5) DEFAULT 0.00000,
  PRIMARY KEY (`id_tanque`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tanque
-- ----------------------------
INSERT INTO `tanque` VALUES ('1', '0.00000');
