-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 03:54 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `author_name`, `article_title`, `article_desc`, `article_content`, `image_link`, `date`, `category`) VALUES
('ARNW-4985227d95', 'Chris Groves', 'REVEALING DIRT 5 , LAUNCHING FROM OCTOBER 2020', 'First Next-Gen Codemasters Game, DIRT 5. It’s time to Let Loose.', '<img src=\"assets/img/bg/dirt5_1.jpg\" alt=\"dirt5 pic\" width=\"660\" height=\"371\"> <br><br>\r\nAs revealed during Microsoft’s Inside Xbox show, Codemasters is delighted to announce DIRT 5, launching from October 2020 on Xbox Series X, PlayStation® 5, Windows PC (via Steam) and the current generation of Xbox and PlayStation consoles. A Google Stadia version will be released in early 2021.<br><br>\r\n\r\nWhilst respecting the heritage and retaining the DNA of the franchise, DIRT 5 writes a new chapter in the legacy of DIRT – bolder and braver than ever before. Check out the official announce trailer, soundtracked by the superb ‘Time to Dance (Sebastian Remix)’ by The Shoes:<br><br>\r\n\r\nDIRT 5 is more than relentless rallying, more than suspension-shaking jumps, more than hairpins and handbrakes. Join an energised world of off-road racing, and be part of a vibe that delivers big on epic action, pure expression, and unbridled style.<br><br>\r\n\r\nNow, time for some juicy info…<br><br>\r\n\r\nBursting with modes, ways to play, and concepts never before seen in the series, DIRT 5 is an overload of amplified entertainment.<br><br>\r\n\r\nDive into the ambitious Career mode, which lets you choose your path to glory as you progress through an immersive journey. The narrative features a voice cast led by the legendary Troy Baker and Nolan North, partnered by the car culture heroes at Donut Media and more famous names from the automotive world. Make your unique mark and overcome all obstacles to ensure nobody ever forgets your name.<br><br>\r\n\r\nPlay together in Career and offline modes with split-screen for up to four players, making DIRT 5 the ultimate playground for you to throw down, trade paint and get really sideways with your friends, either online or on the couch.<br><br>\r\n\r\nLooking for a fresh way to be playful on four wheels? Take the fun to a global scene, with traditional race events and innovative modes that’ll have you hooning for miles and grinning from ear to ear. But that’s far from all it when it comes to ways to play DIRT 5. Look out for the reveal of a new mode later this year – something you have never seen before from the DIRT franchise.<br><br>\r\n\r\nTravel the world to conquer over 70 routes from locations spanning the entire globe, that turn real landmarks into racetracks – from the frozen East River in New York, to the marble mines of Italy, to the Favelas of Brazil. Defy dynamic weather conditions, intimidating terrain and unpredictable elements in eight different race types, covering gravel, snow, mud, ice and more surfaces in between.<br><br>\r\n\r\nYour ride of choice? Choose from a ferocious car roster that includes machines purpose-built for off-road dominance – and a few you’ll be less used to seeing off the beaten track. Our first trailer gives you a first glimpse at what you’ll take the wheel of, from extreme machines like the Ariel Nomad, to racing icons like the Lancia Stratos and modern off-road masters like the Citroen C3 R5.<br><br>\r\n\r\nOh, and each car will be visually customisable through DIRT 5’s nuanced livery editor, with more editing options than any previous DIRT game. Once you’re done designing, snap your greatest moments with a dedicated Photo Mode, capturing ever jump, scrape and slide.<br><br>\r\n\r\nIt’s all set in that amplified off-road world, dripping in style and giving license for you to express yourself, on and off the track. With a backdrop of infectious atmosphere and an unforgettable soundtrack, everything you do in DIRT 5 adds to the vibe. So, what will you bring to the table?<br><br>\r\n\r\nLaunching on the new generation of consoles, as well as current-gen, DIRT 5 makes use of the groundbreaking technology coming to console gaming. With Xbox Series X, experience heightened graphical fidelity in a hyperreal world, optimised performance no matter the mode, and unparalleled load-times for constant action.<br><br>\r\n\r\nWith Xbox Smart Delivery, if you purchase the Xbox One version of DIRT 5, you’ll receive the best version of it to your Xbox One, as usual. Then, if you decide to jump into the next generation with Xbox Series X, you will automatically receive the Xbox Series X optimized version of at no additional cost.<br><br>\r\n\r\nBe the focus. Be recognised. Be the one to take iconic environments, dangerous terrain and incredible vehicles, and turn them into highlight-reel moments. That’s what DIRT 5 is all about. Time to make it what you’re all about, too.<br><br>\r\n\r\nJoin the conversation and engage with the DIRT 5 team right now through the game’s official Discord server. Of course, follow the DiRT channels on Instagram, Twitter, Facebook and YouTube, where we’ll be showing you so much more of the game in the coming weeks and months – from feature deep dives, to art concepts, to peeling back the curtain on DIRT 5’s creation.', 'dirt5.jpg', '2020-11-01', 'Product Release'),
('ARNW-7cb78a842f', 'Chong Wei Shen', 'DRIFT GAMESTORE IS GIVING AWAY FREE GAMES', 'Drift Game Store Free Games List – Updated for November 2020', '<img src=\"assets/img/bg/drift.png\" alt=\"drift pic\" width=\"371\" height=\"371\"> <br><br>\r\n\r\nUnlike PlayStation Plus, Xbox Live Gold, or just about any other subscription service out there, Drift Game Store is giving away games for free — period. There’s no purchase required; no subscription necessary. Every week,Drift Game Store just gives away at least one game for free.<br><br>\r\n\r\nThis is in large part due to the fact that Drift Game Store is the newcomer on the scene and likely looking to draw users away from other platforms: like Steam, GOG, and Origin. Enjoy it while it lasts because there’s no telling when Drift Game Store will decide to end or modify this platform perk!<br><br>\r\n\r\nHere are the free Drift Game Store titles for November 2020, as well as a history of what’s been available so far since the feature launched. That way you don’t find yourself waiting for a game to be free when it’s already out of the rotation!<br><br>\r\n\r\nDrift  offers a free game (or two) every two weeks via the Drift Game Store. You do not need to install them to keep them forever. All you need to do is complete the “purchase” process. Although no transaction is charged to your account.<br><br>\r\n\r\n<h2>November 2020 Games</h2><br>\r\n\r\nMudRunner<br>\r\nAvailable from November 26 – December 03.<br><br>\r\n\r\nThe World Next Door<br>\r\nAvailable from November 19 – November 26.<br><br>\r\n\r\nElite Dangerous<br>\r\nAvailable from November 19 – November 26.<br><br>\r\n\r\nThe Textorcist: The Story of Ray Bibbia<br>\r\nAvailable from November 12 – November 19.<br><br>\r\n\r\nDungeons 3<br>\r\nAvailable from November 05 – November 12.<br><br>\r\n\r\nWargame: Red Dragon<br>\r\nAvailable from November 05 – November 12.<br><br>\r\n\r\nThe new reference in RTS at its best! The Wargame series returns to duty, larger, richer, and more spectacular than ever before. In Wargame Red Dragon, you are engaged in a large-scale conflict where Western forces clash against the Communist bloc.\r\n', 'gamebg.webp', '2020-11-11', 'Announcements'),
('ARNW-8380e5e226', 'Tim Augustin', 'KDA IS MAKING A NEW ALBUM', 'Riot Games K-pop group K/DA will release its first album in November.', ' <img src=\"assets/img/bg/kda2.jpg\" alt=\"KDA pic\" width=\"739\" height=\"493\"> <br>\r\n<p style=\"color : #ff4dff\">You won’t have to wait long for more K/DA. </p> \r\n\r\nRiot Games has announced that K/DA, their popular virtual K-pop group will launch their first full-length EP on November 6, 2020. The album is titled All Out, featuring collaborations with other artists as well as a new group member in Seraphine. The group first released a single from the album in August, titled ‘The Baddest’. <br><br>\r\n\r\nAs promised, K/DA — the virtual K-pop group that’s part of the ever-expanding League of Legends universe — has its very first album on the way. Today, developer Riot revealed that the band’s first EP, titled All Out, will be out on November 6th. K/DA released its first single following a two-year hiatus back in August.<br><br>\r\n\r\nIf you’re wondering what any of that actually means, here’s a quick explainer: in 2018, the annual League of Legends World Championship opened with a stunning AR concert, which featured a K-pop group made up of both in-game characters and real-world pop stars. It was an intriguing mix that turned into a big hit, and now Riot is bringing the band back in a big way. In addition to the EP, there’s also an ongoing comic series and a TikTok-style dance competition. The band also got a new member through an elaborate reveal involving a virtual influencer.<br><br>\r\n\r\n <img src=\"assets/img/bg/kdat.jpg\" alt=\"KDA pic\" width=\"548\" height=\"520\"> <br><br>\r\n\r\nAlso of note: the 2020 edition of the World Championship is currently underway in Shanghai, with the finals slated for October 31st at the newly opened Pudong Football Stadium. The event is known for its striking opening ceremonies, which typically revolve around music; the 2018 K-pop event was followed by a holographic hip-hop concert last year. Given all of the recent announcements, it seems likely K/DA will be involved in this year’s event in some way — just in time to promote the album.<br><br>\r\n\r\n', 'kda.jpg', '2020-11-09', 'Announcements'),
('ARNW-8f8926a2ed', 'Zarmena Khan', 'EARTHLOCK 2 IS ON DEVELOPMENT', 'Earthlock 2 Announced for Current-Gen and Next-Gen Platforms, Will Feature Real-Time Combat', ' <img src=\"assets/img/bg/earthlock2.jpg\" alt=\"earthck2 pic\" width=\"660\" height=\"371\"> <br><br>\r\n\r\nA sequel to 2016’s Earthlock: Festival of Magic is in development, Snowcastle Games has announced. Aptly titled Earthlock 2, the game will offer a “completely different” experience than its turn-based predecessor and will feature real-time combat. However, the sequel will be set in the same world.<br><br>\r\n\r\n“Without revealing too much, fans and newcomers alike can expect a dynamic and unique experience providing the player with meaningful choices that will allow them to leave their mark on the world,” Snowcastle CEO and co-founder, Bendik Stang, told IGN. “The game takes place on the planet Umbra which has stopped spinning. This means half of the world is perpetually scorched in sunlight, while the other half is completely shrouded in darkness. Along the center where the two zones meet, is another area that gets the best of both worlds.”<br><br>\r\n\r\nEarthlock 2 is being developed with Unreal Engine, and Snowcastle Games aims to make the best use of next-gen hardware.<br><br>\r\n\r\n“It took the team quite some time to get up to speed with the new engine but no one on the team now regrets that decision,” Stang continued. “Earthlock 2 is a much more ambitious project than Earthlock 1, and we want to make use of the next-generation consoles as best we can.”<br><br>\r\n\r\nAn official overview is as follows:<br><br>\r\n\r\n<p class ><em><b>The Earthlock series is set on the planet of Umbra, which has stopped spinning on its axis, meaning half of the world is completely shrouded in darkness, while the other half is constantly baked in sunlight. Along the border in the middle, there is an area that gets the best of both worlds. The game’s story centres around a group of friends who must set out to find and rescue their missing family members.<br>\r\n\r\nEarthlock 2 will be an open-world action RPG with complex interlocking systems that work together to offer players extensive freedom to customize their own experience.\"</em></b></p>\r\n<br>\r\n<img src=\"assets/img/bg/el2p.jpg\" alt=\"earthck2 pic\" width=\"640\" height=\"360\"> \r\n<p style=\"color : grey\">Earthlock 2 will release in 2022.</p> \r\n\r\n', 'el2.jpg', '2020-11-18', 'Announcements'),
('ARNW-b91b4c5ddb', 'Mike McWhertor', 'XBOX APP COULD COME TO TVS NEXT YEAR', 'Xbox app could come to TVs next year, Xbox head Phil Spencer says.', '<img src=\"assets/img/bg/xbox1.webp\" alt=\"xbox pic\" width=\"660\" height=\"360\"> <br><br>\r\n\r\nPlaying Xbox games on your TV may not require an Xbox at all soon. Xbox head Phil Spencer tells The Verge that we may see a dedicated Xbox app for smart TVs by next year, one that could stream console games directly to screens using Microsoft’s Project xCloud service.<br><br>\r\n\r\nSpeaking with The Verge, Spencer said, “I think you’re going to see [an Xbox app for smart TVs] in the next 12 months. I don’t think anything is going to stop us from doing that. ... What we used to call a TV was a CRT that’s just throwing an image on the back of a piece of glass that I’m looking at. Now, as you said, a TV is really more of a game console stuffed behind a screen that has an app platform and a Bluetooth stack and a streaming capability. Is it really a TV anymore, or is it just the form and function of the devices that we used to have around our TV, consolidated into the one big screen that I’m looking at?”<br><br>\r\n\r\nSpencer added that “the amount of compute capability in my home has increased with the number of streaming signals that have come in, not decreased,” concluding, “I think gaming will be one of those things as well.”<br><br>\r\n\r\nMicrosoft’s Project xCloud service streams select Xbox games to mobile phones and tablets. Currently, the game-streaming service is restricted to Google’s Android platform, but a web-based version of xCloud streaming for iOS devices is also in the works. Project xCloud was recently added to the Ultimate tier of Microsoft’s Xbox Game Pass subscription service.<br><br>\r\n\r\nAs The Verge points out, Spencer also recently hinted at another hardware option for game streaming on TVs: “streaming sticks,” in the vein of Amazon’s Fire TV Stick. “You could imagine us even having something that we just included in the Game Pass subscription that gave you an ability to stream xCloud games to your television and buying the controller,” Spencer told Stratechery in an interview in late October.', 'xbox.jpg', '2020-11-24', 'Press Conference'),
('ARNW-dec4f360b4', 'Jordan Forward', 'ASSASSIN’S CREED VALHALLA RELEASE DATE', 'Everything you need to know about the first Viking Age Assassin\'s Creed game', '<img src=\"assets/img/bg/ac2.jpg\" alt=\"ac pic\" width=\"640\" height=\"360\"> <br><br>\r\n<em><b>Great Odin’s raven! Judging from the Assassin’s Creed Valhalla reveal, it looks like the series’ one-year hiatus was well worth the wait. It’s early doors yet, but our first hands-on time with Valhalla has us excited to grow out our shaggiest beards, cover ourselves in tattoos, and go Templar-slaying across England.</b></em><br><br>\r\n\r\nThe new Assassin’s Creed game sees you playing as either a male or female (you can switch freely between the two) Viking named Eivor, who is leading a clan of Norse soldiers to England as they flee conflict and dwindling resources in their native Norway. Your goal is to secure your foothold in England, a land of fractured kingdoms, by leading raids for vital resources, building your village into a stronghold, and battling any Saxons who challenge them. Customisation appears to be a key feature of Assassin’s Creed Valhalla – you’ll be able to fully alter the appearance of your raider from hairstyles and facial features, to tattoos and how your longship looks.<br><br>\r\n\r\nJoin us as we break down everything you need to know about this Viking Assassin’s Creed, from the Assassin’s Creed Valhalla release date, to what we know about the combat and map.<br><br>\r\n\r\n<h2>What is the Assassin’s Creed Valhalla release date?</h2><br>\r\n\r\nThe Assassin’s Creed Valhalla release date is November 10, 2020.<br>\r\n\r\nThis comes direct from a Ubisoft press release alongside a heap of details about the upcoming Xbox Series S and X releases.<br>\r\n\r\nThe Valhalla release date was initially revealed as the 17th of November on an official Assassin’s Creed Italian Instagram post, which has subsequently been deleted.<br><br>\r\n\r\n<h2>Where can you get Assassin’s Creed Valhalla on PC?</h2><br>\r\n\r\nAssassin’s Creed Valhalla is coming to Windows PC exclusively on both the Epic Games Store and the Ubisoft Store. There’s no mention of an Assassin’s Creed Valhalla Steam release there, so it looks like PC players will have to head to Uplay or the Epic Games Store for this one.', 'ac.jpg', '2020-11-06', 'Product Release'),
('ARNW-eeb426e3b6', 'Iain Haris', 'ELDEN RING IS BEATING DARK SOUL', 'Elden Ring is just as tough as Dark Souls but combat is “fundamentally different”', ' <b>For his upcoming collaboration with George R. R. Martin on Elden Ring, Hidetaka Miyazaki says he is calling on familiar influences for its gameplay. Speaking to IGN, Miyazaki explains that fans can expect to see elements of Dark Souls, and quite vividly too.<br><br>\r\n<img src=\"assets/img/bg/erp.jpg\" alt=\"er pic\" width=\"660\" height=\"371\"></b> <br><br>\r\n\r\n“Elden Ring is a third-person action RPG with a fantasy setting. Gameplay-wise, it’s heavily based on Dark Souls,” says Miyazaki. “However, that doesn’t mean that it plays out in the same way. With a more open and vast environment, the way combat plays out becomes fundamentally different.”<br><br>\r\n\r\nFromSoftware’s previous work in Dark Souls, Bloodborne, and Sekiro: Shadows Die Twice sees the developer use open style maps that are inspired by the Metroidvania genre. That means you can expect to revisit environments but interact with them in different ways – be it as a result of new abilities that let you explore new places, or a story beat that changes how it looks. As Miyazaki explains that Elden Ring’s environments are more vast and open, it could mean that we’ll revisit areas less and have even more places to explore too.<br><br>\r\n\r\nOne thing we won’t be seeing on our travels, however, is towns and NPCs. Though, Miyazaki does admit there will still be ruins of towns, much like his previous games.<br><br>\r\n\r\n“Creating a new type of game is a big challenge for us,” Miyazaki explains. “If we would add towns on top of that, it would become a bit too much, so we decided to create an open world style game focused on what we are best at.”<br><br>\r\n\r\n\r\nOne thing we will be coming across in Elden Ring, however, is difficult challenges to overcome. Speaking to Xbox this time, Miyazaki explains that maintaining that thrill of overcoming difficult challenges is an integral part of a FromSoftware game.<br><br>\r\n\r\n“The importance we place on the joy the player experiences through overcoming challenges will be the same as it is in our other titles,” He says. “I believe it will prove to be a very satisfying experience.”<br><br>\r\n\r\nE3 2019 is still rumbling on, and we’re covering it day and night. We’re both on the ground in Los Angeles and covering conferences from our UK office, so stick around for the latest news.<br><br>', 'er.jpg', '2020-11-09', 'Announcements'),
('ARNW-fda4f5cb50', 'Wesley Poole', 'FIFA 21 ON PC WON\'T GET THE PS5 AND XBOX SERIES X FEATURES', 'FIFA 21 on PC will not get the next-gen features coming to the game on PlayStation 5 and Xbox Series X and S in order to keep the game\'s minimum specs down, EA has said.', 'Today, EA Sports outlined some of the eye-catching features coming to FIFA 21 on next-gen consoles, including ball deformation, muscle definition and a new camera angle. Current-gen console players get all this and more as part of a free update - but none of it will be made available to PC players.<br><br>\r\n\r\nDuring a recent preview event attended by Eurogamer, representatives of EA Sports were asked why the PC version will be left behind with \"gen four\" features as PS5 and Xbox Series X and S gets \"gen five\" features.<br><br>\r\n   \r\n\r\nAre the PS5 and Xbox Series X too buggy at launch?<br><br>\r\n\r\nExecutive producer Aaron McHardy said EA took the decision to keep the PC minimum specs down, \"so that we can open the doors and be inclusive to everybody who wants to play FIFA.\"<br><br>\r\n\r\n\"When we looked at what generation to put the PC game on, we looked at our fans and what capabilities they had with the hardware they have,\" McHardy said.<br><br>\r\n\r\n\"And we have that information to understand what the power of the PCs out there in the world are. And when we looked at that, in order to run the gen five game, our min spec would have been at a spot that would have left a lot of people out in the cold not being able to play the game.<br><br>\r\n\r\n\"So we made the choice to keep the PC version of the game on the gen four version of FIFA so that we can open the doors and be inclusive to everybody who wants to play FIFA.\"<br><br>\r\n\r\n\r\nThe news likely won\'t go down well with FIFA 21 players who have PCs capable of these next-gen features, but may not come as much of a surprise, either. Back in June 2020, when it emerged EA had decided to make FIFA 21 on PC the same as the PlayStation 4 and Xbox One version without explanation, we speculated it was a business decision based on likely data that suggested the bulk of PC FIFA users were probably playing on an old, or medium-power PC, and the need to prioritise development resources.<br><br>\r\n\r\n<img src=\"assets/img/bg/ea.jpg\" alt=\"ea pic\" width=\"640\" height=\"360\"> <br><br>\r\n\r\nFor reference, here are the FIFA 21 PC minimum specs:<br><br>\r\n\r\n    Requires a 64-bit processor and operating system<br>\r\n    OS: Windows 10 - 64-Bit<br>\r\n    Processor: Intel Core i3-6100 @ 3.7GHz or AMD Athlon X4 880K @4GHz<br>\r\n    Memory: 8GB RAM<br>\r\n    Graphics: NVIDIA GTX 660 2GB or AMD Radeon HD 7850 2GB<br>\r\n    Storage: 50 GB available space<br><br>\r\n\r\nIt\'s also worth noting that EA has done this before. FIFA on PC lagged behind the console versions when it came to features and even the game engine itself during the early years of the last decade. It wasn\'t until the release of FIFA 15 in 2014 that the PC version used all the EA Sports Ignite engine bells and whistles that were present on PS4 and Xbox One.<br><br>\r\n\r\nEven before then, for a number of years the PC version of the massive-selling series lacked the features found in the PlayStation 3 and Xbox 360 version, although parity was achieved with FIFA 12. Now, of course, all versions of FIFA use the Frostbite engine. When will PC catch up with PS5 and Xbox Series X? Perhaps PC gamers will have to wait until FIFA 2022 comes out next year.', 'fifa.jpg', '2020-11-24', 'Press Conference');

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
('RATE-0023f19792', 'PROD-2ac27718ec', '0', '0', 0, 0, 0, 0, 0),
('RATE-00dca29dcf', 'PROD-02ef245be6', '0', '0', 0, 0, 0, 0, 0),
('RATE-016dbdd205', 'PROD-44c10ac427', '0', '0', 0, 0, 0, 0, 0),
('RATE-0603cc769f', 'PROD-a42d9603f2', '0', '0', 0, 0, 0, 0, 0),
('RATE-0ca6f22235', 'PROD-5a7c381d1c', '0', '0', 0, 0, 0, 0, 0),
('RATE-11d7863b4f', 'PROD-069a099559', '0', '0', 0, 0, 0, 0, 0),
('RATE-1c930cf5af', 'PROD-dc3e5ec873', '0', '0', 0, 0, 0, 0, 0),
('RATE-1c95c2cbe8', 'PROD-ef813571f0', '0', '0', 0, 0, 0, 0, 0),
('RATE-2024109c66', 'PROD-22ed306493', '0', '0', 0, 0, 0, 0, 0),
('RATE-2c0c8727c6', 'PROD-e5f8fad616', '0', '0', 0, 0, 0, 0, 0),
('RATE-2c6b9ccdac', 'PROD-1a21e16d54', '0', '0', 0, 0, 0, 0, 0),
('RATE-33486b7d12', 'PROD-3a1d05c788', '0', '0', 0, 0, 0, 0, 0),
('RATE-39a86c57be', 'PROD-195931bb9b', '0', '0', 0, 0, 0, 0, 0),
('RATE-3f4c2bcadd', 'PROD-33eb614d9b', '0', '0', 0, 0, 0, 0, 0),
('RATE-41b50a8475', 'PROD-d5fc7d2424', '0', '0', 0, 0, 0, 0, 0),
('RATE-529e7e4300', 'PROD-870f0f797f', '0', '0', 0, 0, 0, 0, 0),
('RATE-52ef9ec06c', 'PROD-333f9827a5', '0', '0', 0, 0, 0, 0, 0),
('RATE-540831f033', 'PROD-27b7dfa5be', '0', '0', 0, 0, 0, 0, 0),
('RATE-5de39a145b', 'PROD-bcfc065312', '0', '0', 0, 0, 0, 0, 0),
('RATE-695361f89f', 'PROD-307377c9cd', '0', '0', 0, 0, 0, 0, 0),
('RATE-737211c1e7', 'PROD-480febbd4f', '0', '0', 0, 0, 0, 0, 0),
('RATE-7c4020f6b0', 'PROD-27f4d38132', '0', '0', 0, 0, 0, 0, 0),
('RATE-7cbd45557f', 'PROD-f89791078b', '0', '0', 0, 0, 0, 0, 0),
('RATE-7e0574f295', 'PROD-fd2ff89ae3', '0', '0', 0, 0, 0, 0, 0),
('RATE-80df9e1329', 'PROD-205666fd6d', '0', '0', 0, 0, 0, 0, 0),
('RATE-90d9992faa', 'PROD-31ac59b1fb', '0', '0', 0, 0, 0, 0, 0),
('RATE-94052d5821', 'PROD-67701523c8', '0', '0', 0, 0, 0, 0, 0),
('RATE-94a288313d', 'PROD-93d85705b5', '0', '0', 0, 0, 0, 0, 0),
('RATE-97173b368f', 'PROD-7b9842c35e', '0', '0', 0, 0, 0, 0, 0),
('RATE-9f4bc006a7', 'PROD-766a413dbb', '0', '0', 0, 0, 0, 0, 0),
('RATE-a66168111e', 'PROD-0e44f1ae64', '0', '0', 0, 0, 0, 0, 0),
('RATE-ac845e6489', 'PROD-75a48641c4', '0', '0', 0, 0, 0, 0, 0),
('RATE-af635d2179', 'PROD-548dc5302a', '0', '0', 0, 0, 0, 0, 0),
('RATE-b038e07231', 'PROD-6b3c00383b', '0', '0', 0, 0, 0, 0, 0),
('RATE-b900d8b6eb', 'PROD-fe69d5e39f', '0', '0', 0, 0, 0, 0, 0),
('RATE-be5cfc3acf', 'PROD-5cb96e64d6', '0', '0', 0, 0, 0, 0, 0),
('RATE-c13f621054', 'PROD-d4612e03fa', '0', '0', 0, 0, 0, 0, 0),
('RATE-c145280ae6', 'PROD-85379d539e', '0', '0', 0, 0, 0, 0, 0),
('RATE-c1e0b749a5', 'PROD-8090a72c68', '0', '0', 0, 0, 0, 0, 0),
('RATE-c37b7e0577', 'PROD-06b0faf765', '0', '0', 0, 0, 0, 0, 0),
('RATE-c4fd7bcb16', 'PROD-612ed2ec4a', '0', '0', 0, 0, 0, 0, 0),
('RATE-c576e02d37', 'PROD-9ce68007a4', '0', '0', 0, 0, 0, 0, 0),
('RATE-ce71e9e438', 'PROD-a0cb788575', '0', '0', 0, 0, 0, 0, 0),
('RATE-d038648359', 'PROD-b8d7840715', '0', '0', 0, 0, 0, 0, 0),
('RATE-d225504e54', 'PROD-d5b145340c', '0', '0', 0, 0, 0, 0, 0),
('RATE-d84fa8b608', 'PROD-7ea641e823', '0', '0', 0, 0, 0, 0, 0),
('RATE-d8bdb8d2d7', 'PROD-55d25b4ac7', '0', '0', 0, 0, 0, 0, 0),
('RATE-d9ff5c03f2', 'PROD-188772975c', '0', '0', 0, 0, 0, 0, 0),
('RATE-dad5b79e49', 'PROD-db313c8d05', '0', '0', 0, 0, 0, 0, 0),
('RATE-dbcc7675f1', 'PROD-a3e426a053', '0', '0', 0, 0, 0, 0, 0),
('RATE-ed4ee6cfda', 'PROD-d4e209aa93', '0', '0', 0, 0, 0, 0, 0),
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
  `tax` double DEFAULT NULL,
  `shipping` double DEFAULT NULL,
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
('PROD-02ef245be6', 'PlayStation&reg;Move', 'The PlayStation®Move Motion Controllers enable the most exciting and intuitive gaming experiences in compatible PlayStation®VR titles. Precise motion tracking and easily accessible buttons give you the ability to act intuitively, further immersing you in the game.', 'Accessories', '0', 'PlayStation', 'Sony', '2020-11-18', 'psmove1.jpg, psmove2.jpg, psmove3.jpg, psmove4.jpg, psmove5.jpg, psmove6.jpg, , psmove.jpg'),
('PROD-069a099559', 'PlayStation 3', 'PlayStation 3 (PS3) is a home video game console developed by Sony Computer Entertainment. It is the successor to PlayStation 2, and is part of the PlayStation brand of consoles. It was first released on November 11, 2006 in Japan,[7] November 17, 2006 in North America, and March 23, 2007 in Europe and Australia.[8][9][10] The PlayStation 3 competed primarily against Microsoft\'s Xbox 360 and Nintendo\'s Wii as part of the seventh generation of video game consoles.', 'Console', '0', 'PlayStation', 'Sony', '2013-11-08', 'ps3_1.jpg, ps3_2.jpg, ps3_3.jpg, ps3_4.jpg, ps3_5.jpg, ps3_6.jpg, , ps3.jpg'),
('PROD-06b0faf765', 'Doom Eternal', 'Experience the ultimate combination of speed and power as you rip-and-tear your way across dimensions with the next leap in push-forward, first-person combat. Powered by idTech 7 and set to an all-new pulse-pounding soundtrack composed by Mick Gordon, DOOM Eternal puts you in control of the unstoppable DOOM Slayer as you blow apart new and classic demons with powerful weapons in unbelievable and never-before-seen worlds.', 'Game', '0', 'PlayStation', 'Panic Button Games', '2020-11-15', 'doom1.jpg, doom2.jpg, doom3.jpg, doom4.jpg, doom5.jpg, doom6.jpg, doom.jpg'),
('PROD-0e44f1ae64', 'Yakuza', 'Yakuza, known in Japan as Ryū ga Gotoku, is a Japanese video game franchise created, owned and published by Sega. The series genre is primarily beat \'em up, but elements of the action-adventure, open world, and action role-playing genres are also incorporated.', 'Game', '0', 'PlayStation', 'Team Ninja', '2020-11-08', 'yakuza1.jpg, yakuza2.jpg, yakuza3.jpg, yakuza4.jpg, yakuza5.jpg, yakuza6.jpg, yakuza.jpg'),
('PROD-188772975c', 'Playstation 4', 'The PS4 console, delivering awesome gaming power, incredible entertainment and vibrant HDR technology1.', 'Console', '0', 'PlayStation', 'Sony', '2019-07-03', 'ps4_1.jpg, ps4_2.jpg, ps4_3.jpg, ps4_4.jpg, ps4_5.jpg, ps4_5.jpg, , ps4.png'),
('PROD-195931bb9b', 'Western Digital WD_Black D10 12TB Game Drive', 'Take your gaming library on the go with this high-performance game drive for Xbox One Series.', 'Accessories', '0', 'XBOX', 'Microsoft', '2020-11-06', 'western1.jpg, western2.jpg, western3.jpg, western4.jpg, western5.jpg, western6.jpg, , western.jpg'),
('PROD-1a21e16d54', 'Fortnite Neo Versa Gold Wireless Headset', 'Buy get free Epic Neo Versa Outfit*, Epic Neo Phrenzy Back Bling* and 2,000 V-Bucks.\r\n', 'Accessories', '0', 'PlayStation', 'Sony', '2020-11-11', 'fortnite_headset1.jpg, fortnite_headset2.jpg, fortnite_headset3.jpg, fortnite_headset4.jpg, fortnite_headset5.jpg, fortnite_headset6.jpg, , fortnite_headset.jpg'),
('PROD-205666fd6d', 'The Last of Us Part II Limited Edition Gold Wireless Headset', 'Presented in a Steel Black matte finish with crimson inner ear cups, this wireless headset features Ellie’s iconic fern tattoo and the game’s logo.', 'Accessories', '0', 'PlayStation', 'Sony', '2020-11-17', 'tlou2_headset1.jpg, tlou2_headset2.jpg, tlou2_headset3.jpg, tlou2_headset4.jpg, tlou2_headset5.jpg, tlou2_headset6.jpg, tlou2_headset.jpg'),
('PROD-22ed306493', 'Destiny 2', 'Dive into the world of Destiny 2 to explore the mysteries of the solar system and experience responsive first-person shooter combat. Unlock powerful elemental abilities and collect unique gear to customize your Guardian\'s look and playstyle. Enjoy Destiny 2’s cinematic story, challenging co-op missions, and a variety of PvP modes alone or with friends. Download for free today and write your legend in the stars.\r\n', 'Game', '0', 'PlayStation, XBOX.', 'EA Gothenburg', '2020-11-21', 'destiny1.jpg, destiny2.jpg, destiny3.jpg, destiny4.jpg, destiny5.jpg, destiny6.jpg, destiny.jpg'),
('PROD-27b7dfa5be', 'Xbox Wireless Controller', '<h2 class=\"c-heading\">Elevate your game</h2>\r\n<p class=\"c-subheading-4\">Experience the modernized design of the Xbox Wireless Controller, featuring sculpted surfaces and refined geometry for enhanced comfort during gameplay. Stay on target with textured grip and a hybrid D-pad. Seamlessly capture and share content with a dedicated Share button. Quickly pair with, play on, and switch between devices including Xbox Series X|S, Xbox One, Windows 10 PC, and Android. iOS support coming in the future. *</p><br>\r\n\r\n<h2 class=\"c-heading\">Dedicated share button</h2>\r\n<p class=\"c-paragraph-2\">Seamlessly capture and share content such as screenshots, recordings, and more with the new Share button.</p><br>\r\n\r\n<h2 class=\"c-heading-3 \">Stay on target</h2>\r\n<p class=\"c-paragraph-2\">Stay on target with the new hybrid D-pad, textured grip on the triggers, bumpers, and back-case.</p><br>\r\n\r\n<h2 class=\"c-heading-3\">Switch devices</h2>\r\n<p class=\"c-subheading-4\">Easily pair and switch between devices including Xbox Series X, Xbox Series S, Xbox One, Windows 10 PC, and Android. iOS support coming in the future.*</p><br>\r\n\r\n<h2 class=\"c-heading\">Compatibility</h2>\r\n<p class=\"c-subheading-4\">Includes Xbox Wireless and Bluetooth® technology for wireless gaming on console, PC, mobile phones and tablets. Plug in any compatible headset with the 3.5mm stereo headset jack.*</p>', 'Accessories', '0', 'XBOX', 'Microsoft', '2020-11-11', 'xboxCC1.jpg, xboxCC2.jpg, xboxCC3.jpg, xboxCC4.jpg, xboxCC5.jpg, xboxCC6.jpg, xboxC.jpg'),
('PROD-27f4d38132', 'Need For Speed Heat', 'Hustle by day and risk it all at night in Need for Speed™ Heat Deluxe Edition, a white-knuckle street racer, where the lines of the law fade as the sun starts to set.', 'Game', '0', 'PlayStation, XBOX.', 'EA Gothenburg', '2020-11-05', 'nfs1.jpg, nfs2.jpg, nfs3.jpg, nfs4.jpg, nfs5.jpg, nfs6.jpg,, nfs.jpg'),
('PROD-2ac27718ec', 'PlayStation VR', 'PS VR is crafted to put you inside your new favorite games. Adjust the fit of the headset with a click, and use convenient on-headset controls to adjust the volume. The PS VR headset was engineered to be balanced, comfortable, and adjustable. It’s designed to feel like it’s not there as you explore new gaming worlds.', 'Console', '0', 'PlayStation', 'Sony', '2020-11-13', 'psvr_1.jpg, psvr_2.jpg, psvr_3.jpg, psvr_4.jpg, psvr_5.jpg, psvr_6.jpg, , psVR.jpg'),
('PROD-307377c9cd', 'Xbox 360', 'The Xbox 360 is a gaming console manufactured by Microsoft and is a successor of the Xbox. It was initially released in 2005 as a competitor to Sony’s Playstation 3 console and Nintendo’s Wii console. Xbox 360 is praised for popularizing game achievement awards, which lets players collect achievements the more they play on the console.', 'Console', '0', 'XBOX', 'Microsoft', '2020-11-13', 'xbox360_1.jpg, xbox360_2.jpg, xbox360_3.jpg, xbox360_4.jpg, xbox360_5.jpg, xbox360_6.jpg, , xbox360.jpg'),
('PROD-31ac59b1fb', 'Xbox Series X', 'The Xbox Series X delivers sensationally smooth frame rates of up to 120FPS with the visual pop of HDR. Immerse yourself with sharper characters, brighter worlds, and impossible details with true-to-life 4K.', 'Console', '0', 'XBOX', 'Microsoft', '2020-11-07', 'xboxSX_1.jpg, xboxSX_2.jpg, xboxSX_3.jpg, xboxSX_4.jpg, xboxSX_5.jpg, xboxSX_6.jpg, xbox3.jpg'),
('PROD-333f9827a5', 'Minecraft', '<h2 class=\"tab-text-heading\" style=\"color: white;\">Play to create</h2>\r\n<p class=\"tab-text-sub body2\" style=\"color: white;\">If you can dream it, you can build it. Put your imagination and limitless resources to work with Creative Mode. </p>\r\n\r\n<h2 class=\"promo-font txt-black\">Cross-platform play!</h2>\r\n<span class=\"body2 txt-black\"> <p>Team up with friends across consoles and PC with the new cross-platform play game update.</p>\r\n </span>\r\n<br>\r\n<h2 style=\"color: lightblue;\">How it works?</h2> <br>\r\n<h2>Be resourceful</h2>\r\n<p>Get crafty and use the surrounding environment to gather building materials—see how breaking down trees can help you create something new.</p>\r\n<h2>Survive the night</h2>\r\n<p>It’s always best to avoid the unpredictable by distancing yourself from wandering mobs—you never know what’ll happen if they get too close!</p>\r\n<h2>Build something amazing</h2>\r\n<p>Discover all the versatile ways dust from the Redstone ore can be used to enhance your creations, bring them to life, or give them some bang.</p>', 'Game', '0', 'PlayStation, XBOX, Nintendo.', 'Mojang', '2020-11-06', 'mc1.jpg, mc2.jpg, mc3.jpg, mc4.jpg, mc5.jpg, mc6.jpg, minecraft.jpg'),
('PROD-33eb614d9b', 'Nintendo Switch Animal Crossing Carrying Case &amp; Screen Protector', 'This stylish case will help protect your Nintendo Switch™ system when you take the Animal Crossing™: New Horizons game on the go and escape to a tropical island paradise anytime, anywhere', 'Accessories', '0', 'Nintendo', 'Nintendo Co', '2020-11-24', 'nintendo_case1.jpg, nintendo_case2.jpg, nintendo_case3.jpg, nintendo_case4.jpg, nintendo_case5.jpg, nintendo_case6.jpg,, nintendo_case.jpg'),
('PROD-3a1d05c788', 'Seagate Storage Expansion', 'We created the Seagate Storage Expansion card in close partnership with Xbox to ensure when you plug this storage card into either the Xbox Series X or Xbox Series S, you’re getting all the speed and performance Xbox dreamed up for this next generation of console gaming.', 'Accessories', '0', 'XBOX', 'Microsoft', '2019-01-17', 'seagate1.jpg, seagate2.jpg, seagate3.jpg, seagate4.jpg, seagate5.jpg, seagate6.jpg, , seagate.jpg'),
('PROD-44c10ac427', 'Xbox One X', 'With 40% more power than any other console, experience immersive true 4K gaming. Games play better on Xbox One X.', 'Console', '0', 'XBOX', 'Microsoft', '2020-11-08', 'xboxOX_1.jpg, xboxOX_2.jpg, xboxOX_3.jpg, xboxOX_4.jpg, xboxOX_5.jpg, xboxOX_6.jpg, , xboxOX.jpg'),
('PROD-480febbd4f', 'Ghost of Thushima', '<div class=\"accent\" style=\"color: white\">Game overview </div>\r\n<h2>A storm is coming</h2>\r\nIn the late 13th century, the Mongol empire has laid waste to entire nations along their campaign to conquer the East. Tsushima Island is all that stands between mainland Japan and a massive Mongol invasion fleet led by the ruthless and cunning general, Khotun Khan. As the island burns in the wake of the first wave of the Mongol assault, samurai warrior Jin Sakai stands as one of the last surviving members of his clan. He is resolved to do whatever it takes, at any cost, to protect his people and reclaim his home. He must set aside the traditions that have shaped him as a warrior to forge a new path, the path of the Ghost, and wage an unconventional war for the freedom of Tsushima.<br><br><br>\r\n\r\n<img class=\" lazyloaded\" data-src=\"https://gmedia.playstation.com/is/image/SIEPDC/ghost-of-tsushima-accoldaes-launch-psstore-02-en-29jul20?$native$\" src=\"https://gmedia.playstation.com/is/image/SIEPDC/ghost-of-tsushima-accoldaes-launch-psstore-02-en-29jul20?$native$\" alt=\"ghost of tsushima accolades\" width=\"700\" height=\"469\">\r\n<p>Entered the Platinum Hall of Fame in the New Game Cross Review of Weekly Famitsu July 30, 2020 Issue (published July 16). The third western game in history to get a perfect score from Weekly Famitsu, Japan’s acclaimed gaming magazine.</p><br><br><h3>In war-torn Tsushima, ancient beauty endures</h3>\r\n<p>Venture beyond the battlefield to experience feudal Japan like never before. In this open-world action adventure, you’ll roam vast countrysides and expansive terrain to encounter rich characters, discover ancient landmarks, and uncover the hidden beauty of Tsushima.</p>\r\n<p>Explore meticulously-crafted regions showcasing diversity of life on the sprawling island—from billowing fields and tranquil shrines to ancient forests, villages and stark mountainscapes. Find peace in the quiet moments of natural harmony and solace in the moments you’ll share with the people you help along the way.</p>\r\n\r\n<h3>The rise of the Ghost</h3>\r\n<p>Jin was raised and trained in the ways of the samurai. When the Mongols handily defeat the samurai forces, Jin’s world is shattered. He is faced with the most difficult decision of his life: honor the tradition and customs of his samurai upbringing and maintain a fight he cannot win, or deviate from his samurai path to protect the island and its people by any means necessary.</p>\r\n<p>In his quest to reclaim Tsushima, Jin must seek the guidance and support of old friends and new unlikely allies. He must break away from tradition, become a new kind of warrior, and protect what’s left of his home at all costs.</p>\r\n\r\n<h3>Mud, blood and steel</h3>\r\n<p>The Mongol enemy is unpredictable and formidable in warfare and weaponry. Get the upper hand by adapting Jin’s skills and learning new tactics to defend the island and protect the people of Tsushima.<br>\r\n<br>\r\nChallenge opponents head-on in close quarters with your katana for a unique immersive samurai combat experience. Master the bow to eliminate distant threats with lethal precision. Develop stealth and deception tactics to disorient and ambush enemies with surprise attacks.<br>\r\n<br>\r\nAn adaptive landscape and organic approach to combat makes Tsushima the perfect playground for mixing and matching skills, weapons, and tactics to find the perfect combat blend for your play style. As Jin’s story unfolds, versatility and creativity will become your greatest weapons.</p>', 'Game', '0', 'PlayStation, XBOX.', 'Sucker Punch Productions', '2017-11-08', 'got1.jpg, got2.jpg, got3.jpg, got4.jpg, got5.jpg, got6.jpg, ghost.jpg'),
('PROD-548dc5302a', 'NBA 2K21', 'NBA 2K21 is the latest title in the world-renowned, best-selling NBA 2K series, delivering an industry-leading sports video game experience on PlayStation 4.\r\n\r\nWith extensive improvements upon its best-in-class graphics and gameplay, competitive and community online features, and deep, varied game modes, NBA 2K21 offers one-of-a-kind immersion into all facets of NBA basketball and culture – where Everything is Game.\r\n', 'Game', '0', 'PlayStation, XBOX, Nintendo.', 'EA Gothenburg', '2020-10-08', 'nba1.jpg, nba2.jpg, nba3.jpg, nba4.jpg, nba5.jpg, nba6.jpg, nba1.jpg'),
('PROD-55d25b4ac7', 'Genshin Impact', 'Step into a huge open-world of adventure and mystery, where heroic quests await. As a traveller from another world, you must find your lost sibling and unravel Teyvat’s many secrets.\r\nJoined by Paimon, a kind-hearted sprite guide, your mission takes you through beautiful forests, bustling towns, and treacherous dungeons. And while your journey may put you into the path of merciless foes and fiendish puzzles you can count on numerous playable allies to join your custom party of four, harnessing the power of the elements to overcome all obstacles.', 'Game', '0', 'PlayStation, XBOX.', 'miHoYo', '2020-12-12', 'gi1.jpg, gi2.jpg, gi3.jpg, gi4.jpg, gi5.jpg, gi6.jpg, , genshin.jpg'),
('PROD-5a7c381d1c', 'Nintendo Switch', '<div class=\"h2\" style=\"text-align:center; color:#ff5050\">Three modes in one</div>\r\n<p style=\"text-align:center; color:#ff9999\" >Nintendo Switch is designed to fit your life, transforming from home console to portable system in a snap.</p><br>\r\n\r\n<h3 slot=\"header\">TV mode</h3>\r\n<p slot=\"text\">Dock your Nintendo Switch to enjoy HD gaming on your TV.</p><br>\r\n\r\n<h3 slot=\"header\">Tabletop mode</h3>\r\n<p slot=\"text\">Flip the stand to share the screen, then share the fun with a multiplayer game.</p><br>\r\n\r\n<h3 slot=\"header\">Handheld mode</h3>\r\n<p slot=\"text\">Pick it up and play with the Joy‑Con™ controllers attached.</p><br><br>\r\n\r\n<div class=\"h2\" style=\"color:#80b3ff\">Better together: Multiplayer gaming options</div>\r\n<br>\r\n<span class=\"h3\">Local co-op</span>\r\n<p>Play on the big screen at home with friends.**</p>\r\n<span class=\"h3\">Local wireless</span>\r\n<p>Link up to eight Nintendo Switch and Nintendo Switch Lite systems together to play multiplayer games anywhere.</p>\r\n<span class=\"h3\">Online play</span>\r\n<p>Team up or face off with others online in compatible games with a Nintendo Switch Online membership.</p><br>\r\n', 'Console', '0', 'Nintendo', 'Nintendo Co', '2020-11-18', 'ns_1.jpg, ns_2.jpg, ns_3.jpg, ns_4.jpg, ns_5.jpg, ns_6.jpg, switch.jpg'),
('PROD-5cb96e64d6', 'Death Stranding', 'From legendary game creator Hideo Kojima comes an all-new, genre-defying experience for the PlayStation®4 system.\r\nSam Bridges must brave a world utterly transformed by the Death Stranding. Carrying the disconnected remnants of our future in his hands, he embarks on a journey to reconnect the shattered world one step at a time.\r\nWith spectral creatures plaguing the landscape, and humanity on the verge of a mass extinction, it’s up to Sam to journey across the ravaged continent and save mankind from impending annihilation.\r\nWhat is the mystery of the Death Stranding? What will Sam discover on the road ahead? An unprecedented gameplay experience holds these answers and more.\r\nStarring Norman Reedus, Mads Mikkelsen, Léa Seydoux, and Lindsay Wagner.\r\n', 'Game', '0', 'PlayStation', 'Sony', '2020-11-07', 'ds1.jpg, ds2.jpg, ds3.jpg, ds4.jpg, ds5.jpg, ds6.jpg,, ds.jpg'),
('PROD-612ed2ec4a', 'PlayStation Vita', 'The PlayStation Vita (PS Vita or Vita) is a handheld video game console developed and marketed by Sony Computer Entertainment. It was first released in Japan on December 17, 2011, and in North America, Europe, and other international territories beginning on February 22, 2012. The console is the successor to the PlayStation Portable, and a part of the PlayStation brand of gaming devices; as part of the eighth generation of video game consoles, it primarily competed with the Nintendo 3DS. ', 'Console', '0', 'PlayStation', 'Sony', '2001-11-21', 'psvita_1.jpg, psvita_2.jpg, psvita_3.jpg, psvita_4.jpg, psvita_5.jpg, psvita_6.jpg, , psvita.jpg'),
('PROD-67701523c8', 'Resident evil 3', 'Witness the climactic events of Raccoon City in a completely reimagined RESIDENT EVIL 3. This highly demanded follow-up in the 94-million unit selling franchise comes on the heels of the award-winning RESIDENT EVIL 2, and completes the Raccoon City story arc. Also included the online 4 vs. 1 asymmetric multiplayer experience Resident Evil Resistance when it releases on April 3, 2020.', 'Game', '0', 'PlayStation, XBOX.', 'Capcom', '2020-11-23', 're1.jpg, re2.jpg, re3.jpg, re4.jpg, re5.jpg, re6.jpg, re3.jpg'),
('PROD-6b3c00383b', 'Nintendo Switch Lite', 'The system for gamers on the go.\r\nThe Nintendo Switch Lite is designed specifically for handheld play—so you can jump into your favorite games wherever you happen to be.', 'Console', '0', 'Nintendo', 'Nintendo Co', '2020-11-24', 'nslite_1.jpg, nslite_2.jpg, nslite_3.jpg, nslite_4.jpg, nslite_5.jpg, nslite_6.jpg, , switchlite.jpg'),
('PROD-75a48641c4', 'Captain Tsubasa', 'Enter the newest game adaptation of the globally acclaimed CAPTAIN TSUBASA franchise.\r\nDazzling cel-shaded graphics bring an all-star cast to life in a distinctive anime style loved the world over.\r\nWhen combined with detailed, realistic graphical touches, the final effect puts you smack dab in the center of the soccer field.\r\nEach shot of your favorite characters has been crafted with meticulous detail, making this a CAPTAIN TSUBASA experience you simply can\'t miss.', 'Game', '0', 'PlayStation', 'BANDAI NAMCO Entertainment', '2020-11-03', 'ct1.jpg, ct2.jpg, ct3.jpg, ct4.jpg, ct5.jpg, ct6.jpg, tsubasa.jpg'),
('PROD-766a413dbb', 'Cuphead', 'Cuphead is a classic, 2D-animated run and gun action game heavily focused on boss battles, inspired by cartoons of the 1930s.\r\n', 'Game', '0', 'PlayStation, Nintendo.', 'Studio MDHR', '2019-08-07', 'cup1.jpg, cup2.jpg, cup3.jpg, cup4.jpg, cup5.jpg, cup6.jpg, cuphead.jpg'),
('PROD-7b9842c35e', 'Playstation 4 Pro', 'Let the super-charged PS4 Pro lead the way. PS4 Pro takes great games to the next level with enhanced graphics and gameplay.\r\n', 'Console', '0', 'PlayStation', 'Sony', '2020-11-12', 'ps4pro_1.jpg, ps4pro_2.jpg, ps4pro_3.jpg, ps4pro_4.jpg, ps4pro_5.jpg, ps4pro_6.jpg, ps4pro.jpg'),
('PROD-7ea641e823', 'One Piece', 'Fans enjoy and extol the experience of iconic scenes from ONE PIECE in the game story. Simplified controls and thrilling action mowing down countless enemies are the very characteristics of PIRATE WARRIOR series.', 'Game', '0', 'PlayStation, XBOX.', 'BANDAI NAMCO Entertainment', '2020-11-10', 'op1.jpg, op2.jpg, op3.jpg, op4.jpg, op5.jpg, op6.jpg,, onepiece.jpg'),
('PROD-8090a72c68', 'DRAGON BALL Z: KAKAROT', 'Relive the story of Goku in DRAGON BALL Z: KAKAROT! Beyond the epic battles, experience life in the DRAGON BALL Z world as you fight, fish, eat, and train with Goku. Explore the new areas and adventures as you advance through the story and form powerful bonds with other heroes from the DRAGON BALL Z universe.', 'Game', '0', 'PlayStation, XBOX.', 'BANDAI NAMCO Entertainment', '2021-02-02', 'db1.jpg, db2.jpg, db3.jpg, db4.jpg, db5.jpg, db6.jpg, dbz.jpg'),
('PROD-85379d539e', 'C40 TR Controller', 'Take control with the C40 TR Controller, fully customizable for any playstyle and any genre.', 'Accessories', '0', 'PlayStation', 'Sony', '2020-11-11', 'c40_1.jpg, c40_2.jpg, c40_3.jpg, c40_4.jpg, c40_5.jpg, c40_6.jpg, c40.jpg'),
('PROD-870f0f797f', 'Xbox Elite Wireless Controller Series 2', 'Designed to meet the needs of today’s competitive gamers, the Xbox Elite Wireless Controller Series 2 features over 30 new ways to play like a pro. Enhance your aiming with new adjustable-tension thumbsticks, fire even faster with shorter hair trigger locks, and stay on target with a wrap-around rubberized grip.', 'Accessories', '0', 'XBOX', 'Microsoft', '2020-11-24', 'xboxC_E1.jpg, xboxC_E2.jpg, xboxC_E3.jpg, xboxC_E4.jpg, xboxC_E5.jpg, xboxC_E6.jpg, , xboxC_E.jpg'),
('PROD-93d85705b5', 'DualShock 4 Wireless Controller', '<div class=\"accent\">Revolutionary Design</div>\r\n<h1>DUALSHOCK®4</h1>\r\n<p>The&nbsp;DUALSHOCK®4 Wireless Controller for PlayStation®4 defines this generation of play, combining revolutionary features and comfort with intuitive, precision controls.&nbsp;</p>\r\n<p>Evolved analog sticks and trigger buttons allow for unparalleled accuracy with every move, while innovative technologies offer exciting ways to experience your games and share your greatest moments.<br>\r\n</p>\r\n\r\n<h2>Key Features</h2>\r\n<h3 style=\"text-align: center;\">Precision Control</h3>\r\n<p style=\"text-align: center;\">The feel, shape, and sensitivity of the DUALSHOCK®4’s analog sticks and trigger buttons have been enhanced to offer players absolute control for all games on PlayStation®4 system.<br>\r\n</p>\r\n\r\n<h3 style=\"text-align: center;\">Refined Analog Sticks</h3>\r\n<p style=\"text-align: center;\">Improved analog sticks and trigger buttons allow for unparalleled accuracy with every move.</p>\r\n\r\n<h3 style=\"text-align: center;\">New Ways to Play</h3>\r\n<p style=\"text-align: center;\">Revolutionary features like the touch pad, integrated light bar, and built-in speaker offer exciting new ways to experience and interact with your games, and the 3.5mm audio jack offers a practical personal audio solution for gamers who want to listen to their games in private.<br>\r\n</p>\r\n\r\n<h3 style=\"text-align: center;\">Sharing at Your Fingertips</h3>\r\n<p style=\"text-align: center;\">The addition of the Share button makes sharing your greatest gaming moments as easy as a push of a button. Upload gameplay videos and screenshots directly from your system or live-stream your gameplay, all without disturbing the game in progress.<br>\r\n</p>\r\n\r\n', 'Accessories', '0', 'PlayStation', 'Sony', '2020-11-24', 'dualshock41.jpg, dualshock42.jpg, dualshock43.jpg, dualshock44.jpg, dualshock45.jpg, dualshock46.jpg, dualshock4.jpg'),
('PROD-9ce68007a4', 'Persona 5 Royale', 'Wear the mask. Reveal your truth.\r\nPrepare for an all-new RPG experience in Persona®5 Royal based in the universe of the award-winning series, Persona®! Don the mask of Joker and join the Phantom Thieves of Hearts. Break free from the chains of modern society and stage grand heists to infiltrate the minds of the corrupt and make them change their ways! Persona®5 Royal is packed with new characters, story depth, new locations to explore, & a new grappling hook mechanic for access to new areas. With a new semester at Shujin Academy, get ready to strengthen your abilities in the metaverse and in your daily life. Persona®5 Royal presents a unique visual style and award nominated composer Shoji Meguro returns with an all-new soundtrack. Explore Tokyo, unlock new Personas, customize your own personal Thieves Den, discover a never-before-seen story arc, cutscenes, alternate endings, and more!', 'Game', '0', 'PlayStation', 'Atlus, P Studio', '2020-09-13', 'per1.jpg, per2.jpg, per3.jpg, per4.jpg, per5.jpg, per6.jpg, persona.jpg'),
('PROD-a0cb788575', 'PlayStation VR Aim Controller', 'PlayStation®VR Aim Controller heightens the experience of any compatible shooter for your PlayStation®VR. Precise motion tracking, ergonomic design, and deeply intuitive controls keep your shots lightning fast and deadly accurate. Together with vibration feedback, the Aim Controller lets you feel the action as you are transported to incredible and unexpected gaming worlds.\r\n', 'Accessories', '0', 'PlayStation', 'Sony', '2019-02-08', 'vraim1.jpg, vraim2.jpg, vraim3.jpg, vraim4.jpg, vraim5.jpg, vraim6.jpg, , vraim.jpg'),
('PROD-a3e426a053', 'PlayStation 5', '<h2 style= \"color : blue\">Play Has No Limits™</h2>\r\n<p style=\"text-align: center; color :  #6495ED \">Experience lightning-fast loading with an ultra-high-speed SSD, deeper immersion with support for haptic feedback, adaptive triggers and 3D Audio,* and an all-new generation of incredible PlayStation® games.</p><br><br>\r\n\r\n<h4 style=\"text-align: center;\">Lightning speed</h4>\r\n<p>Harness the power of a custom CPU, GPU, and SSD with Integrated I/O that rewrite the rules of what a PlayStation console can do. </p><br>\r\n\r\n<h4 style=\"text-align: center;\">Ultra-high-speed SSD</h4>\r\n<p style=\"text-align: center;\">Maximise your play sessions with near-instant load times for installed PS5™ games.</p><br>\r\n\r\n<h4 style=\"text-align: center;\">Integrated I/O</h4>\r\n<p style=\"text-align: center;\">The custom integration of the PS5 console\'s systems lets creators pull data from the SSD so quickly that they can design games in ways never before possible.</p><br><br>\r\n\r\n\r\n		<h3 style= \"color : blue\"><span class=\"sst-light\">More PS5 console features</span></h3>\r\n <h5><span class=\"sst-light\"><span class=\"sst-roman\">Backwards compatibility</span></span></h5>\r\n <p>Play a back catalogue of PS4™ games on your PS5 console</p><br>\r\n <h5><span class=\"sst-light\"><span class=\"sst-roman\">Game boost</span></span></h5>\r\n <p>Enjoy faster and smoother frame rates in select PS4 and PS VR games.</p><br>\r\n <h5><span class=\"sst-light\"><span class=\"sst-roman\">Upgrade PS4 games to digital PS5 games</span></span></h5>\r\n <p>The PS5 console gives game publishers the ability to let players upgrade their disc and digital PS4 games to digital PS5 games.<sup>1</sup></p><br>\r\n <h5><span class=\"sst-light\"><span class=\"sst-roman\">PlayStation®VR integration</span></span></h5>\r\n <p>Connect your PlayStation VR to your PS5 console to enjoy supported PS VR games. To set up your PS VR with your PS5 console, you\'ll need your PlayStation Camera<sup>2</sup> for PS4 and a PlayStation Camera adaptor (no purchase necessary).</p>\r\n\r\n', 'Console', '0', 'PlayStation', 'Sony', '2020-11-18', 'ps5_1.jpg, ps5_2.jpg, ps5_3.jpg, ps5_4.jpg, ps5_5.jpg, ps5_6.jpg, ps5.png'),
('PROD-a42d9603f2', 'Xbox Series S', 'The Xbox Series X delivers sensationally smooth frame rates of up to 120FPS with the visual pop of HDR. Immerse yourself with sharper characters, brighter worlds, and impossible details with true-to-life 4K.', 'Console', '0', 'XBOX', 'Microsoft', '2019-01-10', 'xboxSS_1.jpg, xboxSS_2.jpg, xboxSS_3.jpg, xboxSS_4.jpg, xboxSS_5.jpg, xboxSS_6.jpg, , xboxSS.jpg'),
('PROD-b8d7840715', 'Joy‑Con&trade; controllers', 'Pick up an extra set (or two) of Joy‑Con, the controllers that make new kinds of gaming possible.', 'Accessories', '0', 'Nintendo', 'Nintendo Co', '2019-10-31', 'joycon1.jpg, joycon2.jpg, joycon3.jpg, joycon4.jpg, joycon5.jpg, joycon6.jpg, , joycon.jpg'),
('PROD-bcfc065312', 'Nintendo Wii', 'The Nintendo Wii is a family-friendly video game console that is not only entertaining but also interactive as well. With motion-control technology, the gamer can truly interact with the game on a personal level, rather than participating as a passive player. A pioneer in interactive gaming, Nintendo has enabled its video games to be more lifelike and cooperative. All new Nintendo Wii consoles come with one Wii Remote Plus controller, one Nunchuk controller for specific gaming, and a Wii Sensor bar. Up to four Wii Remote Plus controllers can be connected at once using built-in wireless technology powered by Bluetooth.. The Wii controller has a sensor on it that enables the user to select menu preferences, scroll through screens, and activate the game itself. Purchasing a Wii-enabled yoga mat or Wii Fit balance board further elevates the gaming experience. With the ability to exercise, dance, and meditate, exercise-oriented video games transform the home into a gym. The user can track his or her weight, endurance, and cyber-Wii age. Gamers can compete virtually across multiple Wii consoles, swap scores, and more. Dozens of games exist that can only operate properly with these accessories. The unit is small and compact and intended to rest on a shelf or within an entertainment unit.', 'Console', '0', 'Nintendo', 'Nintendo Co', '2019-10-04', 'wii_1.jpg, wii_2.jpg, wii_3.jpg, wii_4.jpg, wii_5.jpg, wii_6.jpg, wii.jpg'),
('PROD-c3d4847c60', 'Predator: Hunting Grounds', 'Predator: Hunting Grounds is an immersive asymmetrical shooter set in remote areas, where the Predator stalks the most challenging prey. Play as a member of an elite Fireteam and complete paramilitary operations before the Predator finds you. Or, play as the Predator to hunt the most worthy prey, choosing from your vast array of deadly alien tech to collect your trophies, one by one.', 'Game', '0', 'PlayStation, XBOX.', 'IllFonic', '2018-08-30', 'pre1.jpg, pre2.jpg, pre3.jpg, pre4.jpg, pre5.jpg, pre6.jpg, predator.jpg'),
('PROD-d4612e03fa', 'The Last Of Us Part 2', 'Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming. Living amongst a thriving community of survivors has allowed them peace and stability, despite the constant threat of the infected and other, more desperate survivors.\r\nWhen a violent event disrupts that peace, Ellie embarks on a relentless journey to carry out justice and find closure. As she hunts those responsible one by one, she is confronted with the devastating physical and emotional repercussions of her actions.', 'Game', '0', 'PlayStation', 'Naughty Dog', '2020-11-11', 'tlou1.jpg, tlou2.jpg, tlou3.jpg, tlou4.jpg, tlou5.jpg, tlou6.jpg, tlou2.jpg'),
('PROD-d4e209aa93', 'Mini Wired Gamepad', 'Built for young gamers, the officially licensed Mini Wired Gamepad for PS4™ systems is designed to fit smaller hands while providing the same great gaming experience you have come to expect with PS4™systems. Get started with a growing library of family friendly games as you learn and grow as a gamer. Great for companion play, the mini wired gamepad opens gaming to whole family.\r\n', 'Accessories', '0', 'PlayStation', 'Sony', '2020-11-05', 'mini1.jpg, mini2.jpg, mini3.jpg, mini4.jpg, mini5.jpg, mini6.jpg, , mini.jpg'),
('PROD-d5b145340c', 'Fall Guys', 'Fall Guys is a massively multiplayer party game with up to 60 players online in a free-for-all struggle through round after round of escalating chaos until one victor remains!<br><br>\r\n\r\nFall Guys: Ultimate Knockout flings hordes of contestants together online in a mad dash through round after round of escalating chaos until one victor remains! Battle bizarre obstacles, shove through unruly competitors, and overcome the unbending laws of physics as you stumble towards greatness. Leave your dignity at the door and prepare for hilarious failure in your quest to claim the crown!<br><br>\r\n\r\nMassive Online Pandemonium: Dive into a series of ridiculous challenges and wild obstacle courses with masses of other competitors online, all with the hopes of making the cut and advancing to the next round of mayhem.<br><br>\r\n\r\nCompetitive & Cooperative: Shift between competitive free-for-alls and cooperative challenges where the losing team all get eliminated!<br><br>\r\n\r\nComically Physical: Watch in delight as your fellow competitors bend, bounce, and bash their way to hilarious, physics-based failure!<br><br>\r\n\r\nDelightfully Customisable: Fail in style with everything from fashionable pineapple couture to the latest in bunny hats available to customize your look in Fall Guys.<br><br>', 'Game', '0', 'PlayStation, XBOX, Nintendo.', 'Mediatonic', '2019-06-04', 'fg1.jpg, fg2.jpg, fg3.jpg, fg4.jpg, fg5.jpg, fg6.jpg, fallguys.jpg'),
('PROD-d5fc7d2424', 'Xbox One S', 'Meet the Xbox One consoles with the best value in games and 4K entertainment. Bring your video games and movies to life with brilliant resolution on Xbox One.', 'Console', '0', 'XBOX', 'Microsoft', '2018-08-10', 'xboxOS_1.jpg, xboxOS_2.jpg, xboxOS_3.jpg, xboxOS_4.jpg, xboxOS_5.jpg, xboxOS_6.jpg , xboxone.jpg'),
('PROD-db313c8d05', 'Nintendo Switch Pro Controller', 'Take your game sessions up a notch with the Pro Controller. Includes motion controls, HD rumble, built-in amiibo functionality, and more.', 'Accessories', '0', 'Nintendo', 'Nintendo Co', '2020-11-04', 'nintendo_control1.jpg, nintendo_control2.jpg, nintendo_control3.jpg, nintendo_control4.jpg, nintendo_control5.jpg, nintendo_control6.jpg,  , nintendo_control.jpg'),
('PROD-dc3e5ec873', 'Marvels Avengers', '<p style=\"font-size:30px ; color:lightblue\">Assemble your team of Earth’s Mightiest Heroes, embrace your powers, and live your Super Hero dreams</p>.\r\n<p>\r\nMarvel’s Avengers begins at A-Day, where Captain America, Iron Man, the Hulk, Black Widow, and Thor are unveiling a new, hi-tech Avengers Headquarters in San Francisco.\r\nThe celebration turns deadly when a mysterious enemy causes a catastrophic accident which results in massive devastation. Blamed for the tragedy, the Avengers disband.\r\nFive years later, with all Super Heroes outlawed and the world in peril, a sprawling adventure ignites when a determined young woman named Kamala Khan sets out to\r\nreassemble and rebuild the Avengers to stop the unchecked power of the secretive new force known as AIM.Marvel’s Avengers continues the epic journey with new Heroes\r\nand new narrative delivered on an ongoing basis, for the definitive Avengers gaming experience.\r\n<br><br>\r\n\r\n<pre style=\"font-size:25px ; color:white\">Embrace Your Powers </pre>\r\n -Progress through the campaign to rebuild your Hero roster; then continue to battle AIM solo or online with friends<br>\r\n -Unlock powerful skills and gear for Earth’s Mightiest Heroes to suit your playstyle<br>\r\n -Customize these iconic Heroes with original and new outfits inspired by over 80 years of Marvel history<br>\r\n\r\n<br><br>\r\n\r\n\r\n<pre style=\"font-size:25px ; color:white\">Assemble Online</pre>\r\n -Using a reclaimed helicarrier as a base of operations, launch Hero Missions (single-player) and Warzone Missions (single-player or co-op) in hotspots around the globe<br>\r\n -Up to four players assemble online to defend the Earth from escalating threats<br>\r\n -As the narrative unfolds, new Super Heroes and regions are delivered at no additional cost<br>\r\n\r\n\r\n</p>\r\n', 'Game', '0', 'PlayStation, XBOX.', 'BANDAI NAMCO Entertainment', '2018-09-10', 'ma1.jpg, ma2.jpg, ma3.jpg, ma4.jpg, ma5.jpg, ma6.jpg, marvel.jpg'),
('PROD-e5f8fad616', 'Nioh 2', 'Master the lethal arts of the samurai as a mysterious half-human, half-supernatural Yokai warrior, in this challenging action RPG sequel.\r\nExplore violent Sengoku-era Japan and the deadly Dark Realm, both plagued with grotesque, merciless demons.\r\nUnsheathe your deadly weapons and cut down all enemies in your path using a revamped combat system and the ability to transform into a full Yokai to unleash devastating paranormal powers. ', 'Game', '0', 'PlayStation', 'Team Ninja', '2020-11-12', 'nioh1.jpg, nioh2.jpg, nioh3.jpg, nioh4.jpg, nioh5.jpg, nioh6.jpg, nioh.jpg'),
('PROD-ef813571f0', 'Playstation 4 Slim', 'Store your games, apps, screenshots and videos with up to 1TB storage inside the PS4 Slim console – slimmer and lighter than the original PS4 model and available in Jet Black and more colours.', 'Console', '0', 'PlayStation', 'Sony', '2018-11-08', 'ps4slim_1.jpg, ps4slim_2.jpg, ps4slim_3.jpg, ps4slim_4.jpg, ps4slim_5.jpg, ps4slim_6.jpg, ps41.jpg'),
('PROD-f89791078b', 'Xbox Wireless Controller Special Edition', 'Equip yourself with the Xbox Wireless Controller – Phantom Magenta Special Edition, featuring a translucent design that fades to dark pink, and textured grip for enhanced comfort. Enjoy custom button mapping and plug in any compatible headset with the 3.5mm stereo headset jack. And with Bluetooth® technology, play your favorite games on Windows 10 PCs, laptops, and mobile devices', 'Accessories', '0', 'XBOX', 'Microsoft', '2020-11-05', 'xboxC_LA1.jpg, xboxC_LA2.jpg, xboxC_LA3.jpg, xboxC_LA4.jpg, xboxC_LA5.jpg, xboxC_LA6.jpg, , xboxC_LA.jpg'),
('PROD-fd2ff89ae3', 'Hyperkin S Wheel Wireless Racing Controller', 'Hit the track with this officially licensed controller that brings precision maneuverability to your favorite racing games.', 'Accessories', '0', 'XBOX', 'Microsoft', '2018-10-04', 'racing1.jpg, racing2.jpg, racing3.jpg, racing4.jpg, racing5.jpg, racing6.jpg, , racing.jpg'),
('PROD-fe69d5e39f', 'PlayStation 2', 'The PlayStation 2 (PS2) is a home video game console developed and marketed by Sony Computer Entertainment. It was first released in Japan on March 4, 2000, in North America on October 26, 2000, in Europe on November 24, 2000, and Australia on November 24, 2000. It is the successor to the original PlayStation, as well as the second installment in the PlayStation console line-up. A sixth-generation console, it competed with Sega\'s Dreamcast, Nintendo\'s GameCube, and Microsoft\'s original Xbox. \r\n', 'Console', '0', 'PlayStation', 'Sony', '2008-11-07', 'ps2_1.jpg, ps2_2.jpg, ps2_3.jpg, ps2_4.jpg, ps2_5.jpg, ps2_6.jpg, , ps2.jpg');

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

--
-- Dumping data for table `store_accessories`
--

INSERT INTO `store_accessories` (`product_id`, `product_name`, `variants`, `discount_offer`, `price`, `discount_price`, `stock`) VALUES
('PROD-27b7dfa5be', 'Xbox Wireless Controller', 'Carbon Black', '15', 200, 170, 40),
('PROD-27b7dfa5be', 'Xbox Wireless Controller', 'Robot White', '15', 210, 178.5, 30),
('PROD-27b7dfa5be', 'Xbox Wireless Controller', 'Shock Blue', '15', 250, 212.5, 15),
('PROD-f89791078b', 'Xbox Wireless Controller Special Edition', 'Phantom Magenta', '20', 250, 200, 210),
('PROD-870f0f797f', 'Xbox Elite Wireless Controller Series 2', 'Xbox Elite Series', '20', 300, 240, 77),
('PROD-3a1d05c788', 'Seagate Storage Expansion', 'Standard Edition', '20', 220, 176, 33),
('PROD-93d85705b5', 'DualShock 4 Wireless Controller', 'Standard Edition', '25', 210, 157.5, 99),
('PROD-85379d539e', 'C40 TR Controller', 'Standard Edition', '15', 200, 170, 33),
('PROD-d4e209aa93', 'Mini Wired Gamepad', 'Standard Edition', '25', 199, 149.25, 66),
('PROD-205666fd6d', 'The Last of Us Part II Limited Edition Gold Wireless Headset', 'Limited Edition', '20', 500, 400, 20),
('PROD-1a21e16d54', 'Fortnite Neo Versa Gold Wireless Headset', 'Black', '0', 450, 450, 48),
('PROD-1a21e16d54', 'Fortnite Neo Versa Gold Wireless Headset', 'White', '0', 300, 300, 57),
('PROD-a0cb788575', 'PlayStation VR Aim Controller', 'Standard Edition', '0', 199, 199, 322),
('PROD-02ef245be6', 'PlayStation&reg;Move', 'Standard Edition', '0', 199, 199, 225),
('PROD-db313c8d05', 'Nintendo Switch Pro Controller', 'Standard Edition', '0', 299, 299, 25),
('PROD-b8d7840715', 'Joy‑Con&trade; controllers', 'Standard Edition', '0', 70, 70, 487),
('PROD-195931bb9b', 'Western Digital WD_Black D10 12TB Game Drive', 'Standard Edition', '0', 200, 200, 40),
('PROD-33eb614d9b', 'Nintendo Switch Animal Crossing Carrying Case &amp; Screen Protector', 'For Nintendo Switch', '0', 129, 129, 40),
('PROD-33eb614d9b', 'Nintendo Switch Animal Crossing Carrying Case &amp; Screen Protector', 'For Nintendo Switch Lite', '0', 119, 119, 55),
('PROD-fd2ff89ae3', 'Hyperkin S Wheel Wireless Racing Controller', 'Standard Edition', '0', 699, 699, 50);

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

--
-- Dumping data for table `store_console`
--

INSERT INTO `store_console` (`product_id`, `product_name`, `variants`, `discount_offer`, `price`, `discount_price`, `stock`) VALUES
('PROD-a3e426a053', 'PlayStation 5', 'Standard Edition', '0', 2000, 2000, 110),
('PROD-7b9842c35e', 'Playstation 4 Pro', 'Standard Edition', '30', 1600, 1120, 30),
('PROD-5a7c381d1c', 'Nintendo Switch', 'Standard Edition', '0', 1300, 1300, 20),
('PROD-ef813571f0', 'Playstation 4 Slim', 'Standard Edition', '20', 1399, 1119.2, 40),
('PROD-d5fc7d2424', 'Xbox One S', 'Xbox One Series', '20', 1699, 1359.2, 60),
('PROD-6b3c00383b', 'Nintendo Switch Lite', 'Lite Edition', '0', 1399, 1399, 55),
('PROD-188772975c', 'Playstation 4', 'Standard Edition', '50', 1299, 649.5, 30),
('PROD-307377c9cd', 'Xbox 360', 'Standard Edition', '0', 1499, 1499, 29),
('PROD-44c10ac427', 'Xbox One X', 'Standard Edition', '0', 2999, 2999, 12),
('PROD-a42d9603f2', 'Xbox Series S', 'Standard Edition', '0', 2699, 2699, 140),
('PROD-2ac27718ec', 'PlayStation VR', 'Standard Edition', '0', 3499, 3499, 119),
('PROD-fe69d5e39f', 'PlayStation 2', 'Standard Edition', '0', 1299, 1299, 150),
('PROD-069a099559', 'PlayStation 3', 'Standard Edition', '0', 1399, 1399, 44),
('PROD-612ed2ec4a', 'PlayStation Vita', 'Standard Edition', '0', 999, 999, 55),
('PROD-bcfc065312', 'Nintendo Wii', 'Black', '20', 1400, 1120, 40),
('PROD-bcfc065312', 'Nintendo Wii', 'White', '20', 1400, 1120, 40),
('PROD-31ac59b1fb', 'Xbox Series X', 'Xbox Series', '0', 2000, 2000, 43);

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
('PROD-dc3e5ec873', 'Marvels Avengers', 'Standard Edition', '40', 249, 149.4, 33, 'False'),
('PROD-d5b145340c', 'Fall Guys', 'Standard Edition', '70', 159, 47.7, 59, 'False'),
('PROD-480febbd4f', 'Ghost of Thushima', 'Standard Edition', '60', 229, 91.6, 48, 'False'),
('PROD-766a413dbb', 'Cuphead', 'Standard Edition', '80', 159, 31.8, 67, 'False'),
('PROD-c3d4847c60', 'Predator: Hunting Grounds', 'Standard Edition', '50', 199, 99.5, 21, 'False'),
('PROD-9ce68007a4', 'Persona 5 Royale', 'PlayStation Exclusive', '40', 179, 107.4, 15, 'True'),
('PROD-8090a72c68', 'DRAGON BALL Z: KAKAROT', 'Standard Edition', '0', 200, 200, 50, 'False'),
('PROD-55d25b4ac7', 'Genshin Impact', 'Standard Edition', '0', 150, 150, 40, 'False'),
('PROD-d4612e03fa', 'The Last Of Us Part 2', 'Standard Edition', '0', 189, 189, 47, 'False'),
('PROD-67701523c8', 'Resident evil 3', 'Standard Edition', '0', 159, 159, 60, 'False'),
('PROD-06b0faf765', 'Doom Eternal', 'Standard Edition', '0', 199, 199, 49, 'False'),
('PROD-75a48641c4', 'Captain Tsubasa', 'Standard Edition', '0', 229, 229, 40, 'False'),
('PROD-0e44f1ae64', 'Yakuza', 'Standard Edition', '0', 249, 249, 55, 'False'),
('PROD-22ed306493', 'Destiny 2', 'Standard Edition', '0', 249, 249, 30, 'False'),
('PROD-548dc5302a', 'NBA 2K21', 'Mamba Forever Edition', '0', 300, 300, 10, 'True'),
('PROD-333f9827a5', 'Minecraft', 'Legacy Console Edition', '20', 129, 103.2, 23, 'False'),
('PROD-333f9827a5', 'Minecraft', 'Nintendo Switch Edition', '20', 139, 111.2, 40, 'False'),
('PROD-7ea641e823', 'One Piece', 'Standard Edition', '0', 249, 249, 55, 'False'),
('PROD-7ea641e823', 'One Piece', 'Pirate Warrior Edition', '0', 279, 279, 22, 'True'),
('PROD-e5f8fad616', 'Nioh 2', 'Standard Edition', '30', 209, 146.3, 56, 'False'),
('PROD-e5f8fad616', 'Nioh 2', 'Complete Edition', '30', 299, 209.3, 22, 'False'),
('PROD-27f4d38132', 'Need For Speed Heat', 'Standard Edition', '0', 240, 240, 50, 'False'),
('PROD-27f4d38132', 'Need For Speed Heat', 'Deluxe Edition', '0', 300, 300, 12, 'False'),
('PROD-5cb96e64d6', 'Death Stranding', 'Standard Edition', '0', 119, 119, 66, 'False');

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
