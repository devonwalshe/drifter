<html>
<link rel=stylesheet type="text/css" href="./core-style.css">
<head>
<body bgcolor="#330000">


<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr height="100">
 	<td></td>
	<td >
	<div align="center">
	<a href="./html/news.html"">
<img src="./Layout/nav/filigreetitle.gif" alt="" height="86" width="479" border="0"></a><br>
		
		</div>
</td>
		<td ></td>
</tr>
</table>



<table width="100%" border="0" cellspacing="0" cellpadding="1"> 

	<tr><td  align="left" ></td>

	<td align="center" width="3">
		<table  border="0" cellspacing="0" cellpadding="0" align="center">
			<tr height="19">
				<td width="20" height="19"><img src="./Layout/photoborder/tl.gif" alt="" border="0"></td>
				<td height="19" background="./Layout/photoborder/t.gif"></td>
				<td width="21" height="19"><img src="./Layout/photoborder/tr.gif" alt="" border="0"></td>
			</tr>
			<tr width="20">
				<td width="20" height="100%" background="./Layout/photoborder/l.gif"></td>
				<td background="./Layout/photoborder/bg.gif">


<a href="./" border="0">
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





$dir=opendir("./photochoice/");

//This is the directory route to the folder

$directory="./photochoice/";

//This is a relative link to the directory if it is not in the same directory as the file you are displaying the images on



$pattern="/\.(gif|jpg|jpeg|png|bmp|swf)$/";

if(!$dir)

{

die("Failed to read directory");

}

$s=readdir($dir);

$count="0";

$image;

while($s)

{

if(preg_match($pattern, $s))

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


</a>

</td>
				<td width="21" height="100%" background="./Layout/photoborder/r.gif"></td>
			</tr>
			<tr height="22">
				<td width="20" height="22"><img src="./Layout/photoborder/bl.gif" alt="" border="0"></td>
				<td  height="22" background="./Layout/photoborder/b.gif"></td>
				<td width="21" height="22"><img src="./Layout/photoborder/br.gif" alt="" border="0"></td>
			</tr>
		</table>
				

</td>	<td  align="left" >	</td>
</tr></table> 


	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr height="104">
 		<td></td><td align="center">
		<a href="./html/news.html"><img src="Layout/nav/enter.gif" alt="enter"  border="0" /></a><br>
		</td>

<td ></td>
</tr>
</table>
		






</body>
</head>
</html>