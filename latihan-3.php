<html>
<head>
    <meta charset="UTF-8">
	<title>Faktorial</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <form action="latihan-3.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Angka</label>
            <input type="number" name="angka" class="form-control">
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
    </form>
    <?php
    function increment($angka){
        if ($angka==1){
            return 1;
        }else{
            return $angka*increment($angka-1);
        }
    }
    $angka=$_POST["angka"];

    
    echo $angka."! = ".increment($angka)."<br>";
    ?>
</body>
</html>