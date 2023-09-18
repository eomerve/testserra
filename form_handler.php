<?php
$recaptchaSecretKey = "6LeEnSkoAAAAAHhXC6iDKahgaCnQ__XZa_ULLr0p";
$recaptchaResponse = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

if (intval($responseKeys["success"]) !== 1) {
    // reCAPTCHA doğrulaması başarısız
    echo "reCAPTCHA doğrulaması başarısız, lütfen tekrar deneyin.";
} else {
    // reCAPTCHA doğrulaması başarılı, form işlemlerini devam ettirin
    // Örnek: E-posta gönderme, veritabanına kaydetme vb.
}
?>
Bu kod, reCAPTCHA'nın doğrulama sonucunu kontrol eder ve başarılı ise form işlemlerini devam ettirir. Başarısızlık durumunda ise kullanıcıya hata mesajı gösterir.

Bu adımları takip ederek, reCAPTCHA'yı web sitenizdeki formlarda kullanabilir ve spam girişlerini engelleyebilirsiniz.




User
<div class="g-recaptcha" data-sitekey="6LeEnSkoAAAAAHhXC6iDKahgaCnQ__XZa_ULLr0p"></div> bu divi form taglerinin arasına mı koymalıyım
ChatGPT
reCAPTCHA div elementini form taglerinin arasına yerleştirmelisiniz. Böylece kullanıcıların reCAPTCHA'yı görüntülemesi ve doğrulama yapabilmesi için formun içinde olması gerekir. İşte doğru sıralama:

html
Copy code
<form method="POST" action="form_handler.php">
    <!-- Diğer form alanları burada -->
    
    <div class="g-recaptcha" data-sitekey="6LeEnSkoAAAAAHhXC6iDKahgaCnQ__XZa_ULLr0p"></div>
    
    <button type="submit">Gönder</button>
</form>
Bu şekilde reCAPTCHA, formun içinde bulunur ve kullanıcılar formu doldururken reCAPTCHA doğrulamasını tamamlar. Form gönderildiğinde, form işleme betiğiniz (form_handler.php gibi) reCAPTCHA doğrulamasını kontrol edebilir.





