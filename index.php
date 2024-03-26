<?php
$nama="Kurniasih";
$alamat="tangerang";
$jenis_kelamin="perempuan";
$umur="20";
$hobi="menulis";
$email="niya9391@gmail.com"
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas php nia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap');
        *{
  font-family: "Kalam", cursive;
  font-weight: 400;
  font-style: normal;
        }
        :root {
            --btn-size: .8rem;
            --small-size: .75rem;
        }

        body {
            background-color: #E4E8EB;
        }

        .bg {
            background-color: #E4E8EB;
        }

        .login-card {
            width: calc(100% - 13rem);
        }

        .login-card h1 {
            color: #111727;
        }

        .login-card p {
            /* color: #b0b4b6; */
            color: #313131;
            font-size: var(--small-size);
        }

        .login-card label {
            font-size: var(--small-size);
        }
        .checkbox label {
            font-size: var(--small-size);
        }
        .img_a{
            position: relative;
            background-image: url('https://i.pinimg.com/564x/b1/5f/ab/b15fab4e91a0861cc68c545e2ec7d0d1.jpg');
            background-size: cover;
            background-position: center;
            margin-right: 10px;

        }
        @media (max-width: 480px) {
            .login-card {
                width: calc(100% - 2rem);
            }
        }
    </style>
</head>

<body>

    <div class="container py-5 px-5 bg">
        <div class="row justify-content-between bg-white rounded-start-4 img_a">
            <div class="col-lg-7 d-flex justify-content-center align-items-center">
                <div class="login-card py-lg-0 py-5 justify-content-center">
                    <font size="5" face="times new roman">
        <strong>Tentang Saya</strong>
    </font>
    <p align="justify">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius modi repudiandae quas quo omnis corporis
        assumenda ex, non quod repellendus sed quibusdam id voluptatibus impedit. Doloremque dignissimos doloribus fugit
        explicabo?
    </p>
    <hr color="black" />

    <table>
        <tr>
            <font size="5" face="times new roman">
                <strong>Data Pribadi</strong>
            </font>
            <td>Nama</td>
            <td>: <?= $nama ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $alamat ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $jenis_kelamin ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: <?= $umur ?> Tahun</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>: <?= $hobi ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?= $email ?></td>
        </tr>
    </table>
    <hr color="black" />

    <font size="5" face="times new roman">
        <strong>Pengalaman Kerja</strong>
    </font>
    <table>
        <tr>
            <td>Kasir</td>
        </tr>
        <tr>
            <td>Guru paud</td>
        </tr>
    </table>
    <hr color="black" />

    </table>
                </div>
            </div>
            <div class="col-lg-5 col-12 p-0">
                <img src="img/nia.jpg"
                    alt="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>