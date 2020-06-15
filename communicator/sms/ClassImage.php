<?php
include ('HeaderImageClass.php');
class SetAllValues
{
function getHeaderDetail()
	{
		$objHeader =new HeaderImage();
		$objHeader->set('header.jpg');
		return $objHeader;
		}
}
?>