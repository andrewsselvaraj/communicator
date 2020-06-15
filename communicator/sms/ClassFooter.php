<?php
class Footer
{
var $varFooter;
function setFooter($footer)
{
	$this->varFooter=$footer;
}
function getFooter()
{
	return $this->varFooter;
}
}
class SetAllFooterValues
{
function getFooterDetail()
	{
		$objFooter =new Footer();
		$objFooter->setFooter('Admin');
		return $objFooter;
		}
}
?>
