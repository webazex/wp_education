<?php
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Письмо с сайта: http://dsb02.webazex.beget.tech/\r\n";
$headers .= "Reply-To: reply-to@example.com\r\n";
require $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
//ini_set( 'error_reporting', E_ALL );
$to = get_post_meta(15, 'callback_email')[0];
switch ( $_POST['type'] ):
	case "fForm":
		$subject   = "Хочу узнать о программе";
		$message   = '';
		$name      = htmlspecialchars( strip_tags($_POST['fio']) );
		$phone     = htmlspecialchars( strip_tags( $_POST['tel']) );
		$questions = htmlspecialchars( strip_tags( $_POST['text']) );
		$message   = ' Письмо от ' . $name . '<br> Номер для связи: ' . $phone . '<br> ' . $questions;
		break;
	case "cForm":
		echo "cForm";
		$subject = "Нужна обратная связь";
		$message = '';
		$name    = htmlspecialchars( strip_tags( $_POST['fio'] ));
		$phone   = htmlspecialchars( strip_tags( $_POST['tel']) );
		$message = ' Письмо от ' . $name . '<br> Номер для связи: ' . $phone . '<br> ' . ' свяжитесь со мной.';
		break;
	case "oForm":
		$subject    = "Поступление онлайн";
		$message    = '';
		$name       = htmlspecialchars( strip_tags( $_POST['fio'] ));
		$phone      = htmlspecialchars( strip_tags( $_POST['tel'] ));
		$speciality = htmlspecialchars( strip_tags( $_POST['speciality'] ));
		$email      = htmlspecialchars( strip_tags( $_POST['mail']) );
		$message    = ' Письмо от ' . $name . '<br> Меня интересует специальность: ' . $speciality . '<br>  Номер для связи: ' . $phone . ' или почта: ' . $email . '<br> ' . ' свяжитесь со мной.';
		break;
	default:
		$type = false;
endswitch;
if ( $type === false ):
	echo "0";
else:
	$s = mail( $to, $subject, $message, $headers);
	if ( $s === true ):
		echo "2";
	else:
		echo "1";
	endif;
endif;


