<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

session_start();

switch($_REQUEST["page"])
{
	case "br__customer_page": 
		if (!class_exists('br__customer')) require_once("models/users.php"); 
		break;
}
	
if (!class_exists( 'Basic_Registration' ) ) :

	class Basic_Registration
	{
		public $post;
		public $wpdb;	
		static protected $prefix = '';
		static protected $database = '';
		static protected $databaseHost = '';
		static protected $databaseUsername = ''; 
		static protected $databasePassword = ''; 
		static protected $database_obj = '';
		static protected $database_connected = false;
		static protected $url;
		static protected $current_user;
		static protected $path;
		static protected $tplPath;
		static protected $validTemplates = array( 'dashboard', 'customer.resetpass', 'customer.resetpass.form', 'customer.myaccount', 'customer.list');
		static protected $defaultTemplate = 'dashboard';
		private static $instance;
		
		static public function init() 
		{
			require_once("lib/conf.php");
			self::$databaseHost = $databaseHost_;
			self::$databaseUsername = $databaseUsername_;
			self::$databasePassword = $databasePassword_;
			self::$database = $database_;
			self::$url     = '/bs-registration/';
			self::$path    = '';
			self::$tplPath = 'views';
			
			switch($_REQUEST["page"])
			{
				case "br__customer_page": 
					if(@$_REQUEST["action"] == "customer_manager_save")
						self::br__customer_manager_save();
					elseif(@$_REQUEST["action"] == "answers_update__save_all_changes")
						self::br__customer_manager__save_all_changes();
					elseif(@$_REQUEST["action"] == "report")
						self::br__customer_manager();
					elseif(@$_REQUEST["action"] == "save")
						self::br__customer_save();
					elseif(@$_REQUEST["action"] == "login")
						self::br__customer_login();	
					elseif(@$_REQUEST["action"] == "br__customer_delete_confirmed_selected_account")
						self::br__customer_delete_confirmed_selected_account();	
					elseif(@$_REQUEST["action"] == "br__customer_delete_selected_account")
						self::br__customer_delete_selected_account();	
					elseif(@$_REQUEST["action"] == "br__customer_selected_account")
						self::br__customer_selected_account();	
					elseif(@$_REQUEST["action"] == "br__customer_myaccount")
						self::br__customer_myaccount();	
					elseif(@$_REQUEST["action"] == "br__customer_selected_account_save")
						self::br__customer_selected_account_save();	
					elseif(@$_REQUEST["action"] == "myaccount_save")
						self::br__customer_myaccount_save();	
					elseif(@$_REQUEST["action"] == "resetpass")
						self::br__customer_resetpass();						
					elseif(@$_REQUEST["action"] == "resetpass_submit")
						self::br__customer_resetpass_submit();				
					elseif(@$_REQUEST["action"] == "resetpass_form")
						self::br__customer_resetpass_form();
					elseif(@$_REQUEST["action"] == "resetpass_form_save")
						self::br__customer_resetpass_form_save();
					elseif(@$_REQUEST["action"] == "logout")
						self::br__customer_logout();						
					else
						self::br__customer_page();
					break;
				default: 
					self::br__dashboard();
					break;		
			}
		}
		
		static public function br__dashboard()
		{
			$template = 'dashboard';
			$tplData  = null;
			echo self::renderTpl( $tplData, $template ) ;			
		}

		static public function br__customer_manager_save()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->br__customer_manager_save();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}	

		static public function br__customer_manager__save_all_changes()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$profile = new br__customer();
			$profile->init(self::$path);
			$profile->br__set_db(self::$database_obj);
			
			$return_data = array();
			$return_data  = $profile->br__save_all_changes();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}


		static public function br__customer_manager()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}

			$profile = new br__customer();
			$profile->init(self::$path);
			$profile->br__set_db(self::$database_obj);

			$return_data = array();
			$template = 'customer.list';
			$tplData  = $profile->br__get_details();
			
			echo self::renderTpl( $tplData, $template ) ;	
		}

		static public function br__customer_save()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->br__save();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}

		static public function br__customer_login()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->br__login();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}

		static public function br__customer_logout()
		{
			session_unset();
			session_destroy();			
			header("location: ?");
		}	

		static public function br__customer_delete_confirmed_selected_account()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$profile = new br__customer();
			$profile->init(self::$path);
			$profile->br__set_db(self::$database_obj);
			
			$return_data = array();
			$return_data  = $profile->br__delete_confirmed_selected_account();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}

		static public function br__customer_delete_selected_account()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$profile = new br__customer();
			$profile->init(self::$path);
			$profile->br__set_db(self::$database_obj);
			
			$return_data = array();
			$return_data  = $profile->br__get_selected_delete_details();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}	


		static public function br__customer_selected_account()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$profile = new br__customer();
			$profile->init(self::$path);
			$profile->br__set_db(self::$database_obj);
			
			$return_data = array();
			$return_data  = $profile->br__get_selected_details();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}	

		static public function br__customer_myaccount()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}

			$profile = new br__customer();
			$profile->init(self::$path);
			$profile->br__set_db(self::$database_obj);
			
			$return_data = array();
			$template = 'customer.myaccount';
			$tplData  = $profile->br__get_selected_details();
			echo self::renderTpl( $tplData, $template ) ;
		}

		static public function br__customer_selected_account_save()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->myaccount_save();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}

		static public function br__customer_myaccount_save()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->myaccount_save();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}

		static public function br__customer_resetpass()
		{
			$template = 'customer.resetpass';
			$tplData  = null;
			echo self::renderTpl( $tplData, $template ) ;		
		}

		static public function br__customer_resetpass_submit()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->resetpass_submit();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}

		static public function br__customer_resetpass_form()
		{
			$template = 'customer.resetpass.form';
			$tplData  = null;
			echo self::renderTpl( $tplData, $template ) ;		
		}

		static public function br__customer_resetpass_form_save()
		{
			//stablish database connection
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}
			
			$items = new br__customer();
			$items->init(self::$path);
			$items->br__set_db(self::$database_obj);

			$return_data = array();
			$return_data = $items->resetpass_form_save();

			self::passBack( $return_data["result"], $return_data["msg"], $return_data["redirect"] );
		}	

		static public function br__customer_page()
		{
			$template = 'customer';
			$tplData  = null;
			echo self::renderTpl( $tplData, $template ) ;		
		}		


		
		
		################################################
		############### helpers ########################
		################################################		
		static public function externalDatabase() 
		{
			$mysql = new mysqli( self::$databaseHost, self::$databaseUsername, self::$databasePassword, self::$database );
				if ( ! $mysql ) die( "Could not connect to MySQL" );
					return $mysql;
		}

		static public function database() 
		{
			if ( ! self::$instance ) self::$instance = self::externalDatabase();
				return self::$instance;
		}		
		
		public static function smartquote( $value, $valType = "" ) 
		{
			if(!self::$database_connected) 
			{
				self::$database_obj = self::database();
				self::$database_connected = true;
			}			

			if ( empty( $value ) && ! is_numeric( $value ) ) 
				return "NULL";
			elseif ( empty( $value ) && is_numeric( $value ) ) 
				return 0;
			else 
			{
				if ( get_magic_quotes_gpc() ) 
				{
					$value = stripslashes( $value );
				}
				if ( ! is_numeric( $value ) ) 
				{
					if ( ( empty( $valType ) ) || ( $valType == 'MYSQL_STRING' ) )  
					{
						$value = "'" . self::$database_obj->real_escape_string( trim( htmlspecialchars_decode( $value, ENT_QUOTES ) ) ) . "'";
					}
				} 
				else 
				{
					if ( $valType == 'MYSQL_STRING' ) 
					{
						$value = "'" . self::$database_obj->real_escape_string( trim( htmlspecialchars_decode( $value, ENT_QUOTES ) ) ) . "'";
					}
				}

				return $value;
			}
		}
		
		static public function renderTpl( $data, $templateFile ) 
		{
			if ( ! in_array( $templateFile, self::$validTemplates ) ) 
				$templateFile = self::$defaultTemplate;
			if ( is_array( $data ) ) 
				extract( $data );

			ob_start();
			require self::$tplPath . '/' . $templateFile . '.php';
			return ob_get_clean();
		}

		public static function passBack( $response, $responseMsg, $redirect = null ) 
		{
			header( "HTTP/1.1 200 OK" );
			header( 'Content-Type: application/json; charset=utf-8' );
			header( 'Cache-Control: no-cache, must-revalidate' );
			header( 'Expires: Mon, 26 Jul 1997 05:00:00 GMT' );

			$return = json_encode(
				array(
					'response'         => $response,
					'response_message' => $responseMsg,
					'redirect'         => $redirect
				)
			);
			echo $return;
			die();
		}	
		################################################
		################################################
		################################################
	}
	
	Basic_Registration::init();

endif; ?>