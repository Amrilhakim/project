<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
/*Fun begins*/
.tab_container{width:100%;margin:0 auto;padding-top:10px;position:relative; color:#990000;}

input,section{clear:both;padding-top:10px;color:#990000;display:none}
label{
width:auto;
height:30px;
margin-top:20px;
color:#990033; 
 
	 
	/* Background color and gradients */
	
	background: #014464; 
	background: -webkit-gradient(linear, 0% 0%, 0% 30%, from(#990033), to(#990000));
	
	/* border */
		border: 1px solid #002232;

	-moz-box-shadow:inset 0px 0px 1px #edf9ff;
	-webkit-box-shadow:inset 0px 0px 1px #edf9ff;
	box-shadow:inset 0px 0px 1px #edf9ff; 
	box-shadow: 0px 8px 6px rgba(3,3,3,3);
	background: -webkit-gradient(linear, 0%, 0%, 0% 0%, from(#0000FF), to(#FFFFFF));

 display:block;float:left;width:auto; height:30px; color:#FFFFFF;cursor:pointer;text-decoration:none;text-align:center;background:#990000; 
	background: -moz-linear-gradient(top, #990033, #990000);}
#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3,
#tab4:checked ~ #content4,
#tab5:checked ~ #content5,
#tab6:checked ~ #content6,
#tab7:checked ~ #content7
{display:block;padding:20px;background:#fff;color:#990033;border-bottom:2px solid #f0f0f0}
.tab_container .tab-content p,.tab_container .tab-content h3{-webkit-animation:fadeInScale 0.7s ease-in-out;-moz-animation:fadeInScale 0.7s ease-in-out;animation:fadeInScale 0.7s ease-in-out; background-color:#990000}
.tab_container .tab-content h3{text-align:center}
.tab_container [id^="tab"]:checked + label{background:#fff; color:#990033;box-shadow:inset 0 3px #990033}
.tab_container [id^="tab"]:checked + label .fa{ color:#FF0000;}
label .fa{font-size:1.3em;margin:0 0.4em 0 0;display:inline-block;width:1.28571429em;height:auto;float:none;margin-left:-15px}
}
/*Media query*/
@media only screen and (max-width:900px){
  label span{display:none}
  .tab_container{width:98%}
}
/*Content Animation*/
@keyframes fadeInScale{
  0%{transform:scale(0.9);opacity:0}
  100%{transform:scale(1);opacity:1}
}
.clearfix:before,.clearfix:after{content:" ";display:table}




</style>
</head>

<body>

<div class="tab_container" > 
<input checked="" id="tab1" name="tabs" type="radio" />
<label for="tab1">
<i class="fa fa-code"></i>&nbsp;&nbsp;&nbsp;&nbsp; <span class="style3">INPUT DATA</span> &nbsp;&nbsp;&nbsp;&nbsp;</label>
 


<input id="tab2" name="tabs" type="radio" />
<label for="tab2">
<i class="fa fa-code"></i>&nbsp;&nbsp;&nbsp;&nbsp; <span class="style3">LIHAT DATA</span>&nbsp;&nbsp;&nbsp;&nbsp;</label>  

 

<section class="tab-content" id="content1">
 	 	
   <iframe src="index.php" width="100%" height="1200" scrolling="no" frameborder="0"></iframe>
 
</section>



<section class="tab-content" id="content2">
 	
   <iframe src="lihat.php" width="100%" height="1200" scrolling="no" frameborder="0"></iframe>
 
</section>
 
</div>
</body>
</html>
