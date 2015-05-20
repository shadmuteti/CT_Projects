<?php
Class Even
{
public $sum=0;
private $n;
public function _construct($num)
{
	$this->$n=$num;
}
public function sumdivisible()
{for($i=0;i<=$this->n; $i++)
$sum+=$i;
}
	
if($sum%2==0)
{
return true;
}
else
{
return false;
}

}
}

?>
