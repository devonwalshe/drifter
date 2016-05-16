<?
	
/*
 * Project:     YAPPA : Yet Another PHP Photo Album
 * Author:      Federico Feroldi <pix@pixzone.com>
 * Copyright:   2001 Federico Feroldi
 * $Header: /cvsroot/yappa/yappa/index.php,v 1.17 2002/04/23 16:09:56 pixzone Exp $
 *              

 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.

 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * You may contact the author of YAPPA by e-mail at:
 * pix@pixzone.com
 *
 * The latest version of YAPPA can be obtained from:
 * http://www.pixzone.com/dev/
 *
 */


include_once("main.php");


?>


<!-- #### HTML starts here #### -->
<html>

<head>
<title>
<? print $config["title"]; ?>
</title>

<link rel=stylesheet type="text/css" href="default.css">
	
		<csactiondict>
			<!-- <script type="text/javascript">
var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		over_contacts = newImage(/*URL*/'Layout/nav/images/news-over.gif');
		over_link = newImage(/*URL*/'Layout/nav/images/pictures-over.gif');
		over_news = newImage(/*URL*/'Layout/nav/images/contacts-over.gif');
		over_portfolio = newImage(/*URL*/'Layout/nav/images/portfolio-over.gif');
		over_link2 = newImage(/*URL*/'Layout/nav/images/link-over.gif');
		over_video = newImage(/*URL*/'Layout/nav/images/video-over.gif');
		over_about = newImage(/*URL*/'Layout/nav/images/about-over.gif');
		over_previouspage = newimage(/*URL*/'Layout/nav/images/previouspage-over.gif');
		over_previousimage = newimage(/*URL*/'Layout/nav/images/previousimage-over.gif');
		over_nextpage = newimage(/*URL*/'Layout/nav/images/nextpage-over.gif');
		over_nextimage = newimage(/*URL*/'Layout/nav/images/nextimage-over.gif');
		
		preloadFlag = true;
	}
}

// </script><SCRIPT TYPE="text/javascript">


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

// 
</SCRIPT>
		</csactiondict> -->
</head>

<body onload="preloadImages();" topmargin="0" leftmargin="0" bgcolor="#330000">
<div align="center">
		<a href="../"><img src="../Layout/nav/filigreetitle.gif" alt="" height="86" width="479" border="0"></a><br>
			<table width="90%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/about-over.gif');return true" onmouseout="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/about.gif');return true" href="../about.html"><img src='../Layout/nav/images/about.gif' alt="" name="about" border="0"></a></div>
					</td>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'contacts',/*URL*/'../Layout/nav/images/news-over.gif');return true" onmouseout="changeImages( /*CMP*/'contacts',/*URL*/'../Layout/nav/images/news.gif');return true" href="../news.html"><img src="../Layout/nav/images/news.gif" alt="" name="contacts" height="27" width="73" border="0"></a></div>
					</td>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'link',/*URL*/'../Layout/nav/images/pictures-over.gif');return true" onmouseout="changeImages( /*CMP*/'link',/*URL*/'../Layout/nav/images/pictures.gif');return true" href="../pictures"><img src="../Layout/nav/images/pictures.gif" alt="" name="link" height="27" width="96" border="0"></a></div>
					</td>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'news',/*URL*/'../Layout/nav/images/contacts-over.gif');return true" onmouseout="changeImages( /*CMP*/'news',/*URL*/'../Layout/nav/images/contacts.gif');return true" href="../contacts.html"><img src="../Layout/nav/images/contacts.gif" alt="" name="news" height="28" width="107" border="0"></a></div>
					</td>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'portfolio',/*URL*/'../Layout/nav/images/portfolio-over.gif');return true" onmouseout="changeImages( /*CMP*/'portfolio',/*URL*/'../Layout/nav/images/portfolio.gif');return true" href="../folio"><img src="../Layout/nav/images/portfolio.gif" alt="" name="portfolio" height="33" width="103" border="0"></a></div>
					</td>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'link2',/*URL*/'../Layout/nav/images/link-over.gif');return true" onmouseout="changeImages( /*CMP*/'link2',/*URL*/'../Layout/nav/images/link.gif');return true" href="../links.html"><img src="../Layout/nav/images/link.gif" alt="" name="link2" height="30" width="74" border="0"></a></div>
					</td>
					<td>
						<div align="center">
							<a onmouseover="changeImages( /*CMP*/'video',/*URL*/'../Layout/nav/images/video-over.gif');return true" onmouseout="changeImages( /*CMP*/'video',/*URL*/'../Layout/nav/images/video.gif');return true" href="../video"><img src="../Layout/nav/images/video.gif" alt="" name="video" height="30" width="74" border="0"></a></div>
					</td>
				</tr>
			</table>
			<hr width="90%" color="#666600" noshade>
			</table>
		</div>

<table cellspacing="0" cellpadding="5" border="0" align="Center">
	<tr class="menubar_cell" valign="bottom"><td>
		<font size=6 class="text_title">
			<? print $config["title"]; ?>


		</font>
		<font class="text_albumpath">
 : <a href="http://www.drifter.ca">Home</a> /
<? 
foreach($page["album_path"] as $album_path_item) {
?><a href="<? print $album_path_item["link"] ?>"><? print $album_path_item["name"] ?></a> / <? 
}
?>
</font>
</td>
</tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" align="center">
<tr valign="top">



<? 
if($page["mode"] == "album") {
?>


<td class="menubar_cell">
<table width="100%" border="0" cellspacing="0" cellpadding="3" class="subalbums_bar">
<? }
    if(count($page["subalbums"]) > 0) {
        $album_count = 0;
        foreach($page["subalbums"] as $album) { 
?>


<tr class="album_cell_<? print ($album_count & 1) == 0 ? 'a' : 'b' ?>
">
<td>
<a href="
<? print $album["url"] ?>
"> 

<img src="icons/album.png" border="0" width="24" height="24"></a></td>
<td><a href="<? print $album["url"] ?>"><i><? print
$album["title"] ? $album["title"] : $album["name"] ?></i></a><br>
<font class="text_album_nav_info"><? print $album["images_count"] ?> images
<? if($album["subalbums_count"] > 0) { ?>, <? print $album["subalbums_count"] ?> albums</font><? } ?></td>
</tr>
<?
        $album_count++;
    }
}
?>
</table>
</td><td>
<?
	if($page["thumbnails_tot"] > 0) {
?>
<!-- #### thumbnails/ #### -->
<table cellspacing="0" cellpadding="0" width="<? print $page["thumb_table_width"]; ?>" >
<tr><td align="center" class="thumbnail_cell" colspan="<? print $config["thumbs_per_row"]; ?>">
<table bordercolor="#666600" border="1" cellspacing="4" cellpadding="3" width="<? print $page["thumb_table_width"]; ?>" > <tr>
<td align="center" class="thumbnail_cell" colspan="<? print $config["thumbs_per_row"]; ?>">
<font class="text_album_title"><? print $page["album_title"] ? $page["album_title"] : $page["album_name"]; ?></font>
<font class="text_album_info"><br>
[
<? print $page["album_images"]; ?> images,
<? print $page["thumb_max_page"]; ?> pages
<? if($page["album_hits"] > 1) { ?>, <? print $page["album_hits"]; ?> hits<? } ?>
]
</font>
<br>
<? if($page["album_comment"]) { ?>

<font class="text_album_comment">

<? print $page["album_comment"] ?>

</font><br><? } ?>
</td>
</tr>
<!-- next/prev page links - start --><p>
<!--<table width="100% cellspacing="0" cellpadiing="0" border="0"> -->
<tr>
<td width="30%" align="left"><? 
    if($page["navlink_previous"]) {
?>
 <font class="text_navlink"><a href="<? print $page["navlink_previous"]; ?>">&lt; previous page</a></font>
 <!--<a onmouseover="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/previouspage-over.gif');return true" onmouseout="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/previouspage.gif');return true" href="<? print $page["navlink_previous"]; ?>"><img src='../Layout/nav/images/previouspage.gif' alt="" name="about" border="0"></a> -->

 <?    
    }
?></td>
<td width="40%" align="center">
<table border="0" cellspacing="2" cellpadding="0"><tr>
<td><? if($page["navlink_back"]) { ?>
<font class="text_navlink"><a href="<? print $page["navlink_back"]; ?>">&lt;&lt;</a>&nbsp;</font>
<? } ?></td>
<?        
	foreach($page["navlinks"] as $navlink) {
?><td><font class="text_navlink"><?
		if($navlink["selected"]) {
            print "<b><u>" . $navlink["page"] . "</u></b>&nbsp;";
		} else {
?><a href="<? print $navlink["link"]; ?>"><? print $navlink["page"]; ?></a>&nbsp;<?
		}
?></font></td><?
	}
?>
<td><? if($page["navlink_forw"]) { ?>
<font class="text_navlink"><a href="<? print $page["navlink_forw"]; ?>">&gt;&gt;</a></font>
<? } ?></td>
</tr></table>


</td>
<td width="30%" align="right"><? 
    if($page["navlink_next"]) {
?>

 <font class="text_navlink"><a href="<? print $page["navlink_next"]; ?>">next page &gt;</a></font> 
<!-- <a onmouseover="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/nextpage-over.gif');return true" onmouseout="changeImages( /*CMP*/'about',/*URL*/'../Layout/nav/images/nextpage.gif');return true" href="<? print $page["navlink_next"]; ?>"><img src='../Layout/nav/images/nextpage.gif' alt="" name="about" border="0"></a> -->

<?
   
    }
?></td>
</tr></table>
<!-- next/prev page links - end -->


</td></tr>
<?
    $thumb_count = 0;        
	foreach($page["thumbnails"] as $thumb) {
        if(($thumb_count % $config["thumbs_per_row"]) == 0) {
            print "<tr>";
        }
?>
<td align="center" class="thumbnail_cell" width="<? print $page["thumbnail_cell_percentwidth"]; ?>%">
<table border="0" cellspacing="25" cellpadding="0" ><tr>
<td align="center">

			<table border="0" cellspacing="0" cellpadding="0" align="center">
			<tr height="19">
				<td width="20" height="19"><img src="../Layout/photoborder/tl.gif" alt="" border="0"></td>
				<td height="19" background="../Layout/photoborder/t.gif"></td>
				<td width="21" height="19"><img src="../Layout/photoborder/tr.gif" alt="" border="0"></td>
			</tr>
			<tr width="20">
				<td width="20" height="100%" background="../Layout/photoborder/l.gif"></td>
				<td  background="../layout/photoborder/bg.gif">


<a href="<? print $thumb["link"]; ?>"><img src="<? print $thumb["src"]; ?>" <? print $thumb["size_html"]; ?>" alt="<? print
$thumb["alt"]; ?>" border="0"></a></td>
				<td width="21" height="100%" background="../Layout/photoborder/r.gif"></td>
			</tr>
			<tr height="22">
				<td width="20" height="22"><img src="../Layout/photoborder/bl.gif" alt="" border="0"></td>
				<td  height="22" background="../Layout/photoborder/b.gif"></td>
				<td width="21" height="22"><img src="../Layout/photoborder/br.gif" alt="" border="0"></td>
			</tr>
		</table>
<br><a class="link_image" href="<? print $thumb["link"]; ?>"><? print $thumb["alt"]; ?></a>

<br><font class="text_image_caption"><? print $thumb["caption"]; ?></font></td>
</tr></table>

<?/*<? if($thumb["caption"]) { ?>
<table border="0" cellpadding="0" cellwidth="0" width="<? print $config["thumb_width"]; ?>"><tr>
<td><font class="text_image_caption"><? print $thumb["caption"]; ?></font></td>
</tr></table>
<? } ?>*/?>


</td>
<?
        $thumb_count++;    
	}
?>


</table>


<!-- #### /thumbnails #### -->
<?
	}
   /*if(count($page["album_path"]) == 1) {
        include($config["news_filename"]);
    }*/
// }
?>


<?
if($page["mode"] == "image") {
?>
<!-- #### image/ #### -->
<table bordercolor="#666600" width="80%" border="1" cellspacing="4" cellpadding="3" align="center" height="80">
			<tr>
				<td colspan="4"><center>
<font color="#666600" size="6"><? print $page["image_name"]; ?></font><br>
<font color="#666600" size="3"><? print $page["image_info"]["caption"]; ?></font></center>
<font color="#666600" size="2"><center> 
<?
    for($i = 0; $i < count($page["info_line"]); $i++) {
        print $page["info_line"][$i]["key"] . ": " . $page["info_line"][$i]["value"];
        if($i < (count($page["info_line"]) - 1)) {
            print " | ";
        }
    }
?></center>
</font></td>
			</tr>
			<tr>
				<td><font size="3" width="25%" align="left">
<? if($page["prev"]) { ?>
<a class="bold_link" href="<? print $page["prev"]["link"]; ?>">&lt; previous image</a>
<? } ?></font></td>
				<td align="center" width="25%"><font size="3"><a class="bold_link" href="<? print $page["page_link"]; ?>"><b>show thumbnails</b></a></font></td>
				<td align="center" width="25%"><font size="3" color="#666600"><b>
image size: </b></font><font size="2">
<?
foreach($page["resize_options"] as $resize_option) { 
    if($resize_option["selected"]) { 
?>
<b>[<? print $resize_option["geometry"] ?>]</b>
<? 
    } else { 
?>
<a class="bold_link" href="<? print $resize_option["link"]; ?>"><? print $resize_option["geometry"]; ?></a>
<? 
    } 
} 
?>
</font></td>
				<td align="right" width="25%"><font size="3"> <? if($page["next"]) { ?>
<a class="bold_link" href="<? print $page["next"]["link"]; ?> ">next image &gt;</a>
<? } ?>
</font></td>
			</tr>
		</table>

<!-- <table border="0" cellspacing="0" cellpadding="0" class="image_cell" align=center><tr><td>
<table  border="1" cellspacing="3" cellpadding="5">
<tr>
<td class="imagemenu_cell">
<font size="3">
<? if($page["prev"]) { ?>
<a class="bold_link" href="<? print $page["prev"]["link"]; ?>">&lt; previous image</a>
<? } ?>
&nbsp;
<? if($page["next"]) { ?>
<a class="bold_link" href="<? print $page["next"]["link"]; ?> ">next image &gt;</a>
<? } ?>
</font>
</td>
<td class="imagemenu_cell">
<font size="1">
image size:
<?
foreach($page["resize_options"] as $resize_option) { 
    if($resize_option["selected"]) { 
?>
<b>[<? print $resize_option["geometry"] ?>]</b>
<? 
    } else { 
?>
<a class="bold_link" href="<? print $resize_option["link"]; ?>"><? print $resize_option["geometry"]; ?></a>
<? 
    } 
} 
?>
</font>
</td>
<td class="imagemenu_cell">
<font size="2"><a class="bold_link" href="<? print $page["page_link"]; ?>">show thumbnails</a></font>
</td>
</tr></table>
</td></tr></table>


<p>
<table cellspacing="0" cellpadding="4" class="image_cell" border="0" align="center">
<tr><td>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
<tr><td><center>
<font color="#666600" size="4"><? print $page["image_name"]; ?></font><br>
<font color="#666600" size="2"><? print $page["image_info"]["caption"]; ?></font></center>
</td></tr>
<tr><td><font color="#666600" size="1"><center> 
<?
    for($i = 0; $i < count($page["info_line"]); $i++) {
        print $page["info_line"][$i]["key"] . ": " . $page["info_line"][$i]["value"];
        if($i < (count($page["info_line"]) - 1)) {
            print " | ";
        }
    }
?></center>
</font>
</td></tr>
</table>
</td></tr> -->

<table width="100%" border="0" cellspacing="0" cellpadding="1"> 

	<tr><td align="center"><table  border="0" cellspacing="0" cellpadding="0" align="center">
			<tr height="19">
				<td width="20" height="19"><img src="../Layout/photoborder/tl.gif" alt="" border="0"></td>
				<td height="19" background="../Layout/photoborder/t.gif"></td>
				<td width="21" height="19"><img src="../Layout/photoborder/tr.gif" alt="" border="0"></td>
			</tr>
			<tr width="20">
				<td width="20" height="100%" background="../Layout/photoborder/l.gif"></td>
				<td background="../layout/photoborder/bg.gif"><img src="<? print $page["image_src"]; ?>"></td>
				<td width="21" height="100%" background="../Layout/photoborder/r.gif"></td>
			</tr>
			<tr height="22">
				<td width="20" height="22"><img src="../Layout/photoborder/bl.gif" alt="" border="0"></td>
				<td  height="22" background="../Layout/photoborder/b.gif"></td>
				<td width="21" height="22"><img src="../Layout/photoborder/br.gif" alt="" border="0"></td>
			</tr>
		</table>
				

</td>		
</tr></table>


<br>


<?
if(is_array($exif = $page["image_info"]["exif"])) {
?>


<table border="0" cellspacing="0" cellpadding="2">
<tr bgcolor="#CCCCCC"><td colspan="2"><font size="3">EXIF data</font></td></tr>

<?
    $row = 0;
    foreach(array( "CameraModel", "DateTime", "Width", "Height", "FlashUsed", "IsColor", "FocalLength", "ExposureTime",
    "ApertureFNumber", "ISOspeed") as $k) {
        echo "<tr bgcolor=\"" . ($row ? "#DDDDDD" : "#EEEEEE") . "\"><td><font size=\"2\"><b>$k</b></font></td><td><font size=\"2\">" . $exif[$k] . "</font></td></tr>\n";
        $row = 1 - $row;
    }
?>


</table>
<?
} 
?>
<!-- #### /image #### -->
<?
}
?>


</td></tr>
</table>



</body>
</html>
<!-- $Header: /cvsroot/yappa/yappa/index.php,v 1.17 2002/04/23 16:09:56 pixzone Exp $ -->