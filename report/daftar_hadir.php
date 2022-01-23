<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kehadiran Pegawai Pengadilan Agama Kisaran</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_kehadiranpegawai WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengelolahan Data Pegawai Pengadilan Agama Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 73, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA KEHADIRAN PEGAWAI BULAN JANUARI TAHUN 2022</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama</td> <td><?= $data['Nama'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Jabatan</td> <td><?= $data['Jabatan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Senin</td> <td><strong><?= $data['Senin'] ?></td>
                                </tr>
                                <tr>
                                    <td>Selasa</td> <td><?= $data['Selasa'] ?></td>
                                </tr>
								<tr>
                                    <td>Rabu</td> <td><?= $data['Rabu'] ?></td>
                                </tr>
								<tr>
                                    <td>Kamis</td> <td><?= $data['Kamis'] ?></td>
                                </tr>
								<tr>
                                    <td>Juma'at</td> <td><?= $data['Jumat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td> <td><?= $data['Keterangan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>