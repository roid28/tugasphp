<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TugasMinggu6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12" style="background-color:blue;">
    <br>
        <h1 style="text-align: center; color: white;">
        <?php echo "Selamat datang, " . $_SESSION["username"] . "!"; ?>
        </h1>
    <br>
</div>
  <div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">Roid</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="berandaa.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biodata.php">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jadwalkuliahh.php">
                      <p class="text-white bg-primary">Jadwal Kuliah</p></a>
                </li>
            </ul>

            <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput">
                <label for="formGroupExampleInput" class="form-label bg-primary">
                    <p class="text-white">Search Information</p>
                </label>
            </div>
            <div>
                <form action="hapus.php" method="post" style="text-shadow: ;: center; margin-top: 20px;">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>

      <div class="container mt-4">
        <h1>Jadwal Kuliah</h1>
        <p>Berikut adalah jadwal kuliah saya di semester 4 :</p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Mata Kuliah</th>
                <th>Ruangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Senin</td>
                <td>07:00 - 08:40</td>
                <td>APSI II</td>
                <td>H.4.10</td>
              </tr>
              <tr>
                <td>Selasa</td>
                <td>09:30 - 12:00 <br> 14.10 - 15.50 <br> 18.30 - 21.00</td>
                <td>PSDP <br> Dasar Kewirausahaan <br> PSSI </td>
                <td>H.5.1 <br> Kulino <br> H.3.1 </td>
              </tr>
              <tr>
                <td>Rabu</td>
                <td>08:40 - 10:20</td>
                <td>Pemograman Web</td>
                <td>H.4.6</td>
              </tr>
              <tr>
                <td>Kamis</td>
                <td>10:20 - 12:00 <br> 18.30 - 20.10 </td>
                <td>Pemograman Web <br> PBO </td>
                <td>D.2.B <br> D.2.k</td>
              </tr>
              <tr>
                <td>Jumat</td>
                <td>10:20 - 12:00 <br> 12.30 - 15.00 <br> 16.20 - 18.00</td>
                <td>APSI II <br> MRP <br> PBO </td>
                <td>H.3.9 <br> H.4.8 <br> H.4.12</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</body>
</html>