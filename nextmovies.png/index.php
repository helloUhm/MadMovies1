<?php
require_once __DIR__ . '/app/index/indexRoutes.php';

error_reporting(E_ALL & ~E_DEPRECATED);

// MadMovies Public Routes
IndexRoutes::index();


// MadMovies Admin Routes
// TODO: Add Admin Routes

