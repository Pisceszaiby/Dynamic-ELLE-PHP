-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 05:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elle`
--
CREATE DATABASE IF NOT EXISTS `elle` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elle`;
-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` int(11) NOT NULL,
  `heading` text NOT NULL,
  `subheading` text NOT NULL,
  `category` text NOT NULL,
  `author` text NOT NULL,
  `picPath` varchar(255) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `heading`, `subheading`, `category`, `author`, `picPath`, `url`) VALUES
(1, 'ELLE’s 2022 Women in Hollywood Sound Off on #MeToo', 'Olivia Wilde, Sigourney Weaver, Anne Hathaway, and more discuss the five-year anniversary of the viral hashtag and movement.', 'MAIN', 'Editors', 'https://hips.hearstapps.com/hmg-prod/images/elle-wih-metoo-22-lead-1666803361.jpg?crop=0.567xw:1.00xh;0.213xw,0&resize=980:*', 'https://www.elle.com/culture/a41756833/elle-2022-women-in-hollywood-on-metoo/'),
(2, 'The 26 Best Pairs of Chunky Boots to Bulk Up Your Shoe Collection', 'One cold weather staple, coming right up.', 'FASHION', 'Meg Donohue', 'https://hips.hearstapps.com/hmg-prod/images/1-best-chunky-boots-of-2022-index-comp-1666626317.jpg?crop=1.00xw:1.00xh;0,0&resize=980:*', 'https://www.elle.com/fashion/shopping/g41614515/best-chunky-boots/'),
(3, 'The Best Net-A-Porter Black Friday Deals To Shop Before They Sell Out', 'Designers from Chloé to Khaite are up to 50 percent off—and pieces are selling fast.', 'SHOP ', 'Halie Lesavage', 'https://hips.hearstapps.com/hmg-prod/images/gettyimages-1008076378a-1670351911.jpg?crop=0.671xw:1.00xh;0.308xw,0&resize=360:*', 'https://www.elle.com/fashion/shopping/g42030441/net-a-porter-black-friday-2022/'),
(4, 'The 20 Coolest Pairs Of Mary Janes To Step Into Right Now', 'One part cutesy, one part high fashion', 'SHOP', 'Meg Donohue', 'https://hips.hearstapps.com/hmg-prod/images/gettyimages-1063186802a-1670351682.jpg?crop=0.603xw:0.905xh;0.207xw,0.0513xh&resize=360:*', 'https://www.elle.com/fashion/shopping/g41955541/best-mary-jane-shoes/'),
(5, 'The 18 Coolest Clogs to Shop Now', 'Have you heard the news? Clogs are cool now.', 'SHOP ', 'Meg Donohue, Dale Arden Chong', 'https://hips.hearstapps.com/hmg-prod/images/1-clog-roundup-index-comp-1664897918.jpg?crop=0.388xw:0.776xh;0.301xw,0.109xh&resize=360:*', 'https://www.elle.com/fashion/shopping/g41429002/best-clogs/'),
(6, 'The 25 Best Fall Hats To Wear With All Your Fall Fits', 'Up your layering game and top off your look with a hat from our best fall hats edit this season.', 'SHOP ', 'Emma Sutich', 'https://hips.hearstapps.com/hmg-prod/images/1-index-best-fall-2022-hats-1662058703.jpg?crop=0.349xw:0.699xh;0.324xw,0.157xh&resize=360:*', 'https://www.elle.com/fashion/shopping/g40959083/best-fall-hats/'),
(7, 'The 12 Best Magnetic Lashes That Will Make You Ditch Your Falsies', 'Bring on the drama.', 'BEAUTY', 'Tatjana Freund, Sam Peters', 'https://hips.hearstapps.com/hmg-prod/images/gettyimages-850317928a-1651163393.jpg?crop=1.00xw:0.752xh;0,0.0433xh&resize=720:*', 'https://www.elle.com/beauty/makeup-skin-care/g32365344/best-magnetic-eyelashes/'),
(8, '16 Beauty Gifts From Sephora You Need This Holiday Season', 'La Mer, Dyson, and Tatcha–oh my', 'BEAUTY', 'Tatjana Freund', 'https://hips.hearstapps.com/hmg-prod/images/elle-shopping-products-03-1668534786.jpg?crop=0.498xw:0.997xh;0.127xw,0&resize=360:*', 'https://www.elle.com/beauty/g41967282/beauty-gifts-sephora/'),
(9, 'Rare Beauty Has a New Product That Will Be the Highlight of the Season', 'Light attracts light.', 'BEAUTY', 'Danielle James', 'https://hips.hearstapps.com/hmg-prod/images/q104-mca-sp23-mc-look2-0052-v2-rgb-fnl-1670248992.jpg?crop=0.819xw:1.00xh;0.0913xw,0&resize=360:*', 'https://www.elle.com/beauty/makeup-skin-care/a42136305/rare-beauty-positive-light-silky-touch-highlighter/'),
(10, 'Your Guide to Crushing the Holiday Party Hair Game', 'Four ways to get festive—plus how to extend your best looks with dry shampoo.', 'BEAUTY', 'Sarah Ferguson', 'https://hips.hearstapps.com/hmg-prod/images/20221020-cosmo-batiste-look-2-556-1668102228.jpg?crop=0.668xw:1.00xh;0.167xw,0&resize=360:*', 'https://www.elle.com/beauty/a42084947/your-guide-to-crushing-the-holiday-party-hair-game/'),
(11, 'Here’s What to Expect in the World of Wellness in 2023', 'These experts are calling next on these health, fitness, and beauty trends', 'BEAUTY', 'Shani Hillian', 'https://hips.hearstapps.com/hmg-prod/images/world-of-wellness-2023-1667413001.jpg?crop=0.551xw:1.00xh;0.0313xw,0&resize=360:*', 'https://www.elle.com/beauty/health-fitness/a41756281/heres-what-to-expect-in-the-world-of-wellness-in-2023/'),
(13, 'Christina Ricci Is Ready to Pass the Torch to the Next Wednesday', 'The actress says Jenna Ortega is “truly incredible at making Wednesday a modern badass.”', 'CULTURE', 'Faran Krentcil', 'https://hips.hearstapps.com/hmg-prod/images/christina-ricci-attends-the-world-premiere-of-netflixs-news-photo-1670254919.jpg?crop=0.670xw:1.00xh;0.143xw,0&resize=360:*', 'https://www.elle.com/culture/movies-tv/a42153237/christina-ricci-wednesday-interview/'),
(14, 'Mallori Johnson Is Bringing Octavia Butler’s Work to Life in Kindred', 'The Hollywood newcomer and Juilliard grad leads FX\'s adaptation of Butler\'s iconic novel. And she\'s just getting started.', 'CULTURE', 'Roxanne Fequiere', 'https://hips.hearstapps.com/hmg-prod/images/kindred-mallorijohnson1060-matt-doyle-1670012958.jpg?crop=1xw:0.7999708624708625xh;center,top&resize=360:*', 'https://www.elle.com/culture/movies-tv/a42136687/mallori-johnson-kindred-interview/'),
(15, 'Reinvigorated, Taylor Momsen Is Ready for Her Next Chapter', 'The front woman of The Pretty Reckless on the band’s “rebirth,” processing grief, and whether she’ll ever act again.', 'CULTURE', 'Ashley Oken', 'https://hips.hearstapps.com/hmg-prod/images/tm-redchair001-edited-1669992881.jpg?crop=1.00xw:0.667xh;0,0.0704xh&resize=980:*', 'https://www.elle.com/culture/music/a42124304/taylor-momsen-interview/'),
(16, 'Shelf Life: Misty Copeland', 'Tom Cruise continues to maintain unwavering loyalty to the big screen experience – and that paid off in spades in this case', 'CULTURE', 'Samuel Maude', 'https://hips.hearstapps.com/hmg-prod/images/shelf-life-misty-copeland-1669836845.jpg?crop=0.5xw:1xh;center,top&resize=360:*', 'https://www.elle.com/culture/books/a41926946/misty-copeland-book-recommendations-2022/'),
(17, 'Bravery and Brutality: Former Political Prisoner Marina Nemat Reflects on the Mass Protests in Iran', '', 'NEWS', 'Wendy Kaur', 'https://hips.hearstapps.com/hmg-prod/images/gettyimages-1668638257.jpg?crop=0.668xw:1.00xh;0.0898xw,0&resize=640:*', 'https://www.elle.com/culture/career-politics/a41966693/mahsa-amini-protests-death-marina-nemat/'),
(18, 'The 32 Best Gifts For Foodies', 'Edibles, kitchenware, gadgets, and other rare finds, because food is (literally) life', 'TRENDING ', 'Vanessa Powell', 'https://hips.hearstapps.com/hmg-prod/images/1-foodie-gift-guide-2022-index-comp-1670438878.jpg?crop=0.370xw:0.739xh;0.298xw,0.137xh&resize=360:*', 'https://www.elle.com/fashion/shopping/g42163021/best-gifts-for-foodies/'),
(19, 'ELLE’s 2022 Holiday Gift Guide', 'When planning your gift-giving this season, why not look to architecture for inspiration? Up first: Louis Vuitton’s dreamy dollhouse bag.', 'TRENDING', 'The Editors', 'https://hips.hearstapps.com/hmg-prod/images/shops-index-december-1670430534.jpg?crop=0.417xw:0.739xh;0.295xw,0.0284xh&resize=360:*', 'https://www.elle.com/fashion/shopping/a41915649/elle-holiday-gift-guide-2022/'),
(20, 'Meghan Markle on Why She Shared Her Mental Health Struggle ‘Despite Every Second of Whatever Comes With It’', '', 'TRENDING', 'Alyssa Bailey', 'https://hips.hearstapps.com/hmg-prod/images/meghan-duchess-of-sussex-attends-a-reception-hosted-by-the-news-photo-1670442030.jpg?crop=1.00xw:0.792xh;0,0.0684xh&resize=360:*', 'https://www.elle.com/culture/celebrities/a42179806/meghan-markle-mental-health-struggle-sharing-reason/'),
(21, '30 Beauty Gifts From Nordstrom You Need This Holiday Season', 'Win your family\'s festivities.', 'TRENDING', 'Tatjana Freund', 'https://hips.hearstapps.com/hmg-prod/images/elle-shopping-products-02-1668466448.jpg?crop=0.409xw:0.817xh;0,0.115xh&resize=360:*', 'https://www.elle.com/beauty/g38199464/beauty-gifts-nordstrom/'),
(23, 'These 18 Best Beauty Gifts Are Under $100', 'Cheap yet chic.', 'TRENDING', 'Tatjana Freund', 'https://hips.hearstapps.com/hmg-prod/images/elle-shopping-products-celine-candle-1668101564.jpg?crop=0.502xw:1.00xh;0.240xw,0&resize=360:*', 'https://www.elle.com/beauty/g41914389/best-beauty-gifts-under-100/'),
(24, 'The Unbearable Lightness of Daphne Sullivan', 'Unpacking the problematic White Lotus character’s style.', 'STYLE', 'Veronique Hyland', 'https://hips.hearstapps.com/hmg-prod/images/1-style-points-the-unbearable-lightness-of-daphne-sullivan-1670439920.jpg?crop=0.5xw:1xh;center,top&resize=980:*', 'https://www.elle.com/fashion/a42169103/the-white-lotus-season-2-daphne-sullivan-costumes/'),
(25, 'Alessandro Michele Made Eccentric Maximalism Cool', 'During his tenure at Gucci, the designer turned oddball style into runway gold.', 'STYLE', 'Veronique Hyland', 'https://hips.hearstapps.com/hmg-prod/images/1-style-points-alessandro-michele-1669655167.jpg?crop=0.5xw:1xh;center,top&resize=980:*', 'https://www.elle.com/fashion/a42084554/alessandro-michele-best-gucci-designs/'),
(26, 'The Mugler Mothership Touches Down in Brooklyn', 'Thierry Mugler was lightyears ahead of his time. Now, a retrospective of his work is coming to New York City.', 'STYLE', 'Veronique Hyland', 'https://hips.hearstapps.com/hmg-prod/images/1-style-points-mugler-exhibit-1668091035.jpg?crop=0.5xw:1xh;center,top&resize=980:*', 'https://www.elle.com/fashion/a41869475/thierry-mugler-exhibit-brooklyn-museum/'),
(27, 'Sies Marjan Returns—in Book Form', 'Designer Sander Lak on dressing Donna Tartt, his new coffee table book, and what’s next.', 'STYLE', 'Veronique Hyland', 'https://hips.hearstapps.com/hmg-prod/images/2-style-points-sies-marjan-1665587218.jpg?crop=0.5xw:1xh;center,top&resize=980:*', 'https://www.elle.com/fashion/a41576683/sies-marjan-book/'),
(28, 'Glennon Doyle on Her Little-Known First Book and the Habit That ‘Saves’ Her Every Day', '', 'OFFICE', 'Madison Feller', 'https://hips.hearstapps.com/hmg-prod/images/glennon-index-1669845332.png?resize=980:*', 'https://www.elle.com/culture/celebrities/a42029479/glennon-doyle-podcast-we-can-do-hard-things-untamed-career/'),
(29, 'How Caroline Hirsch Turned a Cabaret Into New York’s Hottest Comedy Club', '', 'OFFICE', 'Claire Stern', 'https://hips.hearstapps.com/hmg-prod/images/index-1667839164.png?resize=980:*', 'https://www.elle.com/culture/a41887625/caroline-hirsch-career-carolines-on-broadway/'),
(30, 'How Composer Jeanine Tesori ‘Paints’ Her History-Making Musicals', '', 'OFFICE', 'Samuel Mauede', 'https://hips.hearstapps.com/hmg-prod/images/office-hourse-jt-index-1667355831.png?resize=980:*', 'https://www.elle.com/culture/a41837963/jeanine-tesori-career-interview/'),
(31, 'Maggie Haberman on Why She Still Covers Donald Trump, Challenging the Powerful, and the Beat That Didn’t ‘Fit’', '', 'OFFICE', 'Madison Feller', 'https://hips.hearstapps.com/hmg-prod/images/index-1-1-1665680109.png?resize=980:*', 'https://www.elle.com/culture/career-politics/a41499646/maggie-haberman-book-confidence-man-trump-career/'),
(32, 'Avril Lavigne’s Style Is Still Anything But Ordinary', 'The beloved pop-punk singer reflects on her most iconic album cover look, 20 years later', 'CLOTHES', 'Rose Minutaglio', 'https://hips.hearstapps.com/hmg-prod/images/elle-avrillavigne-ff-web-1-1668526698.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=980:*', 'https://www.elle.com/fashion/a41650719/avril-lavigne-let-go-album-cover-style/'),
(33, 'Why Rep. Mary Peltola Wore Traditional Yup\'ik Boots to Her History-Making Swearing-In Ceremony', 'Peltola is the first Alaska Native ever elected to Congress and the first woman to represent the state in the House.', 'CLOTHES', 'Madison Feller', 'https://hips.hearstapps.com/hmg-prod/images/elle-peltola-finalf-1666633767.jpg?resize=980:*', 'https://www.elle.com/culture/career-politics/a41755947/rep-mary-peltola-traditional-boots-swearing-in-ceremony/'),
(34, 'TikTok Star Dylan Mulvaney’s Tiffany Necklace Is a Gift to Her Younger Self', '', 'CLOTHES', 'Madison Feller', 'https://hips.hearstapps.com/hmg-prod/images/dylan-elle-ff-hr-1664236607.jpg?resize=980:*', 'https://www.elle.com/fashion/celebrity-style/a41298271/dylan-mulvaney-tiktok-fashion-tiffany-necklace/'),
(35, 'Shania Twain Knows the Power of Leopard Print', 'Brad Pitt might not impress the Queen of Country Pop—but animal prints sure do.', 'CLOTHES', 'Rose Minutaglio', 'https://hips.hearstapps.com/hmg-prod/images/st-hr-ff1-sh-elle-1662576629.jpg?crop=1.00xw:0.669xh;0,0.00227xh&resize=980:*', 'https://www.elle.com/fashion/celebrity-style/a41001848/shania-twain-leopard-print-cowgirl-fashion/'),
(36, 'Taurus Daily Horoscope', '(April 20 - May 20)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_nrm_1420488017-taurus.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a98/taurus-daily-horoscope/'),
(37, 'Aries Daily Horoscope', '(March 21 - April 19)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420487842-aries.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a60/aries-daily-horoscope/'),
(38, 'Pisces Daily Horoscope', '(February 19 - March 20)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/nrm_1420491189-pisces.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a108/pisces-daily-horoscope/'),
(39, 'Aquarius Daily Horoscope', '(January 20 - February 18)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420491106-aquarius.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a107/aquarius-daily-horoscope/'),
(40, 'Capricorn Daily Horoscope', '(December 22 - January 19)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420491024-capricorn.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a106/capricorn-daily-horoscope/'),
(41, 'Virgo Daily Horoscope', '(August 23 - September 22)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420490592-virgo.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a102/virgo-daily-horoscope/'),
(42, 'Sagittarius Daily Horoscope', '(November 22 - December 21)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420498727-sagittarus.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a105/sagittarius-daily-horoscope/'),
(43, 'Scorpio Daily Horoscope', '(October 23 - November 21)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420490826-scorpio.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a104/scorpio-daily-horoscope/'),
(44, 'Libra Daily Horoscope', '(September 23 - October 22)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_nrm_1420490678-libra.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a103/libra-daily-horoscope/'),
(45, 'Virgo Daily Horoscope', '(August 23 - September 22)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420490592-virgo.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a102/virgo-daily-horoscope/'),
(46, 'Leo Daily Horoscope', '(July 23 - August 22)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420490472-leon.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a101/leo-daily-horoscope/'),
(47, 'Cancer Daily Horoscope', '(June 21 - July 22)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420490472-leon.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a100/cancer-daily-horoscope/'),
(48, 'Gemini Daily Horoscope', '(May 21 - June 20)', 'HOROSCOPE', 'The Astrotwins', 'https://hips.hearstapps.com/ell.h-cdn.co/assets/15/02/4000x2000/landscape_nrm_1420489466-gemini.jpg?resize=980:*', 'https://www.elle.com/horoscopes/daily/a99/gemini-daily-horoscope/'),
(50, 'Taylor Swift Releases 7 More Songs for Midnights\' 3 A.M. Edition', '', 'SONG', 'Alyssa Bailey', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/taylor-3-am-1666336320.jpeg?crop=1.00xw:1.00xh;0,0&resize=980:*', 'https://www.elle.com/culture/music/a41730428/taylor-swift-3-am-annoucement-seven-new-songs/'),
(51, 'ENHYPEN Sings ‘Polaroid Love,’ Harry Styles, and Justin Bieber in Round 2 of Song Association', '', 'SONG', 'Alyssa Bailey', 'https://hips.hearstapps.com/vidthumb/images/2022-elle-song-association-fb-enhypen-gfx-v2-lf-1651089274.png?crop=0.5625xw:1xh;center,top&resize=980:*', 'https://www.elle.com/culture/music/a39947573/song-association-enhypen-round-2/'),
(52, 'Meghan on First Meeting With Kate and Hug Reaction', '', 'TRENDING', 'Tatjana Freund', 'https://hips.hearstapps.com/hmg-prod/images/the-duchess-of-cambridge-and-meghan-markle-arriving-to-news-photo-1670531883.jpg?crop=0.774xw:1.00xh;0.114xw,0&resize=360:*', 'https://www.elle.com/culture/celebrities/a42190859/meghan-markle-kate-middleton-first-meeting-hug-reaction-documentary/'),
(53, 'Prince Harry on Seeing Diana in Meghan', '', 'TRENDING', 'The Editors', 'https://hips.hearstapps.com/hmg-prod/images/meghan-markle-prince-harry-diana-gettyimages-52097889-1670532265.jpg?crop=0.476xw:0.952xh;0,0&resize=360:*', 'https://www.elle.com/culture/celebrities/a42190869/prince-harry-princess-diana-meghan-markle-quotes/'),
(54, 'The 18 Best Wallets for Women to Use Every Day', '', 'TRENDING', 'Tatjana Freund', 'https://hips.hearstapps.com/hmg-prod/images/1-best-womens-wallets-2022-index-comp-1670353618.jpg?crop=0.354xw:0.708xh;0.322xw,0.157xh&resize=360:*', 'https://www.elle.com/fashion/shopping/g40615076/best-womens-wallets/'),
(55, 'Everything About Jennifer Lopez\'s New Album', 'The ballet dancer and author of The Wind at My Back takes our literary survey.', 'CULTURE', 'Riza Cruz', 'https://hips.hearstapps.com/hmg-prod/images/jennifer-lopez-is-seen-leaving-into-the-woods-broadway-news-photo-1669488265.jpg?crop=0.752xw:0.706xh;0.119xw,0.0377xh&resize=360:*', 'https://www.elle.com/culture/music/a42074090/jennifer-lopez-new-album-this-is-me-now/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
