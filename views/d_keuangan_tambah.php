<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Keuangan Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                     
						 <div class="form-group">
                            <label for="Nama_Data_Keuangan" class="col-sm-3 control-label">Nama Data Keuangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Data_Keuangan" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Data Keuangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Tingkatan_Jabatan" class="col-sm-3 control-label">Tingkatan/Jabatan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="Tingkatan_Jabatan" class="form-control">
                                    <option value="PANITERA MUDA GUGATAN">PANITERA MUDA GUGATAN</option>
                                    <option value="PANITERA MUDA PERMOHONAN">PANITERA MUDA PERMOHONAN</option>
                                    <option value="PANITERA MUDA HUKUM">PANITERA MUDA HUKUM</option>
                                    <option value="KETUA">KETUA</option>
                                    <option value="WAKIL KETUA">WAKIL KETUA</option>
                                    <option value="HAKIM">HAKIM</option>
                                    <option value="Kepala Sub Bagian Tekonologi Informasi">Kepala Sub Bagian Tekonologi Informasi</option>
                                    <option value="Kepala Sub Bagian Kepegawaian Organsisai">Kepala Sub Bagian Kepegawaian Organsisai</option>
                                    <option value="SEKRETARIS">SEKRETARIS</option>
                                    <option value="BENDAHARA">BENDAHARA</option>
                                    <option value="JURUSISTA">JURUSISTA</option>
                                    <option value="ARSIPARIS PELAKSANA">ARSIPARIS PELAKSANA</option>
                                    <option value="ANALISIS PERKARA PERADILAN">ANALISIS PERKARA PERADILAN</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="Tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="Kategori" class="col-sm-3 control-label">Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kategori" class="form-control" id="inputEmail3" placeholder="Inputkan Kategori" required>
                            </div>
                        </div>
                        
						 <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Keterangan" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Keuangan Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=d_pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Keuangan Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $Nama_Data_Keuangan=$_POST['Nama_Data_Keuangan'];
	$Tingkatan_Jabatan=$_POST['Tingkatan_Jabatan'];
	$Tanggal=$_POST['Tanggal'];
	$Kategori=$_POST['Kategori'];
    $Keterangan=$_POST['Keterangan'];

    //buat sql
    $sql="INSERT INTO tb_datakeuangan VALUES ('$Nama_Data_Keuangan','$Tingkatan_Jabatan','$Tanggal','$Kategori','$Keterangan','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=d_keuangan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
