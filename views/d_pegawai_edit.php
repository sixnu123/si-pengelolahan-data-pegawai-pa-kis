<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_datapegawai WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pegawai</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="Nama" class="col-sm-3 control-label">Nama</label>
                             <div class="col-sm-9">
								<input type="text" name="Nama" value="<?=$data['Nama']?>"class="form-control" id="inputEmail3" placeholder="Nama" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jabatan" value="<?=$data['Jabatan']?>"class="form-control" id="inputEmail3" placeholder="Jabatan">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2022;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal--> 
						
						
                        <div class="form-group">
                            <label for="Agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Agama" value="<?=$data['Agama']?>" class="form-control" id="inputPassword3" placeholder="Agama">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="Pendidikan_Akhir" class="col-sm-3 control-label">Pendidikan Akhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="Pendidikan_Akhir" value="<?=$data['Pendidikan_Akhir']?>"class="form-control" id="inputEmail3" placeholder="Pendidikan_Akhir">
                            </div>
                        </div>                
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pegawai</button>
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
	$Tanggal_Lahir=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
	$tglKembali=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
		$thnKem =$_POST['tahun_kem'];
		$thnpin =$_POST['tahun'];
		$blnKem =$_POST['bulan_kem'];
		$blnpin =$_POST['bulan'];
		$tglKem =$_POST['tanggal_kem'];
		$tglpin =$_POST['tanggal'];
    $Agama=$_POST['Agama'];
    $Pendidikan_Akhir=$_POST['Pendidikan_Akhir'];
    //buat sql
    $sql="UPDATE tb_datapegawai  SET Nama = '$Nama',  Jabatan='$Jabatan', Tanggal_Lahir='$Tanggal_Lahir', Agama='$Agama', Pendidikan_Akhir='$Pendidikan_Akhir'
    WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=d_pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>

