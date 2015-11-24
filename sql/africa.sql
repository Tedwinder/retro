

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Africa`;
CREATE TABLE `Africa` (
  `PicID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Pic` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Temperature` int(7) DEFAULT NULL,
  `Description` text,
  PRIMARY KEY (`PicID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(1,	'egypt',	'Egypt',	100,	'Before going to the pyramids, we stopped by Alexandria');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(2,	'egypt',	'Egypt',	100,	'Our first pose in front of the pyramids');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(3,	'egypt',	'Egypt',	100,	'Spectacular vista. . . ');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(4,	'egypt',	'Egypt',	100,	'Posing in front of the pyramids');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(5,	'egypt',	'Egypt',	100,	'Posing in front of the pyramids');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(6,	'egypt',	'Egypt',	100,	'Posing in front of the pyramids');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(7,	'egypt',	'Egypt',	100,	'Posing in front of the pyramids');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(8,	'egypt',	'Egypt',	100,	'The Sphinx on a clear day');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(9,	'egypt',	'Egypt',	100,	'Gift Shop');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(10,	'egypt',	'Egypt',	100,	'The Sphinx on a clear day');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(11,	'egypt',	'Egypt',	100,	'The Sphinx on a clear day');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(12,	'egypt',	'Egypt',	100,	'Pharoahs and Gods');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(13,	'egypt',	'Egypt',	100,	'More Pharoahs and Gods');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(14,	'egypt',	'Egypt',	100,	'Even More Pharoahs and Gods');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(15,	'egypt',	'Egypt',	100,	'Time for a break');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(16,	'egypt',	'Egypt',	100,	'Time for a break');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(17,	'egypt',	'Egypt',	100,	'This is a lot more than a pile of sand folks');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(18,	'egypt',	'Egypt',	100,	'Time for a meal');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(19,	'egypt',	'Egypt',	100,	'This was the first hotel we stayed at. I liked the spiral staircase.');
INSERT INTO `Africa` (`PicID`, `Pic`, `Location`, `Temperature`, `Description`) VALUES
(20,	'egypt',	'Egypt',	100,	'This was a tenth century palace');











