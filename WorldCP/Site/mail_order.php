<?php

if(isset($_POST["submit"])){

$to = "anwarr@mail.gvsu.edu";
$subject= "test attachment";
$todayis = date("l, F j, Y, g:i a") ;

$contactName = $_POST["contactName"];
$companyName = $_POST["companyName"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$process = $_POST["process"];
$material = $_POST["material"];
$quantity = $_POST["quantity"];
$finishLevel = $_POST["finishLevel"];
$additionalInfo = $_POST["additionalInfo"];


$message = "
Date : $todayis
Contact Name : $contactName
Company Name : $companyName
Email : $email
Phone Number : $phone

Process : $process

Quantity : $quantity
Finish Level : $finishLevel
Additional Info :
	$additionalInfo
";

$mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";
         $headers = "From: $email\r\n" .
         "MIME-Version: 1.0\r\n" .
            "Content-Type: multipart/mixed;\r\n" .
            " boundary=\"{$mime_boundary}\"";
         $message = "This is a multi-part message in MIME format.\n\n" .
            "--{$mime_boundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";
         foreach($_FILES as $userfile)
         {
            $tmp_name = $userfile['tmp_name'];
            $type = $userfile['type'];
            $name = $userfile['name'];
            $size = $userfile['size'];
            if (file_exists($tmp_name))
            {
               if(is_uploaded_file($tmp_name))
               {
                  $file = fopen($tmp_name,'rb');
                  $data = fread($file,filesize($tmp_name));
                  fclose($file);
                  $data = chunk_split(base64_encode($data));
               }
               $message .= "--{$mime_boundary}\n" .
                  "Content-Type: {$type};\n" .
                  " name=\"{$name}\"\n" .
                  "Content-Disposition: attachment;\n" .
                   "Content-Transfer-Encoding: base64\n\n" .
               $data . "\n\n";
            }
         }
         $message.="--{$mime_boundary}--\n";
if (mail($to, $subject, $message, $headers))
   echo "Mail sent successfully.";
else
   echo "Error in mail";



}



?>
