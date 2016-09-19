<?php 
	if(isset($_FILES['img']))
		{
			$name=$_FILES['img']['name'];
			$type=$_FILES['img']['type'];
			$tmp=$_FILES['img']['tmp_name'];
			$type=explode("/",$type);
			$type=$type[1];

			if($type=="jpg" || $type=="png" || $type=="jpeg" || $type=="gif")
				{
					$filename=uniqid("img",rand());
					$filename=$filename.".".$type;
					$res=move_uploaded_file($tmp,"upload/".$filename);
						if($res)
							{
								echo "Image Uploaded.";
							}else{
								echo "Error while Image Uploading.";
							}
				}else{
					echo "Please Upload Image";
				}
		}

 ?>