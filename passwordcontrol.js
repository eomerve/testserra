function validatePassword() {
    var userPassword = document.getElementById('password').value;
    
    if (userPassword === "serra" || userPassword === "melike" || userPassword === "ozdek" || userPassword === "sahin") {
        return true;
    } else {
        alert("Yanlış şifre, lütfen tekrar deneyin.");
        return false;
    }
}