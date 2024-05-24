<?php
// Koneksi Database
$koneksi = mysqli_connect("localhost", "u1718936_data_gtk_min2_2", "alya04052007", "u1718936_data_gtk_min2_1");

// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

