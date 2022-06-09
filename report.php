<!DOCTYPE html>
<html>
<head>
    <title>Tutorial PHP Datatables Dengan PHP Dan MySQL</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.dataTables.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>
<body>
<table id="tabel-data">
    <thead>
        <tr>
            <th>No. Pendaftaran</th>
            <th>Nomor Induk Siswa</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Jenjang</th>
            <th>Sekolah</th>
            <th>Semester Ganjil</th>
            <th>Semester Genap</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include 'koneksi.php';
        $employee = mysqli_query($conn,"select * from data_diri");
        while($row = mysqli_fetch_array($employee))
        {
            echo "<tr>
            <td>".$row['nom']."</td>
            <td>".$row['nis']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['tgllahir']."</td>
            <td>".$row['gender']."</td>
            <td>".$row['home']."</td>
            <td>".$row['jenjang']."</td>
            <td>".$row['sekolah']."</td>
            <td>".$row['ganjil']."</td>
            <td>".$row['genap']."</td>
        </tr>";
        }
    ?>
    </tbody>
    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

</table>
</body>
</html>