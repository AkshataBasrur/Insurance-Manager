/*
 Navicat MySQL Data Transfer

 Source Server         : MyLocalDB
 Source Server Type    : MySQL
 Source Server Version : 50622
 Source Host           : localhost
 Source Database       : InsuranceManager

 Target Server Type    : MySQL
 Target Server Version : 50622
 File Encoding         : utf-8

 Date: 04/08/2019 15:05:21 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `custid` varchar(255) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Loaction` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(10) DEFAULT NULL,
  `DateOfBirth` varchar(255) DEFAULT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Insurance` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=263 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `customer`
-- ----------------------------
BEGIN;
INSERT INTO `customer` VALUES ('126', 'mmhr76', 'John Doe', 'NY', '6666888888', '11/22/1980', '67890','jd@gmail.com', 'COMAPASS PRO PLAN'), ('127', 'bm3lp6', 'Jane Doe', 'NY', '4345256171', '01/01/1984', '12345','jd1@gmail.com', 'SECURE PRO PLAN');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
