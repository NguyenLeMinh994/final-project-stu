<?php
function catchuoi($s)
{
	if(strlen($s)>80)
		return substr($s, 0,80)."...";
	else
		return $s;
}
?>