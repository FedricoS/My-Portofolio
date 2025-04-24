<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Kirim email ke alamatmu
    $to      = "youremail@example.com"; // Ganti dengan email kamu
    $subject = "Pesan dari Website Portofolio";
    $body    = "Nama: $name\nEmail: $email\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        // Redirect ke halaman sukses
        header("Location: thanks.html");
        exit;
    } else {
        echo "Gagal mengirim pesan. Silakan coba lagi.";
    }
} else {
    echo "Akses tidak sah.";
}
?>
