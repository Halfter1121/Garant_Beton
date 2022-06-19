<?php   




$to = 'badaev1121@yandex.ru'; 
$subject = 'Вопрос с сайта';


$name = clear_data($_POST['User_name']);
$email = clear_data($_POST['User_email']);
$question = clear_data($_POST['User_question']);
$message = 'ФИО человека: '. $name."\n" . 'email: ' . $email. "\n"  . 'Его вопрос: ' . $question;

function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val=htmlspecialchars($val);
    return $val;
}



if(isset($_POST['submit'])) {
mail($to, $subject, $message, );
// echo " Письмо отправлено на почту "; 
}
else{
  echo " Ошибка( "  ;
}



// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php'; 
// require 'PHPMailer/src/PHPMailer.php'; 

// $mail = new PHPMailer(true);
// $mail ->CharSet= 'utf-8';
// $mail->setLanguage('ru', 'PHPMailer/language/'); 
// $mail->IsHTML(true);
// $name = $_POST['User_name'];
// $email= $_POST['User_email'];
// $question= $_POST['User_question'];


// // $mail->isSMTP();
// // $mail->Host = 'smtp.mail.ru';
// // $mail->SMTPAuth = true;
// // $mail->Username='badaev1121@bk.ru';  //от кого будет письмо
// // $mail->Password='BoBa22848!';         // пароль почты от кого будет письмо
// // $mail->smtpSecure='ssl';
// // $mail->Port = 465;
//  $mail-> setFrom('badaev1121@bk.ru'); //от кого будет письмо
// $mail-> addAddress('badaev1121@yandex.ru'); //кому будет письмо





// $mail->Body ='' .$name . 'оставил вопрос, его почта ' .$email. '<br> его вопрос:' .$question;
// $mail->AltBody = '';
    
// if(!$mail->send())
// {
//     echo 'Error';
// }
// else 'Ваша заявка успешно отправлена';

 ?>   