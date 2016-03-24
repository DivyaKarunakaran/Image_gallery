
<?php 
error_reporting( error_reporting() & ~E_NOTICE ); 

if (ISSET($_POST['mysubmit'])) {
	
	if (($_FILES["img_upload"]["type"] == "image/jpeg" || $_FILES["img_upload"]["type"] == "image/pjpeg" || $_FILES["img_upload"]["type"] == "image/jpg" || $_FILES["img_upload"]["type"] == "image/pjpg" || $_FILES["img_upload"]["type"] == "image/gif" || $_FILES["img_upload"]["type"] == "image/x-png") && ($_FILES["img_upload"]["size"] < 1000000))
	{  
		$max_upload_width = 2592;
		$max_upload_height = 1944;
		  
		if(isset($_REQUEST['max_img_width']) and $_REQUEST['max_img_width']!='' and $_REQUEST['max_img_width']<=$max_upload_width){
			$max_upload_width = $_REQUEST['max_img_width'];
			
		}    
		if(isset($_REQUEST['max_img_height']) and $_REQUEST['max_img_height']!='' and $_REQUEST['max_img_height']<=$max_upload_height){
			$max_upload_height = $_REQUEST['max_img_height'];
		}	
		
		if($_FILES["img_upload"]["type"] == "image/jpeg" || $_FILES["img_upload"]["type"] == "image/pjpeg" || $_FILES["img_upload"]["type"] == "image/jpg" || $_FILES["img_upload"]["type"] == "image/pjpg"){	
			$image_source = imagecreatefromjpeg($_FILES["img_upload"]["tmp_name"]);
			
		}		
		
		if($_FILES["img_upload"]["type"] == "image/gif"){	
			$image_source = imagecreatefromgif($_FILES["img_upload"]["tmp_name"]);
			
		}	
	
		if($_FILES["img_upload"]["type"] == "image/x-png"){
			$image_source = imagecreatefrompng($_FILES["img_upload"]["tmp_name"]);
			
		}
		
		$upload_original = move_uploaded_file($_FILES["img_upload"]['tmp_name'], "images/gallery/LG-".$_FILES["img_upload"]["name"]);
		
		if ($upload_original)
		{
		echo "Upload Successful!<br/>";
		}
		
		
		imagedestroy($image_source);		
	}
	else{
		
	}
	}	

?>
<div align="left">
                   <a href="index.php"><input style="background-color:rgba(169,47,0,1.00);color:rgba(255,255,255,1.00)" type="button" name="button" id="button" value="View Images" /></a>
                 </a><a href="logout.php"><input style="background-color:rgba(169,47,0,1.00);color:rgba(255,255,255,1.00)" type="button" name="button" id="button" value="Logout" /></a></div>
<title>Manage Photos</title>

<form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" enctype="multipart/form-data">
	
	<p>
	  <label>Maximum 1MB. Accepted Formats: jpg, gif and png:</label>
  </p>
	<p><br />
	  <input name="img_upload" type="file" id="img_upload" size="40" />
	  <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />	     
	  
	  <input style="display:none;" name="max_img_width" type="visible" value="" size="4">          
	  
	  <input style="display:none;" name="max_img_height" type="visible" value="" size="4">      
	  <input name="tmp_name" type="hidden" value="myfile.jpg" >   	  
	  
	  <input type="submit" name="mysubmit" value="Submit">
  </p>
  <p>&nbsp;</p>

</form>
<?php 
$dir = dirname(__FILENAME__)."/images/gallery" ;
if ($_POST['mysubmit2']) {
foreach ($_POST["filenames"] as $filename) {
echo $filename;

$newdir = getcwd()."\images\gallery\\".$filename;
if($newdir)
unlink($newdir);
}
}
       
		$dir =  getcwd()."\images\gallery" ; 
		
		?>

<form name="mydelete" method="post" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" >		

<?php

$files1 = scandir($dir);
foreach($files1 as $file){
if(strlen($file) >=3){

$foil = $file;

if ($foil==true){
echo '<input type="checkbox" name="filenames[]" value="'.$foil.'" />';


echo "<img width='150' height='120' src='images/gallery/$file' /><br/>";

}
}
}?>
<input type="submit" name="mysubmit2" value="Delete">
</form>

<?php //} ?>
