
<?php
require __DIR__.'/PHPMailer/src/Exception.php';
require __DIR__.'/PHPMailer/src/PHPMailer.php';
require __DIR__.'/PHPMailer/src/SMTP.php';

# use "use" after include or require

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yname = $_POST["yname"];
    $hospital = $_POST["hospital"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];
    $telephone = $_POST["telephone"];
    $cell = $_POST["cell"];
    $yemail = $_POST["yemail"];
    $ymessage = $_POST["ymessage"];
    
    // PHPMailer nesnesini oluşturun
    $mail = new PHPMailer(true);
    
    try {
        // SMTP ayarları
        $mail->isSMTP();
        $mail->Host = 'mail.ertuncozcan.com'; // SMTP sunucu adresi
        $mail->Port = 587; // SMTP portu (Genellikle 587 veya 465 kullanılır)
        $mail->SMTPAuth = true; // SMTP kimlik doğrulama kullanılıyor mu (true/false)
        $mail->Username = 'webwp@ertuncozcan.com'; // SMTP sunucusuna giriş yapacak e-posta adresi
        $mail->Password = '71+*gt'; // SMTP sunucusuna giriş yapacak parola
        $mail->CharSet = 'UTF-8';
    
        // Gönderen ve alıcı bilgileri
        $mail->setFrom('webwp@ertuncozcan.com', 'Ertunç Özcan'); // Gönderen e-posta ve adı
        $mail->addAddress('serra.sahin@ertuncozcan.com'); // Alıcı e-posta adresi
    
        // E-posta başlığı ve içeriği
        $mail->Subject ="Web sitesinin Customer Access Portal bölümünden mesaj var"; // E-posta başlığı
        $mail->Body = "Ad: $yname\nHospital: $hospital\nCity: $city\nState: $state \n Zip Code: $zip\nCountry: $country\nTelephone: $telephone\nCell: $cell \nE-mail: $yemail \nMessage: $ymessage"; // E-posta içeriği
    
        // E-postayı gönderme işlemi
        $mail->send();
        echo 'E-posta başarıyla gönderildi.';
    } catch (Exception $e) {
        echo 'E-posta gönderirken hata oluştu: ' . $mail->ErrorInfo;
    }
}
?>
