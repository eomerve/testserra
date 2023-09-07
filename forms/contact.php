
<?php
// PHPMailer kütüphanesini projenize ekleyin
require 'PHPMailer/PHPMailerAutoload.php';

// Yeni bir PHPMailer nesnesi oluşturun
$mail = new PHPMailer;

// SMTP ayarlarını yapılandırın
$mail->isSMTP();
$mail->Host = 'mail.ertuncozcan.com'; // SMTP sunucu adresi
$mail->Port = 465; // SMTP bağlantı portu
$mail->SMTPAuth = true;
$mail->Username = 'webwp@ertuncozcan.com'; // SMTP kullanıcı adı
$mail->Password = '71+*gt'; // SMTP şifre

// Gönderici bilgilerini ayarlayın
$mail->setFrom('webwp@ertuncozcan.com');
$mail->addAddress('serra.sahin@ertuncozcan.com'); // Alıcı e-posta adresi
$mail->addReplyTo('serra.sahin@ertuncozcan.com');

// E-posta başlık ve içeriğini ayarlayın
$mail->Subject = 'Subject of the Email';
$mail->Body = 'This is the email message body.';

// E-postayı gönder
if ($mail->send()) {
    echo 'E-posta gönderildi.';
} else {
    echo 'E-posta gönderilemedi. Hata: ' . $mail->ErrorInfo;
}


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require '../phpmailer/PHPMailer.php';
// require '../phpmailer/Exception.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST["name"];
    // $email = $_POST["email"];
    // $subject = $_POST["subject"];
    // $message = $_POST["message"];
    
    // // PHPMailer nesnesini oluşturun
    // $mail = new PHPMailer(true);
    
    // // SMTP ayarları
    // $mail->isSMTP();
    // $mail->Host = 'mail.ertuncozcan.com'; // SMTP sunucu adresi
    // $mail->Port = 465; // SMTP portu (Varsayılan olarak 25 kullanılır)
    // $mail->SMTPAuth = true; // SMTP kimlik doğrulama kullanılıyor mu (true/false)
    // $mail->SMTPSecure = 'ssl'; // Güvenli bağlantı türü (ssl veya tls)
    // $mail->Username = 'webwp@ertuncozcan.com'; // SMTP sunucusuna giriş yapacak kullanıcı adı
    // $mail->Password = '71+*gt'; // SMTP sunucusuna giriş yapacak parola
    
    // // Gönderen ve alıcı bilgileri
    // $mail->setFrom('webwp@ertuncozcan.com'); // Gönderen e-posta ve adı
    // $mail->addAddress('serra.sahin@ertuncozcan.com'); // Alıcı e-posta adresi
    
    // // E-posta başlığı ve içeriği
    // $mail->Subject = $subject; // E-posta başlığı
    // $mail->Body = "Ad: $name\nE-posta: $email\nKonu: $subject\nMesaj:\n$message"; // E-posta içeriği
    
    // // E-postayı gönderme işlemi
    // try {
        // $mail->send();
        // echo "E-posta başarıyla gönderildi.";
    // } catch (Exception $e) {
        // echo "E-posta gönderirken bir hata oluştu: " . $mail->ErrorInfo;
    // }
// }
// else{
	// echo "if bloğuna hiç girmiyor smtp bilgileri ile alakalı değil."
// }
?>
