/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : mbv

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2021-11-02 00:06:14
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `banda`
-- ----------------------------
DROP TABLE IF EXISTS `banda`;
CREATE TABLE `banda` (
  `BAcode` varchar(4) NOT NULL,
  `Bstation` varchar(20) NOT NULL,
  `Astation` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  PRIMARY KEY (`BAcode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banda
-- ----------------------------
INSERT INTO `banda` VALUES ('njh', '', '', '');
INSERT INTO `banda` VALUES ('dgh', 'kaloor', 'vytilla', '');
INSERT INTO `banda` VALUES ('afh', 'vytilla', 'petta', '');
INSERT INTO `banda` VALUES ('jfn', '', '', '');
INSERT INTO `banda` VALUES ('yhn', 'south station', 'edapally', 'appolo');

-- ----------------------------
-- Table structure for `cancomp`
-- ----------------------------
DROP TABLE IF EXISTS `cancomp`;
CREATE TABLE `cancomp` (
  `cancode` varchar(3) NOT NULL,
  `uname` varchar(8) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `trans` varchar(20) NOT NULL,
  `refacc` varchar(15) NOT NULL,
  `compaint` text NOT NULL,
  PRIMARY KEY (`cancode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cancomp
-- ----------------------------
INSERT INTO `cancomp` VALUES ('fg', 'abhi', '', 'M-BUS', 'bfdvjhkh', '');
INSERT INTO `cancomp` VALUES ('fh', 'abhi', '', 'M-BUS', 'bfdvjhkh', '');
INSERT INTO `cancomp` VALUES ('fi', 'abhi', '', 'M-BUS', 'bfdvjhkh', '');
INSERT INTO `cancomp` VALUES ('ki', 'wayne', '', 'OTHERS', 'fdhhki', '');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('0', 'admin@gmail.com', 'admin', 'admin', 'true');
INSERT INTO `login` VALUES ('8', 'xcv@xcv.xcv', 'xcvxcv', 'cust', 'true');

-- ----------------------------
-- Table structure for `mot`
-- ----------------------------
DROP TABLE IF EXISTS `mot`;
CREATE TABLE `mot` (
  `transcode` varchar(10) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mot
-- ----------------------------
INSERT INTO `mot` VALUES ('asd', 'BICYCLE', '0000-00-00 00:00:00');
INSERT INTO `mot` VALUES ('BC03', 'BICYCLE', '0000-00-00 00:00:00');
INSERT INTO `mot` VALUES ('bd04', 'M-BUS', '0000-00-00 00:00:00');
INSERT INTO `mot` VALUES ('MB0', 'M-BUS', '0000-00-00 00:00:00');
INSERT INTO `mot` VALUES ('MB01', 'E-AUTORICKSHAW', '0000-00-00 00:00:00');
INSERT INTO `mot` VALUES ('sdf', 'M-BUS', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `mrate`
-- ----------------------------
DROP TABLE IF EXISTS `mrate`;
CREATE TABLE `mrate` (
  `mrid` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(20) NOT NULL,
  `dest` varchar(20) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`mrid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mrate
-- ----------------------------
INSERT INTO `mrate` VALUES ('1', 'MG', 'KLR', '30');

-- ----------------------------
-- Table structure for `payment`
-- ----------------------------
DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `paycode` varchar(2) NOT NULL,
  `paymode` varchar(10) NOT NULL,
  `rent` int(11) NOT NULL,
  PRIMARY KEY (`paycode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of payment
-- ----------------------------
INSERT INTO `payment` VALUES ('ah', 'POST PAYME', '0');
INSERT INTO `payment` VALUES ('aj', 'POST PAYME', '0');
INSERT INTO `payment` VALUES ('sv', 'CREDIT/DEB', '0');

-- ----------------------------
-- Table structure for `reg`
-- ----------------------------
DROP TABLE IF EXISTS `reg`;
CREATE TABLE `reg` (
  `rcode` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gen` varchar(8) NOT NULL,
  `ph` varchar(10) NOT NULL,
  `mail` varchar(40) NOT NULL,
  PRIMARY KEY (`rcode`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of reg
-- ----------------------------
INSERT INTO `reg` VALUES ('1', 'sushanth', 'kamath', 'M', 'e', 'f');
INSERT INTO `reg` VALUES ('3', 'santhosh', 'kamath', 'M', '9895515263', 'kamatyh@gmail.com');
INSERT INTO `reg` VALUES ('4', 'sudarsan', 'kamath', 'M', 'e', 'f');
INSERT INTO `reg` VALUES ('5', 'niveditha', 'kamath', 'F', '9747837530', 'niveditha@gmail.com');
INSERT INTO `reg` VALUES ('6', 'vivek', 'pai', 'm', '6372982898', 'vivek@gmail.com');
INSERT INTO `reg` VALUES ('7', 'xcv', 'xcvxcv', 'M', '3423423423', 'xcv@xcv.xcv');
INSERT INTO `reg` VALUES ('8', 'xcv', 'xcvxcv', 'M', '3423423423', 'xcv@xcv.xcv');

-- ----------------------------
-- Table structure for `station`
-- ----------------------------
DROP TABLE IF EXISTS `station`;
CREATE TABLE `station` (
  `scode` varchar(10) NOT NULL,
  `station` varchar(20) NOT NULL,
  PRIMARY KEY (`scode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of station
-- ----------------------------
INSERT INTO `station` VALUES ('KLM', 'Kalamassery');
INSERT INTO `station` VALUES ('KLR', 'Kaloor');
INSERT INTO `station` VALUES ('ALV', 'Aluva');
INSERT INTO `station` VALUES ('MG', 'MG Road');

-- ----------------------------
-- Table structure for `transport`
-- ----------------------------
DROP TABLE IF EXISTS `transport`;
CREATE TABLE `transport` (
  `transport` varchar(100) NOT NULL,
  `driving` varchar(20) NOT NULL,
  `rate` varchar(20) NOT NULL,
  PRIMARY KEY (`transport`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transport
-- ----------------------------
INSERT INTO `transport` VALUES ('Bi-Cycle', 'self', '12/Hr');
INSERT INTO `transport` VALUES ('Cab', 'notself', '50/Km');
INSERT INTO `transport` VALUES ('E-AutoRickshaw', 'notself', '20/Km');
