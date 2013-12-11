<?php
// class-myplugin-api-mytype.php
class Glossary_JSON_API extends WP_JSON_CustomPostType {
	protected $base = '/wp-glossary/glossary';
	protected $type = 'glossary';

	public function registerRoutes( $routes ) {
		$routes = parent::registerRoutes( $routes );
		return $routes;
	}
}
