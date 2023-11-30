<?php

declare( strict_types = 1 );

namespace Kucrut\ViteForWPExample\Vue\Backend;

use Kucrut\Vite;


/**
 * Backend bootstrapper
 *
 * @return void
 */
 function bootstrap(): void {
	add_action( 'admin_menu', __NAMESPACE__ . '\\admin_menu' );
	add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\admin_enqueue_scripts' );
}

/**
 * Enqueue script
 */
function admin_enqueue_scripts(): void {
	Vite\enqueue_asset(
		dirname( __DIR__ ) . '/app/dist',
		'app/src/backend.ts',
		[ 'handle' => 'vite-for-wp-vue' ]
	);
}

/**
 * Add menu page
 */
function admin_menu(): void {
  add_menu_page( 
    'Vue Plugin Page', 
    'Vue Plugin', 
    'manage_options', 
    'vue-plugin', 
    __NAMESPACE__ . '\\render_admin', 
    'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxLjE2ZW0iIGhlaWdodD0iMWVtIiB2aWV3Qm94PSIwIDAgMjU2IDIyMSI+PHBhdGggZmlsbD0iIzQxQjg4MyIgZD0iTTIwNC44IDBIMjU2TDEyOCAyMjAuOEwwIDBoOTcuOTJMMTI4IDUxLjJMMTU3LjQ0IDBoNDcuMzZaIi8+PHBhdGggZmlsbD0iIzQxQjg4MyIgZD0ibTAgMGwxMjggMjIwLjhMMjU2IDBoLTUxLjJMMTI4IDEzMi40OEw1MC41NiAwSDBaIi8+PHBhdGggZmlsbD0iIzM1NDk1RSIgZD0iTTUwLjU2IDBMMTI4IDEzMy4xMkwyMDQuOCAwaC00Ny4zNkwxMjggNTEuMkw5Ny45MiAwSDUwLjU2WiIvPjwvc3ZnPg==', 
    6 
  );
}

/**
 * Render admins markup
 */
function render_admin(){
	?>
	<div id="v4wp-admin-vue" class="v4wp-admin-vue"></div>
	<?php
}
