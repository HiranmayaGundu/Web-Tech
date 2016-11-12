<?php
		$page = "home";
		$title="Specs";
		$ROOT = "./";
		require("./functions.php");

		// Render header
		render('header.php', [ 'page'=>$page, 'title'=>$title ]);
?>


<style>
body{
    background-color: #bda0cb;
    background: -webkit-linear-gradient(left,rgba(255,248,220,1), rgba(255,160,122,1) );
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
   // background-color: #333;
   // background: -webkit-linear-gradient(right,rgba(179, 179, 179, 1),rgba(255, 234, 241, 1));
   background: -webkit-linear-gradient(right,rgba(255,248,220,1),rgba(255,160,122,1));
	padding-right: 1.2cm;
	//padding-left: 0cm;
}

/* Float the list items side by side */
ul.topnav li 
{	float: right;
	list-style-type: none;
}




ul.topnav li a {
	list-style-type: none;
    display: inline-block;
   // color: #f2f2f2;
    color:#333333;
    text-align: center;
    padding: 15px 30px;
    text-decoration: none;
	font-style:oblique;
    transition: 1s;
    font-size: 20px;
}


/* Change background color of links on hover */
ul.topnav li a:hover {background-color: #333333; color:#ffffff;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}


	body
	{
		background-color:white;
		//opacity:0.5;
		//background: -webkit-linear-gradient(left,rgba(0,0,0,0.5), rgba(0,0,0,0.5) );
	}
	
	div.wrapper
	{
		padding: 2px 2px 2px 2px;
		position:absolute;
		left:200px;
		border:solid gray  1px;
		background-color: rgb(220,220,220) ;
		//background: -webkit-linear-gradient(right,rgba(50,205,50,1),  rgba(0,250,154,1)  );
		width:830px;	
	}
	div.image
	{
		// Big div with iPhone pic
		//background: -webkit-linear-gradient(left,rgba(179, 179, 179, 1),rgba(255, 234, 241, 1));
		background: -webkit-linear-gradient(left,rgba(255,248,220,1), rgba(255,160,122,1) );
		background-position: 1% 1%; 
		width:800px;
		
		
	}
	div.heading
	{
		height:40px;
		width:800px;
		//background-image: url("bg_7.jpg");	
		//background: -webkit-linear-gradient(right,rgba(0,255,127,1),rgba(255, 234, 241, 1));
		 background: -webkit-linear-gradient(right,rgba(255,248,220,1),rgba(255,160,122,1));
	}
	
	
	div.w3-quarter
	{
		display:inline-block;
		padding: 10px 10px 10px 10px;
		height:40px;
		width:120px;
		
		
	}
	div.buttons
	{
		display:inline-block;
		height:40px;
		width:120px;
		
		font-family: Oswald;
		//font-family: "Lucida Console", Monaco ;
		font-size: 23px;
		font-style: normal;
		font-variant: normal;
		font-weight: bold;
		
	}
		
	img.size
	{
		width:300px;
		height:250px;
		transition: width 2s, height 2s, transform 1s;
	}
	img.spec_icon
	{
		width:25px;
		height:25px
		transition: width 2s, height 2s, transform 1s;
	}
	img:hover
	{
		transform:scale(1.1,1.1);
    }

    div.buttons:hover
	{
		background-color:#4B0082;
		color:white;
	}
	div.links
	{
		display:inline-block;
		height:40px;
		width:40px;
	}
	img.link_size
	{
		height:40px;
		width:40px;
	
	}
		
    th, td 
	{
		border-bottom: 1px solid #ddd;
	}
	
	table
	{
		//background: -webkit-linear-gradient(left,rgba(255,0,0,0),rgba(255,0,0,1));
		background:#FAFAFA;
		font-family: Arimo;
		font-size: 13px;
		font-style: normal;
		font-variant: normal;
	
	}
	td.col_1
	{
		color:#b23f33;
		font-family: Oswald;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: bold;
		line-height: 22px;
		background:#F5F5F5;
		text-align: center;
    padding: 8px;

	}
	
	
	td.col_2
	{
		color:#4c4943;
		font-family: Arimo;
		font-size: 14px;
		font-style: normal;
		font-variant: normal;
		font-weight: bold;
		line-height: 18.4px;
//		text-align: center;
	}
	
	//Arimo
	// Google-Oswald
	

</style>
<main>
<!-- Photo Grid-->
<div class="wrapper" align="center">

	<div  class="image" align="center" >
	
		<div class="heading" align="right" >

			<div class="links" align="center">
				<img src="./images/link_1.jpg" alt="touch"  class="link_size" title="Facebook">
			</div>
			<div class="links" align="center";>
				<img src="./images/link_2.png" alt="touch"  class="link_size" title="Twitter">
			</div>
			<div class="links" align="center";>
				<img src="./images/link_3.png" alt="touch"  class="link_size" title="Google+">
			</div>
		</div>
		<div class="w3-quarter" >
			<img src="./images/iphone_7.jpg" alt="gadget" class="size" style="width:250px;height:300px" >
		</div>	
		<div class="w3-quarter" style="width:200px;height:250px; text-decoration: none; font-style:oblique;">
		<!--	<h3 style="color:blue;">Released 2016, September<br>
				138g, 7.1mm thickness<br>
				iOS 10.0.1, up to iOS 10.0.2<br>
				32/128/256GB storage, no card slot
			</h3><br><br><br>
		/-->
		</div>
		<div class="w3-quarter" align="left"style="width:200px;height:250px;">
			<h3>
				<img src="./images/touch_0.jpg" alt="touch"  class="spec_icon" title="Touch">  4.7"<br><span style="font-family: courier new;">750x1334 pixels</span><br><br>
				<img src="./images/cam_0.jpg" alt="cam" class="spec_icon" title="Camera">  12MP<br> <span style="font-family: courier;" >2160p</span><br><br>
				<img src="./images/ram_0.jpg" alt="ram"  class="spec_icon" title="RAM">  2GB RAM<br> <span style="font-family: courier;"> Apple A10 Fusion</span><br><br>
				<img src="./images/battery_0.jpg" alt="battery"  class="spec_icon" title="Battery">  1960mAh<br> <span style="font-family: courier;"> Li-Iont</span>
			</h3>
		</div>
			
			
			
			<ul class="topnav" id="topnav" style="list-style-type: none";>
			<ul class="right" id="myTopnav">
			<li style="float:left";><a href="#review">Review</a></li>
			<li style="list-style-type: none";><a href="#opinion">Opinion</a></li>
			<li style="list-style-type: none";><a href="#pictures">Pictures</a></li>
			
			</ul>

</div>   
	
	
	 
  <!-- table-->
<div  align="center" class="image" >
  
  
 <table>
  <tr>
	<td class="col_1"> NETWORK </td>
	<td  class="col_2"> Technology </td>
	<td> GSM/CDMA/HSPA/EVDO/LTE </td>
  </tr>
  <tr>
	<td  rowspan="2" class="col_1"> LAUNCH </td>
	<td class="col_2"> Anounced </td>
	<td>2016, September </td>
  </tr>
   <tr>
	<td class="col_2"> status </td>
	<td>Available. Released 2016, September </td>
  </tr>
  <tr>
	<td rowspan="4" class="col_1"> BODY </td>
	<td class="col_2"> Dimensions </td>
	<td> 138.3 x 67.1 x 7.1 mm (5.44 x 2.64 x 0.28 in) </td>
  </tr>
   <tr>
	<td class="col_2"> weight </td>
	<td>138 g (4.87 oz)</td>
  </tr>
   <tr>
	<td class="col_2"> SIM</td>
	<td> Nano-SIM</td>
  </tr>
  <tr>
  <td>     </td>
	<td>- IP67 certified - dust and water resistant<br>
         - Water resistant up to 1 meter and 30 minutes<br>
          - Apple Pay (Visa, MasterCard, AMEX certified) </td>
  </tr>
   <tr>
	<td rowspan="6" class="col_1"> DISPLAY </td>
	<td class="col_2"> Type </td>
	<td>LED-backlit IPS LCD, capacitive touchscreen, 16M colors</td>
   <tr>
	<td class="col_2"> Size </td>
	<td>4.7 inches (~65.6% screen-to-body ratio)</td>
  </tr>
   <tr>
	<td class="col_2">Resolution</td>
	<td>750 x 1334 pixels (~326 ppi pixel density)</td>	
  </tr>
   <tr>
	<td class="col_2">Multitouch</td>
	<td>Yes</td>	
  </tr>
 <tr>
	<td class="col_2">Protection</td>
	<td>Ion-strengthened glass, oleophobic coating</td>	
  </tr>
  
  <tr>
  <td>     </td>
	<td>- Wide color gamut display<br>
		- 3D Touch display & home button<br>
		- Display Zoom </td>
  </tr>
   <tr>
	<td rowspan="4" class="col_1"> PLATFOM </td>
	<td class="col_2"> OS </td>
	<td> iOS 10.0.1, upgradable to iOS 10.0.2 </td>
  </tr>
   <tr>
	<td class="col_2"> Chipset </td>
	<td>Apple A10 Fusion</td>
  </tr>
   <tr>
	<td class="col_2"> CPU</td>
	<td> Quad-core</td>
  </tr>
  <tr>
  <td class="col_2">GPU</td>
	<td>(six-core graphics) </td>
  </tr>
  <tr>
	<td  rowspan="2" class="col_1"> MEMORY </td>
	<td class="col_2"> Card Slot </td>
	<td>No </td>
  </tr>
   <tr>
	<td class="col_2"> Internal </td>
	<td>32/128/256 GB, GB, 2 GB RAM </td>
  </tr>
   <tr>
	<td rowspan="4" class="col_1"> CAMERA </td>
	<td class="col_2"> Primary </td>
	<td> 12 MP, f/1.8, 28mm, phase detection autofocus, OIS, quad-LED (dual tone) flash, check quality </td>
  </tr>
   <tr>
	<td class="col_2"> Features</td>
	<td>1/3" sensor size, geo-tagging, simultaneous 4K video and 8MP image recording, touch focus, face/smile detection, HDR (photo/panorama)</td>
  </tr>
   <tr>
	<td class="col_2"> Video</td>
	<td> 2160p@30fps, 1080p@30/60/120fps, 720p@240fps, check quality</td>
  </tr>
  <tr>
  <td class="col_2">Secondary</td>
	<td>7 MP, f/2.2, 32mm, 1080p@30fps, 720p@240fps, face detection, HDR, panorama </td>
  </tr>
  
  <tr>
	<td rowspan="4" class="col_1"> SOUND </td>
	<td class="col_2"> Alert Types </td>
	<td> Vibration, proprietary ringtones </td>
  </tr>
   <tr>
	<td class="col_2"> Loudspeakers</td>
	<td>Yes, with stereo speakers</td>
  </tr>
   <tr>
	<td class="col_2">3.5mm jack</td>
	<td> No</td>
  </tr>
  <tr>
  <td>        </td>
	<td>- Active noise cancellation with dedicated mic<br>
- Lightning to 3.5 mm headphone jack adapter incl. </td>
  </tr>
  <tr>
	<td rowspan="6" class="col_1"> COMMS </td>
	<td class="col_2"> WLAN </td>
	<td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot</td>
   <tr>
	<td class="col_2">Bluetooth </td>
	<td>v4.2, A2DP, LE</td>
  </tr>
   <tr>
	<td class="col_2">GPS</td>
	<td>Yes, with A-GPS, GLONASS
</td>	
  </tr>
   <tr>
	<td class="col_2">NFC</td>
	<td>Yes (Apple Pay only)</td>	
  </tr>
 <tr>
	<td class="col_2">Radio</td>
	<td>No</td>	
  </tr>
  
  <tr>
  <td class="col_2">USB</td>
	<td>v2.0, reversible connector </td>
  </tr>
 <tr>
	<td rowspan="5" class="col_1"> FEATURES </td>
	<td class="col_2"> Sensors</td>
	<td>Fingerprint, accelerometer, gyro, proximity, compass, barometer</td>
   <tr>
	<td class="col_2"> Messaging </td>
	<td>iMessage, SMS (threaded view), MMS, Email, Push Email</td>
  </tr>
   <tr>
	<td class="col_2">Browser</td>
	<td>HTML5 (Safari)</td>	
  </tr>
   <tr>
	<td class="col_2">Java</td>
	<td>No</td>	
  </tr> 
  <tr>
  <td>     </td>
	<td>- Siri natural language commands and dictation<br>
- iCloud cloud service<br>
- MP3/WAV/AAX+/AIFF/Apple Lossless player<br>
- MP4/H.264 player<br>
- Audio/video/photo editor<br>
- Document editor </td>

<tr>
	<td rowspan="3" class="col_1"> BATTERY</td>
	<td>     </td>
	<td>Non-removable Li-Ion 1960 mAh battery (7.45 Wh) </td>
  </tr>
   <tr>
	<td class="col_2"> TalkTime</td>
	<td>Up to 14 h (3G)</td>
  </tr>
   <tr>
	<td class="col_2">Music play</td>
	<td> Up to 40 h</td>
  </tr>
  
  <tr>
	<td rowspan="4" class="col_1"> MISC</td>
	<td class="col_2"> Colors </td>
	<td> Jet Black, Black, Silver, Gold, Rose Gold </td>
  </tr>
   <tr>
	<td class="col_2"> SAR US</td>
	<td>1.19 W/kg (head)     1.19 W/kg (body)</td>
  </tr>
   <tr>
	<td class="col_2"> SAR EU</td>
	<td> 1.38 W/kg (head)     1.34 W/kg (body)  </td>
  </tr>
  <tr>
  <td class="col_2">Price Group</td>
	<td>9/10</td>
  </tr>
  
   <tr>
	<td rowspan="6" class="col_1"> TESTS </td>
	<td class="col_2"> PERFORMANCE </td>
	<td	Basemark OS II 2.0: 3416</td>
   <tr>
	<td class="col_2">Display </td>
	<td>Contrast ratio: 1603:1 (nominal), 3.964 (sunlight)</td>
  </tr>
   <tr>
	<td class="col_2">Camera</td>
	<td>Photo / Video</td>	
  </tr>
   <tr>
	<td class="col_2">Loudspeaker</td>
	<td>Voice 67dB / Noise 73dB / Ring 75dB</td>	
  </tr>
 <tr>
	<td class="col_2">Audio quality</td>
	<td>Noise -92.4dB / Crosstalk -80.9dB</td>	
  </tr>
  
  <tr>
  <td class="col_2">Battery life</td>
	<td>Endurance rating 61h </td>
  </tr>
 </table>
 
 
 </div>   <!-- table image-->
 </div>
</main> <!-- wrapper-->
</body>
</html>
 
  
