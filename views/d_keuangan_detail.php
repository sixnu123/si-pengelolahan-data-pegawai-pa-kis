<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Keuangan Pegawai Pengadilan Agama Kisaran</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_datakeuangan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Data Keuangan</td> <td><?= $data['Nama_Data_Keuangan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tingkatan/Jabatan</td> <td><?= $data['Tingkatan_Jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['Tanggal'] ?></td>
                        </tr>
						<tr>
                            <td>Kategori</td> <td><?= $data['Kategori'] ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td> <td><?= $data['Keterangan'] ?></td>
                        </tr>

                            
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=d_keuangan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Keuangan Pegawai </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

