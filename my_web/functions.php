<?php

function koneksi(){
    $koneksi = mysqli_connect("localhost","root",""," web_lanjut_a1_2009010110_renaldi");
    return $koneksi;
}

function q($data){
    $koneksi = koneksi();
    return mysqli_query($koneksi,$data);
}

function prodi(){
    $koneksi = koneksi();
    return mysqli_query($koneksi,"SELECT * FROM prodi");
}