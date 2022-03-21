-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 23 jan. 2022 à 14:34
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gym_egypte`
--

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `governorate_id` int(11) NOT NULL,
  `city_name_ar` varchar(200) NOT NULL,
  `city_name_en` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cities`
--

INSERT INTO `cities` (`id`, `governorate_id`, `city_name_ar`, `city_name_en`) VALUES
(1, 1, '15 مايو', '15 May'),
(2, 1, 'الازبكية', 'Al Azbakeyah'),
(3, 1, 'البساتين', 'Al Basatin'),
(4, 1, 'التبين', 'Tebin'),
(5, 1, 'الخليفة', 'El-Khalifa'),
(6, 1, 'الدراسة', 'El darrasa'),
(7, 1, 'الدرب الاحمر', 'Aldarb Alahmar'),
(8, 1, 'الزاوية الحمراء', 'Zawya al-Hamra'),
(9, 1, 'الزيتون', 'El-Zaytoun'),
(10, 1, 'الساحل', 'Sahel'),
(11, 1, 'السلام', 'El Salam'),
(12, 1, 'السيدة زينب', 'Sayeda Zeinab'),
(13, 1, 'الشرابية', 'El Sharabeya'),
(14, 1, 'مدينة الشروق', 'Shorouk'),
(15, 1, 'الظاهر', 'El Daher'),
(16, 1, 'العتبة', 'Ataba'),
(17, 1, 'القاهرة الجديدة', 'New Cairo'),
(18, 1, 'المرج', 'El Marg'),
(19, 1, 'عزبة النخل', 'Ezbet el Nakhl'),
(20, 1, 'المطرية', 'Matareya'),
(21, 1, 'المعادى', 'Maadi'),
(22, 1, 'المعصرة', 'Maasara'),
(23, 1, 'المقطم', 'Mokattam'),
(24, 1, 'المنيل', 'Manyal'),
(25, 1, 'الموسكى', 'Mosky'),
(26, 1, 'النزهة', 'Nozha'),
(27, 1, 'الوايلى', 'Waily'),
(28, 1, 'باب الشعرية', 'Bab al-Shereia'),
(29, 1, 'بولاق', 'Bolaq'),
(30, 1, 'جاردن سيتى', 'Garden City'),
(31, 1, 'حدائق القبة', 'Hadayek El-Kobba'),
(32, 1, 'حلوان', 'Helwan'),
(33, 1, 'دار السلام', 'Dar Al Salam'),
(34, 1, 'شبرا', 'Shubra'),
(35, 1, 'طره', 'Tura'),
(36, 1, 'عابدين', 'Abdeen'),
(37, 1, 'عباسية', 'Abaseya'),
(38, 1, 'عين شمس', 'Ain Shams'),
(39, 1, 'مدينة نصر', 'Nasr City'),
(40, 1, 'مصر الجديدة', 'New Heliopolis'),
(41, 1, 'مصر القديمة', 'Masr Al Qadima'),
(42, 1, 'منشية ناصر', 'Mansheya Nasir'),
(43, 1, 'مدينة بدر', 'Badr City'),
(44, 1, 'مدينة العبور', 'Obour City'),
(45, 1, 'وسط البلد', 'Cairo Downtown'),
(46, 1, 'الزمالك', 'Zamalek'),
(47, 1, 'قصر النيل', 'Kasr El Nile'),
(48, 1, 'الرحاب', 'Rehab'),
(49, 1, 'القطامية', 'Katameya'),
(50, 1, 'مدينتي', 'Madinty'),
(51, 1, 'روض الفرج', 'Rod Alfarag'),
(52, 1, 'شيراتون', 'Sheraton'),
(53, 1, 'الجمالية', 'El-Gamaleya'),
(54, 1, 'العاشر من رمضان', '10th of Ramadan City'),
(55, 1, 'الحلمية', 'Helmeyat Alzaytoun'),
(56, 1, 'النزهة الجديدة', 'New Nozha'),
(57, 1, 'العاصمة الإدارية', 'Capital New'),
(58, 2, 'الجيزة', 'Giza'),
(59, 2, 'السادس من أكتوبر', 'Sixth of October'),
(60, 2, 'الشيخ زايد', 'Cheikh Zayed'),
(61, 2, 'الحوامدية', 'Hawamdiyah'),
(62, 2, 'البدرشين', 'Al Badrasheen'),
(63, 2, 'الصف', 'Saf'),
(64, 2, 'أطفيح', 'Atfih'),
(65, 2, 'العياط', 'Al Ayat'),
(66, 2, 'الباويطي', 'Al-Bawaiti'),
(67, 2, 'منشأة القناطر', 'ManshiyetAl Qanater'),
(68, 2, 'أوسيم', 'Oaseem'),
(69, 2, 'كرداسة', 'Kerdasa'),
(70, 2, 'أبو النمرس', 'Abu Nomros'),
(71, 2, 'كفر غطاطي', 'Kafr Ghati'),
(72, 2, 'منشأة البكاري', 'Manshiyet Al Bakari'),
(73, 2, 'الدقى', 'Dokki'),
(74, 2, 'العجوزة', 'Agouza'),
(75, 2, 'الهرم', 'Haram'),
(76, 2, 'الوراق', 'Warraq'),
(77, 2, 'امبابة', 'Imbaba'),
(78, 2, 'بولاق الدكرور', 'Boulaq Dakrour'),
(79, 2, 'الواحات البحرية', 'Al Wahat Al Baharia'),
(80, 2, 'العمرانية', 'Omraneya'),
(81, 2, 'المنيب', 'Moneeb'),
(82, 2, 'بين السرايات', 'Bin Alsarayat'),
(83, 2, 'الكيت كات', 'Kit Kat'),
(84, 2, 'المهندسين', 'Mohandessin'),
(85, 2, 'فيصل', 'Faisal'),
(86, 2, 'أبو رواش', 'Abu Rawash'),
(87, 2, 'حدائق الأهرام', 'Hadayek Alahram'),
(88, 2, 'الحرانية', 'Haraneya'),
(89, 2, 'حدائق اكتوبر', 'Hadayek October'),
(90, 2, 'صفط اللبن', 'Saft Allaban'),
(91, 2, 'القرية الذكية', 'Smart Village'),
(92, 2, 'ارض اللواء', 'Ard Ellwaa'),
(93, 3, 'ابو قير', 'Abu Qir'),
(94, 3, 'الابراهيمية', 'Al Ibrahimeyah'),
(95, 3, 'الأزاريطة', 'Azarita'),
(96, 3, 'الانفوشى', 'Anfoushi'),
(97, 3, 'الدخيلة', 'Dekheila'),
(98, 3, 'السيوف', 'El Soyof'),
(99, 3, 'العامرية', 'Ameria'),
(100, 3, 'اللبان', 'El Labban'),
(101, 3, 'المفروزة', 'Al Mafrouza'),
(102, 3, 'المنتزه', 'El Montaza'),
(103, 3, 'المنشية', 'Mansheya'),
(104, 3, 'الناصرية', 'Naseria'),
(105, 3, 'امبروزو', 'Ambrozo'),
(106, 3, 'باب شرق', 'Bab Sharq'),
(107, 3, 'برج العرب', 'Bourj Alarab'),
(108, 3, 'ستانلى', 'Stanley'),
(109, 3, 'سموحة', 'Smouha'),
(110, 3, 'سيدى بشر', 'Sidi Bishr'),
(111, 3, 'شدس', 'Shads'),
(112, 3, 'غيط العنب', 'Gheet Alenab'),
(113, 3, 'فلمينج', 'Fleming'),
(114, 3, 'فيكتوريا', 'Victoria'),
(115, 3, 'كامب شيزار', 'Camp Shizar'),
(116, 3, 'كرموز', 'Karmooz'),
(117, 3, 'محطة الرمل', 'Mahta Alraml'),
(118, 3, 'مينا البصل', 'Mina El-Basal'),
(119, 3, 'العصافرة', 'Asafra'),
(120, 3, 'العجمي', 'Agamy'),
(121, 3, 'بكوس', 'Bakos'),
(122, 3, 'بولكلي', 'Boulkly'),
(123, 3, 'كليوباترا', 'Cleopatra'),
(124, 3, 'جليم', 'Glim'),
(125, 3, 'المعمورة', 'Al Mamurah'),
(126, 3, 'المندرة', 'Al Mandara'),
(127, 3, 'محرم بك', 'Moharam Bek'),
(128, 3, 'الشاطبي', 'Elshatby'),
(129, 3, 'سيدي جابر', 'Sidi Gaber'),
(130, 3, 'الساحل الشمالي', 'North Coast/sahel'),
(131, 3, 'الحضرة', 'Alhadra'),
(132, 3, 'العطارين', 'Alattarin'),
(133, 3, 'سيدي كرير', 'Sidi Kerir'),
(134, 3, 'الجمرك', 'Elgomrok'),
(135, 3, 'المكس', 'Al Max'),
(136, 3, 'مارينا', 'Marina'),
(137, 4, 'المنصورة', 'Mansoura'),
(138, 4, 'طلخا', 'Talkha'),
(139, 4, 'ميت غمر', 'Mitt Ghamr'),
(140, 4, 'دكرنس', 'Dekernes'),
(141, 4, 'أجا', 'Aga'),
(142, 4, 'منية النصر', 'Menia El Nasr'),
(143, 4, 'السنبلاوين', 'Sinbillawin'),
(144, 4, 'الكردي', 'El Kurdi'),
(145, 4, 'بني عبيد', 'Bani Ubaid'),
(146, 4, 'المنزلة', 'Al Manzala'),
(147, 4, 'تمي الأمديد', 'tami al\'amdid'),
(148, 4, 'الجمالية', 'aljamalia'),
(149, 4, 'شربين', 'Sherbin'),
(150, 4, 'المطرية', 'Mataria'),
(151, 4, 'بلقاس', 'Belqas'),
(152, 4, 'ميت سلسيل', 'Meet Salsil'),
(153, 4, 'جمصة', 'Gamasa'),
(154, 4, 'محلة دمنة', 'Mahalat Damana'),
(155, 4, 'نبروه', 'Nabroh'),
(156, 5, 'الغردقة', 'Hurghada'),
(157, 5, 'رأس غارب', 'Ras Ghareb'),
(158, 5, 'سفاجا', 'Safaga'),
(159, 5, 'القصير', 'El Qusiar'),
(160, 5, 'مرسى علم', 'Marsa Alam'),
(161, 5, 'الشلاتين', 'Shalatin'),
(162, 5, 'حلايب', 'Halaib'),
(163, 5, 'الدهار', 'Aldahar'),
(164, 6, 'دمنهور', 'Damanhour'),
(165, 6, 'كفر الدوار', 'Kafr El Dawar'),
(166, 6, 'رشيد', 'Rashid'),
(167, 6, 'إدكو', 'Edco'),
(168, 6, 'أبو المطامير', 'Abu al-Matamir'),
(169, 6, 'أبو حمص', 'Abu Homs'),
(170, 6, 'الدلنجات', 'Delengat'),
(171, 6, 'المحمودية', 'Mahmoudiyah'),
(172, 6, 'الرحمانية', 'Rahmaniyah'),
(173, 6, 'إيتاي البارود', 'Itai Baroud'),
(174, 6, 'حوش عيسى', 'Housh Eissa'),
(175, 6, 'شبراخيت', 'Shubrakhit'),
(176, 6, 'كوم حمادة', 'Kom Hamada'),
(177, 6, 'بدر', 'Badr'),
(178, 6, 'وادي النطرون', 'Wadi Natrun'),
(179, 6, 'النوبارية الجديدة', 'New Nubaria'),
(180, 6, 'النوبارية', 'Alnoubareya'),
(181, 7, 'الفيوم', 'Fayoum'),
(182, 7, 'الفيوم الجديدة', 'Fayoum El Gedida'),
(183, 7, 'طامية', 'Tamiya'),
(184, 7, 'سنورس', 'Snores'),
(185, 7, 'إطسا', 'Etsa'),
(186, 7, 'إبشواي', 'Epschway'),
(187, 7, 'يوسف الصديق', 'Yusuf El Sediaq'),
(188, 7, 'الحادقة', 'Hadqa'),
(189, 7, 'اطسا', 'Atsa'),
(190, 7, 'الجامعة', 'Algamaa'),
(191, 7, 'السيالة', 'Sayala'),
(192, 8, 'طنطا', 'Tanta'),
(193, 8, 'المحلة الكبرى', 'Al Mahalla Al Kobra'),
(194, 8, 'كفر الزيات', 'Kafr El Zayat'),
(195, 8, 'زفتى', 'Zefta'),
(196, 8, 'السنطة', 'El Santa'),
(197, 8, 'قطور', 'Qutour'),
(198, 8, 'بسيون', 'Basion'),
(199, 8, 'سمنود', 'Samannoud'),
(200, 9, 'الإسماعيلية', 'Ismailia'),
(201, 9, 'فايد', 'Fayed'),
(202, 9, 'القنطرة شرق', 'Qantara Sharq'),
(203, 9, 'القنطرة غرب', 'Qantara Gharb'),
(204, 9, 'التل الكبير', 'El Tal El Kabier'),
(205, 9, 'أبو صوير', 'Abu Sawir'),
(206, 9, 'القصاصين الجديدة', 'Kasasien El Gedida'),
(207, 9, 'نفيشة', 'Nefesha'),
(208, 9, 'الشيخ زايد', 'Sheikh Zayed'),
(209, 10, 'شبين الكوم', 'Shbeen El Koom'),
(210, 10, 'مدينة السادات', 'Sadat City'),
(211, 10, 'منوف', 'Menouf'),
(212, 10, 'سرس الليان', 'Sars El-Layan'),
(213, 10, 'أشمون', 'Ashmon'),
(214, 10, 'الباجور', 'Al Bagor'),
(215, 10, 'قويسنا', 'Quesna'),
(216, 10, 'بركة السبع', 'Berkat El Saba'),
(217, 10, 'تلا', 'Tala'),
(218, 10, 'الشهداء', 'Al Shohada'),
(219, 11, 'المنيا', 'Minya'),
(220, 11, 'المنيا الجديدة', 'Minya El Gedida'),
(221, 11, 'العدوة', 'El Adwa'),
(222, 11, 'مغاغة', 'Magagha'),
(223, 11, 'بني مزار', 'Bani Mazar'),
(224, 11, 'مطاي', 'Mattay'),
(225, 11, 'سمالوط', 'Samalut'),
(226, 11, 'المدينة الفكرية', 'Madinat El Fekria'),
(227, 11, 'ملوي', 'Meloy'),
(228, 11, 'دير مواس', 'Deir Mawas'),
(229, 11, 'ابو قرقاص', 'Abu Qurqas'),
(230, 11, 'ارض سلطان', 'Ard Sultan'),
(231, 12, 'بنها', 'Banha'),
(232, 12, 'قليوب', 'Qalyub'),
(233, 12, 'شبرا الخيمة', 'Shubra Al Khaimah'),
(234, 12, 'القناطر الخيرية', 'Al Qanater Charity'),
(235, 12, 'الخانكة', 'Khanka'),
(236, 12, 'كفر شكر', 'Kafr Shukr'),
(237, 12, 'طوخ', 'Tukh'),
(238, 12, 'قها', 'Qaha'),
(239, 12, 'العبور', 'Obour'),
(240, 12, 'الخصوص', 'Khosous'),
(241, 12, 'شبين القناطر', 'Shibin Al Qanater'),
(242, 12, 'مسطرد', 'Mostorod'),
(243, 13, 'الخارجة', 'El Kharga'),
(244, 13, 'باريس', 'Paris'),
(245, 13, 'موط', 'Mout'),
(246, 13, 'الفرافرة', 'Farafra'),
(247, 13, 'بلاط', 'Balat'),
(248, 13, 'الداخلة', 'Dakhla'),
(249, 14, 'السويس', 'Suez'),
(250, 14, 'الجناين', 'Alganayen'),
(251, 14, 'عتاقة', 'Ataqah'),
(252, 14, 'العين السخنة', 'Ain Sokhna'),
(253, 14, 'فيصل', 'Faysal'),
(254, 15, 'أسوان', 'Aswan'),
(255, 15, 'أسوان الجديدة', 'Aswan El Gedida'),
(256, 15, 'دراو', 'Drau'),
(257, 15, 'كوم أمبو', 'Kom Ombo'),
(258, 15, 'نصر النوبة', 'Nasr Al Nuba'),
(259, 15, 'كلابشة', 'Kalabsha'),
(260, 15, 'إدفو', 'Edfu'),
(261, 15, 'الرديسية', 'Al-Radisiyah'),
(262, 15, 'البصيلية', 'Al Basilia'),
(263, 15, 'السباعية', 'Al Sibaeia'),
(264, 15, 'ابوسمبل السياحية', 'Abo Simbl Al Siyahia'),
(265, 15, 'مرسى علم', 'Marsa Alam'),
(266, 16, 'أسيوط', 'Assiut'),
(267, 16, 'أسيوط الجديدة', 'Assiut El Gedida'),
(268, 16, 'ديروط', 'Dayrout'),
(269, 16, 'منفلوط', 'Manfalut'),
(270, 16, 'القوصية', 'Qusiya'),
(271, 16, 'أبنوب', 'Abnoub'),
(272, 16, 'أبو تيج', 'Abu Tig'),
(273, 16, 'الغنايم', 'El Ghanaim'),
(274, 16, 'ساحل سليم', 'Sahel Selim'),
(275, 16, 'البداري', 'El Badari'),
(276, 16, 'صدفا', 'Sidfa'),
(277, 17, 'بني سويف', 'Bani Sweif'),
(278, 17, 'بني سويف الجديدة', 'Beni Suef El Gedida'),
(279, 17, 'الواسطى', 'Al Wasta'),
(280, 17, 'ناصر', 'Naser'),
(281, 17, 'إهناسيا', 'Ehnasia'),
(282, 17, 'ببا', 'beba'),
(283, 17, 'الفشن', 'Fashn'),
(284, 17, 'سمسطا', 'Somasta'),
(285, 17, 'الاباصيرى', 'Alabbaseri'),
(286, 17, 'مقبل', 'Mokbel'),
(287, 18, 'بورسعيد', 'PorSaid'),
(288, 18, 'بورفؤاد', 'Port Fouad'),
(289, 18, 'العرب', 'Alarab'),
(290, 18, 'حى الزهور', 'Zohour'),
(291, 18, 'حى الشرق', 'Alsharq'),
(292, 18, 'حى الضواحى', 'Aldawahi'),
(293, 18, 'حى المناخ', 'Almanakh'),
(294, 18, 'حى مبارك', 'Mubarak'),
(295, 19, 'دمياط', 'Damietta'),
(296, 19, 'دمياط الجديدة', 'New Damietta'),
(297, 19, 'رأس البر', 'Ras El Bar'),
(298, 19, 'فارسكور', 'Faraskour'),
(299, 19, 'الزرقا', 'Zarqa'),
(300, 19, 'السرو', 'alsaru'),
(301, 19, 'الروضة', 'alruwda'),
(302, 19, 'كفر البطيخ', 'Kafr El-Batikh'),
(303, 19, 'عزبة البرج', 'Azbet Al Burg'),
(304, 19, 'ميت أبو غالب', 'Meet Abou Ghalib'),
(305, 19, 'كفر سعد', 'Kafr Saad'),
(306, 20, 'الزقازيق', 'Zagazig'),
(307, 20, 'العاشر من رمضان', 'Al Ashr Men Ramadan'),
(308, 20, 'منيا القمح', 'Minya Al Qamh'),
(309, 20, 'بلبيس', 'Belbeis'),
(310, 20, 'مشتول السوق', 'Mashtoul El Souq'),
(311, 20, 'القنايات', 'Qenaiat'),
(312, 20, 'أبو حماد', 'Abu Hammad'),
(313, 20, 'القرين', 'El Qurain'),
(314, 20, 'ههيا', 'Hehia'),
(315, 20, 'أبو كبير', 'Abu Kabir'),
(316, 20, 'فاقوس', 'Faccus'),
(317, 20, 'الصالحية الجديدة', 'El Salihia El Gedida'),
(318, 20, 'الإبراهيمية', 'Al Ibrahimiyah'),
(319, 20, 'ديرب نجم', 'Deirb Negm'),
(320, 20, 'كفر صقر', 'Kafr Saqr'),
(321, 20, 'أولاد صقر', 'Awlad Saqr'),
(322, 20, 'الحسينية', 'Husseiniya'),
(323, 20, 'صان الحجر القبلية', 'san alhajar alqablia'),
(324, 20, 'منشأة أبو عمر', 'Manshayat Abu Omar'),
(325, 21, 'الطور', 'Al Toor'),
(326, 21, 'شرم الشيخ', 'Sharm El-Shaikh'),
(327, 21, 'دهب', 'Dahab'),
(328, 21, 'نويبع', 'Nuweiba'),
(329, 21, 'طابا', 'Taba'),
(330, 21, 'سانت كاترين', 'Saint Catherine'),
(331, 21, 'أبو رديس', 'Abu Redis'),
(332, 21, 'أبو زنيمة', 'Abu Zenaima'),
(333, 21, 'رأس سدر', 'Ras Sidr'),
(334, 22, 'كفر الشيخ', 'Kafr El Sheikh'),
(335, 22, 'وسط البلد كفر الشيخ', 'Kafr El Sheikh Downtown'),
(336, 22, 'دسوق', 'Desouq'),
(337, 22, 'فوه', 'Fooh'),
(338, 22, 'مطوبس', 'Metobas'),
(339, 22, 'برج البرلس', 'Burg Al Burullus'),
(340, 22, 'بلطيم', 'Baltim'),
(341, 22, 'مصيف بلطيم', 'Masief Baltim'),
(342, 22, 'الحامول', 'Hamol'),
(343, 22, 'بيلا', 'Bella'),
(344, 22, 'الرياض', 'Riyadh'),
(345, 22, 'سيدي سالم', 'Sidi Salm'),
(346, 22, 'قلين', 'Qellen'),
(347, 22, 'سيدي غازي', 'Sidi Ghazi'),
(348, 23, 'مرسى مطروح', 'Marsa Matrouh'),
(349, 23, 'الحمام', 'El Hamam'),
(350, 23, 'العلمين', 'Alamein'),
(351, 23, 'الضبعة', 'Dabaa'),
(352, 23, 'النجيلة', 'Al-Nagila'),
(353, 23, 'سيدي براني', 'Sidi Brani'),
(354, 23, 'السلوم', 'Salloum'),
(355, 23, 'سيوة', 'Siwa'),
(356, 23, 'مارينا', 'Marina'),
(357, 23, 'الساحل الشمالى', 'North Coast'),
(358, 24, 'الأقصر', 'Luxor'),
(359, 24, 'الأقصر الجديدة', 'New Luxor'),
(360, 24, 'إسنا', 'Esna'),
(361, 24, 'طيبة الجديدة', 'New Tiba'),
(362, 24, 'الزينية', 'Al ziynia'),
(363, 24, 'البياضية', 'Al Bayadieh'),
(364, 24, 'القرنة', 'Al Qarna'),
(365, 24, 'أرمنت', 'Armant'),
(366, 24, 'الطود', 'Al Tud'),
(367, 25, 'قنا', 'Qena'),
(368, 25, 'قنا الجديدة', 'New Qena'),
(369, 25, 'ابو طشت', 'Abu Tesht'),
(370, 25, 'نجع حمادي', 'Nag Hammadi'),
(371, 25, 'دشنا', 'Deshna'),
(372, 25, 'الوقف', 'Alwaqf'),
(373, 25, 'قفط', 'Qaft'),
(374, 25, 'نقادة', 'Naqada'),
(375, 25, 'فرشوط', 'Farshout'),
(376, 25, 'قوص', 'Quos'),
(377, 26, 'العريش', 'Arish'),
(378, 26, 'الشيخ زويد', 'Sheikh Zowaid'),
(379, 26, 'نخل', 'Nakhl'),
(380, 26, 'رفح', 'Rafah'),
(381, 26, 'بئر العبد', 'Bir al-Abed'),
(382, 26, 'الحسنة', 'Al Hasana'),
(383, 27, 'سوهاج', 'Sohag'),
(384, 27, 'سوهاج الجديدة', 'Sohag El Gedida'),
(385, 27, 'أخميم', 'Akhmeem'),
(386, 27, 'أخميم الجديدة', 'Akhmim El Gedida'),
(387, 27, 'البلينا', 'Albalina'),
(388, 27, 'المراغة', 'El Maragha'),
(389, 27, 'المنشأة', 'almunsha\'a'),
(390, 27, 'دار السلام', 'Dar AISalaam'),
(391, 27, 'جرجا', 'Gerga'),
(392, 27, 'جهينة الغربية', 'Jahina Al Gharbia'),
(393, 27, 'ساقلته', 'Saqilatuh'),
(394, 27, 'طما', 'Tama'),
(395, 27, 'طهطا', 'Tahta'),
(396, 27, 'الكوثر', 'Alkawthar');

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE `exercices` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_exercice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `muscle_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gym_room` int(11) DEFAULT NULL,
  `time_exercice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_muscle_group` int(11) NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id`, `name_exercice`, `level`, `device`, `type_exercice`, `muscle_id`, `image`, `id_gym_room`, `time_exercice`, `id_muscle_group`, `Description`) VALUES
(1, 'walking ', 'one', 'Walk Machine', 'Legs', 'Hamstrings', 'Legs.png', 8, '11:21:00', 0, ''),
(3, 'Abs', '2', NULL, NULL, 'Abdominals', 'Abdominals.png', NULL, '10 hours', 2, 'cccccccccccccccccccccccccccccc'),
(5, 'back_lats', '2', NULL, NULL, 'Lats', 'hamstring.png', NULL, '10 hours', 4, 'cccccccccccc');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `foods`
--

CREATE TABLE `foods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_fouds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type_foods` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gouvernorats`
--

CREATE TABLE `gouvernorats` (
  `id_gouver` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_arabe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `governorates`
--

CREATE TABLE `governorates` (
  `id` int(11) NOT NULL,
  `governorate_name_ar` varchar(50) NOT NULL,
  `governorate_name_en` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `governorates`
--

INSERT INTO `governorates` (`id`, `governorate_name_ar`, `governorate_name_en`) VALUES
(1, 'القاهرة', 'Cairo'),
(2, 'الجيزة', 'Giza'),
(3, 'الأسكندرية', 'Alexandria'),
(4, 'الدقهلية', 'Dakahlia'),
(5, 'البحر الأحمر', 'Red Sea'),
(6, 'البحيرة', 'Beheira'),
(7, 'الفيوم', 'Fayoum'),
(8, 'الغربية', 'Gharbiya'),
(9, 'الإسماعلية', 'Ismailia'),
(10, 'المنوفية', 'Menofia'),
(11, 'المنيا', 'Minya'),
(12, 'القليوبية', 'Qaliubiya'),
(13, 'الوادي الجديد', 'New Valley'),
(14, 'السويس', 'Suez'),
(15, 'اسوان', 'Aswan'),
(16, 'اسيوط', 'Assiut'),
(17, 'بني سويف', 'Beni Suef'),
(18, 'بورسعيد', 'Port Said'),
(19, 'دمياط', 'Damietta'),
(20, 'الشرقية', 'Sharkia'),
(21, 'جنوب سيناء', 'South Sinai'),
(22, 'كفر الشيخ', 'Kafr Al sheikh'),
(23, 'مطروح', 'Matrouh'),
(24, 'الأقصر', 'Luxor'),
(25, 'قنا', 'Qena'),
(26, 'شمال سيناء', 'North Sinai'),
(27, 'سوهاج', 'Sohag');

-- --------------------------------------------------------

--
-- Structure de la table `gym_room`
--

CREATE TABLE `gym_room` (
  `id_gym_room` int(10) UNSIGNED NOT NULL,
  `name_gym` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gouvernorat` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'gym.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gym_rooms`
--

CREATE TABLE `gym_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(69, '2022_01_06_094407_add_logo_to_gym_room_table', 1),
(288, '2022_01_06_104507_add_users_id_to_subscriptions_table', 2),
(387, '2014_10_12_000000_create_users_table', 3),
(388, '2014_10_12_100000_create_password_resets_table', 3),
(389, '2019_08_19_000000_create_failed_jobs_table', 3),
(390, '2022_01_03_095807_create_gouvernorats_table', 3),
(391, '2022_01_03_095808_create_regions_table', 3),
(392, '2022_01_03_095809_create_roles_table', 3),
(393, '2022_01_03_095810_create_role_user_table', 3),
(394, '2022_01_03_095811_create_permission_role_table', 3),
(395, '2022_01_03_095812_create_permissions_table', 3),
(396, '2022_01_03_095813_create_exercices_table', 3),
(397, '2022_01_03_095814_create_muscles_table', 3),
(398, '2022_01_03_095815_create_gym_room_table', 3),
(399, '2022_01_03_111925_add_governorate_id_to_regions_table', 3),
(400, '2022_01_03_131927_create_mmuscles_table', 3),
(401, '2022_01_03_131945_create_gym_rooms_table', 3),
(402, '2022_01_03_131946_create_TSites_table', 3),
(403, '2022_01_03_131946_create_Taffaire_table', 3),
(404, '2022_01_06_094953_add_logo_to_gym_room_table', 3),
(405, '2022_01_06_095230_add_date_of_birth_to_users_table', 3),
(406, '2022_01_06_095601_add_phone_number_to_users_table', 3),
(407, '2022_01_06_101223_add_image_to_users_table', 3),
(408, '2022_01_06_101920_create_cards_table', 3),
(409, '2022_01_06_104036_create__subscription_table', 3),
(410, '2022_01_06_105842_create__foods_table', 3),
(411, '2022_01_06_110645_create_meals_table', 3),
(412, '2022_01_06_111247_add_user_id_to_foods_table', 3),
(413, '2022_01_06_132353_add_google_id_to_users_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `mmuscles`
--

CREATE TABLE `mmuscles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `muscles`
--

CREATE TABLE `muscles` (
  `id_muscle` int(10) UNSIGNED NOT NULL,
  `name_muscle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_muscle_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `muscles`
--

INSERT INTO `muscles` (`id_muscle`, `name_muscle`, `id_muscle_group`) VALUES
(1, 'Biceps', 1),
(2, 'Forearms', 1),
(3, 'Triceps', 1),
(4, 'Abdominals\r\n', 2),
(5, 'Obliques', 2),
(6, 'Serratus Anterior\r\n', 2),
(7, 'Calves', 3),
(8, 'Hamstrings', 3),
(9, 'Erector Spinae\r\n', 4),
(10, 'Lats', 4);

-- --------------------------------------------------------

--
-- Structure de la table `muscle_group`
--

CREATE TABLE `muscle_group` (
  `id_muscle_group` int(11) NOT NULL,
  `name_muscle_group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `muscle_group`
--

INSERT INTO `muscle_group` (`id_muscle_group`, `name_muscle_group`) VALUES
(1, 'Arms\r\n'),
(2, 'Abs'),
(3, 'Legs'),
(4, 'Back'),
(5, 'Buttocks'),
(6, 'Shoulders');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id_region` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_arabe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `governorate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `visibility`, `created_at`, `updated_at`) VALUES
(1, 'Gym-Company', 'Gym-Company', '', '2022-01-23 11:15:14', '2022-01-23 11:15:14'),
(2, 'users', 'users', '', '2022-01-23 11:15:44', '2022-01-23 11:15:44'),
(3, 'Admin', 'Admin', '', '2022-01-23 11:15:51', '2022-01-23 11:15:51');

-- --------------------------------------------------------

--
-- Structure de la table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`) VALUES
(27, 1),
(28, 2),
(29, 2);

-- --------------------------------------------------------

--
-- Structure de la table `subscription`
--

CREATE TABLE `subscription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Duration` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `exercice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taffaire`
--

CREATE TABLE `taffaire` (
  `Code_Affaire` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IntituleAffaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_agence` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dent_dem` datetime DEFAULT NULL,
  `DateEtablConv` datetime DEFAULT NULL,
  `dapprob_conv` datetime DEFAULT NULL,
  `descript_projet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaitreOuvrage` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Typeouvrage` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeSousouvrage` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeCocontractant` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cocontractant` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut_aff` int(11) DEFAULT NULL,
  `statut_ouv` int(11) DEFAULT NULL,
  `chargedaffaire` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MntTrvSoumis` decimal(18,2) DEFAULT NULL,
  `RefRapport` datetime DEFAULT NULL,
  `ClotureREP` tinyint(1) DEFAULT NULL,
  `ClotureFicheOuvProjet` tinyint(1) DEFAULT NULL,
  `DateCreationAffaire` datetime DEFAULT NULL,
  `DateDerniereModifAffaire` datetime DEFAULT NULL,
  `UserCreationAffaire` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserDerniereModifAffaire` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Multisite` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SaisieIngenieur` tinyint(1) DEFAULT NULL,
  `DatePriseChargerAffActuel` datetime DEFAULT NULL,
  `MarcheN` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValidRensAffaireDir` tinyint(1) DEFAULT NULL,
  `TraiteParRCTC` tinyint(1) DEFAULT 1,
  `TypeConvention` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MontantContrat` decimal(18,2) DEFAULT NULL,
  `DelaiContrat` decimal(18,2) DEFAULT NULL,
  `PeriodeGrace` decimal(18,2) DEFAULT NULL,
  `ExistCaution` tinyint(1) DEFAULT 0,
  `MontantCaution` decimal(18,2) DEFAULT NULL,
  `MotifLiberCaution` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SiReceptCaution` char(3) COLLATE utf8mb4_unicode_ci DEFAULT 'Non',
  `DateReceptCaution` datetime DEFAULT NULL,
  `ValidationEcheance` tinyint(1) DEFAULT NULL,
  `VerrouillageEcheance` tinyint(1) DEFAULT NULL,
  `NumeroCaution` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MONTANTFACTURE` decimal(18,2) DEFAULT NULL,
  `CREANCES` decimal(18,2) DEFAULT NULL,
  `RESTEAFACTURER` decimal(18,2) DEFAULT NULL,
  `MainLeveRecup` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MainLeveDateRecup` datetime DEFAULT NULL,
  `InfoExiste` tinyint(1) DEFAULT NULL,
  `DispPlanExe` tinyint(1) DEFAULT NULL,
  `DispPlanConcept` tinyint(1) DEFAULT NULL,
  `DispRapSol` tinyint(1) DEFAULT NULL,
  `DispNotCal` tinyint(1) DEFAULT NULL,
  `DispCvtFac` tinyint(1) DEFAULT NULL,
  `DispCorrespond` tinyint(1) DEFAULT NULL,
  `DispPVchantier` tinyint(1) DEFAULT NULL,
  `DispRapCtrl` tinyint(1) DEFAULT NULL,
  `DispPVEssaiMat` tinyint(1) DEFAULT NULL,
  `DispPVReunion` tinyint(1) DEFAULT NULL,
  `SituationCommerciale` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumEnregsitrementCVT` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeDossier` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NbBoite` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nbPlan` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreposage` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValideArchive` tinyint(1) DEFAULT NULL,
  `EtatArchive` tinyint(1) DEFAULT NULL,
  `filiale` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typedossier` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateEnregistrement` datetime DEFAULT NULL,
  `AnneeCvt` int(11) DEFAULT NULL,
  `EtenduCtrl` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Observation` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AgenceDorigine` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VisibleGCPRO` tinyint(1) DEFAULT 1,
  `DateModif` datetime DEFAULT NULL,
  `TraiterRCTCexe` tinyint(1) DEFAULT NULL,
  `DateVersementSrvCentral` datetime DEFAULT NULL,
  `MaitreOuvrageNom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaitreOuvrageAdresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeWilaya` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeCommune` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaitreOuvrageTel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaitreOuvrageFax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaitreOuvrageMail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datePrevTrvOLD` datetime DEFAULT NULL,
  `datePrevCtrlOLD` datetime DEFAULT NULL,
  `MontantPrevTrvOLD` decimal(18,2) DEFAULT NULL,
  `DelaiPrevTrvOLD` decimal(18,2) DEFAULT NULL,
  `code_agenceGuichet` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `VisibleTraitement` tinyint(1) DEFAULT NULL,
  `TypeContratAff` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IntituleOperation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeAntenne` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NbrSite` int(11) DEFAULT 1,
  `Nom_DR` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MontantContratTotal` decimal(18,2) DEFAULT NULL,
  `DelaiTotal` decimal(18,2) DEFAULT NULL,
  `TVA` decimal(18,2) DEFAULT NULL,
  `EtatActivite` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IntituleAffaireArb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IntituleOperationArb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tsites`
--

CREATE TABLE `tsites` (
  `Code_Affaire` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code_Site` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_agence` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ddeb_chantier` datetime DEFAULT NULL,
  `dfin_chantier` datetime DEFAULT NULL,
  `adress_proj` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeWilaya` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeCommune` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maitre_oeuv` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrep_real` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bureau_etud` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DureeControleplan` decimal(18,2) DEFAULT NULL,
  `DureeControletrvChantier` decimal(18,2) DEFAULT NULL,
  `Dureecontrolemateriaux` decimal(18,2) DEFAULT NULL,
  `Dureeredactionrapports` decimal(18,2) DEFAULT NULL,
  `DureeConsultationDocumentaire` decimal(18,2) DEFAULT NULL,
  `DureeUtilisationlogicielle` decimal(18,2) DEFAULT NULL,
  `DureeReuniontravail` decimal(18,2) DEFAULT NULL,
  `DureeActionrecouvrement` decimal(18,2) DEFAULT NULL,
  `DureeAutres` decimal(18,2) DEFAULT NULL,
  `DureeAutresPrecisez` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DureeEssaiprelevBeton` decimal(18,2) DEFAULT NULL,
  `DureeEssaiprelevAcier` decimal(18,2) DEFAULT NULL,
  `DureeEssaiPrelevAutresmat` decimal(18,2) DEFAULT NULL,
  `DureeEssaiAutres` decimal(18,2) DEFAULT NULL,
  `DureeEssaiAutresPrecisez` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut_aff` int(11) DEFAULT NULL,
  `statut_ouv` int(11) DEFAULT NULL,
  `SurfConstruitM2` decimal(18,2) DEFAULT NULL,
  `ValidationOuvertureProjet` tinyint(1) DEFAULT NULL,
  `DateCreationsite` datetime DEFAULT NULL,
  `DateDerniereModifsite` datetime DEFAULT NULL,
  `UserCreationsite` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UserDerniereModifsite` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RefCahierClause` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CahierClauseRecu` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CahierClauseNrapport` int(11) DEFAULT NULL,
  `Chargeaffairesite` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chargedaffaireHistorise` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValidOuvPrjDir` tinyint(1) DEFAULT NULL,
  `DatePriseChargersiteActuel` datetime DEFAULT NULL,
  `AvisCahierDescTechCmt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DescriptSite` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IngControleSite` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NbrePrevVisite` decimal(18,2) DEFAULT NULL,
  `NbreBatiments` decimal(18,2) DEFAULT NULL,
  `NbreLogts` decimal(18,2) DEFAULT NULL,
  `NbreAncienVisit` decimal(18,2) DEFAULT NULL,
  `CodeSiteGED` decimal(18,2) DEFAULT NULL,
  `NbreRapCtrle` decimal(18,2) DEFAULT NULL,
  `NbreRapSynthese` decimal(18,2) DEFAULT NULL,
  `AncienArretChantier` decimal(18,2) DEFAULT NULL,
  `nouvoCode_Site` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AttenteValFO` tinyint(1) DEFAULT NULL,
  `AttenteValRCT` tinyint(1) DEFAULT NULL,
  `AttenteValCourrier` tinyint(1) DEFAULT NULL,
  `AttenteValFF` tinyint(1) DEFAULT NULL,
  `DureeControleConception` decimal(18,2) DEFAULT NULL,
  `DureeControleCRCT` decimal(18,2) DEFAULT NULL,
  `DureeControleDocumentaire` decimal(18,2) DEFAULT NULL,
  `DureeControleRFCT` decimal(18,2) DEFAULT NULL,
  `DateDebutControle` datetime DEFAULT NULL,
  `NbrBlocIntroduit` int(11) DEFAULT NULL,
  `DateModif` datetime DEFAULT NULL,
  `AttenteValRecev` tinyint(1) DEFAULT NULL,
  `ValidFeuilTemp` tinyint(1) DEFAULT NULL,
  `Distance` decimal(18,2) DEFAULT NULL,
  `zone_sismique` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Projet_C_EtudeStabExca` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EtatProjetCesCet` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateDemarrageCesCet` datetime DEFAULT NULL,
  `AttenteValCRCT` tinyint(1) DEFAULT NULL,
  `AttenteValRCir` tinyint(1) DEFAULT NULL,
  `AttenteValRFCT` tinyint(1) DEFAULT NULL,
  `programmeliverableDate` datetime DEFAULT NULL,
  `programmeliverableTotalPartiel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programmeliverableUniteLivrable` int(11) DEFAULT NULL,
  `adress_projArb` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gouvernorat` int(11) DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'users.png',
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_activated` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gouvernorat`, `region`, `remember_token`, `created_at`, `updated_at`, `date_of_birth`, `phone_number`, `image`, `Gender`, `google_id`, `is_activated`) VALUES
(1, 'mina aissaa', 'amina.aissa@ctc-dz.org', NULL, '123456', 2, '10th of Ramadan City', NULL, '2022-01-13 12:11:27', '2022-01-13 12:11:27', NULL, 551554786, 'users.png', '', NULL, 0),
(2, 'Shelley Rowe', 'togur@mailinator.com', NULL, '123456', NULL, '10th of Ramadan City', NULL, '2022-01-13 12:20:55', '2022-01-13 12:20:55', NULL, 551554786, 'users.png', '', NULL, NULL),
(28, 'eeeeeeeeee', 'admin@forum.com', NULL, '123456', NULL, NULL, NULL, '2022-01-23 10:30:22', '2022-01-23 10:30:22', NULL, 557765492, 'users.png', 'Male', NULL, NULL),
(29, 'ratiba', 'aissa.amina.2014@gmail.com', NULL, '$2y$10$ccj1f.LEXnHlL2pCsBz/Wus0WYVV1M2AV/VIemEdBstfoyh9GKbm.', NULL, NULL, NULL, '2022-01-23 11:31:42', '2022-01-23 11:31:42', NULL, 557765492, 'users.png', 'Female', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exercices_id_gym_room_index` (`id_gym_room`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gouvernorats`
--
ALTER TABLE `gouvernorats`
  ADD PRIMARY KEY (`id_gouver`);

--
-- Index pour la table `governorates`
--
ALTER TABLE `governorates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gym_room`
--
ALTER TABLE `gym_room`
  ADD PRIMARY KEY (`id_gym_room`),
  ADD KEY `gym_room_gouvernorat_index` (`gouvernorat`),
  ADD KEY `gym_room_region_index` (`region`);

--
-- Index pour la table `gym_rooms`
--
ALTER TABLE `gym_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mmuscles`
--
ALTER TABLE `mmuscles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `muscles`
--
ALTER TABLE `muscles`
  ADD PRIMARY KEY (`id_muscle`);

--
-- Index pour la table `muscle_group`
--
ALTER TABLE `muscle_group`
  ADD PRIMARY KEY (`id_muscle_group`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id_region`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taffaire`
--
ALTER TABLE `taffaire`
  ADD PRIMARY KEY (`Code_Affaire`);

--
-- Index pour la table `tsites`
--
ALTER TABLE `tsites`
  ADD PRIMARY KEY (`Code_Affaire`,`Code_Site`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT pour la table `exercices`
--
ALTER TABLE `exercices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gouvernorats`
--
ALTER TABLE `gouvernorats`
  MODIFY `id_gouver` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `governorates`
--
ALTER TABLE `governorates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `gym_room`
--
ALTER TABLE `gym_room`
  MODIFY `id_gym_room` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gym_rooms`
--
ALTER TABLE `gym_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=414;

--
-- AUTO_INCREMENT pour la table `mmuscles`
--
ALTER TABLE `mmuscles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `muscles`
--
ALTER TABLE `muscles`
  MODIFY `id_muscle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `muscle_group`
--
ALTER TABLE `muscle_group`
  MODIFY `id_muscle_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id_region` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
