-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.0.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             8.3.0.4770
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for here_help
DROP DATABASE IF EXISTS `here_help`;
CREATE DATABASE IF NOT EXISTS `here_help` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `here_help`;


-- Dumping structure for table here_help.hh_assigned_roles
DROP TABLE IF EXISTS `hh_assigned_roles`;
CREATE TABLE IF NOT EXISTS `hh_assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_user_id_foreign` (`user_id`),
  KEY `assigned_roles_role_id_foreign` (`role_id`),
  CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `hh_roles` (`id`),
  CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `hh_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_assigned_roles: ~5 rows (approximately)
DELETE FROM `hh_assigned_roles`;
/*!40000 ALTER TABLE `hh_assigned_roles` DISABLE KEYS */;
INSERT INTO `hh_assigned_roles` (`id`, `user_id`, `role_id`) VALUES
	(1, 1, 2),
	(2, 2, 1),
	(3, 3, 1),
	(4, 4, 1),
	(5, 5, 1);
/*!40000 ALTER TABLE `hh_assigned_roles` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_categories
DROP TABLE IF EXISTS `hh_categories`;
CREATE TABLE IF NOT EXISTS `hh_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_categories: ~14 rows (approximately)
DELETE FROM `hh_categories`;
/*!40000 ALTER TABLE `hh_categories` DISABLE KEYS */;
INSERT INTO `hh_categories` (`id`, `slug`, `title`, `description`) VALUES
	(1, 'earthquake', 'Earthquake', ''),
	(2, 'flood', 'Flood', ''),
	(3, 'typhoon', 'Typhoon', ''),
	(4, 'landslide', 'Landslide', ''),
	(5, 'fire', 'Fire', ''),
	(6, 'bldg_collapse', 'Structural Collapse', ''),
	(7, 'explosion', 'Explosion', ''),
	(8, 'tsunami', 'Flood', ''),
	(9, 'tornado', 'Tornado', ''),
	(10, 'stampede', 'Stampede', ''),
	(11, 'volc_erupt', 'Volcanic Eruption', ''),
	(12, 'nuclear', 'Radioactive Spill/Leak', ''),
	(13, 'alien', 'Alien Invasion!!!', ''),
	(14, 'asteroid', 'ASTEROID IMPACT - GG na phowezz!~', '');
/*!40000 ALTER TABLE `hh_categories` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_events
DROP TABLE IF EXISTS `hh_events`;
CREATE TABLE IF NOT EXISTS `hh_events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `geobounds` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `est_alive` int(11) NOT NULL,
  `est_dead` int(11) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_events: ~4 rows (approximately)
DELETE FROM `hh_events`;
/*!40000 ALTER TABLE `hh_events` DISABLE KEYS */;
INSERT INTO `hh_events` (`id`, `location`, `geobounds`, `est_alive`, `est_dead`, `category_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '11.3942406,122.4226067', '11.3942406,122.4226067;11.325408, 122.534887;11.276591, 122.483388', 1000, 2, 1, 2, '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(2, '14.5482037,121.0384825', '14.559461, 121.034620;11.325408, 122.534887;14.532792, 121.027239;14.547664, 121.018398', 40000, 300, 1, 3, '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(3, '14.5637389,121.0587385', '14.573334, 121.074188;14.549658, 121.074188;14.551070, 121.049640;14.572835, 121.039341', 20000, 4, 2, 4, '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(4, '14.590279, 120.997799', '14.592854, 121.009987;14.577321, 121.017626;14.577653, 121.000889;14.594681, 120.999172', 2, 49998, 14, 5, '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL);
/*!40000 ALTER TABLE `hh_events` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_messages
DROP TABLE IF EXISTS `hh_messages`;
CREATE TABLE IF NOT EXISTS `hh_messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_messages: ~0 rows (approximately)
DELETE FROM `hh_messages`;
/*!40000 ALTER TABLE `hh_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `hh_messages` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_migrations
DROP TABLE IF EXISTS `hh_migrations`;
CREATE TABLE IF NOT EXISTS `hh_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_migrations: ~1 rows (approximately)
DELETE FROM `hh_migrations`;
/*!40000 ALTER TABLE `hh_migrations` DISABLE KEYS */;
INSERT INTO `hh_migrations` (`migration`, `batch`) VALUES
	('2014_05_09_153745_create_tables', 1);
/*!40000 ALTER TABLE `hh_migrations` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_needs
DROP TABLE IF EXISTS `hh_needs`;
CREATE TABLE IF NOT EXISTS `hh_needs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_needs: ~7 rows (approximately)
DELETE FROM `hh_needs`;
/*!40000 ALTER TABLE `hh_needs` DISABLE KEYS */;
INSERT INTO `hh_needs` (`id`, `slug`, `title`, `description`) VALUES
	(1, 'consume', 'Food and Consumables', ''),
	(2, 'clothes', 'Clothes', ''),
	(3, 'health', 'Health and Amenities', ''),
	(4, 'shelter', 'Shelter', ''),
	(5, 'comms', 'Communication', ''),
	(6, 'elec', 'Electricity', ''),
	(7, 'equipment', 'Equipment and Machinery', '');
/*!40000 ALTER TABLE `hh_needs` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_permissions
DROP TABLE IF EXISTS `hh_permissions`;
CREATE TABLE IF NOT EXISTS `hh_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_permissions: ~0 rows (approximately)
DELETE FROM `hh_permissions`;
/*!40000 ALTER TABLE `hh_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `hh_permissions` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_permission_role
DROP TABLE IF EXISTS `hh_permission_role`;
CREATE TABLE IF NOT EXISTS `hh_permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_foreign` (`permission_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `hh_roles` (`id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `hh_permissions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_permission_role: ~0 rows (approximately)
DELETE FROM `hh_permission_role`;
/*!40000 ALTER TABLE `hh_permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `hh_permission_role` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_provisions
DROP TABLE IF EXISTS `hh_provisions`;
CREATE TABLE IF NOT EXISTS `hh_provisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `need_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.0.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             8.3.0.4770
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for here_help
CREATE DATABASE IF NOT EXISTS `here_help` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `here_help`;

-- Dumping structure for table here_help.hh_provisions
CREATE TABLE IF NOT EXISTS `hh_provisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `need_id` int(10) unsigned NOT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_provisions: ~28 rows (approximately)
DELETE FROM `hh_provisions`;
/*!40000 ALTER TABLE `hh_provisions` DISABLE KEYS */;
INSERT INTO `hh_provisions` (`id`, `need_id`, `event_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 1, 1, '{\\"priorities\\":[{\\"name\\":\\"Food\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":1},{\\"name\\":\\"Infant\\",\\"value\\":0}]},{\\"name\\":\\"Water\\",\\"value\\":1},{\\"name\\":\\"Toiletries\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":0},{\\"name\\":\\"Diapers\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(2, 2, 1, '{\\"priorities\\":[{\\"name\\":\\"Clothing\\",\\"children\\":[{\\"name\\":\\"Basic\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":1},{\\"name\\":\\"Teen\\",\\"value\\":0},{\\"name\\":\\"Adult\\",\\"value\\":1}]},{\\"name\\":\\"Underwear\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":0},{\\"name\\":\\"Teen\\",\\"value\\":0},{\\"name\\":\\"Adult\\",\\"value\\":0}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(3, 3, 1, '{\\"priorities\\":[{\\"name\\":\\"Health\\",\\"children\\":[{\\"name\\":\\"Personnel\\",\\"children\\":[{\\"name\\":\\"Surgeon\\",\\"value\\":0},{\\"name\\":\\"Physician\\",\\"value\\":1},{\\"name\\":\\"Midwife\\",\\"value\\":1},{\\"name\\":\\"Nurse\\",\\"value\\":0},{\\"name\\":\\"Pediatrician\\",\\"value\\":0}]},{\\"name\\":\\"Medicine\\",\\"children\\":[{\\"name\\":\\"For fever\\",\\"value\\":0},{\\"name\\":\\"For colds\\",\\"value\\":0},{\\"name\\":\\"For headache\\",\\"value\\":0},{\\"name\\":\\"For cough\\",\\"value\\":0},{\\"name\\":\\"For diarrhea\\",\\"value\\":0},{\\"name\\":\\"Multivitamins\\",\\"value\\":0},{\\"name\\":\\"Maintenance\\",\\"value\\":0}]},{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Wheelchairs\\",\\"value\\":0},{\\"name\\":\\"Breathing apparatuses\\",\\"value\\":0},{\\"name\\":\\"Canes\\",\\"value\\":0}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(4, 4, 1, '{\\"priorities\\":[{\\"name\\":\\"Shelter\\",\\"children\\":[{\\"name\\":\\"Beddings\\",\\"children\\":[{\\"name\\":\\"Blankets\\",\\"value\\":0},{\\"name\\":\\"Pillows\\",\\"value\\":1},{\\"name\\":\\"Mattresses\\",\\"value\\":1}]},{\\"name\\":\\"Tents\\",\\"value\\":0},{\\"name\\":\\"Evacuation\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(5, 5, 1, '{\\"priorities\\":[{\\"name\\":\\"Communication\\",\\"children\\":[{\\"name\\":\\"Internet\\",\\"value\\":0},{\\"name\\":\\"Signal\\",\\"value\\":1},{\\"name\\":\\"Cellular phones\\",\\"value\\":1},{\\"name\\":\\"Radio/TV\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(6, 6, 1, '{\\"priorities\\":[{\\"name\\":\\"Electricity\\",\\"children\\":[{\\"name\\":\\"Generators\\",\\"value\\":1},{\\"name\\":\\"Batteries\\",\\"children\\":[{\\"name\\":\\"General-purpose\\",\\"value\\":0},{\\"name\\":\\"Automobile\\",\\"value\\":0},{\\"name\\":\\"Cellular phone\\",\\"value\\":1}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(7, 7, 1, '{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Small\\",\\"children\\":[{\\"name\\":\\"Flashlights\\",\\"value\\":0},{\\"name\\":\\"First aid kits\\",\\"value\\":1},{\\"name\\":\\"Cold storage\\",\\"value\\":1},{\\"name\\":\\"Body bags\\",\\"value\\":0},{\\"name\\":\\"Wood saws\\",\\"value\\":0}]},{\\"name\\":\\"Large\\",\\"children\\":[{\\"name\\":\\"Vehicles\\",\\"children\\":[{\\"name\\":\\"Transportation\\",\\"children\\":[{\\"name\\":\\"Amphibious\\",\\"value\\":0},{\\"name\\":\\"Land\\",\\"value\\":1}]},{\\"name\\":\\"Utility\\",\\"children\\":[{\\"name\\":\\"Excavators\\",\\"value\\":0},{\\"name\\":\\"Drillers\\",\\"value\\":0},{\\"name\\":\\"Bulldozers\\",\\"value\\":0}]}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(8, 1, 2, '{\\"priorities\\":[{\\"name\\":\\"Food\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":1},{\\"name\\":\\"Infant\\",\\"value\\":1}]},{\\"name\\":\\"Water\\",\\"value\\":1},{\\"name\\":\\"Toiletries\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":1},{\\"name\\":\\"Diapers\\",\\"value\\":1}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(9, 2, 2, '{\\"priorities\\":[{\\"name\\":\\"Clothing\\",\\"children\\":[{\\"name\\":\\"Basic\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":1},{\\"name\\":\\"Teen\\",\\"value\\":1},{\\"name\\":\\"Adult\\",\\"value\\":0}]},{\\"name\\":\\"Underwear\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":1},{\\"name\\":\\"Teen\\",\\"value\\":0},{\\"name\\":\\"Adult\\",\\"value\\":0}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(10, 3, 2, '{\\"priorities\\":[{\\"name\\":\\"Health\\",\\"children\\":[{\\"name\\":\\"Personnel\\",\\"children\\":[{\\"name\\":\\"Surgeon\\",\\"value\\":1},{\\"name\\":\\"Physician\\",\\"value\\":1},{\\"name\\":\\"Midwife\\",\\"value\\":1},{\\"name\\":\\"Nurse\\",\\"value\\":0},{\\"name\\":\\"Pediatrician\\",\\"value\\":0}]},{\\"name\\":\\"Medicine\\",\\"children\\":[{\\"name\\":\\"For fever\\",\\"value\\":0},{\\"name\\":\\"For colds\\",\\"value\\":0},{\\"name\\":\\"For headache\\",\\"value\\":0},{\\"name\\":\\"For cough\\",\\"value\\":0},{\\"name\\":\\"For diarrhea\\",\\"value\\":1},{\\"name\\":\\"Multivitamins\\",\\"value\\":0},{\\"name\\":\\"Maintenance\\",\\"value\\":0}]},{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Wheelchairs\\",\\"value\\":0},{\\"name\\":\\"Breathing apparatuses\\",\\"value\\":1},{\\"name\\":\\"Canes\\",\\"value\\":0}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(11, 4, 2, '{\\"priorities\\":[{\\"name\\":\\"Shelter\\",\\"children\\":[{\\"name\\":\\"Beddings\\",\\"children\\":[{\\"name\\":\\"Blankets\\",\\"value\\":1},{\\"name\\":\\"Pillows\\",\\"value\\":1},{\\"name\\":\\"Mattresses\\",\\"value\\":0}]},{\\"name\\":\\"Tents\\",\\"value\\":0},{\\"name\\":\\"Evacuation\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(12, 5, 2, '{\\"priorities\\":[{\\"name\\":\\"Communication\\",\\"children\\":[{\\"name\\":\\"Internet\\",\\"value\\":0},{\\"name\\":\\"Signal\\",\\"value\\":0},{\\"name\\":\\"Cellular phones\\",\\"value\\":1},{\\"name\\":\\"Radio/TV\\",\\"value\\":1}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(13, 6, 2, '{\\"priorities\\":[{\\"name\\":\\"Electricity\\",\\"children\\":[{\\"name\\":\\"Generators\\",\\"value\\":0},{\\"name\\":\\"Batteries\\",\\"children\\":[{\\"name\\":\\"General-purpose\\",\\"value\\":1},{\\"name\\":\\"Automobile\\",\\"value\\":0},{\\"name\\":\\"Cellular phone\\",\\"value\\":1}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(14, 7, 2, '{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Small\\",\\"children\\":[{\\"name\\":\\"Flashlights\\",\\"value\\":0},{\\"name\\":\\"First aid kits\\",\\"value\\":0},{\\"name\\":\\"Cold storage\\",\\"value\\":1},{\\"name\\":\\"Body bags\\",\\"value\\":1},{\\"name\\":\\"Wood saws\\",\\"value\\":0}]},{\\"name\\":\\"Large\\",\\"children\\":[{\\"name\\":\\"Vehicles\\",\\"children\\":[{\\"name\\":\\"Transportation\\",\\"children\\":[{\\"name\\":\\"Amphibious\\",\\"value\\":1},{\\"name\\":\\"Land\\",\\"value\\":1}]},{\\"name\\":\\"Utility\\",\\"children\\":[{\\"name\\":\\"Excavators\\",\\"value\\":0},{\\"name\\":\\"Drillers\\",\\"value\\":0},{\\"name\\":\\"Bulldozers\\",\\"value\\":0}]}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(15, 1, 3, '{\\"priorities\\":[{\\"name\\":\\"Food\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":1},{\\"name\\":\\"Infant\\",\\"value\\":0}]},{\\"name\\":\\"Water\\",\\"value\\":1},{\\"name\\":\\"Toiletries\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":0},{\\"name\\":\\"Diapers\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(16, 2, 3, '{\\"priorities\\":[{\\"name\\":\\"Clothing\\",\\"children\\":[{\\"name\\":\\"Basic\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":1},{\\"name\\":\\"Teen\\",\\"value\\":0},{\\"name\\":\\"Adult\\",\\"value\\":0}]},{\\"name\\":\\"Underwear\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":0},{\\"name\\":\\"Teen\\",\\"value\\":1},{\\"name\\":\\"Adult\\",\\"value\\":0}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(17, 3, 3, '{\\"priorities\\":[{\\"name\\":\\"Health\\",\\"children\\":[{\\"name\\":\\"Personnel\\",\\"children\\":[{\\"name\\":\\"Surgeon\\",\\"value\\":0},{\\"name\\":\\"Physician\\",\\"value\\":0},{\\"name\\":\\"Midwife\\",\\"value\\":0},{\\"name\\":\\"Nurse\\",\\"value\\":1},{\\"name\\":\\"Pediatrician\\",\\"value\\":1}]},{\\"name\\":\\"Medicine\\",\\"children\\":[{\\"name\\":\\"For fever\\",\\"value\\":1},{\\"name\\":\\"For colds\\",\\"value\\":1},{\\"name\\":\\"For headache\\",\\"value\\":0},{\\"name\\":\\"For cough\\",\\"value\\":0},{\\"name\\":\\"For diarrhea\\",\\"value\\":0},{\\"name\\":\\"Multivitamins\\",\\"value\\":0},{\\"name\\":\\"Maintenance\\",\\"value\\":0}]},{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Wheelchairs\\",\\"value\\":0},{\\"name\\":\\"Breathing apparatuses\\",\\"value\\":1},{\\"name\\":\\"Canes\\",\\"value\\":0}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(18, 4, 3, '{\\"priorities\\":[{\\"name\\":\\"Shelter\\",\\"children\\":[{\\"name\\":\\"Beddings\\",\\"children\\":[{\\"name\\":\\"Blankets\\",\\"value\\":0},{\\"name\\":\\"Pillows\\",\\"value\\":0},{\\"name\\":\\"Mattresses\\",\\"value\\":0}]},{\\"name\\":\\"Tents\\",\\"value\\":0},{\\"name\\":\\"Evacuation\\",\\"value\\":1}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(19, 5, 3, '{\\"priorities\\":[{\\"name\\":\\"Communication\\",\\"children\\":[{\\"name\\":\\"Internet\\",\\"value\\":0},{\\"name\\":\\"Signal\\",\\"value\\":0},{\\"name\\":\\"Cellular phones\\",\\"value\\":1},{\\"name\\":\\"Radio/TV\\",\\"value\\":1}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(20, 6, 3, '{\\"priorities\\":[{\\"name\\":\\"Electricity\\",\\"children\\":[{\\"name\\":\\"Generators\\",\\"value\\":0},{\\"name\\":\\"Batteries\\",\\"children\\":[{\\"name\\":\\"General-purpose\\",\\"value\\":1},{\\"name\\":\\"Automobile\\",\\"value\\":1},{\\"name\\":\\"Cellular phone\\",\\"value\\":0}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(21, 7, 3, '{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Small\\",\\"children\\":[{\\"name\\":\\"Flashlights\\",\\"value\\":0},{\\"name\\":\\"First aid kits\\",\\"value\\":1},{\\"name\\":\\"Cold storage\\",\\"value\\":0},{\\"name\\":\\"Body bags\\",\\"value\\":0},{\\"name\\":\\"Wood saws\\",\\"value\\":1}]},{\\"name\\":\\"Large\\",\\"children\\":[{\\"name\\":\\"Vehicles\\",\\"children\\":[{\\"name\\":\\"Transportation\\",\\"children\\":[{\\"name\\":\\"Amphibious\\",\\"value\\":0},{\\"name\\":\\"Land\\",\\"value\\":1}]},{\\"name\\":\\"Utility\\",\\"children\\":[{\\"name\\":\\"Excavators\\",\\"value\\":0},{\\"name\\":\\"Drillers\\",\\"value\\":1},{\\"name\\":\\"Bulldozers\\",\\"value\\":0}]}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(22, 1, 4, '{\\"priorities\\":[{\\"name\\":\\"Food\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":1},{\\"name\\":\\"Infant\\",\\"value\\":0}]},{\\"name\\":\\"Water\\",\\"value\\":1},{\\"name\\":\\"Toiletries\\",\\"children\\":[{\\"name\\":\\"General\\",\\"value\\":0},{\\"name\\":\\"Diapers\\",\\"value\\":1}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(23, 2, 4, '{\\"priorities\\":[{\\"name\\":\\"Clothing\\",\\"children\\":[{\\"name\\":\\"Basic\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":0},{\\"name\\":\\"Child\\",\\"value\\":0},{\\"name\\":\\"Teen\\",\\"value\\":0},{\\"name\\":\\"Adult\\",\\"value\\":1}]},{\\"name\\":\\"Underwear\\",\\"children\\":[{\\"name\\":\\"Infant\\",\\"value\\":1},{\\"name\\":\\"Child\\",\\"value\\":1},{\\"name\\":\\"Teen\\",\\"value\\":0},{\\"name\\":\\"Adult\\",\\"value\\":0}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(24, 3, 4, '{\\"priorities\\":[{\\"name\\":\\"Health\\",\\"children\\":[{\\"name\\":\\"Personnel\\",\\"children\\":[{\\"name\\":\\"Surgeon\\",\\"value\\":0},{\\"name\\":\\"Physician\\",\\"value\\":0},{\\"name\\":\\"Midwife\\",\\"value\\":1},{\\"name\\":\\"Nurse\\",\\"value\\":1},{\\"name\\":\\"Pediatrician\\",\\"value\\":0}]},{\\"name\\":\\"Medicine\\",\\"children\\":[{\\"name\\":\\"For fever\\",\\"value\\":0},{\\"name\\":\\"For colds\\",\\"value\\":0},{\\"name\\":\\"For headache\\",\\"value\\":0},{\\"name\\":\\"For cough\\",\\"value\\":0},{\\"name\\":\\"For diarrhea\\",\\"value\\":0},{\\"name\\":\\"Multivitamins\\",\\"value\\":0},{\\"name\\":\\"Maintenance\\",\\"value\\":0}]},{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Wheelchairs\\",\\"value\\":1},{\\"name\\":\\"Breathing apparatuses\\",\\"value\\":0},{\\"name\\":\\"Canes\\",\\"value\\":0}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(25, 4, 4, '{\\"priorities\\":[{\\"name\\":\\"Shelter\\",\\"children\\":[{\\"name\\":\\"Beddings\\",\\"children\\":[{\\"name\\":\\"Blankets\\",\\"value\\":1},{\\"name\\":\\"Pillows\\",\\"value\\":1},{\\"name\\":\\"Mattresses\\",\\"value\\":1}]},{\\"name\\":\\"Tents\\",\\"value\\":0},{\\"name\\":\\"Evacuation\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(26, 5, 4, '{\\"priorities\\":[{\\"name\\":\\"Communication\\",\\"children\\":[{\\"name\\":\\"Internet\\",\\"value\\":1},{\\"name\\":\\"Signal\\",\\"value\\":0},{\\"name\\":\\"Cellular phones\\",\\"value\\":0},{\\"name\\":\\"Radio/TV\\",\\"value\\":0}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(27, 6, 4, '{\\"priorities\\":[{\\"name\\":\\"Electricity\\",\\"children\\":[{\\"name\\":\\"Generators\\",\\"value\\":1},{\\"name\\":\\"Batteries\\",\\"children\\":[{\\"name\\":\\"General-purpose\\",\\"value\\":0},{\\"name\\":\\"Automobile\\",\\"value\\":0},{\\"name\\":\\"Cellular phone\\",\\"value\\":0}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(28, 7, 4, '{\\"priorities\\":[{\\"name\\":\\"Equipment\\",\\"children\\":[{\\"name\\":\\"Small\\",\\"children\\":[{\\"name\\":\\"Flashlights\\",\\"value\\":0},{\\"name\\":\\"First aid kits\\",\\"value\\":1},{\\"name\\":\\"Cold storage\\",\\"value\\":0},{\\"name\\":\\"Body bags\\",\\"value\\":1},{\\"name\\":\\"Wood saws\\",\\"value\\":0}]},{\\"name\\":\\"Large\\",\\"children\\":[{\\"name\\":\\"Vehicles\\",\\"children\\":[{\\"name\\":\\"Transportation\\",\\"children\\":[{\\"name\\":\\"Amphibious\\",\\"value\\":0},{\\"name\\":\\"Land\\",\\"value\\":0}]},{\\"name\\":\\"Utility\\",\\"children\\":[{\\"name\\":\\"Excavators\\",\\"value\\":0},{\\"name\\":\\"Drillers\\",\\"value\\":0},{\\"name\\":\\"Bulldozers\\",\\"value\\":0}]}]}]}]}]}', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL);
/*!40000 ALTER TABLE `hh_provisions` ENABLE KEYS */;

-- Dumping structure for table here_help.hh_roles
DROP TABLE IF EXISTS `hh_roles`;
CREATE TABLE IF NOT EXISTS `hh_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_roles: ~2 rows (approximately)
DELETE FROM `hh_roles`;
/*!40000 ALTER TABLE `hh_roles` DISABLE KEYS */;
INSERT INTO `hh_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'User', 'Ordinary User', '2014-05-10 08:02:43', '2014-05-10 08:02:43'),
	(2, 'Administrator', 'The administrator who can do everything.', '2014-05-10 08:02:43', '2014-05-10 08:02:43');
/*!40000 ALTER TABLE `hh_roles` ENABLE KEYS */;


-- Dumping structure for table here_help.hh_users
DROP TABLE IF EXISTS `hh_users`;
CREATE TABLE IF NOT EXISTS `hh_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contacts` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table here_help.hh_users: ~5 rows (approximately)
DELETE FROM `hh_users`;
/*!40000 ALTER TABLE `hh_users` DISABLE KEYS */;
INSERT INTO `hh_users` (`id`, `username`, `password`, `email`, `first_name`, `middle_name`, `last_name`, `position`, `contacts`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'awkwardusername', '$2y$10$mlObJE5corX6n.F7nkD6B.TppBT0IP8brPcsq..lYd1VNVP3amz8a', 'awkwardusername@gmail.com', 'Awkward', 'User', 'Name', 'Disaster Manager', '09062713651', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(2, 'Temoto-kun', '$2y$10$zBeUTj2nDJyKtbpoM5qArOFbQ4BRg5oAmmJ9ccyu5WTcQOdIbmkpO', 'kiirofuriku@gmail.com', 'Tem', 'Oto', 'Kun', 'Barangay Captain', '09394813792', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(3, 'engJEHneer', '$2y$10$.APrRu0m2MNJ11yEHTVYJ.4mRAZ5O2j3v1/CuQjit8.EDqFm49sg6', 'tabing.jeremiah@gmail.com', 'Jeremiah', 'A', 'Tabing', 'Barangay Captain', '09272276107', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(4, 'ichi-san', '$2y$10$/akMyCItm8EUJHkDM83hMO3HzCe6C.t5pKpLdJhjiGz5AxCLJj6ry', 'ichi-san@gmail.com', 'Ichi', 'Ichi', 'San', 'Barangay Captain', '09272276107', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL),
	(5, 'ni-san', '$2y$10$MiH32c5R6Zx6hh3jOEB3MOWlTrnpo9oJKmvBKzQhbuOfepWtvJk32', 'ni-san@gmail.com', 'Ni', 'Ni', 'San', 'Barangay Captain', '09272276107', '2014-05-10 08:02:43', '2014-05-10 08:02:43', NULL);
/*!40000 ALTER TABLE `hh_users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
