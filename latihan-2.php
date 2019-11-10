<html>
<head>
    <meta charset="UTF-8">
	<title>BET NAMA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <form action="latihan-2.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="warna">Warna: </label>
                <select class="form-control" name="warna" id="warna" placeholder="Masukkan Warna:">
                    <option>black</option>
                    <option>pink</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>red</option>
                </select>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
    </form>
    <?php

    function increment(&$nama, &$warna, &$harga){
        if(strlen($nama)>=1 && strlen($nama)<=10){
            $harga = strlen($nama)*300;
        }else if(strlen($nama)>10 && strlen($nama)<=20){
            $harga = strlen($nama)*500;
        }else{
            $harga = strlen($nama)*700;
        }

        if(strlen($nama)!=0){
            echo '<font color="'.$warna.'">'.$nama.'</font><br>';
        }else{
            $warna=red;
            echo '<font color="'.$warna.'">'.$nama.'</font><br>';
        }
    }
    $nama=$_POST["nama"];
    $warna=$_POST["warna"];
    
    increment($nama,$warna,$harga);
    echo "".$harga."<br>";
    ?>
</body>
</html>