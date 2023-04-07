<?php
require_once 'dbkoneksi.php';

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
    <form method="post" action="index.php">
    <div class="container-fluid  callback my-5 pt-5 ">
        <div class="container pt-5 " >
            <div class="row justify-content-center " >
                <div class="col-lg-7 ">
                    <div class=" border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s" style="background-color: #E4DCCF;" >
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <a href="index.php">
                            <p class="d-inline-block border rounded text-dark fw-semi-bold- py-1 px-3 bg-white">HOME</p>
                            </a>
                            <h1 class="display-5 mb-5">INPUT DATA</h1>
                        </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="kode" placeholder="Input Kode ">
                                        <label for="kode">Kode</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile" placeholder="Your Name">
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
                                        <input type="text" class="form-control" id="mobile" placeholder="tempat lahir anda">
                                        <label for="tmp_lahir">Tempat lahir</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="mobile" placeholder="tanggal lahir anda">
                                        <label for="tgl_lahir">Tanggal lahir</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="mail" placeholder="Your Email">
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
                                    <button class="btn btn-dark w-100 py-3" type="submit" value="Simpan" name="submit">Submit Now</button>
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