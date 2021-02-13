<?php
//session_start();

function baglantiOlustur(){
    // $sunucu_adi = 'localhost';
     $kullaniciAdi = 'root';
                            $parola = '';
                            $veritabani = 'PROJE';
                        $conn = mysqli_connect("localhost", $kullaniciAdi, $parola, $veritabani);
                        $conn->set_charset("utf8");
                        
    if(!$conn){
        die("Bağlantı Hatası: ".mysqli_connect_error());
    }
    return $conn;
}