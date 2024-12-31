<?php
function cetakBilangan($n) {
    // Validasi input agar hanya menerima bilangan bulat positif
    if ($n <= 0) {
        echo "Masukkan bilangan bulat positif yang lebih dari 0.<br>";
        return;
    }

    for ($i = 1; $i <= $n; $i++) {
        // Memeriksa kondisi dan mencetak hasil sesuai ketentuan
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024<br>";
        } elseif ($i % 5 == 0) {
            echo "2024<br>";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman<br>";
        } elseif ($i % 6 == 0) {
            echo "Website<br>";
        } else {
            echo $i . "<br>";
        }
    }
}

// Contoh penggunaan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memastikan bahwa input tidak kosong
    if (isset($_POST['n']) && is_numeric($_POST['n'])) {
        $n = (int)$_POST['n'];
        cetakBilangan($n);
    } else {
        echo "Masukkan bilangan bulat positif.<br>";
    }
}
?>

