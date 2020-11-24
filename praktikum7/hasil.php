<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fef9209b86.js" crossorigin="anonymous"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Index Nilai</title>
    <style>
        .navbar-brand {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php
    $ntugas = $_GET['tugas'];
    $nuts = $_GET['uts'];
    $nuas = $_GET['uas'];
    $nama = $_GET['nama'];
    $nim = $_GET['nim'];

    $nakhir = ($ntugas + $nuts + $nuas) / 3;
    ?>

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom" data-aos="fade-right" data-aos-duration="2000">
        <div class="container">
            <a class="navbar-brand" href="hasil.php"><i class="fas fa-graduation-cap"></i>&nbsp;Index Nilai Mahasiswa</a>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div>
                <h4 class="text-white"><?= $nim . " - " . $nama ?></h4>
            </div>
            <div>
                <h1 class="text-info">
                    <?php
                    if ($nakhir > 50) {
                        echo "Lulus";
                    } else {
                        echo "Tidak Lulus";
                    } ?>
                </h1>
            </div>
            <div>
                <table class="table table-bordered table-dark mt-5">
                    <thead>
                        <tr>
                            <th>Nilai Tugas</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Nilai Akhir</th>
                            <th>Index Angka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $ntugas ?></td>
                            <td><?= $nuts ?></td>
                            <td><?= $nuas ?></td>
                            <td><?= $nakhir ?></td>
                            <td><?php
                                if ($nakhir >= 80) {
                                    echo 'A';
                                } elseif ($nakhir >= 70) {
                                    echo 'B';
                                } elseif ($nakhir >= 60) {
                                    echo 'C';
                                } elseif ($nakhir >= 50) {
                                    echo 'D';
                                } elseif ($nakhir < 50) {
                                    echo 'E';
                                } ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href="index.php" class="btn btn-warning" role="button">Kembali</a>
            </div>
        </div>
    </div>
    <!-- End Jumbotron -->


    <!-- JavaScript -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>