<?php 
	class br__customer 
	{
		static protected $prefix = '';
		static protected $database = '';
		static protected $url;
		static protected $path;
		static protected $tplPath;
		static protected $validTemplates = array( 'customer_details', 'customer', 'admin.questionnaire', 'admin.questionnaire.answers', 'admin.questionnaire.answers.add', 'admin.questionnaire.quote.report', 'admin.questionnaire.quote.answers', 'admin.questionnaire.dependants', 'admin.questionnaire.edit.quote.answers','customer.update.account','customer.delete.account' );
		static protected $defaultTemplate = 'customer';
		private static $instance;

		static public function init($p) 
		{
			self::$url     = '/basic-registration/';
			self::$path    = $p;
			self::$tplPath = 'views';
		}
		
		static public function br__set_db($db)
		{
			self::$database = $db;
		}

		static public function br__delete_confirmed_selected_account()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			
			if(isset($_REQUEST["cid"]))
			{
				$qid = $_REQUEST["cid"];
			}
			else
			{
				$qid = $_SESSION["br__customer_id"];
			}
			$res = self::$database->query("DELETE FROM users_details WHERE id='".$qid."'");
			
			$return_data["result_data"] = $rdata;
			$return_data["result"] = true; 
			$return_data["msg"] = 'Successfully deleted!'; 
			
			return $return_data;
		}
		
		static public function br__get_selected_delete_details()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			
			if(isset($_REQUEST["cid"]))
			{
				$qid = $_REQUEST["cid"];
			}
			else
			{
				$qid = $_SESSION["br__customer_id"];
			}
			$res = self::$database->query("SELECT * FROM users_details WHERE id='".$qid."' LIMIT 1");
			
			if($res->num_rows > 0) 
			{
				$rdata = array();
				$i = 0;
				while ($r = $res->fetch_object())
				{
					$rdata[$i]['id'] = $r->id;
					$rdata[$i]['first_name'] = $r->first_name;
					$rdata[$i]['last_name'] = $r->last_name;
					$rdata[$i]['address'] = $r->address;
					$rdata[$i]['city'] = $r->city;
					$rdata[$i]['state'] = $r->state;
					$rdata[$i]['phone'] = $r->phone;
					$rdata[$i]['email'] = $r->email;
					$rdata[$i]['type'] = $r->type;
					$rdata[$i]['password'] = $r->password;
					$i++;
				}				
				$return_data["result_data"] = $rdata;
				$return_data["result"] = true; 
				$return_data["msg"] = 'Successfully Saved!'; 
			}
			else
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Not found!'; 
			}
			$template = 'customer.delete.account';
			$return_data["msg"] = self::renderTpl( $return_data, $template ) ;
			return $return_data;			
		}
		
		static public function br__get_selected_details()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			
			if(isset($_REQUEST["cid"]))
			{
				$qid = $_REQUEST["cid"];
			}
			else
			{
				$qid = $_SESSION["br__customer_id"];
			}
			$res = self::$database->query("SELECT * FROM users_details WHERE id='".$qid."' LIMIT 1");
			
			if($res->num_rows > 0) 
			{
				$rdata = array();
				$i = 0;
				while ($r = $res->fetch_object())
				{
					$rdata[$i]['id'] = $r->id;
					$rdata[$i]['first_name'] = $r->first_name;
					$rdata[$i]['last_name'] = $r->last_name;
					$rdata[$i]['address'] = $r->address;
					$rdata[$i]['city'] = $r->city;
					$rdata[$i]['state'] = $r->state;
					$rdata[$i]['phone'] = $r->phone;
					$rdata[$i]['email'] = $r->email;
					$rdata[$i]['type'] = $r->type;
					$rdata[$i]['password'] = $r->password;
					$i++;
				}				
				$return_data["result_data"] = $rdata;
				$return_data["result"] = true; 
				$return_data["msg"] = 'Successfully Saved!'; 
			}
			else
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Not found!'; 
			}
			$template = 'customer.update.account';
			$return_data["msg"] = self::renderTpl( $return_data, $template ) ;
			return $return_data;			
		}
		
		static public function prev_next()
		{		
			//START: assigning variables
			$maxp = 50 ;
			$max = $_REQUEST["max"];
			$p = $_REQUEST["p"]; if(!isset($p)) $p = 1 ;
			//ENDED: assigning variables
			
			$set = ($p-1)*$maxp ;
			
			$query=$db->query("SELECT * FROM users_details WHERE email='$key' ORDER BY fname ASC LIMIT $set, $maxp");
			
			//START: get link page
			$p2 = $p * $maxp ;
			if ($p == 1) $p1 = 1 ; 
			else $p1 = $p2 - $maxp + 1 ;
			if ($p2 > $max) $p2 = $max ;
			if ($p > 1) $pv = '?menu=16&max='.$max.'&p='.($p-1).'&key2='.$_REQUEST["key2"].'&search='.$_REQUEST["search"].'&select='.$_REQUEST["select"] ;
			if ($p2 != $max) 
			{ 
				if (round($max / $maxp) > $p-0.5) $n = '?menu=16&max='.$max.'&p='.($p + 1).'&key2='.$_REQUEST["key2"].'&search='.$_REQUEST["search"].'&select='.$_REQUEST["select"] ;
			}
			$navpage = 'Page <span class="badge bg-secondary">'.$p1.'-'.$p2.'</span> of <span class="badge bg-secondary">'.$max.'</span>';
			//ENDED: get link page			
		}
		
		static public function br__save_all_changes()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			$res = self::$database->query("SELECT id FROM users_details");
			if($res->num_rows > 0)
			{
					$rdata = array();
					$i = 0;
					while ($r = $res->fetch_object())
					{
						if($_REQUEST["a"] == "delete")
						{
							if(isset($_REQUEST["br__delete".$r->id]))
							{
								self::$database->query("DELETE FROM ".self::$prefix."users_details WHERE id='".$r->id."'");
								$return_data["msg"] = 'All selected has been successfully deleted!'; 
							}
						}
						else
						{						
							$set_ = "SET 
								first_name = '".self::$database->real_escape_string($_REQUEST["br__first_name".$r->id])."',
								last_name = '".self::$database->real_escape_string($_REQUEST["br__last_name".$r->id])."',
								address = '".self::$database->real_escape_string($_REQUEST["br__address".$r->id])."',
								city = '".self::$database->real_escape_string($_REQUEST["br__city".$r->id])."',
								state = '".self::$database->real_escape_string($_REQUEST["br__state".$r->id])."',
								phone = '".self::$database->real_escape_string($_REQUEST["br__phone".$r->id])."',
								email = '".self::$database->real_escape_string($_REQUEST["br__email".$r->id])."',
								type = '".self::$database->real_escape_string($_REQUEST["br__type".$r->id])."',
								source_id = '".$_SESSION["br__customer_id"]."'";
							self::$database->query("UPDATE ".self::$prefix."users_details ".$set_." WHERE id='".$r->id."'");
						}
						$i++;
					}

					$return_data["result_data"] = $rdata;
					$return_data["result"] = true; 
			}
			else
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Not found!'; 
			}
			return $return_data;	
		}	
		
		
		static public function myaccount_selected_save()
		{
			$return_data = array();
			$return_data["redirect"] = '';

				if(isset($_REQUEST["br__type"])) $user_type = $_REQUEST["br__type"]; else $user_type = "CUSTOMER";
				
				$set_ = "SET 
					first_name = '".self::$database->real_escape_string($_REQUEST["br__first_name"])."',
					last_name = '".self::$database->real_escape_string($_REQUEST["br__last_name"])."',
					address = '".self::$database->real_escape_string($_REQUEST["br__address"])."',
					city = '".self::$database->real_escape_string($_REQUEST["br__city"])."',
					state = '".self::$database->real_escape_string($_REQUEST["br__state"])."',
					phone = '".self::$database->real_escape_string($_REQUEST["br__phone"])."',
					email = '".self::$database->real_escape_string($_REQUEST["br__email"])."',
					type = '".self::$database->real_escape_string($_REQUEST["br__type"])."'";
				
				if($_REQUEST["br__email"] == "")
				{
					$return_data["result"] = false; 
					$return_data["msg"] = '
					<div class="alert alert-danger" role="alert">
					  Email is Required!
					</div>'; 
					$res = false;
				}
				else
				{
					$res = self::$database->query("UPDATE ".self::$prefix."users_details ".$set_." WHERE id='".self::$database->real_escape_string($_REQUEST["br__id"])."'");
					if($res) 
					{
						$return_data["result"] = true; 
						$return_data["msg"] = '
						<div class="alert alert-success" role="alert">
						  Successfully Saved!
						</div>'; 
					}
					else
					{
						$return_data["result"] = false; 
						$return_data["msg"] = '
						<div class="alert alert-danger" role="alert">
						  Was not Successfully Saved!
						</div>'; 
					}					
				}

			return $return_data;
		}


		static public function br__customer_manager_save()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			
			$res = self::$database->query("SELECT id FROM users_details WHERE email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");

			if($res->num_rows > 0)
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Email '.$_REQUEST["br__email"]." already exist!";				
			}
			else
			{
				$password = 'Password';
				$hash = 'ssss'; //password_hash($password, PASSWORD_DEFAULT);
				
				if(isset($_REQUEST["br__type"])) $user_type = $_REQUEST["br__type"]; else $user_type = "CUSTOMER";
				
				$set_ = "SET 
					first_name = '".self::$database->real_escape_string($_REQUEST["br__first_name"])."',
					last_name = '".self::$database->real_escape_string($_REQUEST["br__last_name"])."',
					address = '".self::$database->real_escape_string($_REQUEST["br__address"])."',
					city = '".self::$database->real_escape_string($_REQUEST["br__city"])."',
					state = '".self::$database->real_escape_string($_REQUEST["br__state"])."',
					phone = '".self::$database->real_escape_string($_REQUEST["br__phone"])."',
					email = '".self::$database->real_escape_string($_REQUEST["br__email"])."',
					password = '".$hash."',
					type = '".self::$database->real_escape_string($_REQUEST["br__type"])."',
					source_id = '".$_SESSION["br__customer_id"]."'";
				
				if($_REQUEST["br__email"] == "")
				{
					$return_data["result"] = false; 
					$return_data["msg"] = '
					<div class="alert alert-danger" role="alert">
					  Email is Required!
					</div>'; 
					$res = false;
				}
				else
				{
					$res = self::$database->query("INSERT INTO ".self::$prefix."users_details ".$set_);
					if($res) 
					{
						$return_data["result"] = true; 
						$return_data["msg"] = '
						<div class="alert alert-success" role="alert">
						  Successfully Saved!
						</div>'; 
					}
					else
					{
						$return_data["result"] = false; 
						$return_data["msg"] = '
						<div class="alert alert-danger" role="alert">
						  Was not Successfully Saved!
						</div>'; 
					}					
				}
			}
			return $return_data;
		}

		
		
		
		
		
		
################################################################################################
################################################################################################
################################################################################################
		static public function myaccount_save()
		{
			$res = self::$database->query("SELECT * FROM users_details WHERE id <> ".$_SESSION["br__customer_id"]." AND email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");

			//if($res->num_rows > 0)
			if(false)
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Someone already used this email '.$_REQUEST["br__email"]."!";				
				return $return_data;
			}
			else
			{
				$return_data = array();
				$return_data["redirect"] = '';
				
				$set_ = "SET 
					first_name = '".self::$database->real_escape_string($_REQUEST["br__first_name"])."',
					last_name = '".self::$database->real_escape_string($_REQUEST["br__last_name"])."',
					address = '".self::$database->real_escape_string($_REQUEST["br__address"])."',
					city = '".self::$database->real_escape_string($_REQUEST["br__city"])."',
					state = '".self::$database->real_escape_string($_REQUEST["br__state"])."',
					phone = '".self::$database->real_escape_string($_REQUEST["br__phone"])."',
					email = '".self::$database->real_escape_string($_REQUEST["br__email"])."'";
				
				if($_REQUEST["br__email"] == "")
				{
					$return_data["result"] = false; 
					$return_data["msg"] = 'Email is Required!'; 
					$res = false;
				}
				else
				{
					$res = self::$database->query("UPDATE ".self::$prefix."users_details ".$set_." WHERE id=".$_SESSION["br__customer_id"]);
				}
				
				if($res)
				{
					$return_data["result"] = true; 
					$return_data["msg"] = 'Successfully Saved!'; 
				}
				else
				{
					$return_data["result"] = false; 
					$return_data["msg"] = 'Was not Successfully Saved!'; 
				}
				return $return_data;
			}
		}
		
		static public function br__save()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			
			$res = self::$database->query("SELECT id FROM users_details WHERE email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");

			if($res->num_rows > 0)
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Email '.$_REQUEST["br__email"]." already exist!";				
			}
			else
			{
				$password = self::$database->real_escape_string($_REQUEST["br__password"]);
				$hash = password_hash($password, PASSWORD_DEFAULT);
				
				if(isset($_REQUEST["br__phone"])) $user_type = $_REQUEST["br__phone"]; else $user_type = "CUSTOMER";
				
				$set_ = "SET 
					first_name = '".self::$database->real_escape_string($_REQUEST["br__first_name"])."',
					last_name = '".self::$database->real_escape_string($_REQUEST["br__last_name"])."',
					address = '".self::$database->real_escape_string($_REQUEST["br__address"])."',
					city = '".self::$database->real_escape_string($_REQUEST["br__city"])."',
					state = '".self::$database->real_escape_string($_REQUEST["br__state"])."',
					phone = '".self::$database->real_escape_string($_REQUEST["br__phone"])."',
					email = '".self::$database->real_escape_string($_REQUEST["br__email"])."',
					password = '".$hash."',
					type = '".$user_type."'";
				
				if($_REQUEST["br__email"] == "")
				{
					$return_data["result"] = false; 
					$return_data["msg"] = 'Email is Required!'; 
					$res = false;
				}
				else
				{
					$res = self::$database->query("INSERT INTO ".self::$prefix."users_details ".$set_);
				}
				
				if($res) 
				{
					$_SESSION["br__customer_id"] = self::$database->insert_id;
					$return_data["result"] = true; 
					$return_data["msg"] = 'Successfully Saved!'; 
				}
				else
				{
					$return_data["result"] = false; 
					$return_data["msg"] = 'Was not Successfully Saved!'; 
				}
			}
			return $return_data;
		}


		static public function resetpass_form_save()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			$res = self::$database->query("SELECT * FROM users_details WHERE scode='".self::$database->real_escape_string($_REQUEST["br__scode"])."' AND email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");

			$return_data["result"] = false; 
			$return_data["msg"] = 'Request denied, Please try again!'; 				

			if($res->num_rows > 0)
			{
				$i = 0;
				while ($r = $res->fetch_object())
				{
					$password = self::$database->real_escape_string($_REQUEST["br__password"]);
					$hash = password_hash($password, PASSWORD_DEFAULT);					
					self::$database->query("UPDATE users_details SET password='".$hash."' WHERE scode='".self::$database->real_escape_string($_REQUEST["br__scode"])."' AND email='".self::$database->real_escape_string($_REQUEST["br__email"])."'");
					
					$subject = "Forgot Password: Project 1";
					$headers  = 'MIME-Version: 1.0' . "\r\n";			
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";			
					$headers .= "From: Project 1 <support@project1.com>\r\nReply-To: ".$t_obj->email."\r\nReturn-Path: support@project1.com\r\n";
					mail($r->email,$subject,$email_msg,$headers);					
					
					$i++;
					$return_data["result_data"] = $rdata;
					$return_data["result"] = true; 
					$return_data["msg"] = 'Your password has been successfully reset!'; 
				}
			}
			return $return_data;			
		}
		
		static public function resetpass_submit()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			$res = self::$database->query("SELECT * FROM users_details WHERE email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");

			$return_data["result"] = false; 
			$return_data["msg"] = 'Account does not exist, Please try again!'; 				

			if($res->num_rows > 0)
			{
				$i = 0;
				while ($r = $res->fetch_object())
				{
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$string = '';
					for ($i = 0; $i < 30; $i++) {
						$string .= $characters[mt_rand(0, strlen($characters) - 1)];
					}
					
					$email_msg = "
					<p>Hi ".$r->first_name.",</p>
					<p>You recently requested to reset your password for your account. Click the link below to reset it.</p>
					<p><a href='http://ekela.co.uk/ekela.co.uk/quote/?page=br__customer_page&action=resetpass_form&u=".$r->email."&scode=".$string."'>http://ekela.co.uk/ekela.co.uk/quote/?page=br__customer_page&action=resetpass_form&u=".$r->email."&scode=".$string."</a></p>
					<p>If you did not request a password reset, please ignore this email or reply to let us know.</p>
					<p>Thanks,<br />
					Project 1 Team</p>";
					
					self::$database->query("UPDATE users_details SET scode='".$string."' WHERE email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");
					
					$subject = "Forgot Password: Project 1";
					$headers  = 'MIME-Version: 1.0' . "\r\n";			
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";			
					$headers .= "From: Project 1 <support@project1.com>\r\nReply-To: ".$t_obj->email."\r\nReturn-Path: support@project1.com\r\n";
					mail($r->email,$subject,$email_msg,$headers);					
					
					$i++;
					$return_data["result_data"] = $rdata;
					$return_data["result"] = true; 
					$return_data["msg"] = 'We emailed a password reset link to '.$_REQUEST["br__email"].' Please follow the instructions in that email.'; 
				}
			}
			return $return_data;			
		}
		
		static public function br__login()
		{
			$return_data = array();
			$return_data["redirect"] = '?page=br__dashboard_page';
			$password = self::$database->real_escape_string($_REQUEST["br__password"]);
			$res = self::$database->query("SELECT * FROM users_details WHERE email='".self::$database->real_escape_string($_REQUEST["br__email"])."' LIMIT 1");
			
			if($res->num_rows > 0) 
			{
				$rdata = array();
				$i = 0;
				while ($r = $res->fetch_object())
				{
					
					//if(true)
					if (password_verify($password, $r->password)) 
					{
						$_SESSION["br__customer_id"] = $r->id;
						$_SESSION["br__type"] = $r->type;
						$rdata[$i]['id'] = $r->id;
						$rdata[$i]['first_name'] = $r->first_name;
						$rdata[$i]['last_name'] = $r->last_name;
						$rdata[$i]['address'] = $r->address;
						$rdata[$i]['city'] = $r->city;
						$rdata[$i]['state'] = $r->state;
						$rdata[$i]['phone'] = $r->phone;
						$rdata[$i]['email'] = $r->email;
						$i++;						
						$return_data["result_data"] = $rdata;
						$return_data["result"] = true; 
						$return_data["msg"] = 'Successfully Login!'; 
					}
					else
					{
						$_SESSION["br__customer_id"] = "";
						$return_data["result"] = false; 
						$return_data["msg"] = 'Invalid Password, Please try again!';
					}					
				}
			}
			else
			{
				//$_SESSION["br__customer_id"] = "";
				$return_data["result"] = false; 
				$return_data["msg"] = 'Account does not exist, Please try again!'; 
			}
			return $return_data;			
		}	
		
		static public function br__get_details()
		{
			$return_data = array();
			$return_data["redirect"] = '';
			$res = self::$database->query("SELECT * FROM users_details");
			
			if($res->num_rows > 0) 
			{
				$rdata = array();
				$i = 0;
				while ($r = $res->fetch_object())
				{
					$rdata[$i]['id'] = $r->id;
					$rdata[$i]['first_name'] = $r->first_name;
					$rdata[$i]['last_name'] = $r->last_name;
					$rdata[$i]['address'] = $r->address;
					$rdata[$i]['city'] = $r->city;
					$rdata[$i]['state'] = $r->state;
					$rdata[$i]['phone'] = $r->phone;
					$rdata[$i]['email'] = $r->email;
					$rdata[$i]['type'] = $r->type;
					$rdata[$i]['password'] = $r->password;
					$i++;
				}				
				$return_data["result_data"] = $rdata;
				$return_data["result"] = true; 
				$return_data["msg"] = 'Successfully Saved!'; 
			}
			else
			{
				$return_data["result"] = false; 
				$return_data["msg"] = 'Not found!'; 
			}
			return $return_data;			
		}		
		
		
		
		
		
		
		
		public static function smartquote( $value, $valType = "" ) 
		{
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
						$value = "'" . self::$database->real_escape_string( trim( htmlspecialchars_decode( $value, ENT_QUOTES ) ) ) . "'";
					}
				} 
				else 
				{
					if ( $valType == 'MYSQL_STRING' ) 
					{
						$value = "'" . self::$database->real_escape_string( trim( htmlspecialchars_decode( $value, ENT_QUOTES ) ) ) . "'";
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
	}
