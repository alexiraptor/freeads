# ************************************************************
# Sequel Ace SQL dump
# Version 3024
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.0.23)
# Database: freeads
# Generation Time: 2021-03-07 21:32:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ads`;

CREATE TABLE `ads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` int NOT NULL,
  `city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `surface` int NOT NULL,
  `room` int NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_category_id_foreign` (`category_id`),
  CONSTRAINT `ads_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;

INSERT INTO `ads` (`id`, `title`, `image`, `description`, `price`, `street`, `postcode`, `city`, `surface`, `room`, `category_id`, `created_at`, `updated_at`)
VALUES
	(29,'Villa Bay View','1615146247.jpg','Pr??sentation d\'un complexe de luxe et personnel dans un emplacement de choix par un d??veloppeur r??sidentiel de premier plan, Location Development. Con??u par C??sar Molina. Cette r??sidence vraiment exceptionnelle et de grande qualit?? incarne le style de vie de la Floride, ?? l\'int??rieur comme ?? l\'ext??rieur. Le plan d\'??tage spacieux met en ??vidence un style de vie int??rieur / ext??rieur avec de grandes terrasses, des zones de divertissement ext??rieures et plusieurs chambres, comprenant un appartement principal et une suite d\'invit??s s??par??e. Une suite de fonctionnalit??s et de commodit??s soigneusement planifi??es qui offriront des espaces incroyables pour se d??tendre, se divertir et d??couvrir le meilleur de la vie. Domotique compl??te, salle ?? vin, salle multim??dia, bureau d??di??, cuisine ext??rieure et foyer ext??rieur, piscine pour la nage en longueur, salle de gym, hammam spa avec hammam et programme d\'hydroth??rapie. Le garage peut accueillir jusqu\'?? 8 voitures pour un collectionneur passionn??.',647890.00,'Bay St.',13920,'Miami',958,6,2,'2021-03-07 11:55:23','2021-03-07 19:44:07'),
	(30,'Villa City Side','1615146349.jpg','Situ?? au c??ur du bosquet et achev?? en 2017, ce chef-d\'??uvre moderne a tout pour plaire. Des espaces de divertissement surdimensionn??s, une abondance de lumi??re naturelle, de hauts plafonds et un luxe moderne couvrent cette maison de 6 chambres et 5/2 salles de bains. La cuisine est un r??ve ??picurien avec un ??lot de cuisine, des appareils haut de gamme et un espace de rangement spacieux mais bien cach??. Divertissez vos invit??s ?? l\'int??rieur ou ?? l\'ext??rieur au bord de la piscine, de la cuisine ext??rieure et de la terrasse couverte. Profitez d\'un cadre tranquille tout en ??tant ?? distance de marche de certaines des meilleures ??coles, boutiques et restaurants de Miami. * La maison est occup??e par le locataire jusqu\'en juin.',670700.00,'View St.',13900,'Miami',1076,7,2,'2021-03-07 11:57:15','2021-03-07 19:45:49'),
	(31,'Villa river side','1615146870.jpg','Cet appartement a ??t?? m??ticuleusement con??u avec des ??l??ments contemporains et un design d??cloisonn??. Les suites de deux chambres sont toutes deux baign??es de lumi??re naturelle et d??cor??es dans des tons neutres. Les deux salles de bains sont ??quip??es de marbre de Carrare, de sanitaires Catalano et de luminaires et accessoires Crosswater. Le kitche est sur mesure associ?? ?? un plan de travail et une cr??dence en marbre Brescia. Cet espace peut ??galement ??tre s??par?? de la salle ?? manger / salon avec des portes coulissantes. Les fen??tres ?? guillotine d\'origine dans le salon et la cuisine ajoutent du caract??re ?? cet appartement et laissent ??galement entrer beaucoup de lumi??re dans la pi??ce. La cuisine et le salon sont orient??s ?? l\'ouest, tandis que les deux chambres sont situ??es ?? l\'arri??re du b??timent et sont calmes avec le soleil du matin face ?? l\'est. Cela plaira ?? ceux qui souhaitent une maison ou un investissement immobilier au centre du village. Ce bloc construit ?? cet effet est situ?? du c??t?? est de Marylebone High Street, pr??s de la jonction avec New Cavendish Street.',419099.00,'River St.',8945,'Miami',602,8,2,'2021-03-07 13:41:21','2021-03-07 19:54:30'),
	(32,'Maison Tradition','1615146556.jpg','Nous offrons une maison de style russe enti??rement ??quip??e pr??te ?? vivre. La maison b??n??ficie de 2 salons spacieux, chemin??e, salle ?? manger avec un po??le traditionnel russe, 6 chambres, 3 salles polyvalentes suppl??mentaires, 2 grandes armoires, cuisine, 7 salles de bains, 2 grandes terrasses. La propri??t?? est enti??rement ??quip??e avec des fen??tres en bois ?? double vitrage, lave-linge, lave-vaisselle, internet, t??l??phone fixe et AC. L\'ext??rieur de la maison est bord?? de m??l??ze, tandis que l\'int??rieur est bord?? de c??dre. En dehors de la maison principale, il y a une maison de sauna russe suppl??mentaire avec hammam, piscine confortable, \"grotte de sel\", espace de vie suppl??mentaire et 3 salles de bains. La propri??t?? b??n??ficie ??galement des ??curies, de la maison de gardien et de la maison de bonne. Homestead est connect?? avec le syst??me de gaz principal, l\'??lectricit??, les ??gouts, le syst??me de purification de l\'eau, le chauffage central au gaz. 66 hectares de terres sont entour??s par la for??t. La propri??t?? est accessible par une route de qualit?? d??cente.',843800.00,'Mokhovaya St.',125009,'Moscou',1498,10,2,'2021-03-07 15:07:25','2021-03-07 19:49:16'),
	(34,'Villa River Side','1615146749.jpg','Le chef-d\'??uvre spectaculaire de Max Strang moderne b??n??ficie d\'une vue sur la baie ouverte et du prix d\'excellence A1A 2017. Commandant 112 pieds au bord de l\'eau, la toute nouvelle aire de b??ton, d\'acier et de verre se d??ploie sur 9 186 pieds carr??s de logements organis??s ?? Bayfront. La maison ??th??r??e ??flotte?? entre terre et mer sur un terrain de premier choix. Murs en b??ton ?? attache rapide, portes en ch??ne massif sans cadre, glissi??res de poche, rails en verre sans cadre; planchers de basalte et de ch??ne lav??. Galerie de vie / salle ?? manger ?? couper le souffle avec vue sur l\'aigue-marine; Cuisine italienne w / appareils Wolf / Miele / Bofi et salle familiale adjacente; superbes placards Master w / H & H, gym, bureau, salle de bain uber-luxe; Suites Jack & Jill; bonus bdrm; maid\'s rm; lessive; ascenseur. Terrasse sur le toit; Quai de 41 pieds avec ascenseur; piscine ?? d??bordement d\'eau sal??e; garage double pour 2 voitures. Un domaine sensationnel dans la baie de Biscayne, incomparable!',717890.00,'Bay St.',9000,'Miami',1290,8,2,'2021-03-07 16:43:11','2021-03-07 19:52:29'),
	(37,'Loft CITY CENTER','1615146801.jpg','Cet appartement a ??t?? m??ticuleusement con??u avec des ??l??ments contemporains et un design d??cloisonn??. Les suites de deux chambres sont toutes deux baign??es de lumi??re naturelle et d??cor??es dans des tons neutres. Les deux salles de bains sont ??quip??es de marbre de Carrare, de sanitaires Catalano et de luminaires et accessoires Crosswater. Le kitche est sur mesure associ?? ?? un plan de travail et une cr??dence en marbre Brescia. Cet espace peut ??galement ??tre s??par?? de la salle ?? manger / salon avec des portes coulissantes. Les fen??tres ?? guillotine d\'origine dans le salon et la cuisine ajoutent du caract??re ?? cet appartement et laissent ??galement entrer beaucoup de lumi??re dans la pi??ce. La cuisine et le salon sont orient??s ?? l\'ouest, tandis que les deux chambres sont situ??es ?? l\'arri??re du b??timent et sont calmes avec le soleil du matin face ?? l\'est. Cela plaira ?? ceux qui souhaitent une maison ou un investissement immobilier au centre du village. Ce bloc construit ?? cet effet est situ?? du c??t?? est de Marylebone High Street, pr??s de la jonction avec New Cavendish Street.',896400.00,'Queen St.',89009,'London',156,4,1,'2021-03-07 19:22:15','2021-03-07 19:53:21');

/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`)
VALUES
	(1,'appartement'),
	(2,'maison');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),
	(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
	(6,'2021_03_01_114147_create_sessions_table',1),
	(7,'2021_03_01_154229_create_produits_table',2),
	(52,'2021_03_01_222829_create_ad_pictures_table',3),
	(53,'2014_10_12_000000_create_users_table',4),
	(54,'2014_10_12_100000_create_password_resets_table',4),
	(55,'2019_08_19_000000_create_failed_jobs_table',4),
	(56,'2021_03_01_222035_create_categories_table',4),
	(57,'2021_03_01_222255_create_ads_table',4);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table personal_access_tokens
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`)
VALUES
	('IfL2BcJ3wBYdJcKArlZzwrITTyIPjWIjFRk5gLeP',2,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:84.0) Gecko/20100101 Firefox/84.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaHN4b0ZqVmE4TDByUUNsbjU2YjNvTVFhTXU2N0h4VzVBUEw1VjdDZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHFOZUFwa29iYW5FaGg5UFhjRWh5c3VEMmtudWtTMU0zRFIyMWdQT01PbUozVGhOMHhRVVJDIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRxTmVBcGtvYmFuRWhoOVBYY0VoeXN1RDJrbnVrUzFNM0RSMjFnUE9NT21KM1RoTjB4UVVSQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS9kYXNoYm9hcmQiO319',1614616093);

/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_nickname_unique` (`nickname`),
  UNIQUE KEY `users_login_unique` (`login`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `nickname`, `login`, `phone_number`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Philippe','philippe','0707070707','admin','lip@lip.fr',NULL,'marinelamour','jookKNgS0pm3H6Y4tqxRpne44u2DNrd7jY5aQ15Ugyy2eatXRtNTOjshOKo8','2021-03-06 16:42:47','2021-03-07 21:29:25'),
	(2,'Sebastien','seb','0909090909','admin','seb@seb.fr',NULL,'$2y$10$Nhq7wa/NEVWQSbhBSidIlOFmczZ6Yg2cVKS0KdU8hYws18s9Sl0jG',NULL,'2021-03-06 20:38:24','2021-03-06 20:38:24'),
	(5,'Alexis','alexis','0101010101','admin','alex@alex.fr',NULL,'$2y$10$gjYm/sdULV45RHLmlRZmdODOtfkf6.5XYLTm25pkIwJnn8Q7bb/t2',NULL,'2021-03-06 23:07:23','2021-03-06 23:07:23'),
	(16,'guest','guest','0808080808','user','guest@guest.fr',NULL,'$2y$10$eTI1LVmRez.yne9SLefUJuyrUWYvTNLebaPLmo7nc7rsMj9w/Xo06','dP1BdxIql2GjHZ54x9XNpxvVHawp6mmG3UHfSbSCi4rPUDBop1WnPlkMyS1r','2021-03-07 12:24:06','2021-03-07 12:24:06');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
