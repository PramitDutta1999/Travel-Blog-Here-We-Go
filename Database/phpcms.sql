-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 08:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(10000) NOT NULL,
  `status` varchar(5) NOT NULL,
  `approvedby` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`, `status`, `approvedby`) VALUES
(10, 'June-29-2020 20:38:32', 'Ocean:Origin of Life!', 'Ocean And Sea', 'Pramit Dutta', 'pexels-photo-346885.jpeg', '    Some people don''t get seasick while others do. If you want to avoid seasickness and enjoy your trip sooner rather than later, take some crackers and sea-sickness pills.\r\nBring cards, small games, or reading to keep you entertained, but remember to travel light at the same time.\r\nTreat cruise ships like any land trip and store valuables in a safe or leave them behind. Similarly, don''t flaunt fancy jewelry or watches unless you want to be a target for petty theft.\r\nIf you drink, watch your alcohol as there are instances of individuals leaning on railings and falling overboard after drinking too much alcohol.\r\nPirates still exist in modern times. Probably the most infamous cases in recent years have occurred off of the Somali Coast and the Gulf of Aden. Keep in mind that most ships will avoid these areas, but double-check your destinations to minimize such risks.  ', 'ON', 'admin'),
(12, 'June-30-2020 09:07:49', 'Bangladesh:Explore The Unexplored', 'Bangladesh', 'Pramit Dutta', 'tourism01.jpg', '    After a long nine-month-long war of sacrifice, we achieved our independence in 1971.  Independence from the dominance of the then West Pakistan under the greatest leadership of the father of the Nation Bangabandhu Sheikh Mujibur Rahman is the supreme achievement of the Bengali nation. In the sphere of the tourism industry, our main success was the creation of Bangladesh Parjatan Corporation in 1972 by Bangabandhu Sheikh Mujibur Rahman. His immense visionary leadership and dream for the development of tourism in the country inspired him to establish Bangladesh Parjatan Corporation as the national tourism organization. Bangabandhu, the greatest person of thousand of years of history of Bengali, loved the country and always aspired to promote the country as one of the best tourist destinations in the world. The dedication and contribution of Bangabandhu’s family to build up the newly-independent Bangladesh were also immense.\r\n\r\n\r\nIf we analyze the Ordinance of Bangladesh Parjatan Corporation made under the Presidential Order-143 in 1972, we find that the whole gamut of tourism development for the next century was properly mentioned there. BPC was assigned to create & develop all kinds of tourism & hospitality facilities across the country, enhance the positive image of the country abroad, create tourism human resource, carry out research on tourism, establish tourism institutes as well as different kinds of tourism parks including safari, establish foreign liaison, operate money exchange centers, run casinos, conduct package tours & rent-a-car facilities and many more. This organization has given the power to control and regulate the tourism industry of Bangladesh (vide: BPC ordinance 2.a). The BPC ordinance of 1972 is very significant to create a strong base of Bangladesh tourism. However, the power of the ordinance has not been utilized optimally for various political reasons. The socio-political history of the last 45 years of Bangladesh somehow avoided focusing the tourism development despite having so many opportunities. The hurdles and reasons have already been discussed several times by many experts. The tourism industry of Bangladesh passed many years consecutively without any budgetary allocation; even not a penny.\r\n\r\n\r\nHowever, Bangladesh is now on the highway of its development under the dynamic and progressive leadership of the daughter of Bangabandhu, Her Excellency Sheikh Hasina, Hon’ble Prime Minister of Bangladesh. The tourism industry of Bangladesh is now moving on the right track under the direct supervision of Hon’ble Prime Minister. She is a tourism-loving person, who always kindly instructs BPC to create international standard tourist facilities in the country. To attract more foreign tourists in the country, Her Excellency titled 2016 as the ‘Year of Visit Bangladesh’ activities under the title head are extended from 2017 to 2018. The ECNEC under the chairmanship of the Hon’ble Prime Minister has also approved the Tourism Bhaban along with many other tourism projects for the current fiscal year.  \r\n\r\nTo ensure a consistent success of the tourism industry, the present government has taken some commendable initiatives including the creation of tourist accommodation and amusement facilities across the country. During the previous tenure of H.E. Sheikh Hasina, the government recognized tourism as an industry and framed a new National Tourism Policy in 2010 for the development of domestic and international tourism facilities in the country. The government has also enacted the ‘Tourism Protected Area and Exclusive Tourist Zone Law’ in 2010. This law helps in attracting foreign investments in the ETFs. Apart from these, Bangladesh Tourism Board was formed in the same year with the direct participation of private sector tourism stakeholders.\r\n\r\n\r\nRight now the country is focusing on building tourism destinations and developing their peripheral facilities. The tourism products of Bangladesh have started to enter the world tourism market. Today Bangladesh is a country at the crossroads in the global tourism market. She is moving towards the 21st century while still maintaining a link with the past. Bangladesh is a country whose sights and sounds delight a visitor and make him return back again and again to this land in the mosaic.\r\n\r\n\r\nAfter a long 45 years, Bangladesh recently has graduated to a lower-middle-income country status. The purchasing ability of people has also increased much and its consistent GDP growth for the last half a decade already has left a good impact on the overall economic development. Life expectancy and enrolment of children in school have increased significantly.  People now love to visit and see their own country. All these socio-political and historical positive trends of the country will surely encourage foreign tourists to visit this country in the days coming ahead.\r\n\r\n-The author is a tourism\r\ndevelopment activist  ', 'ON', 'admin'),
(14, 'June-30-2020 09:17:52', 'Why do people want to travel to Antarctica, anyway?', 'Antarctica', 'Pramit Dutta', '1575057588302.jpg', 'I spent several days asking this question of my shipmates on Quark Expeditions’ Ocean Diamond. Most of my fellow passengers came from Australia or North America; they ranged in age from teenagers to seniors, a great many of them over 55.\r\n\r\n“Why are you here?” I asked. “Why did you take this trip? What made you choose to come to Antarctica?”\r\n\r\nAnd strangely, everyone struggled a bit when answering, hemming and hawing before admitting the real reason.\r\n\r\n“Because it’s my seventh continent,” was far and away the most popular answer. Just behind it? “Because I can. Because it’s there.” And the ever-popular, “Why not?”\r\n\r\nIt’s far from an unusual ethos — early 20th century French explorer Jean-Baptise Charcot named one of his ships the Pourquoi-Pas. He later gave an island the same name.\r\n\r\nWhen I pressed my companions for more, I occasionally got a more detailed response — “Because I love penguins.” “Because climate change means it might not always be like this.” “Because I’m getting older and I want to do these adventure trips while I’m able.” But the vast majority of responses were rooted in Antarctica being their seventh continent, the ultimate achievement to check-off.\r\n\r\nEveryone had a bit of ego in their response. People were traveling here because they wanted to feel more important, more experienced, more special. They didn’t just want to visit somewhere remarkable, they wanted to become more remarkable as a result of having visited.\r\n\r\nI find that interesting.\r\n\r\nAsk strangers why they’re visiting Italy and they’ll say, “Because I love Italian food.” Or “Because the Italian countryside is beautiful.” Or “Because my family comes from Italy and I want to explore my roots.” Or even “Because I grew up dreaming about taking a gondola ride through Venice and I want to have that experience.” The answers are far more concrete and specific than what I got about Antarctica.For me, I came to Antarctica because I wanted to be impressed. One of the realities about travel is that the more you experience, the more difficult it gets to be impressed. Remember how excited you were to see cobblestone streets in Europe? Decades later, do you even notice cobblestones anymore? Or cathedrals? Or palm trees?\r\n\r\nBut everyone I know who has been to Antarctica told me that THIS would be the place to TRULY enchant me and leave me in wonder. It’s the kind of destination that is so big, so remote, so untouched, that nothing I had seen before would be able to compare.So yes. I was here primarily to be blown away — but I have to admit that there’s ego behind my own answer as well. I did want to say that I’ve been to seven continents. For myself, but also for my career. I’ve always felt that in order to be taken seriously as a global travel expert, I need to have travel experience on all seven continents. I hate the phrase “on six continents,” even as it decorates my site and all my bios — it’s like an asterisk saying SHE’S GOOD, BUT NOT GOOD ENOUGH!\r\n\r\nAnd so I went to Antarctica for several reasons: to become a more experienced traveler and for the boost it would give to my career, but also for the landscape photography opportunities (particularly mountains and ice formations), the wildlife (and especially penguins), and the opportunity to work with Quark Expeditions (which I’ve wanted to do for years, as they’re the best in the polar expedition business), who invited me to join them on this trip as their hosted guest. All that, and to be blown away.\r\n\r\nI could not have predicted just how powerful of a destination Antarctica is. It would change me, and it would change all of US.', 'ON', 'admin'),
(16, 'July-04-2020 09:14:02', 'Bangladesh:Enjoy The Cuisine', 'Food', 'Pramit', 'A-Bangladeshi-food-feast.jpg', 'The cuisine of Bangladesh is influenced by its landscapes and the bounty that the land, the rivers and the sea produce. It is heavily shaped by the country’s low-lying altitude and abundance of water, especially through the annual monsoon.\r\n\r\nBesides the land and geography, the cuisine in Bangladesh has been heavily molded on Dhaka’s historical trade routes and the many civilisations that ruled the land. The Mughals brought with the Turkish and Persian techniques and foods, the British left the tea.\r\n\r\nAs an eminently rural and agricultural country where over 60% of the population live off the land, foods are seasonal and dependent on what grows where. The coastal areas will be more dependent on fish while the hills might eat more meat, but variations are small.\r\n\r\nBangladeshi are predominantly Muslim, so pork is a rare food that you will not find in Bangladeshi menus. On the other side, beef is more common, as is chicken or goat, but meats are not common of the average Bangladeshi diet as many cannot afford to eat them everyday and fish is more easily available.\r\n\r\nVegetables of all kinds are eaten in full, stems and leaves, pulses such as lentils, and grains like rice are the main staples, but bread, usually the deep fried puffy kind or the naan version, is almost always served. \r\n\r\nBangladeshi food features several ingredients in many of the dishes. Root vegetables like potatoes and vegetables like aubergine are commonly eaten. \r\nThe many rivers that cover the country and end in the world’s largest delta also produce lots of different kinds of freshwater fish and halsi and carp are the most popular. \r\n\r\nBangladeshi food is generally spicy like Indian food, and chilli peppers are used in almost every dish, so you should expect to feel a degree of heat with almost every dish. The marsala spice mix that is used in India to flavor food is also used in Bangladesh, but the mix is different. \r\n\r\nFood in Bangladesh is cooked in curry gravies made with onions, garlic and, often times, with small dried fish similar to what is commonly used in Myanmar or Thailand to flavor food.\r\n\r\nAs per cooking techniques, frying is widely used to cook foods, as ovens do not exist in most of Bangladesh rural areas and boiling is less common. Food is cooked in clay, earthen or metal pots over a pit fire or charcoal. Banana leaves are also used to cook food.Unlike in India, Bangladeshi food is not always fried in ghee but also in mustard or other vegetable oils. As with all Muslim countries, Bangladeshis eat with their right hand and do not use the left as it is considered impure. This is also common in India and required a degree of skill. \r\n\r\nYou will notice that locals, like most Indians, are able to cut a piece of bread with just one hand, using three fingers, one to hold the bread and two to pull. My partner, of Bengali Indian descent, is very skilled at this, I always need both hands to pull a piece from any bread.  \r\n\r\nIt is common in Bangladesh for food to be served for sharing and all plates to be brought to the middle of the table with spoons to help yourself. The woman of the house will serve you and may not eat until you are finished. ', 'ON', 'admin'),
(17, 'July-04-2020 09:19:08', 'Soth America:Place where the road ends', 'South America', 'Pramit', 'pick-a-city-cartagena-vs-rio-de-janeiro-y-gen-mag-ygenmagcom_1874767.jpg', 'South America is a continent situated in the western hemisphere and, mostly, the southern hemisphere, and bordered on the west by the Pacific Ocean and on the north and east by the Atlantic Ocean.\r\n\r\n\r\nAs part of the Americas, South America is named after Amerigo Vespucci, who was the first European to suggest that the Americas were not the East Indies, but a New World unknown to Europeans.\r\n\r\n\r\nSouth America offers a range of travel options - with stunning coastlines, vibrant cities, historic colonial towns, mountainous treks and the vast and bio-diverse Amazonian rainforest.', 'ON', 'admin'),
(18, 'July-04-2020 09:22:21', 'Hawaii', 'North America', 'Pramit', '38_GoList_NorthAmerica_Hawaii_shutterstock_339637010.jpg', 'Aloha! Well, that’s about the extent of the Hawaiian that I’ve learned from my previous two trips to Hawaii. Well, maybe I also learned Wahine… that’s the one that Sharon should use; while, I guess I’ll learn what mine’s called when I get there. On the first cruise that Sharon and I went on, we journeyed to Australia where they got quite colorful with “Blokes” and “Sheilas”. This will be our first trip to the Hawaiian Islands together, not quite as far as that first trip that we took; but, we’re looking forward to it just the same. Unfortunately, we will be missing Sharon’s brother Paul and his wife Karen. College basketball has come to Las Vegas and Paul will be seeing a student that he coached in California playing at the collegiate level. They’ll be staying at our home, which we’ve named Villa Bella. The pool, spa and backyard are done, the patio is furnished, the outdoor kitchen is ready to grill; hopefully it is the resort for them that we hope it to be for us. The weather is warming for them, so it should be nice. Our weather prospects aren’t quite so optimistic. Oahu has forecasts of showers, rain, showers and more rain for the first week. We’re hoping to catch a break; but, we may have to wait until Maui.\r\n\r\nWe might not normally have chosen to take this trip to Hawaii at this time, with two substantial cruise trips planned later this year, and with the weather in Las Vegas turning really nice. Those other trips are planned in June and August, and I must say that Sharon did say that she would be planning trips to avoid the Vegas summer. After some miserable winters in Ohio, where Sharon would say, “Honest, the winters have never been this bad before” that I had to chuckle when people would say to Sharon that records were being broken for consecutive days over 100 degrees (Honest, Sharon, it’s never been this hot before!) But the thing is, we have some time share points that we needed to use or lose. The time share originated as a gift from my uncle, and seems to have morphed in the gift that keeps on giving. So far, we’ve managed to either use, or find family to use, what points we have. In fact, Sharon’s brother Paul and his family enjoyed a week on Kauai two years ago. We’ll finish up our stay in Hawaii at that same resort.\r\n\r\nWe’ve put packing off until the last minute, amid getting the house ready for company. That may not be such a good idea with so many things to keep track of. It will be our first trip with our new luggage, recommended to us by Sharon’s sister Erin and her husband Dennis. They’ve been using the same Brigg’s and Reilly Luggage for ten years with only a couple of repairs needed on their pieces (guaranteed for a lifetime). We’ve been going through our luggage about every three years; so, we’re pretty excited to try them out. I’ve packed a couple of swim suits, and I fit in both of them two weeks ago. One of them is the same that I wore in the Dead Sea just over two years ago… Would that I weighed now what I weighed then.\r\n\r\nWe just got back from the Vigil Mass so we should be good to travel tomorrow. Sharon’s already printed our Hawaiian Airlines boarding passes and they reflected our TSA-precheck so hopefully that goes smoothly. Sharon got a great birthday card from Dena, a lady that we once worked with “back in the day”, and really appreciated the joke: “A lady needed to send a Family Bible to her son in a different state. She packed it carefully and took it to the Post Office. The clerk asked her, “Is there anything breakable in here?” The lady smiled and replied, “Only the Ten Commandments.” Question: Does a Score-Plus of years really deserve a reference of “back in the day”. Sharon left California in 1994 along with her first husband Jim. They took a Hawaiian vacation that year, just following the Northridge Earthquake, to try and relax a bit amid to turmoil of moving to Kentucky, changing jobs, selling their home in California, and now needing to repair that home following the earthquake. For me, the last time I touched foot on the Hawaiian Islands was 1985. I flew there for the week of Thanksgiving, almost directly from Ft. Sill, Oklahoma. My life was also in turmoil then, and I was changing jobs when I got back. Hopefully, we find the peace and quiet we are seeking. So far in our retirement we aren’t having problems finding things to do: Okay, some of them have been getting the house to where we want it to be. We moved in about fifteen months ago. Now all there is to do is to wait for our neighbor Cathy to call us in the morning. She graciously offered to drive us to the airport, and to pick us up when we return.', 'ON', 'admin'),
(19, 'July-04-2020 09:27:27', 'Australia:Place of the unknown', 'Australia', 'Pramit', 'iStock-653423144-2000x1200.jpg', 'Australia, The Lucky Country, and the world’s 6th largest country has so much to offer, from the quaint suburbs of cosmopolitan Melbourne and Perth to the virtually undiscovered Outback, where cattle stations can be bigger than most European countries.\r\n\r\nThe first decision that needs to be made is which of the eight states you want to visit, okay, to be accurate two of them are territories. Each state and territory is unique from their cities to the countrysides. If you want to be truly remote, hit the Outback, but be prepared as the temperatures can vary with searing summers at over 40°C (104°F) and freezing winter nighttime temperatures. Summer in the Tropical North of Australia can be humid and very wet, classified as the wet season, and for some not a pleasant time of year.\r\n\r\nConsidering the size of the country the population is comparatively small (23.5 million people) with the majority of the population living around the edge of the country. If you crave adventure, hit the beautiful red centre -- it can be harsh, and you need to be prepared, but the adventurous can discover the beauty of Alice Springs. Or, head south for an entirely different experience in the mountains of Victoria or Tasmania, especially when it snows!\r\n\r\nThe real adventure is hiring a 4-wheel-drive and discovering thousands of kilometres of off-road tracks, but be sure to carry plenty of water and don’t rely on your mobile phone, it won’t work!\r\n\r\nIf you want to see the most spectacular scenery, magnificent wildlife and experience the most diverse of countries, then come to Australia.\r\n', 'ON', 'admin'),
(20, 'July-04-2020 09:31:11', 'Nairobi .. a lot of things to do here!', 'Africa', 'Pramit', 'ttttt-1280x720.jpg', 'Resumo: visitei 3 ONGs; trabalhando um tanto; muito a fazer; criei um mini projeto; estou bem.\r\n\r\n\r\n\r\nHá exatos 5 meses deixei o Brasil .. Nossa, como o tempo passa, né? Como estou atrasada com o post , vou resumir aqui o como foram estas minhas 2 semanas aqui no Quênia.\r\n\r\nA idéia inicial seria ir para Uganda ou Serra Leoa onde eu já tinha alguns contatos (via internet). Encontrei uma passagem de Istambul para Nairobi por EUR200. Ao colocar no FB que a passagem estava comprada, recebi diversas mensagens o que inclui de 2 amigas minhas que possuíam contatos de ONGs em Nairobi. Planos alterados, resolvi então ficar no Quênia.\r\n\r\nAtravés de uma das amigas consegui um lugar para ficar. Anita, minha amiga, conheceu Shiroh aqui em Nairobi algumas semanas antes de eu chegar. Porém, no meu primeiro dia resolvi ficar no hostel. Precisava de um tempo “sozinha”. Aqui então conheci Dan. Um moço maluco. Logo de cara nos demos super bem. Descobri então que ele tinha uma escola em uma das “favelas” de Nairobi. Segue história de ‘Overseers’ Education Centre’. http://www.travelblog.org/Africa/Kenya/Nairobi-Province/Nairobi/blog-759120.html .\r\n\r\nPrecisava então visitar o lugar que minha amiga Aline recomendou. Fui então ao encontro de Dona Benta. Uma pessoa fantástica, com uma história emocionante. Segue a história de ‘Julie Hope and Children Rescue Centre’. (em construção).\r\n\r\nSó com estes dois lugares eu já estava cheio de idéias e trabalho a fazer. Mas faltava mais um lugar para visitar. A ONG que minha amiga Anita e Shiroh visitaram. Segue a história de ‘Wings of Compassion’. (em construção).\r\n\r\nPor causa de todas estas histórias, criei um mini projeto: ‘Photos for a Cause’. Um projeto que está proporcionando uma alegria indescritível. http://photosforacause.wordpress.com/\r\n\r\nAlém disso, faço pequenas coisas como ajudar nos blogs de outros projetos, criar blogs para outras pessoas, visitar outros projetos, ...\r\n\r\nAssim, durante estas 2 semanas que estou em Nairobi estou trabalhando mais do que no Brasil. Logo posto todos os blogs, trabalhos realizados, compras feitas (através do dinheiro arrecadado) ....\r\n', 'ON', 'admin'),
(21, 'July-04-2020 09:34:32', 'Portugal:Visit to Know', 'Europe', 'Pramit', 'Portugal-world-heritage.jpg', 'Portugal is strange, wonderful and beautiful country.you are going to travel Portugal and visit the best places in Portugal, we suggest that you visit Evora. Evora is very captivating and unforgettable city with its unique architecture which reflects cities history from Roman times to the present day. The city was founded at the very beginning of the Christian era. In Evora you can visit the cathedral with different Gothic elements which is by the way the largest in Portugal. There is a Sacred Art Museum near the cathedral. This museum is situated in one of two asymmetrical towers. There is also a famous Evora''s landmark from the left of the cathedral. This landmark is a graceful Roman temple. In addition to already listed facts referring to Evora, it''s necessary to say that this city is also dynamic student city in which lots of restaurants can be found.', 'ON', 'admin'),
(22, 'July-04-2020 09:38:31', 'India:Place of Natural & Ethnic Diversity', 'Asia', 'Pramit', 'darjeeling-beautiful-kangchenjunga-himalayan-landscape-background-kanchenjunga_31d580aa-a758-11ea-ad77-c76040589f9e.webp', 'From the foothills of the Himalayas to the backwaters of Kerala, the slums of Calcutta or the ashrams of Rishikesh, the ghats of Varanasi to the beaches of Goa . . . India will fascinate, shock and excite.\r\n\r\nFascinate with its myriad cultures, its penetrating smells and colours, its intensity of life, its many Gods and temples, the people, food, and religious fervor. Shock with its open sewers, poverty, noise, filth, scams, and stares. Excite with its chaotic traffic, tigers and lions, holy and un-holy men, its food, its drugs, its mountains and beaches, its jungles and deserts, and its religious and erotic temples.\r\n\r\nIndia is a country of extremes where you will see the whole spectacle of life played out before your eyes, uncut, uncensored, and unashamed. You will encounter death, birth, possibly rebirth, and see people washing clothes, bathing, crying, laughing, and probably squatting for a bowel movement. All in the first day.\r\n\r\nThis country has a history dating back to time immortal, a religion that encompasses hundreds to thousands of Gods, and a population that will soon surpass China despite being less than half the latter’s size. It brought forth the romantic tale and architecture of the Taj Mahal, Ghandi, and the number zero, and let’s face it, the world would be a very different place if those three had never been.\r\n\r\nThere is no country as diverse as India, so strap on your seat belt for the wildest travelling roller coaster experience around this incredible sub-continent. You will love it or hate it, but you’ll not forget it.\r\n\r\nIndia is spicy, it is dicey, and if you are not careful it will be very, very pricy. Beware of touts and scams!\r\n', 'ON', 'admin'),
(24, 'July-04-2020 09:50:09', 'Bandorban:Door to Heaven', 'Bangladesh', 'Pramit Dutta', '078d2d57d6eac6bae53749fa97e3a960.jpg', '    South Asian country Bangladesh is blessed with natural beauty and can also be a great destination for traveling. There are some hilly areas here under the Chittagong Hill Tracts and Bandarban is one of them, others are Rangamati and Khagrachari. Last year (Aug 15, 2014 – Aug 19, 2014) during Rainy Season it was a great pleasure to travel to some truly attractive destinations with my friend. We did visit Kaptai, Rangamati, and Bandarban and frankly speaking without visiting those places it will be totally unknown to me that my own country is such beauty in a true sense. So how was my Bandarban tour? Explore details inside. ????\r\n\r\nWhat I’ve loved most in Bandarban? I was in love with nature here. I’ve loved to play with green, blue and white ???? Awe, thinking!! What are those? Yes, they are my favorite green leaves, bushes, blue sky and white clouds. I really lost myself here with natural waterfalls, river, and mountains. I’ll recommend all tourists and mainly nature lovers to visit this naturally beautiful destination in Asia. The largest Buddhist Golden Temple, Buddha Dhatu Jadi is also located in the Bandarban district of Bangladesh.During our Bandarban tour we stayed at Holiday Inn Resort, this resort caught my eyes because of its totally different decors with nature. Some beautiful spots are too near to this resort. There are many popular tourist spots here and some must-visit naturally beautiful spots for all nature lovers are Nilachal, Nilgiri, Shoilo Propat, Sangu River, Rijuk Waterfall, Boka Lake, Nafakhum and Remakri, Keokradong and Meghla Tourist Spot.  ', 'ON', 'admin'),
(25, 'July-04-2020 09:55:09', 'Istanbul:Connect past with present', 'Asia', 'Anik', 'HagiaSophia.jpg', 'Istanbul is home to some famous historical sites — the Blue Mosque, Hagia Sophia, Grand Bazaar, and Spice Market. They are stunning, important historical sites to see and experience. But the city also offers lots of fun things to do that have fewer crowds and are a bit off the beaten path.As important as it is to visit culturally significant historical sites (after all, there’s nothing wrong with being a tourist) there is so much more to every destination than just the main tourist bullet points.\r\n\r\nOf course, you shouldn’t miss Istanbul’s major sites. But once you’ve done them, there are plenty of offbeat things to see and do here. ', 'ON', 'admin'),
(26, 'July-04-2020 10:02:46', 'The Future of Travel After the Coronavirus Pandemic', 'Trending', 'Pramit Dutta', 'Covid19 tourism.webp', '    As we enter the first summer of this new era of pandemics, a tenuous easing of travel restrictions has begun. This month, the countries of the European Union will reopen their internal borders, and they plan to allow travel from outside the block some time in July. Singapore and China have begun permitting essential travel between them, but only for passengers who test negative for the coronavirus, use a contact-tracing app, and don’t deviate from their itinerary. Iceland will allow tourists, but it plans to test them for the virus at the airport.\r\nGrounded for many months, airlines are beefing up their summer schedules—though the number of flights will be a fraction of their pre-pandemic frequency. Airports are still mostly ghost towns (some have even been taken over by wildlife), and international long-distance travel is all but dead. Around the globe, the collapse of the tourist economy has bankrupted hotels, restaurants, bus operators, and car rental agencies—and thrown an estimated 100 million people out of work.\r\n\r\nWith uncertainty and fear hanging over traveling, no one knows how quickly tourism and business travel will recover, whether we will still fly as much, and what the travel experience will look like once new health security measures are in place. One thing is certain: Until then, there will be many more canceled vacations, business trips, weekend getaways, and family reunions.\r\n\r\nTo look beyond the summer and help us think about how the pandemic will permanently change the way we travel, Foreign Policy asked seven prominent experts to look into their crystal balls.\r\nThe Collapse in Travel Will Bring Long-Term Changes\r\nby James Crabtree, associate professor in practice at the Lee Kuan Yew School of Public Policy at the National University of Singapore and the author of The Billionaire Raj.\r\n\r\nJust as mass unemployment leaves indelible scars on labor markets, so the current global travel collapse will bring long-term changes to patterns of international movement for both business and pleasure.Airlines and hoteliers hope nascent “travel bubbles”—small groups of countries reopening borders only among themselves—and “green lanes” for pre-screened travelers, such as those with antibodies showing immunity to COVID-19, will allow a gradual re-opening. They also hope that roughly normal travel will then resume next year. More likely is that a new system of interlocking safe zones will operate for the foreseeable future, or at least until a vaccine is widely deployed.\r\n\r\nTravel will normalize more quickly in safe zones that coped well with COVID-19, such as between South Korea and China, or between Germany and Greece. But in poorer developing countries struggling to manage the pandemic, such as India or Indonesia, any recovery will be painfully slow.\r\n\r\nAll this will change the structure of future global travel. Many will opt not to move around at all, especially the elderly. Tourists who experiment with new locations in their safe zones or home countries will stick to new habits. Countries with strong pandemic records will deploy them as tourism marketing strategies—discover Taiwan! Much the same will be true for business, where ease of travel and a new sense of common destiny within each safe zone will restructure investment along epidemiological lines.\r\n  ', 'ON', 'Pramit'),
(27, 'July-16-2020 09:53:03', 'Chittagong:Nature Has It''s Blessings Here', 'Bangladesh', 'Pramit Dutta', 'Page_1551915564_VRJAHJHNHO.png', '                <h2>Chittagong is a doorway to different places</h2><ul><li>Cox''s Bazar</li><li>Rangamati</li><li>Bandarban Hill Tracts </li><li>Khagrachori</li>            <img class="img-responsive" src="images/chittagong.jpg">Chittagong is a fairly big, spread out town, and the largest international seaport in the country. Like Dhaka, the streets are filled with masses of rickshaws, though the city puts in a little more effort to keep its streets and sidewalks clean. Foreigners will notice a distinct increase in nuisances from beggars in certain intersections: for example, New Market Circle and the central Railway Station. The majority of the beggars are from other parts of the country such as Greater Mymensingh Region and Greater Noakhali area. They have migrated due to the fact that Chittagonian people are more prone to charity relative to other parts of the country.The busiest part of town is the area around the train station and Station Road, while things get a little more bearable as you move further north. GEC Circle is the intersection of Zakir Hossain Rd, O. R. Nizam Rd and CDA Avenue, about 3 km north of the train station, and is the center of middle to upper class life with a variety of shady restaurants and shopping.Chittagong is a conservative place. Local women tend to dress in modest clothing and don''t like to shake hands with men. This does not apply to the upper classes, who are very westernised. Local people aren''t offended when foreigners don''t comply with the expectations of local people. That being said, because Bangladesh in general does not have much tourism, foreigners will receive a lot of attention. Here, it is not considered rude to stare, so passersby stare openly at foreigners, but this is mostly out of curiosity, not malice. Foreigners drinking alcohol or foreign women wearing skirts which show their bare legs are going to upset people. However, even if you wear conservative dresses, such as punjabis and shalwar kameez, people will still stare if you do not look Bangladeshi.In the more affluent neighborhoods like Khulshi and Nasirabad, local women are more westernized. The parties that let women have fun are mostly indoors, such as the Chittagong Club or Hotel Agrabad.The Chittagonian enthusiasm for inviting people to massive feasts is a bit of a legend both locally and elsewhere in Bangladesh. Known as mezbani, these feasts feature a tremendously hot curry, usually of beef. If you''re not used to it, approach with caution.              ', 'ON', 'Pramit');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `creatorname` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetime`, `name`, `creatorname`) VALUES
(17, 'June-28-2020 09:55:15', 'Asia', 'Pramit Dutta'),
(18, 'June-28-2020 09:55:27', 'Europe', 'Pramit Dutta'),
(19, 'June-28-2020 09:55:33', 'Africa', 'Pramit Dutta'),
(20, 'June-28-2020 09:55:40', 'Australia', 'Pramit Dutta'),
(21, 'June-28-2020 09:55:52', 'North America', 'Pramit Dutta'),
(22, 'June-28-2020 09:55:58', 'Antarctica', 'Pramit Dutta'),
(23, 'June-28-2020 09:56:12', 'South America', 'Pramit Dutta'),
(25, 'June-28-2020 09:56:35', 'Food', 'Pramit Dutta'),
(28, 'June-28-2020 09:59:11', 'Bangladesh', 'Pramit Dutta'),
(29, 'June-28-2020 10:13:56', 'Ocean And Sea', 'Pramit Dutta'),
(31, 'July-04-2020 09:45:13', 'Trending', 'Anik');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approvedby` varchar(200) NOT NULL,
  `status` varchar(5) NOT NULL,
  `admin_panel_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `approvedby`, `status`, `admin_panel_id`) VALUES
(11, 'July-01-2020 18:13:30', 'Anik', 'u1708013@student.cuet.ac.bd', 'Real Condition Explained', 'Pramit', 'ON', 14),
(12, 'July-01-2020 18:13:51', 'Dutta', 'u1708013@student.cuet.ac.bd', 'Nice place\r\n', 'Pramit', 'OFF', 12),
(13, 'July-01-2020 18:14:23', 'Anik', 'duttaanik039@gmail.com', 'Love this Country', 'Anik', 'ON', 12),
(14, 'July-01-2020 18:14:54', 'Pramit', 'pramitduttaanik@gmail.com', 'nice post', 'Pramit', 'ON', 10),
(17, 'July-02-2020 23:49:09', 'Dutta', 'u1708013@student.cuet.ac.bd', 'Nice', 'Pramit', 'ON', 14),
(19, 'July-04-2020 20:02:09', 'Pramit', 'u1708013@student.cuet.ac.bd', 'My Home Town', 'Pramit', 'OFF', 27),
(21, 'July-05-2020 20:34:18', 'Dutta', 'duttaanik039@gmail.com', '<h1>Must Visit</h1> List is given: <ul> <li>Sitakundu</li> <li>Mirsaria</li> <li>Foy''s Lake</li> </ul> Happy Traveling\r\n<br>Visit Chittagong', 'Anik', 'ON', 27);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id` int(10) NOT NULL,
  `feedback` varchar(20) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`, `comment`, `name`, `email`, `mobile`, `datetime`) VALUES
(1, 'Good', 'Nice Work', '', '', '', 'June-27-2020 09:21:30'),
(2, 'Excellent', 'Brilliant', 'pramitduttaanik@gmail.com', 'Pramit', '+880-1779901757', 'June-27-2020 09:23:41'),
(3, 'Satisfactory', 'Decent', 'u1708013@cuet,ac,bd', 'Pramit', '', 'June-27-2020 09:24:42'),
(4, 'Average', 'Average Work', '', 'Pramit', '+88-01521224197', 'June-27-2020 09:26:17'),
(5, 'Poor', 'Should be improved', 'duttaanik039@gmail.com', '', '+880-1779901757', 'June-27-2020 09:27:21'),
(6, 'Excellent', 'Nice Work.', '', 'Pramit', '', 'June-27-2020 09:27:43'),
(7, 'Good', 'Good Job!', 'pramitduttaanik@gmail.com', '', '', 'June-27-2020 09:28:08'),
(8, 'Excellent', 'Keep it up!', '', '', '+8801521224197', 'June-27-2020 09:28:29'),
(9, 'Excellent', 'Excellent', '', '', '', 'June-27-2020 09:54:30'),
(10, 'Excellent', 'New Way', '', '', '', 'July-12-2020 09:57:10'),
(11, 'Excellent', 'Good Work Here we go', '', '', '', 'July-19-2020 08:42:23'),
(12, 'Satisfactory', 'Good Work!', 'pramitduttaanik@gmail.com', 'Pramit', '1234', 'July-27-2020 12:57:01'),
(13, 'Excellent', 'Just!', 'pramitduttaanik@gmail.com', 'Pramit', '1234', 'July-27-2020 12:58:35'),
(14, 'Excellent', 'Just Good!', 'pramitduttaanik@gmail.com', 'Pramit', '01779901757', 'July-27-2020 13:03:00'),
(15, 'Excellent', 'Good Work Man!', 'pramitduttaanik@gmail.com', 'Pramit', '01779901757', 'July-27-2020 13:04:33'),
(16, 'Good', 'Good Work Bro!', '', '', '', 'July-27-2020 13:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `addedby` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `datetime`, `username`, `password`, `addedby`) VALUES
(6, 'July-26-2020 10:14:07', 'admin', '$2y$10$YzE0M2JkYWE4ZTZiYmVmN.oPsQRIEjs7blSwJ4J/x7tqKC9HFG.RO', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(130) NOT NULL,
  `token` varchar(200) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`), ADD KEY `admin_panel_id` (`admin_panel_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
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
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `Foreign Key to admin_panel table` FOREIGN KEY (`admin_panel_id`) REFERENCES `admin_panel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
