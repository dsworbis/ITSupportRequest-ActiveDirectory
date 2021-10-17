<?php

function getUser($user, $pass){
	try{


//ToDo
// Base DN bezeichnet die oberste OU unter der die User zu finden sind. 
$basedn = "OU=FillOutOu,DC=FillOutDC,DC=FillOutDC";
$server = "ldap://DC001.DOMAIN.de:389";

// da der Zugriff auch ohne Anmeldung möglich sein soll, hab ich einen extra User im AD angelegt, um mich mit dem Server zu verbinden.

$username = 'skv\\' . $user;
$password = $pass;

$ldap_port = "389";

// LDAP Abfrage 
// ich hab einen erweiterten Filter genommen, da ich nicht nur die User des AD haben wollte, sondern auch Kontakteinträge.
// $filter = "(&(objectClass=user)(objectCategory=person)(cn=*))";
$filter="(sAMAccountName='".$user."')";

// Verbindung zum AD herstellen
$connectid = ldap_connect($server) or die( "Der LDAP-URI konnte nicht geparst werden" );

try{
	$binding = ldap_bind($connectid,$username,$password)  or die ("Fehler beim Binding");
}catch (Exception $ex){
	echo $ex;
}
// Ihr könnt dies auch nutzen, um z.B. Usernamen und Passwort z.B. fürs Intranet zu verifizieren.
 //or die("Fehler");
 
 $attributes_ad = array("displayName","description","cn","givenName","sn","mail","co","mobile","company","displayName");
// define base
$base ="";

// in my script I search based on e-mail, $email variable is passed from the form
$result = ldap_search($connectid, $basedn, "SamAccountName=dworbis", $attributes_ad) or die ("Error in search query");

// put search results into the array ($conn variable is defined in the included 'ad_con.php')
$info = ldap_get_entries($connectid, $result);

//Now, to display the results we want:
for ($i=0; $i<$info["count"]; $i++)
    {
    // to show the attribute displayName (note the case!)
    echo "Guten Tag! " . $info[$i]["displayname"][0];
	$_SESSION['u_name'] =$info[$i]["displayname"][0];
	$_SESSION['u_abteilung'] =$info[$i]["description"][0];
	$_SESSION['u_email'] =$info[$i]["mail"][0];
	try{
		if(isset($_SERVER['REMOTE_ADDR'])){
			$result = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		
		}
		
	}catch(Exception $err){
			print $err;
	}
	$_SESSION['u_computername'] = $result; //dns_get_record($_SERVER['REMOTE_ADDR'])[0]['host'];
	$_SESSION['u_telefon'] =$info[$i]["telephoneNumber"][0];
	$_SESSION['u_standort'] =$info[$i]["company"][0];
	
	
   
    }
 /*
try{
	$binding = @ldap_bind($connectid,$username,$password);
}catch (Exception $ex){
	echo $ex;
}


// AD auslesen
$sr = ldap_search($connectid,$basedn,$filter);
//$justthese = array("ou", "sn", "vorname", "mail");

//$sr=@ldap_search($connectid, $basedn, $filter);
try{
$info = @ldap_get_entries($connectid,$sr);
}catch(Exception $e){echo $e;}
echo $info["count"] . " Einträge gefundene\n";
//echo ldap_get_entries($connectid,$sr);
//echo "s" . $info;
// in $result sind nun alle User mit allen Informationen enthalten. */
}catch (Exception $e) {
    echo $e;
}
}


?>