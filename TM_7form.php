<!DOCTYPE html>
<html>
    <head>
        <title>biodata</title>
        <link rel="stylesheet" href="css/home.css" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form action="TM_7hasil.php" method="POST" enctype="multipart/form-data">
            Nama <input type="text" name="name" maxlength="30">
            <br>
            <br>
            Alamat <input type="text" name="alamat" maxlength="30">
            <br>
            <br>
            Jenis Kelamin 
            <br>
            <input type="radio" name="JK" value="LK">Laki-laki<br>
            <input type="radio" name="JK" value="PR">Perempuan<br>
            <br>
            Golongan Darah
            <select name="goldar" style="width: 150px">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
            <br>
            <br>
            Hobby
            <br>
            <input type="checkbox" name="hobi" value="music">mendengarkan musik<br>
            <input type="checkbox" name="hobi" value="music2">bermain musik<br>
            <input type="checkbox" name="hobi" value="read">membaca<br>
            <input type="checkbox" name="hobi" value="write">menulis<br>
            <input type="checkbox" name="hobi" value="other">lainnya<br>
            <br>
            Keterangan <textarea name="ket" rows="4" cols="50"></textarea>
            <br>
            <br>

            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        </form>
    </body>
</html>