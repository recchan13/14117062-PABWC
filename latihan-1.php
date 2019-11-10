<html>
<head>
    <meta charset="UTF-8">
	<title>swap data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <form action="latihan-1.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Angka1</label>
            <input type="number" name="a" class="form-control">
        </div>
        <div class="form-group">
            <label>Angka2</label>
            <input type="number" name="b" class="form-control">
        </div>
        <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
    </form>
    <?php
    function increment(&$a, &$b){
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
    $a=$_POST["a"];
    $b=$_POST["b"];
    increment($a,$b);
    echo "Angka 1 = ".$a."<br>";
    echo "Angka 2 = ".$b;
    ?>
</body>
</html>