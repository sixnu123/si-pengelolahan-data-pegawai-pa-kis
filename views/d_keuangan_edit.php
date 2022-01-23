<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_datakeuangan WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Keuangan Pegawai </h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="Nama_Data_Keuangan" class="col-sm-3 control-label">Nama Data Keuangan</label>
                             <div class="col-sm-9">
								<input type="text" name="Nama_Data_Keuangan" value="<?=$data['Nama_Data_Keuangan']?>"class="form-control" id="inputEmail3" placeholder="Nama_Data_Keuangan" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Tingkatan_Jabatan" class="col-sm-3 control-label">Tingkatan/Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tingkatan_Jabatan" value="<?=$data['Tingkatan_Jabatan']?>"class="form-control" id="inputEmail3" placeholder="Tingkatan_Jabatan">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
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
                            <label for="ket" class="col-sm-3 control-label">Kategori</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kategori" value="<?=$data['Kategori']?>" class="form-control" id="inputPassword3" placeholder="Kategori">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Keterangan" value="<?=$data['Keterangan']?>"class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>                

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Keuangan Pegawai</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=d_keuangan&actions=tampil" class="btn btn-danger btn-sm">
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
	$Tanggal=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
	$tglKembali=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
		$thnKem =$_POST['tahun_kem'];
		$thnpin =$_POST['tahun'];
		$blnKem =$_POST['bulan_kem'];
		$blnpin =$_POST['bulan'];
		$tglKem =$_POST['tanggal_kem'];
		$tglpin =$_POST['tanggal'];
    $Kategori=$_POST['Kategori'];
    $Keterangan=$_POST['Keterangan'];
    //buat sql
    $sql="UPDATE tb_datakeuangan  SET Nama_Data_Keuangan = '$Nama_Data_Keuangan', Tingkatan_Jabatan='$Tingkatan_Jabatan', Tanggal='$Tanggal', Kategori='$Kategori', Keterangan='$Keterangan'
    WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=d_keuangan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



