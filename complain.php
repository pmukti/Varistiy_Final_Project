<?php require_once "connection.php";?>

<?php

if(isset($_POST['submit'])){
  var_dump($_POST);



  $full_name = $_POST["full_name"];

  $phone_number = $_POST["phone_number"];

  $email = $_POST["email"];

  $message = $_POST["message"];


  $sql= "INSERT INTO `project_data`.`sms_setting` (`id`, `full_name`, `phone_number`, `email`,`message`) VALUES (NULL, '$full_name', $phone_number, '$email','$message')";


 $res =mysql_query($sql);
  if($res)

  {

    header("location:contact.php");

   
  }


  else
  {
     echo"data is not inserted";
      
 }


}
?>