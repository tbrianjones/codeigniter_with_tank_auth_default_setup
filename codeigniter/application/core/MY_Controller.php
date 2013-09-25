<?php

	// master controller where we can set common stuff
	//
	//	1) all application controllers extend MY_Controller so that we can
	//		load generic data from here ( eg. headers, analytics, page titles, etc. )
	//
	class MY_Controller extends CI_Controller
	{

		// array used to pass data to <head>
		public $head;
		
		// var used to store content
		public $content;
		
		// class and method ( routing requires we override the default below )
		public $class;
		public $method;
		
		function __construct( )
		{
			
			parent::__construct( );
									
			// turn profiler on for all pages
			$this->output->enable_profiler( TRUE );
			
			// set class and method for a page
			//
			//	1) we don't use $this->router->class and $this->router->method because
			//		they don't work properly when stuff is routed in /config/routes.php
			//
			$this->class = $this->router->class;
			$this->method = $this->router->method;
						
			
		// --- COMMON AND DEFAULT PAGE DATA ---

			
			// page meta title
			$this->head['meta_title'] = 'Generic Meta Title';
			$this->head['meta_description'] = 'Generic Meta Description';
						
			// css
			//$this->head['css'][] = "\n" . '<link rel="stylesheet" href="/styles/reset.css" type="text/css">' . "\n";
			$this->head['css'][] = "\n" . '<link rel="stylesheet" href="/styles/common.css" type="text/css">' . "\n";
			
			// google analytics	
			$this->head['google_analytics'] = "\n" . '' . "\n";
			
			// default content
			$this->content = '<p>$this->content displays here. Set in the controller for this page.</p>';
			
		}
	
	}

?>
