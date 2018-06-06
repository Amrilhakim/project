<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" /> 
 <link rel="stylesheet" type="text/css" href="../info/cek/bootstrap-combined.min.css">
 <script src="../info/cek/bootstrap.min.js"></script>
 
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










#navlist { color: white; background: #17a; border-bottom: 0.2em solid #17a; border-right: 0.2em solid #17a; padding: 0 1px; margin-center: 0; width: 17em; font: normal 12px Arial Black, sans-serif; } 
#navlist li { list-style: none; margin: 0; font-size: 1em; } 
#navlist a { display: block; text-decoration: none; margin-bottom: 0.5em; margin-top: 0.5em; color: white; background: #990000; border-width: 1px; border-style: solid; border-color: #5bd #035 #068 #6cf; border-left: 1em solid #fc0; padding: 0.25em 0.5em 0.4em 0.75em; } 
#navlist a#current { border-color: #5bd #035 #068 #f30; } 
#navlist a { width: 99%; /* only necessary for Internet Explorer */ } 
#navlist a { voice-family: "\"}\""; voice-family: inherit; width: 9.6em; /* Tantek-hack should only used if Internet-Explorer 6 is in standards-compliant mode */ } 
#navcontainer>#navlist a { width: auto; /* only necessary if you use the hacks above for the Internet Explorer */ } 
#navlist a:hover, #navlist a#current:hover { background-color:#990033; border-color: #069 #6cf #5bd #fc0; padding: 0.4em 0.35em 0.25em 0.9em; }
 #navlist a:active, #navlist a#current:active { background: #17a; border-color: #069 #6cf #5bd white; padding: 0.4em 0.35em 0.25em 0.9em; }
.c{
margin-left:15px;
color:#FFCC00;

}
.q {background: #17a; border-bottom: 0.2em solid #17a; border-right: 0.2em solid #17a; padding: 0 1px; margin-left: 0; width: 13em;}

.nav{
background-color:#FF0000;
height:70px;
width:98%;

}
-->
</style>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 20px;
}
.style2 {font-size: 12px}
.style5 {color: #000000}
.style7 {font-size: 10px; color: #000000; }
.style8 {font-size: 10px}
.style10 {font-size: 10px; color: #FFFFFF; }
.style11 {color: #FFFFFF}
.style12 {color: #FF0000}
-->
</style> 


 </head>
<body>

<?php 
include "koneksi.php"; 
$select = "select * from data order by resi asc";
$select_query = mysql_query($select);

while($smp = mysql_fetch_array($select_query))
{
$b =1;
$a			= $smp['resi'] ;
  }

?> 
<form method="get" action="indexx.php" >
<br> 
<div class="all">
<div class="style11" id="nm">Nomor Resi</div>
<div id="in"><input  requered="requered" type="text" class="kapital" name="resi" value="<?php echo $a+$b; ?>" disabled></div>
</div>

<div class="all">
<div class="style11" id="nm2">Kota Asal</div>
<div id="in2"><span class="style11">
  <select  requered="requered" name="dari" >
    <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option>
    <option value="Sidoarjo"> Sidoarjo </option>
    <option value="Surabaya"> Surabaya </option>
    <option value="Gresik"> Gresik </option> 
  </select>
</span></div>
</div> 
       

<div class="all">
<div class="style11" id="nm">Nama Pengirim</div>
<div id="in"><input  requered="requered" type="text" class="kapital"  name="pengirim" placeholder="Alamat Pengirim" ></div>
</div>

<div class="all">
<div class="style11" id="nm2">Kota Tujuan</div>
<div id="in2"><select  requered="requered"   name="tujuan">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option>
                <option value="Sidoarjo"> Sidoarjo </option>
                <option value="Surabaya"> Surabaya </option>
                <option value="Gresik"> Gresik </option>
                </select></div>
</div> 



<div class="all">
<div class="style11" id="nm">Alamat Pengirim</div>
<div id="in"><input  requered="requered" type="text" class="kapital" name="alamat" placeholder="Alamat Pengirim" ></div>
</div>

<div class="all">
<div class="style11" id="nm2">Berat Barang</div>
<div id="in2"><select  requered="requered" name="berat">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option>
                <option value="< 0.5 Kg"> < 0.5 Kg </option>
                <option value="0.5 - 1 Kg"> 0.5 - 1 Kg </option> 
                <option value="1 - 2 Kg"> 1 - 2 Kg </option>
                </select></div>
</div> 


<div class="all">
<div class="style11" id="nm">Telp. Pengirim</div>
<div id="in"><input  requered="requered" type="text" class="kapital" name="telppengirim" placeholder="Telp. Pengirim" ></div>
</div>

<div class="all">
<div class="style11" id="nm2">Paket Pengiriman</div>
<div id="in2"><select  requered="requered" name="paket">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option> 
                <option value="Low Mayak"> Low Mayak </option>
                <option value="Middle Mayak"> Middle Mayak </option> 
                <option value="Super Mayak"> Super Mayak </option>  
                </select></div>
</div> 


<div class="all">
<div class="style11" id="nm">Nama Penerima</div>
<div id="in"><input  requered="requered" type="text" class="kapital"  name="penerima" placeholder="Nama Penerima" ></div>
</div>

<div class="all">
<div class="style11" id="nm2">Jenis Barang</div>
<div id="in2"><select  requered="requered" name="jenis">
				 <option value="" selected="selected"> - - - - - - - - - - - - - - - </option>
				  <option value="Mudah Pecah">Mudah Pecah</option>
				  <option value="Mudah Patah">Mudah Patah</option>
				  <option value="Mudah Terbakar">Mudah Terbakar</option> 
				</select></div>
</div>                


<div class="all">
<div class="style11" id="nm">Alamat Penerima</div>
<div id="in"><input  requered="requered" type="text" class="kapital"  name="alamatpenerima" placeholder="Alamat Penerima" ></div>
</div>

<div class="all">
<div class="style11" id="nm2">Status Barang</div>
<div id="in2"><select  requered="requered" name="status" selected="selected">
				 <option value=""> - - - - - - - - - - - - - - - </option>				  
				  <option value="On Process">On Process</option>
				  <option value="Done">Done</option> 
				</select></div>
</div>                


<div class="all">
<div class="style11" id="nm">Telp. Penerima</div>
<div id="in"><input  requered="requered" type="text" class="kapital"  name="telppenerima" placeholder="Telp. Penerima" ></div>
</div>

<div class="all">
<div class="style11" id="nm2">Tanggal Kirim</div>
<div id="in2"><input  requered="requered" type="text" class="kapital"  name="waktukirim" value="<?php $tanggal=date("d-m-Y h:i:s",time()); echo $tanggal; ?>" ></div>
</div>

<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   


<input type="submit" name="submit" value="Cek Data">
</form> 


<div id="info">
 		
 <!------------------------------------------------------------ KACAB SIDOARJO ------------------------------------------------------->
 
 <div id="navcontainer">	
		<ul id="navlist">
        <li><div id="ssda" style="display: block;">
		        <div align="left"><a class="smallbutton" href="javascript:void(0)" onclick=		"document.getElementById('sda').style.display='block';document.getElementById('hsda').style.display='block';document.getElementById('ssda').style.display='none'"><span class="style26">Lihat Kacab Sidoarjo</span><img src="images/drop.png" /></a></div>
        </div>

<div id="hsda" style="display: none;">
  <div><a href="javascript:void(0)" class="smallbutton style26" onClick="document.getElementById('sda').style.display='none';document.getElementById('hsda').style.display='none';document.getElementById('ssda').style.display='block'"><span class="style26">Tutup Kacab Sidoarjo</span></a></div>
</div> </li> </ul>
 	<div id="sda" style="text-align: left; margin-bottom: 18px; display: none;">
		
<table width="513" border="0">
  <tr>
    <td height="41" colspan="10" bgcolor="#FF0000"><div align="center" class="style1">INFO MAYAK EXPRESS KACAB SIDOARJO</div></td>
  </tr>
  <tr>
    <td width="51" bgcolor="#990000"><div align="center"><strong><span class="style10">Paket</span></strong></div></td>
    <td width="60" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Berat</span></div>
    </div></td>
    <td width="73" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="28" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8  style10">Tarif</span></div>
    </div></td>
    <td width="70" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="37" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Tarif</span></div>
    </div></td>
    <td width="66" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="37" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Tarif</span></div>
    </div></td>
    <td width="38" colspan="2" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Estimasi</span></div>
    </div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#0000FF"><div align="center" class="style10">Low<br />
    Mayak</div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">SDA - SDA</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">10.000</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">SDA - SBY</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">16.000</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">SDA - GSK</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">12.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#0000FF"><div align="center"><span class="style10">3 - 4 <br />
    hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">SDA - SDA</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">12.000</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">SDA - SBY</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">18.000</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">SDA - GSK</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">14.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">1 - 2 Kg</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">SDA - SDA</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">14.000</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">SDA - SBY</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">20.000</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">SDA - GSK</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">16.000</span></div></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" height="25"><div align="center"><span class="style2"><span class="style5"><span class="style8"></span></span></span></div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#FFFF00"><div align="center" class="style7">Middle<br />
    Mayak</div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">SDA - SDA</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">12.000</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">SDA - SBY</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">13.000</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">SDA - GSK</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">13.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#FFFF00"><div align="center"><span class="style7">2 - 3 <br />
    hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">SDA - SDA</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">14.000</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">SDA - SBY</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">15.000</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">SDA - GSK</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">15.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">1 - 2 Kg</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">SDA - SDA</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">16.000</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">SDA - SBY</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">18.000</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">SDA - GSK</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">17.000</span></div></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" height="25"><div align="center"><span class="style2"><span class="style5"><span class="style8"></span></span></span></div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#00FF00"><div align="center" class="style7">Super<br />
    Mayak</div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">SDA - SDA</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">25.000</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">SDA - SBY</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">27.000</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">SDA - GSK</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">22.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#00FF00"><div align="center"><span class="style7">1 <br /> 
    hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">SDA - SDA</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">27.000</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">SDA - SBY</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">29.000</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">SDA - GSK</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">25.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">1 - 2 Kg</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">SDA - SDA</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">30.000</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">SDA - SBY</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">32.000</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">SDA - GSK</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">28.000</span></div></td>
  </tr>
</table>

 
        </div> 
        </div>
               


 <!------------------------------------------------------------ KACAB SURABAYA ------------------------------------------------------->
 
 <div id="navcontainer">	
		<ul id="navlist">
        <li><div id="ssby" style="display: block;">
		        <div align="left"><a class="smallbutton" href="javascript:void(0)" onclick=		"document.getElementById('sby').style.display='block';document.getElementById('hsby').style.display='block';document.getElementById('ssby').style.display='none'"><span class="style26">Lihat Kacab Surabaya</span><img src="images/drop.png" /></a></div>
        </div>

<div id="hsby" style="display: none;">
  <div><a href="javascript:void(0)" class="smallbutton style26" onClick="document.getElementById('sby').style.display='none';document.getElementById('hsby').style.display='none';document.getElementById('ssby').style.display='block'"><span class="style26">Tutup Kacab Surabaya</span></a></div>
</div> </li> </ul>
 	<div id="sby" style="text-align: left; margin-bottom: 18px; display: none;">


<table width="513" border="0">
  <tr>
    <td height="41" colspan="10" bgcolor="#FF0000"><div align="center" class="style1">INFO MAYAK EXPRESS KACAB SURABAYA</div></td>
  </tr>
  <tr>
    <td width="51" bgcolor="#990000"><div align="center"><strong><span class="style10">Paket</span></strong></div></td>
    <td width="60" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Berat</span></div>
    </div></td>
    <td width="73" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="28" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8  style10">Tarif</span></div>
    </div></td>
    <td width="70" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="37" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Tarif</span></div>
    </div></td>
    <td width="66" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="37" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Tarif</span></div>
    </div></td>
    <td width="38" colspan="2" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Estimasi</span></div>
    </div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#0000FF"><div align="center" class="style10">Low<br />
    Mayak</div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">15.000</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">9.000</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">11.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#0000FF"><div align="center"><span class="style10">3 - 4 <br />
    hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">17.000</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">11.000</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">13.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">1 - 2 Kg</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">19.000</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">13.000</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">15.000</span></div></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" height="25"><div align="center"><span class="style2"><span class="style5"><span class="style8"></span></span></span></div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#FFFF00"><div align="center" class="style7">Middle<br />
    Mayak</div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">18.000</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">14.000</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">17.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#FFFF00"><div align="center"><span class="style7">2 - 3 <br />
    hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">19.000</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">16.000</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">19.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">1 - 2 Kg</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">20.000</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">18.000</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">21.000</span></div></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" height="25"><div align="center"><span class="style2"><span class="style5"><span class="style8"></span></span></span></div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#00FF00"><div align="center" class="style7">Super<br />
    Mayak</div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">20.000</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">15.000</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">19.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#00FF00"><div align="center"><span class="style7">1 <br /> 
    hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">2.000</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">20.000</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">25.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">1 - 2 Kg</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style8">SBY - SDA</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">28.000</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style8">SBY - SBY</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">24.000</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style8">SBY - GSK</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">29.000</span></div></td>
  </tr>
</table>
 
        </div> 
        </div>        
        
 <!------------------------------------------------------------ KACAB GERSIK ------------------------------------------------------------------->
 
 <div id="navcontainer">	
		<ul id="navlist">
        <li><div id="sgsk" style="display: block;">
		        <div align="left"><a class="smallbutton" href="javascript:void(0)" onclick=		"document.getElementById('gsk').style.display='block';document.getElementById('hgsk').style.display='block';document.getElementById('sgsk').style.display='none'"><span class="style26">Lihat Kacab Gresik</span><img src="images/drop.png" /></a></div>
        </div>

<div id="hgsk" style="display: none;">
  <div><a href="javascript:void(0)" class="smallbutton style26" onClick="document.getElementById('gsk').style.display='none';document.getElementById('hgsk').style.display='none';document.getElementById('sgsk').style.display='block'"><span class="style26">Tutup Kacab Gresik</span></a></div>
</div> </li> </ul>
 	<div id="gsk" style="text-align: left; margin-bottom: 18px; display: none;">


<table width="513" border="0">
  <tr>
    <td height="41" colspan="10" bgcolor="#FF0000"><div align="center" class="style1">INFO MAYAK EXPRESS KACAB GRESIK</div></td>
  </tr>
  <tr>
    <td width="51" bgcolor="#990000"><div align="center"><strong><span class="style10">Paket</span></strong></div></td>
    <td width="60" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Berat</span></div>
    </div></td>
    <td width="73" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="28" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8  style10">Tarif</span></div>
    </div></td>
    <td width="70" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="37" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Tarif</span></div>
    </div></td>
    <td width="66" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Asal-Tujuan</span></div>
    </div></td>
    <td width="37" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Tarif</span></div>
    </div></td>
    <td width="38" colspan="2" bgcolor="#990000"><div align="center" class="style12">
      <div align="center"><span class="style8 style10">Estimasi</span></div>
    </div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#0000FF"><div align="center" class="style10">Low<br />
      Mayak</div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">15.000</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">9.000</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#4F56B0"><div align="center" class="style11"><span class="style8">11.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#0000FF"><div align="center"><span class="style10">3 - 4 <br />
      hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">17.000</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">11.000</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#3657C9"><div align="center" class="style11"><span class="style8">13.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">1 - 2 Kg</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">19.000</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">13.000</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#2C8CD3"><div align="center" class="style11"><span class="style8">15.000</span></div></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" height="25"><div align="center"><span class="style2"><span class="style5"><span class="style8"></span></span></span></div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#FFFF00"><div align="center" class="style7">Middle<br />
      Mayak</div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">18.000</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">14.000</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#FFCC66"><div align="center"><span class="style7">17.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#FFFF00"><div align="center"><span class="style7">2 - 3 <br />
      hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">19.000</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">16.000</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#FF9933"><div align="center"><span class="style7">19.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">1 - 2 Kg</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">20.000</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">18.000</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#FF6600"><div align="center"><span class="style7">21.000</span></div></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#CCCCCC" height="25"><div align="center"><span class="style2"><span class="style5"><span class="style8"></span></span></span></div></td>
  </tr>
  <tr>
    <td rowspan="3" bgcolor="#00FF00"><div align="center" class="style7">Super<br />
      Mayak</div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">&lt; 0.5 Kg</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">20.000</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">15.000</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style7">19.000</span></div></td>
    <td colspan="2" rowspan="3" bgcolor="#00FF00"><div align="center"><span class="style7">1 <br />
      hari</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">0.5 - 1 Kg</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">2.000</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">20.000</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#00FFCC"><div align="center"><span class="style7">25.000</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">1 - 2 Kg</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style8">GSK - SDA</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">28.000</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style8">GSK - SBY</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">24.000</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style8">GSK - GSK</span></div></td>
    <td bgcolor="#00FF99"><div align="center"><span class="style7">29.000</span></div></td>
  </tr>
</table>
        
         
</div>
</div>
</div>
</body> 
</html> 