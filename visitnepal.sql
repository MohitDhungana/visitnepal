-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 04:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `contact`, `email`, `location`, `user_id`, `description`) VALUES
(1, 'mamta travels and tour', 9843343, 'mamata@abc.com', 'newroad, kathmandu', 1, 'afjajfklajhflahsfjkh'),
(2, 'subin travels pvt ltd', 98988989, 'subin@abc.com', 'sano thimi, bhaktaour', 3, 'akdjf;lajf;lkajs');

-- --------------------------------------------------------

--
-- Table structure for table `createdpackages`
--

CREATE TABLE `createdpackages` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `destination` varchar(500) NOT NULL,
  `inclusion` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createdpackages`
--

INSERT INTO `createdpackages` (`id`, `name`, `duration`, `price`, `destination`, `inclusion`, `user_id`) VALUES
(1, 'gorkhar tour', '2weeks', 10000, 'kathmandu,patan,kalanki,gorkhar', '4meals per day', 4),
(2, 'manang', '4weeks', 50000, 'kathmandu,manang', '4meals per day', 5),
(3, 'biratnagar tour', '6days', 3500, 'biratnagar', '3meals per day', 7),
(4, 'jhapa tour', '7days', 2500, 'jhapa,illam,biratnagar', '4meals per day', 8);

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `places_id` int(11) NOT NULL,
  `features_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `places_id`, `features_id`, `title`, `description`) VALUES
(1, 1, 1, 'Important buildings', 'Krishna Mandir\r\n\r\nKrishna temple is the most important temple in Patan Durbar Square. It was built in the Shikhara style imported from India, although it is unique in its own way. The stone carvings along the beam above the first and second-floor pillar are most notable. The first-floor pillar carvings narrate the events of the Mahabharata, while on the second floor there are visual carvings from Ramayana.\r\n\r\nBhimsen Temple\r\n\r\nBhimsen (Bhin : dya) Temple was built by Srinivasa Malla in 1680. It is renowned for its three interconnected golden windows. Bhimsenis a great personality in Mahabharata and Newar Bhin: Dya is different although there is no concrete proof these two deities are separate . He was known to be brave and strong. In Newa, he is traditionally worshiped as a god of business and trade.[1][12] Tourists are not allowed inside the temple.'),
(2, 2, 2, 'Temples and Gumbas\r\n', 'Tal Barahi Temple (located on the island in the middle of Phewa Lake)\r\n\r\nBindhyabasini Temple\r\n\r\nRadha Krishna Shanti Ashram Lame Al is the public temple complex was established by late 1008 Golokbasi Bhagawat Sharan Devacharya Maharaj. This is one of the major religious and spiritual center in the region. Temple has been one of the major center of the Nimbarka Sampradaya. Temple has played a leadership role in developing social, spiritual well being in the Lekhnath Municipality. The temple is famous among the Radha Krishna devotees. Daily bhagawatsewa, gosewa and public feasts are conducted on a regular basis. Temple has been center of Srimad Bhagawat saptah, ekah, rudri, public marriage ceremony, bratabandha for the public. Provision of holistic health care will be one of the goal of this institution in the near future.');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `places_id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `places_id`, `title`, `description`, `status`) VALUES
(1, 1, 'History', 'The history of the Durbar Square is not clear. Although the Malla Kings of Lalitpur are credited with the establishment of the royal square, it is known that the site is an ancient crossroad. The Pradhanas, who settled around the site before the Mallas, have connections with the Durbar Square. Some chronicles hint that the Thakuri Dynasty built a palace and made reforms to the locality, but there is little evidence of this. Scholars are certain that Patan was a prosperous city since ancient times.', 0),
(2, 2, 'History', 'Pokhara lies on an important old trading route between China and India. In the 17th  century it was part of the Kingdom of Kaski which was one of the Chaubisi Rajya (24 Kingdoms of Nepal) ruled by a branch of the Shah Dynasty. Many of the hills around Pokhara still have medieval ruins from this time. In 1786 Prithvi Narayan Shah added Pokhara into his kingdom. It had by then become an important trading place on the routes from Kathmandu to Jumla and from India to Tibet.\r\nPokhara was envisioned as a commercial center by the King of Kaski in the mid 18th century A.D. when Newars of Bhaktapur migrated to Pokhara, upon being invited by the king, and settled near main business locations such as Bindhyabasini temple, Nalakomukh and Bhairab Tole. Most of Pokhara, at the time, was largely inhabited by Khas[24] (Brahmin, Chhetri, Thakuri and Dalits), the major communities were located in Parsyang, Malepatan, Pardi and Harichowk areas of modern Pokhara and the Majhi community near the Phewa Lake. The establishment of a British recruitment camp brought larger Gurung and Magar communities to Pokhara. At present the Khas, Gurung (Tamu) and Magar form the dominant community of Pokhara. There is also a sizeable Newari population in the city. A small Muslim community is located on eastern fringes of Pokhara generally called Miya Patan. Batulechaur in the far north of Pokhara is home to the Gandharvas or Gaaineys (the tribe of the musicians)', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `website` varchar(400) NOT NULL,
  `tax` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotelimage`
--

CREATE TABLE `hotelimage` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `duration` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `destinations` text NOT NULL,
  `inclusions` text NOT NULL,
  `companies_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `duration`, `price`, `destinations`, `inclusions`, `companies_id`) VALUES
(1, 'lumbinin tour', '2days 3nights', 10000, 'lumbini, pokhara, butwal', '4meals per day', 1),
(2, 'mustang tour', '2weeks', 7000, 'pokhara, mustang', '5meals per day', 2);

-- --------------------------------------------------------

--
-- Table structure for table `placeimage`
--

CREATE TABLE `placeimage` (
  `id` int(11) NOT NULL,
  `places_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placeimage`
--

INSERT INTO `placeimage` (`id`, `places_id`, `image`) VALUES
(2, 4, 'annapurna1.jpg,annapurna0.jpg,annapurna2.jpg'),
(3, 2, 'pokhara0.jpg,pokhara1.jpg,pokhara2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `location` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `place_image` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `tags` varchar(500) NOT NULL,
  `Buslongitude` float NOT NULL,
  `Buslatitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `location`, `description`, `place_image`, `longitude`, `latitude`, `tags`, `Buslongitude`, `Buslatitude`) VALUES
(1, 'Patan Durbar Square', 'Lalitpur , Nepal', ' Patan Durbar Square is one of the three Durbar Squares in the Kathmandu Valley, all of which are UNESCO World Heritage Sites. One of its attraction is the ancient royal palace where the Malla Kings of Lalitpur resided. The Durbar Square is a marvel of Newar architecture. <b>The square floor is tiled with red bricks.</b> There are many temples and idols in the area. The main temples are aligned opposite of the western face of the palace. The entrance of the temples faces east, towards the palace. There is also a bell situated in the alignment beside the main temples. The Square also holds old Newari residential houses. There are other temples and structures in and around Patan Durbar Square built by the Newa People.<br>\r\n<b>History</b><br>\r\nThe history of the Durbar Square is not clear. Although the Malla Kings of Lalitpur are credited with the establishment of the royal square, it is known that the site is an ancient crossroad. The Pradhanas, who settled around the site before the Mallas, have connections with the Durbar Square. Some chronicles hint that the Thakuri Dynasty built a palace and made reforms to the locality, but there is little evidence of this. Scholars are certain that Patan was a prosperous city since ancient times.', 'pds.jpg', 85.5753, 27.6731, 'patan,lalitpur,newa people', 85.3249, 27.6729),
(2, 'Pokhara', 'pokhara,Nepal', 'Pokhara  is a metropolitan city in Nepal. It is the country\'s second largest city in terms of population after the capital Kathmandu. Pokhara is located 200 kilometres (120 miles) west of the capital Kathmandu. The altitude varies from 827 metres (2,713 feet) in the southern part to 1,740 metres (5,710 feet) in the north. The Annapurna Range with three of the ten highest mountains in the world — Dhaulagiri, Annapurna I and Manaslu— is within 15–35 mi (24–56 km) of the valley.\r\nDue to its proximity to the Annapurna mountain range, the city is a base for trekkers undertaking the Annapurna Circuit through the Annapurna Conservation Area region[6] of the Annapurna ranges in the Himalayas.\r\nPokhara is home to many Gurkha soldiers. It is also considered as one of the tourism capital of Nepal.', 'pokhara0.jpg', 83.9914, 28.2095, 'phewa,begnas, davis falls, gupteshwor mahadev,bindabasini,phewa,begnas, davis falls, gupteshwor mahadevtemple,phewa,begnas, davis falls, gupteshwor mahadev', 85.3076, 27.7189),
(3, 'Lumbini', 'Rupandehi District , Province No. 5,Nepal', 'Lumbini  is a Buddhist pilgrimage site in Nepal. It is the place where, according to Buddhist tradition, Queen Mayadevi gave birth to Siddhartha Gautamain 563 BCE. Gautama, who achieved Enlightenment some time around 528 BCE. became the Buddha and founded Buddhism. Lumbini is one of many magnets for pilgrimage that sprang up in places pivotal to the life of the Buddha.\r\nLumbini has a number of older temples, including the Mayadevi Temple, and various new temples, funded by Buddhist organisations from various countries, have been completed or are still under construction. Many monuments, monasteries and a museum, and the Lumbini International Research Institute are also within the holy site. Also, there is the Puskarini, or Holy Pond, where the Buddha\'s mother took the ritual dip prior to his birth and where he had his first bath. At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms\r\n', 'lumbini.jpg', 83.2778, 27.4823, 'mayadevi temple,buddha, puskarini,enlignment,lumbini', 83.2518, 27.6388),
(4, 'Annapurna Circuit', 'Annapurna', 'The Annapurna Circuit is a trek within the Annapurna mountain range of central Nepal. The total length of the route varies between 160–230 km (100-145 mi), depending on where motor transportation is used and where the trek is ended. This trek crosses two different river valleys and encircles the Annapurna Massif. The path reaches its highest point at Thorung La pass (5416m/17769 ft), touching the edge of the Tibetan plateau. Practically all trekkers hike the route anticlockwise, as this way the daily altitude gain is slower, and crossing the high Thorong La pass is easier and safer. The mountain scenery, seen at close quarters includes the Annapurna Massif (Annapurna I-IV), Dhaulagiri, Machhapuchhre, Manaslu, Gangapurna, Tilicho Peak, Pisang Peak, and Paungda Danda. Numerous other peaks of 6000-8000m in elevation rise from the Annapurna range. The trek begins at Besisahar or Bhulbhule in the Marshyangdi river valley and concludes in the Kali Gandaki Gorge.', 'annapurna0.jpg', 83.7178, 28.7643, 'annapurna, thorung la pass ,massif,dhaulagiri,machhapuchhre,manasalu,mountain,himal', 0, 0),
(5, 'Muktinath', 'Mustang, Nepal', 'Muktinath is a sacred place for both Hindus and Buddhists located in Muktinath Valley at an altitude of 3,710 meters at the foot of the Thorong La mountain pass (part of the Himalayas) in Mustang, Nepal. The site is close to the village of Ranipauwa, which is sometimes mistakenly called Muktinath.\r\nWithin Hinduism, it is called Mukti Kshetra, which literally means the \"place of liberation or moksh\". This temple is considered to be 106th among the available 108 Divya Desam (premium temples) considered sacred by the Sri Vaishnava sect. The ancient name of this place in Sri Vaishnava literature, before Buddhist origin, is Thiru Saligramam. This houses the Saligram shila, considered to be the naturally available form of Sriman Narayan – the Hindu Godhead.\r\n', 'muktinath.jpg', 83.8713, 28.8169, 'sacred place, mustang, ranipauwa, mukti kshetra', 0, 0),
(6, 'Pokhara', 'pokhara,Nepal', 'Pokhara  is a metropolitan city in Nepal. It is the country\'s second largest city in terms of population after the capital Kathmandu. Pokhara is located 200 kilometres (120 miles) west of the capital Kathmandu. The altitude varies from 827 metres (2,713 feet) in the southern part to 1,740 metres (5,710 feet) in the north. The Annapurna Range with three of the ten highest mountains in the world — Dhaulagiri, Annapurna I and Manaslu— is within 15–35 mi (24–56 km) of the valley.\r\nDue to its proximity to the Annapurna mountain range, the city is a base for trekkers undertaking the Annapurna Circuit through the Annapurna Conservation Area region[6] of the Annapurna ranges in the Himalayas.\r\nPokhara is home to many Gurkha soldiers. It is also considered as one of the tourism capital of Nepal.', 'pokhara0.jpg', 83.9914, 28.2095, 'phewa,begnas, davis falls, gupteshwor mahadev', 0, 0),
(7, 'Everest Base Camp', 'base of Everest', 'The Everest Base Camp trek on the south side is one of the most popular trekking routes in the Himalayas and is visited by thousands of trekkers each year. Trekkers usually fly from Kathmandu to Lukla to save time and energy before beginning the trek to this base camp. However, trekking to Lukla is possible. There are no roads from Kathmandu to Lukla and as a result, the only method of transporting large and heavy goods is by plane.\r\nFrom Lukla, climbers trek upward to the Sherpa capital of Namche Bazaar, 3,440 metres (11,290 ft), following the valley of the Dudh Kosiriver. It takes about two days to reach the village, which is a central hub of the area. Typically at this point, climbers allow a day of rest for acclimatization. They then trek another two days to Dingboche, 4,260 metres (13,980 ft) before resting for another day for further acclimatization. Another two days takes them to Everest Base Camp via Gorakshep, the flat field below Kala Patthar, 5,545 metres (18,192 ft) and Mt. Pumori.\r\n', 'everest_base.jpg', 86.8515, 28.1418, 'namchebazar,trekking,lukla,gorakshep', 0, 0),
(8, 'Rara Lake', 'Jumla, Mugu District', 'Rara Lake is the biggest and deepest fresh water lake in the Nepal Himalayas. It is the main feature of Rara National Park, located in Jumla and Mugu Districts. In September 2007, it was declared a Ramsar site, covering 1,583 ha (6.11 sq mi) including the surrounding wetland. Rara Lake lies at an altitude of 2,990 m (9,810 ft) above sea level, has a water surface of 10.8 km2 (4.2 sq mi), a maximum depth of 167 m (548 ft), is 5.1 km (3.2 mi) long and 2.7 km (1.7 mi) wide. It drains into the Mugu Karnali River via the Nijar River. Its water quality is characterized by high pH, conductivity and total hardness. It has been classified as oligotrophic as it is slightly polluted. \r\nRara Lake, being surrounded by Rara National Park, has unique floral and faunal importance with rare and vulnerable species. The park was established in 1976 to preserve the beauty of the lake and protect it from sedimentation and adverse human activities. The Park flora consists of 1074 species, of which 16 are endemic to Nepal; the fauna includes 51 species of mammals and 214 species of birds.\r\n', 'rara.jpg', 82.198, 29.2389, 'lake,jumla, mugu,ramsar site,nijar river', 0, 0),
(9, 'Gosaikunda', 'Langtang National Park, Rasuwa District', 'Gosaikunda also spelled Gosainkunda and Gosain Kunda is an alpine freshwater oligotrophic lake in Nepal\'s Langtang National Park, located at an altitude of 4,380 m (14,370 ft) in the Rasuwa District with a surface of 13.8 ha (34 acres). Together with associated lakes, the Gosaikunda Lake complex is 1,030 ha (4.0 sq mi) in size and has been designated a Ramsar site on 29 September 2007\r\nThe lake melts and sips down to form the Trishuli River and remains frozen for six months in winter October to June. There are 108 lakes in this area, small to medium in size. The challenging Lauribina La at an altitude of 4,610 m (15,120 ft) is on its outskirts.\r\n', 'gosaikunda.jpg', 85.5966, 28.1732, 'gosainkunda,oligotrophic,rasuwa,trishuli river', 0, 0),
(10, 'Ilam', 'Province No. 1 , eastern Nepal', 'Ilam is  one of the most developed places in Nepal. Its ILAM TEA is very famous and is exported to many parts of Europe. The main source of income in this district is tea, cardamom, milk, ginger, potato, orlon, and broom production on a large scale. Ilam attracts many researchers who come to study rare birds and the Red Panda. Ilam stretches from the Terai belt to the upper hilly belt of this Himalayan nation.\r\nThe major attraction of Ilam is the 9-cornered Mai Pokhari lake. Also known as the abode of the goddess lots of tourists as well as Nepalese people come to visit this place. Similarly, Gajurmukhi is also the religious spot for pilgrimages from Nepal and India. Mai river and its four tributaries also emerge in Ilam district. The famous Mane Bhanjyang (Mane pass) connects Ilam with Darjeeling district of West Bengal, India.\r\n', 'illam.jpg', 87.9219, 26.9077, 'ilam, tea, mai pokhari', 0, 0),
(11, 'Gokyo Lakes', 'Sagarmatha Zone, north-eastern Nepal', 'Gokyo Lakes are oligotrophic lakes in Nepal\'s Sagarmatha National Park, located at an altitude of 4,700–5,000 m (15,400–16,400 ft) above sea level. These lakes are the world’s highest freshwater lake system comprising six main lakes, of which Thonak Lake is the largest. In September 2007, Gokyo and associated wetlands of 7,770 ha (30.0 sq mi) have been designated a Ramsar site.\r\nGokyo lakes are located in Khumjung Village Development Committee of Solukhumbu District in Sagarmatha Zone in north-eastern Nepal. Gokyo Cho, also called Dudh Pokhari, is the main lake with an area of 42.9 ha (106 acres), and the village of Gokyo lies on its eastern shore. Thonak Cho is the largest lake with an area of 65.07 ha (160.8 acres). Gyazumpa Cho is 29 ha (72 acres) in size, followed by Tanjung Cho with an area of 16.95 ha (41.9 acres), and Ngojumba Cho with an area of 14.39 ha (35.6 acres). As sources of permanent fresh water they have high hydrological value. They feed on waters from various sources, such as seepage from the Ngozumpa glacier, a stream coming from the Renjo La pass from north-west and another stream originating from the Ngozumpa glacier in the east.\r\n', 'gokyo.jpg', 86.6946, 27.9541, 'dudh pokhari,six lakes,thonak cho,khumjung', 0, 0),
(12, 'Dolpo', 'Dolpa,Western Nepal', 'Dolpo is a high-altitude culturally Tibetan region in the upper part of the Dolpa District of western Nepal, bordered in the north by China. Part of the region lies in Shey Phoksundo National Park. The sparse, agro-pastoral population, known as Dolpo in standard Tibetan and Dhol-wa in the local dialect, is connected to the rest of Nepal via Jufal airport, which can be reached in three days by horse. There are no precise population numbers for the region, with estimates including less than 5,000 and 18,000. The Dolpo are generally adherents of Bon, a religion whose origins predate Buddhism but whose modern form is officially accepted as a fifth school of Tibetan Buddhism. The remote region has preserved its Tibetan culture in relatively pure form, making it attractive to Westerners. Dolpa was the location for the 1999 Oscar-nominated film Himalaya and more recently for the German documentary Dolpo Tulku.\r\nIn spite of the near inaccessibility of the region and tourism restrictions for the more remote parts, Dolpa is a popular destination for trekking tourism.\r\n', 'dolpo.jpg', 83.0358, 29.2145, 'dolpo, tibetian,shey phoksundo', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `places` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `title`, `description`, `places`, `image`) VALUES
(1, 'Paragliding', 'Paragliding a new type of adventure course in Nepal and it is getting most popular as other major activities. Paragliding is a truly fantastic and pleasing that any adventure lover can feel or experience. It is the purest form of flying by using the elements and rising currents of warm air, we can stay aloft for many hours and travel long distance. This simple craft fits easily into a rucksack and weights about 10kg with full experience of the extreme scenic dignity, as your share airspace flies near the Himalayan as a griffin vultures, eagles, kites, floating over the villages, monasteries, temples, lakes, and jungles, with a fantastic view of the magnificent Himalayas. It will allow you to see landscapes through bird eye views.\r\nFor best paragliding, it depends upon weather condition. The flying season in Nepal commences from November to February. But the best months is between November and December. The main area for flying in Nepal is the Annapurna region, more specifically the Pokhara valley. The micro-climate of the valley makes it an ideal area for flying, with far more constant conditions than the Kathmandu valley 150km east. The gliding is offered in Mahabharat range however, the more is done in Pokhara, the beautiful lakeside town at the bottom of the Annapurna Himal. The starting point for the flight is Sarangkot (1592m), which offers great views of Fewa Lake, where the sunrise and sunset rays land in. If you want to have paragliding, you do not need to have experience, as the qualified pilots will provide you full briefing before you launch.', 'sarangkot (1592m)', 'paragliding.jpg'),
(2, 'Bungy Jumping', 'Bungy jump was restricted to some places in Europe, New Zealand and America, now time has brought so many things different more funny exiting adventures in the world so we need to be updated as it\'s time you got chanced and developed. The sport has finally found a natural home in the highest mountain range in the world. The ultimate thrill of a Bungy jump can now be experienced in Nepal at perhaps the best site in the world. Nepal\'s first bungy jumping site is situated 160m over the wild Bhote Kosi river, and located close to the Nepal-Tibet border, a three-hour bus ride from Kathmandu. The jump, at 160m, was designed by one of New Zealand’s leading bungy consultants, and is operated by some of the most experienced jump masters in the business. It\'s mishap-proof. The bungy agency takes safety first very seriously.', 'Less than 3 hours outside Kathmandu by Ultimate Bungy Shuttle. You will travel the Arniko (Kathmandu/Lhasa) Highway to within 12km of the Nepal-Tibet Border and the famous Friendship Bridge.\r\n20min from lake side, Pokhara', 'bungy.jpg'),
(3, 'Rock Climbing', 'Rock Climbing in Nepal is a hobby sport in which participants climb up or across natural rock formations or man-made climbing walls. Rock climbing is a physically and mentally demanding sport, one that often tests a climber\'s strength, endurance, agility, and balance along with his or her mental control. It can be a dangerous sport and knowledge of proper climbing techniques and usage of specialized climbing equipment is crucial for the safe completion of routes.', 'Shreeban Rock Climbing, Hattiban Rock Climbing, Balaju Rock Climbing', 'rock.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `user_type`, `status`, `image`, `password`) VALUES
(1, 'shreejit bhattarai', 'pepsicola,kathmandu', 'shreejit@gmail.com', 'admin', 1, '', 123),
(2, 'mamata shrestha', 'new baneshwor , kathmandu', 'mamata12@gmail.com', 'mainadmin', 1, '', 123),
(3, 'mohit dhungana', 'shantinagar, kathmandu', 'mohit@gmail.com', 'admin', 1, '', 123),
(4, 'subin panta', 'chabhil, kathmandu', 'subin@gmail.com', 'general', 0, '', 123),
(5, 'ujjwal pudasaini', 'mulpani, kathmandu', 'uzol@gmail.com', 'general', 1, '', 0),
(6, 'sujan dhakal', 'banepa,bhaktapur', 'prince@gmail.com', 'general', 1, '', 0),
(7, 'suraj adhikari', 'kavre', 'suraj@gmail.com', 'general', 0, '', 0),
(8, 'bibek khadka', 'thimi,bhaktapur', 'bibek@gmail.com', 'general', 1, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createdpackages`
--
ALTER TABLE `createdpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelimage`
--
ALTER TABLE `hotelimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placeimage`
--
ALTER TABLE `placeimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `createdpackages`
--
ALTER TABLE `createdpackages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotelimage`
--
ALTER TABLE `hotelimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `placeimage`
--
ALTER TABLE `placeimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
