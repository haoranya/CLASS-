/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : cims

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-11-10 14:42:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for czxy_class_state
-- ----------------------------
DROP TABLE IF EXISTS `czxy_class_state`;
CREATE TABLE `czxy_class_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) DEFAULT NULL COMMENT '学生id',
  `today_date` varchar(255) DEFAULT NULL COMMENT '今日日期',
  `attention` varchar(55) DEFAULT NULL COMMENT '课堂注意力是否集中',
  `study` varchar(55) DEFAULT NULL COMMENT '窗口是否和老师一置',
  `hand_in_phone` varchar(55) DEFAULT NULL COMMENT '手机是否上交',
  `active` varchar(55) DEFAULT NULL COMMENT '活跃度',
  `forenoon_state` varchar(85) DEFAULT NULL COMMENT '上午出勤状态',
  `afternoon_state` varchar(85) DEFAULT NULL COMMENT '下午出勤状态',
  `evening_state` varchar(85) DEFAULT NULL COMMENT '晚自习出勤状态',
  `body_state` varchar(155) DEFAULT NULL COMMENT '身体状况',
  `score` varchar(155) DEFAULT NULL COMMENT '每日分数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_class_state
-- ----------------------------
INSERT INTO `czxy_class_state` VALUES ('1', '1', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('2', '1', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('3', '2', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('4', '2', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('5', '3', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('6', '3', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('7', '4', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('8', '4', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('9', '208', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('10', '208', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('11', '207', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('12', '207', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('13', '206', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('14', '206', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('15', '196', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('16', '196', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('17', '199', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('18', '199', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('19', '198', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('20', '198', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('21', '200', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('22', '200', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('23', '201', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('24', '201', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('25', '202', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('26', '202', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('27', '203', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('28', '203', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('29', '204', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('30', '204', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('31', '205', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('32', '205', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('33', '209', '2018-11-07', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('34', '209', '2018-11-08', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('35', '1', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('36', '1', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('37', '1', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('38', '1', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('39', '1', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('40', '1', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('41', '2', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('42', '2', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('43', '2', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('44', '2', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('45', '2', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('46', '2', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('47', '3', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('48', '3', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('49', '3', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('50', '3', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('51', '3', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('52', '3', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('53', '4', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('54', '4', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('55', '4', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('56', '4', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('57', '4', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('58', '4', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('59', '208', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('60', '208', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('61', '208', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('62', '208', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('63', '208', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('64', '208', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('65', '207', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('66', '207', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('67', '207', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('68', '207', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('69', '207', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('70', '207', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('71', '206', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('72', '206', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('73', '206', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('74', '206', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('75', '206', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('76', '206', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('77', '196', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('78', '196', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('79', '196', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('80', '196', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('81', '196', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('82', '196', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('83', '199', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('84', '199', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('85', '199', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('86', '199', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('87', '199', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('88', '199', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('89', '198', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('90', '198', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('91', '198', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('92', '198', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('93', '198', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('94', '198', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('95', '200', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('96', '200', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('97', '200', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('98', '200', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('99', '200', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('100', '200', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('101', '201', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('102', '201', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('103', '201', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('104', '201', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('105', '201', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('106', '201', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('107', '202', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('108', '202', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('109', '202', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('110', '202', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('111', '202', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('112', '202', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('113', '203', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('114', '203', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('115', '203', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('116', '203', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('117', '203', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('118', '203', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('119', '204', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('120', '204', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('121', '204', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('122', '204', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('123', '204', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('124', '204', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('125', '205', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('126', '205', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('127', '205', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('128', '205', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('129', '205', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('130', '205', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('131', '209', '2018-11-01', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('132', '209', '2018-11-02', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('133', '209', '2018-11-03', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('134', '209', '2018-11-04', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('135', '209', '2018-11-05', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');
INSERT INTO `czxy_class_state` VALUES ('136', '209', '2018-11-06', '是', '是', '是', 'A', '√', '√', '√', '良好', '100');

-- ----------------------------
-- Table structure for czxy_class_type
-- ----------------------------
DROP TABLE IF EXISTS `czxy_class_type`;
CREATE TABLE `czxy_class_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '名字',
  `pid` int(11) DEFAULT NULL COMMENT '他的父系',
  `path` varchar(255) DEFAULT NULL COMMENT '连带关系',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='班级，系，类型表';

-- ----------------------------
-- Records of czxy_class_type
-- ----------------------------
INSERT INTO `czxy_class_type` VALUES ('22', 'Java一班', '20', '0-18-20');
INSERT INTO `czxy_class_type` VALUES ('21', '全栈一班', '19', '0-18-19');
INSERT INTO `czxy_class_type` VALUES ('18', '软件工程系', '0', '0');
INSERT INTO `czxy_class_type` VALUES ('19', '全栈', '18', '0-18');
INSERT INTO `czxy_class_type` VALUES ('20', 'Java', '18', '0-18');

-- ----------------------------
-- Table structure for czxy_email
-- ----------------------------
DROP TABLE IF EXISTS `czxy_email`;
CREATE TABLE `czxy_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `send_name` varchar(100) DEFAULT NULL COMMENT '对应的用户',
  `access_name` varchar(100) DEFAULT NULL COMMENT '接受者名字',
  `access_id` varchar(100) DEFAULT NULL COMMENT '接收者id',
  `if_read` varchar(55) DEFAULT NULL COMMENT '是否阅读',
  `if_take_file` tinyint(4) DEFAULT NULL COMMENT '是否有附件',
  `send_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '发送时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_email
-- ----------------------------

-- ----------------------------
-- Table structure for czxy_evidence
-- ----------------------------
DROP TABLE IF EXISTS `czxy_evidence`;
CREATE TABLE `czxy_evidence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) DEFAULT NULL COMMENT '学生的名字',
  `tea_name` varchar(255) DEFAULT NULL COMMENT '老师的名字',
  `stu_class` varchar(255) DEFAULT NULL COMMENT '班级名字',
  `today_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '违纪时间',
  `img_url` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `type` varchar(255) DEFAULT NULL COMMENT '因什么',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_evidence
-- ----------------------------
INSERT INTO `czxy_evidence` VALUES ('24', '杨浩然', '姚瑶', '全栈1班', '2018-04-28 00:00:00', 'Upload/Evidence/Evidenceimages/5ae41ff3d83cf_01fddd578059b40000012e7ebe8c71.jpg@1280w_1l_2o_100sh.jpg', '。。。。。。');
INSERT INTO `czxy_evidence` VALUES ('23', '的房地产', '方文山', '分位数', '2018-04-20 00:00:00', 'Upload/Evidence/Evidenceimages/5ae41fcf49f30_test.png', '访问');

-- ----------------------------
-- Table structure for czxy_huibao
-- ----------------------------
DROP TABLE IF EXISTS `czxy_huibao`;
CREATE TABLE `czxy_huibao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gz_name` varchar(255) DEFAULT NULL,
  `gz_title` varchar(255) DEFAULT NULL,
  `gz_gongsi` varchar(255) DEFAULT NULL,
  `gz_data` varchar(255) DEFAULT NULL,
  `gz_start_time` varchar(255) DEFAULT NULL,
  `gz_end_time` varchar(255) DEFAULT NULL,
  `gz_content` varchar(255) DEFAULT NULL,
  `gz_pingfen` varchar(255) DEFAULT NULL,
  `gz_banji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_huibao
-- ----------------------------

-- ----------------------------
-- Table structure for czxy_leave
-- ----------------------------
DROP TABLE IF EXISTS `czxy_leave`;
CREATE TABLE `czxy_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(55) DEFAULT NULL COMMENT '请假者的姓名',
  `stu_class` varchar(255) DEFAULT NULL,
  `stu_phone` char(15) DEFAULT NULL COMMENT '联系电话',
  `stu_e_phone` char(15) DEFAULT NULL COMMENT '紧急联系电话',
  `leave_type` varchar(100) DEFAULT NULL COMMENT '请假类型',
  `content` varchar(1500) DEFAULT NULL COMMENT '请假原因内容',
  `leave_time` int(15) DEFAULT NULL COMMENT '离开的时间',
  `back_time` int(15) DEFAULT NULL COMMENT '返回时间',
  `leave_days` varchar(255) DEFAULT NULL,
  `a_number` tinyint(11) DEFAULT '0' COMMENT '批准数',
  `flow` tinyint(11) DEFAULT NULL COMMENT '批准流程',
  `if_agree` varchar(55) DEFAULT '0' COMMENT '是否同意(0代表未同意,1代表同意)',
  `leave_state` int(1) DEFAULT '0' COMMENT '请假状态',
  `reject` varchar(255) DEFAULT NULL COMMENT '驳回内容',
  `dismissal` varchar(255) DEFAULT NULL COMMENT '驳回人',
  `add_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_leave
-- ----------------------------
INSERT INTO `czxy_leave` VALUES ('31', '王存烨', '全栈一班', '17805202005', '17805202005', 'shi', 'dwasd', '1524899050', '1524899055', '0分', '1', '1', '1', '0', null, null, '2018-04-28 15:04:10');
INSERT INTO `czxy_leave` VALUES ('30', '123', '全栈一班', '12312312312', '12312312123', '123', '123', '1524844800', '1524844800', '0分', '0', '1', '2', '0', 'hdiwqhdi', '姚姚', '2018-04-28 15:04:08');
INSERT INTO `czxy_leave` VALUES ('20', '王存烨', '全栈一班', '13610670180', '13610670180', '事假', '累 想请假', '1524791811', '1524931200', '1天14小时43分', '0', '3', '2', '0', '就是不想给', '伟哥', '2018-04-27 09:28:03');
INSERT INTO `czxy_leave` VALUES ('27', '王存烨', '全栈一班', '17805202005', '17805202005', '等等', '毒瓦斯', '1524844800', '1525017600', '2天0小时0分', '1', '3', '2', '0', 'frds ', '姚姚', '2018-04-28 10:33:33');
INSERT INTO `czxy_leave` VALUES ('32', '王景笑', '全栈一班', '18369030508', '17696949541', '病假', '割包皮', '1524899709', '1525017600', '1天8小时44分', '0', '3', '2', '0', '去微软推哦', '姚姚', '2018-04-28 15:16:37');
INSERT INTO `czxy_leave` VALUES ('34', '杨浩然', '全栈一班', '17805202005', '13043733516', '玩耍', '非哇塞ifhewioasjdoasjio', '1541553394', '1541553398', '0分', '1', '1', '1', '0', null, null, '2018-11-07 09:16:42');
INSERT INTO `czxy_leave` VALUES ('35', '杨浩然', '全栈一班', '17805202005', '13043733516', '吃喝', '日访问欧派哈桑金佛', '1541553460', '1541553463', '0分', '1', '1', '1', '0', null, null, '2018-11-07 09:17:46');

-- ----------------------------
-- Table structure for czxy_punchcard
-- ----------------------------
DROP TABLE IF EXISTS `czxy_punchcard`;
CREATE TABLE `czxy_punchcard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `punchcard_name` varchar(255) DEFAULT NULL COMMENT '打卡者',
  `punchcard_class` varchar(255) DEFAULT NULL COMMENT '打卡班级',
  `class_teacher` varchar(255) DEFAULT NULL COMMENT '班级老师',
  `punchcard_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '打卡时间',
  `punchcard_id` int(11) DEFAULT NULL COMMENT '打卡者的id',
  `time` varchar(255) DEFAULT NULL COMMENT '当前时间戳',
  `type` varchar(255) DEFAULT NULL COMMENT '打卡判断',
  `state` varchar(255) DEFAULT NULL COMMENT '到班状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_punchcard
-- ----------------------------
INSERT INTO `czxy_punchcard` VALUES ('1', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:55:24', '1', null, null, null);
INSERT INTO `czxy_punchcard` VALUES ('2', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:57:20', '1', null, null, null);
INSERT INTO `czxy_punchcard` VALUES ('3', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:57:50', '1', null, null, null);
INSERT INTO `czxy_punchcard` VALUES ('4', '王存烨', '全栈一班', '姚姚', '2018-04-26 10:13:29', '1', null, null, null);
INSERT INTO `czxy_punchcard` VALUES ('5', '王存烨', '全栈一班', '姚姚', '2018-04-26 10:14:55', '1', null, null, null);
INSERT INTO `czxy_punchcard` VALUES ('6', '王存烨', '全栈一班', '姚姚', '2018-04-26 10:53:43', '1', '1524711217', null, null);
INSERT INTO `czxy_punchcard` VALUES ('7', '王存烨', '全栈一班', '姚姚', '2018-04-26 02:38:41', '1', '1524724711', null, null);
INSERT INTO `czxy_punchcard` VALUES ('8', '王存烨', '全栈一班', '姚姚', '2018-04-26 02:42:42', '1', '1524724951', null, null);
INSERT INTO `czxy_punchcard` VALUES ('9', '王存烨', '全栈一班', '姚姚', '2018-04-26 02:43:42', '1', '1524725011', null, null);
INSERT INTO `czxy_punchcard` VALUES ('10', '王存烨', '全栈一班', '姚姚', '2018-04-26 02:50:46', '1', '1524725400', null, null);
INSERT INTO `czxy_punchcard` VALUES ('11', '王存烨', '全栈一班', '姚姚', '2018-04-26 15:53:10', '1', '1524729140', null, null);
INSERT INTO `czxy_punchcard` VALUES ('12', '王存烨', '全栈一班', '姚姚', '2018-04-26 03:54:57', '1', '1524729277', null, null);
INSERT INTO `czxy_punchcard` VALUES ('13', '王存烨', '全栈一班', '姚姚', '2018-04-26 03:59:04', '1', '1524729531', null, null);
INSERT INTO `czxy_punchcard` VALUES ('14', '王存烨', '全栈一班', '姚姚', '2018-04-26 04:00:51', '1', '1524729635', null, null);
INSERT INTO `czxy_punchcard` VALUES ('15', '王存烨', '全栈一班', '姚姚', '2018-04-26 04:21:05', '1', '1524730828', null, null);
INSERT INTO `czxy_punchcard` VALUES ('16', '王存烨', '全栈一班', '姚姚', '2018-04-26 04:25:52', '1', '1524731150', null, null);
INSERT INTO `czxy_punchcard` VALUES ('17', '王存烨', '全栈一班', '姚姚', '2018-04-26 04:33:03', '1', '1524731563', null, null);
INSERT INTO `czxy_punchcard` VALUES ('18', '王存烨', '全栈一班', '姚姚', '2018-04-26 04:33:13', '1', '1524731584', null, null);
INSERT INTO `czxy_punchcard` VALUES ('19', '王存烨', '全栈一班', '姚姚', '2018-04-26 08:16:27', '1', '1524744975', '晚上', null);
INSERT INTO `czxy_punchcard` VALUES ('20', '王存烨', '全栈一班', '姚姚', '2018-04-26 08:17:13', '1', '1524745027', '晚上', null);
INSERT INTO `czxy_punchcard` VALUES ('21', '王存烨', '全栈一班', '姚姚', '2018-04-26 08:17:25', '1', '1524745034', '晚上', null);
INSERT INTO `czxy_punchcard` VALUES ('22', '王存烨', '全栈一班', '姚姚', '2018-04-26 08:18:01', '1', '1524745073', '晚上', null);
INSERT INTO `czxy_punchcard` VALUES ('23', '王存烨', '全栈一班', '姚姚', '2018-04-26 08:18:29', '1', '1524745103', '晚上', null);
INSERT INTO `czxy_punchcard` VALUES ('24', '王存烨', '全栈一班', '姚姚', '2018-04-26 08:34:15', '1', '1524746049', '晚上', '迟到了08:Thu, 26 Apr 2018 08:00:37 +0800:00');
INSERT INTO `czxy_punchcard` VALUES ('25', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:12:38', '1', '1524748346', '晚上', '迟到了0分钟');
INSERT INTO `czxy_punchcard` VALUES ('26', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:24:26', '1', '1524749061', '晚上', '迟到了1.57小时');
INSERT INTO `czxy_punchcard` VALUES ('27', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:25:22', '1', '1524749115', '晚上', '提前了24.63分钟');
INSERT INTO `czxy_punchcard` VALUES ('28', '王存烨', '全栈一班', '姚姚', '2018-04-26 09:26:05', '1', '1524749160', '午后', '迟到了7.27小时');
INSERT INTO `czxy_punchcard` VALUES ('29', '王存烨', '全栈一班', '姚姚', '2018-04-26 11:03:17', '1', '1524754986', '晚上', '迟到了3.22小时');
INSERT INTO `czxy_punchcard` VALUES ('30', '王存烨', '全栈一班', '姚姚', '2018-04-26 11:05:09', '1', '1524755105', '午后', '迟到了8.92小时');
INSERT INTO `czxy_punchcard` VALUES ('31', '王存烨', '全栈一班', '姚姚', '2018-04-26 11:06:26', '1', '1524755177', '午后', '迟到了8.94小时');
INSERT INTO `czxy_punchcard` VALUES ('32', '王存烨', '全栈一班', '姚姚', '2018-04-26 11:06:55', '1', '1524755189', '晚上', '迟到了3.28小时');
INSERT INTO `czxy_punchcard` VALUES ('33', '王存烨', '全栈一班', '姚姚', '2018-04-28 02:36:54', '1', '1524897332', '午后', '迟到了26.9分钟');
INSERT INTO `czxy_punchcard` VALUES ('34', '王存烨', '全栈一班', '姚姚', '2018-04-28 02:41:10', '1', '1524897620', '早上', '提前了6.15小时');

-- ----------------------------
-- Table structure for czxy_speak
-- ----------------------------
DROP TABLE IF EXISTS `czxy_speak`;
CREATE TABLE `czxy_speak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sut_id` int(11) DEFAULT NULL COMMENT '学生的id',
  `speak_time` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '沟通时间',
  `user_id` int(11) DEFAULT NULL COMMENT '当前老师id',
  `stu_name` varchar(155) DEFAULT NULL COMMENT '学生名字',
  `speak_peaple` varchar(155) DEFAULT NULL COMMENT '沟通的对象',
  `speak_content` varchar(2550) DEFAULT NULL COMMENT '沟通的内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_speak
-- ----------------------------

-- ----------------------------
-- Table structure for czxy_state_list
-- ----------------------------
DROP TABLE IF EXISTS `czxy_state_list`;
CREATE TABLE `czxy_state_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `stu_id` int(11) DEFAULT NULL COMMENT '学生id',
  `stu_class` varchar(255) DEFAULT NULL COMMENT '学生班级',
  `start_date` varchar(255) DEFAULT NULL COMMENT '开始时间',
  `end_date` varchar(255) DEFAULT NULL COMMENT '结束时间',
  `state_list` varchar(255) DEFAULT NULL COMMENT '状态(已发布/未发布)',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=233 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_state_list
-- ----------------------------
INSERT INTO `czxy_state_list` VALUES ('72', '李浩淇', '2', '全栈一班', '2018-04-09', '2018-04-11', '未发布');
INSERT INTO `czxy_state_list` VALUES ('66', '李浩淇', '2', '全栈一班', '2018-04-01', '2018-04-06', '未发布');
INSERT INTO `czxy_state_list` VALUES ('67', '汤婷婷', '3', '全栈一班', '2018-04-01', '2018-04-06', '未发布');
INSERT INTO `czxy_state_list` VALUES ('68', '王芳', '4', '全栈一班', '2018-04-01', '2018-04-06', '未发布');
INSERT INTO `czxy_state_list` VALUES ('69', '王芳', '4', '全栈一班', '2018-04-01', '2018-04-05', '未发布');
INSERT INTO `czxy_state_list` VALUES ('92', '王芳', '4', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('91', '汤婷婷', '3', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('90', '李浩淇', '2', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('89', '王存烨', '1', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('88', 'x', '198', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('87', 'zxc', '196', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('86', '王芳', '4', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('85', '汤婷婷', '3', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('84', '李浩淇', '2', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('81', 'zxc', '196', '全栈一班', '2018-04-26', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('83', '王存烨', '1', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('82', 'x', '198', '全栈一班', '2018-04-26', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('80', '王芳', '4', '全栈一班', '2018-04-26', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('79', '汤婷婷', '3', '全栈一班', '2018-04-26', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('78', '李浩淇', '2', '全栈一班', '2018-04-26', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('54', '李浩淇', '2', '全栈一班', '2018-04-01', '2018-04-05', '未发布');
INSERT INTO `czxy_state_list` VALUES ('53', '汤婷婷', '3', '全栈一班', '2018-04-01', '2018-04-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('73', '汤婷婷', '3', '全栈一班', '2018-04-09', '2018-04-11', '未发布');
INSERT INTO `czxy_state_list` VALUES ('74', '王芳', '4', '全栈一班', '2018-04-09', '2018-04-11', '未发布');
INSERT INTO `czxy_state_list` VALUES ('77', '王存烨', '1', '全栈一班', '2018-04-26', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('93', '刘浩哲', '207', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('94', '黄文希', '206', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('95', 'zxc', '196', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('96', '连梓豪', '199', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('97', 'x', '198', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('98', '杨卓', '200', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('99', '木子', '201', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('100', '123', '202', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('101', 'zhengyunan', '203', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('102', '请问', '205', '全栈一班', '2018-04-02', '2018-04-19', '未发布');
INSERT INTO `czxy_state_list` VALUES ('103', '刘浩哲', '207', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('104', '黄文希', '206', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('105', '连梓豪', '199', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('106', '杨卓', '200', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('107', '木子', '201', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('108', '123', '202', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('109', 'zhengyunan', '203', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('110', '请问', '205', '全栈一班', '2018-04-01', '2018-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('111', '王存烨', '1', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('112', '李浩淇', '2', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('113', '汤婷婷', '3', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('114', '王芳', '4', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('115', '王景笑', '208', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('116', '刘浩哲', '207', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('117', '黄文希', '206', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('118', 'zxc', '196', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('119', '连梓豪', '199', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('120', 'x', '198', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('121', '杨卓', '200', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('122', '木子', '201', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('123', '123', '202', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('124', 'zhengyunan', '203', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('125', '请问', '205', '全栈一班', '2018-04-01', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('126', '王存烨', '1', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('127', '李浩淇', '2', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('128', '汤婷婷', '3', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('129', '王芳', '4', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('130', '王景笑', '208', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('131', '刘浩哲', '207', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('132', '黄文希', '206', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('133', 'zxc', '196', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('134', '连梓豪', '199', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('135', 'x', '198', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('136', '杨卓', '200', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('137', '木子', '201', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('138', '123', '202', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('139', 'zhengyunan', '203', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('140', '请问', '205', '全栈一班', '2018-04-28', '2048-04-28', '未发布');
INSERT INTO `czxy_state_list` VALUES ('141', '王存烨', '1', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('142', '李浩淇', '2', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('143', '汤婷婷', '3', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('144', '王芳', '4', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('145', '王景笑', '208', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('146', '刘浩哲', '207', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('147', '黄文希', '206', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('148', 'zxc', '196', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('149', '连梓豪', '199', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('150', 'x', '198', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('151', '杨卓', '200', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('152', '木子', '201', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('153', '123', '202', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('154', 'zhengyunan', '203', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('155', '请问', '205', '全栈一班', '2018-04-28', '2018-04-30', '未发布');
INSERT INTO `czxy_state_list` VALUES ('156', '王存烨', '1', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('157', '李浩淇', '2', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('158', '汤婷婷', '3', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('159', '王芳', '4', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('160', '王景笑', '208', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('161', '刘浩哲', '207', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('162', '黄文希', '206', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('163', 'zxc', '196', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('164', '连梓豪', '199', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('165', 'x', '198', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('166', '杨卓', '200', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('167', '木子', '201', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('168', '123', '202', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('169', 'zhengyunan', '203', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('170', '请问', '205', '全栈一班', '2018-04-01', '2018-04-15', '未发布');
INSERT INTO `czxy_state_list` VALUES ('171', '王存烨', '1', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('172', '李浩淇', '2', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('173', '汤婷婷', '3', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('174', '王芳', '4', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('175', '王景笑', '208', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('176', '刘浩哲', '207', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('177', '黄文希', '206', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('178', 'zxc', '196', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('179', '连梓豪', '199', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('180', 'x', '198', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('181', '杨卓', '200', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('182', '木子', '201', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('183', '123', '202', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('184', 'zhengyunan', '203', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('185', '请问', '205', '全栈一班', '2018-04-01', '2018-04-04', '未发布');
INSERT INTO `czxy_state_list` VALUES ('201', '王存烨', '1', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('202', '李浩淇', '2', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('203', '汤婷婷', '3', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('204', '王芳', '4', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('205', '王景笑', '208', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('206', '刘浩哲', '207', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('207', '黄文希', '206', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('208', 'zxc', '196', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('209', '连梓豪', '199', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('210', 'x', '198', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('211', '杨卓', '200', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('212', '木子', '201', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('213', '123', '202', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('214', 'zhengyunan', '203', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('215', '请问', '205', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('216', '杨浩然', '209', '全栈一班', '2018-11-07', '2018-11-08', '未发布');
INSERT INTO `czxy_state_list` VALUES ('217', '王存烨', '1', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('218', '李浩淇', '2', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('219', '汤婷婷', '3', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('220', '王芳', '4', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('221', '王景笑', '208', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('222', '刘浩哲', '207', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('223', '黄文希', '206', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('224', 'zxc', '196', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('225', '连梓豪', '199', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('226', 'x', '198', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('227', '杨卓', '200', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('228', '木子', '201', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('229', '123', '202', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('230', 'zhengyunan', '203', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('231', '请问', '205', '全栈一班', '2018-11-01', '2018-11-07', '未发布');
INSERT INTO `czxy_state_list` VALUES ('232', '杨浩然', '209', '全栈一班', '2018-11-01', '2018-11-07', '未发布');

-- ----------------------------
-- Table structure for czxy_student
-- ----------------------------
DROP TABLE IF EXISTS `czxy_student`;
CREATE TABLE `czxy_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(255) DEFAULT NULL COMMENT '账号登录名',
  `pwd` varchar(255) DEFAULT NULL COMMENT '登陆密码',
  `name` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `class` varchar(255) DEFAULT NULL COMMENT '所属班级',
  `addtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=utf8 COMMENT='学生表';

-- ----------------------------
-- Records of czxy_student
-- ----------------------------
INSERT INTO `czxy_student` VALUES ('1', 'aaa', '202cb962ac59075b964b07152d234b70', '王存烨', '全栈一班', '2018-04-28 10:55:10');
INSERT INTO `czxy_student` VALUES ('2', 'bbb', '202cb962ac59075b964b07152d234b70', '李浩淇', '全栈一班', '2018-04-27 15:47:37');
INSERT INTO `czxy_student` VALUES ('3', 'tst', '123456', '汤婷婷', '全栈一班', '2018-04-26 09:08:16');
INSERT INTO `czxy_student` VALUES ('4', 'llb', '202cb962ac59075b964b07152d234b70', '王芳', '全栈一班', '2018-04-26 18:17:56');
INSERT INTO `czxy_student` VALUES ('208', '王景笑', '3306ace7a620eabf1705c35b1c08ed07', '王景笑', '全栈一班', '2018-04-28 15:13:54');
INSERT INTO `czxy_student` VALUES ('207', 'zhedream', '241a0bbdb329b6862263e0a19c656b29', '刘浩哲', '全栈一班', '2018-04-28 15:04:46');
INSERT INTO `czxy_student` VALUES ('206', '黄我洗', '202cb962ac59075b964b07152d234b70', '黄文希', '全栈一班', '2018-04-28 15:04:29');
INSERT INTO `czxy_student` VALUES ('196', 'zxc', '202cb962ac59075b964b07152d234b70', 'zxc', '全栈一班', '2018-04-27 16:32:20');
INSERT INTO `czxy_student` VALUES ('199', 'luanxu', 'd516bd81a327d5f6459cf789acf2e09b', '连梓豪', '全栈一班', '2018-04-28 15:01:35');
INSERT INTO `czxy_student` VALUES ('198', 'xq', '202cb962ac59075b964b07152d234b70', 'x', '全栈一班', '2018-04-27 16:38:20');
INSERT INTO `czxy_student` VALUES ('200', '7545', '202cb962ac59075b964b07152d234b70', '杨卓', '全栈一班', '2018-04-28 15:01:46');
INSERT INTO `czxy_student` VALUES ('201', '木子', '202cb962ac59075b964b07152d234b70', '木子', '全栈一班', '2018-04-28 15:02:02');
INSERT INTO `czxy_student` VALUES ('202', '123', '202cb962ac59075b964b07152d234b70', '123', '全栈一班', '2018-04-28 15:02:09');
INSERT INTO `czxy_student` VALUES ('203', '2323', '149815eb972b3c370dee3b89d645ae14', 'zhengyunan', '全栈一班', '2018-04-28 15:02:13');
INSERT INTO `czxy_student` VALUES ('204', '12345', '202cb962ac59075b964b07152d234b70', '123', '全栈一班', '2018-04-28 15:02:49');
INSERT INTO `czxy_student` VALUES ('205', '清', '202cb962ac59075b964b07152d234b70', '请问', '全栈一班', '2018-04-28 15:03:31');
INSERT INTO `czxy_student` VALUES ('209', 'login', '202cb962ac59075b964b07152d234b70', '杨浩然', '全栈一班', '2018-11-07 09:15:54');

-- ----------------------------
-- Table structure for czxy_summary
-- ----------------------------
DROP TABLE IF EXISTS `czxy_summary`;
CREATE TABLE `czxy_summary` (
  `id` int(11) NOT NULL,
  `total_score` varchar(155) DEFAULT NULL COMMENT '作业总分',
  `attendance` varchar(155) DEFAULT NULL COMMENT '出勤状况',
  `class_state` varchar(155) DEFAULT NULL COMMENT '上课状态',
  `body_state` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_summary
-- ----------------------------

-- ----------------------------
-- Table structure for czxy_take_file
-- ----------------------------
DROP TABLE IF EXISTS `czxy_take_file`;
CREATE TABLE `czxy_take_file` (
  `id` int(11) NOT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `email_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_take_file
-- ----------------------------

-- ----------------------------
-- Table structure for czxy_teacher
-- ----------------------------
DROP TABLE IF EXISTS `czxy_teacher`;
CREATE TABLE `czxy_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(100) DEFAULT NULL COMMENT '登录名',
  `pwd` varchar(255) DEFAULT NULL COMMENT '登录密码',
  `name` varchar(100) DEFAULT NULL COMMENT '姓名',
  `class` varchar(255) DEFAULT NULL COMMENT '所属班级',
  `power` tinyint(4) DEFAULT NULL COMMENT '权限',
  `addtime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='教师表';

-- ----------------------------
-- Records of czxy_teacher
-- ----------------------------
INSERT INTO `czxy_teacher` VALUES ('1', 'aaa', '202cb962ac59075b964b07152d234b70', '姚姚', '全栈一班', '1', '2018-04-28 15:27:16');
INSERT INTO `czxy_teacher` VALUES ('8', 'weige', '123', '伟哥', '全栈一班', '2', '2018-04-28 15:18:49');
INSERT INTO `czxy_teacher` VALUES ('9', 'chuangchuang', '202cb962ac59075b964b07152d234b70', '李闯闯', '全栈一班', '3', '2018-04-27 10:32:25');

-- ----------------------------
-- Table structure for czxy_yuebao
-- ----------------------------
DROP TABLE IF EXISTS `czxy_yuebao`;
CREATE TABLE `czxy_yuebao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gz_name` varchar(255) DEFAULT NULL,
  `gz_title` varchar(255) DEFAULT NULL,
  `gz_gongsi` varchar(255) DEFAULT NULL,
  `gz_data` int(15) DEFAULT NULL,
  `gz_start_time` int(15) DEFAULT NULL,
  `gz_end_time` int(15) DEFAULT NULL,
  `gz_content` varchar(255) DEFAULT NULL,
  `gz_pingfen` varchar(255) DEFAULT NULL,
  `gz_banji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_yuebao
-- ----------------------------
INSERT INTO `czxy_yuebao` VALUES ('22', '为单位', '杨浩然涉及商业间谍罪', '王氏企业公司', '1524554618', '1524554618', '1524554618', '宣判无期徒刑', '123', null);
INSERT INTO `czxy_yuebao` VALUES ('23', null, '公司个屌', '公司个屌', '1524816042', '1524816042', '1524816042', '564日期挖水电站', null, null);
INSERT INTO `czxy_yuebao` VALUES ('24', null, 'q', 'q', '1524835394', '1524835394', '1524835394', 'qw', null, null);
INSERT INTO `czxy_yuebao` VALUES ('25', '王存烨', '3额滴神啊', '让我', '1524897954', '1524897954', '1524897954', '3二维', null, null);
INSERT INTO `czxy_yuebao` VALUES ('26', null, '吹牛逼', '地表吹牛逼最强', '1524899046', '1524899046', '1524899046', '惺惺惜惺惺想寻寻惺惺惜惺惺想休息休息线洗寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻寻', null, null);
INSERT INTO `czxy_yuebao` VALUES ('27', null, '132', '123', '1524899073', '1524899073', '1524899073', '123', null, null);
INSERT INTO `czxy_yuebao` VALUES ('28', null, '打死', 'samd看来', '1524899453', '1524899453', '1524899453', 'sdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', null, null);
INSERT INTO `czxy_yuebao` VALUES ('29', null, '杨浩然', 'i活动i啊我是哦那大宋', '1541554108', '1541554108', '1541554108', 'の的我2味道位的味道', null, null);

-- ----------------------------
-- Table structure for czxy_zhoubao
-- ----------------------------
DROP TABLE IF EXISTS `czxy_zhoubao`;
CREATE TABLE `czxy_zhoubao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gz_name` varchar(255) DEFAULT NULL,
  `gz_title` varchar(255) DEFAULT NULL,
  `gz_gongsi` varchar(255) DEFAULT NULL,
  `gz_data` int(15) DEFAULT NULL,
  `gz_start_time` int(15) DEFAULT NULL,
  `gz_end_time` int(15) DEFAULT NULL,
  `gz_content` varchar(255) DEFAULT NULL,
  `gz_pingfen` varchar(255) DEFAULT NULL,
  `gz_banji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of czxy_zhoubao
-- ----------------------------
INSERT INTO `czxy_zhoubao` VALUES ('22', '问我', '年终奖', '王氏企业有限公司', '1524554569', '1524554569', '1524554569', '创立一周年庆典', '123', null);
INSERT INTO `czxy_zhoubao` VALUES ('23', null, 'zzz', 'zzz', '1524834939', '1524834939', '1524834939', 'zzz', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('24', null, 'w', 'w', '1524835289', '1524835289', '1524835289', 'qwe', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('25', null, 'q', 'q', '1524835386', '1524835386', '1524835386', 'qw', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('26', null, 'qw', 'wq', '1524835813', '1524835813', '1524835813', 'qw', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('27', null, 'ce', 'sc', '1524884192', '1524884192', '1524884192', 'dwas', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('28', '王存烨', 'fwed', 'wefds', '1524884487', '1524884487', '1524884487', 'edsaxz', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('29', '王存烨', 'f\'we', ' 位大神', '1524897868', '1524897868', '1524897868', '文案', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('30', null, '123', '123', '1524899057', '1524899057', '1524899057', '123', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('31', null, '杨浩然', '非额外分分为但是', '1541554069', '1541554069', '1541554069', 'の王的我的企鹅娃娃七点七二五的', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('32', null, '养好分俄方的是', '发的违法得分的哇撒反对', '1541554430', '1541554430', '1541554430', '饿的哇的思想', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('33', null, '非二叉树4分大', '34非额外收费分手', '1541555498', '1541555498', '1541555498', '4封为圣人而是', null, null);
INSERT INTO `czxy_zhoubao` VALUES ('34', '杨浩然', '过热的水', '34分为', '1541555757', '1541555757', '1541555757', '4人few洒下', null, null);
