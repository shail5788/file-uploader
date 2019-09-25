<?php
 require('/vendor/autoload.php');
 $config= require("config.php");
 use Aws\S3\S3Client;
 use Aws\S3\Exception\S3Exception;
 class CoreClass {
     public $token;
     public $config;
     public $s3Obj;
 	 
 	 public function __construct($config){
         $this->token='5726ffec6071cb6ec47ac8f9';
         $this->config=$config;
         $this->s3Obj=$this->s3Config();

 	  }

 	  public function s3Config(){

          try{
			 		$s3=S3Client::factory([ 
			 			  "credentials"=>[
			 			  	"key"=>$this->config['s3']['key'],
					 		"secret"=>$this->config['s3']['secret']
			 			  ],
			 			  "version"=>"latest",
			 			  "region"=>"us-west-2"
					]);

			   
			 }catch(Exception $e){
					die("error :".$e->getMessage());
			 }
         return $s3;			 
 	  }

 	  public function upload_file($file){
               		  
 	  		try {
				// Uploaded:
				$name=$_FILES['file']['name'];
				$tmp_file = $_FILES["file"]['tmp_name'];
			    $extension=explode('.', $name);
			    $extension=strtolower(end($extension));

			    $key =md5(uniqid());
			    $tmp_file_name="{$key}.{$extension}";
			    $tmp_file_path="files/{$tmp_file_name}";

			    move_uploaded_file($tmp_file, $tmp_file_path);
				$result=$this->s3Obj->putObject(
					array(
						'Bucket'=>$this->config["s3"]['bucket'],
						'Key' =>  "uploads/{$name}",
						"Body"=> fopen($tmp_file_path,'rb'),
						'ACL'=>"public-read"
					)
				);
			    unlink($tmp_file_path);	
		    	print_r($result); 		
			} catch (S3Exception $e) {
				die('Error:' . $e->getMessage());
			} catch (Exception $e) {
				die('Error:' . $e->getMessage());
			}
         return $result;
 	  }

 	  public function authentication($username,$password){
        $post=[
		    	'email' => $username,
		    	'password' => $password,
		    	'token'   => $this->token,
			];
        $payload = json_encode($post); 

        // $result=$this->brr_api()           

 	  }
 	  public function brr_api($url,$data=null,$method=null){

 	  		$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLINFO_HEADER_OUT, true);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

			//Set HTTP Header for POST request 
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			    'Content-Type: application/json',
			    'Content-Length: ' . strlen($data))
			);
            // Submit the POST request
			$result = curl_exec($ch);
			var_dump($result);
			// Close cURL session handle
			curl_close($ch);
			return $result;

 	  }
    public function logout(){

		  session_destroy();
          unset($_SESSION['user']['info']);
          return ["status"=>true,"message"=>"Logout successfully!"];
    }

 } 

 $coreClass=new CoreClass($config);               

 ?>