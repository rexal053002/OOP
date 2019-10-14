<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page Penggajian.php</title>
</head>
<body>
    <fieldset>
    <legend>Penggajian</legend>
    <form action="pspenggajian.php" method="post">
    <label for="">Nama Karyawan : 
    </label>
    <input type="text" name="nm"><br>
    <label for="">NIP Karyawan : 
    </label>
    <input type="number" name="no"><br>
    <label for="">Alamat Karyawan : 
    </label>
    <input type="textarea" name="almt"><br>
    <label for="">Jumlah hari kerja : 
    </label>
    <input type="number" name="jmk"><br>
    <input type="submit" name="ps" value="Proses">
    </form>
    </fieldset>
</body>
</html>