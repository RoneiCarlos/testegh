<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	
	# salvando os dados no banco
	$nome = $_POST["nome"];
    $tel = $_POST["telefone"];
    $email = $_POST["email"];

    $mail = new PHPMailer(true);


    # enviando o email

	try {
	    $mail = new PHPMailer;
		$mail->isSMTP(); 
		$mail->SMTPDebug = 2;
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 587; 
		$mail->SMTPSecure = 'tls'; 
		$mail->SMTPAuth = true;
		$mail->Username = 'peagapemailer@gmail.com';
		$mail->Password = 'peagapemailer1!';
		$mail->setFrom("peagapemailer@gmail.com", "Ronei Carlos Kunkel");
		$mail->addAddress($email, $nome);
		$mail->Subject = 'Teste de email PHPMailer';
		$mail->msgHTML("<h1>Título Teste</h1><br><p>paragrafo teste</p>");
		$mail->AltBody = 'Mensagem de teste';
		$mail->send();
	    header("Location:../index.php");
	} catch (Exception $e) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	}

	# salvando o email no banco

	try {
        $pdo = new PDO('mysql:host=localhost;dbname=ghteste', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("INSERT INTO tb_email VALUES('".$nome."','".$tel."','".$email."')");
        $stmt->execute();
        
    }catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }    
?>