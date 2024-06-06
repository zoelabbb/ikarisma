<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prediksi Ukuran Kaos</title>
</head>
<body>
    <h1>Prediksi Ukuran Kaos</h1>
    <form action="/prediksi/predict" method="post">
        <label for="age">Umur:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="height">Tinggi (cm):</label>
        <input type="number" id="height" name="height" required><br><br>
        
        <label for="weight">Berat (kg):</label>
        <input type="number" id="weight" name="weight" required><br><br>
        
        <button type="submit">Prediksi</button>
    </form>
<?php if (session()->getFlashdata('ukuran')) : ?>
    <div class="alert alert-success" role="alert">
        Ukuran kaos yang diprediksi: <?= session()->getFlashdata('ukuran') ?>
    </div>
<?php endif; ?>


</body>
</html>
