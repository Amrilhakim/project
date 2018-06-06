<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.kapital{
text-transform:uppercase;
font-family:"kingthings Trypewriter 2";
border:0px;
}





</style>
</head>

<body>
<form method="post" action="insert.php">
<?php 
$pengirim=isset($_GET['pengirim'])?$_GET['pengirim']:'';
$alamat=isset($_GET['alamat'])?$_GET['alamat']:'';
$telppengirim=isset($_GET['telppengirim'])?$_GET['telppengirim']:'';
$penerima=isset($_GET['penerima'])?$_GET['penerima']:'';
$alamatpenerima=isset($_GET['alamatpenerima'])?$_GET['alamatpenerima']:'';
$telppenerima=isset($_GET['telppenerima'])?$_GET['telppenerima']:'';
$dari=isset($_GET['dari'])?$_GET['dari']:'';
$tujuan=isset($_GET['tujuan'])?$_GET['tujuan']:'';
$berat=isset($_GET['berat'])?$_GET['berat']:''; 
$paket=isset($_GET['paket'])?$_GET['paket']:''; 
$jenis=isset($_GET['jenis'])?$_GET['jenis']:'';
$status=isset($_GET['status'])?$_GET['status']:'';
$waktukirim=isset($_GET['waktukirim'])?$_GET['waktukirim']:''; 

if(!empty($pengirim) and !empty($alamat) and !empty($telppengirim) and !empty($penerima) and !empty($alamatpenerima) and !empty($telppenerima) and !empty($dari) and !empty($tujuan) and !empty($berat) and !empty($paket) and !empty($jenis) and !empty($status) and !empty($waktukirim))
{ 
?>


<div id="a1"> 
<div style="padding:7px; height:100%;border:2px dashed #990000; width:680px;margin-top:20px; auto ">
<table width="677" border="0" class="style1">
<tr>
<td colspan="5"><div align="center"><img src="images/logo2.png" width="469" height="112" /></div></td> 
</tr>
  <tr>
    <td height="70" colspan="4" bgcolor="#990000"><div align="center"><div class="style2">STRUK PENGIRIMAN</div></div></td>
    <?php 
include "koneksi.php"; 
$select = "select * from data order by resi asc";
$select_query = mysql_query($select);

while($smp = mysql_fetch_array($select_query))
{
$q =1;
$a			= $smp['resi'] ;
  }

?> 
    <td width="260" bgcolor="#CCCCCC"><div align="center"><div class="style3">Nomor Resi : <input type="text" class="kapital" value="<?php echo $a+$q; ?>" disabled></div></div></td>
  </tr>
  <tr>
    <td width="166" height="30">Nama Pengirim</td>
    <td width="239">: &nbsp;&nbsp;&nbsp; <input type="text" class="kapital" name="pengirim" value="<?php
        if (!empty($pengirim))
            {
                echo $pengirim ;
            }
        else
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?>" /></td>
    <td width="14" height="30">&nbsp;</td>
    <td width="183" height="30">Nama Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="penerima" value="<?php
        if (!empty($penerima))
            {
                echo $penerima ;
            }
        else
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?>"></td>
  </tr>
  <tr>
    <td height="30">Alamat Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="alamat" value="<?php
        if (!empty($alamat))
            {
                echo $alamat ;
            }
        else
            {   
            echo"<script>alert('Masukkan Alamat')</script>";
            }
        ?>"></td>
    <td>&nbsp;</td>
    <td height="30">Alamat Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="alamatpenerima" value="<?php
        if (!empty($alamatpenerima))
            {
                echo $alamatpenerima ;
            }
        else
            {   
            echo"<script>alert('Masukkan Alamat')</script>";
            }
        ?>"></td>
  </tr>
  <tr>
    <td height="30">Telp. Pengirim</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="telppengirim" value="<?php
        if (!empty($telppengirim))
            {
                echo $telppengirim ;
            }
        else
            {   
            echo"<script>alert('Masukkan Telepon')</script>";
            }
        ?>"></td>
    <td>&nbsp;</td>
    <td height="30">Telp. Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="telppenerima" value="<?php
        if (!empty($telppenerima))
            {
                echo $telppenerima ;
            }
        else
            {   
            echo"<script>alert('Masukkan Telepon')</script>";
            }
        ?>"></td>
  </tr>
  <tr>
    <td height="30">Kota Asal</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="dari" value="<?php
        if ($dari=="Sidoarjo")
        {
            echo "Sidoarjo";
        }
        elseif ($dari=="Surabaya")
        {
            echo "Surabaya";
        }       
        elseif ($dari=="Gresik")
        {
            echo "Gresik";
        }       
        elseif ($dari=="")
        {
            echo "Kososng";
        } 
		?>"></td>
    <td>&nbsp;</td>
    <td height="30">Kota Tujuan</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="tujuan" value="<?php
        if ($tujuan=="Sidoarjo")
        {
            echo "Sidoarjo";
        }
        elseif ($tujuan=="Surabaya")
        {
            echo "Surabaya";
        }       
        elseif ($tujuan=="Gresik")
        {
            echo "Gresik";
        }       
        elseif($tujuan=="")
        {
            echo "Kososng";
        } 
		?>"></td>
  </tr> 
  <tr>
    <td height="34" colspan="5" bgcolor="#999999">&nbsp;</td>
  </tr>
  <tr>
    <td height="30">Paket Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="paket" value="<?php
        if ($paket=="Low Mayak")
        {
            echo "Low Mayak";
        }
        elseif ($paket=="Middle Mayak")
        {
            echo "Middle Mayak";
        }
        elseif ($paket=="Super Mayak")
        {
            echo "Super Mayak";
        }  
		?>"></td>
    <td height="30">&nbsp;</td>
    <td>Berat Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="berat" value="<?php
        if ($berat=="< 0.5 Kg")
        {
            echo "< 0.5 Kg";
        }
        elseif ($berat=="0.5 - 1 Kg")
        {
            echo "0.5 - 1 Kg";
        }       
        elseif ($berat=="1 - 2 Kg")
        {
            echo "1 - 2 Kg";
        }      
        elseif($berat=="")
        {
            echo "Kososng";
        }  
		?>"></td>
  </tr>
  <tr>
    <td>Jenis Barang</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="jenis" value="<?php
        if ($jenis=="Mudah Pecah")
        {
            echo "Mudah Pecah";
        }
        elseif ($jenis=="Mudah Patah")
        {
            echo "Mudah Patah";
        }       
        elseif ($jenis=="Mudah Terbakar")
        {
            echo "Mudah Terbakar";
        }      
        elseif($jenis=="")
        {
            echo "Kososng";
        }  
		?>"></td>
    <td>&nbsp;</td>
    <td>Waktu Pengiriman</td>
    <?php $tanggal=date('d-m-Y',time()); 
	
	$tgl1= date('d-m-Y', strtotime('+4 days', strtotime($tanggal)));
	$tgl2= date('d-m-Y', strtotime('+3 days', strtotime($tanggal)));
	$tgl3= date('d-m-Y', strtotime('+1 days', strtotime($tanggal)));
	
	 ?>
     
     <input type="text" name="tgl" value="<?php $tgl=date('Y-m-d',time()); echo "$tgl";?>" hidden /> 
     
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" size="25" class="kapital" name="waktukirim"  
    value="<?php
        if ($paket=="Low Mayak")
        {
            echo "$tanggal - $tgl1";
        }
        elseif ($paket=="Middle Mayak")
        {
            echo "$tanggal - $tgl2";
        }       
        elseif ($paket=="Super Mayak")
        {
            echo "$tanggal - $tgl3";
        }      
        elseif($paket=="")
        {
            echo "Kososng";
        }  
		?>"></td>
  </tr>
  <tr>
    <td>Status Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="status" value="<?php
        if ($status=="On Process")
        {
            echo "On Process";
        }
        elseif ($status=="Done")
        {
            echo "Done";
        }      
        elseif($status=="")
        {
            echo "Kososng";
        }  
		?>"></td>
    <td>&nbsp;</td>
    <td>Lama Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="lama" value="<?php
	//---------------------------------------- Sidoarjo - Sidoarjo---------------------------------------------------------------
	
        if ($paket=="Low Mayak")
        {
            echo "3 - 4 hari";
        }
        elseif ($paket=="Middle Mayak")
        {
            echo "2 - 3 hari";
        }       
        elseif ($paket=="Super Mayak")
        {
            echo "1 hari";
        } 
		?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" class="kapital" name="total" value="<?php 
	
	
			//---------------------------------------- Low Mayak ---------------------------------------------------------------

        if ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "10.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "12.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "14.000";
        } 
		
		
	 elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "16.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "18.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "20.000";
        } 
		
		
	 elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "12.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "14.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "16.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "9.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "11.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "13.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "15.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "17.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "19.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "11.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "13.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "15.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "8.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "10.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "12.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "12.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "14.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "16.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "10.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Low Mayak")
        {
            echo "12.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Low Mayak")
        {
            echo "14.000";
        } 
	
	//----------------------------------------Middle Mayak----------------------------------------------------------------- 
	
        if ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "12.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "14.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "16.000";
        } 
	 
	 
	 elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "13.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "15.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "18.000";
        } 
		
		
	 elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "13.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "15.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "17.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "12.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "14.000";

        }       
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "16.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "18.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "19.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "20.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "17.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "19.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "21.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "14.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "16.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "18.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "15.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "17.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "19.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Middle Mayak")
        {
            echo "16.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Middle Mayak")
        {
            echo "18.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Middle Mayak")
        {
            echo "20.000";
        }  
		
		
 
	//---------------------------------------- Super Mayak---------------------------------------------------------------
	
        if ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "25.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "27.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "30.000";
        } 
		
	 elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "27.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "29.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "32.000";
        } 
		
	 elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "22.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "25.000";
        }       
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "28.000";
        } 
		
		
	 elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "15.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "20.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "24.000";
        } 
		
	 elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "20.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "23.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "28.000";
        } 
		
 elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "18.000";
        }
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "25.000";
        }       
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "29.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "10.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "16.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "20.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "22.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "25.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "29.000";
        } 
		
		
	 elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="< 0.5 Kg" && $paket=="Super Mayak")
        {
            echo "21.000";
        }
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="0.5 - 1 Kg" && $paket=="Super Mayak")
        {
            echo "24.000";
        }       
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="1 - 2 Kg" && $paket=="Super Mayak")
        {
            echo "27.000";
        }  
			 
				
	
	 ?>"></td>
  </tr>
  
  <tr>
    <td height="30" colspan="5" bgcolor="#990000"><div align="right"><input type="submit" value="Simpan"></div></td>
  </tr>
</table>

</div></div></form>
<?php
}
?>
</body>
</html>
