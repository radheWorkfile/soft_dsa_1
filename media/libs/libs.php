<?php
if(isset($_POST['submit'])){
$userphoto = $_FILES['photo5']['name'];
	if($userphoto){
		$userphoto_name =basename($userphoto);
		$new_photo_name = "demo".$userphoto_name;
		$uploadfile1 = $new_photo_name;
		move_uploaded_file($_FILES['photo5']['tmp_name'], $uploadfile1);
		echo $uploadfile1;
		
	}
}
?>
<form action="" name="frm1" method="post" enctype="multipart/form-data">
<input type="file" name="photo5" id="photo5">
<input type="submit" name="submit" value="Submit"> 
</form>
