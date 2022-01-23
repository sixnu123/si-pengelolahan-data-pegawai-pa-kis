<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                     
						 <div class="form-group">
                            <label for="Nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Jabatan" class="col-sm-3 control-label">Jabatan</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="Jabatan" class="form-control">
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
                            _<label for="Tanggal_Lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="Tanggal_Lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="Agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama Pegawai" required>
                            </div>
                        </div>
                        
						 <div class="form-group">
                            <label for="Pendidikan_Akhir" class="col-sm-3 control-label">Pendidikan Akhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="Pendidikan_Akhir" class="form-control" id="inputEmail3" placeholder="Inputkan Pendidikan Akhir" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=d_pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pegawai
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $Nama=$_POST['Nama'];
	$Jabatan=$_POST['Jabatan'];
	$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
	$Agama=$_POST['Agama'];
    $Pendidikan_Akhir=$_POST['Pendidikan_Akhir'];



    //buat sql
    $sql="INSERT INTO tb_datapegawai VALUES ('','$Nama','$Jabatan','$Tanggal_Lahir','$Agama','$Pendidikan_Akhir,')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=d_pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
