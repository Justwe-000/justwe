/*
 Navicat MySQL Data Transfer

 Source Server         : justwe
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : sissy

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 15/08/2019 20:24:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for club
-- ----------------------------
DROP TABLE IF EXISTS `club`;
CREATE TABLE `club`  (
  `clubID` int(11) NOT NULL,
  `clubName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubDes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubPrize1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubPrize1Point` int(8) NULL DEFAULT NULL,
  `clubBuff1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubPrize2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubPrize2Point` int(8) NULL DEFAULT NULL,
  `clubBuff2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `clubLevel` int(8) NULL DEFAULT NULL,
  PRIMARY KEY (`clubID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of club
-- ----------------------------
INSERT INTO `club` VALUES (1, '脱衣舞社', '是时候展示你性感的身体了。', './static/img/setu1.jpg', '将所有任务要求降低8%', 8, '做任务或考试时只穿性感内裤和胸罩。', '将所有任务要求降低8%', 8, '做任务或考试时穿长筒袜和高跟鞋。.', 1);

-- ----------------------------
-- Table structure for friend
-- ----------------------------
DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend`  (
  `friendID` int(8) NOT NULL AUTO_INCREMENT,
  `friendName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendDes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendPrize1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendPrize1point` int(255) NULL DEFAULT NULL,
  `friendBuff1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendBuff1point` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendPrize2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendPrize2point` int(255) NULL DEFAULT NULL,
  `friendBuff2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `friendBuff2point` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`friendID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of friend
-- ----------------------------
INSERT INTO `friend` VALUES (1, '佐伊', '佐伊是这所大学二年级调教师专业的学生，因此她需要为她的口交和肛交课程挑选一个姬友。幸运的是，她已经注意到了你，并希望你在今年余下的时间里成为她的性玩具。', './static/img/setu1.jpg', '使用嘴穴和菊穴课程任务会给你额外的1学分。', 1, '你的所有使用嘴穴和菊穴课程任务的要求提高25%。', '25', '使用嘴穴和菊穴课程任务会给你额外的1学分。', 1, '你的所有使用嘴穴和菊穴课程任务的要求提高25%。', '25');

-- ----------------------------
-- Table structure for lesson
-- ----------------------------
DROP TABLE IF EXISTS `lesson`;
CREATE TABLE `lesson`  (
  `lessonID` int(8) NOT NULL AUTO_INCREMENT,
  `lessonName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lessonTime1` int(8) NULL DEFAULT NULL,
  `lessonTime2` int(8) NULL DEFAULT NULL,
  `lessonDes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `prelessonID1` int(8) UNSIGNED NULL DEFAULT NULL,
  `prelessonID2` int(8) UNSIGNED NULL DEFAULT NULL,
  `lessonimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lessondegree` int(8) NULL DEFAULT NULL,
  `lessonTask1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lessonTask2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lessonExam1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lessonExam2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lessonPoint` int(255) NULL DEFAULT NULL,
  `lessonTask1time1` time(6) NULL DEFAULT NULL,
  `lessonTask2time1` time(6) NULL DEFAULT NULL,
  `lessonExam1time1` time(6) NULL DEFAULT NULL,
  `lessonExam2time1` time(6) NULL DEFAULT NULL,
  `lessonTask1time2` time(6) NULL DEFAULT NULL,
  `lessonTask2time2` time(6) NULL DEFAULT NULL,
  `lessonExam1time2` time(6) NULL DEFAULT NULL,
  `lessonExam2time2` time(6) NULL DEFAULT NULL,
  PRIMARY KEY (`lessonID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 105 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of lesson
-- ----------------------------
INSERT INTO `lesson` VALUES (101, '入门液体学', 1, 5, '你将学会使用不同的液体', 101, 101, './static/img/setu1.jpg', 1, '111', '111', '111', '111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `lesson` VALUES (102, '入门液体学', 1, 5, '你将学会使用不同的液体', 0, 0, './static/img/setu1.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `lesson` VALUES (103, '入门液体学', 1, 5, '你将学会使用不同的液体', 0, 0, './static/img/setu1.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `lesson` VALUES (104, '入门液体学', 1, 5, '你将学会使用不同的液体', 0, 0, './static/img/setu1.jpg', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for major
-- ----------------------------
DROP TABLE IF EXISTS `major`;
CREATE TABLE `major`  (
  `majorID` int(11) NOT NULL AUTO_INCREMENT,
  `majorName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `majorDes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `majorImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `majorDegree` int(8) NULL DEFAULT NULL,
  `majorPrelessonID1` int(8) NULL DEFAULT NULL,
  `majorPrelessonID2` int(8) NULL DEFAULT NULL,
  `majorPrelessonID3` int(8) NULL DEFAULT NULL,
  `majorExam1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `majorExam2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `majorExam3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `majorExam1time` time(6) NULL DEFAULT NULL,
  `majorExam2time` time(6) NULL DEFAULT NULL,
  `majorExam3time` time(6) NULL DEFAULT NULL,
  `majorType` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`majorID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of major
-- ----------------------------
INSERT INTO `major` VALUES (1, 'XX专业', '干嘛的干嘛的', './static/img/setu1.jpg', 1, 101, 102, 103, '佩戴肛塞(XL码)4小时，然后用假阳具(XL码)操自己的菊穴 40 分钟 ，直到你获得高潮。', '佩戴肛塞(L码) 1 天 。', ' 在 1 天 内用假阳具(XL码)操自己的菊穴，让自己获得 2 次 （前列腺/菊穴）高潮。', NULL, NULL, NULL, NULL);
INSERT INTO `major` VALUES (2, 'XX专业', '干嘛的干嘛的', './static/img/setu1.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `major` VALUES (3, 'XX专业', '干嘛的干嘛的', './static/img/setu1.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `major` VALUES (4, 'XX专业', '干嘛的干嘛的', './static/img/setu1.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `major` VALUES (5, 'XX专业', '干嘛的干嘛的', './static/img/setu1.jpg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for punishment
-- ----------------------------
DROP TABLE IF EXISTS `punishment`;
CREATE TABLE `punishment`  (
  `punishID` int(8) NOT NULL,
  `punishName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `punishLevel` int(8) NULL DEFAULT NULL,
  `punishDes` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `punishimg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`punishID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of punishment
-- ----------------------------
INSERT INTO `punishment` VALUES (1, '贞操管理', 1, '你被迫戴上4小时贞操笼。', './static/img/setu1.jpg');
INSERT INTO `punishment` VALUES (2, '贞操管理', 1, '你被迫戴上4小时贞操笼。', './static/img/setu1.jpg');
INSERT INTO `punishment` VALUES (3, '贞操管理', 1, '你被迫戴上4小时贞操笼。', './static/img/setu1.jpg');
INSERT INTO `punishment` VALUES (4, '贞操管理', 2, '你被迫戴上4小时贞操笼。', './static/img/setu1.jpg');
INSERT INTO `punishment` VALUES (5, '贞操管理', 1, '你被迫戴上4小时贞操笼。', './static/img/setu1.jpg');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `studentID` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `studentMajor` int(8) UNSIGNED NULL DEFAULT 0,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `studentMark` int(8) NULL DEFAULT 0,
  `punishNum` int(8) NULL DEFAULT 0,
  `lessonCount` int(8) NULL DEFAULT 0,
  `clubCount` int(8) NULL DEFAULT 0,
  `friendsCount` int(8) NULL DEFAULT 0,
  PRIMARY KEY (`studentID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (2, 'admin', 1, '1', 0, 0, 1, 0, 0);

-- ----------------------------
-- Table structure for studentselectclub
-- ----------------------------
DROP TABLE IF EXISTS `studentselectclub`;
CREATE TABLE `studentselectclub`  (
  `eventID` int(8) NOT NULL,
  `studentID` int(8) NULL DEFAULT NULL,
  `clubID` int(8) NULL DEFAULT NULL,
  PRIMARY KEY (`eventID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for studentselectfrirend
-- ----------------------------
DROP TABLE IF EXISTS `studentselectfrirend`;
CREATE TABLE `studentselectfrirend`  (
  `eventID` int(8) NOT NULL,
  `studentID` int(8) NULL DEFAULT NULL,
  `friendID` int(8) NULL DEFAULT NULL,
  PRIMARY KEY (`eventID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for studentselectlesson
-- ----------------------------
DROP TABLE IF EXISTS `studentselectlesson`;
CREATE TABLE `studentselectlesson`  (
  `eventID` int(8) NOT NULL AUTO_INCREMENT,
  `studentID` int(8) NULL DEFAULT NULL,
  `lessonID` int(11) NULL DEFAULT NULL,
  `ispassed` int(8) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  PRIMARY KEY (`eventID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of studentselectlesson
-- ----------------------------
INSERT INTO `studentselectlesson` VALUES (1, 2, 101, NULL);
INSERT INTO `studentselectlesson` VALUES (2, 2, 101, NULL);

-- ----------------------------
-- Table structure for studentselectpunish
-- ----------------------------
DROP TABLE IF EXISTS `studentselectpunish`;
CREATE TABLE `studentselectpunish`  (
  `eventID` int(8) NOT NULL,
  `studentID` int(8) NULL DEFAULT NULL,
  `punishID` int(8) NULL DEFAULT NULL,
  PRIMARY KEY (`eventID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

SET FOREIGN_KEY_CHECKS = 1;
