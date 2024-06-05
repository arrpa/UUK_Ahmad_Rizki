<?php

    $koneksi = mysqli_connect('localhost','root','','db_ahmadrizki');

    if(!$koneksi) {
        echo"Koneksi Anda Gagal";
    }
