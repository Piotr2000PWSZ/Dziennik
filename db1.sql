-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2022, 23:05
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `db1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lessons`
--

CREATE TABLE `lessons` (
  `id` int(10) UNSIGNED NOT NULL,
  `weekday` int(11) NOT NULL,
  `week_number` int(11) DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `przedmiot_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `sala_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `lessons`
--

INSERT INTO `lessons` (`id`, `weekday`, `week_number`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`, `przedmiot_id`, `teacher_id`, `class_id`, `sala_id`) VALUES
(1, 1, 1, '10:00:00', '12:00:00', NULL, '2022-06-13 18:59:03', NULL, 1, 28, 1, 1),
(2, 1, 1, '12:00:00', '14:00:00', NULL, '2022-06-13 18:58:57', NULL, 2, 27, 1, 2),
(3, 1, 1, '14:00:00', '16:00:00', NULL, '2022-06-13 18:58:49', NULL, 3, 27, 1, 3),
(4, 1, 1, '14:00:00', '16:00:00', NULL, '2022-06-13 18:58:43', NULL, 4, 26, 2, 4),
(5, 2, 1, '08:00:00', '10:00:00', NULL, '2022-06-13 18:58:35', NULL, 5, 27, 1, 5),
(6, 2, 1, '10:00:00', '12:00:00', NULL, '2022-06-13 18:58:29', NULL, 6, 26, 1, 6),
(7, 2, 1, '12:00:00', '14:00:00', NULL, '2022-06-13 18:58:22', NULL, 7, 27, 1, 7),
(8, 3, 1, '10:00:00', '12:00:00', NULL, '2022-06-13 18:58:14', NULL, 8, 27, 1, 8),
(9, 3, 1, '12:00:00', '14:00:00', NULL, '2022-06-13 18:58:05', NULL, 9, 28, 1, 1),
(10, 3, 1, '14:00:00', '16:00:00', NULL, '2022-06-13 18:57:59', NULL, 10, 26, 1, 2),
(11, 4, 1, '10:00:00', '12:00:00', NULL, '2022-06-13 18:57:46', NULL, 11, 28, 1, 3),
(12, 4, 1, '12:00:00', '14:00:00', NULL, '2022-06-13 18:57:37', NULL, 10, 27, 1, 4),
(13, 4, 1, '14:00:00', '16:00:00', NULL, '2022-06-13 18:57:28', NULL, 11, 29, 1, 5),
(14, 5, 1, '08:00:00', '10:00:00', NULL, '2022-06-14 05:53:23', NULL, 12, 26, 1, 6),
(15, 5, 1, '10:00:00', '12:00:00', NULL, '2022-06-14 05:53:13', NULL, 13, 28, 1, 7),
(16, 5, 1, '12:00:00', '14:00:00', NULL, '2022-06-14 05:52:54', NULL, 7, 29, 1, 8),
(17, 3, 2, '14:00:00', '16:00:00', '2022-06-14 13:03:50', '2022-06-14 13:05:02', NULL, 10, 28, 8, NULL),
(18, 2, 1, '08:00:00', '09:00:00', '2022-06-14 13:10:45', '2022-06-14 13:10:45', NULL, 11, 18, 5, NULL),
(19, 1, 1, '08:00:00', '09:00:00', '2022-06-14 13:22:12', '2022-06-14 13:22:12', NULL, 8, 27, 7, NULL),
(22, 1, 1, '08:00:00', '10:00:00', '2022-06-14 14:40:11', '2022-06-14 14:40:11', NULL, 8, 18, 2, NULL),
(23, 5, 1, '08:00:00', '09:00:00', '2022-06-14 18:57:13', '2022-06-14 18:57:13', NULL, 4, 27, 3, NULL),
(25, 4, 1, '09:30:00', '11:00:00', '2022-06-14 18:58:51', '2022-06-14 18:58:51', NULL, 13, 26, 5, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_05_10_151637_create_permissions_table', 1),
(9, '2022_05_10_151739_create_roles_table', 1),
(10, '2022_05_10_151810_create_users_table', 1),
(11, '2022_05_10_151844_create_lessons_table', 1),
(12, '2022_05_10_151945_create_school_classes_table', 1),
(13, '2022_05_10_152036_create_permission_role_pivot_table', 1),
(14, '2022_05_10_152119_create_role_user_pivot_table', 1),
(15, '2022_05_10_152241_add_relationship_fields_to_lessons_table', 1),
(16, '2022_05_10_152317_add_relationship_fields_to_users_table', 1),
(17, '2022_05_31_210325_create_student_attendance_table', 1),
(18, '2022_06_07_171105_create_przedmioty_table', 1),
(19, '2022_06_07_171702_add_relationship_lessons_to_przedmioty', 1),
(20, '2022_06_08_130029_create_ogloszenia_table', 1),
(21, '2022_06_10_153517_create_oceny_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `uczen_id` int(10) UNSIGNED NOT NULL,
  `przedmiot_id` int(10) UNSIGNED NOT NULL,
  `ocena` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`uczen_id`, `przedmiot_id`, `ocena`, `created_at`, `updated_at`) VALUES
(18, 2, '4', '2022-06-14 08:18:34', '2022-06-14 08:18:34');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `id` int(10) UNSIGNED NOT NULL,
  `temat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wiadomosc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`id`, `temat`, `wiadomosc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Spotkanie rodziców', 'W dniu 12.06.2021 odbędzie się spotkanie rodziców.', '2022-06-13 18:53:12', '2022-06-13 18:53:12', NULL),
(2, 'Egzamin', 'Egzamin z języka polskiego odbędzie się 12.06.2022.', '2022-06-14 09:04:18', '2022-06-14 09:04:18', NULL),
(3, 'Zmiana obuwia!', 'Przypominamy, że w okresie zimowym, w szkole obowiązuje zmiana obuwia!', '2022-06-14 18:13:10', '2022-06-14 18:13:10', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'lesson_create', NULL, NULL, NULL),
(18, 'lesson_edit', NULL, NULL, NULL),
(19, 'lesson_show', NULL, NULL, NULL),
(20, 'lesson_delete', NULL, NULL, NULL),
(21, 'lesson_access', NULL, NULL, NULL),
(22, 'school_class_create', NULL, NULL, NULL),
(23, 'school_class_edit', NULL, NULL, NULL),
(24, 'school_class_show', NULL, NULL, NULL),
(25, 'school_class_delete', NULL, NULL, NULL),
(26, 'school_class_access', NULL, NULL, NULL),
(27, 'announcement_create', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(6, 14);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
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
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `przedmioty`
--

INSERT INTO `przedmioty` (`id`, `nazwa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Język polski', NULL, NULL, NULL),
(2, 'Matematyka', NULL, NULL, NULL),
(3, 'Język angielski', NULL, NULL, NULL),
(4, 'Język niemiecki', NULL, NULL, NULL),
(5, 'Biologia', NULL, NULL, NULL),
(6, 'Muzyka', NULL, NULL, NULL),
(7, 'Technika', NULL, NULL, NULL),
(8, 'Plastyka', NULL, NULL, NULL),
(9, 'WF', NULL, NULL, NULL),
(10, 'Informatyka', NULL, NULL, NULL),
(11, 'Religia', NULL, NULL, NULL),
(12, 'Zajęcia wychowawcze', NULL, NULL, NULL),
(13, 'Geografia', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'Teacher', NULL, NULL, NULL),
(4, 'Student', NULL, NULL, NULL),
(5, 'Parent', NULL, NULL, NULL),
(6, 'Personel', '2022-06-14 14:20:20', '2022-06-14 14:20:20', '2022-06-14 16:20:27');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 4),
(20, 5),
(21, 4),
(22, 5),
(23, 4),
(24, 4),
(25, 4),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 4),
(32, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sale_lekcyjne`
--

CREATE TABLE `sale_lekcyjne` (
  `id_sali` int(11) NOT NULL,
  `nazwa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `sale_lekcyjne`
--

INSERT INTO `sale_lekcyjne` (`id_sali`, `nazwa`) VALUES
(1, '1.1'),
(2, '1.2'),
(3, '1.3'),
(4, '1.4'),
(5, '1.5'),
(6, '2.1'),
(7, '2.2'),
(8, '2.3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `school_classes`
--

CREATE TABLE `school_classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutor` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `school_classes`
--

INSERT INTO `school_classes` (`id`, `name`, `tutor`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1 klasa', 30, NULL, NULL, NULL),
(2, '2 klasa', NULL, NULL, NULL, NULL),
(3, '3 klasa', NULL, NULL, NULL, NULL),
(4, '4 klasa', NULL, NULL, NULL, NULL),
(5, '5 klasa', NULL, NULL, NULL, NULL),
(6, '6 klasa', NULL, NULL, NULL, NULL),
(7, '7 klasa', NULL, NULL, NULL, NULL),
(8, '8 klasa', NULL, NULL, NULL, NULL),
(9, '9 klasa', NULL, '2022-06-14 14:21:24', '2022-06-14 14:21:24', '2022-06-14 16:22:09'),
(10, '10 klasa', NULL, '2022-06-14 14:24:16', '2022-06-14 14:24:16', '2022-06-14 16:31:41');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `student_attendance`
--

CREATE TABLE `student_attendance` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `status` enum('present','late','absent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `class_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `class_id`, `parent_id`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Teacher 1', 'teacher1@teacher.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:34', '2022-06-13 16:25:34', NULL, NULL),
(3, 'Teacher 2', 'teacher2@teacher2.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:32', '2022-06-13 16:25:32', NULL, NULL),
(4, 'Teacher 3', 'teacher3@teacher3.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:30', '2022-06-13 16:25:30', NULL, NULL),
(5, 'Teacher 4', 'teacher4@teacher4.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:28', '2022-06-13 16:25:28', NULL, NULL),
(6, 'Teacher 5', 'teacher5@teacher5.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:26', '2022-06-13 16:25:26', NULL, NULL),
(7, 'Student 1', 'student1@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:24', '2022-06-13 16:25:24', 1, NULL),
(8, 'Student 2', 'student2@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:21', '2022-06-13 16:25:21', 1, NULL),
(9, 'Student 3', 'student3@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:19', '2022-06-13 16:25:19', 1, NULL),
(10, 'Student 4', 'student4@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:17', '2022-06-13 16:25:17', 1, NULL),
(11, 'Student 5', 'student5@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:15', '2022-06-13 16:25:15', 2, NULL),
(12, 'Student 6', 'student6@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:13', '2022-06-13 16:25:13', 2, NULL),
(13, 'Student 7', 'student7@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:11', '2022-06-13 16:25:11', 3, NULL),
(14, 'Student 8', 'student8@student.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:09', '2022-06-13 16:25:09', 3, NULL),
(15, 'Parent 1', 'parent1@parent.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:07', '2022-06-13 16:25:07', NULL, NULL),
(16, 'Parent 2', 'parent2@parent.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:04', '2022-06-13 16:25:04', NULL, NULL),
(17, 'Parent 3', 'parent3@parent.com', NULL, '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, '2022-06-13 16:25:02', '2022-06-13 16:25:02', NULL, NULL),
(18, 'Izabela Szewczyk', 'IzabelaSzewczyk@parent.com', NULL, '$2y$10$Jl.gS4laQ6ribbzbkqnV9ueXxw5BWCImrFtnaMdQdockifrfXDlpa', NULL, '2022-06-13 16:26:02', '2022-06-13 16:26:02', NULL, NULL, NULL),
(19, 'Iga Szewczyk', 'IgaSzewczyk@student.com', NULL, '$2y$10$fyyXbVGewC9ywX5JIpDdZedCL6CODodeWTNjF/4kor1LPXpwv8oHW', NULL, '2022-06-13 16:26:35', '2022-06-13 16:26:35', NULL, 1, 18),
(20, 'Nina Wójtowicz', 'NinaWójtowicz@parent.com', NULL, '$2y$10$USo0fSXGdhi9rZnzpO6E5e/sUuH.84ghzieVlr4OHqzNFGfLQ36Ge', NULL, '2022-06-13 16:27:00', '2022-06-13 16:27:00', NULL, NULL, NULL),
(21, 'Paweł Wójtowicz', 'PawełWójtowicz@student.com', NULL, '$2y$10$A5/SnbWo0R4b0slEQIeE3Olq6hmmro3UoBoXKlRbfu6ZsyMumkNhO', NULL, '2022-06-13 16:27:41', '2022-06-13 16:27:41', NULL, 1, 20),
(22, 'Mateusz Kaźmierczak', 'MateuszKaźmierczak@parent.com', NULL, '$2y$10$V1EDWUUV0mQYkh7tnjy1m.FGvajmbr59u8jCD1YP6twjZqdDOUBu6', NULL, '2022-06-13 16:28:10', '2022-06-13 16:28:10', NULL, NULL, NULL),
(23, 'Justyna Kaźmierczak', 'JustynaKaźmierczak@student.com', NULL, '$2y$10$ounKn98o28rAaDCEJXpj8u4rQ/e7z/9gEBJ0XyuAnamQxwXfpvF5C', NULL, '2022-06-13 16:28:47', '2022-06-13 16:28:47', NULL, 1, 22),
(24, 'Jan Kaźmierczak', 'JanKaźmierczak@student.com', NULL, '$2y$10$eF06/0fedq3lObt5pfoE2O5TfcPx5ugy0ubfSK3Npc9ZDJ0rvIZom', NULL, '2022-06-13 18:22:15', '2022-06-13 18:22:15', NULL, 4, 22),
(25, 'Szymon Kaźmierczak', 'SzymonKaźmierczak@student.com', NULL, '$2y$10$4xjpJ4yJIOygpiCBPlKzYu/Qm3BvkwgyFXf100SqNFdoKDzr32QQq', NULL, '2022-06-13 18:22:50', '2022-06-13 18:22:50', NULL, 8, 22),
(26, 'Urszula Karpińska', 'urszulakarpińska@teacher.com', NULL, '$2y$10$bl/x5xvEiTyBC4zUrnsjU.SZobQbRE1N35g3ApJyo5Rvq/ITg5yqO', NULL, '2022-06-13 18:55:30', '2022-06-13 18:55:30', NULL, NULL, NULL),
(27, 'Wiktor Michalski', 'WiktorMichalski@teacher.com', NULL, '$2y$10$71AB/8rLjvjVEXC7Fu9oqOwqgEVm2bDgNME9As3g6utJW9NuY1zWq', NULL, '2022-06-13 18:55:56', '2022-06-13 18:55:56', NULL, NULL, NULL),
(28, 'Michalina Dudek', 'MichalinaDudek@teacher.com', NULL, '$2y$10$FifBcD7F5pEH16cOjM427ex4x9c5PwQGeRyjzLypcrjigc7nuSJHK', NULL, '2022-06-13 18:56:13', '2022-06-13 18:56:13', NULL, NULL, NULL),
(29, 'Bartek Adamski', 'BartekAdamski@teacher.com', NULL, '$2y$10$lYz8F2fTygEhL0F8ZHFgZ.7e9hG3yQompuYZ3zqjs3O4WicCZZQGG', NULL, '2022-06-13 18:56:38', '2022-06-13 18:56:38', NULL, NULL, NULL),
(30, 'Jan Kowalski', 'jankowalski@parent.com', NULL, '$2y$10$uWjWepzt8ASV.2rkSMDiWeq/2SiOwCGAEcduSMZeyql8vL.Rc/9Py', NULL, '2022-06-14 14:10:47', '2022-06-14 14:10:47', '2022-06-14 16:11:43', NULL, NULL),
(31, 'Piotr Matejko', 'piotrmatejko@parent.com', NULL, '$2y$10$yTYrqmeUWROkSCQybL0eSOsnO5JT3ISizSIqcc8h4DJIu5UKzk8aq', NULL, '2022-06-14 14:36:16', '2022-06-14 14:36:16', NULL, NULL, NULL),
(32, 'Szymon Matejko', 'szymonmatejko@student.com', NULL, '$2y$10$ICxZpOTk8XVkmRxgXZ1mheiBtB/.6i.mAMHEP.8e6opv2Es38MtZu', NULL, '2022-06-14 14:36:45', '2022-06-14 14:36:45', NULL, 2, 31);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_fk_1001496` (`teacher_id`),
  ADD KEY `class_fk_1001508` (`class_id`),
  ADD KEY `lessons_przedmiot_id_foreign` (`przedmiot_id`),
  ADD KEY `sala_id` (`sala_id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeksy dla tabeli `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indeksy dla tabeli `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeksy dla tabeli `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD KEY `oceny_uczen_id_foreign` (`uczen_id`),
  ADD KEY `oceny_przedmiot_id_foreign` (`przedmiot_id`);

--
-- Indeksy dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_1001475` (`role_id`),
  ADD KEY `permission_id_fk_1001475` (`permission_id`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_1001484` (`user_id`),
  ADD KEY `role_id_fk_1001484` (`role_id`);

--
-- Indeksy dla tabeli `sale_lekcyjne`
--
ALTER TABLE `sale_lekcyjne`
  ADD PRIMARY KEY (`id_sali`);

--
-- Indeksy dla tabeli `school_classes`
--
ALTER TABLE `school_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_classes_tutor_foreign` (`tutor`);

--
-- Indeksy dla tabeli `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD KEY `student_attendance_student_id_foreign` (`student_id`),
  ADD KEY `student_attendance_lesson_id_foreign` (`lesson_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `class_fk_1001550` (`class_id`),
  ADD KEY `users_parent_id_foreign` (`parent_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `sale_lekcyjne`
--
ALTER TABLE `sale_lekcyjne`
  MODIFY `id_sali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `school_classes`
--
ALTER TABLE `school_classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `class_fk_1001508` FOREIGN KEY (`class_id`) REFERENCES `school_classes` (`id`),
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`sala_id`) REFERENCES `sale_lekcyjne` (`id_sali`),
  ADD CONSTRAINT `lessons_przedmiot_id_foreign` FOREIGN KEY (`przedmiot_id`) REFERENCES `przedmioty` (`id`),
  ADD CONSTRAINT `teacher_fk_1001496` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_przedmiot_id_foreign` FOREIGN KEY (`przedmiot_id`) REFERENCES `przedmioty` (`id`),
  ADD CONSTRAINT `oceny_uczen_id_foreign` FOREIGN KEY (`uczen_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_1001475` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_1001475` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_1001484` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_1001484` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `school_classes`
--
ALTER TABLE `school_classes`
  ADD CONSTRAINT `school_classes_tutor_foreign` FOREIGN KEY (`tutor`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`),
  ADD CONSTRAINT `student_attendance_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `class_fk_1001550` FOREIGN KEY (`class_id`) REFERENCES `school_classes` (`id`),
  ADD CONSTRAINT `users_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
