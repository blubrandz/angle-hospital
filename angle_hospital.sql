-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angle_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_dates`
--

CREATE TABLE `appointment_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username_appointmentdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_appointmentdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_appointmentdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty_appointmentdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_dates`
--

INSERT INTO `appointment_dates` (`id`, `username_appointmentdate`, `email_appointmentdate`, `date_appointmentdate`, `empty_appointmentdate`, `created_at`, `updated_at`) VALUES
(2, 'vishwajit vm', 'doctor@gmail.com', '2021-12-30', NULL, '2021-12-31 02:20:20', '2021-12-31 02:20:20'),
(3, 'vishwajit vm', 'doctor@gmail.com', '2022-01-10', NULL, '2021-12-31 02:20:31', '2021-12-31 02:20:31'),
(5, 'docto2', 'docto2@gmail.com', '2022-01-01', NULL, '2022-01-01 06:00:58', '2022-01-01 06:00:58'),
(6, 'docto2', 'docto2@gmail.com', '2022-01-02', NULL, '2022-01-01 06:01:13', '2022-01-01 06:01:13'),
(7, 'docto2', 'docto2@gmail.com', '2022-01-03', NULL, '2022-01-01 06:01:29', '2022-01-01 06:01:29'),
(8, 'docto2', 'docto2@gmail.com', '2022-01-04', NULL, '2022-01-01 06:01:44', '2022-01-01 06:01:44'),
(9, 'vishwajit vm', 'doctor@gmail.com', '2022-01-08', NULL, '2022-01-01 06:02:34', '2022-01-01 06:02:34'),
(10, 'docto2', 'docto2@gmail.com', '2022-01-12', NULL, '2022-01-04 02:33:01', '2022-01-04 02:33:01'),
(11, 'docto2', 'docto2@gmail.com', '2022-01-13', NULL, '2022-01-08 17:37:09', '2022-01-08 17:37:09'),
(12, 'avani charvedi', 'avani@gmail.com', '2022-01-13', NULL, '2022-01-08 17:40:28', '2022-01-08 17:40:28'),
(13, 'avani charvedi', 'avani@gmail.com', '2022-01-14', NULL, '2022-01-08 17:40:47', '2022-01-08 17:40:47'),
(14, 'avani charvedi', 'avani@gmail.com', '2022-01-15', NULL, '2022-01-08 17:41:06', '2022-01-08 17:41:06'),
(15, 'vishwajit vm', 'doctor@gmail.com', '2022-01-14', NULL, '2022-01-12 20:33:30', '2022-01-12 20:33:30'),
(16, 'vishwajit vm', 'doctor@gmail.com', '2022-01-18', NULL, '2022-01-17 04:38:38', '2022-01-17 04:38:38'),
(17, 'vishwajit vm', 'doctor@gmail.com', '2022-01-19', NULL, '2022-01-17 04:38:55', '2022-01-17 04:38:55'),
(18, 'vishwajit vm', 'doctor@gmail.com', '2022-01-20', NULL, '2022-01-17 04:39:11', '2022-01-17 04:39:11'),
(19, 'vineet', 'vineet@gmail.com', '2022-01-21', NULL, '2022-01-18 07:51:58', '2022-01-18 07:51:58'),
(20, 'vishwajit vm', 'doctor@gmail.com', '2022-01-22', NULL, '2022-01-21 00:31:33', '2022-01-21 00:31:33'),
(21, 'vishwajit vm', 'doctor@gmail.com', '2022-01-21', NULL, '2022-01-21 00:31:52', '2022-01-21 00:31:52'),
(22, 'vishwajit vm', 'doctor@gmail.com', '2022-01-23', NULL, '2022-01-21 00:32:12', '2022-01-21 00:32:12'),
(23, 'vishwajit vm', 'doctor@gmail.com', '2022-01-25', NULL, '2022-01-25 00:06:31', '2022-01-25 00:06:31'),
(24, 'vishwajit vm', 'doctor@gmail.com', '2022-01-26', NULL, '2022-01-25 00:06:47', '2022-01-25 00:06:47'),
(25, 'vishwajit vm', 'doctor@gmail.com', '2022-01-27', NULL, '2022-01-25 00:07:06', '2022-01-25 00:07:06'),
(26, 'vishwajit vm', 'doctor@gmail.com', '2022-01-28', NULL, '2022-01-25 00:07:24', '2022-01-25 00:07:24'),
(27, 'avani charvedi', 'avani@gmail.com', '2022-01-29', NULL, '2022-01-29 03:32:46', '2022-01-29 03:32:46'),
(28, 'vishwajit vm', 'doctor@gmail.com', '2022-01-29', NULL, '2022-01-29 04:02:29', '2022-01-29 04:02:29'),
(29, 'avani charvedi', 'avani@gmail.com', '2022-01-31', NULL, '2022-01-31 02:30:56', '2022-01-31 02:30:56'),
(30, 'vishwajit vm', 'doctor@gmail.com', '2022-02-04', NULL, '2022-02-03 13:21:31', '2022-02-03 13:21:31'),
(31, 'vishwajit vm', 'doctor@gmail.com', '2022-02-05', NULL, '2022-02-03 13:21:50', '2022-02-03 13:21:50'),
(32, 'avani charvedi', 'avani@gmail.com', '2022-02-04', NULL, '2022-02-04 03:40:46', '2022-02-04 03:40:46'),
(33, 'avani charvedi', 'avani@gmail.com', '2022-02-05', NULL, '2022-02-04 03:41:05', '2022-02-04 03:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_timeslots`
--

CREATE TABLE `appointment_timeslots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useremail_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selectdate_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starting_time_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ending_time_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_timeslots`
--

INSERT INTO `appointment_timeslots` (`id`, `username_timeslot`, `useremail_timeslot`, `selectdate_timeslot`, `starting_time_timeslot`, `ending_time_timeslot`, `empty_timeslot`, `created_at`, `updated_at`) VALUES
(1, 'vishwajit vm', 'doctor@gmail.com', '2022-01-02', '01:30 PM', '02:00 PM', NULL, '2022-01-01 02:32:57', '2022-01-01 02:32:57'),
(3, 'vishwajit vm', 'doctor@gmail.com', '2022-01-01', '02:00 PM', '02:15 PM', NULL, '2022-01-01 02:47:40', '2022-01-01 02:47:40'),
(4, 'vishwajit vm', 'doctor@gmail.com', '2022-01-01', '02:00 PM', '02:30 PM', NULL, '2022-01-01 03:12:15', '2022-01-01 03:12:15'),
(5, 'vishwajit vm', 'doctor@gmail.com', '2022-01-01', '02:30 PM', '02:45 PM', NULL, '2022-01-01 03:12:42', '2022-01-01 03:12:42'),
(6, 'docto2', 'docto2@gmail.com', '2022-01-04', '05:30 PM', '06:00 PM', NULL, '2022-01-01 06:32:33', '2022-01-01 06:32:33'),
(7, 'docto2', 'docto2@gmail.com', '2022-01-03', '05:30 PM', '06:00 PM', NULL, '2022-01-01 06:32:55', '2022-01-01 06:32:55'),
(8, 'docto2', 'docto2@gmail.com', '2022-01-02', '02:45 PM', '03:15 PM', NULL, '2022-01-01 06:33:35', '2022-01-01 06:33:35'),
(9, 'docto2', 'docto2@gmail.com', '2022-01-01', '05:30 PM', '06:00 PM', NULL, '2022-01-01 06:33:57', '2022-01-01 06:33:57'),
(10, 'docto2', 'docto2@gmail.com', '2022-01-01', '11:30 AM', '12:30 PM', NULL, '2022-01-01 06:34:27', '2022-01-01 06:34:27'),
(11, 'docto2', 'docto2@gmail.com', '2022-01-12', '01:30 PM', '02:00 PM', NULL, '2022-01-04 02:34:01', '2022-01-04 02:34:01'),
(12, 'yash', 'yash@gmail.com', NULL, NULL, NULL, NULL, '2022-01-06 10:20:40', '2022-01-06 10:20:40'),
(13, 'vishwajit vm', 'doctor@gmail.com', '2022-01-10', '03:00 PM', '03:30 PM', NULL, '2022-01-08 16:20:42', '2022-01-08 16:20:42'),
(14, 'vishwajit vm', 'doctor@gmail.com', '2022-01-10', '04:00 PM', '04:30 PM', NULL, '2022-01-08 16:22:51', '2022-01-08 16:22:51'),
(15, 'vishwajit vm', 'doctor@gmail.com', '2022-01-12', '06:00 PM', '06:30 PM', NULL, '2022-01-08 16:24:19', '2022-01-08 16:24:19'),
(16, 'vishwajit vm', 'doctor@gmail.com', '2022-01-12', '02:00 PM', '02:30 PM', NULL, '2022-01-08 16:25:14', '2022-01-08 16:25:14'),
(17, 'docto2', 'docto2@gmail.com', '2022-01-13', '04:30 AM', '05:00 AM', NULL, '2022-01-08 17:37:48', '2022-01-08 17:37:48'),
(18, 'avani charvedi', 'avani@gmail.com', '2022-01-14', '02:00 AM', '02:30 AM', NULL, '2022-01-08 17:41:47', '2022-01-08 17:41:47'),
(19, 'avani charvedi', 'avani@gmail.com', '2022-01-14', '04:00 AM', '04:30 AM', NULL, '2022-01-08 17:42:15', '2022-01-08 17:42:15'),
(20, 'vishwajit vm', 'doctor@gmail.com', '2022-01-14', '07:30 AM', '08:00 AM', NULL, '2022-01-12 20:34:08', '2022-01-12 20:34:08'),
(21, 'vishwajit vm', 'doctor@gmail.com', '2022-01-14', '10:00 AM', '11:00 AM', NULL, '2022-01-12 20:35:00', '2022-01-12 20:35:00'),
(22, 'vishwajit vm', 'doctor@gmail.com', '2022-01-18', '03:30 PM', '03:30 PM', NULL, '2022-01-17 04:39:39', '2022-01-17 04:39:39'),
(23, 'vishwajit vm', 'doctor@gmail.com', '2022-01-18', '05:30 PM', '06:30 PM', NULL, '2022-01-17 04:40:10', '2022-01-17 04:40:10'),
(24, 'vishwajit vm', 'doctor@gmail.com', '2022-01-20', '03:00 AM', '03:30 AM', NULL, '2022-01-17 16:09:34', '2022-01-17 16:09:34'),
(25, 'vishwajit vm', 'doctor@gmail.com', '2022-01-19', '04:00 AM', '05:00 AM', NULL, '2022-01-17 16:10:00', '2022-01-17 16:10:00'),
(26, 'vishwajit vm', 'doctor@gmail.com', '2022-01-20', '06:00 AM', '07:00 AM', NULL, '2022-01-17 16:10:21', '2022-01-17 16:10:21'),
(27, 'vineet', 'vineet@gmail.com', '2022-01-21', '07:00 PM', '08:00 PM', NULL, '2022-01-18 07:54:35', '2022-01-18 07:54:35'),
(28, 'vishwajit vm', 'doctor@gmail.com', '2022-01-21', '11:30 AM', '12:00 PM', NULL, '2022-01-21 00:33:04', '2022-01-21 00:33:04'),
(29, 'vishwajit vm', 'doctor@gmail.com', '2022-01-21', '12:30 PM', '01:30 PM', NULL, '2022-01-21 00:33:34', '2022-01-21 00:33:34'),
(30, 'vishwajit vm', 'doctor@gmail.com', '2022-01-22', '11:30 AM', '12:30 PM', NULL, '2022-01-21 00:34:27', '2022-01-21 00:34:27'),
(31, 'vishwajit vm', 'doctor@gmail.com', '2022-01-22', '03:30 PM', '04:30 PM', NULL, '2022-01-21 00:34:59', '2022-01-21 00:34:59'),
(32, 'vishwajit vm', 'doctor@gmail.com', '2022-01-23', '11:30 AM', '01:30 PM', NULL, '2022-01-21 00:35:49', '2022-01-21 00:35:49'),
(33, 'vishwajit vm', 'doctor@gmail.com', '2022-01-25', '11:00 AM', '11:30 AM', NULL, '2022-01-25 00:07:52', '2022-01-25 00:07:52'),
(34, 'vishwajit vm', 'doctor@gmail.com', '2022-01-25', '12:00 PM', '01:00 PM', NULL, '2022-01-25 00:08:13', '2022-01-25 00:08:13'),
(35, 'vishwajit vm', 'doctor@gmail.com', '2022-01-25', '02:00 PM', '03:15 PM', NULL, '2022-01-25 00:08:41', '2022-01-25 00:08:41'),
(36, 'vishwajit vm', 'doctor@gmail.com', '2022-01-27', '11:45 AM', '12:45 PM', NULL, '2022-01-27 00:49:56', '2022-01-27 00:49:56'),
(37, 'vishwajit vm', 'doctor@gmail.com', '2022-01-27', '12:45 PM', '01:45 PM', NULL, '2022-01-27 00:50:23', '2022-01-27 00:50:23'),
(38, 'vishwajit vm', 'doctor@gmail.com', '2022-01-27', '02:45 PM', '03:45 PM', NULL, '2022-01-27 00:50:50', '2022-01-27 00:50:50'),
(39, 'vishwajit vm', 'doctor@gmail.com', '2022-01-28', '12:00 PM', '01:00 PM', NULL, '2022-01-27 00:51:35', '2022-01-27 00:51:35'),
(40, 'vishwajit vm', 'doctor@gmail.com', '2022-01-28', '03:45 PM', '04:45 PM', NULL, '2022-01-27 00:53:13', '2022-01-27 00:53:13'),
(41, 'vishwajit vm', 'doctor@gmail.com', '2022-01-28', '05:45 PM', '06:45 PM', NULL, '2022-01-27 00:53:40', '2022-01-27 00:53:40'),
(42, 'avani charvedi', 'avani@gmail.com', '2022-01-29', '04:00 PM', '04:30 PM', NULL, '2022-01-29 03:33:22', '2022-01-29 03:33:22'),
(43, 'vishwajit vm', 'doctor@gmail.com', '2022-01-29', '03:00 PM', '03:30 PM', NULL, '2022-01-29 04:02:54', '2022-01-29 04:02:54'),
(44, 'avani charvedi', 'avani@gmail.com', '2022-01-31', '01:30 PM', '02:30 PM', NULL, '2022-01-31 02:31:32', '2022-01-31 02:31:32'),
(45, 'vishwajit vm', 'doctor@gmail.com', '2022-02-04', '04:30 AM', '05:30 AM', NULL, '2022-02-03 13:23:05', '2022-02-03 13:23:05'),
(46, 'avani charvedi', 'avani@gmail.com', '2022-02-04', '03:00 PM', '04:00 PM', NULL, '2022-02-04 03:47:46', '2022-02-04 03:47:46'),
(47, 'avani charvedi', 'avani@gmail.com', '2022-02-04', '05:00 PM', '06:00 PM', NULL, '2022-02-04 03:48:18', '2022-02-04 03:48:18'),
(48, 'avani charvedi', 'avani@gmail.com', '2022-02-05', '02:45 PM', '03:45 PM', NULL, '2022-02-04 03:48:53', '2022-02-04 03:48:53'),
(49, 'avani charvedi', 'avani@gmail.com', '2022-02-05', '05:45 PM', '06:45 PM', NULL, '2022-02-04 03:49:26', '2022-02-04 03:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_main_catagory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_image` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_video` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_empty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease_empty3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease_main_catagory`, `disease_name`, `disease_description`, `disease_image`, `disease_video`, `disease_empty1`, `disease_empty2`, `disease_empty3`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Female infertility', '<h2>Overview</h2>\r\n\r\n<p>Infertility is defined as trying to get pregnant with frequent, unprotected sex for at least a year with no success.</p>\r\n\r\n<p>Infertility results from female factors about one-third of the time and both female and male factors about one-third of the time. The cause is either unknown or a combination of male and female factors in the remaining cases.</p>\r\n\r\n<p>Female infertility causes can be difficult to diagnose. There are many treatments, depending on the infertility cause. Many infertile couples will go on to conceive a child without treatment.</p>\r\n\r\n<h2>Symptoms</h2>\r\n\r\n<p>The main symptom of infertility is the inability to get pregnant. A menstrual cycle that&#39;s too long (35 days or more), too short (less than 21 days), irregular or absent can mean that you&#39;re not ovulating. There might be no other signs or symptoms.</p>\r\n\r\n<h3>When to see a doctor</h3>\r\n\r\n<p>When to seek help can depend on your age:</p>\r\n\r\n<ul>\r\n	<li><strong>Up to age 35,</strong>&nbsp;most doctors recommend trying to get pregnant for at least a year before testing or treatment.</li>\r\n	<li><strong>If you&#39;re between 35 and 40,</strong>&nbsp;discuss your concerns with your doctor after six months of trying.</li>\r\n	<li><strong>If you&#39;re older than 40,</strong>&nbsp;your doctor might suggest testing or treatment right away.</li>\r\n</ul>\r\n\r\n<p>Your doctor might also want to begin testing or treatment right away if you or your partner has known fertility problems, or if you have a history of irregular or painful periods, pelvic inflammatory disease, repeated miscarriages, cancer treatment, or endometriosis.</p>\r\n\r\n<h3>Ovulation disorders</h3>\r\n\r\n<p>Ovulating infrequently or not at all accounts for most cases of infertility. Problems with the regulation of reproductive hormones by the hypothalamus or the pituitary gland or problems in the ovary can cause ovulation disorders.</p>\r\n\r\n<ul>\r\n	<li><strong>Polycystic ovary syndrome (PCOS).</strong>&nbsp;PCOS&nbsp;causes a hormone imbalance, which affects ovulation.&nbsp;PCOS&nbsp;is associated with insulin resistance and obesity, abnormal hair growth on the face or body, and acne. It&#39;s the most common cause of female infertility.</li>\r\n	<li><strong>Hypothalamic dysfunction.</strong>&nbsp;Two hormones produced by the pituitary gland are responsible for stimulating ovulation each month &mdash; follicle-stimulating hormone (FSH) and luteinizing hormone (LH). Excess physical or emotional stress, a very high or very low body weight, or a recent substantial weight gain or loss can disrupt production of these hormones and affect ovulation. Irregular or absent periods are the most common signs.</li>\r\n	<li><strong>Primary ovarian insufficiency.</strong>&nbsp;Also called premature ovarian failure, this is usually caused by an autoimmune response or by premature loss of eggs from your ovary, possibly as a result of genetics or chemotherapy. The ovary no longer produces eggs, and it lowers estrogen production in women under age 40.</li>\r\n	<li><strong>Too much prolactin.</strong>&nbsp;The pituitary gland can cause excess production of prolactin (hyperprolactinemia), which reduces estrogen production and can cause infertility. This can also be caused by medications you&#39;re taking for another condition.</li>\r\n</ul>\r\n\r\n<h3>Damage to fallopian tubes (tubal infertility)</h3>\r\n\r\n<p>Damaged or blocked fallopian tubes keep sperm from getting to the egg or block the passage of the fertilized egg into the uterus. Causes of fallopian tube damage or blockage can include:</p>\r\n\r\n<ul>\r\n	<li>Pelvic inflammatory disease, an infection of the uterus and fallopian tubes due to chlamydia, gonorrhea or other sexually transmitted infections</li>\r\n	<li>Previous surgery in the abdomen or pelvis, including surgery for ectopic pregnancy, in which a fertilized egg implants and develops somewhere other than the uterus, usually in a fallopian tube</li>\r\n</ul>', 'upload/disease/5a7b238ba0f6502e5d6be14424b20ded.jpg|upload/disease/fd0a5a5e367a0955d81278062ef37429.jpg|upload/disease/dba31bb5c75992690f20c2d3b370ec7c.jpg|upload/disease/43b9787b8a0cd00a8115c14b2b7c3a27.jpg', 'upload/disease/3e6ad89fe36086fb79126e36c659f5df.mp4|upload/disease/3e10f9cfe8030470e507965881025ab8.mp4', NULL, NULL, NULL, '2021-12-21 07:11:24', '2021-12-21 07:11:24'),
(3, 'abc catagory disease', 'Fertility and infertility: Definition and epidemiology', '<h2>Abstract</h2>\r\n\r\n<p>Infertility is a disease characterized by the failure to establish a clinical pregnancy after 12 months of regular and unprotected sexual intercourse. It is estimated to affect between 8 and 12% of reproductive-aged couples worldwide. Males are found to be solely responsible for 20-30% of infertility cases but contribute to 50% of cases overall. Secondary infertility is the most common form of female infertility around the globe, often due to reproductive tract infections. The three major factors influencing the spontaneous probability of conception are the time of unwanted non-conception, the age of the female partner and the disease-related infertility. The chance of becoming spontaneously pregnant declines with the duration before conception. The fertility decline in female already starts around 25-30 years of age and the median age at last birth is 40-41 years in most studied populations experiencing natural fertility. The disease-related infertility may affect both genders or be specific to one gender. The factors affecting both genders&#39; fertility are hypogonadotrophic hypogonadism, hyperprolactinemia, disorders of ciliary function, cystic fibrosis, infections, systemic diseases and lifestyle related factors/diseases. Premature ovarian insufficiency, polycystic ovary syndrome, endometriosis, uterine fibroids and endometrial polyps may play a role in female infertility. Male infertility may be due to testicular and post-testicular deficiencies. Semen decline that has been observed over the years, endocrine disrupting chemicals and consanguinity are other factors that may be involved.</p>', 'upload/disease/cefb500a9f3d05511296a719cffb21cf.jpg|upload/disease/ad8e88c0f76fa4fc8e5474384142a00a.jpg|upload/disease/3fb451ca2e89b3a13095b059d8705b15.jpg|upload/disease/22bb543b251c39ccdad8063d486987bb.jpg|upload/disease/2b45e8d6abf59038a975faeeb6dc0782.jpg|upload/disease/968b15768f3d19770471e9436d97913c.jpg', 'upload/disease/8f2f470bb9d82081f256a839f1cc8f6c.mp4|upload/disease/9e6adb1432c4a75a33d48693328e4159.mp4', NULL, NULL, NULL, '2021-12-21 07:18:18', '2021-12-28 04:44:07'),
(5, 'xyz catagory disease', 'PGS / PGD', '<p>Couples opting for&nbsp;<a href=\"https://www.angelsfertility.com/\">Fertility Treatment</a>&nbsp;conduct research on different treatment alternatives and In Vitro Fertilization (IVF) is one among them. The clinic offers a range of testing alternatives before attempting&nbsp;<a href=\"https://www.angelsfertility.com/services/ivf-treatment/\">IVF Treatment</a>. So as to make 100% progress, the infertility clinic conducts a host of tests. The terminologies surrounding the diagnosis could be confusing like PGC, CCS, PGS, and so forth. Along these lines, what do these letter sets depend on and how is it significant to improving the result of IVF. Genetic screening and testing are not the equivalent. Screening estimates the risk levels for genetic diseases while screening test get to the dimension of hazard the embryo may procure certain congenital disabilities.</p>\r\n\r\n<h4>Preimplantation Genetic Diagnosis (PGD)</h4>\r\n\r\n<p><img src=\"https://www.angelsfertility.com/wp-content/uploads/2019/08/pgd-image.png\" /></p>\r\n\r\n<p>It is the most usually utilized generic testing term while referring to testing embryos. The term has been utilized normally by reproductive endocrinologists and geneticists. The term is identified with testing embryos before transferring.</p>\r\n\r\n<p>PGD came into practice in the last part of the 1980s as an alternative for a couple who have the danger of passing on genetic diseases. Rather than ending the affected fetus, the pre-birth genetic diagnosis can assist the couple with using IVF to conceive by transferring healthy embryos to be implanted into the uterus.</p>\r\n\r\n<p>Commonly fertility centres use PGD as a term to refer testing specific genetic diseases, particularly patients who have a high danger of transmitting single specific genetic diseases, Tay Sachs infection, cystic fibrosis. This can be caused because of mutation of a gene in one of the couples. When one or the two parents can convey the transformed quality or an uneven chromosomal improvement, the test determine if the defective gene has been transmitted to the embryo.</p>\r\n\r\n<h4>Preimplantation Genetic Screening (PGS)</h4>\r\n\r\n<p><img src=\"https://www.angelsfertility.com/wp-content/uploads/2019/08/pgs.png\" /></p>\r\n\r\n<p>PGS is a term used to describe the screening of embryos to guarantee they have the right number of chromosomes and check for basic chromosomal abnormalities.</p>\r\n\r\n<p>The procedure can be named as aneuploidy screening. when the genetic parents are presumed to be chromosomally ordinary, and the embryo is screened for aneuploidy. The PGS can possibly expand the achievement rate of IVF particularly for ladies more than 35 years, those victims of repeated IVF disappointments and repeating miscarriage.</p>\r\n\r\n<p>Earlier PGS was conducted utilizing FISH analysis on a single cell restricted to 5 to 10 sets of chromosomes from the 23 sets. The new testing technique like the single nucleotide polymorphism (SNP) investigation or the comparative genomic hybridisation (CGH) encourages testing of the total 23 sets of chromosomes.</p>\r\n\r\n<h4>Advantages of Genetic Testing</h4>\r\n\r\n<p>The major benefits of genetic testing include reducing the risk of passing a genetic disease to a child and increasing the chance of successful pregnancy and birth rate from IVF treatment.</p>\r\n\r\n<p>Nowadays, a lot of infertility issues are observed among couples. And these issues keep on increasing as the age of the mother increases. So, a lot of solutions for this problem are brought out to help couples to start their families. PGS is also one of the treatments that are provided by Angels Fertility Center</p>', 'upload/disease/11d0e6287202fced83f79975ec59a3a6.jpg|upload/disease/35613dde17e11caa281c2e7bc2ac7acc.jpg', 'upload/disease/6d70cb65d15211726dcce4c0e971e21c.mp4', NULL, NULL, NULL, '2021-12-28 04:08:28', '2021-12-28 04:08:28'),
(6, 'def catagory disease', 'Female infertility', '<p>bgbfgbfgbgf</p>', 'upload/disease/8989e07fc124e7a9bcbdebcc8ace2bc0.jpg|upload/disease/e474e8520850a6f3d13f268666736f33.jpg|upload/disease/21be992eb8016e541a15953eee90760e.png', 'upload/disease/a6197a578fe7778e8d49a95ac425bcfc.mp4', NULL, NULL, NULL, '2022-01-04 02:29:19', '2022-01-04 02:29:19'),
(7, 'xyzzzz', 'xyzzz disease', '<p>loreme lipsum&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;</p>\r\n\r\n<p>&nbsp;loreme lipsum&nbsp;&nbsp;loreme lipsum&nbsp;&nbsp;</p>', 'upload/disease/b87470782489389f344c4fa4ceb5260c.jpg|upload/disease/41e7637e7b6a9f27a98b84d3a185c7c0.jpg|upload/disease/315b4df935f4775ef5033a4833a9e0e1.png|upload/disease/ce65f40e3a20ad19fe352c52ce3bcf51.jpg', 'upload/disease/6a12d7ebc27cae44623468302c47ad74.mp4', NULL, NULL, NULL, '2022-01-18 07:47:18', '2022-01-18 07:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `disease_categories`
--

CREATE TABLE `disease_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_catagory_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_catagory_discription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disease_categories`
--

INSERT INTO `disease_categories` (`id`, `main_catagory_name`, `main_catagory_discription`, `empty2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc catagory disease', 'abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum abccc delfghij lorem lipsum', NULL, 'active', '2021-12-28 03:32:18', '2021-12-28 03:32:18'),
(2, 'xyz catagory disease', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', NULL, 'active', '2021-12-28 04:06:13', '2021-12-28 04:06:13'),
(3, 'def catagory disease', 'nnsjfnjnfjrf', NULL, 'active', '2022-01-04 02:28:02', '2022-01-04 02:28:02'),
(4, 'xyzzzz', 'lorem lipsum lorem lipsumlorem lipsumlorem lipsumlorem lipsumlorem lipsum', NULL, 'active', '2022-01-18 07:45:55', '2022-01-18 07:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_prescriptions`
--

CREATE TABLE `doctor_prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorname_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctoremail_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientname_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientemail_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientapoitmentdate_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientslot_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientphonenumber_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_detailprescription` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_prescription` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_prescription` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_prescription` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nextapoitment_prescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientappoitment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_prescriptions`
--

INSERT INTO `doctor_prescriptions` (`id`, `doctorname_prescription`, `doctoremail_prescription`, `patientname_prescription`, `patientemail_prescription`, `patientapoitmentdate_prescription`, `patientslot_prescription`, `patientphonenumber_prescription`, `doctor_detailprescription`, `medicine_prescription`, `frequency_prescription`, `note_prescription`, `nextapoitment_prescription`, `empty1`, `empty2`, `empty3`, `empty4`, `empty5`, `patientappoitment_id`, `created_at`, `updated_at`) VALUES
(1, 'vishwajit vm', 'doctor@gmail.com', 'yash', 'yash@gmail.com', '2022-01-23', '11:30 AM - 01:30 PM', '8920352118', '<p>this is first detail prescription for user testing here</p>\r\n\r\n<ol>\r\n	<li>medicine you should intake here</li>\r\n	<li>dbhdbshbdhv</li>\r\n	<li>svbvhbhvbhdfv</li>\r\n	<li>dfvd&nbsp; vdbvhd</li>\r\n</ol>', '[\"Alaska\",\"California\",\"Delaware\",\"Tennessee\"]', NULL, NULL, '25 days', NULL, NULL, NULL, NULL, NULL, '15', '2022-01-23 14:39:19', '2022-01-23 14:39:19'),
(2, 'vishwajit vm', 'doctor@gmail.com', 'rohit', 'rohit@gmail.com', '2022-01-25', '02:00 PM - 03:15 PM', '1151511515', '<p>this is second prescrption test here.</p>\r\n\r\n<ol>\r\n	<li>bgfbfbfb</li>\r\n	<li>bgfbfbnfjbf</li>\r\n	<li>fbfbfbf</li>\r\n	<li>fbdvdffdnfnf</li>\r\n	<li>gfbgfbfgbgfbgf</li>\r\n	<li>vishwajit vm</li>\r\n	<li>test update data here</li>\r\n</ol>', '[\"Alaska\",\"Tennessee\"]', NULL, NULL, '21 days', NULL, NULL, NULL, NULL, NULL, '17', '2022-01-25 00:37:54', '2022-01-25 05:04:15'),
(3, 'vishwajit vm', 'doctor@gmail.com', 'yash', 'yash@gmail.com', '2022-01-25', '12:00 PM - 01:00 PM', '1515151555151', '<ol>\r\n	<li>sdcthis is testin2c3sg subject for the checking the hprevious history of yash ,....there must be two datad</li>\r\n	<li>gdgfnjdngs2jdngjd</li>\r\n	<li>s5d12sd2</li>\r\n	<li>s0s300s2d2sdc2s</li>\r\n	<li>sf2f2frfre</li>\r\n</ol>', '[\"California\",\"Tennessee\"]', NULL, NULL, '28 days', NULL, NULL, NULL, NULL, NULL, '16', '2022-01-25 07:11:08', '2022-01-25 07:11:08'),
(11, 'vishwajit vm', 'doctor@gmail.com', 'yash', 'yash@gmail.com', '2022-01-28', '05:45 PM - 06:45 PM', '51515515151', '<p>dvdvdvdvdv</p>', '[\"Bromocriptine\",\"Clomiphene citrate\",\"first medicine\"]', '[\"One In a day\",\"Two time  In a day\",\"Three time In a day\"]', '[\"One In a day\",\"Once in a week\",\"Once in 5 day\"]', NULL, NULL, NULL, NULL, NULL, NULL, '18', '2022-01-28 06:05:23', '2022-01-28 06:05:23'),
(12, 'avani charvedi', 'avani@gmail.com', 'user vishwa', 'user1@gmail.com', '2022-01-29', '04:00 PM - 04:30 PM', '12358528547', '<p>user vishwa first prescription test here</p>\r\n\r\n<p>In this tutorial, i will show you laravel check array empty in blade. you will learn laravel check if array is empty. This article goes in detailed on laravel not empty check. i would like to show you check empty array in laravel blade.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>So, let&#39;s follow this example to check if array is empty in blade file with laravel 6, laravel 7 and laravel 8 project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>i simply read documentation and i know core php function so we can do it basically four way to laravel check array empty in blade. so you can see bellow all example one by one and you can use anyone that you want to use.</p>\r\n\r\n<p>In this tutorial, i will show you laravel check array empty in blade. you will learn laravel check if array is empty. This article goes in detailed on laravel not empty check. i would like to show you check empty array in laravel blade.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>So, let&#39;s follow this example to check if array is empty in blade file with laravel 6, laravel 7 and laravel 8 project.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>i simply read documentation and i know core php function so we can do it basically four way to laravel check array empty in blade. so you can see bellow all example one by one and you can use anyone that you want to use.</p>', '[\"Bromocriptine\",\"Clomiphene citrate\"]', '[\"One In a day\",\"Two time  In a day\"]', '[\"Once in a week\",\"Once in 6 day\"]', '90 days', NULL, NULL, NULL, NULL, NULL, '20', '2022-01-29 05:06:10', '2022-01-29 05:06:10'),
(13, 'avani charvedi', 'avani@gmail.com', 'yash', 'yash@gmail.com', '2022-01-31', '01:30 PM - 02:30 PM', '51515212121', '<p>he following example shows how you can add more groups of multiple input fields dynamically with jQuery and submit the multiple input fields group data using PHP. For the example purpose, we will use two fields (name &amp; email) in each group and all groups can be submitted at once.</p>\r\n\r\n<p><strong>Bootstrap &amp; jQuery Library</strong><br />\r\nThe Bootstrap is used to make the input and button look better and the jQuery is used to implement add more input fields group functionality. So, you need to include the Bootstrap and jQuery library first.</p>\r\n\r\n<p>he following example shows how you can add more groups of multiple input fields dynamically with jQuery and submit the multiple input fields group data using PHP. For the example purpose, we will use two fields (name &amp; email) in each group and all groups can be submitted at once.</p>\r\n\r\n<p><strong>Bootstrap &amp; jQuery Library</strong><br />\r\nThe Bootstrap is used to make the input and button look better and the jQuery is used to implement add more input fields group functionality. So, you need to include the Bootstrap and jQuery library first.</p>', '[\"first medicine\",\"Metformin\",\"Letrozole\"]', '[\"Once in 2 day\",\"Once in a week\",\"Once in 5 day\"]', '[\"Once in 2 day\",\"One In a day\",\"Three time In a day\"]', '21 days', NULL, NULL, NULL, NULL, NULL, '22', '2022-01-31 02:34:34', '2022-01-31 02:34:34'),
(14, 'avani charvedi', 'avani@gmail.com', 'yash', 'yash@gmail.com', '2022-01-31', '01:30 PM - 02:30 PM', '51515212121', '<p>The annual Asia Power Index measures resources and influence to assess the relative power of states in Asia. It is an analytical tool that ranks 26 countries and territories in terms of what they have, and what they do with what they have &ndash; reaching as far west as Pakistan, as far north as Russia, and as far into the Pacific as Australia, New Zealand and the United States. The 2021 edition &mdash; which covers four years of data &mdash; is the most comprehensive assessment of the changing distribution of power in Asia so far. Download the&nbsp;<a href=\"https://power.lowyinstitute.org/downloads/lowy-institute-2021-asia-power-index-key-findings-report.pdf\" target=\"_blank\">Key Findings report</a>&nbsp;for in-depth analysis of the 2021 results.The annual Asia Power Index measures resources and influence to assess the relative power of states in Asia. It is an analytical tool that ranks 26 countries and territories in terms of what they have, and what they do with what they have &ndash; reaching as far west as Pakistan, as far north as Russia, and as far into the Pacific as Australia, New Zealand and the United States. The 2021 edition &mdash; which covers four years of data &mdash; is the most comprehensive assessment of the changing distribution of power in Asia so far. Download the&nbsp;<a href=\"https://power.lowyinstitute.org/downloads/lowy-institute-2021-asia-power-index-key-findings-report.pdf\" target=\"_blank\">Key Findings report</a>&nbsp;for in-depth analysis of the 2021 results.The annual Asia Power Index measures resources and influence to assess the relative power of states in Asia. It is an analytical tool that ranks 26 countries and territories in terms of what they have, and what they do with what they have &ndash; reaching as far west as Pakistan, as far north as Russia, and as far into the Pacific as Australia, New Zealand and the United States. The 2021 edition &mdash; which covers four years of data &mdash; is the most comprehensive assessment of the changing distribution of power in Asia so far. Download the&nbsp;<a href=\"https://power.lowyinstitute.org/downloads/lowy-institute-2021-asia-power-index-key-findings-report.pdf\" target=\"_blank\">Key Findings report</a>&nbsp;for in-depth analysis of the 2021 results.</p>', '[\"Clomiphene citrate\",\"Metformin\"]', '[\"Once in a week\",\"Once in 3 day\"]', '[\"Once in 6 day\",\"Once in 2 day\"]', '12 days', NULL, NULL, NULL, NULL, NULL, '22', '2022-01-31 02:37:06', '2022-01-31 02:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_medicines`
--

CREATE TABLE `manage_medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medicine_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine__userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_status` enum('available','unavailable') COLLATE utf8mb4_unicode_ci DEFAULT 'available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_medicines`
--

INSERT INTO `manage_medicines` (`id`, `medicine_username`, `medicine_useremail`, `medicine__userid`, `medicine_name`, `medicine_note`, `medicine_status`, `created_at`, `updated_at`) VALUES
(2, 'vishwajit vm', 'doctor@gmail.com', '5', 'first medicine', 'this is first medicine avalable here', 'available', '2022-01-27 04:21:25', '2022-01-27 04:21:25'),
(4, 'vishwajit vm', 'doctor@gmail.com', '5', 'Clomiphene citrate', 'aken by mouth, this drug stimulates ovulation by causing the pituitary gland to release more FSH and LH, which stimulate the growth of an ovarian follicle containing an egg. This is generally the first line treatment for women younger than 39 who don\'t have PCOS.', 'available', '2022-01-27 04:23:01', '2022-01-27 04:23:01'),
(5, 'vishwajit vm', 'doctor@gmail.com', '5', 'Gonadotropins', 'These injected treatments stimulate the ovary to produce multiple eggs. Gonadotropin medications include human menopausal gonadotropin or hMG (Menopur) and FSH (Gonal-F, Follistim AQ, Bravelle).', 'available', '2022-01-27 04:23:30', '2022-01-27 04:23:30'),
(6, 'vishwajit vm', 'doctor@gmail.com', '5', 'Metformin', 'This drug is used when insulin resistance is a known or suspected cause of infertility, usually in women with a diagnosis of PCOS. Metformin (Fortamet) helps improve insulin resistance, which can improve the likelihood of ovulation.', 'available', '2022-01-27 04:24:11', '2022-01-27 04:24:11'),
(7, 'vishwajit vm', 'doctor@gmail.com', '5', 'Letrozole', 'Letrozole (Femara) belongs to a class of drugs known as aromatase inhibitors and works in a similar fashion to clomiphene. Letrozole is usually used for woman younger than 39 who have PCOS.', 'available', '2022-01-27 04:24:26', '2022-01-27 04:24:26'),
(8, 'vishwajit vm', 'doctor@gmail.com', '5', 'Bromocriptine', 'Bromocriptine (Cycloset, Parlodel), a dopamine agonist, might be used when ovulation problems are caused by excess production of prolactin (hyperprolactinemia) by the pituitary gland.', 'available', '2022-01-27 04:24:48', '2022-01-27 04:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_17_073607_create_sessions_table', 1),
(8, '2021_11_09_143656_create_parties_table', 2),
(9, '2021_12_07_083639_create_userparty_requests_table', 3),
(10, '2021_12_21_112948_create_diseases_table', 4),
(11, '2021_12_28_074834_create_disease_categories_table', 5),
(12, '2021_12_28_112553_create_specialities_table', 6),
(13, '2021_12_31_073743_create_appointment_dates_table', 7),
(14, '2021_12_31_095903_create_appointment_timeslots_table', 8),
(15, '2022_01_10_063026_create_patient_appointments_table', 9),
(16, '2022_01_23_144612_create_doctor_prescriptions_table', 10),
(17, '2022_01_27_080744_create_manage_medicines_table', 11),
(18, '2022_02_04_114019_create_services_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yash@gmail.com', '$2y$10$VFCa5quozhSyAt1erXtD7OiLoxIiijNmsLCj9pt/kfsZOY/CASq66', '2022-02-02 05:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointments`
--

CREATE TABLE `patient_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useremail_timeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pateintappo_doctorname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pateintappo_doctordate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pateintappo_doctortimeslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patientappo_phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pateintappo_rescedualed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `pateintappo_tracking` enum('reached','not_reached') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_appointments`
--

INSERT INTO `patient_appointments` (`id`, `username_timeslot`, `useremail_timeslot`, `pateintappo_doctorname`, `pateintappo_doctordate`, `pateintappo_doctortimeslot`, `patientappo_phonenumber`, `pateintappo_rescedualed`, `pateintappo_tracking`, `created_at`, `updated_at`) VALUES
(3, 'rohit', 'rohit@gmail.com', 'doctor@gmail.com', '2022-01-12', '06:00 PM - 06:30 PM', NULL, '0', NULL, '2022-01-10 03:50:21', '2022-01-10 03:50:21'),
(4, 'rohit', 'rohit@gmail.com', 'avani@gmail.com', '2022-01-14', '04:00 AM - 04:30 AM', NULL, '0', NULL, '2022-01-10 03:52:14', '2022-01-10 03:52:14'),
(6, 'rohit', 'rohit@gmail.com', 'avani@gmail.com', '2022-01-14', '02:00 AM - 02:30 AM', NULL, '0', NULL, '2022-01-10 03:52:14', '2022-01-10 03:52:14'),
(7, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-18', '05:30 PM - 06:30 PM', NULL, '0', NULL, '2022-01-17 04:41:19', '2022-01-17 04:41:19'),
(8, 'rohit', 'rohit@gmail.com', 'doctor@gmail.com', '2022-01-19', '04:00 AM - 05:00 AM', NULL, '0', NULL, '2022-01-17 16:10:40', '2022-01-17 16:10:40'),
(9, 'rohit', 'rohit@gmail.com', 'doctor@gmail.com', '2022-01-20', '03:00 AM - 03:30 AM', '85252585214', '2', NULL, '2022-01-17 16:20:00', '2022-01-19 06:38:59'),
(10, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-19', '04:00 AM - 05:00 AM', NULL, '0', NULL, '2022-01-18 01:54:06', '2022-01-18 01:54:06'),
(11, 'rohit', 'rohit@gmail.com', 'vineet@gmail.com', '2022-01-21', '07:00 PM - 08:00 PM', NULL, '0', NULL, '2022-01-18 07:55:53', '2022-01-18 07:55:53'),
(12, 'rohit', 'rohit@gmail.com', 'doctor@gmail.com', '2022-01-21', '12:30 PM - 01:30 PM', '787454545', '0', NULL, '2022-01-21 00:40:35', '2022-01-21 00:40:35'),
(13, 'rohit', 'rohit@gmail.com', 'doctor@gmail.com', '2022-01-22', '11:30 AM - 12:30 PM', '785454545', '0', NULL, '2022-01-21 00:41:09', '2022-01-21 00:41:09'),
(14, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-21', '11:30 AM - 12:00 PM', '4545454512', '0', NULL, '2022-01-21 00:43:12', '2022-01-21 00:43:12'),
(15, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-23', '11:30 AM - 01:30 PM', '8920352118', '0', NULL, '2022-01-23 08:15:19', '2022-01-23 08:15:19'),
(16, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-25', '12:00 PM - 01:00 PM', '1515151555151', '0', NULL, '2022-01-25 00:11:20', '2022-01-25 00:11:20'),
(17, 'rohit', 'rohit@gmail.com', 'doctor@gmail.com', '2022-01-25', '02:00 PM - 03:15 PM', '1151511515', '0', NULL, '2022-01-25 00:13:23', '2022-01-25 00:13:23'),
(18, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-28', '05:45 PM - 06:45 PM', '51515515151', '0', NULL, '2022-01-27 00:56:01', '2022-01-27 00:56:01'),
(19, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-27', '02:45 PM - 03:45 PM', '8845454541', '0', NULL, '2022-01-27 00:57:10', '2022-01-27 00:57:10'),
(20, 'user vishwa', 'user1@gmail.com', 'avani@gmail.com', '2022-01-29', '04:00 PM - 04:30 PM', '12358528547', '0', NULL, '2022-01-29 03:35:34', '2022-01-29 03:35:34'),
(21, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-01-29', '03:00 PM - 03:30 PM', '1214454578', '0', NULL, '2022-01-29 04:04:01', '2022-01-29 04:04:01'),
(22, 'yash', 'yash@gmail.com', 'avani@gmail.com', '2022-01-31', '01:30 PM - 02:30 PM', '51515212121', '0', NULL, '2022-01-31 02:32:32', '2022-01-31 02:32:32'),
(23, 'yash', 'yash@gmail.com', 'doctor@gmail.com', '2022-02-04', '04:30 AM - 05:30 AM', '121212121', '0', NULL, '2022-02-03 13:23:31', '2022-02-03 13:23:31'),
(24, 'user vishwa', 'user1@gmail.com', 'avani@gmail.com', '2022-02-04', '05:00 PM - 06:00 PM', '12125454545', '0', NULL, '2022-02-04 03:51:54', '2022-02-04 03:51:54'),
(25, 'user vishwa', 'user1@gmail.com', 'doctor@gmail.com', '2022-02-04', '04:30 AM - 05:30 AM', '4545212', '0', NULL, '2022-02-04 03:52:39', '2022-02-04 03:52:39'),
(26, 'user vishwa', 'user1@gmail.com', 'avani@gmail.com', '2022-02-05', '02:45 PM - 03:45 PM', '5522522652', '0', NULL, '2022-02-04 03:55:35', '2022-02-04 03:55:35'),
(27, 'yash', 'yash@gmail.com', 'avani@gmail.com', '2022-02-04', '03:00 PM - 04:00 PM', '4545452121', '0', NULL, '2022-02-04 03:57:28', '2022-02-04 03:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('L9aQKsPtMAAho4jlX5qTeZoISBJNTIoXlck6Q3MM', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiREptMVRhYUhXYlJVZjNobG0yVVlQRjRwQVFqWGZTdmg4UjZMNnhIaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXRpZW50YXBwb2ludG1lbnQvdmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRZcmNLdkQxb3VVdTU4TGxHdWxpNTEucWlBM0t0Zmw4M0JxMWtmS3FjLjlsZkNtWjBYLzF2QyI7fQ==', 1643966890),
('LGHeXN62Uf59oJrumhtp7vbkfo03htFDKtwqykmB', 28, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidnUxczZEV2NyRnNXM2NiME96NTYwTlp4ZWR4Q0p3S0hRd0Voc3lKUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXRpZW50YXBwb2ludG1lbnQvdmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI4O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkaFI5WFBuY1p6cnMwNnouZlpNeS9vZW9yNWpQV3c4aTZBQndua0xQU2IwSmtTNWdqT2ZOYjIiO30=', 1643966735),
('StyhwSAJAqM6OWdwhy9C7SYsGILmzBDfgJBefZKb', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zZXJ2aWNlcy9hZGQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiOFRZZ3VPRUoxblBMVVg2N2MxazNUaHByR3phRlR4T3g0dW1sMExvaiI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHh6SUFtVy8vTUxMbVpPdGFac0xoTmVJSlRhTXFETDlaUVkxUExqZXpEdzhXSFVjcHY4RzM2Ijt9', 1643974747);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specility_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specility_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `specility_name`, `specility_description`, `created_at`, `updated_at`) VALUES
(3, 'Sexologist', 'Sexologists apply tools from several academic fields, such as biology, medicine, psychology, epidemiology, sociology, and criminology.[4] Topics of study include sexual development (puberty), sexual orientation, gender identity, sexual relationships, sexual activities, paraphilias, and atypical sexual interests. It also includes the study of sexuality across the lifespan, including child sexuality, puberty, adolescent sexuality, and sexuality among the elderly. Sexology also spans sexuality among the mentally and/or physically disabled. The sexological study of sexual dysfunctions and disorders, including erectile dysfunction and anorgasmia', '2021-12-28 06:42:17', '2021-12-28 06:42:17'),
(4, 'Erectile Dysfunction', 'Erectile dysfunction can be a sign of a physical or psychological condition. It can cause stress, relationship strain and low self-confidence.\r\nThe main symptom is a man\'s inability to get or keep an erection firm enough for sexual intercourse.\r\nPatients suffering from erectile dysfunction should first be evaluated for any underlying physical and psychological conditions. If treatment of the underlying conditions doesn\'t help, medication and assistive devices, such as pumps, can be prescribed.', '2021-12-28 06:54:16', '2021-12-28 06:54:16'),
(5, 'abc specialist', 'lorem lipsum  lorem lipsum  lorem lipsum  lorem lipsum', '2022-01-18 07:41:54', '2022-01-18 07:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` enum('user','admin','doctor','reception') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user' COMMENT 'user,Admin',
  `doctor_specilist` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_profile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_profile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdine_profile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_party` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectation_from_aragma` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_tallent` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `doctor_specilist`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `birth_date`, `gmail_address`, `facebook_profile`, `instagram_profile`, `linkdine_profile`, `hear_about_party`, `expectation_from_aragma`, `user_tallent`, `image`, `role`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(3, 'admin', NULL, 'vishwa', 'vishwa@gmail.com', NULL, '$2y$10$xzIAmW//MLLmZOtaZsLhNeIJTaMqDL9ZQY1PLjezDw8WHUcpv8G36', NULL, NULL, '8920352115', 'Delhi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '202111090804download (1).png', NULL, 'active', NULL, NULL, NULL, '2021-10-09 03:07:54', '2021-11-09 02:34:57'),
(5, 'doctor', NULL, 'vishwajit vm', 'doctor@gmail.com', NULL, '$2y$10$cROowJaVOc5ysdex7PMwoObO7qXfm3Q/6EarRttlgb32id.9RC73q', NULL, NULL, '8920352115', 'Delhi', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '202112160951avatar-6.png', NULL, 'inactive', NULL, NULL, NULL, '2021-10-20 06:51:16', '2021-12-16 05:11:44'),
(7, 'reception', NULL, 'reception', 'reception@gmail.com', NULL, '$2y$10$wBa4oSQ.UPhXFghXGpO7yeeEs2VC/JorjLI9fE7Dp0JMk1uPHsPuG', NULL, NULL, '1234567890', 'GALI NO-8', 'Female', NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-08 02:49:56', '2021-12-20 08:02:33'),
(8, 'user', NULL, 'yash', 'yash@gmail.com', NULL, '$2y$10$YrcKvD1ouUu58LlGuli51.qiA3Ktfl83Bq1kfKqc.9lfCmZ0X/1vC', NULL, NULL, '1234567890', 'new delhi', 'Male', '2021-11-26', 'www.mygmail.com', 'www.facebook.com/userunkown1054', 'www.instagram.com/userprofileinsta', 'www.linkdine.com/userprofile', 'Instagram', 'partying hard', 'party like animal', '202202021127avatar-12.png', NULL, 'active', NULL, NULL, NULL, '2021-11-08 02:57:10', '2022-02-02 05:57:16'),
(11, 'admin', NULL, 'newadmin', 'newadmin@gmail.com', NULL, '$2y$10$lYT7ZGKaTjK4mjadFaUYPOqWtGAewm1jNuqrgC9VtQsyO.KrKXuBC', NULL, NULL, '1234567899', 'new delhi', NULL, '2001-12-21', 'newadmin@gmail.com', 'www.fb.com/unknoiw1212', 'www.instagram.com/unknoiw1212', 'www.linkdine.com/unknoiw1212', 'Newspaper', 'partying hard', 'patying aas animal', '202111090749download (1).png', NULL, 'active', NULL, NULL, NULL, '2021-11-09 02:06:45', '2021-11-09 02:19:59'),
(21, 'doctor', 'Sexologist', 'docto2', 'docto2@gmail.com', NULL, '$2y$10$SZ9X/o4yEQZWX8N5KtD5COVt9W4MhUObYv/wDYD3AbZu2XBK9QhDy', NULL, NULL, '1234567890', NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-12-20 04:43:04', '2021-12-28 07:14:59'),
(24, 'user', NULL, 'nd', 'nd@me.in', NULL, '$2y$10$phMPtk0LeyeBwEStygFRVOrrZRdwsljvr6ysPMxHMo1VJ6tI2oB/O', NULL, NULL, '1234567890', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-12-20 06:46:57', '2021-12-28 07:13:03'),
(26, 'reception', NULL, 'mehra', 'mehra@gmail.com', NULL, '$2y$10$7G.twD.s8tU7L5Dsw2DVGepJg2/XVB88IzgtASew0tKgU6VSSsmMW', NULL, NULL, '1234567890', 'noida', 'Female', '2021-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-12-21 01:02:58', '2021-12-21 01:03:33'),
(27, 'doctor', 'Erectile Dysfunction', 'avani charvedi', 'avani@gmail.com', NULL, '$2y$10$sOz90aWECsTnjYw2muGYaOpy9ZKkMvfJOELXf4PM/icsWCTRho6su', NULL, NULL, '1234567890', NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-12-28 07:03:36', '2021-12-28 07:03:36'),
(28, 'user', NULL, 'user vishwa', 'user1@gmail.com', NULL, '$2y$10$hR9XPncZzrs06z.fZMy/oeor5jPWw8i6ABwnkLPSb0JkS5gjOfNb2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-01-01 06:36:09', '2022-01-01 06:36:09'),
(29, 'user', NULL, 'rohit', 'rohit@gmail.com', NULL, '$2y$10$cHxcmvuITKdMOdIYhymjzOeW5wggXW6cXX1ga9rDMQjyGM4.VqnfW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-01-03 01:21:46', '2022-01-03 01:21:46'),
(30, 'doctor', 'Erectile Dysfunction', 'test101', 'test101@gmail.com', NULL, '$2y$10$zU6vk23oHZr1COExQHPLu.XJcUuoxNiH/ubB6Zoj9O2tmaMSo1Bo6', NULL, NULL, '7854857125', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-01-04 02:22:52', '2022-01-04 02:22:52'),
(31, 'reception', NULL, 'reception101', 'reception101@gmail.com', NULL, '$2y$10$UGFGQZ/MIOQkKq17oMe16ODzI/qvuGc75./ix7SLBSgxlPXkYIjgS', NULL, NULL, '1234567899', NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-01-04 02:27:28', '2022-01-04 02:27:28'),
(32, 'doctor', 'abc specialist', 'vineet', 'vineet@gmail.com', NULL, '$2y$10$/joC5qAVyUmIk6ymZ3Tjf.ADnRri9DEycFU5S36si.eOr/eUkqUNa', NULL, NULL, '1234568582', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-01-18 07:43:22', '2022-01-18 07:43:22'),
(33, 'reception', NULL, 'receptionist123', 'receptionist123@gmail.com', NULL, '$2y$10$ldnAv2GGt.S4/Rr5lD26Tuh8IHOyKa7b746HQtdCqEA9JlJtjLRVi', NULL, NULL, '1234568582', NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-01-18 07:44:44', '2022-01-18 07:44:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_dates`
--
ALTER TABLE `appointment_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_timeslots`
--
ALTER TABLE `appointment_timeslots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease_categories`
--
ALTER TABLE `disease_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_prescriptions`
--
ALTER TABLE `doctor_prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manage_medicines`
--
ALTER TABLE `manage_medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_appointments`
--
ALTER TABLE `patient_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_dates`
--
ALTER TABLE `appointment_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `appointment_timeslots`
--
ALTER TABLE `appointment_timeslots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `disease_categories`
--
ALTER TABLE `disease_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_prescriptions`
--
ALTER TABLE `doctor_prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_medicines`
--
ALTER TABLE `manage_medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patient_appointments`
--
ALTER TABLE `patient_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
