<?php 
session_start();

    require_once('connection.php');	
?>
<html>
	<head><meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Registation success page</title><link rel="stylesheet" type="text/css" href="style.css">
	</head>
		<body><center><?php
			require_once("connection.php");

		  
			$name = $_POST['name'];
		    $email = $_POST['email'];
		    $password = $_POST['password'];
		    $address = $_POST['address'];
		    
				
				
				

	$allowExtend=array("jpg","jpeg","gif","png");//kon kon extention ar file  amra upload korte cai
    $extentionn = explode("." ,$_FILES['fileupload']['name']);
	if(($_FILES['fileupload']['type']='image/gif')||
	  ($_FILES['fileupload']['type']='image/png')||
	  ($_FILES['fileupload']['type']='image/jpg')||
	  ($_FILES['fileupload']['type']='image/jpeg')
	  &&($_FILES['fileupload']['size']<20000)
	  && in_array( $extentionn,$allowExtend)
	  )
		{
	
			if($_FILES['fileupload']['error'] > 0) //file a error achakina check korar jonno
				{
				echo"error".$_FILES['fileupload']['error']."<br>";
		
				}
			
				else
				{
					move_uploaded_file($_FILES['fileupload']['tmp_name'],"upload/".$_FILES['fileupload']['name']);// image ti k temporari thake upload folder a naya hoyecha
									
				}
				$fileurl="upload/".$_FILES['fileupload']['name'];
				
			
				echo $fileurl;
				
		}
	else
		{
		
		echo"invalid file";
		
		}

			
		
/*$re=mysql_query("INSERT INTO `rhidylogin`.`admintbl` (`id`, `fname`, `lname`, `uname`, `email`, `contract`, `psd`, `type`, `image`)
VALUES (NULL,'$fname','$lname', '$uname', '$email', '$cotract', '$psd', '$type', '$fileurl')");
*/

                         $sql = "INSERT INTO users (name, email, password, address, image) VALUES('$name','$email','$password','$address','$filurl')";


			
				if($re)
				{
					echo "Registation Successfull";
 
				}
				else
				{
					echo "<h1>Registation not Successfull</h1>"	;
				
				}
 



?>