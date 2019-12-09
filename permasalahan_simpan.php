<HTML>
    <HEAD>
        <title>Simpan Buku Tamu</title>
    </HEAD>
    <BODY>
        <h1>Simpan Buku Tamu MySQL</h1>
    <?php
        $nrp = $_POST["nrp"];
        $nama = $_POST["name"];

        //FUNGSI UPLOAD FOTO
        function uploadFile($file){
            // $currentDir = getcwd();
            $uploadPath = basename($file['name']);
            $up = move_uploaded_file($file['tmp_name'], $uploadPath);
            return basename($uploadPath);
        }
        $alamat = uploadFile($_FILES['foto']);

        $ID_Jur = $_POST["idJurusan"];
        $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
        mysqli_select_db($conn,"pabwdb");

        $query = "INSERT INTO `mahasiswa`(`NRP`, `Nama`, `Alamat`, `ID_Jur`) VALUES ('$nrp','$nama','$alamat','$ID_Jur')";
        $hasil = mysqli_query($conn,$query);
        // echo $hasil;
        // echo $nrp.$nama.$file.$ID_Jur;


        if($ID_Jur=="IF"){
            $NM_Jur="Informatika";
        }elseif($ID_Jur=="EL"){
            $NM_Jur="Elektro";
        }elseif($ID_Jur=="EL"){
            $NM_Jur="Matematika";
        }else{
            $NM_Jur="PWK";
        }
        
        $sqlstr2="insert into jurusan (ID_Jur,Nama) values ('$ID_Jur','$NM_Jur')";
        $hasil = mysqli_query($conn,$sqlstr2);
        echo "Simpan data berhasil dilakukan";
    ?>
    </BODY>
</HTML> 