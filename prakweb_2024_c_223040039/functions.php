<?php

include 'koneksi.php';

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getBuku()
{
    global $conn;
    $query = "SELECT * FROM buku";
    $result = mysqli_query($conn, $query);
    $buku = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $buku;
}
