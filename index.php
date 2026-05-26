<?php
// GÜVENLİK DUVARI TAMAMEN KAPALI - HİÇBİR KORUMA YOKTUR
// DDoS VE YÜK TESTLERİ İÇİN KASITLI OLARAK AĞIRLAŞTIRILMIŞTIR

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Kasıtlı olarak döngüye sokup işlemciyi (CPU) yoruyoruz
for ($i = 0; $i < 50000; $i++) {
    $dummy = sha1(md5($i));
}

// Veritabanına gereksiz ve ağır bir sorgu gönderiyoruz
$result = $conn->query("SELECT BENCHMARK(1000000, ENCODE('hello', 'goodbye'))");

echo "<h1>Korumasız Test Sitesi Aktif!</h1>";
echo "<p>Bu site üzerinde yasal DDoS / Stres testlerinizi gerçekleştirebilirsiniz.</p>";
?>
