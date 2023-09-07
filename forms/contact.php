<?php
// Gerekli kütüphaneyi dahil edin
require 'class.phpmailer.php';

// PHPMailer nesnesini oluşturun
$mail = new PHPMailer();

// SMTP ayarları
$mail->IsSMTP();
$mail->Host = 'mail.ertuncozcan.com'; // SMTP sunucu adresi
$mail->Port = 443; // SMTP portu (Varsayılan olarak 25 kullanılır)
$mail->SMTPAuth = false; // SMTP kimlik doğrulama kullanılıyor mu (true/false)
$mail->SMTPSecure = ''; // SSL veya TLS kullanılıyor mu ('' veya 'ssl' veya 'tls')

// E-posta gönderen bilgileri
$mail->From = 'webwp@ertuncozcan.com'; // Gönderen e-posta adresi
$mail->FromName = 'Ertunç Özcan'; // Gönderenin adı

// Alıcı bilgileri
$mail->AddAddress('serra.sahin@ertuncozcan.com'); // Alıcı e-posta adresi

// E-posta başlığı ve içeriği
$mail->Subject = 'Test E-posta'; // E-posta başlığı
$mail->Body = 'Bu bir test e-postasıdır.'; // E-posta içeriği

// E-postayı gönder
if($mail->Send()) {
    echo 'E-posta başarıyla gönderildi.';
} else {
    echo 'E-posta gönderilirken hata oluştu: ' . $mail->ErrorInfo;
}
?>

