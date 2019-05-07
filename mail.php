<?php
//mail(to,subject,message,headers,parameters)
//header('Location:index.php')

$to="zhenqingshigan14@gmail.com";
$subject=$_POST["subjet"];
$message=$_POST["message"];
$from=$_POST["email"];
$headers="From:  .$from" ;

mail($to, $subject, $message, $headers);



echo "mail send! back to index page in 5 seconds.";

//sleep('3');
header("refresh:5;url=index.php");




?>