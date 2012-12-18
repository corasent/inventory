<?php 

class Load
{
	function view($file_name, $data = NULL)
	{
		if ( is_array($data))
		{
			extract($data);
		}

		include 'views/' . $file_name;
	}
}