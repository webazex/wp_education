<?php
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: info@pl-education.com.ua\r\n";
$headers .= "Reply-To: info@pl-education.com.ua\r\n";
require $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
//$to = get_post_meta(15, 'callback_email')[0];
$to = get_field('callback_email', 15);
$type = 'type';
switch ( $_POST['type'] ):
	case "fForm":
		$subject   = "Хочу узнать о программе";
		$message   = '';
		$name      = htmlspecialchars( strip_tags($_POST['fio']) );
		$phone     = htmlspecialchars( strip_tags( $_POST['tel']) );
		$questions = htmlspecialchars( strip_tags( $_POST['text']) );
		$message   = ' Письмо от ' . $name . '<br> Номер для связи: ' . $phone . '<br> ' . $questions;
		$type = "verified";
		break;
	case "cForm":
		$subject = "Нужна обратная связь";
		$message = '';
		$name    = htmlspecialchars( strip_tags( $_POST['fio'] ));
		$phone   = htmlspecialchars( strip_tags( $_POST['tel']) );
		$message = ' Письмо от ' . $name . '<br> Номер для связи: ' . $phone . '<br> ' . ' свяжитесь со мной.';
        $type = "verified";
		break;
	case "oForm":
		$subject    = "Поступление онлайн";
		$message    = '';
		$name       = htmlspecialchars( strip_tags( $_POST['fio'] ));
		$phone      = htmlspecialchars( strip_tags( $_POST['tel'] ));
		$speciality = htmlspecialchars( strip_tags( $_POST['speciality'] ));
		$email      = htmlspecialchars( strip_tags( $_POST['mail']) );
		$message    = ' Письмо от ' . $name . '<br> Меня интересует специальность: ' . $speciality . '<br>  Номер для связи: ' . $phone . ' или почта: ' . $email . '<br> ' . ' свяжитесь со мной.';
        $type = "verified";
		break;
	default:
		$type = false;
endswitch;
if ( $type === false ):
	echo "0";
endif;
if($type === "verified"):
	$s = mail( $to, $subject, $message, $headers);
	if ( $s === true ):
		echo "2";
	else:
		echo "1";
	endif;
endif;


