<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/home.css" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <br>
        <h1>BIODATA MAHASISWA</h1>
        <br>
        
        <div class="table-responsive" >
            <table class="table" border="1" width="500px" >
            <thead style="font-size:20px !important">
                <tr>
                    <td>NAMA</td>
                    <td>ALAMAT</td>
                    <td>JENIS KELAMIN</td>
                    <td>GOLONGAN DARAH</td>
                    <td>HOBI</td>
                    <td>KETERANGAN</td>
                </tr>
            </thead> 
            <tbody style="font-size:15px !important">
                <tr>
                    <td><?php echo $_POST["name"]?></td>
                    <td><?php echo $_POST["alamat"]?></td>
                    <td><?php $jk=$_POST["JK"];
                    if($jk=="LK"){
                        echo "Laki-laki";
                    }else {
                        echo "Perempuan";
                    }
                    ?></td>
                    <td><?php echo $_POST["goldar"]?></td>
                    <td><?php $hobi=$_POST["hobi"];
                        if($hobi=="music"){
                            echo "mendengarkan musik";
                        }else if($hobi=="music2"){
                            echo "bermain musik";
                        }else if($hobi=="read"){
                            echo "membaca";
                        }else if($hobi=="write"){
                            echo "menulis";
                        }else{
                            echo "lainnya";
                        }
                    ?></td>
                    <td><?php echo $_POST["ket"]?></td>
                </tr>
            </tbody>                
            </table>
        </div>        
    </body>
</html>