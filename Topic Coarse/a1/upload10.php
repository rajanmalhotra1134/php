<?php 
	if(isset($_FILES['img']))
		{
			$name=$_FILES['img']['name'];
			$type=$_FILES['img']['type'];
			$tmp=$_FILES['img']['tmp_name'];
			$type=explode("/",$type);
			$type=$type[1];

			if($type=="jpeg" || $type=="jpg")
				{
					$filename=uniqid("img".$type);
					$filename=$filename.".".$type;
					$res=move_uploaded_file($tmp,"upload/".$filename);
						if($res)
							{
								echo "Image Upload done";
							}else{
								echo "kuch to kadbad hai";
							}
				}else{
					echo "image sahi nahi hai";
				}
		}


 ?>