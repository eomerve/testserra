
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../assets/vendor/phpmailer/PHPMailer.php';
require '../assets/vendor/phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // PHPMailer nesnesini oluşturun
    $mail = new PHPMailer(true);
    
    // SMTP ayarları
    $mail->isSMTP();
    $mail->Host = 'smtp.kargrupmimarlik.com'; // SMTP sunucu adresi
    $mail->Port = 587; // SMTP portu (Varsayılan olarak 25 kullanılır)
    $mail->SMTPAuth = true; // SMTP kimlik doğrulama kullanılıyor mu (true/false)
    $mail->Username = 'info@kargrupmimarlik.com'; // SMTP sunucusuna giriş yapacak kullanıcı adı
    $mail->Password = 'Oc5kaegH'; // SMTP sunucusuna giriş yapacak parola
    
    // Gönderen ve alıcı bilgileri
    $mail->setFrom('info@kargrupmimarlik.com', 'Ertunç Özcan'); // Gönderen e-posta ve adı
    $mail->addAddress('serra.sahin@ertuncozcan.com'); // Alıcı e-posta adresi
    
    
    // E-posta başlığı ve içeriği
    $mail->Subject = $subject; // E-posta başlığı
    $mail->Body = "Ad: $name\nE-posta: $email\nKonu: $subject\nMesaj:\n$message"; // E-posta içeriği
    
    // E-postayı gönderme işlemi
    try {
        $mail->send();
        echo "E-posta başarıyla gönderildi.";
    } catch (Exception $e) {
        echo "E-posta gönderirken bir hata oluştu: " . $mail->ErrorInfo;
    }
}
?>
