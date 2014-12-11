-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 12 jun 2014 kl 13:43
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `forgedfashion`
--

DELIMITER $$
--
-- Procedurer
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DamByxorLista`()
begin

select *
from product
where perscategoryID = 2 AND clothcategoryID = 2;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DamLista`()
begin

select *
from product
where perscategoryID = 2;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DamSkorLista`()
begin

select *
from product
where perscategoryID = 2 AND clothcategoryID = 3;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DamTrojaLista`()
begin

select *
from product
where perscategoryID = 2 AND clothcategoryID = 1;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `HerrByxorLista`()
begin

select *
from product
where perscategoryID = 3 AND clothcategoryID = 2;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `HerrLista`()
begin

select *
from product
where perscategoryID = 3;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `HerrSkorLista`()
begin

select *
from product
where perscategoryID = 3 AND clothcategoryID = 3;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `HerrTrojaLista`()
begin

select *
from product
where perscategoryID = 3 AND clothcategoryID = 1;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `NyhetsLista`()
begin

select *
from product
where perscategoryID = 1;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ReaLista`()
begin

select *
from product
where perscategoryID = 4;

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tabellstruktur `clothingcategory`
--

CREATE TABLE IF NOT EXISTS `clothingcategory` (
  `clothcategoryID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(15) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`clothcategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `clothingcategory`
--

INSERT INTO `clothingcategory` (`clothcategoryID`, `category`) VALUES
(1, 'Tröjor'),
(2, 'Byxor'),
(3, 'Skor');

-- --------------------------------------------------------

--
-- Tabellstruktur `personcategory`
--

CREATE TABLE IF NOT EXISTS `personcategory` (
  `perscategoryID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`perscategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=5 ;

--
-- Dumpning av Data i tabell `personcategory`
--

INSERT INTO `personcategory` (`perscategoryID`, `type`) VALUES
(1, 'Nyheter'),
(2, 'Dam'),
(3, 'Herr'),
(4, 'REA');

-- --------------------------------------------------------

--
-- Tabellstruktur `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(25) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `price` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `description` varchar(150) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `sizeID` int(10) unsigned DEFAULT NULL,
  `clothcategoryID` int(10) unsigned DEFAULT NULL,
  `perscategoryID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `sizeID` (`sizeID`,`clothcategoryID`,`perscategoryID`),
  KEY `sizeID_2` (`sizeID`),
  KEY `clothcategoryID` (`clothcategoryID`),
  KEY `perscategoryID` (`perscategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=43 ;

--
-- Dumpning av Data i tabell `product`
--

INSERT INTO `product` (`productID`, `name`, `price`, `description`, `sizeID`, `clothcategoryID`, `perscategoryID`) VALUES
(1, 'Trikalinne', '99:50 :-', 'Ett figurnära linne i mjuk, stretchig trikå.', NULL, 1, 2),
(2, 'Linne med tryck', '129 :-', 'Ett linne i melerad trikå med tryck fram. Linnet har rå kant kring ärmhålen.', NULL, 1, 2),
(3, 'Stretchbyxa', '299 :-', 'Ett par ankellånga byxor i stretchig bommulskvalitet. Byxorna har sidfickor med dragkedja samt dold dragkedja i sidan.', NULL, 2, 2),
(4, 'Kortarmad bommulsskjorta', '99 :-', 'En kortärmad bommulsskjorta i luftig slubkvalitet. Skjortan har bröstfickor med lock och knapp.', NULL, 1, 2),
(5, 'T-shirt med tryck', '129 :-', 'En t-shirt i bommulstrikå med tryck fram.', NULL, 1, 3),
(6, 'Skinny low jeans', '599 :-', 'Ett par 5-ficksjoggers med hårt tvättat denimtyg. Jeansen har extra smala ben och låg midja. Dold dragsko i midjan och knappgylf.', NULL, 2, 3),
(7, 'Slim low jeans', '499 :-', 'Ett par 5-ficksjeans i tvättad denim med smal passform, smala ben och låg midja. Knappgylf.', NULL, 2, 3),
(8, 'Ladersandaler', '299 :-', 'Ett par remsandaler i läder. Regelbara remmar kring vristen. Gummisula.', NULL, 3, 2),
(9, 'Pumps', '199 :-', 'Ett par pumps i mockaimitation. Klack 7,5 cm. Gummisula.', NULL, 3, 2),
(10, 'Derbyskor', '299 :-', 'Ett par derbyskor i läderimitation med öppen snörning.', NULL, 3, 3),
(11, 'Sweatshirt', '99 :-', 'En långärmad tröja i melerad sweatshirtkvalitet med tryck fram. Mudd nertil och vid ärmslut. Mjuk, borstad insida.', NULL, 1, 4),
(12, 'Skinny low ankle jeans', '299 :-', 'Ett par 5-ficksjeans i stretchig denim med extra smala, ankellånga ben och låg midja.', NULL, 2, 4),
(13, 'Sneakers', '139 :-', 'Ett par sneakers i canvas med snörning upptikk. Gummisula.', NULL, 3, 1),
(14, 'Blus', '129 :-', 'En ärmlös, v-ringad blus i transpaprent, vävd kvalitet. Blusen har bröstfickor och knäppning framtill.', NULL, 1, 1),
(15, 'Topp med paljetter', '99 :-', 'Topp med rund halsringning. V-formad infällning med paljetter, kort ärm med uppvikt kant, sprund i sidan och söm mitt bak. Bomull med struktur.', NULL, 1, 1),
(16, 'Loafers', '249 :-', 'Ett par loafers i mockaimitation. De har dekorativa knytband upptill. Gummisula.', NULL, 3, 1),
(17, 'Satinlinne', '199 :-', 'Ett v-ringat linne i satin med smala axelband. Linnet är djupt v-ringat bak med dekorativt, tvärgående band.', NULL, 1, 1),
(18, 'Monstrat trikalinne', '139 :-', 'Ett långt, lätt utställt linne i skir trikå.', NULL, 1, 1),
(19, 'Chinosshorts', '189 :-', 'Ett par 5-ficksshorts i tvättad bomullstwill.', NULL, 2, 3),
(20, 'Jeansshorts', '299 :-', 'Ett par 5-ficksshorts i tvättad denim med fastsytt uppvik vid benslut. Knappgylf.', NULL, 2, 1),
(21, 'Chinos regular fit', '129 :-', 'Ett par chinos i bomullskvalitet. De har sidfickor och passpoalfickor med knäppning bak. Knappgylf. Regular fit.', NULL, 2, 4),
(22, 'Slip in-sandaletter', '179 :-', 'Ett par slip in-sandaletter i läderimitation. Gummisula. Klack 8 cm.', NULL, 3, 1),
(23, 'Satinsandaler', '249 :-', 'Ett par satinsandaler med dekorativa chiffongblommor fram. Knäppning kring vristen. Gummisula.', NULL, 3, 2),
(25, 'Superstretchbyxa', '99 :-', 'Ett par 5-ficksbyxor i superstretchig, tvättad twill. Byxorna har smal passform, smala ben och normalhög midja.', NULL, 2, 4),
(26, 'Bommulsblus', '139 :-', 'En lätt figursydd blus i skir bomullskvalitet med pärlemorknappar. Blusen har långa ärmar som kan fästas upp med slejf och knapp.', NULL, 1, 4),
(27, 'Mjukisbyxor', '199 :-', 'Mjukisbyxor i luftigt bommulstyg. Fickor framtil. Tryck vid sidan av benet.', NULL, 2, 2),
(28, 'Highwaist jeans', '249 :-', 'Superstretchiga jeggings med smal passform, extra hög midja och fickor bak. Byxorna ser vid första anblick små ut men eftersom de är så stretchiga anp', NULL, 2, 2),
(29, 'Munkjacka', '299 :-', 'En munkjacka i sweatshirtkvalitet. Jackan har trikåfodrad huva med dragsko samt dragkedja fram. Sidfickor. Mudd nedtill och vid ärmslut.', NULL, 1, 3),
(30, 'Sweatshirt med tryck', '189 :-', 'En långärmad sweatshirt med tryck fram. Mudd nedtill och vid ärmslut. ', NULL, 1, 3),
(31, 'Cardigan', '249 :-', 'En cardigan i melerad sweatshirtkvalitet. Den har sjalkrage, knäppning fram samt sidfickor. Mudd nedtill och vid ärmslut.', NULL, 1, 3),
(32, 'Kostymbyxa', '399 :-', 'tt par kostymbyxor i linne- och bomullsblandning. Byxorna har sidfickor och passpoalfickor med knapp bak. ', NULL, 2, 3),
(33, 'Flip-flops', '99 :-', 'Ett par flip-flops med gummirem och tryckt motiv. Präglad gummisula.', NULL, 3, 3),
(34, 'Tygsneakers', '179 :-', 'Ett par låga tygsneakers med snörning fram. Gummisula.', NULL, 3, 2),
(35, 'Chinosshorts', '199 :-', 'Ett par shorts i tvättad bomullstwill. Shortsen har sidfickor och en fuskpasspoalficka bak. Fastsytt uppvik vid benslut.', NULL, 2, 2),
(36, 'Stickad troja', '199 :-', 'En stickad tröja med djup v-ringning fram och bak. Trekvartslång ärm.', NULL, 1, 2),
(37, 'Kavaj med metallicyta', '399 :-', 'En jerseykavaj med strukturmönstrad metallicyta. Kavajen har framfickor och saknar knäppning. ', NULL, 1, 1),
(38, 'Vid trikå byxa', '199 :-', 'Ett par vida byxor i glansig trikå med tryckt mönster. Byxorna har smock i midjan.', NULL, 2, 1),
(39, 'Läderskor', '499 :-', 'Ett par oxfordskor i läder med överdel i vävd kvalitet. Skorna har sluten snörning och grov gummisula. ', NULL, 3, 1),
(40, 'Tröja med skorstenskrage', '199 :-', 'En långärmad tröja i sweatshirtkvalitet. Tröjan har quiltat axelparti och skorstenskrage med dragsko.', NULL, 1, 4),
(41, 'Skinny Low Ankle Jeans', '199 :-', 'Ett par 5-ficksjeans i stretchig denim med extra smala, ankellånga ben och låg midja.', NULL, 2, 4),
(42, 'Slip in-sandaletter', '99 :-', 'Ett par slip in-sandaletter i läderimitation. Gummisula. Klack 8 cm.', NULL, 3, 4);

-- --------------------------------------------------------

--
-- Tabellstruktur `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `sizeID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`sizeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

--
-- Dumpning av Data i tabell `size`
--

INSERT INTO `size` (`sizeID`, `size`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL');

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_1` FOREIGN KEY (`sizeID`) REFERENCES `size` (`sizeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_product_2` FOREIGN KEY (`clothcategoryID`) REFERENCES `clothingcategory` (`clothcategoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_product_3` FOREIGN KEY (`perscategoryID`) REFERENCES `personcategory` (`perscategoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
