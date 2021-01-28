<!DOCTYPE html>
<!--
EHy Portfolio Base. A starter theme for online portfolios.
Copyright (C) 2021  Enno Hyttrek

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

https://www.gnu.org/licenses/
-->
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('title'); ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <header>