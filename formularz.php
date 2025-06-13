<?php
$dataFile = 'zgloszenia.json';

$newEntry = [
    'telefon' => $_POST['phone'],
    'wiadomosc' => $_POST['message'],
    'data' => date("Y-m-d H:i:s")
];

if (file_exists($dataFile)) {
    $existing = json_decode(file_get_contents($dataFile), true);
} else {
    $existing = [];
}

$existing[] = $newEntry;

file_put_contents($dataFile, json_encode($existing, JSON_PRETTY_PRINT));

header("Location: dziekujemy.html"); // strona potwierdzająca zgłoszenie
exit;
?>