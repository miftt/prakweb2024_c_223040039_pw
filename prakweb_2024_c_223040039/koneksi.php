<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakweb2024_c_223040039";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("<script>
    alert('Gagal tersambung dengan database.')
</script>");
}
