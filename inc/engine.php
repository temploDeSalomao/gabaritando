<?php
// require('./gabaritando/wp-content/themes/gabaritando/inc/mailler/config.php');

error_reporting(E_ALL);
ini_set('display_errors','On');

include('mailler/config.php');

global $acao,$nome,$mensagem,$tel,$data,$hora;

$GLOBALS['acao'] = $_POST['action'];
$GLOBALS['nome'] = $_POST['userName'];
$GLOBALS['mensagem'] = isset($_POST['message']) ? $_POST['message']  : '' ;
$GLOBALS['tel'] = $_POST['userTel'];
$GLOBALS['data'] =  isset($_POST['data']) ? $_POST['data']  : '' ;
$GLOBALS['hora'] =  isset($_POST['horario']) ? $_POST['horario']  : '' ;

switch ($acao) {
	case 'weCall':
		$GLOBALS['mensagem'] = "Solicitando ligação imediata";
		break;
	case 'weCallLater':
		$GLOBALS['mensagem'] = "Solicitando ligação para:&nbsp;". $data . "&nbsp;às&nbsp;" . $hora ; 
		break;
	case 'message':
		$GLOBALS['mensagem'] = "Contato através do site. Mensagem do usuário:&nbsp;" . $GLOBALS['mensagem'];
		break;		
}

$email='<!doctype html> <meta charset="UTF-8"> 
		<div style="box-sizing:border-box;border:2px solid #2c3997;max-width:900px;width:900px;min-height:150px;background:#fff;border-radius:10px; color:#000;"> <h2 style="box-sizing:border-box;background:#2c3997;color:#fff;padding:16px;display:block;margin:0;border-top-left-radius:5px;border-top-right-radius:5px">Gabaritando Enem</h2> <div style="box-sizing:border-box;max-width:900px;width:100%;min-height:150px;padding:20px;background:#fff;border-radius:10px;text-transform:uppercase"><img style="box-sizing:border-box;display:block;margin:15px auto" src="http://gabaritandoenem.com.br/wp-content/themes/gabaritando/assets/images/logo/logo-gabaritando-mobile.jpg" class="CToWUd"> <p style="box-sizing:border-box"></p><div style="box-sizing:border-box;margin-top:27px"><span class="im"> <h3 style="box-sizing:border-box">Informações de contato</h3> <header style="box-sizing:border-box"> <div style="box-sizing:border-box;font-weight:bold;width:calc(100%/3);float:left;border-top:1px solid #000;border-left:1px solid #000;padding:0 20px;padding:10px">Nome </div><div style="box-sizing:border-box;font-weight:bold;width:calc(100%/3);float:left;border-top:1px solid #000;padding:0 20px;padding:10px"></div><div style="box-sizing:border-box;font-weight:bold;width:calc(100%/3);float:left;border-top:1px solid #000;border-left:1px solid #000;padding:0 20px;padding:10px;border-right:1px solid #000">Telefone </div></header> </span> <div style="box-sizing:border-box"> <div style="box-sizing:border-box;border-bottom:1px solid #000;width:calc(100%/3);float:left;border-top:1px solid #000;border-left:1px solid #000;padding:0 20px;padding:10px">'.$GLOBALS['nome'].'</div><div style="box-sizing:border-box;border-bottom:1px solid #000;width:calc(100%/3);float:left;border-top:1px solid #000;padding:0 20px;padding:10px">&nbsp;</div><div style="box-sizing:border-box;border-bottom:1px solid #000;width:calc(100%/3);float:left;border-top:1px solid #000;border-left:1px solid #000;padding:0 20px;padding:10px;border-right:1px solid #000"><a href="tel:'.$GLOBALS['tel'].'" target="_blank">'.$GLOBALS['tel'].'</a></div></div></div><div style="box-sizing:border-box;border:1px solid #2c3997;clear:both;padding:0 20px;margin-top:20px;display:inline-block;width:100%;padding:10px">Mensagem: </div><div style="box-sizing:border-box;list-style:none;clear:both;line-height:34px;border:1px solid #2c3997;margin-top:0;padding:20px">'.$GLOBALS['mensagem'].'</div></div></div>';


$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP();
$mail->Host = "mail.gabaritandoenem.com.br";

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'no-reply@gabaritandoenem.com.br';
$mail->Password = '3xceler3033';
$mail->CharSet = 'UTF-8';


$mail->setFrom('no-reply@gabaritandoenem.com.br', 'Gabaritando');
$mail->addAddress('vitorblsantos@gmail.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->IsHTML(true);  
$mail->Body=$email;
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  	header("Location: /");
}
