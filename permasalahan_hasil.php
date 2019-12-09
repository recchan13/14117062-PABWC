<?php
    $nama = $_POST["name"];

    $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
    $pilih = mysqli_select_db($conn,"pabwdb");
    $hasil = mysqli_query($conn,"select * from mahasiswa");
    $hasil2 = mysqli_query($conn,"select * from jurusan");

    while ($row=mysqli_fetch_row($hasil)) {
        if ($nama==$row[1]){
            echo "NRP = ".$row[0]."<br>";
            echo "NAMA = ".$row[1]."<br>";
            echo "FOTO = ".$row[2]."<br>";
            $ID_Jur = $row[3];
            
            while ($row2=mysqli_fetch_row($hasil2)) {
                if ($ID_Jur==$row2[0]){
                    echo "NAMA JURUSAN = ".$row2[1]."<br>";
                }
            }
        }
    }
?>