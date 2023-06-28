<?php


function scanFolder($path)
{
	$list = scandir($path);
	//print_r($list);
	//echo '</pre>';  //beautifull vyvod
	
	
	foreach ($list as $item)
	{
		if(is_file($path . '/' . $item))
		{
			echo $path . '/' .$item . ' - file<br/>';
		}
		if (is_dir($path . '/' . $item))
		{
			echo $path . '/' .$item . ' - is dir<br/>';
			if($item !== '.' && $item !== '..')
			{
				scanFolder($path . '/' . $item);
			}
		}
	}
}

