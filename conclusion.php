<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function filtrele($deger){
    $islemBir   = trim($deger);
    $islemIki   = strip_tags($islemBir);
    $islemUc    = htmlspecialchars($islemIki, ENT_QUOTES);
    $sonuc      = $islemUc;
    return $sonuc;
}

$gelenIsimSoyisim   = filtrele($_POST["adisoyadi"]);
$gelenTelefon       = filtrele($_POST["telefon"]);
$gelenEmailAdresi   = filtrele($_POST["emailadresi"]);
$gelenKonu          = filtrele($_POST["konusu"]);
$gelenMesaj        = filtrele($_POST["mesaji"]);

$mailGonder = new PHPMailer(true);
try {  
    $mailGonder->CharSet = "utf-8";
    $mailGonder->SMTPDebug = 0;                      
    $mailGonder->isSMTP();                                            
    $mailGonder->Host       = 'smtp-mail.outlook.com';                   
    $mailGonder->SMTPAuth   = true;                                 
    $mailGonder->Username   = '';//mail adresinizi bu alana yazın                     
    $mailGonder->Password   = '';//mail şifrenizi bu alana yazın                               
    $mailGonder->SMTPSecure = 'tls';            
    $mailGonder->Port       = 587;   
    $mailGonder->SMTPOptions= array(
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    );   
    $mailGonder->setFrom($gelenEmailAdresi, $gelenIsimSoyisim);
    $mailGonder->addAddress('', '');//ilk boşluğa mailadresinizi ikinci boşluğa adınızı yazınız    
    $mailGonder->addReplyTo($gelenEmailAdresi, $gelenIsimSoyisim); 
    $mailGonder->isHTML(true);                                  
    $mailGonder->Subject = $gelenKonu;
    $mailGonder->MsgHTML($gelenMesaj, 'UTF-8');
   // $mailGonder->Body    = '$gelenMesaj';
   // $mailGonder->AltBody = '$gelenMesaj (html mail kabul etmeyen sunucular için)';
   $mailGonder->send();
    echo 'Mail gönderildi';
} catch (Exception $e) {
    echo "Mail gönderim hatası <br> hata açıklaması : {$mailGonder->ErrorInfo}";
}
?>
