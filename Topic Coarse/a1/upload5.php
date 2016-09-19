<?php 
	if(isset($_FILES['img']))
// echo "done";exit;
		{
			$name= $_FILES['img']['name'];
			$type= $_FILES['img']['type'];
			$tmp= $_FILES['img']['tmp_name'];
			$type= explode("/",$type);
			$type= $type[1];
			print_r($_FILES['img']);
			// if($type=="jpg" || $type=="jpeg" || $type=="png" || $type=="gif")
			// 	{
			// 		$filename = uniqid("img",rand());
			// 		$filename = $filename.".".$type;
			// 		$res= move_uploaded_file($tmp,"upload/".$filename);
			// 		if($res)
			// 			{
			// 				echo "Image Upload";
			// 			}else{
			// 				echo "Error while image uploaded";
			// 			}


			// 	}else{
			// 		echo "Please Upload Image";
			// 	}
		}
		else {
			echo("value is not set");
		}

 ?>