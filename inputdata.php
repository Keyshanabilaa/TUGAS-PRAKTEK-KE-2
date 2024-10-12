<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Penilaian Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h1> Aplikasi Penilaian Mahasiswa</h1>
        <form action="" method="post">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required>

            <?php for ($i = 1; $i <= 4; $i++): ?>
                <label for="matkul<?php echo $i; ?>">Mata Kuliah <?php echo $i; ?>:</label>
                <input type="text" id="matkul<?php echo $i; ?>" name="matkul[]" required>

                <label for="nilai<?php echo $i; ?>">Nilai Mata Kuliah <?php echo $i; ?>:</label>
                <input type="number" id="nilai<?php echo $i; ?>" name="nilai[]" min="0" max="100" required>
            <?php endfor; ?>

            <button type="submit">Kirim</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $matkulArray = $_POST['matkul'];
            $nilaiArray = $_POST['nilai'];

            $totalNilai = 0;
            $jumlahNilai = count($nilaiArray);

            echo "<h2>Hasil Penilaian:</h2>";
            echo "<p><strong>Nama Mahasiswa:</strong> $nama</p>";

            for ($i = 0; $i < $jumlahNilai; $i++) {
                echo "<p><strong>Mata Kuliah:</strong> " . htmlspecialchars($matkulArray[$i]) . "</p>";
                echo "<p><strong>Nilai:</strong> " . htmlspecialchars($nilaiArray[$i]) . "</p>";
                $totalNilai += (int)$nilaiArray[$i];
            }

            $rataRata = $totalNilai / $jumlahNilai;
            echo "<p><strong>Rata-rata Nilai:</strong> " . round($rataRata, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>