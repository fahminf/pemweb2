<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Handling</title>
    <style>
        body {
            background:black;
        }
        h1, h2, h3, h4, h5, p, span, label {
            color:#fff;
        }
        .btn-kirim{
            background-color: green;
            color: white;
            padding: 5px;
            border: 0;
            border-radius: 10px;
        }
        .btn-reset{
            background-color: red;
            color: white;
            padding: 5px;
            border: 0;
            border-radius: 10px
        }
    </style>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
    <!-- /* tipe teks */ -->
    <label for="">Nama Mahasiswa</label><br>
    <input type="text" name="nama"><br><br>
    <!-- /* tipe radio */ -->
    <label for="">Jenis kelamin</label><br>
    <input type="Radio" name="jenis_kelamin" value="Laki Laki"><label for="">Laki=Laki</label>
    <input type="Radio" name="jenis_kelamin" value="Laki Laki"><label for="">Perempuan</label><br><br>
    <!-- /* tipe checkbox */ -->
    <label for="">Mata Kuliah</label><br>
    <input type="checkbox" name="matkul" value="Matematika Komputer">
    <label for="">Matematika Komputer</label><br>
    <input type="checkbox" name="matkul" value="Pemrograman Web 2">
    <label for="">Pemrograman Web 2</label><br><br>
    <!-- /* tipe number */ -->
    <label for="">Nomor Telepon</label><br>
    <input type="number" name="nomor_telpon"><br><br>
    <!-- button -->
    <button type="submit" class="btn-kirim">Kirirm !</button>
    <button type="reset" class="btn-reset">Reset Data</button>



    </form>
</body>
</html>