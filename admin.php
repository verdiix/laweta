<?php
$dataFile = 'zgloszenia.json';

$zgloszenia = [];

if (file_exists($dataFile)) {
    $zgloszenia = json_decode(file_get_contents($dataFile), true);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Panel Administratora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Panel Administratora – Zgłoszenia</h2>
    <?php if (empty($zgloszenia)): ?>
      <p>Brak zgłoszeń.</p>
    <?php else: ?>
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>Data</th>
            <th>Telefon</th>
            <th>Wiadomość</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($zgloszenia as $zgl): ?>
            <tr>
              <td><?= htmlspecialchars($zgl['data']) ?></td>
              <td><?= htmlspecialchars($zgl['telefon']) ?></td>
              <td><?= nl2br(htmlspecialchars($zgl['wiadomosc'])) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</body>
</html>