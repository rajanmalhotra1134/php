<?php
		// echo "done";exit;
	if(isset($_FILES['img']))
		{
			$name= $_FILES['img']['name'];
			$type= $_FILES['img']['type'];
			$tmp= $_FILES['img']['tmp_name'];
			$type= explode("/",$type);
			$type= $type[1];

			if($type== "jpg" || $type== "gif" || $type== "jpeg" || $type== "png")
				{
					$filename = uniqid("img",rand());
					$filename = $filename.".".$type;
					// echo "done";exit;
					$res=move_uploaded_file($tmp,"upload/".$filename);
						if($res)
							{
								echo "Image Uploaded.";
							}else{
								echo "Error while image uploading";
							}
				}else{
					echo "Please upload Image";
				}

		}


?>