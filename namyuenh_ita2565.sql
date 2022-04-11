-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 22 ธ.ค. 2021 เมื่อ 11:06 AM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.21-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `namyuenh_ita2565`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL COMMENT 'ID หมวดหมู่',
  `name` varchar(255) NOT NULL COMMENT 'หมวดหมู่',
  `create_date` date NOT NULL COMMENT 'วันที่สร้าง',
  `cat_id` int(11) DEFAULT NULL COMMENT 'id ha_category'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `group`
--

INSERT INTO `group` (`id`, `name`, `create_date`, `cat_id`) VALUES
(1, '1.1 มีบันทึกข้อความลงนามในคำสั่ง และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ ของหน่วยงาน', '2021-12-02', 1),
(2, '1.2 มีคำสั่ง มาตรการ กลไก หรือระบบในการดำเนินการกำหนดให้มีการเผยแพร่ข้อมูล ผ่านเว็บไซต์ของหน่วยงานโดยผู้บริหารสูงสุดของหน่วยงาน (คำสั่งเดิม หรือทบทวนคำสั่ง)', '2021-12-02', 1),
(3, '1.3 มีกรอบแนวทางการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน รายละเอียดเนื้อหาในข้อมูลประกอบข้อคำถามข้อ 2. (ข้อ 2.1 ถึงข้อ 2.2)', '2021-12-02', 1),
(4, '1.4 มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 1),
(5, '2.1 มีบันทึกข้อความลงนามรับทราบ และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ ของหน่วยงาน', '2021-12-02', 2),
(6, '2.2 มีรายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ ของหน่วยงานในปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)', '2021-12-02', 2),
(7, '2.3 มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 2),
(8, '1.1 ข้อมูลผู้บริหาร แสดงรายนามของผู้บริหารของหน่วยงาน ประกอบด้วย (1) รูปถ่าย (2) ชื่อ-นามสกุล (3) ตำแหน่ง และ (4) หมายเลขโทรศัพท์ (มีครบ 4 รายการ)', '2021-12-02', 3),
(9, '1.2 นโยบายของผู้บริหาร', '2021-12-02', 3),
(10, '1.3 โครงสร้างหน่วยงาน', '2021-12-02', 3),
(11, '1.4 หน้าที่และอำนาจของหน่วยงานตามกฎหมายจัดตั้ง หรือกฎหมายอื่นที่เกี่ยวข้อง', '2021-12-02', 3),
(12, '1.5 กฎหมายที่เกี่ยวข้องกับการดำเนินงาน หรือการปฏิบัติงานของหน่วยงาน', '2021-12-02', 3),
(13, '1.6 ข่าวประชาสัมพันธ์ ที่แสดงข้อมูลข่าวสารที่เกี่ยวกับการดำเนินงานตามหน้าที่ และอำนาจ และภารกิจของหน่วยงาน และเป็นข้อมูลข่าวสารที่เกิดขึ้นในปีงบประมาณ พ.ศ. 2565', '2021-12-02', 3),
(14, '1.7 ข้อมูลการติดต่อหน่วยงาน ประกอบด้วย (1) ที่อยู่หน่วยงาน (2) หมายเลขโทรศัพท์ของหน่วยงาน (3) หมายเลขโทรสารของหน่วยงาน (4) ที่อยู่ไปรษณีย์อิเล็กทรอนิกส์ของหน่วยงาน และ (5) แผนที่ที่ตั้งหน่วยงาน (มีครบ 5 รายการ)', '2021-12-02', 3),
(15, '1.8 ช่องทางการรับฟังความคิดเห็น ที่บุคคลภายนอกสามารถแสดงความคิดเห็น ต่อการดำเนินงานตามหน้าที่และอำนาจตามภารกิจของหน่วยงาน', '2021-12-02', 3),
(16, '2. วิสัยทัศน์ พันธกิจ ค่านิยม MOPH', '2021-12-02', 3),
(17, '3. พระราชบัญญัติมาตรฐานทางจริยธรรม พ.ศ. 2562', '2021-12-02', 3),
(18, '4. ประมวลจริยธรรมข้าราชการพลเรือน พ.ศ. 2564', '2021-12-02', 3),
(19, '5. ข้อกำหนดจริยธรรมเจ้าหน้าที่ของรัฐ สำนักงานปลัดกระทรวงสาธารณสุข พ.ศ. 2564', '2021-12-02', 3),
(20, '6. อินโฟกราฟฟิกคณะกรรมการจริยธรรม ประจำสำนักงานปลัดกระทรวงสาธารณสุข ชุดปัจจุบัน', '2021-12-02', 3),
(21, '7. ยุทธศาสตร์ของประเทศ โดยรวม', '2021-12-02', 3),
(22, '8. นโยบายและยุทธศาสตร์ของหน่วยงาน', '2021-12-02', 3),
(23, '9. แผนปฏิบัติการประจำปีของหน่วยงาน และการติดตามประเมินผลการดำเนินงาน ตามแผนปฏิบัติการประจำปีของหน่วยงาน (แผนปฏิบัติการประจำปีของหน่วยงาน ทุกแผน)', '2021-12-02', 3),
(24, '10. แผนการใช้จ่ายงบประมาณประจำปีของหน่วยงาน และผลการใช้จ่ายงบประมาณประจำปีของหน่วยงาน ตามแผนการใช้จ่ายงบประมาณประจำปีของหน่วยงาน', '2021-12-02', 3),
(25, '11. คู่มือการปฏิบัติงานการร้องเรียนการปฏิบัติงานหรือให้บริการของเจ้าหน้าที่', '2021-12-02', 3),
(26, '12. คู่มือการปฏิบัติงานการร้องเรียนเรื่องการทุจริตและประพฤติมิชอบ', '2021-12-02', 3),
(27, '13. คู่มือการปฏิบัติงานตามภารกิจหลักและภารกิจสนับสนุนของหน่วยงาน', '2021-12-02', 3),
(28, '14. คู่มือขั้นตอนการให้บริการ (ภารกิจให้บริการประชาชนตามพระราชบัญญัติ การอํานวยความสะดวกในการพิจารณาอนุญาตของทางราชการ พ.ศ. 2558) (เฉพาะสำนักงานสาธารณสุขจังหวัด และสำนักงานสาธารณสุขอำเภอ)', '2021-12-02', 3),
(29, '15 .รายงานผลการดำเนินการเกี่ยวกับเรื่องร้องเรียนการปฏิบัติงานหรือการให้บริการ', '2021-12-02', 3),
(30, '16. รายงานผลการดำเนินการเกี่ยวกับเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ', '2021-12-02', 3),
(31, '17.1 การวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)', '2021-12-02', 4),
(32, '17.2 แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปี', '2021-12-02', 4),
(33, '17.3 ผลการดำเนินการตามแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีประจำปี ตามรอบระยะเวลาที่กำหนดในกรอบแนวทาง', '2021-12-02', 4),
(34, '17.4 ประกาศสำนักงานปลัดกระทรวงสาธารณสุขว่าด้วยแนวทางปฏิบัติงาน เพื่อตรวจสอบบุคลากรในหน่วยงานด้านการจัดซื้อจัดจ้าง พ.ศ. 2560 และแบบแสดง ความบริสุทธิ์ใจในการจัดซื้อจัดจ้างของหน่วยงานในการเปิดเผยข้อมูลความขัดแย้ง ทางผลประโยชน์ของหัวหน้าเจ้าหน้าที่', '2021-12-02', 4),
(35, '17.5 แบบสรุปผลการจัดหาพัสดุในแต่ละรอบเดือน ปีงบประมาณ พ.ศ. 2565 (แบบ สขร. 1)', '2021-12-02', 4),
(36, '1. มีบันทึกข้อความรายงานผู้บริหารรับทราบ และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน', '2021-12-02', 5),
(37, '2. มีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2564 ที่มีลักษณะเป็นรูปเล่มรายงาน โดยต้องนำเสนอข้อมูลการวิเคราะห์อย่างเป็นระบบ ตามข้อมูลประกอบข้อคำถามข้อ 2. ครบทั้ง 4 องค์ประกอบ คือ (1) การวิเคราะห์ความเสี่ยง (2) การวิเคราะ', '2021-12-02', 5),
(38, '3. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 5),
(39, '1. มีบันทึกข้อความรายงานผู้บริหารรับทราบ และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน', '2021-12-02', 6),
(40, '2. มีหนังสือจัดสรรงบประมาณของหน่วยงาน', '2021-12-02', 6),
(41, '3. มีแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565 (งบดำเนินการ และงบลงทุน)', '2021-12-02', 6),
(42, '4. มีคำสั่งมอบหมายการปิดประกาศ หรือปลดประกาศ', '2021-12-02', 6),
(43, '5. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 6),
(44, '1. มีบันทึกข้อความรายงานผู้บริหารรับทราบ และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน', '2021-12-02', 7),
(45, '2. มีรายงานผลการดำเนินการตามแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2565 ตามข้อกำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส', '2021-12-02', 7),
(46, '3. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 7),
(47, '1. มีบันทึกข้อความแจ้งเวียนประกาศสำนักงานปลัดกระทรวงสาธารณสุขว่าด้วยแนวทางปฏิบัติงานเพื่อตรวจสอบบุคลากรในหน่วยงานด้านการจัดซื้อจัดจ้าง พ.ศ. 2560 และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน', '2021-12-02', 8),
(48, '	2. มีประกาศสำนักงานปลัดกระทรวงสาธารณสุขว่าด้วยแนวทางปฏิบัติงานเพื่อตรวจสอบบุคลากรในหน่วยงานด้านการจัดซื้อจัดจ้าง พ.ศ. 2560 ลงวันที่ 12 ตุลาคม 2560 และแบบแสดงความบริสุทธิ์ใจในการจัดซื้อจัดจ้างของหน่วยงานในการเปิดเผยข้อมูลความขัดแย้งทางผลประโยชน์ของหัวหน้า', '2021-12-02', 8),
(49, '3. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 8),
(50, '1. มีบันทึกข้อความรายงานผู้บริหารรับทราบ และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน', '2021-12-02', 9),
(51, 'ไตรมาสที่ 1 แสดงแบบ สขร. 1 เดือนตุลาคม 2564', '2021-12-02', 10),
(52, 'ไตรมาสที่ 1 แสดงแบบ สขร. 1 เดือนพฤศจิกายน 2564', '2021-12-02', 10),
(53, 'ไตรมาสที่ 1 แสดงแบบ สขร. 1 เดือนธันวาคม 2564', '2021-12-02', 10),
(54, '3. มีแบบฟอร์มการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงาน', '2021-12-02', 10);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `ha_category`
--

CREATE TABLE `ha_category` (
  `id` int(11) NOT NULL COMMENT 'ID หมวดหมู่',
  `name` varchar(255) NOT NULL COMMENT 'หมวดหมู่',
  `create_date` date NOT NULL COMMENT 'วันที่สร้าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `ha_category`
--

INSERT INTO `ha_category` (`id`, `name`, `create_date`) VALUES
(1, 'MOIT1 | 1. คำสั่ง / กรอบแนวทาง', '2021-11-08'),
(2, 'MOIT1 | 2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)', '2021-11-08'),
(3, 'MOIT2 | 1. ข้อมูลพื้นฐานที่เป็นปัจจุบัน ประกอบด้วย', '2021-11-08'),
(4, 'MOIT2 | 17. ข้อมูลการจัดซื้อจัดจ้าง ประกอบด้วย', '2021-11-08'),
(5, 'MOIT3 | หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2564', '2021-11-08'),
(6, 'MOIT4 | ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน', '2021-11-08'),
(7, 'MOIT4 | ข้อ 2. รายงานผลของแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีของหน่วยงาน ตามรอบระยะเวลา ที่กำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส', '2021-11-08'),
(8, 'MOIT4 | ข้อ 3. การป้องกันผู้ที่มีหน้าที่ดำเนินการในการจัดซื้อจัดจ้างเป็นผู้มีส่วนได้ส่วนเสียกับผู้ยื่นข้อเสนอหรือคู่สัญญา', '2021-11-08'),
(9, 'MOIT5 | ไตรมาสที่ 1 เดือนตุลาคม - เดือนธันวาคม 2564', '2021-11-08'),
(10, 'MOIT5 | 2. แบบสรุปผลการจัดหาพัสดุในแต่ละรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 1 เดือน ตุลาคม ถึง ธันวาคม ดังนี้', '2021-12-02');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `ha_documents`
--

CREATE TABLE `ha_documents` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) DEFAULT NULL COMMENT 'หลายเลข referent สำหรับอัพโหลดไฟล์ ajax',
  `title` varchar(255) DEFAULT NULL COMMENT 'ชื่องาน',
  `description` text DEFAULT NULL COMMENT 'รายละเอียด',
  `covenant` varchar(255) DEFAULT NULL COMMENT 'file',
  `docs` text DEFAULT NULL COMMENT 'เอกสารประกอบ',
  `create_date` timestamp NULL DEFAULT current_timestamp() COMMENT 'สร้างวันที่',
  `cat_id` int(11) DEFAULT NULL COMMENT 'ID หมวดหมู่หลัก',
  `group_id` int(11) DEFAULT NULL COMMENT 'ID หมวดหมู่ย่อย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `ha_documents`
--

INSERT INTO `ha_documents` (`id`, `ref`, `title`, `description`, `covenant`, `docs`, `create_date`, `cat_id`, `group_id`) VALUES
(1, 'AR6mXsExZuvIJ9Yunb-orF', 'หน่วยงานมีการเปิดเผยข้อมูลข่าวสารที่เป็นปัจจุบัน', 'หน่วยงานมีการเปิดเผยข้อมูลข่าวสารที่เป็นปัจจุบัน', NULL, '{\"4a5e49527035009a319a93d72b957a89.pdf\":\"ระเบียบกระทรวงสาธารณสุข-ว่าด้วยการคุ้มครองและจัดการข้อมูลด้านสุขภาพของบุคคล-พ.ศ.2561.pdf\"}', '2021-12-14 08:35:31', 2, 5);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1429928899),
('m000000_000001_CreateRbacTables', 1429929043),
('m000000_000002_CreateUserTables', 1429941926),
('m000000_000003_ChangeTokenColumn', 1429941926),
('m140209_132017_init', 1435203411),
('m140403_174025_create_account_table', 1435203411),
('m140504_113157_update_tables', 1435203411),
('m140504_130429_create_token_table', 1435203411),
('m140830_171933_fix_ip_field', 1435203411),
('m140830_172703_change_account_table_name', 1435203411),
('m141222_110026_update_ip_field', 1435203411),
('m141222_135246_alter_username_length', 1552026516),
('m150614_103145_update_social_account_table', 1552026516),
('m150623_212711_fix_username_notnull', 1552026516),
('m151218_234654_add_timezone_to_profile', 1552026516),
('m160929_103127_add_last_login_at_to_user_table', 1552026516);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `gravatar_email` varchar(255) DEFAULT NULL,
  `gravatar_id` varchar(32) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `timezone` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, 'นรินทร์ จุลทัศน์', '', 'chulatatnarin@gmail.com', '678d2e240fa3f326524f38859770f0f5', 'โรงพยาบาลน้ำยืน', 'http://namyuenhosp.in.th/', 'IT', NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text DEFAULT NULL,
  `code` varchar(32) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `uploads`
--

CREATE TABLE `uploads` (
  `upload_id` int(11) NOT NULL,
  `ref` varchar(50) DEFAULT NULL,
  `file_name` varchar(150) DEFAULT NULL COMMENT 'ชื่อไฟล์',
  `real_filename` varchar(150) DEFAULT NULL COMMENT 'ชื่อไฟล์จริง',
  `create_date` timestamp NULL DEFAULT current_timestamp(),
  `type` int(11) DEFAULT NULL COMMENT 'ประเภท'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT 0,
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'admin', 'chulatatnarin@gmail.com', '$2y$12$IYk2q2O76JYcJUbLol0EputYiZXJdwdeMqKEubekqAzahqbAHchwi', 'cvHiM7kFUIajP2Bvnw4MgvBvyY7h0xbs', 1552026751, NULL, NULL, '127.0.0.1', 1435206956, 1587011302, 0, 1640070115),
(3, 'turakarn', 'turakarn22@gmail.com', '$2y$12$dJm6BfjZa0CrK2lWIvN48e2OUweEEDSxUzSpi9PoUEYJcrAhOWgu6', 'LUcR-_BEbzR1SEEjgKXpDFi7tiWitQML', 1587701603, NULL, NULL, '183.89.83.15', 1587701603, 1587701603, 0, 1587701618),
(5, 'admin2', 'chonnikan31@gmail.com', '$2y$12$P53RYjruC91pkr4rd7B6rOr/eKt1aeZZE45giIuVkcsXmGCIlj/M.', 'X1Y4KXQeuahZ63quasFgCtXBHHIZ4rN9', 1619413397, NULL, NULL, '110.164.188.210', 1619413397, 1619413397, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE;

--
-- Indexes for table `ha_category`
--
ALTER TABLE `ha_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ha_documents`
--
ALTER TABLE `ha_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE,
  ADD KEY `group_id` (`group_id`) USING BTREE;

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`upload_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID หมวดหมู่', AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ha_category`
--
ALTER TABLE `ha_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID หมวดหมู่', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ha_documents`
--
ALTER TABLE `ha_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `upload_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `group_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `ha_category` (`id`);

--
-- Constraints for table `ha_documents`
--
ALTER TABLE `ha_documents`
  ADD CONSTRAINT `ha_documents_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`),
  ADD CONSTRAINT `ha_documents_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `ha_category` (`id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
