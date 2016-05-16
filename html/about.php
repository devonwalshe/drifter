<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML><link rel=stylesheet type="text/css" href="core-style.css"><HEAD><TITLE>drifter.ca</TITLE>



<META name="description" content="Drifter.ca | Devon Walshe">

<META name="keywords" content="drifter, drifter.ca, devon walshe, walshe, devon,  travel, trip, world, asia, india, middle east, sailing, about">	





<SCRIPT TYPE="text/javascript">

<!--



function newImage(arg) {

	if (document.images) {

		rslt = new Image();

		rslt.src = arg;

		return rslt;

	}

}



function changeImages() {

	if (document.images ) {

		for (var i=0; i<changeImages.arguments.length; i+=2) {

			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];

		}

	}

}



// -->

</SCRIPT>

		

		<csactiondict>

			<script type="text/javascript"><!--

var preloadFlag = false;

function preloadImages() {

	if (document.images) {

		over_about = newImage(/*URL*/'../Layout/links/images/about-over.gif');

		over_news = newImage(/*URL*/'../Layout/nav/images/news-over.gif');

		over_pictures = newImage(/*URL*/'../Layout/nav/images/pictures-over.gif');

		over_contacts = newImage(/*URL*/'../Layout/nav/images/contacts-over.gif');

		over_video = newImage(/*URL*/'../Layout/nav/images/video-over.gif');

		over_portfolio = newImage(/*URL*/'../Layout/nav/images/portfolio-over.gif');

		over_link = newImage(/*URL*/'../Layout/nav/images/link-over.gif');

		preloadFlag = true;

	}

}



// --></script>

		</csactiondict>

		</HEAD><body onload="preloadImages();" BGCOLOR="#330000">

		<div align="center">

		<a href="./news.html"><img src="../Layout/nav/filigreetitle.gif" alt="" height="86" width="479" border="0"></a><br>

			<table width="90%" border="0" cellspacing="0" cellpadding="0">

				<tr>

					<td>

						<div align="center">

							<a onmouseover="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/about-over.gif');return true" onmouseout="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/about.gif');return true" href="./about.php"><img src='../Layout/nav/images/about.gif' alt="" name="about" border="0"></a></div>

					</td>

					<td>

						<div align="center">

							<a onmouseover="changeImages( /*CMP*/'contacts',/*URL*/'../Layout/nav/images/news-over.gif');return true" onmouseout="changeImages( /*CMP*/'contacts',/*URL*/'../Layout/nav/images/news.gif');return true" href="./news.html"><img src="../Layout/nav/images/news.gif" alt="" name="contacts" height="27" width="73" border="0"></a></div>

					</td>

					<td>

						<div align="center">

							<a onmouseover="changeImages( /*CMP*/'link',/*URL*/'../Layout/nav/images/pictures-over.gif');return true" onmouseout="changeImages( /*CMP*/'link',/*URL*/'../Layout/nav/images/pictures.gif');return true" href="../pictures"><img src="../Layout/nav/images/pictures.gif" alt="" name="link" height="27" width="96" border="0"></a></div>

					</td>

					<!-- <td>

						<div align="center">

							<a onmouseover="changeImages( /*CMP*/'news',/*URL*/'../Layout/nav/images/contacts-over.gif');return true" onmouseout="changeImages( /*CMP*/'news',/*URL*/'../Layout/nav/images/contacts.gif');return true" href="./contacts.html"><img src="../Layout/nav/images/contacts.gif" alt="" name="news" height="28" width="107" border="0"></a></div>

					</td> -->

					<!-- <td>

						<div align="center">

							<a onmouseover="changeImages( /*CMP*/'portfolio',/*URL*/'../Layout/nav/images/portfolio-over.gif');return true" onmouseout="changeImages( /*CMP*/'portfolio',/*URL*/'../Layout/nav/images/portfolio.gif');return true" href="./folio"><img src="../Layout/nav/images/portfolio.gif" alt="" name="portfolio" height="33" width="103" border="0"></a></div>

					</td> -->

          <!-- <td>

            <div align="center">

              <a onmouseover="changeImages( /*CMP*/'link2',/*URL*/'../Layout/nav/images/link-over.gif');return true" onmouseout="changeImages( /*CMP*/'link2',/*URL*/'../Layout/nav/images/link.gif');return true" href="./Links.html"><img src="../Layout/nav/images/link.gif" alt="" name="link2" height="30" width="74" border="0"></a></div>

          </td> -->

				<!--	<td>

						<div align="center">

							<a onmouseover="changeImages( /*CMP*/'video',/*URL*/'../Layout/nav/images/video-over.gif');return true" onmouseout="changeImages( /*CMP*/'video',/*URL*/'../Layout/nav/images/video.gif');return true" href="./video"><img src="../Layout/nav/images/video.gif" alt="" name="video" height="30" width="74" border="0"></a></div>

					</td>                        -->

				</tr>

			</table>

			<hr  noshade  color="#666600">

		</div>					

		

		<table bordercolor= "#666600" width="80%"  border="1" cellspace="0" cellpadding="15" align="center" >

			<tr>

				<td rowspan="2" width="450" valign="top" align="center">

						<table border="0" cellspace="1" cellpadding="3"  align="left">

							<tr>

								<td valign="top">

				<?php



/*



-------------------------------------------------------------



|MD Random Image Generator                                  |



|Version 1.0.0                                              |



|This program is Copyright (c) Matthew Dingley 2003         |



|For more help or assistance go to MD Web at:               |



|www.matthewdingley.co.uk                                   |



|For information on how to install or for basic licence     |



|information, view below                                    |



|                                                           |



|This program is not to be used on a commercial site without|



|a commercial licence. Go to www.matthewdingley.co.uk for   |



|more information.                                          |



|                                                           |



|To install, just enter in the directory name that you store|



|the images in to the variable below named $dir. Upload any |



|images to that folder to have them randomly displayed.     |



|                                                           |



|You can also edit the variable $pattern if you know what   |



|you are doing.                                             |



|                                                           |



|To display the random image on your web page, you can      |



|either copy and paste all of this code into the page where |



|you want it or you can include it by putting in the        |



|following code into the page where you want the image:     |



|<?php include "image.php"; ?>                              |



-------------------------------------------------------------



*/











$dir=opendir("../Layout/redesignstuff/me/");



//This is the directory route to the folder



$directory="../Layout/redesignstuff/me/";



//This is a relative link to the directory if it is not in the same directory as the file you are displaying the images on







$pattern="\.(gif|jpg|jpeg|png|bmp|swf)$";



if(!$dir)



{



die("Failed to read directory");



}



$s=readdir($dir);



$count="0";



$image;



while($s)



{



if(ereg($pattern, $s))



{



$image[$count]=$s;



$count++;



}



$s=readdir($dir);



}



closedir($dir);







//Spit it out



$limit=count($image);



$limit--;



$randNum=rand(0,$limit);



$size=getimagesize("$directory$image[$randNum]");



echo "<img src=\"$directory$image[$randNum]\" $size[3]>";



?>

</td>

<td>

Name : Devon Walshe <br><br>

Age : 21 <br><br>

From : Vancouver, BC Canada <br><br>

Location : Edinburgh, Scotland <br><br>

				

							</td>

						</tr>

						

							<tr>

								<td colspan="2" > 	<hr  noshade  color="#666600">

								

								

								

								

								<table width="70%" align="center">
<tr><td>

								

								<br><br>

								<b>	Countries:</b> 38

								<br><br><b>Continents:</b> 5

								<br><br><b>Miles Travelled:</b> Approximately 50 000

								<br><br><b>Cities:</b> Around 42

								<br><br><b>Duration:</b> 29 months
     

								<br><br><b>Favorite Country:</b> Tibet

								<br><br><b>Favorite Food:</b> Raw cured yak leg

								<br><br><b>Giant Buddha's:</b> Too many

								<br><br><b>Most Dangerous Place:</b> Afghanistan
								
								<br><br><b>Worst Food:</b> Bangladesh

								<br><br><b>Best Transport:</b> Singapore

								<br><br><b>Hottest Place:</b> 50+ Celcius in Delhi

								<br><br><b>Coldest Place:</b> -25 Celcius at Everest Base Camp

</td></tr></table


							

								</td>

							</tr>

						

					</table>

				

				

				</td>

				<td height="200" >

				

			<center> On the 22nd of March, 2003 I flew down to Panama to catch a berth on a 34 foot catamaran that was going to sail to Tahiti. The captain ended up to be a complete maniac and the passage took over double what it should have (42 days on the open ocean wasn't fun), but I had begun a trip that was going to take far longer and take me to a variety of places. The plan was generally to travel overland and sea around the world without taking a single flight. It started with almost 9 months bumming crew rides on other peoples yacths across the south pacific, filled with lots of maritime adventures and more rum than the sun. After a short interlude in Australia I sailed with a Mr. Beek up to south east asia, where the serious overland bit begun. <br> <br> Most of what followed that seems to be a complete blur now, I was often travelling at such a pace I had little time to think about what I was doing the next day, let alone what had happened the day before. I do remember that there were repeated bouts of dysentry, a lot of haggling, a lot of time on the bus, and no shortage of laughs with the locals. You can read about it <a href="./archives/news.html">here</a>. I took a lot of photographs, which can be perused <a href="../pictures/">here</a>, and wrote updates ever little once and a while to keep everyone <a href="./news.html">updated</a>. After a manic rush to the UK to attend the 2004 Glastonbury festival and have spent a year at the University of Edinburgh at the UK. After sailing across the Atlantic to Panama in the summer of 2005, I'll have completed my goal and will be able to fly home to Vancouver.

			</center>

		

				</td>

				

			</tr>

			<tr>

				<td>

				<center><Img src="../Layout/redesignstuff/map.jpg"  height="480" width="800"></center>

				</td>

			</tr>

		</table><hr noshade color="#666600">

			<p align="center">©2005 Devon Walshe <center><img src="../Layout/redesignstuff/tedfooter.gif"></center>	



	 </body><html>

