<?php

$recaptchaSecretKey = "6LeEnSkoAAAAAHhXC6iDKahgaCnQ__XZa_ULLr0p";
$recaptchaResponse = $_POST['g-recaptcha-response'];

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
$responseKeys = json_decode($response, true);

if (intval($responseKeys["success"]) !== 1) {
    echo "reCAPTCHA doğrulaması başarısız, lütfen tekrar deneyin.";
} else {
    $userPassword = $_POST['password'];

    if ($userPassword === "serra" || $userPassword === "melike" || $userPassword === "ozdek" || $userPassword === "sahin") {
        header("Location: SecurityPlan.pdf");
        exit;
    } else {
        echo "Yanlış şifre, lütfen tekrar deneyin.";
    }
}

?>