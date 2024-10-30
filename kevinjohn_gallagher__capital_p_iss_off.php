<?php
/*
	Plugin Name: 			Kevinjohn Gallagher: Pure Web Brilliant's Capital P iss off
	Description: 			Removes crazy, draconian, and released untested filters that break websites and cause issues for those whose language isn't American English. 
	Version: 				2.1
	Author: 				Kevinjohn Gallagher
	Author URI: 			http://kevinjohngallagher.com/
	
	Contributors:			kevinjohngallagher, purewebbrilliant 
	Donate link:			http://kevinjohngallagher.com/
	Tags: 					kevinjohn gallagher, pure web brilliant, framework, cms, simple, multisite, jquery, javascripts, beta, release cycle, deployment, testing
	Requires at least:		3.0
	Tested up to: 			3.4
	Stable tag: 			2.1
*/
/**
 *
 *	Kevinjohn Gallagher: Pure Web Brilliant's Capital P iss off
 * =============================================================
 *
 *	Removes crazy, draconian, and released untested filters that break websites and cause issues for those whose language isn't American English.
 *
 *
 *	This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 *	General Public License as published by the Free Software Foundation; either version 3 of the License, 
 *	or (at your option) any later version.
 *
 * 	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 *	without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *	See the GNU General Public License (http://www.gnu.org/licenses/gpl-3.0.txt) for more details.
 *
 *	You should have received a copy of the GNU General Public License along with this program.  
 * 	If not, see http://www.gnu.org/licenses/ or http://www.gnu.org/licenses/gpl-3.0.txt
 *
 *
 *	Copyright (C) 2008-2012 Kevinjohn Gallagher / http://www.kevinjohngallagher.com
 *
 *
 *	@package				Pure Web Brilliant
 *	@version 				2.1
 *	@author 				Kevinjohn Gallagher <wordpress@kevinjohngallagher.com>
 *	@copyright 				Copyright (c) 2012, Kevinjohn Gallagher
 *	@link 					http://kevinjohngallagher.com
 *	@license 				http://www.gnu.org/licenses/gpl-3.0.txt
 *
 *
 */


 	if ( ! defined( 'ABSPATH' ) )
 	{ 
 			die( 'Direct access not permitted.' ); 
 	}
 	
 	
 	

	define( '_KEVINJOHN_GALLAGHER___capital_p_iss_off', '2.1' );



	if (class_exists('kevinjohn_gallagher')) 
	{
		
		
		class	kevinjohn_gallagher___capital_p_iss_off 
		extends kevinjohn_gallagher
		{
		
				/*
				**
				**		VARIABLES
				**
				*/
				const PM		=	'_kevinjohn_gallagher___capital_p_iss_off';
				
				var					$instance;
				var 				$plugin_name;
				var					$uniqueID;
				var					$plugin_dir;
				var					$plugin_url;							
				var 				$core_jquery_version;
				var 				$http_or_https;
				var 				$jquery_new_url;
				var 				$jquery_mobile_url;
				var 				$plugin_options;
				
		
				/*
				**
				**		CONSTRUCT
				**
				*/
				public	function	__construct() 
				{
						$this->instance					=&	$this;
						$this->uniqueID 				=	self::PM;
						$this->plugin_name				=	"Kevinjohn Gallagher: Pure Web Brilliant's Capital P iss off";
						
						add_action( 'init',				array( $this, 'init' ) );
						add_action( 'init',				array( $this, 'init_child' ) );
						add_action(	'admin_init',		array( $this, 'admin_init_register_settings'));

												
				}
				
				
				
				
				/*
				**
				**		INIT_CHILD
				**
				*/
			
				public function init_child() 
				{
				
				
						$this->plugin_dir										=	plugin_dir_path(__FILE__);	
						$this->plugin_url										=	plugin_dir_url(__FILE__);				
				
				
						$this->child_settings_sections 							=	array();

						$this->plugin_options									=	get_option($this->uniqueID . '___options');
										
				
						$this->child_settings_array = array();
						$this->piss_off();
				}
				
				
				private 	function 	piss_off()
				{
						remove_filter(	'the_title',		'capital_P_dangit', 11);
						remove_filter(	'the_content',		'capital_P_dangit', 11);					
						remove_filter(	'comment_text',		'capital_P_dangit', 31);
						
					//	die();					
				}
				
		
		
		}	//	class
		
	
		$kevinjohn_gallagher___capital_p_iss_off			=	new kevinjohn_gallagher___capital_p_iss_off();
		
	
	} else {
	

			function kevinjohn_gallagher___capital_p_iss_off___parent_needed()
			{
					echo	"<div id='message' class='error'>";
					
					echo	"<p>";
					echo	"<strong>Kevinjohn Gallagher: Pure Web Brilliant's Capital P iss off</strong> ";	
					echo	"requires the parent framework to be installed and activated";
					echo	"</p>";
			} 

			add_action('admin_footer', 'kevinjohn_gallagher___capital_p_iss_off___parent_needed');	
	
	}


