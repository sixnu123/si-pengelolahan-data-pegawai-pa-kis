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
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengelolahan Data Pengadilan Agama Kisaran</h2>
                        <h4>Jalan Jendral Ahmad Yani No. 73, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA KEHADIRAN PEGAWAI PENGADILAN AGAMA KISARAN BULAN JANUARI TAHUN 2022</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">Nama</th>
                                    <th>Jabatan</th>
                                    <th width="10%">Senin</th>
                                    <th><center>Selasa</center></th>
                                    <th><center>Rabu</center></th>
                                    <th><center>Kamis</center></th>
                                    <th><center>Jum'at</center></th>
                                    <th>Keterangan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_kehadiranpegawai";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['Nama'] ?></td>
                                    <td><?= $data['Jabatan'] ?></td>
                                    <td><?= $data['Senin'] ?></td>
                                    <td><?= $data['Selasa'] ?></td>
									<td><?= $data['Rabu'] ?></td>
									<td><?= $data['Kamis'] ?></td>
									<td><?= $data['Jumat'] ?></td>
                                    <td><?= $data['Keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
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