<?php

if(isset($_POST)) {

   
    $_isim = $_POST["isim"];
    $_eposta = $_POST["eposta"];
    $_telefon = $_POST["telefon"];

	include_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SetLanguage("en", "language/");
	$mail->CharSet = "utf-8";
	$mail->Host = "mail.example.com"; // web server host information
	$mail->SMTPAuth = true;    // It must be false if not to login with SMTP_username.
	$mail->Username = "example@example.com";  // e-mail username
	$mail->Password = "LgI(mj0z6]ym"; // Mail password
	$mail->From = "example@example.com"; // Who is the mail from?
	$mail->FromName = "Web Form Mail | https://templatemonster.com/author/garantiwebt"; // Mailbox Incoming Header
	$mail->AddAddress("example@example.com"); // address to send mail
	$mail->Subject = "Templatemonster Garantiwebt Contact Form";
	$mail->IsHTML(true);
	$mail->Body = "Mail İçeriği ; <br>  İsim Soyisim : " .$_isim." <br> E-Posta : " .$_eposta." <br> Telefon : ".$_telefon." <br>";

	if (!$mail->Send()) {
		echo "Error ----->>>>>       " . $mail - ErrorInfo;
	}


	echo "Success";

                   

}


