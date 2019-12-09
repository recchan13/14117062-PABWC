<!DOCTYPE html>
<html>
    <head>
        <title>tambah data</title>
    </head>
    <body>
        <br>
        <h1>TAMBAH DATA</h1>
        <br>
        <form action="permasalahan_simpan.php" method="POST" enctype="multipart/form-data">
            NRP <input type="text" name="nrp" maxlength="30">
            <br>
            <br>
            Nama <input type="text" name="name" maxlength="30">
            <br>
            <br>
            Foto 
            <input type="file" name="foto" id="foto">
            <br>
            <br>
            Jurusan 
            <select name="idJurusan" style="width: 150px">
                <option value="IF">Informatika</option>
                <option value="EL">Elektro</option>
                <option value="MA">Matematika</option>
                <option value="PWK">PWK</option>
            </select>
            <br>
            <br>

            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        </form>
    </body>
</html>
        