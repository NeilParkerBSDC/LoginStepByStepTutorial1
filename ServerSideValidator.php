<?php
$password=$_POST["password"];

if ($password=="Password1") {
	header( 'Location: ServerSide2.html' ) ;
    }
else {
	header( 'Location: ServerSide1.html' ) ;	
	}


?>
