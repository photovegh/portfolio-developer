<?php 

// Címzett:
$address = "akinek@kinekmegy.hu";
// Tárgy
$subject = "Teszt üzenet";
// Levél törzse
$body = "Szia! Ez itt egy levél tőlem neked";
// Fejléc
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: text/html; charset=utf8\n";
// Kitől jön a levél név és email
$header .= "From: Ide a neved \n";
// Kinek megy vissza ha hiba van
$header .= "Errors-to: postmaster@valahonnan.hu\n";
// A törzs HTML-esítése
mb_internal_encoding("UTF-8");
$subject = mb_encode_mimeheader($subject, "UTF-8", "Q");
$content = "$body";
// Levélküldés és a sikeresség ellenőrzése
$success = mail($address, $subject, $content, $header);
// Visszajelzés a küldésről
if ($success) {
echo "OK";
} else {
echo "NO";
};
?>