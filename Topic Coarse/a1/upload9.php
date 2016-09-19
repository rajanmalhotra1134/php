<?php 
	if(isset($_FILES['img']))
		{
			$name=$_FILES['img']['name'];
			$type=$_FILES['img']['type'];
			$tmp=$_FILES['img']['tmp_name'];
			$type=explode("/",$type);
			$type=$type[1];
			// print_r($tmp);

			if($type=="png" || $type=="gif")
				{
					$filename=uniqid("img",rand());
					$filename=$filename.".".$type;
					$res=move_uploaded_file($tmp,"upload/".$filename);
						if($res)
							{
								echo "Image Uploaded ho gayi hai.";
							}else{
								echo "kuch to kadbad hai.";
							}
				}else{
					echo "galt image pa rahe ho tusi.";
				}
		}



 ?>