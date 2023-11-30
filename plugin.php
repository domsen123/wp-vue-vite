<?php

/**
 * Plugin Name: Wordpress AI Assistant
 * Description: A plugin to assist users with your wordpress page.
 * Author: Dominic Marx
 * Author URI: https://dz.aziz.im
 * License: GPLv2
 * Version: 0.0.1
 */

namespace Kucrut\ViteForWPExample\Vue;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/inc/frontend.php';
require_once __DIR__ . '/inc/backend.php';

Frontend\bootstrap();
Backend\bootstrap();
