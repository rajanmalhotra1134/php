<?php 
	if(isset($_FILES['img']))
		{
			$name= $_FILES['img']['name'];
			$type= $_FILES['img']['type'];
			$tmp= $_FILES['img']['tmp_name'];
			$type= explode("/",$type);
			$type= $type[1];
			print_r($tmp);

	// echo "sab thik hai";exit;
			if($type== "jpg" || $type=="jpeg" || $type=="gif" || $type=="png")
				{
					$filename=uniqid("img",rand());
					$filename=$filename.".".$type;
					$res= move_uploaded_file($tmp,"upload/".$filename);
						if($res)
							{
								echo "Image Uploaded.";
							}else{
								echo "Error while image uploading.";
							}
				}else{
					echo "Please Upload Image.";
				}
		}


 ?>