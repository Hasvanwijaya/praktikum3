<?php
session_start();

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');

if ($nama === '' || $email === '') {
    header("Location: incomplete.php");
    exit;
}
date_default_timezone_set('Asia/Jakarta');
$login_time = date('H:i:s');
$login_day = strftime('%A', time());
$login_date = date('d F Y');
function esc($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #ffe8d6; /* peach muda */
            padding-top: 4rem;
        }
        .container-login {
            max-width: 420px;
            margin: auto;
            padding: 1.5rem;
            background: #e3f2fd; /* biru pastel */
            border-radius: 0.5rem;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            color: #0d6efd; /* biru Bootstrap */
            margin-bottom: 1.5rem;
        }
        ul.list-group {
            text-align: left;
        }
        .list-group-item strong {
            color: #6c757d; /* abu lembut */
        }
    </style>
</head>
<body>

<div class="container-login">
    <h2>Data Login Anda</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Nama:</strong> <?= esc($nama) ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= esc($email) ?></li>
        <li class="list-group-item"><strong>Jam Login:</strong> <?= $login_time ?></li>
        <li class="list-group-item"><strong>Hari Login:</strong> <?= $login_day ?></li>
        <li class="list-group-item"><strong>Tanggal Login:</strong> <?= $login_date ?></li>
    </ul>
    <a href="hasvanpost.php" class="btn btn-primary">Kembali ke Awal</a> 
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
