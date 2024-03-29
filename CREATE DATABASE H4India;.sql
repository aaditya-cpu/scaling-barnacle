CREATE DATABASE H4India;
CREATE TABLE `Associate` (
	`ID` INT(20) AUTO_INCREMENT,
	`NAME` TEXT(40) CHARACTER SET ascii COLLATE ascii_bin,
	`ADDRESS` VARCHAR(100) CHARACTER SET ascii COLLATE ascii_bin,
	`PHONE` INT(15) zerofill DEFAULT '1234567890',
	`EMAIL` VARCHAR(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci,
	`EXPERIENCE` INT(3),
	`QUALIFICATION` INT(20),
	`Actions` VARCHAR(20),
	PRIMARY KEY (`ID`,`PHONE`)
) ENGINE=InnoDB;
CREATE TABLE `customers` (
	`ID` INT(20) AUTO_INCREMENT,
	`CNAME` TEXT(40) CHARACTER SET ascii COLLATE ascii_bin,
	`CEMAILID` VARCHAR(100) CHARACTER SET ascii COLLATE ascii_bin,
	`STATUS` INT(15) zerofill DEFAULT '1234567890',
	`FILE` VARCHAR(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci,
	`EDIT` INT(3),
	`NOTIFY` VARCHAR(20),
	PRIMARY KEY (`ID`,`STATUS`)
) ENGINE=InnoDB;
