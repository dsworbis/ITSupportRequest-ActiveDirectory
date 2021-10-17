<?php
session_name('itservicesk');
session_start();
ini_set('memory_limit', '-1');
include 'ldap_connection.php';
if(isset($_SESSION['logIn']) && isset($_SESSION['u_standort'])){

	include 'index.html.php'; 
}else{
	include 'login.php';
}

if(isset($_POST['sbtNachricht'])){
	//ToDo
	$header = 'From: it-service@domain.de' . "\r\n" .
    'Reply-To: it-service@domain.de' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
	if(!empty($_FILES['upload-files']['name'])) {
		//declare multiple kinds of email (plain text + attch)
		$nmessage .="Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n";
		$nmessage .="This is a multi-part message in MIME format.\r\n";
		$nmessage .= "--".$uid."\r\n";
		$nmessage .= "Content-type:text/plain; charset=iso-8859-1\r\n";
		$nmessage .= "Content-Transfer-Encoding: 7bit\r\n";
		$nmessage .= $_POST['tf_nachricht']. "\r\n";
		$file_name = $_FILES['upload-files']['name'];  
		$temp_name = $_FILES['upload-files']['tmp_name'];  
		$file_type = $_FILES['upload-files']['type'];
		
		//things u need
		$file = $temp_name;
		$content = chunk_split(base64_encode(file_get_contents($file)));
		uid = md5(uniqid(time()));  //unique identifier
		//attch part
		$nmessage .= "--".$uid."\r\n";
		$nmessage .= "Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n";
		$nmessage .= "Content-Transfer-Encoding: base64\r\n";
		$nmessage .= "Content-Disposition: attachment; filename=\"".$file_name."\"\r\n";
		$nmessage .= $content."\r\n";  //chucked up 64 encoded attch
 
	}
	
	   
	   
	   
	// Send
	try{
		mail($_POST['tf_email'],'Serviceanfrage',$nmessage,$header);
	}catch(Exception $e){
		echo $e;
	}
	
	if(mail($_POST['tf_email'],'Serviceanfrage',$_POST['tf_nachricht'],$header)){
		echo('Nachricht gesendet');
	}else{
		echo('Es ist ein Fehler aufgetreten. Möglicherweise ist der Anhang zu groß oder ein Textfeld ist leer.');
	}
	

}


?>
