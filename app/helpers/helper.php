<?php 
	function text_shorter($text,$min,$max)
	{
		if ($text) {
			return substr($text, $min,$max);
		}
	}
 ?>