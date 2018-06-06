<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title> </title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--//webfonts-->

 <link rel="stylesheet" type="text/css" href="../info/cek/bootstrap-combined.min.css">
 <script src="../info/cek/bootstrap.min.js"></script>
 
<style>
#nm{
width:150px;
margin-right:50px;
background-color:#990000;
height:34px;

}

#in{
width:150px; 
margin-left:160px;
margin-top:-34px; 
}

#nm2{
width:150px;
margin-left:350px;
background-color:#990000;
margin-top:-36px;
height:34px;

}

#in2{
width:50px; 
margin-left:510px;
margin-top:-34px; 
}

.all:hover{
color:#FFFFFF; 
font-size:16px;
font-weight:bold;
text-transform:uppercase;
font-family:"kingthings Trypewriter 2";

}

#info{ 
width:550px; 
height:500px;
margin-left:730px;
margin-top:-320px;
}

.kapital{

text-transform:uppercase;
} 
.style1 {color: #FFFFFF}
</style>
</head>


<?php
include "koneksi.php";
 $resi = $_REQUEST['resi']; 
{
$select = "select * from data where resi = '$resi'";
$select_query = mysql_query($select);

while($select_result = mysql_fetch_array($select_query))
	{

$resi 					= $select_result['resi'] ;
$pengirim 				= $select_result['pengirim'] ;
$alamat			 		= $select_result['alamat'] ;
$telppengirim 			= $select_result['telppengirim'] ;
$penerima 				= $select_result['penerima'] ;
$alamatpenerima 		= $select_result['alamatpenerima'] ;
$telppenerima 			= $select_result['telppenerima'] ;
$dari 					= $select_result['dari'] ;
$tujuan 				= $select_result['tujuan'] ;
$paket 					= $select_result['paket'] ;
$jenis 					= $select_result['jenis'] ;
$berat 					= $select_result['berat'] ;
$status 				= $select_result['status'] ;
$waktukirim 			= $select_result['waktukirim'] ;
$lama 			        = $select_result['lama'] ; 
$total		 			= $select_result['total'] ; 
?>


<body>


	<form method="post" action="update.php">
    
    <br><br>
    <fieldset>
    
    
    <span class="style1">
    <input type="hidden" name="resi" value="<?php echo $resi; ?>"  >
    </span>
    <div class="all">

<div class="style1" id="nm">Nomor Resi</div>
<div id="in"> <input type="text" class="kapital" name="resi" value="<?php echo $resi; ?>" disabled  ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Kota Asal</div>
<div id="in2"><select name="dari">
                <option value=""> - - - - - - - - - - - - - - - </option>
                <option <?php if($dari=='Sidoarjo' ) {echo "selected";}?> value="Sidoarjo"> Sidoarjo </option> 
                <option <?php if($dari=='Surabaya' ) {echo "selected";}?> value="Surabaya"> Surabaya </option>
                <option <?php if($dari=='Gresik' ) {echo "selected";}?> value="Gresik"> Gresik </option> 
                </select>
</div>
</div> 
       

<div class="all">
<div class="style1" id="nm">Nama Pengirim</div>
<div id="in"><input type="text" class="kapital"  name="pengirim" value="<?php echo $pengirim; ?>" ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Kota Tujuan</div>
<div id="in2"><select name="tujuan">
                <option value="" > - - - - - - - - - - - - - - - </option>
                <option <?php if($tujuan=='Sidoarjo' ) {echo "selected";}?> value="Sidoarjo"> Sidoarjo </option>
                <option <?php if($tujuan=='Surabaya' ) {echo "selected";}?> value="Surabaya"> Surabaya </option>
                <option <?php if($tujuan=='Gresik' ) {echo "selected";}?> value="Gresik"> Gresik </option>
                </select></div>
</div> 



<div class="all">
<div class="style1" id="nm">Alamat Pengirim</div>
<div id="in"><input type="text" class="kapital" name="alamat" value="<?php echo $alamat; ?>" ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Berat Barang</div>
<div id="in2"><select name="berat">
                <option value=""> - - - - - - - - - - - - - - - </option>
                <option <?php if($berat=='< 0.5 Kg' ) {echo "selected";}?> value="< 0.5 Kg"> < 0.5 Kg </option>
                <option <?php if($berat=='0.5 - 1 Kg' ) {echo "selected";}?> value="0.5 - 1 Kg"> 0.5 - 1 Kg </option> 
                <option <?php if($berat=='1 - 2 Kg' ) {echo "selected";}?> value="1 - 2 Kg"> 1 - 2 Kg </option>
                </select></div>
</div> 


<div class="all">
<div class="style1" id="nm">Telp. Pengirim</div>
<div id="in"><input type="text" class="kapital" name="telppengirim" value="<?php echo $telppengirim; ?>" ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Paket Pengiriman</div>
<div id="in2"><select name="paket">
                <option value=""> - - - - - - - - - - - - - - - </option> 
                <option <?php if($paket=='Low Mayak' ) {echo "selected";}?> value="Low Mayak"> Low Mayak </option>
                <option <?php if($paket=='Middle Mayak' ) {echo "selected";}?> value="Middle Mayak"> Middle Mayak </option> 
                <option <?php if($paket=='Super Mayak' ) {echo "selected";}?> value="Super Mayak"> Super Mayak </option>  
                </select></div>
</div> 


<div class="all">
<div class="style1" id="nm">Nama Penerima</div>
<div id="in"><input type="text" class="kapital"  name="penerima" value="<?php echo $penerima; ?>" ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Jenis Barang</div>
<div id="in2"><select name="jenis">
				 <option value="" selected="selected"> - - - - - - - - - - - - - - - </option>
				  <option <?php if($jenis=='Mudah Pecah' ) {echo "selected";}?> value="Mudah Pecah">Mudah Pecah</option>
				  <option <?php if($jenis=='Mudah Patah' ) {echo "selected";}?> value="Mudah Patah">Mudah Patah</option>
				  <option <?php if($jenis=='Mudah Terbakar' ) {echo "selected";}?> value="Mudah Terbakar">Mudah Terbakar</option> 
				</select></div>
</div>                


<div class="all">
<div class="style1" id="nm">Alamat Penerima</div>
<div id="in"><input type="text" class="kapital"  name="alamatpenerima" value="<?php echo $alamatpenerima; ?>" ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Status Barang</div>
<div id="in2"><select name="status" selected="selected">
				 <option value=""> - - - - - - - - - - - - - - - </option>				  
				  <option <?php if($status=='On Process' ) {echo "selected";}?> value="On Process">On Process</option>
				  <option <?php if($status=='Done' ) {echo "selected";}?> value="Done">Done</option> 
				</select></div>
</div>                


<div class="all">
<div class="style1" id="nm">Telp. Penerima</div>
<div id="in"><input type="text" class="kapital"  name="telppenerima" value="<?php echo $telppenerima; ?>" ></div>
</div>

<div class="all">
<div class="style1" id="nm2">Tanggal Kirim</div>
<div id="in2"><input type="text" class="kapital"  name="waktukirim" value="<?php echo $waktukirim; ?>" ></div>
</div>

<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   


<input type="submit" name="submit" value="Cek Data"> 
</form> 



        </div> 
        </div> 
</body>
</html>

<?php
}
}
?>