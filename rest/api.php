<?php
	require_once("Rest.inc.php");
	include_once("../includes/config.php");
	class API extends REST {
	
		public $data = "";  		
		
		private $db = NULL;
	
		public function __construct(){
			parent::__construct();				// Init parent contructor
			$this->dbConnect();					// Initiate Database connection
		}
		
		/*
		 *  Database connection 
		*/
		private function dbConnect(){
			$this->db = mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);
			if($this->db)
				mysql_select_db(DB,$this->db);
		}
		
		/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		}
		
		/* 
		 *	Simple login API
		 *  Login must be POST method
		 *  email : <USER EMAIL>
		 *  pwd : <USER PASSWORD>
		 */
		
		private function account(){
			// Cross validation if the request method is POST else it will return "Not Acceptable" status
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}			
			$first_name = $this->_request['first_name'];		
			$last_name = $this->_request['last_name'];
			$address = $this->_request['address'];		
			$member_number = $this->_request['member_number'];	
			$email = $this->_request['email'];
			$phone_number = $this->_request['phone_number'];
			$mobile = $this->_request['mobile'];	
			$signature = $this->_request['signature'];
			$current_datetime = new DateTime(); 
			$birth_date = $this->_request['birth_date'];	
			$birth_date_format = substr($birth_date, 6, 4).'-'.substr($birth_date, 3, 2).'-'.substr($birth_date, 0, 2);
			$name_of_fund_1 = $this->_request['name_of_fund_1'];
			$name_of_fund_2 = $this->_request['name_of_fund_2'];
			$name_of_fund_3 = $this->_request['name_of_fund_3'];
			$name_of_fund_4 = $this->_request['name_of_fund_4'];
			$name_of_fund_5 = $this->_request['name_of_fund_5'];
			$previous_name = $this->_request['previous_name'];
			$name_of_fund = $name_of_fund_1;
			if(trim($name_of_fund_2)!=''){
				$name_of_fund .= ', '.$name_of_fund_2;
			}	
			if(trim($name_of_fund_3)!=''){
				$name_of_fund .= ', '.$name_of_fund_3;
			}
			if(trim($name_of_fund_4)!=''){
				$name_of_fund .= ', '.$name_of_fund_4;
			}
			if(trim($name_of_fund_5)!=''){
				$name_of_fund .= ', '.$name_of_fund_5;
			}			
			$previous_address = $this->_request['previous_address'];
			$result = mysql_query("INSERT INTO accounts (member_number, first_name, last_name, address, email, phone_number, mobile, birth_date, signature, date_created, date_modified ) 
			VALUES ('".$member_number."', '".mysql_real_escape_string($first_name)."', '".mysql_real_escape_string($last_name)."', '".$address."', '".$email."', '".$phone_number."', '".$mobile."', '".$birth_date_format."', '".$signature."', NOW(), NOW())", $this->db);
			if($result) {
				$account_id = mysql_insert_id();
				if(trim($name_of_fund_1)!=''){
					$result_fund = mysql_query("INSERT INTO funds  (account_id, fund_name, name, address) 
					VALUES ('".$account_id."', '".mysql_real_escape_string($name_of_fund_1)."', '".mysql_real_escape_string($previous_name)."', '".$previous_address."')", $this->db);							
				} 
				if(trim($name_of_fund_2)!=''){
					$result_fund = mysql_query("INSERT INTO funds  (account_id, fund_name, name, address) 
					VALUES ('".$account_id."', '".mysql_real_escape_string($name_of_fund_2)."', '".mysql_real_escape_string($previous_name)."', '".$previous_address."')", $this->db);							
				} 
				if(trim($name_of_fund_3)!=''){
					$result_fund = mysql_query("INSERT INTO funds  (account_id, fund_name, name, address) 
					VALUES ('".$account_id."', '".mysql_real_escape_string($name_of_fund_3)."', '".mysql_real_escape_string($previous_name)."', '".$previous_address."')", $this->db);							
				}
				if(trim($name_of_fund_4)!=''){
					$result_fund = mysql_query("INSERT INTO funds  (account_id, fund_name, name, address) 
					VALUES ('".$account_id."', '".mysql_real_escape_string($name_of_fund_4)."', '".mysql_real_escape_string($previous_name)."', '".$previous_address."')", $this->db);							
				} 
				if(trim($name_of_fund_5)!=''){
					$result_fund = mysql_query("INSERT INTO funds  (account_id, fund_name, name, address) 
					VALUES ('".$account_id."', '".mysql_real_escape_string($name_of_fund_5)."', '".mysql_real_escape_string($previous_name)."', '".$previous_address."')", $this->db);							
				} 												 												
			}				
			if($result){
				$to = 	EMAIL_TO;
				$subject = 	'"Snap4m New Account';
				$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
				  	 			  /*	*/
				$headers = 	"From:".EMAIL_FROM."\r\n";
				$headers .= 	"MIME-Version: 1.0\r\n"
				  	."Content-Type: multipart/mixed; boundary=\"{$mime_boundary}\"";					  	 
	          $message = "This is a multi-part message in MIME format.\n\n".
	            "--{$mime_boundary}\n" .
	            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
	            "Content-Transfer-Encoding: 7bit\n\n";
	            $message .= "Name: ".htmlspecialchars($first_name).' '.htmlspecialchars($last_name)."\r\n"
					."Member No: ".$member_number."\r\n"
					."Birthdate: ".$birth_date."\r\n"
					."Address: ".$address."\r\n"
					."Email: ".$email."\r\n"
					."Phone No: ".$phone_number."\r\n"
					."Mobile: ".$mobile."\r\n"
					."Name of Fund: ".htmlspecialchars($name_of_fund)."\r\n"
					."Previous Name: ".htmlspecialchars($previous_name)."\r\n"
					."Previous Address: ".$previous_address."\r\n\r\n"."Signature:\n\n";
	         // attachment with mime babble
	             $message .= "--{$mime_boundary}\n";							  	 
				$file = 	file_get_contents("http://snap4m.com/signatures/".$signature);						  	 
				$message .= 	"Content-Type: image/png; name=\"".$signature."\"\r\n"
				  	."Content-Transfer-Encoding: base64\r\n"
				  	."Content-disposition: attachment; file=\"".$signature."\"\r\n"
				  	."\r\n"
				  	.chunk_split(base64_encode($file))
				  	."--{$mime_boundary}--\n";
				
				if(mail($to, $subject, $message, $headers))
				{
				     $this->response('success', 200);
				} else {
				    $this->response('success', 200);
				} 			             													
				//$this->response('success', 200);
			}
			else {
				// If invalid inputs "Bad Request" status message and reason
				$error = array('status' => "Failed", "msg" => "Add Failed");
				$this->response($this->json($error), 400);						
			}			
		}
		
		private function email(){	
			// Cross validation if the request method is GET else it will return "Not Acceptable" status
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}
			$email = $this->_request['email'];
			$sql = mysql_query("SELECT email FROM accounts WHERE email = '".$email."'", $this->db);
			if(mysql_num_rows($sql) > 0){
				$result = array();
				while($rlt = mysql_fetch_array($sql,MYSQL_ASSOC)){
					$result[] = $rlt;
				}
				// If success everythig is good send header as "OK" and return list of users in JSON format
				echo json_encode(array('valid' =>FALSE));
			} else {
				echo json_encode(array('valid' =>TRUE));
			}
			//$this->response('',204);	// If no records "No Content" status
		}
		
		private function signature(){
			// Cross validation if the request method is POST else it will return "Not Acceptable" status
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}			
			$first_name = $this->_request['first_name'];		
			$last_name = $this->_request['last_name'];	
			$data = $this->_request['data'];
			$current_datetime = new DateTime(); 
			$sig_name = strtolower(preg_replace("/[\W\s+]/","", $first_name.'_'.$last_name.'_'.$current_datetime->format('Y-m-d_His')));
			$signature = base64_decode(str_replace("data:image/png;base64,","",$data));
			$result=file_put_contents("../signatures/".$sig_name.".png",$signature);	
			if($result){
				     $this->response($sig_name.'.png', 200);
			}
			else {
				// If invalid inputs "Bad Request" status message and reason
				$error = array('status' => "Failed", "msg" => "Signature Failed");
				$this->response($this->json($error), 400);						
			}		
		}		
		
		/*
		 *	Encode array into JSON
		*/
		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	
	$api = new API;
	$api->processApi();
?>