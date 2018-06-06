<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>

<meta name="description" content="Tutorial jQuery & Ajax - Dynamic Select Box Menggunakan jQuery dan Ajax" />
<meta name="keywords" content="eplusgo,dynamic,select box,ajax,jquery,php,mysql,biaya pengiriman" />

<!--webfonts-->
<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic|Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,800,700,900" rel="stylesheet" type="text/css">
<!--//webfonts-->
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

<style type="text/css">
<!--
.style1 {
font:"Courier New", Courier, monospace;
font-size:16px;
color:#000000;}
  
.bg{ 
opacity:0.1;  
background-repeat:no-repeat;
width:850px;
height:700px;
margin-bottom:-740px; 
margin-left:20px;
}

#a1
{
margin-top:50px;
width:900px;
height:740px;
}
#a2
{
margin-top:50px;
width:900px;
height:590px;
}
#b
{
margin-left:1000px;
width:200px;
height:100px;
margin-top:-400px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
<script language="javascript" src="jquery.js"></script>
 
</script>
</head>
<body> 
  	<div class="form">
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
<form method="get" >
<table width="966" border="1">
  <tr>
    <td height="73" colspan="6">FORM INPUT DATA</td>
  </tr>
  <tr>
    <td width="142" class="first"><div class="icon user style2">Nomor Resi</div></td>
    <td width="7">:</td>
    <td width="269" class="first"><input type="text" name="resi" class="text" value="<?php echo $a+$q; ?>" disabled></td>
    <td width="156" class="first"><div class="icon user style2">Kota Asal</div></td>
    <td width="13">:</td>
    <td width="189" class="first"><select name="dari">
                <option value="1" selected="selected"> - </option>
                <option value="Sidoarjo"> Sidoarjo </option>
                <option value="Surabaya"> Surabaya </option>
                <option value="Gresik"> Gresik </option> 
                </select></td>
  </tr>
  <tr><li  class="first">
    <td class="first"><div class="icon user style2">Nama Pengirim</div></td>
    <td>:</td>
    <td><input type="text" name="pengirim" class="text" placeholder="Alamat Pengirim" ></td>
    <td class="first"><div class="icon user style2">Kota Tujuan</div></td>
    <td>:</td>
    <td><select name="tujuan">
                <option value="1" selected="selected"> - </option>
                <option value="Sidoarjo"> Sidoarjo </option>
                <option value="Surabaya"> Surabaya </option>
                <option value="Gresik"> Gresik </option>
                </select></td></li>
  </tr>
  <tr>
    <td class="first"><div class="icon user style2">Alamat Pengirim</div></td>
    <td>:</td>
    <td><input type="text" name="alamat" class="text" placeholder="Alamat Pengirim" ></td>
    <td class="first"><div class="icon user style2">Berat Barang</div></td>
    <td>:</td>
    <td><select name="berat">
                <option value="1" selected="selected"> - </option>
                <option value="< 0.5 Kg"> < 0.5 Kg </option>
                <option value="1 Kg"> 1 Kg </option> 
                <option value="1 - 2 Kg"> 1 - 2 Kg </option>
                </select></td>
  </tr>
  <tr>
    <td class="first"d><div class="icon user style2">Telp. Pengirim</div></td>
    <td>:</td>
    <td><input type="text" name="telppengirim"  ></td>
    <td class="first"><div class="icon user style2">Paket Pengiriman</div></td>
    <td>:</td>
    <td><select name="paket">
                <option value="1" selected="selected"> - </option> 
                <option value="Low Mayak"> Low Mayak </option>
                <option value="Middle Mayak"> Middle Mayak </option> 
                <option value="Super Mayak"> Super Mayak </option>  
                </select></td>
  </tr>
  <tr>
    <td class="first"><div class="icon user style2">Nama Penerima</div></td>
    <td>:</td>
    <td><input type="text" name="penerima"  ></td>
    <td class="first"><div class="icon user style2">Jenis Barang</div></td>
    <td>:</td>
    <td><select name="jenis">
				 <option value="" selected="selected"> - </option>
				  <option value="Mudah Pecah">Mudah Pecah</option>
				  <option value="Mudah Patah">Mudah Patah</option>
				  <option value="Mudah Terbakar">Mudah Terbakar</option> 
				</select></td>
  </tr>
  <tr>
    <td class="first"><div class="icon user style2">Alamat Penerima</div></td>
    <td>:</td>
    <td><input type="text" name="alamatpenerima"  ></td>
    <td class="first"><div class="icon user style2">Status Barang</div></td>
    <td>:</td>
    <td><select name="status" selected="selected">
				 <option value=""> - </option>				  
				  <option value="On Process">On Process</option>
				  <option value="Done">Done</option> 
				</select></td>
  </tr>
  <tr>
    <td class="first"><div class="icon user style2">Telp. Penerima</div></td>
    <td>:</td>
    <td><input type="text" name="telppenerima"  ></td>
    <td class="first"><div class="icon user style2">Tanggal Kirim</div></td>
    <td>:</td>
    <td><input type="text" name="waktukirim" value="<?php $tanggal=date("F, d-m-Y h:i:s",time()); 
 echo $tanggal; ?>" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type=Submit name="submit" value="Cek" class="first"> 
		</td>
  </tr>
</table>
</form>
	</div> 

</body>
</html>
 
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<div style="padding:7px; height:100%;border:2px dashed #990000;margin-top:20px; auto ">
<table width="100%" border="0" class="style1">
<tr>
<td colspan="5"><div align="center"><img src="images/logo2.png" width="469" height="112" /></div></td> 
</tr>
  <tr>
    <td height="70" colspan="4" bgcolor="#990000"><div align="center"><span class="style2">STRUK PENGIRIMAN</span></div></td>
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
    <td width="260" bgcolor="#CCCCCC"><div align="center"><span class="style3">Nomor Resi : <input type="text" value="<?php echo $a+$q; ?>" disabled></span></div></td>
  </tr>
  <tr>
    <td width="166" height="30">Nama Pengirim</td>
    <td width="239">: &nbsp;&nbsp;&nbsp;<input type="text" name="pengirim" value="<?php
        if (!empty($pengirim))
            {
                echo $pengirim ;
            }
        else
            {   
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?>"></td>
    <td width="14" height="30">&nbsp;</td>
    <td width="183" height="30">Nama Penerima</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="penerima" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="alamatpengirim" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="alamatpenerima" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="telppengirim" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="telppenerima" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="dari" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="tujuan" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="paket" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="berat" value="<?php
        if ($berat=="< 0.5 Kg")
        {
            echo "< 0.5 Kg";
        }
        elseif ($berat=="1 Kg")
        {
            echo "1 Kg";
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="jenis" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="waktukirim" value="<?php $tanggal=date("F, d-m-Y h:i:s",time()); 
 echo $tanggal; ?>"></td>
  </tr>
  <tr>
    <td>Status Pengiriman</td>
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="status" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="lama" value="<?php
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
    <td>: &nbsp;&nbsp;&nbsp;<input type="text" name="total" value="<?php 
	
	
			//---------------------------------------- Low Mayak ---------------------------------------------------------------

        if ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="< 0.5 Kg" && $paket=="Low Mayak")
        {
            echo "10.000";
        }
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="1 Kg")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Low Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Middle Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Sidoarjo" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Surabaya" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Gresik" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Sidoarjo" && $berat=="1 Kg" && $paket=="Super Mayak")
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
        elseif ($dari=="Gresik" && $tujuan=="Surabaya" && $berat=="1 Kg" && $paket=="Super Mayak")
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