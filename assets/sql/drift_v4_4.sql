-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 02:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drift`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` varchar(200) NOT NULL,
  `author_name` varchar(200) DEFAULT NULL,
  `article_title` varchar(200) DEFAULT NULL,
  `article_desc` longtext DEFAULT NULL,
  `article_content` longtext DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL,
  `date` varchar(200) DEFAULT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles_comment`
--

CREATE TABLE `articles_comment` (
  `article_id` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `average_rating`
--

CREATE TABLE `average_rating` (
  `rating_id` varchar(200) NOT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `total_reviews` varchar(200) DEFAULT NULL,
  `average_rating` varchar(200) DEFAULT NULL,
  `5star_amount` int(20) DEFAULT NULL,
  `4star_amount` int(20) DEFAULT NULL,
  `3star_amount` int(20) DEFAULT NULL,
  `2star_amount` int(20) DEFAULT NULL,
  `1star_amount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `average_rating`
--

INSERT INTO `average_rating` (`rating_id`, `product_id`, `total_reviews`, `average_rating`, `5star_amount`, `4star_amount`, `3star_amount`, `2star_amount`, `1star_amount`) VALUES
('RATE-1c930cf5af', 'PROD-dc3e5ec873', '0', '0', 0, 0, 0, 0, 0),
('RATE-2024109c66', 'PROD-22ed306493', '0', '0', 0, 0, 0, 0, 0),
('RATE-5c74cc5422', 'PROD-a540139f39', '0', '0', 0, 0, 0, 0, 0),
('RATE-737211c1e7', 'PROD-480febbd4f', '0', '0', 0, 0, 0, 0, 0),
('RATE-94052d5821', 'PROD-67701523c8', '0', '0', 0, 0, 0, 0, 0),
('RATE-9f4bc006a7', 'PROD-766a413dbb', '0', '0', 0, 0, 0, 0, 0),
('RATE-a66168111e', 'PROD-0e44f1ae64', '0', '0', 0, 0, 0, 0, 0),
('RATE-ac845e6489', 'PROD-75a48641c4', '0', '0', 0, 0, 0, 0, 0),
('RATE-af635d2179', 'PROD-548dc5302a', '0', '0', 0, 0, 0, 0, 0),
('RATE-be805f5edb', 'PROD-abc8c54799', '0', '0', 0, 0, 0, 0, 0),
('RATE-c13f621054', 'PROD-d4612e03fa', '0', '0', 0, 0, 0, 0, 0),
('RATE-c1e0b749a5', 'PROD-8090a72c68', '0', '0', 0, 0, 0, 0, 0),
('RATE-c2ef7a03c0', 'PROD-155a0614ba', '0', '0', 0, 0, 0, 0, 0),
('RATE-c37b7e0577', 'PROD-06b0faf765', '0', '0', 0, 0, 0, 0, 0),
('RATE-c576e02d37', 'PROD-9ce68007a4', '0', '0', 0, 0, 0, 0, 0),
('RATE-d225504e54', 'PROD-d5b145340c', '0', '0', 0, 0, 0, 0, 0),
('RATE-d8bdb8d2d7', 'PROD-55d25b4ac7', '0', '0', 0, 0, 0, 0, 0),
('RATE-e98a609095', 'PROD-8669332995', '0', '0', 0, 0, 0, 0, 0),
('RATE-ebc134f2c3', 'PROD-cb427e4a93', '0', '0', 0, 0, 0, 0, 0),
('RATE-ee89ead310', 'PROD-c3d4847c60', '0', '0', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(200) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `no_of_items` int(20) DEFAULT NULL,
  `full_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `tax` int(20) DEFAULT NULL,
  `shipping` int(20) DEFAULT NULL,
  `total_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `billing_id` varchar(200) NOT NULL,
  `cart_id` varchar(200) DEFAULT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `checkout_date` varchar(200) DEFAULT NULL,
  `no_of_items` int(20) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `zip` varchar(200) DEFAULT NULL,
  `payment_method` varchar(200) DEFAULT NULL,
  `card_name` varchar(200) DEFAULT NULL,
  `card_no` varchar(200) DEFAULT NULL,
  `expiration` varchar(20) DEFAULT NULL,
  `CVV` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` varchar(200) NOT NULL,
  `cart_id` varchar(200) DEFAULT NULL,
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `membership_id` varchar(200) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `membership_type` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `sub_date` varchar(200) DEFAULT NULL,
  `exp_date` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` varchar(200) NOT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_description` longtext DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `ratings` varchar(20) DEFAULT NULL,
  `platform` varchar(200) DEFAULT NULL,
  `developer` varchar(200) DEFAULT NULL,
  `date_release` varchar(200) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_description`, `type`, `ratings`, `platform`, `developer`, `date_release`, `image_link`) VALUES
('PROD-06b0faf765', 'Doom Eternal', 'Experience the ultimate combination of speed and power as you rip-and-tear your way across dimensions with the next leap in push-forward, first-person combat. Powered by idTech 7 and set to an all-new pulse-pounding soundtrack composed by Mick Gordon, DOOM Eternal puts you in control of the unstoppable DOOM Slayer as you blow apart new and classic demons with powerful weapons in unbelievable and never-before-seen worlds.', 'Game', '0', 'PlayStation.', 'Panic Button Games', '2020-10-23', 'doom1.jpg, doom2.jpg, doom3.jpg, doom4.jpg, doom5.jpg, doom6.jpg, , doom.jpg'),
('PROD-0e44f1ae64', 'Yakuza', 'Yakuza, known in Japan as Ryū ga Gotoku, is a Japanese video game franchise created, owned and published by Sega. The series genre is primarily beat \'em up, but elements of the action-adventure, open world, and action role-playing genres are also incorporated.', 'Game', '0', 'PlayStation.', 'Team Ninja', '2020-11-08', 'yakuza1.jpg, yakuza2.jpg, yakuza3.jpg, yakuza4.jpg, yakuza5.jpg, yakuza6.jpg, , yakuza.jpg'),
('PROD-155a0614ba', 'One Piece ', 'Fans enjoy and extol the experience of iconic scenes from ONE PIECE in the game story. Simplified controls and thrilling action mowing down countless enemies are the very characteristics of PIRATE WARRIOR series.', 'Game', '0', 'PlayStation, XBOX.', 'BANDAI NAMCO Entertainment', '2020-11-02', 'op1.jpg, op2.jpg, op3.jpg, op4.jpg, op5.jpg, op6.jpg, , onepiece.jpg'),
('PROD-22ed306493', 'Destiny 2', 'Dive into the world of Destiny 2 to explore the mysteries of the solar system and experience responsive first-person shooter combat. Unlock powerful elemental abilities and collect unique gear to customize your Guardian\'s look and playstyle. Enjoy Destiny 2’s cinematic story, challenging co-op missions, and a variety of PvP modes alone or with friends. Download for free today and write your legend in the stars.\r\n', 'Game', '0', 'PlayStation, XBOX.', 'EA Gothenburg', '2020-10-05', 'destiny1.jpg, destiny2.jpg, destiny3.jpg, destiny4.jpg, destiny5.jpg, destiny6.jpg, , destiny.jpg, '),
('PROD-480febbd4f', 'Ghost of Thushima', 'In the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. Tsushima Island is all that stands between mainland Japan and a massive Mongol invasion fleet led by the ruthless and cunning general, Khotun Khan. As the island burns in the wake of the first wave of the Mongol assault, samurai warrior Jin Sakai stands as one of the last surviving members of his clan. He is resolved to do whatever it takes, at any cost, to protect his people and reclaim his home. He must set aside the traditions that have shaped him as a warrior to forge a new path, the path of the Ghost, and wage an unconventional war for the freedom of Tsushima.', 'Game', '0', 'PlayStation, XBOX.', 'Sucker Punch Productions', '2017-11-08', 'got1.jpg, got2.jpg, got3.jpg, got4.jpg, got5.jpg, got6.jpg, , ghost.jpg'),
('PROD-548dc5302a', 'NBA 2K21', 'NBA 2K21 is the latest title in the world-renowned, best-selling NBA 2K series, delivering an industry-leading sports video game experience on PlayStation 4.\r\n\r\nWith extensive improvements upon its best-in-class graphics and gameplay, competitive and community online features, and deep, varied game modes, NBA 2K21 offers one-of-a-kind immersion into all facets of NBA basketball and culture – where Everything is Game.\r\n', 'Game', '0', 'PlayStation, XBOX, Nintendo.', 'EA Gothenburg', '2020-10-08', 'nba1.jpg, nba2.jpg, nba3.jpg, nba4.jpg, nba5.jpg, nba6.jpg, nba1.jpg'),
('PROD-55d25b4ac7', 'Genshin Impact', 'Step into a huge open-world of adventure and mystery, where heroic quests await. As a traveller from another world, you must find your lost sibling and unravel Teyvat’s many secrets.\r\nJoined by Paimon, a kind-hearted sprite guide, your mission takes you through beautiful forests, bustling towns, and treacherous dungeons. And while your journey may put you into the path of merciless foes and fiendish puzzles you can count on numerous playable allies to join your custom party of four, harnessing the power of the elements to overcome all obstacles.', 'Game', '0', 'PlayStation, XBOX.', 'miHoYo', '2020-12-12', 'gi1.jpg, gi2.jpg, gi3.jpg, gi4.jpg, gi5.jpg, gi6.jpg, , genshin.jpg'),
('PROD-67701523c8', 'Resident evil 3', 'Witness the climactic events of Raccoon City in a completely reimagined RESIDENT EVIL 3. This highly demanded follow-up in the 94-million unit selling franchise comes on the heels of the award-winning RESIDENT EVIL 2, and completes the Raccoon City story arc. Also included the online 4 vs. 1 asymmetric multiplayer experience Resident Evil Resistance when it releases on April 3, 2020.', 'Game', '0', 'PlayStation, XBOX.', 'Capcom', '2019-10-05', 're1.jpg, re2.jpg, re3.jpg, re4.jpg, re5.jpg, re6.jpg, , re3.jpg'),
('PROD-75a48641c4', 'Captain Tsubasa', 'Enter the newest game adaptation of the globally acclaimed CAPTAIN TSUBASA franchise.\r\nDazzling cel-shaded graphics bring an all-star cast to life in a distinctive anime style loved the world over.\r\nWhen combined with detailed, realistic graphical touches, the final effect puts you smack dab in the center of the soccer field.\r\nEach shot of your favorite characters has been crafted with meticulous detail, making this a CAPTAIN TSUBASA experience you simply can\'t miss.', 'Game', '0', 'PlayStation.', 'BANDAI NAMCO Entertainment', '2020-11-03', 'ct1.jpg, ct2.jpg, ct3.jpg, ct4.jpg, ct5.jpg, ct6.jpg, , tsubasa.jpg'),
('PROD-766a413dbb', 'Cuphead', 'Cuphead is a classic, 2D-animated run and gun action game heavily focused on boss battles, inspired by cartoons of the 1930s.\r\n', 'Game', '0', 'PlayStation, Nintendo.', 'Studio MDHR', '2019-08-07', 'cup1.jpg, cup2.jpg, cup3.jpg, cup4.jpg, cup5.jpg, cup6.jpg, cuphead.jpg'),
('PROD-8090a72c68', 'DRAGON BALL Z: KAKAROT', 'Relive the story of Goku in DRAGON BALL Z: KAKAROT! Beyond the epic battles, experience life in the DRAGON BALL Z world as you fight, fish, eat, and train with Goku. Explore the new areas and adventures as you advance through the story and form powerful bonds with other heroes from the DRAGON BALL Z universe.', 'Game', '0', 'PlayStation, XBOX.', 'BANDAI NAMCO Entertainment', '2021-02-02', 'db1.jpg, db2.jpg, db3.jpg, db4.jpg, db5.jpg, db6.jpg, dbz.jpg'),
('PROD-8669332995', 'Death Stranding ', 'From legendary game creator Hideo Kojima comes an all-new, genre-defying experience for the PlayStation®4 system.\r\n\r\nSam Bridges must brave a world utterly transformed by the Death Stranding. Carrying the disconnected remnants of our future in his hands, he embarks on a journey to reconnect the shattered world one step at a time.\r\n\r\nWith spectral creatures plaguing the landscape, and humanity on the verge of a mass extinction, it’s up to Sam to journey across the ravaged continent and save mankind from impending annihilation.\r\n\r\nWhat is the mystery of the Death Stranding? What will Sam discover on the road ahead? An unprecedented gameplay experience holds these answers and more.\r\n\r\nStarring Norman Reedus, Mads Mikkelsen, Léa Seydoux, and Lindsay Wagner.', 'Game', '0', 'PlayStation, XBOX.', 'Naughty Dog', '2020-09-02', 'ds1.jpg, ds2.jpg, ds3.jpg, ds4.jpg, ds5.jpg, ds6.jpg, , ds.jpg'),
('PROD-9ce68007a4', 'Persona 5 Royale', 'Wear the mask. Reveal your truth.\r\nPrepare for an all-new RPG experience in Persona®5 Royal based in the universe of the award-winning series, Persona®! Don the mask of Joker and join the Phantom Thieves of Hearts. Break free from the chains of modern society and stage grand heists to infiltrate the minds of the corrupt and make them change their ways! Persona®5 Royal is packed with new characters, story depth, new locations to explore, & a new grappling hook mechanic for access to new areas. With a new semester at Shujin Academy, get ready to strengthen your abilities in the metaverse and in your daily life. Persona®5 Royal presents a unique visual style and award nominated composer Shoji Meguro returns with an all-new soundtrack. Explore Tokyo, unlock new Personas, customize your own personal Thieves Den, discover a never-before-seen story arc, cutscenes, alternate endings, and more!', 'Game', '0', 'PlayStation.', 'Atlus, P Studio', '2020-09-13', 'per1.jpg, per2.jpg, per3.jpg, per4.jpg, per5.jpg, per6.jpg, persona.jpg'),
('PROD-a540139f39', 'Minecraft', 'Explore randomly generated worlds and build amazing things from the simplest of homes to the grandest of castles. Play in creative mode with unlimited resources or mine deep into the world in survival mode, crafting weapons and armor to fend off the dangerous mobs.\r\nFEATURES:\r\nSkin, texture, and mash-up packs from the community! Find out more at minecraft.net/marketplace. \r\nADD-ONS!: Learn more at minecraft.net/addons, where you can try some examples for free or learn to create your own.\r\nRealms! Play with up to 10 friends cross-platform in worlds that exist anytime, anywhere.', 'Game', '0', 'PlayStation, XBOX, Nintendo.', 'Mojang', '2017-11-16', 'mc1.jpg, mc2.jpg, mc3.jpg, mc4.jpg, mc5.jpg, mc6.jpg, minecraft.jpg'),
('PROD-abc8c54799', 'Need For Speed Heat', 'Hustle by day and risk it all at night in Need for Speed™ Heat Deluxe Edition, a white-knuckle street racer, where the lines of the law fade as the sun starts to set.', 'Game', '0', 'PlayStation, XBOX.', 'EA Gothenburg', '2021-01-19', 'nfs1.jpg, nfs2.jpg, nfs3.jpg, nfs4.jpg, nfs5.jpg, nfs6.jpg, , nfs.jpg'),
('PROD-c3d4847c60', 'Predator: Hunting Grounds', 'Predator: Hunting Grounds is an immersive asymmetrical shooter set in remote areas, where the Predator stalks the most challenging prey. Play as a member of an elite Fireteam and complete paramilitary operations before the Predator finds you. Or, play as the Predator to hunt the most worthy prey, choosing from your vast array of deadly alien tech to collect your trophies, one by one.', 'Game', '0', 'PlayStation, XBOX.', 'IllFonic', '2018-08-30', 'pre1.jpg, pre2.jpg, pre3.jpg, pre4.jpg, pre5.jpg, pre6.jpg, predator.jpg'),
('PROD-cb427e4a93', 'Nioh 2', 'Master the lethal arts of the samurai as a mysterious half-human, half-supernatural Yokai warrior, in this challenging action RPG sequel.\r\nExplore violent Sengoku-era Japan and the deadly Dark Realm, both plagued with grotesque, merciless demons.\r\nUnsheathe your deadly weapons and cut down all enemies in your path using a revamped combat system and the ability to transform into a full Yokai to unleash devastating paranormal powers. ', 'Game', '0', 'PlayStation, XBOX.', 'Team Ninja', '2019-10-16', 'nioh1.jpg, nioh2.jpg, nioh3.jpg, nioh4.jpg, nioh5.jpg, nioh6.jpg, nioh.jpg'),
('PROD-d4612e03fa', 'The Last Of Us Part 2', 'Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming. Living amongst a thriving community of survivors has allowed them peace and stability, despite the constant threat of the infected and other, more desperate survivors.\r\nWhen a violent event disrupts that peace, Ellie embarks on a relentless journey to carry out justice and find closure. As she hunts those responsible one by one, she is confronted with the devastating physical and emotional repercussions of her actions.', 'Game', '0', 'PlayStation.', 'Naughty Dog', '2020-11-11', 'tlou1.jpg, tlou2.jpg, tlou3.jpg, tlou4.jpg, tlou5.jpg, tlou6.jpg, , tlou2.jpg'),
('PROD-d5b145340c', 'Fall Guys', 'Fall Guys is a massively multiplayer party game with up to 60 players online in a free-for-all struggle through round after round of escalating chaos until one victor remains!', 'Game', '0', 'PlayStation, XBOX, Nintendo.', 'Mediatonic', '2020-06-04', 'fg1.jpg, fg2.jpg, fg3.jpg, fg4.jpg, fg5.jpg, fg6.jpg, fallguys.jpg'),
('PROD-dc3e5ec873', 'Marvel\\\'s Avengers', 'Assemble your team of Earth’s Mightiest Heroes, embrace your powers, and live your Super Hero dreams.', 'Game', '0', 'PlayStation, XBOX.', 'BANDAI NAMCO Entertainment', '2020-09-10', 'ma1.jpg, ma2.jpg, ma3.jpg, ma4.jpg, ma5.jpg, ma6.jpg,, marvel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promo_code`
--

CREATE TABLE `promo_code` (
  `billing_id` varchar(200) DEFAULT NULL,
  `code` varchar(200) DEFAULT NULL,
  `discount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_accessories`
--

CREATE TABLE `store_accessories` (
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `variants` varchar(200) DEFAULT NULL,
  `discount_offer` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `stock` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_console`
--

CREATE TABLE `store_console` (
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `variants` varchar(200) DEFAULT NULL,
  `discount_offer` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `stock` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store_game`
--

CREATE TABLE `store_game` (
  `product_id` varchar(200) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `variants` varchar(200) DEFAULT NULL,
  `discount_offer` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  `isMembershipExclusive` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_game`
--

INSERT INTO `store_game` (`product_id`, `product_name`, `variants`, `discount_offer`, `price`, `discount_price`, `stock`, `isMembershipExclusive`) VALUES
('PROD-a540139f39', 'Minecraft', 'Legacy Console Edition', '20', 129, 103.2, 50, 'False'),
('PROD-a540139f39', 'Minecraft', 'Nintendo Switch Edition', '20', 129, 103.2, 49, 'False'),
('PROD-dc3e5ec873', 'Marvel\\\'s Avengers', 'Standard Edition', '40', 249, 149.4, 33, 'False'),
('PROD-d5b145340c', 'Fall Guys', 'Standard Edition', '70', 159, 47.7, 59, 'False'),
('PROD-480febbd4f', 'Ghost of Thushima', 'Standard Edition', '60', 229, 91.6, 48, 'False'),
('PROD-766a413dbb', 'Cuphead', 'Standard Edition', '80', 159, 31.8, 67, 'False'),
('PROD-c3d4847c60', 'Predator: Hunting Grounds', 'Standard Edition', '50', 199, 99.5, 21, 'False'),
('PROD-9ce68007a4', 'Persona 5 Royale', 'PlayStation Exclusive', '40', 179, 107.4, 20, 'True'),
('PROD-8090a72c68', 'DRAGON BALL Z: KAKAROT', 'Standard Edition', '0', 200, 200, 50, 'False'),
('PROD-55d25b4ac7', 'Genshin Impact', 'Standard Edition', '0', 150, 150, 40, 'False'),
('PROD-abc8c54799', 'Need For Speed Heat', 'Standard Edition', '0', 240, 240, 55, 'False'),
('PROD-abc8c54799', 'Need For Speed Heat', 'Deluxe Edition', '0', 240, 240, 25, 'True'),
('PROD-d4612e03fa', 'The Last Of Us Part 2', 'Standard Edition', '0', 189, 189, 47, 'False'),
('PROD-cb427e4a93', 'Nioh 2', 'Standard Edition', '30', 209, 146.3, 50, 'False'),
('PROD-cb427e4a93', 'Nioh 2', 'Complete Edition', '30', 209, 146.3, 20, 'True'),
('PROD-67701523c8', 'Resident evil 3', 'Standard Edition', '0', 159, 159, 60, 'False'),
('PROD-06b0faf765', 'Doom Eternal', 'Standard Edition', '0', 199, 199, 49, 'False'),
('PROD-75a48641c4', 'Captain Tsubasa', 'Standard Edition', '0', 229, 229, 40, 'False'),
('PROD-155a0614ba', 'One Piece ', 'Standard Edition', '0', 249, 249, 60, 'False'),
('PROD-155a0614ba', 'One Piece', 'Pirate Warrior Edition', '0', 249, 249, 10, 'False'),
('PROD-0e44f1ae64', 'Yakuza', 'Standard Edition', '0', 249, 249, 55, 'False'),
('PROD-22ed306493', 'Destiny 2', 'Standard Edition', '0', 249, 249, 30, 'False'),
('PROD-8669332995', 'Death Stranding ', 'Standard Edition', '0', 119, 119, 35, 'False'),
('PROD-8669332995', 'Death Stranding', 'Complete Edition', '0', 119, 119, 18, 'True'),
('PROD-548dc5302a', 'NBA 2K21', 'Mamba Forever Edition', '0', 300, 300, 10, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` varchar(200) NOT NULL,
  `user_type` varchar(200) DEFAULT NULL,
  `fname` varchar(200) DEFAULT NULL,
  `lname` varchar(200) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `phone_no` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `postcode` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `image_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

CREATE TABLE `user_rating` (
  `rating_id` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `rating` varchar(200) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `articles_comment`
--
ALTER TABLE `articles_comment`
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `average_rating`
--
ALTER TABLE `average_rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD KEY `billing_id` (`billing_id`);

--
-- Indexes for table `store_accessories`
--
ALTER TABLE `store_accessories`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `store_console`
--
ALTER TABLE `store_console`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `store_game`
--
ALTER TABLE `store_game`
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD KEY `rating_id` (`rating_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles_comment`
--
ALTER TABLE `articles_comment`
  ADD CONSTRAINT `articles_comment_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`);

--
-- Constraints for table `average_rating`
--
ALTER TABLE `average_rating`
  ADD CONSTRAINT `average_rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`),
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`);

--
-- Constraints for table `promo_code`
--
ALTER TABLE `promo_code`
  ADD CONSTRAINT `promo_code_ibfk_1` FOREIGN KEY (`billing_id`) REFERENCES `checkout` (`billing_id`);

--
-- Constraints for table `store_accessories`
--
ALTER TABLE `store_accessories`
  ADD CONSTRAINT `store_accessories_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `store_console`
--
ALTER TABLE `store_console`
  ADD CONSTRAINT `store_console_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `store_game`
--
ALTER TABLE `store_game`
  ADD CONSTRAINT `store_game_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_details` (`product_id`);

--
-- Constraints for table `user_rating`
--
ALTER TABLE `user_rating`
  ADD CONSTRAINT `user_rating_ibfk_1` FOREIGN KEY (`rating_id`) REFERENCES `average_rating` (`rating_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
