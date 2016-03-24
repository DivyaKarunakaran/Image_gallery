
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Image Gallery</title>
		<!-- Meta info begin-->
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="" name="keywords">
		<meta content="" name="description">
		<meta content="index, follow" name="robots"><!-- Meta info end-->
		<link href="img/favicon.ico" rel="shortcut icon"><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
		<style>
		#mywrapper { width:100%; height:100%; position:absolute; top:0; z-index:4;  } 
		#container { width:870px; margin: 0 auto; padding: 0;font-family:'Open Sans','Lucida Sans Unicode','Lucida Grande',sans-serif; }
		.mytitle { background: #DC4000; padding: 10px 10px 11px 14px; margin: 6px 10px 18px 10px;color:white; }
		#main { background: #FFF; margin-bottom: 20px; padding: 20px 15px 35px; }
		.myimage img { padding: 6px; margin-bottom: 5px; border: 1px solid #DFDFDF; -moz-border-radius: 4px; -webkit-border-radius: 4px;  box-shadow:0 1px 6px rgba(102, 102, 102, 0.4); -moz-box-shadow:0 1px 6px rgba(102, 102, 102, 0.4); -webkit-box-shadow:0 1px 6px rgba(102, 102, 102, 0.4);  }
		.myimage a:hover img {  border: 1px solid #252525;  }
		.image_align { width: 146px; margin: 0 10px; float:left;}</style>
		<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
		<script type="text/javascript">
		Shadowbox.init();
		</script>
	</head>
	<body>
  
		<div><!-- Container begin -->
			<div id="container">
            <!-- Header begin -->
				<!-- Header end --><!-- Main begin -->
				<div id="main">
                 <div align="right">
                   <a href="upload_gallery.php"><input style="background-color:rgba(169,47,0,1.00);color:rgba(255,255,255,1.00)" type="button" name="button" id="button" value="Manage Images" /></a><a href="logout.php"><input style="background-color:rgba(169,47,0,1.00);color:rgba(255,255,255,1.00)" type="button" name="button" id="button" value="Logout" /></a>
                 </div>
					<div class="mytitle">
                   
					  <h1 class="replace"> Image Gallery</h1>
                     
                     
					</div>
                   
					<div>
											
						<?php
		  
		  $files = glob("images/gallery/*.*");
for ($i=0; $i<count($files); $i++)
{
	$num = $files[$i];

	
	echo '<div class="image_align">
							<div class="myimage"><a href="'.$num.'" rel="shadowbox"><img alt="placeholder" height="98" src="'.$num.'" width="130"> </a></div>
						</div>';
}
?>
<div class="clear"></div>
					
				</div>			
		</div>
	</body>
</html> 