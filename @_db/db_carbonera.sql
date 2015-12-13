-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2015 a las 15:26:45
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_carbonera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exempt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_22_205647_create_users_table', 1),
('2015_08_22_205730_create_roles_table', 1),
('2015_08_22_205752_create_permissions_table', 1),
('2015_08_22_205810_create_permission_role_table', 1),
('2015_08_22_205832_create_role_user_table', 1),
('2015_08_30_6_create_users_social_table', 1),
('2015_08_31_160212_create_customers_table', 1),
('2015_08_31_160242_create_user_customer_table', 1),
('2015_08_31_170957_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(10) unsigned NOT NULL,
  `permission_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `permission_title`, `permission_slug`, `permission_description`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'App\\Http\\Controllers\\Admin\\DashboardController@index', 'Dashboard Page', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(2, 'Index Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@index', 'List all records', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(3, 'Create Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@create', 'Create Roles', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(4, 'Save Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@store', 'Save roles', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(5, 'Show Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@show', 'Show roles', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(6, 'Edit Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@edit', 'Edit Roles', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(7, 'Update Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@update', 'Update Roles', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(8, 'Delete Roles', 'App\\Http\\Controllers\\Admin\\Auth\\RoleController@destroy', 'Delete Roles', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(9, 'Index Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@index', 'List all records', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(10, 'Create Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@create', 'Create Permissions', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(11, 'Save Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@store', 'Save Permissions', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(12, 'Show Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@show', 'Show Permissions', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(13, 'Edit Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@edit', 'Edit Permissions', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(14, 'Update Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@update', 'Update Permissions', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(15, 'Delete Permissions', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionController@destroy', 'Delete Permissions', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(16, 'Index Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@index', 'List all records', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(17, 'Create Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@create', 'Create Permissions assignment', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(18, 'Save Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@store', 'Save Permissions assignment', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(19, 'Show Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@show', 'Show Permissions assignment', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(20, 'Edit Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@edit', 'Edit Permissions assignment', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(21, 'Update Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@update', 'Update Permissions assignment', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(22, 'Delete Permissions assignment', 'App\\Http\\Controllers\\Admin\\Auth\\PermissionRoleController@destroy', 'Delete Permissions assignment', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(23, 'Index Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@index', 'List all records', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(24, 'Create Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@create', 'Create Users', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(25, 'Save Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@store', 'Save Users', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(26, 'Show Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@show', 'Show Users', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(27, 'Edit Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@edit', 'Edit Users', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(28, 'Update Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@update', 'Update Users', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(29, 'Delete Users', 'App\\Http\\Controllers\\Admin\\Auth\\UserController@destroy', 'Delete Users', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(30, 'View Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@index', 'View Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(31, 'Edit Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@edit', 'Edit Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(32, 'Update Info Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@updateInfo', 'Update Info Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(33, 'Update Security Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@updateSecurity', 'Update Security Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(34, 'Update Privacity Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@updatePrivacity', 'Update Privacity Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(35, 'Edit Avatar Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@editAvatar', 'Edit Avatar Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(36, 'Update Avatar Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@updateAvatar', 'Update Avatar Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(37, 'Confirm Email Profile', 'App\\Http\\Controllers\\Admin\\Auth\\ProfileController@confirmEmailRegistration', 'Confirm Email Profile', '2015-11-22 18:10:56', '2015-11-22 18:10:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
`id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(2, 2, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(3, 3, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(4, 4, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(5, 5, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(6, 6, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(7, 7, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(8, 8, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(9, 9, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(10, 10, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(11, 11, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(12, 12, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(13, 13, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(14, 14, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(15, 15, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(16, 16, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(17, 17, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(18, 18, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(19, 19, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(20, 20, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(21, 21, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(22, 22, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(23, 23, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(24, 24, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(25, 25, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(26, 26, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(27, 27, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(28, 28, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(29, 29, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(30, 1, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(31, 30, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(32, 31, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(33, 32, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(34, 33, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(35, 34, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(36, 35, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(37, 36, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(38, 37, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(10) unsigned NOT NULL,
  `role_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `role_title`, `role_slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'The Administrator user has ilimited access to the platform', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(2, 'preventista', 'preventista', 'Carga pedidos a los clientes', '2015-11-22 18:10:56', '2015-11-22 18:10:56'),
(3, 'default', 'default', 'The default user has only access to their own', '2015-11-22 18:10:56', '2015-11-22 18:10:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(2, 2, 2, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(3, 1, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(4, 2, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57'),
(5, 3, 3, '2015-11-22 18:10:57', '2015-11-22 18:10:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `avatar`, `phone`, `password`, `remember_token`, `activation_code`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'email1@caragua.com', 'carbonera_admin', NULL, '02431231231', '$2y$10$0KT0N3D7CJ6vNMGlNvm1auJAd96Vm1yWN2QpM4BMiSMQA6qmtDYPi', 'IYeDHraP8IFsaiAXcvbfyvEs3kDlw7f3GN15oz4kpr96smftMe99Mr6wLKOI', NULL, 1, '2015-11-22 18:10:56', '2015-11-22 18:43:21'),
(2, 'Prev - 1', 'email2@caragua.com', 'preventista1', NULL, '04244564564', '$2y$10$aatrcht0DEHzg3VwGm80uOHqR3ylCePQZQk3.0q2oEjy5LoKWTGqm', 'qXf608k1rxsxDUAeldCbIwTgLLndxYg0XOu3DUWQyNBlv63pzUI0tyPAPCpP', NULL, 1, '2015-11-22 18:10:56', '2015-11-22 18:55:02'),
(3, 'Supermercados Mayor', 'supermayor@gmail.com', 'supermayor', NULL, '04267897899', '$2y$10$SeR.nhy9MWlauwSEo2ONk.CFWRG2j48m3SDICpnch3X3NJA0D5bim', 'yYJmQFmCoUkzFzIZHKCO0uiXwLlJ1i3HfogRYzPAgIi1CO60nz2RQWq9SXFG', NULL, 1, '2015-11-22 18:10:56', '2015-11-22 18:54:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_social`
--

CREATE TABLE IF NOT EXISTS `users_social` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `social_data` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_customer`
--

CREATE TABLE IF NOT EXISTS `user_customer` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `customers_name_unique` (`name`), ADD UNIQUE KEY `customers_rif_unique` (`rif`), ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
 ADD PRIMARY KEY (`id`), ADD KEY `permission_role_permission_id_index` (`permission_id`), ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_role_slug_unique` (`role_slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
 ADD PRIMARY KEY (`id`), ADD KEY `role_user_user_id_index` (`user_id`), ADD KEY `role_user_role_id_index` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
 ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indices de la tabla `users_social`
--
ALTER TABLE `users_social`
 ADD PRIMARY KEY (`id`), ADD KEY `users_social_user_id_index` (`user_id`);

--
-- Indices de la tabla `user_customer`
--
ALTER TABLE `user_customer`
 ADD PRIMARY KEY (`id`), ADD KEY `user_customer_user_id_index` (`user_id`), ADD KEY `user_customer_customer_id_index` (`customer_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users_social`
--
ALTER TABLE `users_social`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user_customer`
--
ALTER TABLE `user_customer`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users_social`
--
ALTER TABLE `users_social`
ADD CONSTRAINT `users_social_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_customer`
--
ALTER TABLE `user_customer`
ADD CONSTRAINT `user_customer_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `user_customer_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
