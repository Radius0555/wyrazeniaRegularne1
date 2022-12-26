<?php

/*
Wyrażenia regularne - to sekwencja znaków tworząca wzorzec wyszukiwania.
Podczas wyszukiwania danych w tekście możesz użyć tego wzorca
wyszukania do opisania czego szukasz.

Wyrażenie regularne może być pojedynczym znakiem lub bardziej
skomplikowanym wzorcem.

Wyrażenia regularne mogą służyć do wykonania wszystkich typów
operacji wyszukiwania tekstu i zamiany tekstu. Np.:

$exp = "/w3schools/i"; czyli:
/ separator
w3schools wzorcem
i modyfikatorem

*/
/*
preg_match() - zwraca 1 jeśli wzorzec został znaleziony, 0 jak nie
preg_match_all() - zwraca ile razy wzorzec został znaleziony w ciągu, może być 0
preg_replace() - zwraca nowy ciąg, wzorce zostały zastąpione innym ciągiem
*/

//preg_match
$str = "W3Schools";
$pattern = "/w3schools/1";
echo preg_match($pattern, $str).'<br>';

//preg_match_all
$str1 = "The rain in SPAIN falls mainly on the plains.";
$pattern1 = "/ain/1";
echo preg_match_all($pattern1,$str1).'<br>';

//preg_replace
$str2 = "Visit Microsoft!";
$pattern2 = "/microsoft/i";
echo preg_replace($pattern2, "W3Schools", $str).'<br>';
?>
