
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // PHPMailer nesnesini oluşturun
    $mail = new PHPMailer(true);
    
    // SMTP ayarları
    $mail->isSMTP();
    $mail->Host = 'mail.ertuncozcan.com'; // SMTP sunucu adresi
    $mail->Port = 465; // SMTP portu (Varsayılan olarak 25 kullanılır)
    $mail->SMTPAuth = true; // SMTP kimlik doğrulama kullanılıyor mu (true/false)
    $mail->SMTPSecure = 'tls'; // Güvenli bağlantı türü (ssl veya tls)
    $mail->Username = 'webwp@ertuncozcan.com'; // SMTP sunucusuna giriş yapacak kullanıcı adı
    $mail->Password = '71+*gt'; // SMTP sunucusuna giriş yapacak parola
    
    // Gönderen ve alıcı bilgileri
    $mail->setFrom('webwp@ertuncozcan.com', 'Ertunç Özcan'); // Gönderen e-posta ve adı
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
