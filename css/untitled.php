<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
}
.style2 {font-size: 12px}
.style5 {color: #000000}
.style7 {font-size: 10px; color: #000000; }
.style8 {font-size: 10px}
.style10 {font-size: 10px; color: #FFFFFF; }
.style11 {color: #FFFFFF}
.style12 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>

<div class="all">
<div id="nm">Nomor Resi</div>
<div id="in"><input type="text" class="kapital" name="resi" value="<?php echo $a+$q; ?>" disabled></div>
</div>

<div class="all">
<div id="nm2">Kota Asal</div>
<div id="in2"><select name="dari">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option>
                <option value="Sidoarjo"> Sidoarjo </option>
                <option value="Surabaya"> Surabaya </option>
                <option value="Gresik"> Gresik </option> 
                </select>
</div>
</div> 
       

<div class="all">
<div id="nm">Nama Pengirim</div>
<div id="in"><input type="text" class="kapital"  name="pengirim" placeholder="Alamat Pengirim" ></div>
</div>

<div class="all">
<div id="nm2">Kota Tujuan</div>
<div id="in2"><select name="tujuan">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option>
                <option value="Sidoarjo"> Sidoarjo </option>
                <option value="Surabaya"> Surabaya </option>
                <option value="Gresik"> Gresik </option>
                </select></div>
</div> 



<div class="all">
<div id="nm">Alamat Pengirim</div>
<div id="in"><input type="text" class="kapital" name="alamat" placeholder="Alamat Pengirim" ></div>
</div>

<div class="all">
<div id="nm2">Berat Barang</div>
<div id="in2"><select name="berat">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option>
                <option value="< 0.5 Kg"> < 0.5 Kg </option>
                <option value="1 Kg"> 1 Kg </option> 
                <option value="1 - 2 Kg"> 1 - 2 Kg </option>
                </select></div>
</div> 


<div class="all">
<div id="nm">Telp. Pengirim</div>
<div id="in"><input type="text" class="kapital" name="telppengirim" placeholder="Telp. Pengirim" ></div>
</div>

<div class="all">
<div id="nm2">Paket Pengiriman</div>
<div id="in2"><select name="paket">
                <option value="1" selected="selected"> - - - - - - - - - - - - - - - </option> 
                <option value="Low Mayak"> Low Mayak </option>
                <option value="Middle Mayak"> Middle Mayak </option> 
                <option value="Super Mayak"> Super Mayak </option>  
                </select></div>
</div> 


<div class="all">
<div id="nm">Nama Penerima</div>
<div id="in"><input type="text" class="kapital"  name="penerima" placeholder="Nama Penerima" ></div>
</div>

<div class="all">
<div id="nm2">Jenis Barang</div>
<div id="in2"><select name="jenis">
				 <option value="" selected="selected"> - - - - - - - - - - - - - - - </option>
				  <option value="Mudah Pecah">Mudah Pecah</option>
				  <option value="Mudah Patah">Mudah Patah</option>
				  <option value="Mudah Terbakar">Mudah Terbakar</option> 
				</select></div>
</div>                


<div class="all">
<div id="nm">Alamat Penerima</div>
<div id="in"><input type="text" class="kapital"  name="alamatpenerima" placeholder="Alamat Penerima" ></div>
</div>

<div class="all">
<div id="nm2">Status Barang</div>
<div id="in2"><select name="status" selected="selected">
				 <option value=""> - - - - - - - - - - - - - - - </option>				  
				  <option value="On Process">On Process</option>
				  <option value="Done">Done</option> 
				</select></div>
</div>                


<div class="all">
<div id="nm">Telp. Penerima</div>
<div id="in"><input type="text" class="kapital"  name="telppenerima" placeholder="Telp. Penerima" ></div>
</div>

<div class="all">
<div id="nm2">Tanggal Kirim</div>
<div id="in2"><input type="text" class="kapital"  name="waktukirim" value="<?php $tanggal=date("d-m-Y h:i:s",time()); echo $tanggal; ?>" ></div>
</div>

<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   


<input type="submit" name="submit" value="Cek Data"> 
		
</form> 



        </div> 
        </div>        
</body>
</html>
