<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once ROOT_PATH . '/phpmailer/Exception.php';
require_once ROOT_PATH . '/phpmailer/PHPMailer.php';
require_once ROOT_PATH . '/phpmailer/SMTP.php';

$mail = new PHPMailer(true);

// STYLE FOR HTML CONTENT
$section_style   = "width: 100%; display: block; background: #edf0f2!important;";
$container_style = "max-width: 600px; width: 100%; margin: 8px auto; display: block; border: 1px solid #ddd; border-radius: 12px; -webkit-box-shadow: 0px 0px 30px 0px #0000001a; -moz-box-shadow: 0px 0px 30px 0px #0000001a; box-shadow: 0px 0px 30px 0px #0000001a;background: #ffffff!important; overflow: hidden;";
$title_style = "display: block; text-align: center; background: #7f54b3; padding: 16px;";
$title_style_h1 = "font-size: 32px; color: #fff; margin: 0;";
$table_container = "padding: 40px 16px;";
$table_area = "width: 100%; border-collapse: collapse; border: 1px solid #c3c3c3;";
$table_td = "padding: 8px 12px; border: 1px solid #c3c3c3;";

if (isset($_POST['Enroll'])) {

	$Enroll_01=$_POST['Enroll_01'];
	$Enroll_02=$_POST['Enroll_02'];
	$Enroll_03=$_POST['Enroll_03'];

	$htmlContent = '

		<section style="' . $section_style . '">
			<div style="' . $container_style . '">
				<div style="' . $title_style . '"> <h1 style="' . $title_style_h1 . '"> Enroll Form </h1> </div>
				<div style="' . $table_container . '">
					<table style="' . $table_area . '">
						<tr> <td style="' . $table_td . '"> Name   </td> <td style="' . $table_td . '"> '.$Enroll_01. ' </td> </tr>
						<tr> <td style="' . $table_td . '"> Phone  </td> <td style="' . $table_td . '"> '.$Enroll_02. ' </td> </tr>
						<tr> <td style="' . $table_td . '"> Course </td> <td style="' . $table_td . '"> '.$Enroll_03. ' </td> </tr>
					</table>
				</div>
			</div>
		</section>
	';

	try {
		$mail->isSMTP();
		$mail->Host       = 'smtp.gmail.com'; //smtp.hostinger.com
		$mail->SMTPAuth   = true;
		$mail->Username   = 'usersentform@gmail.com';
		$mail->Password   = 'tdtunxnwqcvwkzbz';
		$mail->SMTPSecure = 'tls'; // ssl
		$mail->SMTPAutoTLS = false;
		$mail->Port       = 587; //465

		$mail->setFrom('usersentform@gmail.com'); // From Email
		$mail->addAddress('webdesigner.ayron@gmail.com'); // To Email

		$mail->isHTML(true);
		$mail->Subject = $_POST["Enroll_01"];
		$mail->Body = $htmlContent;
		$mail->send();

		echo "<meta http-equiv='refresh' content='0'>";
		echo "<script>alert('Your application is Submitted Successfully, We Will Contact You Shortly')</script>";

	} catch (Exception $e){
		echo "<script>alert('Something Wrong, Your Message Not Sent')</script>";
	}
}

?>