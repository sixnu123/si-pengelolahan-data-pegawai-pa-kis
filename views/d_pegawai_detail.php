<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Pegawai Pengadilan Agama Kisaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail pegawai-->
                    <?php
                    $sql = "SELECT *FROM tb_datapegawai WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama</td> <td><?= $data['Nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td> <td><?= $data['Jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['Tanggal_Lahir'] ?></td>
                        </tr>
						<tr>
                            <td>Agama</td> <td><?= $data['Agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Akhir</td> <td><?= $data['Pendidikan_Akhir'] ?></td>
                        </tr>
    
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=d_pegawai&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pegawai </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

