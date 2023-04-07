<?php
require_once 'dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM pelanggan WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $email = $_POST['email'];
    $kartu_id = $_POST['kartu_id'];

    $sql = "UPDATE pelanggan SET kode = :kode, nama = :nama, jk = :jk, tmp_lahir = :tmp_lahir,
                        tgl_lahir = :tgl_lahir, email = :email, kartu_id = :kartu_id WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':kode', $kode);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':jk', $jk);
    $stmt->bindParam(':tmp_lahir', $tmp_lahir);
    $stmt->bindParam(':tgl_lahir', $tgl_lahir);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':kartu_id', $kartu_id);

    $stmt->execute();

    header('Location: index.php');
}



$sqljenis = "SELECT * FROM kartu";
$rowjenis = $conn->prepare($sqljenis);
$rowjenis->execute();


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Form Input Data</title>
</head>

<body>
    <form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="container-fluid  callback my-5 pt-5 ">
            <div class="container pt-5 ">
                <div class="row justify-content-center ">
                    <div class="col-lg-7 ">
                        <div class=" border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s" style="background-color: #E4DCCF;">
                            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                                <h1 class="display-5 mb-5">EDIT DATA</h1>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="kode" value="<?php echo $row['kode']; ?>">
                                        <label for="kode">Kode</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
                                        <label for="nama">Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="jk">Jenis Kelamin:</label>
                                    <br>
                                    <label>Laki-Laki</label>
                                    <input type="radio" name="jk" value="L" checked>
                                    <br>
                                    <label>Perempuan</label>
                                    <input type="radio" name="jk" value="P"><br><br>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="tmp_lahir" value="<?php echo $row['tmp_lahir']; ?>">
                                        <label for="tmp_lahir">Tempat lahir</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $row['tgl_lahir']; ?>">
                                        <label for="tgl_lahir">Tanggal lahir</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                        <label for="mail">Your Email</label>
                                    </div>
                                </div>

                                <label>Kartu ID</label>
                                <select name="kartu_id" id="kartu_id">
                                    <?php
                                    while ($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?= $jenis['id'] ?>"> <?= $jenis['nama']  ?> </option>
                                    <?php
                                    }
                                    ?>


                                </select>
                                <br><br>

                                <div class="col-12 text-center">
                                    <button class="btn btn-dark w-100 py-3" type="submit" name="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>