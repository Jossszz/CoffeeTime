-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2023 a las 04:51:48
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coffeetime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Café', '2023-09-09 05:49:04', '2023-09-09 05:49:04'),
(2, 'Pasteleria', '2023-09-09 05:49:04', '2023-09-09 05:49:04'),
(3, 'Sandwich', '2023-09-09 05:49:04', '2023-09-09 05:49:04'),
(4, 'Café', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(5, 'Pasteleria', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(6, 'Café', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(7, 'Sandwich', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(8, 'Pasteleria', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(9, 'Sandwich', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(10, 'Café', '2023-09-09 05:49:08', '2023-09-09 05:49:08'),
(11, 'Pasteleria', '2023-09-09 05:49:08', '2023-09-09 05:49:08'),
(12, 'Sandwich', '2023-09-09 05:49:08', '2023-09-09 05:49:08'),
(13, 'Café', '2023-09-09 05:49:10', '2023-09-09 05:49:10'),
(14, 'Pasteleria', '2023-09-09 05:49:10', '2023-09-09 05:49:10'),
(15, 'Sandwich', '2023-09-09 05:49:10', '2023-09-09 05:49:10'),
(16, 'Café', '2023-09-09 05:49:17', '2023-09-09 05:49:17'),
(17, 'Pasteleria', '2023-09-09 05:49:17', '2023-09-09 05:49:17'),
(18, 'Sandwich', '2023-09-09 05:49:17', '2023-09-09 05:49:17'),
(19, 'Café', '2023-09-09 05:49:22', '2023-09-09 05:49:22'),
(20, 'Pasteleria', '2023-09-09 05:49:22', '2023-09-09 05:49:22'),
(21, 'Sandwich', '2023-09-09 05:49:22', '2023-09-09 05:49:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_09_08_084349_create_users_table', 1),
(5, '2023_09_08_101427_create_categories_table', 1),
(6, '2023_09_08_101534_create_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:04', '2023-09-09 05:49:04'),
(2, 2, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:04', '2023-09-09 05:49:04'),
(3, 3, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:04', '2023-09-09 05:49:04'),
(4, 4, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(5, 5, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(6, 6, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(7, 7, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(8, 8, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(9, 9, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:05', '2023-09-09 05:49:05'),
(10, 10, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:08', '2023-09-09 05:49:08'),
(11, 11, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:08', '2023-09-09 05:49:08'),
(12, 12, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:08', '2023-09-09 05:49:08'),
(13, 13, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:10', '2023-09-09 05:49:10'),
(14, 14, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:10', '2023-09-09 05:49:10'),
(15, 15, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:10', '2023-09-09 05:49:10'),
(16, 16, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:17', '2023-09-09 05:49:17'),
(17, 17, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:17', '2023-09-09 05:49:17'),
(18, 18, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:17', '2023-09-09 05:49:17'),
(19, 19, 'Espresso', 'Café mezcla seleccionada de Arábica y Robusta', 1800.00, 'espresso.jpg', '2023-09-09 05:49:22', '2023-09-09 05:49:22'),
(20, 20, 'Torta Reina Madre Lucuma', 'Si deseas probar un nuevo sabor y sorprender, esta torta de amapola es una real alternativa, se prepara en base a bizcocho con amapola, crema chantilly mezclada con manjar y trozos de nueces.', 31500.00, 'amapola.jpg', '2023-09-09 05:49:22', '2023-09-09 05:49:22'),
(21, 21, 'Jamón Pierna', 'Pan Italiano (9x18cm) - Miga Blanco o Miga Integral (13x11cm).', 6800.00, 'jamon.jpg', '2023-09-09 05:49:22', '2023-09-09 05:49:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
