<?php
// Doğru email ve şifre tanımları
$eposta = "g201210090@sakarya.edu.tr";
$sifre = "g201210090";

// Formun POST yöntemi ile gönderilip gönderilmediğini kontrol ediyoruz
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gönderilen email ve şifreyi POST verisinden alıyoruz, eğer tanımlı değilse boş string olarak ayarliyoruz
    $email = $_POST['emailgiris1'] ?? '';
    $password = $_POST['sifregiris1'] ?? '';

    // Email ve şifrenin doğruluğunu kontrol ediyoruz
    if ($email === $eposta && $password === $sifre) {
        // Başarılı giriş, ana sayfaya yönlendiriyoruz
        
        echo "<h1>HOŞGELDİN</h1>";
        echo "<h2><a href='../Anasayfa/Anasayfa.html'>Anasayfa</a></h2>";
        
    } else {
        // Hatalı giriş, hata mesajı ve geri dönüş linki gösteriyoruz
        echo "<h1>HATALI GİRİŞ</h1>";
        echo "<h2><a href='login1.html'>Geri Dön</a></h2>";
    }
} else {
    // Eğer form gönderilmediyse, bir hata mesajı gösteriyoruz veya login sayfasına yönlendiriyoruz
    echo "<h1>Form gönderilmedi!</h1>";
    echo "<h2><a href='login1.html'>Geri Dön</a></h2>";
}
?>
